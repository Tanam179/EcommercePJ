<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Validator;

session_start();

class CategoryController extends Controller
{
    public function add_category()
    {
        return view('admin.add_category');
    }

    public function all_category()
    {
        $all_category_product = CategoryModel::all();
        // $manager_category_product = view('admin.all_category')->with('all_category_product', $all_category_product);
        return view('admin.all_category')/*->with('admin.all_category', $manager_category_product)*/    ->with('all_category_product', $all_category_product);
    }

    public function active_category($category_id)
    {
        CategoryModel::where('id', $category_id)->update(['status' => 1]);
        return redirect()->back()->with('message', 'Cập nhật hiển thị danh mục sản phẩm thành công');
    }

    public function unactive_category($category_id)
    {
        CategoryModel::where('id', $category_id)->update(['status' => 0]);
        return redirect()->back()->with('message', 'Cập nhật ẩn danh mục sản phẩm thành công');
    }


    public function save_category_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "category_product_name" => "required",
            "category_product_desc" => "required",
        ], [
            "category_product_name.required" => "(* Vui lòng nhập tên danh mục)",
            "category_product_desc.required" => "(* Vui lòng nhập mô tả danh mục)",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->getMessageBag())->withInput();/*->status(400)*/;
        }
        CategoryModel::create([
            'name' => $request->category_product_name,
            'desc' => $request->category_product_desc,
            'status' => $request->category_product_status,
        ]);

        return redirect('/all-category')->with('message', 'Thêm danh mục sản phẩm thành công');
    }

    public function edit_category_product($category_id)
    {
        $edit_category = CategoryModel::where('id', $category_id)->get();
        // $manager_category_product = view('admin.edit_category');
        return view('admin.edit_category')/*->with('admin.edit_category', $manager_category_product)*/->with('edit_category', $edit_category);
    }

    public function update_category_product(Request $request, $category_id)
    {
        CategoryModel::where('id', $category_id)->update([
            'name' => $request->category_product_name,
            'desc' => $request->category_pro
            // 'status' => $request->category_product_status,
        ]);
        return redirect('/all-category')->with('message', 'Cập nhật danh mục sản phẩm thành công');
    }

    public function delete_category_product($category_id)
    {
        CategoryModel::where('id', $category_id)->delete();
        return redirect()->back()->with('message', 'Xóa danh mục sản phẩm thành công');
    }
}

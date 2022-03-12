<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function add_product()
    {
        $all_product_cate = CategoryModel::all();
        return view('admin.add_product')->with('all_product_cate', $all_product_cate);
    }

    public function all_product()
    {
        $all_product = ProductModel::all();
        // $manager_category_product = view('admin.all_category')->with('all_category_product', $all_category_product);
        return view('admin.all_product')/*->with('admin.all_category', $manager_category_product)*/->with('all_product', $all_product);
    }

    public function active_product($product_id)
    {
        ProductModel::where('id', $product_id)->update(['status' => 1]);
        return redirect()->back()->with('message', 'Cập nhật hiển thị sản phẩm thành công');
    }

    public function unactive_product($product_id)
    {
        ProductModel::where('id', $product_id)->update(['status' => 0]);
        return redirect()->back()->with('message', 'Cập nhật ẩn sản phẩm thành công');
    }


    public function save_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "product_name" => "required",
            "product_desc" => "required",
            "product_price" => "required",
            "product_content" => "required",
            "product_img" => "required",

        ], [
            "category_product_name.required" => "(* Vui lòng nhập tên sản phẩm)",
            "category_product_desc.required" => "(* Vui lòng nhập mô tả sản phẩm)",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->getMessageBag())->withInput();/*->status(400)*/;
        }



        $get_img = $request->product_img;
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('public.upload.products', $new_img);

            ProductModel::create([
                'name' => $request->product_name,
                'desc' => $request->product_desc,
                'price' => $request->product_price,
                'content' => $request->product_content,
                'sale' => $request->product_sale,
                'best_seller' => $request->product_best_seller,
                'status' => $request->product_status,
                'cate_id' => $request->product_category_id,
                'img' => $new_img,
            ]);
        }


        return redirect('/all-category')->with('message', 'Thêm sản phẩm thành công');
    }

    public function edit_product($product_id)
    {
        $edit_product = ProductModel::where('id', $product_id)->get();
        $all_product_cate = CategoryModel::all();
        // $manager_category_product = view('admin.edit_category');
        return view('admin.edit_product')/*->with('admin.edit_category', $manager_category_product)*/->with('edit_product', $edit_product)->with('all_product_cate', $all_product_cate);
    }

    public function update_category_product(Request $request, $category_id)
    {
        ProductModel::where('id', $category_id)->update([
            'name' => $request->category_product_name,
            'desc' => $request->category_pro
            // 'status' => $request->category_product_status,
        ]);
        return redirect('/all-category')->with('message', 'Cập nhật danh mục sản phẩm thành công');
    }

    public function delete_category_product($category_id)
    {
        ProductModel::where('id', $category_id)->delete();
        return redirect()->back()->with('message', 'Xóa danh mục sản phẩm thành công');
    }
}

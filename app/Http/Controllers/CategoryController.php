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
        $manager_category_product = view('admin.all_category')->with('all_category_product', $all_category_product);
        return view('admin_layout')->with('admin.all_category', $manager_category_product);
    }

    public function save_category_product(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     "category_product_name" => "required"
        // ]);
        // if ($validator->fails()) {
        //     return back()->withErrors($validator->getMessageBag())->status(400);
        // }
        // else{
            CategoryModel::create([
                'category_name' => $request->category_product_name,
                'category_desc' => $request->category_product_desc,
                'category_status' => $request->category_product_status,
                
            ]);
            
            return redirect()->back()->with('message', 'Thêm danh mục sản phẩm thành công');
        // }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function all_category()
    {
        return view('admin.all_category');
    }

    public function add_category()
    {
        return view('admin.add_category');
    }

    public function save_category_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "category_product_name" => "required"
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->getMessageBag())->status(400);
        }
        else{
            CategoryModel::create([
                'category_name' => $request->category_product_name,
                'category_desc' => $request->category_product_desc,
                'category_status' => $request->category_product_status,
            ]);
            // Session::put('message', 'Thêm danh mục sản phẩm thành công');
        }
        
    }
}

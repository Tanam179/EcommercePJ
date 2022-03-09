<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function all_category(){
        return view('admin.all_category');
    }

    public function add_category(){
        return view('admin.add_category');
    }

    public function save_category_product(Request $request){
        CategoryModel::create([
            'category_name' => $request->category_product_name,
            'category_desc' => $request->category_product_desc,
            'category_status' => $request->category_product_status,
        ]);
    }
}

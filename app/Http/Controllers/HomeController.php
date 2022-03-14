<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all();
        $products = ProductModel::all();
        return view('pages.home')->with('categories', $categories)->with('products', $products);
    }
}

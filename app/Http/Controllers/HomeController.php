<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::where('status', 1)->get();
        $products = ProductModel::where('status', 1)->get();
        $sliders = SliderModel::where('status', 1)->get();
        $products_sale = ProductModel::where('sale', 1)->get();
        $products_best_seller = ProductModel::where('status', 1)->where('best_seller', 1)->get();
        return view('pages.home')->with('categories', $categories)->with('products', $products)->with('sliders', $sliders)->with('products_best_seller', $products_best_seller)->with('products_sale', $products_sale);
    }
}

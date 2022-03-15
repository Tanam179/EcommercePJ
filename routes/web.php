<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);

//ADMIN
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'showDashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'admin_dashboard']);


//CATEGORY
Route::get('/add-category', [CategoryController::class, 'add_category']);
Route::get('/all-category', [CategoryController::class, 'all_category']);
Route::get('/active-category/{category_id}', [CategoryController::class, 'active_category']);
Route::get('/unactive-category/{category_id}', [CategoryController::class, 'unactive_category']);
Route::post('/save-category-product', [CategoryController::class, 'save_category_product']);
Route::get('/edit-category-product/{category_id}', [CategoryController::class, 'edit_category_product']);
Route::post('/update-category-product/{category_id}', [CategoryController::class, 'update_category_product']);
Route::get('/delete-category-product/{category_id}', [CategoryController::class, 'delete_category_product']);


//PRODUCT
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);


//SLIDER
Route::get('/add-slider', [SliderController::class, 'add_slider']);
Route::get('/all-slider', [SliderController::class, 'all_slider']);
Route::get('/active-slider/{slider_id}', [SliderController::class, 'active_slider']);
Route::get('/unactive-slider/{slider_id}', [SliderController::class, 'unactive_slider']);
Route::post('/save-slider', [SliderController::class, 'save_slider']);
Route::get('/edit-slider/{slider_id}', [SliderController::class, 'edit_slider']);
Route::post('/update-slider/{slider_id}', [SliderController::class, 'update_slider']);
Route::get('/delete-slider/{slider_id}', [SliderController::class, 'delete_slider']);

//PRODUCT-DETAILS
Route::get('/product-details/{product_id}', [ProductController::class, 'product_detail']);

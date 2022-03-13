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

        // $all_product = ProductModel::all();
        $all_product = ProductModel::all();
        // $manager_category_product = view('admin.all_category')->with('all_category_product', $all_category_product);
        return view('admin.all_product', ['hasProduct' => ProductModel::exists()])/*->with('admin.all_category', $manager_category_product)*/->with('all_product', $all_product);
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
            "product_img" => "required|mimes:jpg,png,jpeg,gif,svg",
            "product_category_id" => "required",

        ], [
            "product_name.required" => "(* Vui lòng nhập tên sản phẩm)",
            "product_desc.required" => "(* Vui lòng nhập mô tả sản phẩm)",
            "product_price.required" => "(* Vui lòng nhập giá sản phẩm)",
            "product_content.required" => "(* Vui lòng nhập nội dung sản phẩm)",
            "product_img.required" => "(* Vui lòng thêm hình ảnh sản phẩm)",
            "product_category_id.required" => "(* Vui lòng chọn loại sản phẩm)",
            "product_img.mimes" => "(* Xin lỗi, định dạng này không được hỗ trợ)",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->getMessageBag())->withInput()->with('error_message', 'Có lỗi khi thêm sản phẩm, vui lòng thêm lại');/*->status(400)*/;
        }



        $get_img = $request->product_img;
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('upload/products', $new_img);

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


        return redirect('/all-product')->with('message', 'Thêm sản phẩm thành công');
    }

    public function edit_product($product_id)
    {
        $edit_product = ProductModel::where('id', $product_id)->get();
        $all_product_cate = CategoryModel::all();
        // $manager_category_product = view('admin.edit_category');
        return view('admin.edit_product')/*->with('admin.edit_category', $manager_category_product)*/->with('edit_product', $edit_product)->with('all_product_cate', $all_product_cate);
    }

    public function update_product(Request $request, $product_id)
    {
        $get_img = $request->product_img;
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('upload/products', $new_img);

            ProductModel::where('id', $product_id)->update([
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
        return redirect('/all-product')->with('message', 'Cập nhật sản phẩm thành công');
    }


    public function delete_product($product_id)
    {
        ProductModel::where('id', $product_id)->delete();
        return redirect()->back()->with('message', 'Xóa sản phẩm thành công');
    }
}

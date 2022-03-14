<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SliderController extends Controller
{
    public function add_slider()
    {
        return view('admin.add_slider');
    }

    public function all_slider()
    {

        // $all_product = ProductModel::all();
        $all_slider = SliderModel::all();
        // $manager_category_product = view('admin.all_category')->with('all_category_product', $all_category_product);
        return view('admin.all_slider', ['hasSlider' => SliderModel::exists()])->with('all_slider', $all_slider)/*->with('admin.all_category', $manager_category_product)->with('all_product', $all_product)*/;
    }

    public function active_slider($slider_id)
    {
        SliderModel::where('id', $slider_id)->update(['status' => 1]);
        return redirect()->back()->with('message', 'Cập nhật hiển thị slider thành công');
    }

    public function unactive_slider($slider_id)
    {
        SliderModel::where('id', $slider_id)->update(['status' => 0]);
        return redirect()->back()->with('message', 'Cập nhật ẩn slider thành công');
    }


    public function save_slider(Request $request)
    {
        // return dd($request->all());
        $validator = Validator::make($request->all(), [
            "slider_name" => "required",
            "slider_img" => "required|image",

        ], [
            "slider_name.required" => "(* Vui lòng nhập tên sản phẩm)",
            "slider_name.required" => "(* Vui lòng chọn ảnh sản phẩm)",
            "slider_img.mimes" => "(* Xin lỗi, định dạng này không được hỗ trợ)",
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->getMessageBag())->withInput()->with('error_message', 'Có lỗi khi thêm slider, vui lòng thêm lại');/*->status(400)*/;
        }



        $get_img = $request->slider_img;
        // return dd($get_img);
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('upload/sliders', $new_img);

            SliderModel::create([
                'name' => $request->slider_name,
                'status' => $request->slider_status,
                'img' => $new_img,
            ]);
        }


        return redirect('/all-slider')->with('message', 'Thêm ảnh slider thành công');
    }

    public function edit_slider($slider_id)
    {
        $edit_slider = SliderModel::where('id', $slider_id)->get();
        // $all_slider_cate = CategoryModel::all();
        // $manager_category_slider = view('admin.edit_category');
        return view('admin.edit_slider')/*->with('admin.edit_category', $manager_category_slider)*/->with('edit_slider', $edit_slider);
    }

    public function update_slider(Request $request, $slider_id)
    {
        $get_img = $request->slider_img;
        if ($get_img) {
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.', $get_name_img));
            $new_img = $name_img . '.' . $get_img->getClientOriginalExtension();
            $get_img->move('upload/sliders', $new_img);

            SliderModel::where('id', $slider_id)->update([
                'name' => $request->slider_name,
                'status' => $request->slider_status,
                'img' => $new_img,
            ]);
        }
        return redirect('/all-slider')->with('message', 'Cập nhật slider thành công');
    }


    public function delete_product($product_id)
    {
        SliderModel::where('id', $product_id)->delete();
        return redirect()->back()->with('message', 'Xóa sản phẩm thành công');
    }
}

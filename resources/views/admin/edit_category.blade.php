@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        {{-- @error("category_product_name") {{$mesage}}@enderror --}}
        <header class="panel-heading">
            Cập Nhật Danh Mục Sản Phẩm
        </header>
        
        <div class="panel-body">
            <div class="position-center">
                @if (session('message'))
                    <span  style="color: #12b886; font-size: 15px;">
                        {{ session()->get('message') }}
                    </span>
                @endif
                @foreach($edit_category as $edit_cate)
                <form role="form" action="{{URL::to('/update-category-product/'.$edit_cate->category_id)}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="text" value="{{$edit_cate->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    <textarea style="resize: none"  rows="10" class="form-control" name="category_product_desc" id="exampleInputPassword1" >{{$edit_cate->category_desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái danh mục</label>
                    <select name="category_product_status" class="form-control input-sm m-bot15" value="{{$edit_cate->category_status}}>
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>
                    </select>
                </div>
                <button style="width: 300px" type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
            </form>
            @endforeach
            </div>

        </div>
    </section>
</div>
@endsection
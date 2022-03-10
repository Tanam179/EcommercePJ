@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        {{-- @error("category_product_name") {{$mesage}}@enderror --}}
        
        <header class="panel-heading">
            Thêm Danh Mục Sản Phẩm
        </header>
        
        <div class="panel-body">
            <div class="position-center">
                @if (session('message'))
                    <span  style="color: #12b886; font-size: 15px;">
                        {{ session()->get('message') }}
                    </span>
                @endif
                <form  role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                    @csrf
                    
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    @error('category_product_name')
                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{$message}}</span>
                    @enderror
                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{old('category_product_name')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    @error('category_product_desc')
                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{$message}}</span>
                    @enderror
                    <textarea style="resize: none" rows="10" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{old('category_product_desc')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái danh mục</label>
                    <select name="category_product_status" class="form-control input-sm m-bot15">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>
                    </select>
                </div>
                <button style="width: 300px" type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
            </form>
            </div>

        </div>
    </section>
</div>
@endsection
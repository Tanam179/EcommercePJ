@extends('admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm Danh Mục Sản Phẩm
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="email" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    <textarea style="resize: none" rows="10" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                </div>
                <button style="width: 300px" type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
            </form>
            </div>

        </div>
    </section>
</div>
@endsection
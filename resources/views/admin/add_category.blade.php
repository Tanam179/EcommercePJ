@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <section class="panel">
            {{-- @error('category_product_name') {{$mesage}}@enderror --}}

            <header class="panel-heading text-center">
                Thêm Danh Mục Sản Phẩm
            </header>

            <div class="panel-body">
                <div class="position-center">

                    <form role="form" action="{{ URL::to('/save-category-product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (session('error_message'))
                            <div class="alert alert-danger mb-20">
                                <span style="font-size: 15px;">
                                    {{ session()->get('error_message') }}
                                </span>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            @error('category_product_name')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên danh mục" value="{{ old('category_product_name') }}">
                        </div>
                        <div class="form-group">
                            <label class="ml-3" for="exampleInputPassword1">Mô tả danh mục</label>
                            @error('category_product_desc')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <textarea style="resize: none" rows="10" class="form-control" name="category_product_desc"
                                id="exampleInputPassword1"
                                placeholder="Mô tả danh mục">{{ old('category_product_desc') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh danh mục</label>
                            @error('category_product_img')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="file" name="category_product_img" class="form-control" id="exampleInputEmail1" placeholder="Hình ảnh sản phẩm">
                            <div class="img-holder"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái danh mục</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <button style="width: 300px" type="submit" name="add_category_product" class="btn btn-info">Thêm
                            danh mục</button>
                    </form>
                </div>

            </div>
        </section>
    </div>
    <script>
        //Reset input file
        $('input[type="file"][name="category_product_img"]').val('');

        $('input[type="file"][name="category_product_img"]').on('change', function() {
            const img_path = $(this)[0].value;
            const img_holder = $('.img-holder');
            const extension =  img_path.substring(img_path.lastIndexOf('.')+ 1).toLowerCase();
            if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                if(typeof(FileReader) != 'undefined'){
                    img_holder.empty();
                    const reader = new FileReader();
                    reader.onload = function(e){
                        $('<img/>', {'src':e.target.result, 'class':'img-fluid','style': 'width: 150px; margin-bottom: 10px; margin-top: 10px'}).appendTo(img_holder);
                    }
                    img_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                }else{
                    $(img_holder).html('Định dạng này không được hỗ trợ');
                }
            }else{
                $(img_holder).empty();
            }
        })
    </script>
@endsection

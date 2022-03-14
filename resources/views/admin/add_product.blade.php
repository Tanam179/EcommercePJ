@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <section class="panel">
            {{-- @error('category_product_name') {{$mesage}}@enderror --}}

            <header class="panel-heading text-center">
                Thêm Sản Phẩm
            </header>

            <div class="panel-body">
                <div class="position-center">

                    <form role="form" action="{{ URL::to('/save-product') }}" method="POST" enctype="multipart/form-data">
                        @if (session('error_message'))
                            <div class="alert alert-danger mb-20">
                                <span style="font-size: 15px;">
                                    {{ session()->get('error_message') }}
                                </span>
                            </div>
                            
                        @endif
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            @error('product_name')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                                placeholder="Tên sản phẩm" value="{{ old('product_name') }}">
                        </div>
                        <div class="form-group">
                            <label class="ml-3" for="exampleInputPassword1">Mô tả sản phẩm</label>
                            @error('product_desc')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <textarea style="resize: none" rows="10" class="form-control" name="product_desc"
                                id="exampleInputPassword1"
                                placeholder="Mô tả sản phẩm">{{ old('product_desc') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            @error('product_price')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="number" name="product_price" class="form-control" id="exampleInputEmail1"
                                placeholder="Giá sản phẩm" value="{{ old('product_price') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung sản phẩm</label>
                            @error('product_content')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="text" name="product_content" class="form-control" id="exampleInputEmail1"
                                placeholder="Nội dung sản phẩm" value="{{ old('product_content') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            @error('product_img')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <input type="file" name="product_img" class="form-control" id="exampleInputEmail1"
                                placeholder="Hình ảnh sản phẩm" value="{{ old('product_img') }}">
                            <div class="img-holder">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Là sản phẩm đang giảm giá??</label>
                            <select name="product_sale" class="form-control input-sm m-bot15">
                                <option value="0">Không</option>
                                <option value="1">Đúng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Là sản phẩm đang bán chạy??</label>
                            <select name="product_best_seller" class="form-control input-sm m-bot15">
                                <option value="0">Không</option>
                                <option value="1">Đúng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái danh mục</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            @error('product_category_id')
                                <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                            @enderror
                            <select name="product_category_id" class="form-control input-sm m-bot15">
                                @foreach($all_product_cate as $all_pro_cate)
                                <option value="{{$all_pro_cate->id}}">{{$all_pro_cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button style="width: 300px" type="submit" name="add_product" class="btn btn-info">Thêm
                            sản phẩm</button>
                    </form>
                </div>

            </div>
        </section>
    </div>

    <script>
        //Reset input file
        $('input[type="file"][name="product_img"]').val('');

        $('input[type="file"][name="product_img"]').on('change', function() {
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

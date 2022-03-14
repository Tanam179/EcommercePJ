@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <section class="panel">
            {{-- @error('category_product_name') {{$mesage}}@enderror --}}
            <header class="panel-heading text-center">
                Cập Nhật Danh Mục Sản Phẩm
            </header>

            <div class="panel-body">
                <div class="position-center">
                    @if (session('message'))
                        <span style="color: #12b886; font-size: 15px;">
                            {{ session()->get('message') }}
                        </span>
                    @endif
                    @foreach ($edit_category as $edit_cate)
                        <form role="form" action="{{ URL::to('/update-category-product/' . $edit_cate->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" value="{{ $edit_cate->name }}" name="category_product_name"
                                    class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="category_product_desc"
                                    id="exampleInputPassword1">{{ $edit_cate->desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh danh mục</label>                               
                               <input type="file" name="category_product_img" class="form-control" id="exampleInputEmail1" placeholder="Hình ảnh danh mục">
                                <div class="preview-img" style="margin: 15px 0">
                                    <img src="/upload/categories/{{$edit_cate->img}}" width="150px"
                                    height="100px" alt="">
                                </div>
                                <div class="img-holder"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái danh mục</label>
                                <select name="category_product_status" class="form-control input-sm m-bot15"
                                    value="{{ $edit_cate->status }}">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                            <button style="width: 300px" type="submit" name="update_category_product"
                                class="btn btn-info">Cập nhật danh mục</button>
                        </form>
                    @endforeach
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
                        $('.preview-img').css("display", "none");
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

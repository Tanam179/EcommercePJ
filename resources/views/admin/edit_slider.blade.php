@extends('admin_layout')
@section('admin_content')
    <div class="col-lg-12">
        <section class="panel">
            {{-- @error('category_product_name') {{$mesage}}@enderror --}}

            <header class="panel-heading text-center">
                Cập nhật sản phẩm
            </header>

            <div class="panel-body">
                <div class="position-center">
                    @foreach ($edit_slider as $slider)
                        <form role="form" action="{{ URL::to('/update-slider/'.$slider->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                {{-- @error('product_name')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror --}}
                                <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Tên sản phẩm" value="{{ $slider->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh slider</label>
                                {{-- @error('product_content')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror --}}
                                <input type="file" name="slider_img" class="form-control" id="exampleInputEmail1"
                                    placeholder="Hình ảnh sản phẩm" value="{{ $slider->img }}">
                                <div class="preview-img" style="margin: 15px 0">
                                    <img src="/upload/sliders/{{$slider->img}}" width="150px"
                                    height="100px" alt="">
                                </div>
                                <div class="img-holder"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái slider</label>
                                <select name="slider_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                            <button style="width: 300px" type="submit" name="update_slider" class="btn btn-info">Cập nhật
                                sản phẩm</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <script>
        //Reset input file
        $('input[type="file"][name="slider_img"]').val('');

        $('input[type="file"][name="slider_img"]').on('change', function() {
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
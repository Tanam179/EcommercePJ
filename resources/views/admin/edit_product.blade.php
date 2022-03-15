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
                    @foreach ($edit_product as $product)
                        <form role="form" action="{{ URL::to('/update-product/'.$product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                @error('product_name')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Tên sản phẩm" value="{{ $product->name }}">
                            </div>
                            <div class="form-group">
                                <label class="ml-3" for="exampleInputPassword1">Mô tả sản phẩm</label>
                                @error('product_desc')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror
                                <textarea style="resize: none" rows="10" class="form-control" name="product_desc" id="exampleInputPassword1"
                                    placeholder="Mô tả sản phẩm">{{ $product->desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                @error('product_price')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror
                                <input type="number" name="product_price" class="form-control" id="exampleInputEmail1"
                                    placeholder="Giá sản phẩm" value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung sản phẩm</label>
                                @error('product_content')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror
                                <input type="text" name="product_content" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nội dung sản phẩm" value="{{ $product->content }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                @error('product_content')
                                    <span style="color: red; font-size: 15px; margin-right: 10px;">{{ $message }}</span>
                                @enderror
                                <input type="file" name="product_img" class="form-control" id="exampleInputEmail1"
                                    placeholder="Hình ảnh sản phẩm" value="{{ $product->img }}">
                                <div class="preview-img" style="margin: 15px 0">
                                    <img src="/upload/products/{{$product->img}}" width="150px"
                                    height="100px" alt="">
                                </div>
                                <div class="img-holder"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Là sản phẩm đang giảm giá??</label>
                                <select name="product_sale" class="form-control input-sm m-bot15 best-seller">
                                    <option selected value="{{$product->sale}}">
                                        <?php
                                            if($product->sale == 1){
                                                echo 'Đúng';
                                            }
                                            else{
                                                echo 'Không';
                                            }
                                        ?>
                                    </option>
                                    <option value="">---OPTIONS---</option>
                                    <option value="0">Không</option>
                                    <option value="1">Đúng</option>
                                </select>
                            </div>
                            
                            <div class="form-group seller-percent" style="display: none">
                                <label for="exampleInputPassword1">Mức giảm giá (%)</label>
                                <input type="number" name="product_sale_percent" class="form-control input-sm m-bot15" placeholder="%" id="exampleInputEmail1" value="{{$product->sale_percent}}">
                                    {{-- <option value="0">0%</option>
                                    <option value="10">10%</option>
                                    <option value="15">15%</option>
                                    <option value="20">20%</option>
                                    <option value="25">25%</option>
                                    <option value="30">30%</option>
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                    <option value="50">50%</option>
                                    <option value="55">55%</option>
                                    <option value="60">60%</option>
                                    <option value="65">65%</option>
                                    <option value="70">70%</option>
                                    <option value="75">75%</option>
                                    <option value="80">80%</option>
                                    <option value="85">85%</option>
                                    <option value="90">90%</option>
                                    <option value="95">95%</option> --}}
                                </input>
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
                                <select name="product_category_id" class="form-control input-sm m-bot15">
                                    <option selected value="{{$product->cate_id}}">{{$product->cate->name}}</option>
                                    @foreach ($all_product_cate as $all_pro_cate)
                                        <option value="{{$all_pro_cate->id}}">{{$all_pro_cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button style="width: 300px" type="submit" name="update_product" class="btn btn-info">Cập nhật
                                sản phẩm</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <script>

        const e = document.querySelector('.best-seller');
        e.addEventListener('change', function() {
            if(e.options[e.selectedIndex].value == 1){
                document.querySelector('.seller-percent').style.display = 'block';
            }
            else{
                document.querySelector('.seller-percent').style.display = 'none';
            }
        })

        window.addEventListener('load', function() {
            if(e.options[e.selectedIndex].value == 1){
                document.querySelector('.seller-percent').style.display = 'block';
            }
            else{
                document.querySelector('.seller-percent').style.display = 'none';
            }
        })

        // window.addEventListener('load', function() {
        //     // if(e.options[e.selectedIndex].value == 1){
        //     //     document.querySelector('.seller-percent').style.display = 'block';
        //     // }
        //     // else{
        //     //     document.querySelector('.seller-percent').style.display = 'none';
        //     // }
        //     document.querySelector('.input[type="file"][name="product_img"]').value =
        // })
        
        //Reset input file
        // $('input[type="file"][name="product_img"]').val('');

        // $('input[type="file"][name="product_img"]').on('change', function() {
        //     const img_path = $(this)[0].value;
        //     const img_holder = $('.img-holder');
        //     const extension =  img_path.substring(img_path.lastIndexOf('.')+ 1).toLowerCase();
        //     if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
        //         if(typeof(FileReader) != 'undefined'){
        //             img_holder.empty();
        //             const reader = new FileReader();
        //             reader.onload = function(e){
        //                 $('<img/>', {'src':e.target.result, 'class':'img-fluid','style': 'width: 150px; margin-bottom: 10px; margin-top: 10px'}).appendTo(img_holder);
        //                 $('.preview-img').css("display", "none");
        //             }
        //             img_holder.show();
        //             reader.readAsDataURL($(this)[0].files[0]);
        //         }else{
        //             $(img_holder).html('Định dạng này không được hỗ trợ');
        //         }
        //     }else{
        //         $(img_holder).empty();
        //     }
        // })
    </script>
@endsection
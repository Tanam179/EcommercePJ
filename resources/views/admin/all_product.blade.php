@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="ml-auto panel-heading">
               Danh sách sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-4 m-b-xs">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>

                </div>
                <div class="col-sm-6">
                </div>
                <div class="col-sm-2">
                    <a style="font-size: 14px; display: block" href="{{ URL::to('/add-product') }}"
                        class="btn btn-sm btn-primary"><i class="fa fa-plus" style="margin-right: 10px"
                            aria-hidden="true"></i>Thêm
                        sản phẩm</a>
                </div>
            </div>
            @if($hasProduct)
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Hình ảnh sản phẩm</th>
                            <th>Danh mục sản phẩm</th>
                            <th>Hiển thị</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (session('message'))
                            <span style="color: #12b886; font-size: 15px; display: inline-block; margin-left: 18px;">
                                {{ session()->get('message') }}
                            </span>
                        @endif
                        
                        @foreach ($all_product as $all_pro)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $all_pro->name }}</td>
                                <td><span class="text-ellipsis">{{ $all_pro->price }}</span></td>
                                <td><span class="text-ellipsis"><img src="/upload/products/{{$all_pro->img }}" width="150px" height="100px"></span></td>
                                <td><span class="text-ellipsis">{{ $all_pro->cate->name }}</span></td>
                                {{-- <td><span class="text-ellipsis">{{ $all_pro->created_at->format('d/m/Y') }}</span></td>
                                <td><span class="text-ellipsis">{{ $all_pro->updated_at->format('d/m/Y') }}</span></td> --}}
                                <td><span class="text-ellipsis">
                                        <?php
                                            if($all_pro->status == false){
                                        ?>
                                        <a style="color: #fff; width: 80px; font-size: 14px" class="btn btn-danger" href="{{ URL::to('/active-product/'.$all_pro->id) }}"><span
                                                >Ẩn</span></a>
                                        <?php
                                            }
                                        else {
                                        ?>
                                        <a style="color: #fff; width: 80px; font-size: 14px" class="btn btn-info" href="{{ URL::to('/unactive-product/'.$all_pro->id) }}"><span
                                                >Hiển thị</span></a>
                                        <?php
                                        }
                                        ?>
                                    </span></td>
                                <td style="display: flex; align-items: center ; font-size: 20px">
                                    <a href="{{ URL::to('/edit-product/' . $all_pro->id) }}"
                                        class="active" ui-toggle-class=""><i style="color: #12b886;"
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"
                                        style="margin-left: 10px"
                                        href="{{ URL::to('/delete-product/'. $all_pro->id) }}"
                                        class="active" ui-toggle-class=""><i style="color: #f03e3e;"
                                            class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <div class="box-empty" >
                    <div class="iamge-error">
                        <img src="/upload/error/boxes.png" style="display: block; margin: 50px auto" width="200px" alt="">
                    </div>
                    <h3 style="display: flex; justify-content: center; margin-bottom: 20px;">Oops! Danh sách sản phẩm trống</h3>
                    <p style="display: flex; justify-content: center; margin-bottom: 100px; font-size: 20px">Hiện chưa có dữ liệu nào, hãy &quot;thêm mới&quot; một sản phẩm</p>
                </div>
            @endif
            <footer class="panel-footer">
                {{-- <div class="row"> --}}

                {{-- <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div> --}}
                {{-- <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div> --}}
            </footer>
        </div>
    </div>
@endsection

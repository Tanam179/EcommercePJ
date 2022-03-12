@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh mục sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    
                    <a style="font-size: 14px" href="{{URL::to('/add-category')}}" class="btn btn-sm btn-primary">Thêm danh mục sản phẩm</a>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Ngày thêm</th>
                            <th>Ngày cập nhật gần đây</th>
                            <th>Trạng thái</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (session('message'))
                            <span style="color: #12b886; font-size: 15px; display: inline-block; margin-left: 18px;">
                                {{ session()->get('message') }}
                            </span>
                        @endif
                        @foreach ($all_category_product as $cate_pro)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $cate_pro->name }}</td>
                                <td><span class="text-ellipsis">{{ $cate_pro->desc }}</span></td>
                                <td><span class="text-ellipsis">{{ $cate_pro->created_at->format('d/m/Y') }}</span></td>
                                <td><span class="text-ellipsis">{{ $cate_pro->updated_at->format('d/m/Y') }}</span></td>
                                <td><span class="text-ellipsis">
                                    <?php
                                      if($cate_pro->status == false){
                                        ?>
                                          <a class="btn btn-sm btn-danger" href="{{ URL::to('/active-category/'.$cate_pro->id) }}"><span
                                                  style="color: #fff; width: 50px; display: inline-block">Ẩn</span></a>
                                        <?php
                                      }
                                      else {
                                        ?>
                                          <a class="btn btn-sm btn-primary" href="{{ URL::to('/unactive-category/'.$cate_pro->id) }}"><span
                                                  style="color: #fff; width: 50px; display: inline-block">Hiển thị</span></a>
                                        <?php
                                      }
                                      ?>
                                </span></td>
              <td style="display: flex; align-items: center ; font-size: 20px">
                <a href="{{URL::to('/edit-category-product/'.$cate_pro->id)}}" class="active" ui-toggle-class=""><i style="color: #12b886;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không?')" style="margin-left: 10px" href="{{URL::to('/delete-category-product/'.$cate_pro->id)}}" class="active" ui-toggle-class=""><i style="color: #f03e3e;" class="fa fa-trash-o" aria-hidden="true"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
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

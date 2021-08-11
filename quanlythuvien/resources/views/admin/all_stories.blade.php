@extends('admin.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Show Stories
    </div>
    <?php
       $message = Session::get('message');
          if($message){
            echo $message;
            Session::put('message',null);
          }
    ?>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Theo tên sách</option>
          <option value="1">Theo tên tác giả</option>
          <option value="2">{{ App\Http\Controllers\CategoryStories::gia_tien_theo_the_loai('phieu luu')}}</option>
          <option value="3">Theo thời gian</option>
        </select>
        <button class="btn btn-sm btn-default">Áp dụng</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
        <div class="input-group">
                        <form role ="search" method ="get" id = "searchform" action="/Ex1_Group4/quanlythuvien/admin/search">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" name="key"/>
                        </form>
                    </div>
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
            <th>Tên Sách</th>
            <th>Tên Tác Giả</th>
            <th>Thể Loại</th>
            <th style="width:30px;">Chỉnh Sửa</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_stories as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$cate_pro -> ten_sach}}</td>
            <td><span class="text-ellipsis">{{$cate_pro -> ten_tac_gia}}</span></td>
            <td><span class="text-ellipsis">{{$cate_pro -> the_loai}}</span></td>
            <td>
              <a href="{{URL::to('/edit-stories/'.$cate_pro -> ma_sach)}}" class="active stylling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có muốn xoá sách này không?')" href="{{URL::to('/delete-stories/'.$cate_pro -> ma_sach)}}" class="active stylling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
              <a href="{{URL::to('/show_review/'.$cate_pro -> ma_sach)}}" class="active stylling-edit" ui-toggle-class="">
                <i class="fa fa-eye text-success text-active"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection

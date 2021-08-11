@extends('admin.admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Các danh sách mượn
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
          <option value="2">Theo giá tiền</option>
          <option value="3">Theo thời gian</option>
        </select>
        <button class="btn btn-sm btn-default">Áp dụng</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
        <form role ="search" method ="get" id = "searchform" action="/quanlythuvien/admin/find-borrower">
                            <div class="form-group">
                              <label for="name">Username</label>
                              <input type="input" class="form-control rounded" id="name" placeholder="Search" name="key"/>
                            </div>
                        </form>
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
            <th>Tên Người Mượn</th>
            <th>Thời Gian Mượn</th>
            <th style="width:30px;">Chỉnh Sửa</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_list as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$cate_pro -> ten_sach}}</td>
            <td><span class="text-ellipsis">{{$cate_pro -> user_name}}</span></td>
            <td><span class="text-ellipsis">{{$cate_pro -> ngay_muon}}</span></td>
            <td>
              <a href="{{URL::to('/edit-list/'.$cate_pro -> ma_muon)}}" class="active stylling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              <a onclick="return confirm('Bạn có muốn xoá không?')" href="{{URL::to('/delete-list/'.$cate_pro -> ma_muon)}}" class="active stylling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
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
          <small class="text-muted inline m-t-sm m-b-sm">cho thấy 20-30 của 50 </small>
          <p>Tổng giá tiền{{ App\Http\Controllers\AdminController::gia_tien_theo_the_loai('Truyện Tranh')}}</p>
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

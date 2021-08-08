@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa sách
                        </header>
                        <div class="panel-body">
                            @foreach($edit_list as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-list/'.$edit_value->ma_muon)}}" method="post">
                                    {{csrf_field()}}
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Mượn</label>
                                    <input type="text"value="{{$edit_value->ma_muon}}"name="borrower_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Người Dùng</label>
                                    <input type="text" value="{{$edit_value->user_name}}"name="user_name"class="form-control" id="exampleInputEmail1" placeholder="Nhập tên người dùng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sách</label>
                                    <input type="text"value="{{$edit_value->ten_sach}}" name="book_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Tập</label>
                                    <input type="number" value="{{$edit_value->so_luong}}"name="so_luong"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Mượn</label>
                                    <input type="date" value="{{$edit_value->ngay_muon}}"name="ngay_muon"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Hẹn Trả </label>
                                    <input type="date" value="{{$edit_value->ngay_hen_tra}}"name="ngay_hen_tra"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Trả</label>
                                    <input type="date"name="ngay_tra" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <!--<div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block"></p>
                                </div>-->
                                <button type="submit" name="update_stories" class="btn btn-info">Update</button>
                                </form>
                            </div>
                            @endforeach
                        </div>

                    </section>

            </div>
@endsection

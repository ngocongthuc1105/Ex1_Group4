@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh sách mượn
                        </header>
                        <?php
                             $message = Session::get('message');
                             if($message){
                                echo $message;
                                Session::put('message',null);
                             }
                        ?>

                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-list')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Mượn</label>
                                    <input type="text"name="borrower_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Người Dùng</label>
                                    <input type="text" name="user_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sách</label>
                                    <input type="text" name="book_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Tập</label>
                                    <input type="number" name="so_luong"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Mượn</label>
                                    <input type="date" name="ngay_muon"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Hẹn Trả </label>
                                    <input type="date" name="ngay_hen_tra"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
                                <button type="submit" class="btn btn-info">Ghi dữ liệu</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection

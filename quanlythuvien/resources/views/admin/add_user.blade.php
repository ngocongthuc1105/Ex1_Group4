@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm người dùng
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
                                <form role="form" action="{{URL::to('/save-user')}}" method="post">
                                    {{csrf_field()}}
                                    <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Mã người dùng</label>
                                    <input type="text"name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div> -->

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên người dùng</label>
                                    <input type="text"  name="user_name"class="form-control" id="exampleInputEmail1" placeholder="Nhập tên người dùng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="user_email"class="form-control" id="exampleInputEmail1" placeholder="Nhập E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu</label>
                                    <input type="text" name="user_password"class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" name="user_phone"class="form-control" id="exampleInputEmail1" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" name="user_address"class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
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

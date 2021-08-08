@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa người dùng
                        </header>
                        <div class="panel-body">
                            @foreach($edit_user as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-user/'.$edit_value->user_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User ID</label>
                                    <input type="text"value="{{$edit_value->user_id}}"name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" value="{{$edit_value->user_name}}" name="user_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$edit_value->user_email}}"name="user_email"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" value="{{$edit_value->user_password}}"name="user_password"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" value="{{$edit_value->user_phone}}"name="user_phone"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text"value="{{$edit_value->user_address}}" name="user_address"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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

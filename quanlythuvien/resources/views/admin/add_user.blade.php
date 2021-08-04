@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Stories
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
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">User ID</label>
                                    <input type="text"name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
            
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text"  name="user_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="user_email"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="text" name="user_password"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" name="user_phone"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" name="user_address"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                               
                                <!--<div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block"></p>
                                </div>-->
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
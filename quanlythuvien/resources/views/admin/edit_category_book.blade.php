@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sách
                        </header>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_category_book as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-book/'.$edit_value ->category_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mã DDC</label>
                                    <input type="text" value="{{$edit_value->category_id}}" class="form-control" name="category_book_DDC" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{$edit_value->category_name}}" class="form-control" name="category_book_name" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                
                                <button type="submit" name="update_category_book" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
@endsection

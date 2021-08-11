@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục sách
                        </header>
                        <div class="panel-body">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message',null);
                            }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-book')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã DDC</label>
                                    <input type="text" class="form-control" name="category_book_id" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" name="category_book_name" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                
                                <button type="submit" name="add_category_book" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection

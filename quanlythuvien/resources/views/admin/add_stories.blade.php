@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sách
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
                                <form role="form" action="{{URL::to('/save-stories')}}" method="post">
                                    {{csrf_field()}}

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sách</label>
                                    <input type="text" name="stories_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tác Giả</label>
                                    <input type="text" name="stories_author"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngôn Ngữ</label>
                                    <input type="text" name="stories_language"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dịch Giả</label>
                                    <input type="text" name="stories_translator"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                <label for="exampleInputEmail1">Thể Loại</label>
                                <select class="form-control m-bot15"type="text" name="stories_category"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    <option>Truyện Tranh</option>
                                    <option>Truyện Trinh Thám</option>
                                    <option>Truyện Võ Hiệp</option>
                                    <option>Truyện Huyền Huyễn</option>
                                    <option>Truyện Ngôn Tình</option>
                                    <option>Truyện Cổ Tích</option>
                                    <option>Truyện Cười</option>


                                </select>

                               <label for="exampleInputEmail1">Danh mục</label>
                                <select class="form-control m-bot15"type="text"name="stories_ddccode" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                   
                                </select>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhà Xuất Bản</label>
                                    <input type="text" name="stories_publisher"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giới thiệu Sách</label>
                                    <textarea name="stories_review" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Tập</label>
                                    <input type="number" name="stories_amount" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Tiền</label>
                                    <input type="number" name="stories_price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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

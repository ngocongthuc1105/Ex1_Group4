@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa sách
                        </header>
                        <div class="panel-body">
                            @foreach($edit_stories as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-stories/'.$edit_value->ma_sach)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Sách</label>
                                    <input type="text"value="{{$edit_value->ma_sach}}"name="stories_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sách</label>
                                    <input type="text" value="{{$edit_value->ten_sach}}" name="stories_name"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tác Giả</label>
                                    <input type="text" value="{{$edit_value->ten_tac_gia}}"name="stories_author"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngôn Ngữ</label>
                                    <input type="text" value="{{$edit_value->ngon_ngu}}"name="stories_language"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dịch Giả</label>
                                    <input type="text" value="{{$edit_value->dich_gia}}"name="stories_translator"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <label for="exampleInputEmail1">Thể Loại</label>
                                <select class="form-control m-bot15"type="text"value="{{$edit_value->the_loai}}" name="stories_category"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    <option>Truyện Tranh</option>
                                    <option>Truyện Trinh Thám</option>
                                    <option>Truyện Võ Hiệp</option>
                                    <option>Truyện Huyền Huyễn</option>
                                    <option>Truyện Ngôn Tình</option>
                                    <option>Truyện Cổ Tích</option>
                                    <option>Truyện Cười</option>
                                </select>

                               <label for="exampleInputEmail1">Mã DDC</label>
                                <select class="form-control m-bot15"type="text"value="{{$edit_value->ma_ddc}}"name="stories_ddccode" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhà Xuất Bản</label>
                                    <input type="text" value="{{$edit_value->nxb}}"name="stories_publisher"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giới thiệu Sách</label>
                                    <textarea name="stories_review" value="{{$edit_value->gioi_thieu_sach}}"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Tập</label>
                                    <input type="number"value="{{$edit_value->so_luong}}" name="stories_amount" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Tiền</label>
                                    <input type="number"value="{{$edit_value->gia_tien}}" name="stories_price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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

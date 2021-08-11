@extends('admin.admin_layout')
@section('admin_content')
<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Nội dung tóm tắt
                        </header>
                        <div class="panel-body">
                            @foreach($show_review as $key => $review)
                            <div class="position-center">
                                <!-- <form role="form" action="{{URL::to('/update-stories/'.$review->ma_sach)}}" method="post"> -->
                                <form role="form" action="all_stories.blade.php" method="get">
                                    {{csrf_field()}}

                                <div class="form-group">
                                    <h2>{{$review->ten_sach}}</h2>
                                </div>

                                <div class="form-group">
                                    <p>{{$review->gioi_thieu_sach}}</p>
                                </div>
                                <!-- <button type="submit" name="update_stories" class="btn btn-info">Trở lại</button> -->
                                </form>
                                <a href="all_stories.blade.php">
                                    <button  class="btn btn-info">Trở lại</button>
                                </a>

                            </div>
                            @endforeach
                        </div>

                    </section>

            </div>

@endsection

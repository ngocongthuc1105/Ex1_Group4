@extends('user_layout')
@section('user_content')

                    <header>
                        <h2 class="tm-main-title">Chào mừng đến với ứng dụng của chúng tôi</h2>
                    </header>

                    <div class="input-group">
                        <form role ="search" method ="get" id = "searchform" action="{{URL::to('/search')}}">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" name="key"/>
                        </form>
                    </div>

                    <div class="tm-gallery">
                        <div class="row">

                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-01.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>

                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-02.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-04.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-07.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="public/frontend/img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                </a>
                            </figure>
                        </div>
                    </div>

                    <nav class="tm-gallery-nav">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">4</a></li>
                        </ul>
                    </nav>
                </section>

                <!-- <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>
                    </div>

                    <div class="media-body">
                        <header>
                            <h2>Need Help?</h2>
                        </header>
                        <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                        <a href="" class="tm-white-bordered-btn">Live Chat</a>
                    </div>
                </section> -->
            </div>

            <footer>
                - Designed by Tooplate
            </footer>
@endsection

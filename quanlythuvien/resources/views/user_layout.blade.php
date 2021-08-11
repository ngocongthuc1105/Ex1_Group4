<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="keywords" content=" Visitors Responsive web template,
                                    Bootstrap Web Templates,
                                    Flat Web Templates,
                                    Android Compatible web template,
                                    Smartphone Compatible web template,
                                    free webdesigns for Nokia,
                                    Samsung, LG, SonyEricsson,
                                    Motorola web design" /> -->

    <!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->

    <!-- bootstrap-css -->
    <!-- <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" > -->

    <!-- Custom CSS -->
    <!-- <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' /> -->
    <!-- <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/> -->

    <!-- font CSS -->
    <!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

    <!-- font-awesome icons -->
    <!-- <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/> -->
    <!-- <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/> -->

    <!-- calendar -->
    <!-- <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}"> -->
    <!-- //calendar -->

    <!-- //font-awesome icons -->
    <!-- <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/raphael-min.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/morris.js')}}"></script> -->
    <!--

    Template 2092 Shelf

    http://www.tooplate.com/view/2092-shelf

    -->
    <title>Thư viện tại gia</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('public/frontend/font/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/tooplate-style.css')}}">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<body>
  <div class="container">
    <header class="tm-site-header">
      <div class="" style="float: right">
          <ul>
            @csrf
            @if(Session::get('user_name') == null)
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('loginpage') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif

                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('registerpage') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{Session::get('user_name')}}
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endif

          </ul>
      </div>
    <h1 class="tm-site-name">Thư viện tại gia</h1>
    <p class="tm-site-description">Thư viện tại gia của bạn, hỗ trợ quản lý sách 1 cách tự động</p>

    <nav class="navbar navbar-expand-md tm-main-nav-container">
      <!-- <button class="navbar-toggler" type="button"
              data-toggle="collapse"
              data-target="#tmMainNav"
              aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
      </button> -->

      <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
        <ul class="navbar-nav nav-fill tm-main-nav-ul">
          <li class="nav-item"><a class="nav-link active" href="{{URL::to('/Home')}}">Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="{{URL::to('show_category')}}">Danh sách sách</a></li>
          <li class="nav-item"><a class="nav-link" href="{{URL::to('/our-team')}}">Giới thiệu về nhóm</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact-us')}}">Contact Us</a></li> -->
        </ul>
      </div>
    </nav>

            </header>

    <div class="tm-main-content">
      <section class="tm-margin-b-l">
        @yield('user_content')
      </section>
    </div>

    <!-- load JS files -->
    <script src="{{asset('public/frontend/js/jquery-1.11.3.min.js')}}"></script>         <!-- jQuery (https://jquery.com/download/) -->
    <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>                <!-- Popper (https://popper.js.org/) -->
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap (https://getbootstrap.com/) -->
    <!-- <script src="{{asset('public/backend/js/bootstrap.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/scripts.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script> -->
    <!-- <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script> -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <!-- <script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script> -->
    <!-- morris JavaScript -->
    <script>
      $(document).ready(function(){
        // Update the current year in copyright
        $('.tm-current-year').text(new Date().getFullYear());
            });
    </script>

</body>
</html>

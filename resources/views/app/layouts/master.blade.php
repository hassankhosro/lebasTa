<!DOCTYPE html>
<html lang="en">
<head>
    <title>لباستا پلتفرم اجاره لباس</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('headerStyles')
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('app/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/custom.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand font-35 rezvan" href="{{ route('home') }}">لباس<span>تا</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> منو
	      </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('*/') == 1 ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">خانه</a></li>
                    <li class="nav-item {{ request()->is('*best*') == 1 ? 'active' : '' }}"><a href="{{ route('best') }}" class="nav-link">برترین آگهی ها</a></li>
                    <li class="nav-item {{ request()->is('*ads*') == 1 ? 'active' : '' }}"><a href="{{ route('ads') }}" class="nav-link">تمام آگهی ها</a></li>
                    <li class="nav-item {{ request()->is('*blog*') == 1 ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">بلاگ</a></li>
                </ul>
            </div>
            <div class="">
              @guest
              <a href="{{ route('login') }}">
              <button type="button" class="btn btn-pink font-14">
              ورود
              </button>
              </a>
              <a href="{{ route('register') }}">
              <button type="button" class="btn btn-pink-outline font-14">
              عضویت
              </button>
            </a>
          @endguest
          @auth
          <a href="{{ route('dashboard') }}">
            <button type="button" class="btn btn-pink-outline font-14">
                ناحیه کاربری
            </button>
          </a>
            <a href="{{ route('logout') }}">
            <button type="button" class="btn btn-pink font-14">
            خروج
            </button>
          </a>
          @endauth
            </div>
        </div>
    </nav>

                @yield('content')
                    <footer class="ftco-footer ftco-bg-dark ftco-section">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4">
                                        <h2 class="ftco-heading-2">درباره لباستا</h2>
                                        <p>مجموعه لباستا در سال ۱۳۹۹ فعالیت خود را شروع کرد و در تلاش است تا محیط مناسبی را برای اجاره کردن / دادن لباس های شما فراهم کند.</p>
                                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                                          <li class="ftco-animate"><a href="#"><i class="fa fa-telegram m-2 px-1" style="font-size:30px" aria-hidden="true"></i></a></li>
                                            <li class="ftco-animate"><a href="#"><i class="fa fa-instagram m-2 px-1" style="font-size:30px" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4 ml-md-5">
                                        <h2 class="ftco-heading-2">اطلاعات</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-2 d-block">درباره ما</a></li>
                                            <li><a href="#" class="py-2 d-block">سرویس ها</a></li>
                                            <li><a href="#" class="py-2 d-block">قوانین و مقررات</a></li>
                                            <li><a href="#" class="py-2 d-block">بهترین قیمت ها</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4">
                                        <h2 class="ftco-heading-2">خدمات مشتریان</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="py-2 d-block">سوالات متداول</a></li>
                                            <li><a href="#" class="py-2 d-block">نکات اجاره کردن</a></li>
                                            <li><a href="#" class="py-2 d-block">نکات اجاره دادن</a></li>
                                            <li><a href="#" class="py-2 d-block">تماس با ما</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="ftco-footer-widget mb-4">
                                        <h2 class="ftco-heading-2">سوالی دارید؟</h2>
                                        <div class="block-23 mb-3">
                                            <ul>
                                                <li><span class="icon icon-map-marker"></span><span class="text">تهران - پاسداران - میدان هروی</span></li>
                                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">۰۲۱ ۲۲۹۳۴۳۴۳</span></a></li>
                                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@lebasta.ir</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center copyright">
                                    <p class="copyright">
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i class="icon-heart copyright" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="copyright">Colorlib</a>
                                    </p>
                                </div>
                            </div>
                            <div>
                              <a class="navbar-brand font-45 rezvan" href="index.html">لباس<span style="color: #fd7992!important;">تا</span></a>
                            </div>
                        </div>
                    </footer>



                    <!-- loader -->
                    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


                    <script src="{{ asset('app/js/jquery.min.js') }}"></script>
                    <script src="{{ asset('app/js/jquery-migrate-3.0.1.min.js') }}"></script>
                    <script src="{{ asset('app/js/popper.min.js') }}"></script>
                    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('app/js/jquery.easing.1.3.js') }}"></script>
                    <script src="{{ asset('app/js/jquery.waypoints.min.js') }}"></script>
                    <script src="{{ asset('app/js/jquery.stellar.min.js') }}"></script>
                    <script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
                    <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
                    <script src="{{ asset('app/js/aos.js') }}"></script>
                    <script src="{{ asset('app/js/jquery.animateNumber.min.js') }}"></script>
                    <script src="{{ asset('app/js/scrollax.min.js') }}"></script>
                    <script src="{{ asset('app/js/google-map.js') }}"></script>
                    <script src="{{ asset('app/js/main.js') }}"></script>

                </body>

                </html>

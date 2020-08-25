@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')
    <div class="hero-wrap" style="background-image: url('{{ asset('app/images/header.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">همین الان خیلی ساده لباستو اجاره بده / بکن</h1>
                        <p style="font-size: 21px;">لباستا پلتفرم اجاره لباس </p>
                            <div class="mr-2 text-white">
                              <a href="{{ route('ads') }}">
                                <button type="button" class="btn btn-pink">
                                میخوام اجاره کنم
                                </button>
                                </a>
                                <button type="button" class="btn btn-pink-outline">
                              میخوام اجاره بدم
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
                    <form action="#" class="request-form ftco-animate">
                        <h2>لباستو پیدا کن</h2>
                        <div class="form-group">
                            <label for="" class="label">استان</label>
                            <input type="text" class="form-control" placeholder="تهران">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">منطقه</label>
                            <input type="text" class="form-control" placeholder="۳">
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="" class="label">از قیمت</label>
                                <input type="text" class="form-control" id="book_pick_date" placeholder="۱۰۰">
                            </div>
                            <div class="form-group ml-2">
                                <label for="" class="label">تا قیمت</label>
                                <input type="text" class="form-control" id="book_off_date" placeholder="۱۰۰۰۰">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">دسته بندی</label>
                            <input type="text" class="form-control" id="time_pick" placeholder="مجلسی">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="جستجو" class="btn btn-primary py-3 px-4 rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate mb-5">
                        <form action="#" class="search-property-1">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">برخی از خدمات ما</span>
                    <h2 class="mb-2">سرویس ها</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon mx-3"><i class="fa fa-handshake-o font-37"></i></div>
                                <h3 class="heading mb-0 pl-3">لباس تو اجاره بده</h3>
                            </div>
                            <p>نگران لباس های توی کمدتون هستید؟ در سایت لباستا میتونید خیلی ساده لباس های خودتون از انواع مدل آگهی کنید و اجاره بدید و کسب درآمد کنید</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon mx-3"><i class="fa fa-retweet font-37"></i></span></div>
                                <h3 class="heading mb-0 pl-3">لباس اجاره کن</h3>
                            </div>
                            <p>مجلس دعوت شدید اما لباس مناسب ندارید؟ در سایت لباستا میتونید خیلی ساده لباس های موردنظر خودتونو از انواع مختلف جستجو و در نهایت بهترین گزینه رو برای مدتی اجاره کنید و از مهمونیتون لذت ببرید.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">آخرین آگهی ها</span>
                    <h2 class="mb-2">لباس مورد نظرتو انتخاب کن</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/1.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                    <span class="font-12">مدت</span>
                                    <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/2.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                    <span class="font-12">مدت</span>
                                    <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/3.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/4.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/5.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/6.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/7.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end rounded" style="background-image: url({{ asset('app/images/8.png') }});">
                            <div class="price-wrap d-flex">
                                <span class="rate">تومان</span> <span class="rate ml-1"> ۳۰,۰۰۰</span>
                                <p class="from-day">
                                  <span class="font-12">مدت</span>
                                  <span class="font-12"> / روزانه</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                            <span>عروسی</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">اجاره کن</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">جزئیات</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url({{ asset('app/images/header2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">نحوه کار</span>
                    <h2 class="mb-3">چجوری اجاره بکنیم / بدیم؟</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><i class="fa fa-map-marker font-45"></i></div>
                            <h3>انتخاب نزدیک ترین نقطه به شما</h3>
                            <p>با انتخاب نزدیک ترین نقطه با سرعت بیشتری متیونید به هدفتون برسید</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><i class="fa fa-hand-pointer-o font-45"></i></div>
                            <h3>انتخاب دسته بندی</h3>
                            <p>انتخاب دسته بندی مناسب یکی از مهم ترین مراحل فعالیت شما هست</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><i class="fa fa-phone font-45" aria-hidden="true"></i></div>
                            <h3>تماس با مشتری / ثبت آگهی</h3>
                            <p>به سادگی و آگهی مناسب خود را انتخاب کنید و با اجاره دهنده قرار بازدید بذارید / به سادگی آگهی خود را ثبت کنید</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><i class="fa fa-smile-o font-45" aria-hidden="true"></i>
</div>
                            <h3>لذت از انتخاب / لذت از درآمد</h3>
                            <p>معامله دو سر سود برای اجاره گیرنده و اجاره کنند</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section" style="direction: ltr;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">رضایت نامه</span>
                    <h2 class="mb-3">مشتریان راضی ما</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="d-flex flex-column justify-content-center min-height-490 pb-5 py-4 testimony-wrap text-center">
                              <div class="user-img mb-4" style="background-image: url({{ asset('app/images/profile2.png') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">من کلی لباس های بدون استفاده اما نو داشتم و تونستم با کمک سایت لباستا همشونو اجاره بدم و کلی درآمد کسب کنم</p>
                                    <p class="name">سحر ناظمی</p>
                                    <span class="position">خانه دار</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                          <div class="d-flex flex-column justify-content-center min-height-490 pb-5 py-4 testimony-wrap text-center">
                            <div class="user-img mb-4" style="background-image: url({{ asset('app/images/profile2.png') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">مدتی بود دنبال یک لباس با قیمت مناسب برای جشن عروسی خواهرم میگشتم که در لباستا پیدا کردم</p>
                                    <p class="name">نازنین ثابتی</p>
                                    <span class="position">خانه دار</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                          <div class="d-flex flex-column justify-content-center min-height-490 pb-5 py-4 testimony-wrap text-center">
                            <div class="user-img mb-4" style="background-image: url({{ asset('app/images/profile2.png') }})">
                                </div>
                                <div class="text pt-4">
                                  <p class="mb-4">من کلی لباس های بدون استفاده اما نو داشتم و تونستم با کمک سایت لباستا همشونو اجاره بدم و کلی درآمد کسب کنم</p>
                                    <p class="name">سحر ناظمی</p>
                                    <span class="position">خانه دار</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                          <div class="d-flex flex-column justify-content-center min-height-490 pb-5 py-4 testimony-wrap text-center">
                                <div class="user-img mb-4" style="background-image: url({{ asset('app/images/profile2.png') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">مدتی بود دنبال یک لباس با قیمت مناسب برای جشن عروسی خواهرم میگشتم که در لباستا پیدا کردم</p>
                                    <p class="name">نازنین ثابتی</p>
                                    <span class="position">خانه دار</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                          <div class="d-flex flex-column justify-content-center min-height-490 pb-5 py-4 testimony-wrap text-center">
                            <div class="user-img mb-4" style="background-image: url({{ asset('app/images/profile2.png') }})">
                                </div>
                                <div class="text pt-4">
                                  <p class="mb-4">من کلی لباس های بدون استفاده اما نو داشتم و تونستم با کمک سایت لباستا همشونو اجاره بدم و کلی درآمد کسب کنم</p>
                                    <p class="name">سحر ناظمی</p>
                                    <span class="position">خانه دار</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">بلاگ</span>
                    <h2>آخرین بلاگ ها در لباستا</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('app/images/blog1.png') }}');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">۱۳۹۹ خرداد</a></div>
                                <div><a href="#">ادمین</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                            <p>تکنیک هایی برای شستشوی لباس های مجلسی تا کمترین آسیب را ببینند.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('app/images/blog2.png') }}');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">۱۳۹۹ خرداد</a></div>
                                <div><a href="#">ادمین</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                            <p>تکنیک هایی برای شستشوی لباس های مجلسی تا کمترین آسیب را ببینند.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('app/images/blog2.png') }}');">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">۱۳۹۹ خرداد</a></div>
                                <div><a href="#">ادمین</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                            <p>تکنیک هایی برای شستشوی لباس های مجلسی تا کمترین آسیب را ببینند.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection
  @section('pageScripts')
  @stop

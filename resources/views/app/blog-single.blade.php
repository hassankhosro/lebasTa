@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('app/images/head4.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">تیتر وبلاگ</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 order-md-last ftco-animate">
          توضیحات
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">لباس</a>
                <a href="#" class="tag-cloud-link">ورزش</a>
                <a href="#" class="tag-cloud-link">هنر</a>
                <a href="#" class="tag-cloud-link">خرید</a>
              </div>
            </div>

            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="{{ asset('app/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4 rounded">
              </div>
              <div class="desc mx-4">
                <h3>حسن خسروجردی</h3>
                <p>مشخصات</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">۴ نظر</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('app/images/person_1.jpg') }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>حسن</h3>
                    <div class="meta">اول خرداد ۱۳۹۹</div>
                    <p>عالی</p>
                    <p><a href="#" class="reply">پاسخ</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">نطر بگذارید</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">نام *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">ایمیل *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">وبسایت</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">نظر</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="ارسال" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>دسته بندی ها</h3>
                <li><a href="#">خبری <span class="text-left">(۱۲)</span></a></li>
                <li><a href="#">لباس<span class="text-left">(۲۲)</span></a></li>
                <li><a href="#">هنر <span class="text-left">(۳۲)</span></a></li>
                <li><a href="#">ورزشی <span class="text-left">(۴۳)</span></a></li>
                <li><a href="#">خرید <span class="text-left">(۲۱)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>اخرین بلاگ ها</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img ml-4" style="background-image: url({{ asset('app/images/8.png') }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">راه اندازی سایت لباستا</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> خرداد ۱۳۹۹</a></div>
                    <div><a href="#"><span class="icon-person"></span> ادمین </a></div>
                    <div><a href="#"><span class="icon-chat"></span> ۲۰</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img ml-4" style="background-image: url({{ asset('app/images/8.png') }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">راه اندازی سایت لباستا</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> خرداد ۱۳۹۹</a></div>
                    <div><a href="#"><span class="icon-person"></span> ادمین </a></div>
                    <div><a href="#"><span class="icon-chat"></span> ۲۰</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img ml-4" style="background-image: url({{ asset('app/images/8.png') }});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">راه اندازی سایت لباستا</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> خرداد ۱۳۹۹</a></div>
                    <div><a href="#"><span class="icon-person"></span> ادمین </a></div>
                    <div><a href="#"><span class="icon-chat"></span> ۲۰</a></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->
  @endsection
  @section('pageScripts')
  @stop

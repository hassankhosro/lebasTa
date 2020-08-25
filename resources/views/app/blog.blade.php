@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('app/images/head2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">آخرین بلاگ ها</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
                <div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="{{ route('blog.show', 1) }}" class="block-20 img rounded" style="background-image: url('{{ asset('app/images/blog1.jpg') }}');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">خرداد ۱۳۹۹</a></div>
                  <div><a href="#">ادمین</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> ۳</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">چگونه لباس های مجلسی خود را بشوییم</a></h3>
                <p>در این مقاله قصد داریم طریقه شستن لباس های مجلسی را به شما آموزش دهیم تا کمترین آسیب به لباس های شما وارد شود.</p>
                <p><a href="{{ route('blog.show', 1) }}" class="btn btn-pink w-100">مشاهده</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
  @section('pageScripts')
  @stop

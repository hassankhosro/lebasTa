@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('app/images/head.jpg') }}'); background-position-y: center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">آگهی ها</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
                <div class="price-wrap d-flex">
                  <span class="rate">۲۰۰۰ تومان</span>
                  <p class="from-day">
                    <span>مدت</span>
                    <span>/ روزانه</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                <span>مجلسی</span>
                <p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>

          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
    					</div>
    				</div>
    			</div>
          <div class="col-md-4">
            <div class="car-wrap ftco-animate">
              <div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
                <div class="price-wrap d-flex">
                  <span class="rate">۲۰۰۰ تومان</span>
                  <p class="from-day">
                    <span>مدت</span>
                    <span>/ روزانه</span>
                  </p>
                </div>
              </div>
              <div class="text p-4 text-center">
                <h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
                <span>مجلسی</span>
                <p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url({{ asset('app/images/adv.png') }});">
    						<div class="price-wrap d-flex">
    							<span class="rate">۲۰۰۰ تومان</span>
    							<p class="from-day">
    								<span>مدت</span>
    								<span>/ روزانه</span>
    							</p>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="{{ route('ads.show', 1) }}">لباس مجلسی</a></h2>
    						<span>مجلسی</span>
    						<p class="d-flex mb-0 d-block"><a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black mr-1">اجاره کنید</a> <a href="{{ route('ads.show', 1) }}" class="btn btn-black btn-outline-black ml-1">مشاهده</a></p>
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

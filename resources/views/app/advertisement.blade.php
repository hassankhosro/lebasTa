@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('app/images/head2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">آگهی لباس مجلسی</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-car-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="car-details">
      				<div class="img" style="background-image: url({{ asset('app/images/single.png') }});background-size: contain!important;"></div>
      				<div class="text text-center">
      					<span class="subheading">مجلسی</span>
      					<h2>لباس مجلسی</h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-dashboard"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pr-3">
		                	تست
		                	<span>۲۰۰۰</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-car-machine"></span></div>
	              	<div class="text">
                    <h3 class="heading mb-0 pr-3">
                      تست
                      <span>۲۰۰۰</span>
                    </h3>
	                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
                    <h3 class="heading mb-0 pr-3">
		                	تست
		                	<span>۲۰۰۰</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-backpack"></span></div>
	              	<div class="text">
                    <h3 class="heading mb-0 pr-3">
                      تست
                      <span>۲۰۰۰</span>
                    </h3>
	                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
                    <h3 class="heading mb-0 pr-3">
                     تست
                     <span>۲۰۰۰</span>
                   </h3>
	                </div>
                </div>
              </div>
            </div>
          </div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">ویژگی ها</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">توضیحات</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">نظرات</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Airconditions</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Child Seat</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>GPS</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Luggage</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Music</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Seat Belt</li>
						    				<li class="remove"><span class="ion-ios-close m-2"></span>Sleeping Bed</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Water</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Bluetooth</li>
						    				<li class="remove"><span class="ion-ios-close m-2"></span>Onboard computer</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Audio input</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Long Term Trips</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Car Kit</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Remote central locking</li>
						    				<li class="check"><span class="ion-ios-checkmark m-2"></span>Climate control</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      توضیحات آگهی لباس مجلسی
						    </div>

						    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
							   			<h3 class="head">۲۳ نطر</h3>
							   			<div class="review d-flex">
									   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									   		<div class="desc">
									   			<h4>
									   				<span class="text-right pr-3">حسین خسروجردی</span>
									   				<span class="text-left">اول خرداد ۱۳۳۹</span>
									   			</h4>
									   			<p class="star">
									   				<span class="p-3">
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
								   					</span>
								   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
									   			</p>
									   			<p>عالی</p>
									   		</div>
									   	</div>
							   		</div>
							   		<div class="col-md-5">
							   			<div class="rating-wrap">
								   			<h3 class="head">رای دهید</h3>
								   			<div class="wrap">
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(98%)
								   					</span>
								   					<span>۲۰ رای</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(85%)
								   					</span>
								   					<span>۱۰ رای</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(70%)
								   					</span>
								   					<span>۵ رای</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(10%)
								   					</span>
								   					<span>۰ رای</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					<i class="ion-ios-star"></i>
									   					(0%)
								   					</span>
								   					<span>۰ رای</span>
									   			</p>
									   		</div>
								   		</div>
							   		</div>
							   	</div>
						    </div>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">انتخاب های مناسب</span>
            <h2 class="mb-2">مرتبط ترین آگهی ها</h2>
          </div>
        </div>
    		<div class="row border p-4">
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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

          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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
    	</div>
    </section>
  @endsection
  @section('pageScripts')
  @stop

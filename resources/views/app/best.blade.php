@extends('app.layouts.master')
@section('headerStyles')
@endsection
@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('app/images/head3.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate pb-5">
            <h1 class="mb-3 bread">برترین آگهی ها</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">ساعتی</th>
						        <th class="bg-dark heading">روزانه</th>
						        <th class="bg-black heading">فروش</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="">
						      	<td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
						        <td class="product-name">
						        	<a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
						        	<p class="mb-0 rated">
						        		<span>امتیاز:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
							        		<span class="per my-4"> / ساعتی</span>
							        	</h3>
							        	<span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
						        	</div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
							        		<span class="per">/ روزانه </span>
							        	</h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
						        </div>
						        </td>

						        <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
							        		<span class="per">/ همیشگی</span>
							        	</h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

                  <tr class="">
						      	<td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
						        <td class="product-name">
						        	<a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
						        	<p class="mb-0 rated">
						        		<span>امتیاز:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
							        		<span class="per my-4"> / ساعتی</span>
							        	</h3>
							        	<span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
						        	</div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
							        		<span class="per">/ روزانه </span>
							        	</h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
						        </div>
						        </td>

						        <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
						        	<div class="price-rate">
							        	<h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
							        		<span class="per">/ همیشگی</span>
							        	</h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
							        </div>
						        </td>
						      </tr><!-- END TR-->

                  <tr class="">
                    <td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
                    <td class="product-name">
                      <a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
                      <p class="mb-0 rated">
                        <span>امتیاز:</span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                      </p>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
                          <span class="per my-4"> / ساعتی</span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                      </div>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
                          <span class="per">/ روزانه </span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                    </div>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
                          <span class="per">/ همیشگی</span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
                      </div>
                    </td>
                  </tr><!-- END TR-->

                  <tr class="">
                    <td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
                    <td class="product-name">
                      <a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
                      <p class="mb-0 rated">
                        <span>امتیاز:</span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                      </p>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
                          <span class="per my-4"> / ساعتی</span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                      </div>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
                          <span class="per">/ روزانه </span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                    </div>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
                          <span class="per">/ همیشگی</span>
                        </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
                      </div>
                    </td>
                  </tr><!-- END TR-->


                  <tr class="">
                   <td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
                   <td class="product-name">
                     <a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
                     <p class="mb-0 rated">
                       <span>امتیاز:</span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                     </p>
                   </td>

                   <td class="price">
                     <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                         <span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
                         <span class="per my-4"> / ساعتی</span>
                       </h3>
                       <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                     </div>
                   </td>

                   <td class="price">
                     <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                         <span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
                         <span class="per">/ روزانه </span>
                       </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                   </div>
                   </td>

                   <td class="price">
                      <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                          <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
                         <span class="per">/ همیشگی</span>
                       </h3>
                        <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
                     </div>
                   </td>
                 </tr><!-- END TR-->


                 <tr class="">
                   <td class="car-image"><a href="{{ route('ads.show', 1) }}"><div class="img" style="background-image:url({{ asset('app/images/car-1.jpg') }});"></div></a></td>
                   <td class="product-name">
                     <a href="{{ route('ads.show', 1) }}"><h3>لباس مجلسی</h3></a>
                     <p class="mb-0 rated">
                       <span>امتیاز:</span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                       <span class="ion-ios-star"></span>
                     </p>
                   </td>

                   <td class="price">
                     <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                         <span class="num"><small class="currency my-4">تومان</small>۱۰۰۰۰</span>
                         <span class="per my-4"> / ساعتی</span>
                       </h3>
                       <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                     </div>
                   </td>

                   <td class="price">
                     <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                         <span class="num"><small class="currency my-4">تومان</small> ۲۰۰۰۰</span>
                         <span class="per">/ روزانه </span>
                       </h3>
                       <span class="subheading position-relative popover-header" style="top: 20px;">هزینه دیرکرد : ۱۰۰</span>
                   </div>
                   </td>

                   <td class="price">
                     <p class="btn-custom"><a href="#">اجاره</a></p>
                     <div class="price-rate">
                       <h3>
                         <span class="num"><small class="currency my-4">تومان</small> ۳۰۰۰۰۰</span>
                         <span class="per">/ همیشگی</span>
                       </h3>
                       <span class="subheading position-relative popover-header" style="top: 20px;">-</span>
                     </div>
                   </td>
                 </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

  @endsection
  @section('pageScripts')
  @stop

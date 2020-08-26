@extends('admin.layouts.master')
@section('headerStyles')
<style>

</style>
@endsection
@section('content')
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="x_content bs-example-popovers">
        @if(\Auth::user()->status != 1)            
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
          حساب کاربری شما تا کنون فعال نشده است. برای فعال سازی لطفا شماره تلفن همراه خود را تایید نمایید
        </div>
        @else
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
         حساب کاربری شما قبلا فعال شده است
        </div>
        @endif

    </div>
    @if(\Auth::user()->status != 1)            

    <div class="x_panel">
        <div class="x_title">
            <h2>تایید شماره تلفن همراه
            </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="input-group">
                <span class="input-group-btn">
                                  <button type="button" disabled class="btn btn-primary sent">کد تایید ارسال شده است</button>
                                  <form action="{{ route('verification.sms') }}" method="POST" id="send">
                                      @csrf
                                    </form>
                                    <button type="submit" class="btn btn-warning again d-none" form="send" name="send">ارسال مجدد کد تایید</button>
                              </span>
                            <input type="text" class="form-control" form="send" name="verification_code">
                        </div>
                        <div class="item bad d-none">
                        <p id="countdown" class="alert iransans persian_num"></p>
                         </div>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" form="send" name="verify">ثبت</button>
                    </div>
                    </div>
                </div>
                <div class="divider-dashed"></div>
        </div>
    </div>
@endif 
</div>
</div>
@endsection
@section('pageScripts')
<script>
    // Set the date we're counting down to
    @php
        if(!isset($finishingTime)){
            $finishingTime = -1;
        }
    @endphp
    var countDownDate = {{ $finishingTime ? $finishingTime : $finishingTime-1 }};

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;
      // Time calculations for days, hours, minutes and seconds
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      $(".item").removeClass("d-none");
      document.getElementById("countdown").innerHTML =  seconds + " : " + minutes + " " ;

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "کد را دریافت نکرده اید؟";
        $('.sent').replaceWith($('.again'));
        $(".again").removeClass("d-none");
      }
    }, 1000);
    </script>
@endsection


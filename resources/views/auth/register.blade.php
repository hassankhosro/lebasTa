<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>ثبت نام در لباستا</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('auth/register/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('auth/register/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('auth/register/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('auth/register/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('auth/register/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">فرم ثبت نام در لباستا</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">نام</label>
                                    <input class="input--style-4" type="text" value="{{ old('first_name') }}" name="first_name">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">نام خانوادگی</label>
                                    <input class="input--style-4" type="text" value="{{ old('last_name') }}" name="last_name">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">جنسیت</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">آقا
                                            <input type="radio" value="man" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">خانم
                                            <input type="radio" value="woman" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">ایمیل</label>
                                    <input class="input--style-4" type="email" value="{{ old('name') }}" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">تلفن همراه</label>
                                    <input class="input--style-4" type="text" value="{{ old('mobile') }}" name="mobile">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">رمز عبور</label>
                                    <input class="input--style-4" type="password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">تکرار رمز عبور</label>
                                    <input class="input--style-4" type="password" name="password_confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">نحوه آشنایی با لباستا</label>
                            <div class="rs-select2 js-select-simple select--no-search" style="text-align: right">
                                <select name="method_of_introduction">
                                    <option disabled="disabled" selected="selected">یک گزینه انتخاب کنید</option>
                                    <option value="social_network">شبکه های اجتماعی</option>
                                    <option value="friend">دوستان</option>
                                    <option value="meson">مزون ها</option>
                                    <option value="other">دیگر</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            @error('method_of_introduction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">ثبت نام</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('auth/register/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('auth/register/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('auth/register/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('auth/register/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('auth/register/js/global.js') }}"></script>

</body>

</html>

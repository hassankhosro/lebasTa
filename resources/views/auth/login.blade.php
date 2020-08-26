<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V11</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('auth/login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-55">
						ورود به لباستا
					</span>
                    @include('layouts.errors')

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="ایمیل" value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "پسورد الزامی است">
                        <input class="input100" type="password" name="password" placeholder="کلمه عبور">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
                        </span>

					</div>
					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="label-checkbox100" for="ckb1">
							مرا به خاطر بسپار
						</label>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit">
							ورود
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							یا ورود با
						</span>
					</div>

                    <div class="row w-100 justify-content-center">
					<a href="#" class="btn-google m-b-10">
						<img src="{{ asset('auth/login/images/icons/icon-google.png') }}" alt="GOOGLE">
						Google
					</a>
                </div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							 حساب ندارید ؟
						</span>
						<a class="txt1 bo1 hov1" href="{{ route('register') }}">
							ثبت نام
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('auth/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('auth/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/login/js/main.js') }}"></script>

</body>
</html>

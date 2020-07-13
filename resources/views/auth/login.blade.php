<!DOCTYPE html>
<html lang="en">
<head>
	<title>Farah's Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" href="{{asset('/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/icon-font.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/hamburgers.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/animsition.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/select2.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/daterangepicker.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/util.css')}}"/>
	<link rel="stylesheet" href="{{asset('/css/main.css')}}"/>
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
			@csrf
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
                            <a class="txt1" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<!--
					<div class="text-center p-t-10 p-b-20">
						<span class="txt2">
							<a href="{{ route('register') }}">Please register here</a>
						</span>
					</div>
					-->
					<!--
					<div class="container-login100-form-btn p-t-10 p-b-20">
						<a class="login100-form-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
                    -->
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/animsition.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/daterangepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/countdowntime.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/main.js')}}"></script>

</body>
</html>

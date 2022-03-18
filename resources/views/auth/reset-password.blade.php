<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Validate Login & Register Forms Flat Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validate Login & Register Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/login/css/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ asset('assets/frontend/login/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
	    Reset Password Form
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container-agille" style="margin-top:-5px;">
		<div class="formBox level-login">
			<div class="box boxShaddow"></div>
			<div class="box loginBox">

            <h3>Reset Password</h3>
				<form class="form"  action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="f_row-2">
                    <label for="email" value="{{ __('Email') }}"></label>
						<input type="text" class="input-field" placeholder="Email"  id="email" type="email" name="email" value="{{$request->email}}" required autofocus>
					</div>
                    <div class="f_row-2">
                    <label for="password" value="{{ __('Password') }}"></label>
						<input class="input-field" placeholder="Password" type="password" name="password" required autocomplete="new-password">
					</div>
                    <div class="f_row-2">
                    <label  for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
						<input class="input-field" id="password_confirmation" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" >
					</div>
					<input class="submit-w3" type="submit" value="Update Password">
				</form>
			</div>
			<!-- <a href="#" class="regTag icon-add">
				<i class="fa fa-repeat" aria-hidden="true"></i>

			</a> -->
		</div>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer-w3ls" style="margin-top:60px">
		<h2>&copy; 2018 Validate Login & Register Forms. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</h2>
	</div>
	<!-- //copyright -->


	<!-- js files -->
	<!-- Jquery -->
	<script src="{{ asset('assets/frontend/login/js/jquery-2.2.3.min.js') }}"></script>
	<!-- //Jquery -->
	<!-- input fields js -->
	<script src="{{ asset('assets/frontend/login/js/input-field.js') }}"></script>
	<!-- //input fields js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
        @if (session('status'))
                        
        swal("Password Reset!", "{{ Session::get('status') }}", "success");
        @endif
		@if($errors->any())
		swal("Password Reset!", "{{ $errors }}", "warning");
		@endif
	</script>
	<!-- //password-script -->
	<!-- //js files -->


</body>

</html>
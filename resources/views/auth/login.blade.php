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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- title -->
	<h1>
	    Login & Register Forms
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container-agille" style="margin-top:-5px;">
		<div class="formBox level-login">
			<div class="box boxShaddow"></div>
			<div class="box loginBox">
                
				<h3>Login Here</h3>
				<form class="form" action="{{ route('login') }}" method="post">
                @csrf
					<div class="f_row-2">
                        <label for="email" value="{{ __('Email') }}"></label>
						<input type="text" class="input-field" placeholder="Username" name="email" id="email" :value="old('email')" required autofocus>
					</div>
					<div class="f_row-2 last">
                        <label for="password" value="{{ __('Password') }}"></label>
						<input type="password" name="password" placeholder="Password" class="input-field" required autocomplete="current-password">
					</div>
                    <div class="f_row-2 last">
                        <label for="password"></label>
                        <input type="checkbox" name="remember" id="remember_me">
						<span class="ml-2 text-sm" style="color:#25b4ed;">{{ __('Remember me') }}</span>
					</div>
					<input class="submit-w3" type="submit" value="Login">
                    @if (Route::has('password.request'))
					<div class="f_link">
						<a href="{{ route('password.request') }}" class="resetTag">Forgot your password?</a>
					</div>
                    @endif
				</form>
			</div>
			<div class="box forgetbox agile">
				<a href="#" class="back icon-back">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;" xml:space="preserve">
						<polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
			  199.404,117.876 " />
					</svg>
				</a>
				<h3>Reset Password</h3>
				<form class="form" action="{{ route('password.email') }}" method="post">
                    @csrf
					<p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
 
					<div class="f_row last">
						<label for="email"  value="{{ __('Email') }}">Email Id</label>
						<input type="email" name="email" id="email" placeholder="Email" class="input-field" :value="old('email')" required autofocus>
						<u></u>
					</div>
                    <i class="" id="spinner" style="margin-top: 12px; align-content: center;"></i>
                    <button class="btn button submit-w3" id="rest_button">
						<span> {{ __('Email Password Reset Link') }}</span>
					</button>
				</form>
			</div>
			<div class="box registerBox wthree" >
				<span class="reg_bg"></span>
				<h3>Register</h3>
				<form class="form" action="{{ route('register') }}" method="post">
                    @csrf
					<div class="f_row-2">
                        <label for="name" value="{{ __('Name') }}"></label>
						<input type="text" class="input-field" placeholder="Username"name="name" :value="old('name')" required autofocus autocomplete="name">
					</div>
                    <div class="f_row-2">
                    <label for="email" value="{{ __('Email') }}"></label>
						<input type="text" class="input-field" placeholder="Email" type="email" name="email" :value="old('email')" required>
					</div>
                    <div class="f_row-2">
                    <label for="password" value="{{ __('Password') }}"></label>
						<input class="input-field" placeholder="Password" type="password" name="password" required autocomplete="new-password">
					</div>
                    <div class="f_row-2">
                    <label  for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
						<input class="input-field" id="password_confirmation" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" >
					</div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="f_row-2">
                        <label for="terms">
                            <input type="checkbox" name="terms" id="terms" required>
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                        </label>
					</div>
                    @endif
					<input class="submit-w3" type="submit" value="Register">
				</form>
			</div>
			<a href="#" class="regTag icon-add">
				<i class="fa fa-repeat" aria-hidden="true"></i>

			</a>
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
        @error('email')
        swal("Password Reset!", "No Account Found With This Email", "warning");
        @endif

        $("#rest_button").click(function(){
            $('#spinner').addClass("fa fa-spinner fa-pulse fa-2x allign-center");
});
	</script>
	<!-- //password-script -->
	<!-- //js files -->


</body>

</html>
<!DOCTYPE html>
<html lang="en">


<!-- settings23:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/style.css') }}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
    @include('backend.header')
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                        </li>
                        <li class="menu-title">Settings</li>
                        <li class="active">
                            <a href="{{ route('settings.show')}}"><i class="fa fa-building"></i> <span>Company Settings</span></a>
                        </li>
                        <li>
                            <a href="{{ route('localization.show')}}"><i class="fa fa-clock-o"></i> <span>Localization</span></a>
                        </li>
                        <li>
                            <a href="{{ route('theme-setting.show') }}"><i class="fa fa-picture-o"></i> <span>Theme Settings</span></a>
                        </li>
                        <li>
                            <a href="{{ route('roles-permissions.show')}}"><i class="fa fa-key"></i> <span>Roles & Permissions</span></a>
                        </li>
                        <li>
                            <a href="{{ route('invoice-settings.show')}}"><i class="fa fa-pencil-square-o"></i> <span>Invoice Settings</span></a>
                        </li>
                        <li>
                            <a href="{{ route('notifications-settings.show')}}"><i class="fa fa-globe"></i> <span>Notifications</span></a>
                        </li>
                        <li>
                            <a href="{{ route('leave-type.show')}}"><i class="fa fa-cogs"></i> <span>Leave Type</span></a>
                        </li>
                        <li>
                            <a href="{{ route('change-password.show')}}"><i class="fa fa-lock"></i> <span>Change Password</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
           @yield('content')
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/backend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
</body>


<!-- settings23:11-->
</html>
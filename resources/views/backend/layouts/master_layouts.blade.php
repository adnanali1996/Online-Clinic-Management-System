<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/style.css') }}">
    @stack('style')
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        @include('backend.header')
        @include('backend.sidebar')
        <div class="page-wrapper">
        @yield('content')

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/backend/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/backend/js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/backend/js/chart.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>
    <script src="{{asset('assets/backend/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap-datetimepicker.min.js') }}"></script>


    @stack('js')

</body>



</html>
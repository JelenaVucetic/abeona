<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Abeona</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.ico')}}">

    <!-- CSS Global -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-confirm/jquery-confirm.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/prettyphoto/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel2/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel2/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">

    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">

    <!-- Head Libs -->
    <script src="{{ asset('assets/plugins/modernizr.custom.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/plugins/iesupport/html5shiv.js') }}"></script>
    <script src=" {{ asset('assets/plugins/iesupport/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">
    <!-- Modal -->
    @yield('modal')

    <!-- HEADER -->
        @include('includes.header')
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        @yield('content')

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
        @include('includes.footer')
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<!-- JS Global -->
<script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-confirm/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/superfish/js/superfish.min.js') }}"></script>
<script src="{{ asset('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/plugins/owl-carousel2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.smoothscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/swiper/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- JS Page Level -->
<script src="{{ asset('assets/js/theme-ajax-mail.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
@yield('js')

</body>
</html>

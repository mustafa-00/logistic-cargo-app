<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Logistic Cargo App </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_landing/img/favicon.icon')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets_landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets_landing/css/slider.css') }}">
</head>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets_landing/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<!-- Header Start -->
@include('landing.layouts.partials.header')
<!-- Header End -->

{{-- main start --}}
@yield('contents')
{{-- main end --}}

<!--? Footer Start-->
@include('landing.layouts.partials.footer')
<!-- Footer End-->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="{{asset('./assets_landing/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('./assets_landing/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/popper.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('./assets_landing/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('./assets_landing/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('./assets_landing/js/wow.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/animated.headline.js')}}"></script>
    <script src="{{asset('./assets_landing/js/jquery.magnific-popup.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{asset('./assets_landing/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('./assets_landing/js/contact.js')}}"></script>
    <script src="{{asset('./assets_landing/js/jquery.form.js')}}"></script>
    <script src="{{asset('./assets_landing/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('./assets_landing/js/mail-script.js')}}"></script>
    <script src="{{asset('./assets_landing/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('./assets_landing/js/plugins.js')}}"></script>
    <script src="{{asset('./assets_landing/js/main.js')}}"></script>

</body>
</html>

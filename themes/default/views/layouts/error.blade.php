<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tag -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title Tag  -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('themes/default/images/favicon.png') }}">
        <!-- Web Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        
        <!-- StyleSheet -->
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/bootstrap.css') }}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/magnific-popup.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/font-awesome.css') }}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/jquery.fancybox.min.css') }}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/themify-icons.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/niceselect.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/animate.css') }}">
        <!-- Flex Slider CSS -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/flex-slider.min.css') }}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/owl-carousel.css') }}">
        <!-- Slicknav -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/slicknav.min.css') }}">
        
        <!-- Eshop StyleSheet -->
        <link rel="stylesheet" href="{{ asset('themes/default/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/default/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/default/css/responsive.css') }}">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css', 'themes/default') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js', 'themes/default') }}" defer></script>
    </head>
    <body class="js">
        
        {{ $slot }}
        
        <!-- Jquery -->
        <script src="{{ asset('themes/default/js/jquery.min.js') }}"></script>
        <script src="{{ asset('themes/default/js/jquery-migrate-3.0.0.js') }}"></script>
        <script src="{{ asset('themes/default/js/jquery-ui.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('themes/default/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('themes/default/js/bootstrap.min.js') }}"></script>
        <!-- Slicknav JS -->
        <script src="{{ asset('themes/default/js/slicknav.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('themes/default/js/owl-carousel.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('themes/default/js/magnific-popup.js') }}"></script>
        <!-- Fancybox JS -->
        <script src="{{ asset('themes/default/js/facnybox.min.js') }}"></script>
        <!-- Waypoints JS -->
        <script src="{{ asset('themes/default/js/waypoints.min.js') }}"></script>
        <!-- Countdown JS -->
        <script src="{{ asset('themes/default/js/finalcountdown.min.js') }}"></script>
        <!-- Nice Select JS -->
        <script src="{{ asset('themes/default/js/nicesellect.js') }}"></script>
        <!-- Ytplayer JS -->
        <script src="{{ asset('themes/default/js/ytplayer.min.js') }}"></script>
        <!-- Flex Slider JS -->
        <script src="{{ asset('themes/default/js/flex-slider.js') }}"></script>
        <!-- ScrollUp JS -->
        <script src="{{ asset('themes/default/js/scrollup.js') }}"></script>
        <!-- Onepage Nav JS -->
        <script src="{{ asset('themes/default/js/onepage-nav.min.js') }}"></script>
        <!-- Easing JS -->
        <script src="{{ asset('themes/default/js/easing.js') }}"></script>
        <!-- Active JS -->
        <script src="{{ asset('themes/default/js/active.js') }}"></script>
    </body>
</html>
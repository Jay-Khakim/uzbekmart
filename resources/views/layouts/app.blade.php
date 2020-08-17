<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="It is the first in Uzbekistan - an online showroom of the Association of Exporters of Uzbekistan.">
    <meta name="author" content="Utkurov_Mahmudjon">
    <meta name="keywords" content="Export , Import , e-commerce , Association , Trade , Tashkent , Online market , showroom , shopping , online store , online business , shopping cart">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>O'zbekistonda birinchi onlayn shourum | UzbekMart.com</title>

    <link rel="shortcut icon" type="/image/x-icon" href="/assets/images/logo.png">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome-stars.css">
    <link rel="stylesheet" href="/assets/css/vendor/ion-fonts.css">
    <link rel="stylesheet" href="/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="template-color-1">
    <div class="main-wrapper">

        {{-- <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here --> --}}

        <header>
            @include('inc.header')
        </header>

        {{-- Left side category bar --}}
        {{-- @include('inc.left-side-category') --}}
        
        @yield('content')


        @include('inc.footer')
    </div>

    {{-- Scripts --}}
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/assets/js/vendor/popper.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/slick.min.js"></script>
    <script src="/assets/js/plugins/countdown.js"></script>
    <script src="/assets/js/plugins/jquery.barrating.min.js"></script>
    <script src="/assets/js/plugins/jquery.counterup.js"></script>
    <script src="/assets/js/plugins/jquery.nice-select.js"></script>
    <script src="/assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/plugins/lightgallery.min.js"></script>
    <!-- <script src="/assets/js/plugins/scroll-top.js"></script> -->
    <script src="/assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <script src="/assets/js/plugins/waypoints.min.js"></script>
    <script src="/assets/js/plugins/instafeed.min.js"></script>
    <script src="/assets/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>

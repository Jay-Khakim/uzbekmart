<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="It is the first in Uzbekistan - an online showroom of the Association of Exporters of Uzbekistan.">
    <meta name="author" content="Utkurov_Mahmudjon">
    <meta name="keywords" content="Export , Import , e-commerce , Association , Trade , Tashkent , Online market , showroom , shopping , online store , online business , shopping cart">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>O'zbekistonda birinchi onlayn shourum | UzbekMart.com</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
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
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        @include('inc.header')
    </header>
</body>
</html>

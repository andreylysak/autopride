<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Autopride')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('public/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/normalize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/libs/lightslider/css/lightslider.css') }}" rel="stylesheet">
    <link href="{{ asset('public/libs/lightslider/css/lightgallery.css') }}" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet"> -->
    <link href="{{ asset('public/libs/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style-2.css') }}" rel="stylesheet">
    <link href="{{ asset('public/libs/jquery-bar-rating/themes/css-stars.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('public/libs/datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <link href="{{ asset('public/libs/datepicker/bootstrap-datepicker.standalone.css') }}" rel="stylesheet">
    <link href="{{ asset('public/libs/jquery.timepicker.css') }}" rel="stylesheet">

    <script src="js/html5-3.6-respond-1.4.2.min.js"></script>
    <![endif]-->
</head>
<body class="{{ $body_class }}">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')

</body>
</html>

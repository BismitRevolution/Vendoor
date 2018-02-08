<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Description of the page">

        <!-- Apple Devices -->
        <!-- <link rel="apple-touch-icon" href="/custom-icon.png"> -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-v4.0.min.css') }}">
        <!-- Foundation ZURB -->
        <!-- <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}"> -->
        <!-- Lightbox -->
        <!-- <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}"> -->
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Navbar Style -->
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <!-- Default Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('extra-css')

        <!-- Google Open Sans -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->

        <title>Title | @yield('title')</title>
    </head>
    <body>
        @include('layout.header')
        <div class="">
        @yield('content')
        </div>

        <!-- JQuery -->
        <script type="application/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!-- <script type="application/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
        <!-- PopperJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/popper.js"></script> -->
        <!-- TooltipJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/tooltip.js"></script> -->
        <!-- Bootstrap -->
        <!-- <script type="application/javascript" src="{{ asset('js/bootstrap-v4.0.min.js') }}"></script> -->
        <!-- Foundation ZURB -->
        <script type="application/javascript" src="{{ asset('js/what-input.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
        <!-- Customization -->
        <script type="application/javascript" src="{{ asset('js/header.js') }}"></script>
        @yield('extra-js')

        @include('layout.footer')
    </body>
</html>
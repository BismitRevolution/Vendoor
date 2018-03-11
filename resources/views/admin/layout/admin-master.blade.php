<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0"/>
        <!-- Reset CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/reset.css') }}">
        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-v4.0.min.css') }}"> -->
        <!-- Foundation ZURB -->
        <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}">
        <!-- Lightbox -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/lightbox.min.css') }}"> -->
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Navbar Style -->
        <link rel="stylesheet" href="{{ asset('css/_header.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/_footer.css') }}">
        <!-- Admin Template -->
        <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
        @yield('extra-css')

        <!-- Google Open Sans -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->

        <title>@yield('title')</title>
    </head>
    <body>
        @include('layout.header')
        <div class="">
        @yield('content')
        </div>

        <!-- JQuery -->
        <script type="application/javascript" src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- <script type="application/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
        <!-- PopperJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/popper.js"></script> -->
        <!-- TooltipJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/tooltip.js"></script> -->
        <!-- Bootstrap -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/bootstrap-v4.0.min.js') }}"></script> -->
        <!-- Foundation ZURB -->
        <script type="application/javascript" src="{{ asset('js/vendor/what-input.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/vendor/foundation.min.js') }}"></script>
        <!-- Customization -->
        <script type="application/javascript" src="{{ asset('js/admin/_header.js') }}"></script>
        <!-- Admin -->
        <script type="application/javascript" src="{{ asset('js/admin/admin.js') }}"></script>
        @yield('extra-js')

        @include('layout.footer')
    </body>
</html>

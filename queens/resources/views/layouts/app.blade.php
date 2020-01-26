<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- custom -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dest/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dest/vendors/colorbox/example3/colorbox.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('assets/dest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dest/css/animate.css') }}">
    <link rel="stylesheet" title="style" href="{{ asset('assets/dest/css/huong-style.css') }}">

</head>
    
<body>
    <div id="app">
        @include('layouts.header')

        @yield('content')

        @include('layouts.bottom')

    <!-- include js files -->
    <script src="{{ asset('assets/dest/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script src="{{ asset('http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('assets/dest/vendors/animo/Animo.js') }}"></script>
    <script src="{{ asset('assets/dest/vendors/dug/dug.js') }}"></script>
    <script src="{{ asset('assets/dest/js/scripts.min.js') }}"></script>

    @yield('bottom_js')

    </div>
</body>


</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') {{ config('app.name') }}</title>

    @include('layouts.front.styles')

</head>
<body>
    <!-- page header -->
    <header class="only-color">
        @include('layouts.front.header')
        @include('layouts.front.navigation')
    </header>
    <!-- / page header -->

    <!-- slider -->
    @include('layouts.front.slider')
    <!-- /slider -->

    @yield('content')

    @include('layouts.front.footer')

    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>

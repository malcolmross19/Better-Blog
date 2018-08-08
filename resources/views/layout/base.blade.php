<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        {{--FAVICON INFORMATION--}}
        <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16x16.png">
        <link rel="manifest" href="/public/site.webmanifest">
        <link rel="mask-icon" href="/public/safari-pinned-tab.svg" color="#33ccff">
        <meta name="apple-mobile-web-app-title" content="Better Blog">
        <meta name="application-name" content="Better Blog">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        {{--CSS FILES--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    <body class="container-fluid bg-dark">
        {{--Include the header file--}}
        @include('layout.header')

        <main class="pt-4">
            {{--Yields content to be replaced when extending from this file--}}
            @yield('content')
        </main>

        {{--SCRIPT FILES--}}
        <script src="{{ asset('js/app.js') }}"></script>

        {{--Include the footer file--}}
        @include('layout.footer')
    </body>
</html>
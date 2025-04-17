<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}NxHost
    </title>

    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H6YJGVV60Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-H6YJGVV60Z');
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- SEO -->
    <meta name="robots" content="index, follow">
    <meta property="description" content="{{$description}}">
    <meta name="keywords" content="hebergement, gaming, anti ddos fivem, minecraft hosting, hebergeur serveur minecraft, fivem server, hosting france, hébergeur minecraft, fivem anti ddos, hébergeu>    <meta name="author" content="NxHost">

    <meta property="og:title" content="{{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}NxHost">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:image" content="{{asset('img/logo.png')}}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NxHost">
    <meta name="og:autor" content="NxHost">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@NxHostFR">
    <meta name="twitter:creator" content="@NxHostFR">
    <meta name="twitter:title" content="@yield('title', "") - NxHost">
    <meta name="twitter:description" content="{{$description}}">
    <meta name="twitter:image" content="{{asset('img/logo.png')}}">
</head>
<body>
    @include('partials.header')

    @yield('body')

    @include('partials.footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themebazar.xyz/laraflash/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 17:13:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Helal Uddin">
    <meta name="google-site-verification" content="214555" />
    <meta name="csrf-token" content="aDtkWo6D2Tdf4d47sL4cfG8ksnwq3ezKPeiQxr25">

    <meta name="keyword" content="newspaper, online news, paper">
    <meta name="discription" content="banglar khobor is a online newspaper of bangladesh">
    <title>Lara Flash (Laravel)</title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Latest Script" />
    <meta property="og:description" content="Laravel For Online Newspaper" />
    <meta property="og:image" content="{{ asset('public/frontend') }}/templateimage/60e42594dd1aa.jpg" />

    <link rel="icon" href="{{ asset('public/frontend') }}/templateimage/608332399bd3c.png" type="image/gif"
        sizes="16x16">
    <!-- Css Link Start    -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/stellarnav.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/style.css">

</head>

<html>
<body>

    @include('frontend.layouts.header')
    
    @include('frontend.layouts.menu')

    @yield('content')

    @include('frontend.layouts.footer')


    <script src="{{ asset('public/frontend') }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/stellarnav.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('public/frontend') }}/js/lazyload.min.js"></script>
    <script src="{{ asset('public/frontend') }}/js/main.js"></script>
</body>

<!-- Mirrored from themebazar.xyz/laraflash/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 17:14:45 GMT -->

</html>

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colonial Architecture</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Scripts -->

    <!-- mobile specific metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="/css/base.css">
   <link rel="stylesheet" href="/css/vendor.css">
   <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" type="text/css" href="/css/style_overrides.css">

   <!-- script
   ================================================== -->
  <script src="/js/modernizr.js"></script>
  <script src="/js/pace.min.js"></script>

   <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="top">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

       <!-- Java Script
   ================================================== --> 
   <script src="/js/jquery-2.1.3.min.js"></script>
   <script src="/js/plugins.js"></script>
   <script src="/js/main.js"></script>
</body>
</html>
 
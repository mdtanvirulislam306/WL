<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
        <title>WAVE LINK || @yield('title')</title>
        <link rel="shortcut icon" href="{{ asset('assets/images/WL.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="{{asset('assets/css/style8a4f.css')}}">
    </head>
    <body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
      <div class="nk-main">
        <!-- Sidebar Navigation -->
        @include('Layout.sidebar')
        <!-- End Sidebar Navigation -->
        <div class="nk-wrap">
            <!-- Header navbar -->
          @include('Layout.header')
          <!-- End Header Navbar -->
          <!-- Content Section -->
          @yield('content')
          <!-- End Content Section -->
          <!-- Footer Section -->
       @include('Layout.footer')
  <!-- End Footer Sect ion -->
  <script src="{{asset('assets/js/charts/ecommerce-chart.js')}}"></script>
  <link rel="stylesheet" href="{{asset('assets/css/libs/editors/quill8a4f.css?v1.1.0')}}"></link>
  <script src="{{asset('assets/js/libs/editors/quill.js')}}"></script>
  <script src="{{asset('assets/js/editors/quill.js')}}"></script>
</html>


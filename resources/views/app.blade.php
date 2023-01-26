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
        <!-- CDN Link CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="{{asset('assets/js/charts/ecommerce-chart.js')}}"></script>
  <link rel="stylesheet" href="{{asset('assets/css/libs/editors/quill8a4f.css?v1.1.0')}}"></link>
  <script src="{{asset('assets/js/libs/editors/quill.js')}}"></script>
  <script src="{{asset('assets/js/editors/quill.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- custom script -->
  @stack('custom-script')

  </html>


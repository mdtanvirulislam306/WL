<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Multi-purpose admin dashboard template that especially build for programmers.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wave Link || @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets/images/WL.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style8a4f.css')}}">
  </head>
  <body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
      <div class="nk-main">
        <div class="nk-wrap bg-white">
            @yield('content')
        </div>
      </div>
    </div>
  </body>
  <script src="../assets/js/bundle.js"></script>
  <script src="../assets/js/scripts.js"></script>
</html>
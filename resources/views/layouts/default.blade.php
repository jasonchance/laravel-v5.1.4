<!DOCTYPE html>
<html>
  <head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/bootstrap.min.css')}}">
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/libs/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <meta name="_token" content="{{csrf_token() }}"/>
    @yield('head')
  </head>
  <body>
    <div class="header">@include('includes.header')</div>
    <div class="contents">@yield('content')</div>
    <div class="footer">@include('includes.footer')</div>
  </body>
  <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
</html>

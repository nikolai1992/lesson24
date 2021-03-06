<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Starter</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        {{--<form class="form-inline ml-3">--}}
            {{--<div class="input-group input-group-sm">--}}
                {{--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<div class="input-group-append">--}}
                    {{--<button class="btn btn-navbar" type="submit">--}}
                        {{--<i class="fas fa-search"></i>--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="/adminlte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                            class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.main')}}" class="brand-link">
            <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">

                        <ul class="nav nav-treeview">
                            {{--<li class="nav-item">--}}
                                {{--<a href="#" class="nav-link active">--}}
                                    {{--<i class="far fa-circle nav-icon"></i>--}}
                                    {{--<p>Active Page</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            <li  class="nav-item">
                                <a href="{{route('student.index')}}" class="nav-link {{Route::currentRouteName()=="student.index"||Route::currentRouteName()=="student.edit"||Route::currentRouteName()=="student.create" ? "active" : ""}}">Students</a>
                            </li>
                            <li  class="nav-item">
                                <a href="{{route('subject.index')}}" class="nav-link {{Route::currentRouteName()=="subject.index"||Route::currentRouteName()=="subject.edit"||Route::currentRouteName()=="subject.create" ? "active" : ""}}">Subjects</a>
                            </li>
                            <li  class="nav-item">
                                <a href="{{route('rating.index')}}" class="nav-link {{Route::currentRouteName()=="rating.index" ? "active" : ""}}">Rating</a>
                            </li>
                            <li  class="nav-item">
                                <a href="{{route('article.index')}}" class="nav-link {{Route::currentRouteName()=="article.index"||Route::currentRouteName()=="article.edit"||Route::currentRouteName()=="article.create" ? "active" : ""}}">Articles</a>
                            </li>
                            {{--<li class="nav-item">--}}
                                {{--<a href="#" class="nav-link">--}}
                                    {{--<i class="far fa-circle nav-icon"></i>--}}
                                    {{--<p>Inactive Page</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="nav-icon fas fa-th"></i>--}}
                                {{--<p>--}}
                                    {{--Simple Link--}}
                                    {{--<span class="right badge badge-danger">New</span>--}}
                                {{--</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@yield('script')
</body>
</html>



{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    {{--<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
    {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
        {{--<div class="container">--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
            {{--</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li><a href="/setlocale/ru" class="btn">ru</a></li>--}}
                    {{--<li><a href="/setlocale/en" class="btn">en</a></li>--}}
                {{--</ul>--}}

                {{--<!-- Right Side Of Navbar -->--}}
                {{--<ul class="navbar-nav ml-auto">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--</li>--}}
                        {{--@if (Route::has('register'))--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@else--}}
                        {{--<li class="nav-item dropdown">--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('Logout') }}--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--<main class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2 navigation-menu-div">--}}
                {{--<ul class="menu-items">--}}
                    {{--<li><a href="{{route('student.index')}}">Students</a></li>--}}
                    {{--<li><a href="{{route('subject.index')}}">Subjects</a></li>--}}
                    {{--<li><a href="{{route('rating.index')}}">Rating</a></li>--}}
                    {{--<li><a href="{{route('article.index')}}">Articles</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-md-10">--}}
                {{--@yield('content')--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</main>--}}
{{--</div>--}}
{{--<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="--}}
        {{--crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function() {--}}
        {{--$('.select2').select2();--}}
    {{--});--}}
{{--</script>--}}
{{--@yield('script')--}}

{{--</body>--}}
{{--</html>--}}

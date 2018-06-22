<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Danang Free Walking Tour</title>
    <!-- Icons-->
<!--     <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet">
    <!-- <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet"> -->
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('../assets/images/logo.jpg') }}" width="50" height="50" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ asset('../assets/images/Dog/26_1_.jpg') }}" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list">Welcome {{Auth::user()->name}}</i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('../assets/images/Dog/26_1_.jpg') }}" alt="admin@bootstrapmaster.com">
          </a>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin')}}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="nav-title">Manager Users</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/user')}}">
                <i class="nav-icon icon-drop"></i> Users</a>
            </li>
            <li class="nav-title">Manager Packages</li>
            <li class="nav-item">
              <a class="nav-link nav-dropdown-toggle" href="{{url('/admin/recom')}}">
                <i class="nav-icon icon-pie-chart"></i> Recoms</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="{{url('/admin/service')}}">
                <i class="nav-icon icon-star"></i> Services</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-bell"></i> Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/news')}}">
                <i class="nav-icon icon-calculator"></i> News
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        @if(Session::has('flash_message'))
        <div class="alert alert-success" role="alert">
          {!! Session::get('flash_message') !!}
        </div>
        @endif
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech">Profile</i>
              </a>
              <a class="btn" href="{{url('/admin/logout')}}">
                <i class="icon-settings"></i>  Logout</a>
            </div>
          </li>
        </ol>
    @yield('content')
    </main>
    </div>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      function myService(event) {
        var modal = document.getElementById('id01');  
          if (event.target == modal) {
            modal.style.display = "none";
          }
        var modal_2 = document.getElementById('id02');  
          if (event.target == modal_2) {
            modal_2.style.display = "none";
          }
        var hello = document.getElementById('id03');
          if (event.target == hello) {
            hello.style.display = "none";
          }   
        var j = 1;
        for (j = 1; j <= 4; j++){
          var img = document.getElementById('img' + j);
          if (event.target == str) {
            hello.style.display = "none";
          }
          var str = document.getElementById('str' + j);
          if (event.target == str) {
            hello.style.display = "none";
          }
          var i = 1;
          for (i = 1; i <= 20; i++){
            var line = document.getElementById(j+ 'and' + i);
            if (event.target == line) {
              hello.style.display = "none";
            }
          }
        }           
      }
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::asset('public/adminpanel/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('adminpanel/dashboard')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      <li class="nav-item"><a href="{{url('logout')}}" class="nav-link">LogOut</a></li>  
      
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    
      <span class="brand-text font-weight-light">LearnwithComics Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome , Admin Name</a>
        </div>
      </div>

  
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('adminpanel/comics')}}" class="nav-link">Comics Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="{{url('adminpanel/uploadpdfcomics')}}" class="nav-link">Upload PDF comics</a>
        </li>
         <li class="nav-item">
          <a href="{{url('adminpanel/viewpdfcomics')}}" class="nav-link">View PDF comics</a>
      </li>
          <li class="nav-item">
            <a href="{{url('adminpanel/class')}}" class="nav-link">Class</a>
        </li>
        <li class="nav-item">
          <a href="{{url('adminpanel/subject')}}" class="nav-link">Subject</a>
      </li>
      <li class="nav-item">
        <a href="{{url('adminpanel/importpdf')}}" class="nav-link">Import Mass PDF</a>
      </li>
      <li class="nav-item">
        <a href="{{url('adminpanel/v2c')}}" class="nav-link">V2C</a>
      </li>
      <li class="nav-item">
        <a href="{{url('adminpanel/v2cadd')}}" class="nav-link">V2C Import Excel</a>
      </li>
      <li class="nav-item">
        <a href="{{url('adminpanel/talkingcomics')}}" class="nav-link">Talking Comics</a>
      </li>
      <li class="nav-item">
        <a href="{{url('adminpanel/quiz')}}" class="nav-link">Quiz</a>
      </li>
      
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">Logout</a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
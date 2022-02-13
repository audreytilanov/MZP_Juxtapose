<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Melali</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/bs-stepper/css/bs-stepper.min.css') }}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/dropzone/min/dropzone.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('Adminlte/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('Adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Theme style -->
  <link rel="shortcut icon" href="{{asset('img/Auto2000.png')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="sidebar-mini layout-navbar-fixed layout-fixed ">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item navbar-nav">
        <div class="dropdown">
  <a id="texttohide" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="nav-icon fas fa-user"></i> Admin {{ Auth::user()->name }} </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href=""><i class="nav-icon fas fa-user-cog"></i> Setting Akun</a>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button class="dropdown-item" type="submit"><i class="nav-icon fas fa-sign-out-alt"></i> Logout</a>
    </form>
  </div>
</div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="{{asset('img/Auto2000.png')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light" style="margin-left: 22px;font-weight:bold!important;">Admin Melali</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('common-disease.index') }}" class="nav-link">
              <i class="nav-icon fas fa-virus"></i>
              <p>
                Common Disease
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-shield-alt  "></i>
              <p>
                My Health
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('drugs.index') }}" class="nav-link">
              <i class="nav-icon fas fa-prescription-bottle-alt"></i>
              <p>
                Drugs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('emergency.index') }}" class="nav-link">
              <i class="nav-icon fas fa-first-aid"></i>
              <p>
                Emergency
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('doctor.index') }}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Ask Doctor
              </p>
            </a>
          </li>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

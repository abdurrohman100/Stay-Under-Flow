<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Answer</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <div class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SUF</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">StayUnderFlow</span>
        </div>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{asset('/dist/img/user.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Username</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{asset('/dist/img/user.jpg')}}" class="img-circle" alt="User Image">

                    <p>
                      Username
                      <small>Member since July 2020</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ route('userprofile') }}" class='btn btn-default btn-flat'>Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('/dist/img/user.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Username</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('myquestion') }}"><i class="fa fa-link"></i> <span>My Question</span></a></li>
            <li class="active"><a href="{{ route('myanswer') }}"><i class="fa fa-link"></i> <span>My Answer</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome Username in Stay Under Flow!
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- DISCUSSION LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">My Answer</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="{{ route('discussion') }}" class="product-title">What is mountain?
                          <span class="label label-success pull-right">Done</span>
                        </a>
                        <span class="product-description">
                              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Title
                          <span class="label label-danger pull-right">Not Yet</span>
                        </a>
                        <span class="product-description">
                              Description.
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Title
                          <span class="label label-danger pull-right">Not Yet</span>
                        </a>
                        <span class="product-description">
                              Description.
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('/dist/img/user.jpg')}}" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Title
                          <span class="label label-danger pull-right">Not Yet</span>
                        </a>
                        <span class="product-description">
                              Description.
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.section -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script type="text/javascript" src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script type="text/javascript" src="{{asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{asset('/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script type="text/javascript" src="{{asset('/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script type="text/javascript" src="{{asset('/dist/js/demo.js')}}"></script>
    </body>
</html>

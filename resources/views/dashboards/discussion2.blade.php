<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Discussion</title>
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
            <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('myquestion') }}"><i class="fa fa-link"></i> <span>My Question</span></a></li>
            <li><a href="{{ route('myanswer') }}"><i class="fa fa-link"></i> <span>My Answer</span></a></li>
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
              <!-- Box Comment -->
              <div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('/dist/img/user.jpg')}}" alt="User Image">
                    <span class="username"><a href="{{ route('userprofile') }}">Username</a></span>
                    <span class="description">7:30 PM Today</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read"><i class="fa fa-circle-o"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- post text -->
                  <h3 style="margin-top: 5px;">What is mountain?</h3>
                  <p>Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind
                    texts. Separated they live in Bookmarksgrove right at 
                    the coast of the Semantics, a large language ocean.
                    A small river named Duden flows by their place and supplies
                    it with the necessary regelialia. It is a paradisematic
                    country, in which roasted parts of sentences fly into
                    your mouth.</p>

                  <!-- Social sharing buttons -->
                  <span class="pull-right text-muted">2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            Maria Gonzales
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      It is a long established fact that a reader will be distracted
                      by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            Nora Havisham
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span><!-- /.username -->
                      The point of using Lorem Ipsum is that it has a more-or-less
                      normal distribution of letters, as opposed to using
                      'Content here, content here', making it look like readable English.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="{{asset('/dist/img/user.jpg')}}" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                    </div>
                  </form>
                </div>
                <!-- /.box-footer -->
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

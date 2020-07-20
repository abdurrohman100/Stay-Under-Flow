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
        <li class="{{ Request::is('dashboard') ? "active" : "" }}"><a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li class="{{ Request::is('user') ? "active" : "" }}"><a href="{{ route('userprofile') }}"><i class="fa fa-link"></i> <span>My Profile</span></a></li>
        <li class="{{ Request::is('myquestion') ? "active" : "" }}"><a href="{{ route('myquestion') }}"><i class="fa fa-link"></i> <span>My Question</span></a></li>
        <li class="{{ Request::is('myanswer') ? "active" : "" }}"><a href="{{ route('myanswer') }}"><i class="fa fa-link"></i> <span>My Answer</span></a></li>
        <li class="{{ Request::is('#') ? "active" : "" }}"><a href="#"><i class="fa fa-link"></i> <span>Sign Out</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
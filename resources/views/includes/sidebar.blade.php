<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa fa-bars fa-lg"></i> </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
        <img src="{{asset('images/farah.png')}}" class="img-circle elevation-2 img-size-40" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('home')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa fa fa-user fa-lg"></i> 
                  My Profile
                </a>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                <i class="fa fa fa-file-text fa-lg"></i> Superhero Campaign <i class="right fa fa fa-caret-left fa-2x"></i> 
                </a>
                <ul class="nav nav-treeview">
                    <li id="testimonial" class="nav-item"  style="padding-left:15px">
                      <a href="{{route('testimony')}}" class="nav-link active">
                      <i class="fa fa fa-file-text fa-lg"></i> Testimonial</a>
                    </li>
                    <li id="testimonial" class="nav-item"  style="padding-left:15px">
                      <a href="{{route('testimony.export')}}" class="nav-link active">
                      <i class="fa fa fa-file-excel-o fa-lg"></i> Export Testimonial</a>
                    </li>
                </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
         <!-- 
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
        </div>
        -->
      </div>
    </div>
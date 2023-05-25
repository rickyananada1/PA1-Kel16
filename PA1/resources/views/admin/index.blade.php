<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin GPDI</title>

     <!-- Google Font: Source Sans Pro -->
    <link
     rel="stylesheet"
     href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
   />
   <!-- Font Awesome Icons -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"
   />
   <!-- overlayScrollbars -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
   />
   <!-- Theme style -->
   <link
     rel="stylesheet"
     href="{{ asset('admin/dist/css/adminlte.min.css') }}"
     @stack('css')/>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin GPDI PORSEA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
  
      <div class="info">
        <a href="#" class="d-block">ADMIN GPDI</a>
        <a href="{{ route('logout') }}" class="d-block">Logout</a>
      </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}
              <li class="nav-item">
                <a href="/datajemaat" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                  <p>Data Jemaat </p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li>  --}}
              <li class="nav-item">
                <a href="/wartajemaat" class="nav-link">
              <i class="nav-icon fas fa-book"></i>  
                  <p>Warta Jemaat</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/jadwalibadah" class="nav-link">
                <i class="nav-icon fas fa-table"></i>  
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

              <li class="nav-item">
                <a href="/keuangan" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Informasi Keuangan</p>
                  </a>
                </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}

                <li class="nav-item">
                  <a href="/donasi" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
                    <p>Data Donasi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/photo" class="nav-link">
                  <i class="nav-icon far fa-image"></i>

                    <p>Galeri</p>
                  </a>
                </li>
          {{-- <li class="nav-header">Tambah Data</li> --}}


          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/tambahjemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahwarta" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Warta Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahjadwal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahkeuangan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Informasi Keuangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahdonasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Donasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahphoto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri</p>
                </a>
              </li>
            </ul>
          </li> --}}

        

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Selamat datang dihalaman admin</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  <!-- /.content-wrapper -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content" data-wow-delay="0.7s">
              <span class="info-box-text">Jumlah jemaat</span>
              <span class="info-box-number">
                {{ $jumlahjemaat }}
                <small>Orang</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div>
</div>
</section>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->  
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
<script src="assets/js/jquery-3.6.4.min.js"></script>
@stack('scripts')
@stack('scriptss')
@stack('scriptsss')
@stack('scriptssss')
@stack('scriptsssss')
@stack('s')
@stack('d')
@stack('dd')
@stack('ddd')
@stack('ss')
@stack('sss')
@stack('scriptssssss')
@stack('script')

</body>
</html>


<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ url('/dashboard') }}" class="site_title" title="Sistem Informasi Manajemen Aset"><i class="fa fa-cube"></i> <span>SIMAS</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="{{ asset('images/logo.png') }}" class="profile_img">
      </div>
      <div class="profile_info text-center">
        <h2>Dinas Cipta Karya</h2>
        <h2>dan</h2>
        <h2>Perumahan Rakyat</h2>
        <br>
        <h2>Kabupaten</h2>
        <h2>Indragiri Hilir</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <div class="clearfix"></div>
    <br>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
          <li class="dashboard"><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="daftar-aset"><a href="{{ route('inventaris.index') }}"><i class="fa fa-cubes"></i>  Daftar Asset</a></li>
          <li class="aset-baru"><a href="{{ route('inventaris.baru') }}"><i class="fa fa-plus"></i> Asset Baru</a></li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>
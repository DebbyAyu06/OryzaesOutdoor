<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="../assets/img/logo.png" height="35px" alt="" srcset="">
        </div>
        <div class="sidebar-brand-text mx-3">Oryzaes <sup>Outdoor</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ request()->is('penyewa') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('penyewa')}}">
            <i class="fas fa-user"></i>
            <span>Penyewa</span></a>
    </li>
    <li class="nav-item {{ request()->is('penyewaan') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('penyewaan')}}">
            <i class="fas fa-book"></i>
            <span>Penyewaan</span></a>
    </li>
    <li class="nav-item {{ request()->is('alat') ? 'active' : '' }}">
        <a class="nav-link" href="{{url('alat')}}">
            <i class="far fa-file-alt"></i>
            <span>Alat</span></a>
    </li>
    <li class="nav-item {{ request()->is('diskon') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('diskon') }}">
            <i class="fas fa-percent"></i>
            <span>Diskon</span></a>
    </li>
    <li class="nav-item {{ request()->is('laporan') ? 'active' : '' }}">
        <a class="nav-link" href="#">
            <i class="far fa-file-alt"></i>
            <span>Laporan Penyewaan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
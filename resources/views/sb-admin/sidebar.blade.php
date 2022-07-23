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
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/penyewa">
            <i class="fas fa-user"></i>
            <span>Penyewa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/penyewaan">
            <i class="fas fa-book"></i>
            <span>Penyewaan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/alat">
            <i class="far fa-file-alt"></i>
            <span>Alat</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Keuangan</a>
                <a class="collapse-item" href="cards.html">Penyewaan</a>
            </div>
        </div>
    </li>
    <!-- <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{url('dashboard')}}">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="{{ request()->is('penyewa') ? 'active' : '' }}">
        <a href="{{url('penyewa')}}">
            <i class="nc-icon nc-circle-10"></i>
            <p>Penyewa</p>
        </a>
    </li>
    <li class="{{ request()->is('penyewaan') ? 'active' : '' }}">
        <a href="{{url('penyewaan')}}">
            <i class="nc-icon nc-bullet-list-67"></i>
            <p>Penyewaan</p>
        </a>
    </li>
    <li class="{{ request()->is('alat') ? 'active' : '' }}">
        <a href="{{url('alat')}}">
            <i class="nc-icon nc-tile-56"></i>
            <p>Alat</p>
        </a>
    </li>
    <li class="{{ request()->is('laporan') ? 'active' : '' }}">
        <a href="{{url('laporan')}}">
            <i class="nc-icon nc-chart-bar-32"></i>
            <p>Laporan</p>
        </a>
    </li> -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
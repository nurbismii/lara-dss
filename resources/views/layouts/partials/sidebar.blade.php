<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DSS<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('home')}}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Penilaian</div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('penilaian')}}">
            <i class="fas fa-fw fa-check"></i>
            <span>DSS</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Inteface </div>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('alternatif')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Alternatif</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('himpunan')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Himpunan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('kriteria')}}">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Kriteria</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ Route('dashboard') }}" class="nav-link"><i
                        class="bi bi-house-door"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Siswa</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="bi bi-archive"></i>
                    <span>Data Absensi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ Route('absen.x') }}">X</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">XI</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">XII</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="bi bi-info-circle"></i>
                    <span>Data Pelanggaran</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">X</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">XI</a></li>
                    <li><a class="nav-link" href="bootstrap-breadcrumb.html">XII</a></li>
                </ul>
            </li>
    </aside>
</div>

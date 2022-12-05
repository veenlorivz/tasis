<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">TASIS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">TS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{ Route('dashboard') }}" class="nav-link"><i
                        class="bi bi-house-door"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Siswa</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="bi bi-person"></i>
                    <span>Data Siswa</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/siswa/X">X</a></li>
                    <li><a class="nav-link" href="/siswa/XI">XI</a></li>
                    <li><a class="nav-link" href="/siswa/XII">XII</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="bi bi-archive"></i>
                    <span>Data Absensi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/absen/X">X</a></li>
                    <li><a class="nav-link" href="/absen/XI">XI</a></li>
                    <li><a class="nav-link" href="/absen/XII">XII</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="bi bi-info-circle"></i>
                    <span>Data Pelanggaran</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="/pelanggaran/X">X</a></li>
                    <li><a class="nav-link" href="/pelanggaran/XI">XI</a></li>
                    <li><a class="nav-link" href="/pelanggaran/XII">XII</a></li>
                </ul>
            </li>
    </aside>
</div>

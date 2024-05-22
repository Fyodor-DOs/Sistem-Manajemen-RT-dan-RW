<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="logo img-fluid">
                <a href="index.html"><img src="./assets/image/Logo (2).svg" alt="Logo"
                        style="width: 100%; height: 75px;"></a>
            </div>
            <div class="d-flex justify-content-center align-items-center">

                <div class="sidebar-toggler  x">
                    <a href="#" id="sidebar-hide" class="sidebar-hide d-xl-none d-block"><i
                            class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item active">
                    <a href="{{ route('warga.index') }}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Data Warga</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Agenda Kegiatan</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bantuan Sosial</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mengelola Iuran (RW dan Bendahara)</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{ route('pengaduan.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Pengaduan Masalah</span>
                    </a>
                </li>

                <li class="sidebar-item active has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Mengelola Surat</span>
                    </a>

                    <ul class="submenu active">

                        <li class="submenu-item active ">
                            <a href="#" class="submenu-link">SKTM</a>

                        </li>

                        <li class="submenu-item  ">
                            <a href="#" class="submenu-link">Domilisi</a>

                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mengelola Iuran (RT)</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Laporan Keuangan</span>
                    </a>
                </li>

                <li class="sidebar-title">Setting</li>

                <li class="sidebar-item  ">
                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Profil</span>
                    </a>

                    <a href="form-layout.html" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include '../../config/config.php'; ?>
<?php include '../../config/koneksi.php'; ?>

<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="<?= $base_url ?>dashboard">SPK-SMART</a>
            <a class="navbar-brand brand-logo-mini" href="<?= $base_url ?>dashboard">WEB</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>dashboard">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-view-dashboard menu-icon"></i>
                    </a>
                </li>

                <!-- Parent Menu Data Laptop -->
                <li class="nav-item">
                    <a class="nav-link" id="dataLaptopToggle">
                        <span class="menu-title">Data Laptop</span>
                        <i class="mdi mdi-laptop menu-icon"></i>
                    </a>
                    <ul class="nav flex-column sub-menu" id="dataLaptopSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>informatika">Data Laptop Informatika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>manajemen">Data Laptop Manajemen</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>kriteria">
                        <span class="menu-title">Data Kriteria</span>
                        <i class="mdi mdi-database menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>subkriteria">
                        <span class="menu-title">Data Sub Kriteria</span>
                        <i class="mdi mdi-source-fork menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>alternatif">
                        <span class="menu-title">Data Alternatif</span>
                        <i class="mdi mdi-file-tree menu-icon"></i>
                    </a>
                </li>

                <!-- Parent Menu Perhitungan SPK -->
                <li class="nav-item">
                    <a class="nav-link" id="perhitunganSPKToggle">
                        <span class="menu-title">Perhitungan SPK</span>
                        <i class="mdi mdi-calculator menu-icon"></i>
                    </a>
                    <ul class="nav flex-column sub-menu" id="perhitunganSPKSubmenu" style="display: none;">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>utility/utilitas.php">Menghitung Nilai Utility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>skorakhir/akhir.php">Menghitung Nilai Akhir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $base_url ?>ranking/rank.php">Perankingan</a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>users">
                        <span class="menu-title">Data Users</span>
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item sidebar-actions">
                    <span class="nav-link">
                        <a href="<?= $base_url ?>auth" class="btn btn-block btn-lg btn-gradient-primary mt-4">Log Out</a>
                    </span>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <!-- Tambahkan JavaScript ini di bagian bawah sebelum penutupan tag </body> atau di dalam tag <script> jika menggunakan templating. -->
                <script>
                    document.getElementById('dataLaptopToggle').addEventListener('click', function() {
                        var submenu = document.getElementById('dataLaptopSubmenu');
                        if (submenu.style.display === "none" || submenu.style.display === "") {
                            submenu.style.display = "block";
                        } else {
                            submenu.style.display = "none";
                        }
                    });

                    // Toggle untuk menu Perhitungan SPK
                    document.getElementById('perhitunganSPKToggle').addEventListener('click', function() {
                        var submenu = document.getElementById('perhitunganSPKSubmenu');
                        if (submenu.style.display === "none" || submenu.style.display === "") {
                            submenu.style.display = "block";
                        } else {
                            submenu.style.display = "none";
                        }
                    });
                </script>
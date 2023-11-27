<?php
include '../koneksi.php';
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SMK Negeri Tembarak</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<!-- <hr class="sidebar-divider"> -->

<!-- Heading -->
<!-- <div class="sidebar-heading">
    Interface
</div> -->

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Pages
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Home</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Home:</h6>
            <a class="collapse-item" href="pages-banner.php">Banner</a>
            <a class="collapse-item" href="pages-grid.php">Grid</a>
            <a class="collapse-item" href="pages-stats.php">Stats</a>
            <a class="collapse-item" href="pages-foto_stats.php">Foto_stats</a>
            <a class="collapse-item" href="pages-popular.php">Popular</a>
            <a class="collapse-item" href="pages-review.php">Review</a>            
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-folder"></i>
        <span>About</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">About:</h6>
            <a class="collapse-item" href="pages-about.php">About</a>
            <a class="collapse-item" href="pages-fitur.php">Fitur</a>
            <a class="collapse-item" href="pages-guru.php">Guru</a>
            <a class="collapse-item" href="pages-progress.php">Progress</a>
            <a class="collapse-item" href="pages-pendaftaran.php">Pendaftaran</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Courses & Contact</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Courses:</h6>
            <a class="collapse-item" href="pages-courses.php">Courses</a>
            <a class="collapse-item" href="pages-kegiatan.php">Kegiatan</a>
            <h6 class="collapse-header">Contact:</h6>
            <a class="collapse-item" href="pages-home.php">Home</a>
            <a class="collapse-item" href="pages-contact.php">Contact</a>
            <a class="collapse-item" href="pages-kontak.php">Kontak</a>
        </div>
    </div>
</li>
<br>

<!-- Nav Item - Charts -->
<!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li> -->

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li> -->

<!-- Divider -->
<!-- <hr class="sidebar-divider d-none d-md-block"> -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="assets/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div> -->

</ul>
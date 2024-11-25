<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="<?= base_url('assets/') ?>logo.jpg" alt="AdminLTELogo" height="60"
				width="60">
		</div>
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="<?= base_url('assets/logo_buma_tabang.png') ?>" alt="Logo" style="height: 30px;">
                    </a>
                </li>
            </ul>
        </nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		  <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('/') ?>" class="brand-link">
                <img src="<?= base_url('assets/') ?>logo.jpg" alt="AdminLTE Logo"
                     class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">EcoWater Insight Pro</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/img/') ?>profil.jpg" class="img-circle elevation-2"
                             alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url('/') ?>" class="d-block">Eddy A.S</a>
                    </div>
                </div>
                
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-tint"></i>
                                <p>
                                    Water Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-chart-pie"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-envelope"></i>
                                <p>
                                    Email
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-widget="fullscreen" href="#">
                                <i class="fas fa-expand-arrows-alt"></i>
                                <p>Fullscreen</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/about'); ?>">
                                <i class="fas fa-user-circle"></i>
                                <p>About Me</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('/') ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
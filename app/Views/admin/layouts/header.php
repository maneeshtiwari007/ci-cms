<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CI-CMS | Dashboard</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE | Dashboard v2" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('backend/css/adminlte.css') ?>" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="<?= base_url('backend/css/overlayscrollbars.min.css') ?>" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="<?= base_url('backend/css/bootstrap-icons.min.css') ?>" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!-- ✅ Bootstrap 5.3 CSS -->
    <link href="<?= base_url('backend/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('backend/css/adminlte.css') ?>" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- Optional: Your custom CSS -->
    <link rel="stylesheet" href="<?= base_url('backend/css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('backend/css/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('backend/css/responsive.dataTables.min.css') ?>">
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-light">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!-- <header class="bg-dark text-white p-3">
            <div class="container">
                <h2>Admin Panel</h2>
                <nav>
                    <a href="<?= base_url('admin/dashboard') ?>" class="text-white me-3">Dashboard</a>
                    <a href="<?= base_url('admin/logout') ?>" class="text-white">Logout</a>
                </nav>
            </div>
        </header> -->
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                </ul>
                <!--end::Start Navbar Links-->

                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">

                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="<?= base_url('backend/img/user2-160x160.jpg') ?>"
                                class="user-image rounded-circle shadow" alt="User Image" />
                            <span class="d-none d-md-inline"><?= session('role') ?? 'Admin' ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?= base_url('admin/update-profile') ?>"><i class="bi bi-person fs-5 me-2"></i>My Profile</a>
                            </li>
                           <!--  <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Account Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li> -->
                            <li>
                                <a class="dropdown-item text-danger pb-2" href="<?= base_url('admin/logout') ?>"><i
                                        class="bi bi-power me-2"></i>Log
                                    out</a>
                            </li>
                        </ul>
                    </li>
                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <?= $this->include('admin/layouts/sidebar') ?>
        <!--end::Sidebar-->
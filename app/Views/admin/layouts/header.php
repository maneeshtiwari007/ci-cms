<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- ✅ Bootstrap 5.3 CSS -->
     <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Optional: Your custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>
<body>
<header class="bg-dark text-white p-3">
    <div class="container">
        <h2>Admin Panel</h2>
        <nav>
            <a href="<?= base_url('admin/dashboard') ?>" class="text-white me-3">Dashboard</a>
            <a href="<?= base_url('admin/logout') ?>" class="text-white">Logout</a>
        </nav>
    </div>
</header>
<main class="container py-4">

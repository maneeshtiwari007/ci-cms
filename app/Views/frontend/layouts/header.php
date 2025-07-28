<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI-CMS | Coming Soon</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Coming Soon">
    <meta name="description" content="In the meantime, Stay tuned. We are almost ready to launch.">
    <!-- Font Link -->
  

    
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Bootstrap & CSS -->
  <link href="<?= base_url('front/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('front/assets/css/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('front/assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('front/assets/images/logo.png') ?>" alt="Prime IT">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto justify-content-between width-100 py-3 mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><a class="dropdown-item" href="#">Calculate Monthly Cost</a></li>
            <li><a class="dropdown-item" href="#">Complete Business</a></li>
            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
            <li><a class="dropdown-item" href="#">Business IT Support</a></li>
            <li><a class="dropdown-item" href="#">Cloud Storage & Backup</a></li>
            <li><a class="dropdown-item" href="#">Email Support</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item">
          <a class="nav-link btn bg-dark btn-primary text-white px-3 ms-lg-2" href="#">Ready to Talk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</html>
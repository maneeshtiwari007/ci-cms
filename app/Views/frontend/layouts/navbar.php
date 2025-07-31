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
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown">About</a>
          <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item" href="<?= base_url('about/why-choose-us/') ?>">Why Choose Us?</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/prime-it/careers') ?>">Careers</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('services/web-development') ?>">Web Development</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/calculate-price') ?>">Calculate Monthly Cost</a></li>
            <li><a class="dropdown-item" href="<?= base_url('services/complete-business') ?>">Complete Business</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/services/digital-marketing') ?>">Digital Marketing</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/services/business-it-support') ?>">Business IT Support</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/services/cloud-storage-backup') ?>">Cloud Storage & Backup</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/services/email-support-and-services') ?>">Email Support and Services</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/blog') ?>">Blog</a></li>
        <li class="nav-item">
          <a class="nav-link btn bg-dark ready-to-talk  btn-primary text-white px-3 ms-lg-2" href="<?= base_url('/contact-us') ?>">Ready to Talk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
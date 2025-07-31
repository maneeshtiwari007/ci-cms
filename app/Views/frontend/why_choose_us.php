<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">About Us : Why Choose Us?</h1>
    <p class="lead  text-white">Trusted Australian IT experts delivering tailored, reliable, and affordable tech solutions since 2001.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Why Choose Us?</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">About Us : Why Choose Us?</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/appointment-counselling.jpg') ?>" alt="IT Services" class="img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Professional IT Services by Prime IT</h3>
        <p>
          <strong>Prime IT</strong> is an extension of <strong>Zylax Computers</strong> and provides professional IT Services including networking, server relocation, complete business solutions tailored to your needs, and website services at competitive rates.
        </p>
        <p>
          We are an <strong>Australian-based</strong>, family-owned company established in 2001, alongside <a href="https://www.zylax.com.au" target="_blank"><strong>Zylax Computers</strong></a> which has been operating since 1991.
        </p>
        <p>We are at the forefront of technology, offering solutions including:</p>
        <ul>
          <li>Cisco Router Configuration</li>
          <li>Server Setup for 5 to 150 Users</li>
          <li>Mail Services Setup with Office 365, Gmail, or Exchange Providers</li>
          <li>Web Hosting</li>
          <li>Off-site Data Hosting and Planning</li>
          <li>Disaster Recovery Planning</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-center trust-banner">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-white">You Can Trust Us</h2>
    <p class="mb-4 text-white">Prime IT guarantees that all our technology solutions will satisfy your business needs and make you our client for life. We bring together high end services with a passion for the best quality to stay at the top of what we do..</p>
  </div>
</section>

<section class="py-5 text-center text-bg-warning">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <a href="<?= base_url('contact-us') ?>" class="btn btn-primary">Contact Us</a>
  </div>
</section>

<?= $this->endSection() ?>
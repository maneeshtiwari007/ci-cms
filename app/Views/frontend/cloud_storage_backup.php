<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Clolud Backup<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
   <div class="container">
    <h1 class="display-6 text-white fw-bold">Cloud Storage & Backup</h1>
    <p class="lead  text-white">Secure your data and access it anytime, anywhere with our reliable cloud storage and backup solutions.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Cloud Storage & Backup</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Cloud Storage & Backup</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/cloud-storage.png') ?>" alt="IT Services" class="mb-4 img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Scalable and safe cloud storage with automated backup to protect your critical business data.</h3>
       
        <p>When it comes to data, nothing but the best and trustworthy will do. That’s why we at Prime IT Computers Pty Ltd. Is the leading name in Australia when it comes to a high quality, reliable and automatic data backup solutions. Be it small or big, every business requires data protection and security including maintenance and backup solutions in a secret and secure way. At Prime IT Computers we offer comprehensive, cutting edge and cost effective data backup solutions in Australia for small, medium and big enterprises. With us, you can easily manage and monitor your precious data files and records anytime and we will give you a transparent, effective and powerful data backup solution designed to meet your business needs.</p>
      </div>
      <div class="col-md-12">
        <p>We are one of the most reputed and reliable computer, IT, networking, data and technology companies in Australia and our rich experience has allowed us to offer highly functional, secure and easy to use data backup solutions at competitive prices. You can rely us on organizing, protecting and maintaining your important data all the time. Save the soul of your business today by contacting Prime IT Computers Pty Ltd. And ensure your business stays ahead while staying protected and organized.</p>
        <p>Whether you are starting up or are an established business, contact Prime IT Computers for premium and efficient data backup solutions in Australia at affordable prices. Our solutions can be customized to suit your company’s needs and requirements and you can rely on us for practical, reliable and advanced data backup solutions in Australia.</p>
      </div>
      <div class="col-md-6">
        <h4 class="mb-3">Fully Managed Backup Price Will Be <strong>$100</strong> Per TB</h4>
          <a class="btn btn-primary" href="#">Buy Now</a>
      </div>
      <div class="col-md-6">
        <h4 class="mb-3">Non- Managed Backup Price Will Be <strong>$75</strong> Per TB</h4>
         <a class="btn btn-primary" href="#">Buy Now</a>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-center bg-dark">
  <div class="container">
    <h2 class="text-white py-3">Key Features</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Automated Backup</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Data Protection</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Encrypted Security</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">24/7 Access</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Easy Monitoring</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Transparent System</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Affordable Plans</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Disaster Recovery</h5>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  
</section>

<section class="py-5 text-center text-bg-warning cto-block">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <a href="<?= base_url('contact-us') ?>" class="btn btn-primary">Contact Us</a>
  </div>
</section>

<?= $this->endSection() ?>
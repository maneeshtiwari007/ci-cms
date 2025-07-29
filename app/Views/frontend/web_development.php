<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Web Development</h1>
    <p class="lead  text-white">We build fast, responsive, and SEO-friendly websites tailored to your business needs.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Web Development</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Web Development</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/web-development.png') ?>" alt="IT Services" class="img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Custom Website Solutions That Drive Growth and Engagement</h3>
        <p>
          At <strong>Prime IT</strong>, we believe that a great website is more than just a pretty design. It should be optimized for search engines, fast-loading, and easy to navigate. That's why we use the latest technologies and development frameworks to create websites that are both beautiful and functional.
        </p>
        <p>We take a collaborative approach to every project, working closely with our clients to understand their goals and requirements. We believe that communication is key, and we keep our clients informed every step of the way. We also offer ongoing support and maintenance to ensure that your website remains up-to-date and secure.</p>
        <p>In addition to website design and development, we also offer a range of other services to help businesses succeed online. These include search engine optimization, social media marketing, and email marketing.</p>
        <p>We use the latest technologies and techniques to ensure that our clients' websites are fast, secure, and easy to use, and we are committed to staying on the cutting edge of web design and development.</p>
      
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
            <h5 class="card-title">WordPress Websites</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">E-Commerce</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Content Management</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Landing Pages</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">SEO</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">App Development</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Local Support</h5>
            <p class="card-text">Maintenance and services from a local, trusted team.</p>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  
</section>

<section class="py-5 text-center text-bg-warning">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <input name="submit" type="submit" value="Contact Us">
  </div>
</section>

<?= $this->endSection() ?>
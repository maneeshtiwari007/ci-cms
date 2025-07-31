<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Business IT Support<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
   <div class="container">
    <h1 class="display-6 text-white fw-bold">Business IT Support</h1>
    <p class="lead  text-white">Reliable, responsive IT support solutions to keep your business running smoothly — anytime, anywhere.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Business IT Support</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Business IT Support</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/digital-marketing.jpg') ?>" alt="IT Services" class="mb-4 img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Comprehensive Business IT Support Services Tailored for Small to Medium Enterprises Across Australia.</h3>
       
        <p>Does your business have IT requirements to meet? Trust the experts at Prime IT for IT Consulting Services for end-to-end information technology services and solutions at the best prices. We at Prime IT understand that every business has its own unique needs and requirements, and we offer tailor-made, customized and effective IT consulting services in Sydney and Melbourne, to both small and medium size businesses. Our wide range of IT services and solutions have helped numerous companies and brands to leverage their growth and meet their IT requirements at effective prices. Prime IT is a leading and trusted name in computer products, peripherals, IT and Networking services, solutions and consulting. Whatever be your need, we are here to meet your expectations every single time with our best offerings and rich expertise in IT consulting.</p>
      </div>
      <div class="col-md-12">
        <p>Whether you have a technical background or not, our expert professionals will help you with our special advice and recommendations to meet your daily, periodically and annually IT requirements with ease and transparency. We are fully capable to handle any type of IT demands for managing and maintaining your IT infrastructure in Australia. At Prime IT Computers, we offer practical, reliable and cost-effective IT consultation services in Australia and that makes us a better choice amongst all our competitors.</p>
        <p>Our foremost aim is client and customer satisfaction and thus we deliver cutting edge IT solutions to help you achieve your business goals in an optimum way. Contact Prime IT today to get the best out of your current IT infrastructure and save your time, money and resources.</p>
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
            <h5 class="card-title">Tailored Solutions</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">End-to-End Support</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Device Management</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Network Services</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Cost Efficiency</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Business Continuity</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Trusted Experts</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Customer Satisfaction</h5>
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
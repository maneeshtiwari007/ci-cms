<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>

<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Complete Business</h1>
    <p class="lead  text-white">Complete Business Solutions: End-to-end IT and digital services tailored to streamline and support your entire business operations.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Complete Business</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Complete Business</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/web-development.png') ?>" alt="IT Services" class="img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">End-to-end IT and digital services tailored to streamline and support your entire business operations.</h3>
       
        <p>PRIME IT offers Remote IT Support, high-end Technology solutions and Server Support Services for all sized businesses via phone and online support. PRIME IT resurrecting as one of the leading IT Solutions provider in Australia. From servers to desktops, from printers to peripheral devices, PRIME IT has support solutions for all. Covering over number of desktop, servers, hardware devices, peripherals, printers, modem and routers our name has become a synonym for complete IT support package. A high customer satisfaction rate has made PRIME IT as the best and most affordable IT support solutions provider across the Australia. We give a complete bundle of online administrations for small, medium and expansive organization that need to attain to expanded perceptibility, leads and deals. We realise totally new possibilities, and utilization unique and innovative thoughts to guarantee the most astounding quality administration for your organization and to stay in front of the opposition.</p>
       
      </div>
      <div class="col-md-12">
        <p>PRIME IT offers remote specialized backing to determine a wide range of PC issues. We give routine PC support benefits through a few organized PC help plans. We have structured our computer services focusing on your specific needs. Yearly, Quarterly and monthly Support are the three long term tech support plans. We have designed them to give you a consistent support staying constantly within your reach</p>
        <h5>Our business offer the following services and much much more</h5>
        <ul>
          <li>Small Business Server. We are experts in Small Business Server implementation and willing to assist you, make the most of your IT investment.</li>
          <li> Desktop and Server Support Our existing customers not only retain their trust in Sydney.</li>
          <li> Sydney also spread the word of mouth by referring us to others in business.</li>
          <li>  Cloud and Hosted Services Cloud Computing can reduce the cost of IT</li>
          <li>  Small and medium sized businesses like never before with easy and quick scalability.</li>
          <li> And other IT Services Server Consultancy offer proactive
          <li> IT Infrastructure support and management services to small and medium size businesses.</li>
        </ul>
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
            <h5 class="card-title">End-to-End IT Support</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Remote IT Assistance</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Small Business Server Expertise</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Desktop & Server Maintenance</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Scalable Technology Solutions</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Local Support</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Customer-Centric Approach</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Data Backup & Recovery</h5>
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
<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Digital Marketing<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Digital Marketing</h1>
    <p class="lead  text-white">Drive growth and visibility with targeted digital marketing strategies tailored to your business goals.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Digital Marketing</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Digital Marketing</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/digital-marketing.jpg') ?>" alt="IT Services" class="mb-4 img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">In-Depth Market Research</h3>
       
        <p>Digital marketing is the most powerful tool that uses electronic media as a base to advertise and grow businesses. It acts as a cost-effective and efficient alternative to traditional advertising. With its wide reach and real-time engagement, digital marketing allows business owners to increase profits and connect with clients globally.</p>
        <p>There are numerous ways digital marketing can help your business thrive — from building brand awareness and generating leads to boosting conversions and nurturing long-term customer relationships. The benefits are undeniable, and to stay competitive, businesses must take full advantage of these strategies.</p>
      </div>
      <div class="col-md-12">
        
        <div class="row">
         
          <div class="col-md-6">
            <h5>Our Core Digital Marketing Services</h5>
            <ul>
              <li>In-Depth Market Research</li>
              <li>Digital Media Planning</li>
              <li>Mobile Marketing</li>
              <li>Social Media Marketing</li>
              <li>A Whole New Level of SEO</li>
              <li>Content Creation & Management</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5>Key Benefits of Our Marketing Approach</h5>
            <ul>
              <li>Greater amount of people get awareness about your business as increase in ranking</li>
              <li>Enhanced and egregious online presence</li>
              <li>Long lasting rankings on superior search engines</li>
              <li>Targeted visitors equals to customers</li>
              <li>Track-able and long lasting results</li>
              <li>Search engines will find your website relevant and facile to crawl</li>
              <li>Improved brand awareness and marketing positioning</li>
              <li>Next level of business</li>
              <li>Exploring new and better opportunities which were not possible before</li>
              <li>Stay ahead of your competitors Decrease in advertisement expenditure</li>
            </ul>
          </div>

        </div>
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
            <h5 class="card-title">Market Research</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Media Planning</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">SEO Optimization</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Lead Generation</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Cost-effective Campaigns</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Targeted Traffic</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Long-Term Results</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Social Marketing</h5>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  
</section>

<section class="py-5 text-center text-bg-warning">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <a href="<?= base_url('contact-us') ?>" class="btn btn-primary">Contact Us</a>
  </div>
</section>

<?= $this->endSection() ?>
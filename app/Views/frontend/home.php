<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section>
  <!-- Full Width Carousel Slider -->
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <?php foreach ($sliders as $index => $slider): ?>
        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
          <img src="<?= base_url('uploads/sliders/' . $slider['image']) ?>" class="d-block w-100" alt="Slide <?= $index + 1 ?>">
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<section class="CalculateMontly text-center py-5">
  <div class="container">
    <h2>Want to know your investment?</h2>
    <p>Use our calculator to estimate your monthly cost based on your business needs.</p>
    <a href="<?=  base_url('/calculate-price') ?>" class="btn cta-gradient mt-3">
      Click to <strong>Calculate Your Monthly Cost</strong>
    </a>
  </div>
</section>

<section class="text-center bg-dark py-5 ">
  <div class="container">
    <h2 class="text-white">Looking for complete IT support under one roof? Prime IT has you covered.</h2>
    <p class="text-white">Prime IT is your one-stop solution for comprehensive business IT support in Sydney. From website design and logo creation to digital marketing, IT services, and hardware & software sales — we handle it all.
      Let us take care of your digital and technical needs so you can focus on what matters most: growing your business.</p>
  </div>
</section>

<section class="py-5 bg-light our-services">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Our Services</h2>
    </div>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="<?= base_url('front/assets/images/it-support.png') ?>" class="card-img-top" alt="Business IT Support">
          <div class="card-body">
            <h5 class="card-title">Business IT Support in Sydney</h5>
            <p class="card-text">Taste the perfection of Business IT Support with us. We pride ourselves on delivering effective, long-lasting IT solutions across the globe.</p>
            <a href="#" class="btn btn-primary mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="<?= base_url('front/assets/images/cloud-backup.png') ?>" class="card-img-top" alt="Cloud Storage and Backup">
          <div class="card-body">
            <h5 class="card-title">Cloud Storage and Backup Services</h5>
            <p class="card-text">Access your files not just from your office, but from your home desktop or mobile phone with Prime IT’s secure cloud storage solutions.</p>
            <a href="#" class="btn btn-primary mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="<?= base_url('front/assets/images/graph-up.png') ?>" class="card-img-top" alt="SEO and Adwords">
          <div class="card-body">
            <h5 class="card-title">SEO and Adwords Services</h5>
            <p class="card-text">Prime IT offers expert SEO and Adwords services to help all types of businesses reach their digital marketing goals efficiently.</p>
            <a href="#" class="btn btn-primary mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <img src="<?= base_url('front/assets/images/email-support.png') ?>" class="card-img-top" alt="Email Support and Services">
          <div class="card-body">
            <h5 class="card-title">Email Support and Services</h5>
            <p class="card-text">Every support email is a chance to build trust. Let us manage your email support to strengthen your customer relationships.</p>
            <a href="#" class="btn btn-primary mt-2">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="py-5 bg-dark">
  <div class="container text-center">
    <h2 class="mb-5 fw-bold text-white">3 Main Reasons Explaining Why to Choose Us</h2>
    <div class="row g-4">

      <!-- Reason 1: Best Price -->
      <div class="col-md-4">
        <div class="p-4 bg-white shadow-sm h-100 rounded">
          <div class="mb-3">
            <img src="<?= base_url('front/assets/images/price.png') ?>" alt="Best Price" class="mb-2">
          </div>
          <h5 class="fw-semibold">The Best Price</h5>
          <p class="text-muted mb-0">
            We understand your business needs and offer competitive pricing to meet both quality and budget expectations. Get value without compromise.
          </p>
        </div>
      </div>

      <!-- Reason 2: Great Support -->
      <div class="col-md-4">
        <div class="p-4 bg-white shadow-sm h-100 rounded">
          <div class="mb-3">
            <img src="<?= base_url('front/assets/images/support-team.png') ?>" alt="Great Support" class="mb-2">
          </div>
          <h5 class="fw-semibold">Great Support</h5>
          <p class="text-muted mb-0">
            Count on us when things go wrong. Our expert technicians are just a phone call away, offering quick and reliable assistance whenever needed.
          </p>
        </div>
      </div>

      <!-- Reason 3: Fast Repair -->
      <div class="col-md-4">
        <div class="p-4 bg-white shadow-sm h-100 rounded">
          <div class="mb-3">
            <img src="<?= base_url('front/assets/images/fast.png') ?>" alt="Fast Repair" class="mb-2">
          </div>
          <h5 class="fw-semibold">Fast Repair</h5>
          <p class="text-muted mb-0">
            Time is money. Save both with our rapid repair services. Our quick turnaround ensures your business gets back to normal operations fast.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="infographic-section bg-white py-5">
  <div class="container text-center">
    <h2 class="mb-5 fw-bold">How We Build Your Business</h2>
    <div class="infographic-flow">

      <!-- Website Design -->
      <div class="icon-box">
        <img src="<?= base_url('front/assets/images/web.png') ?>" alt="Website Design">
        <div>Website Design</div>
      </div>

      <div class="plus-sign">+</div>

      <!-- Digital Marketing -->
      <div class="icon-box">
        <img src="<?= base_url('front/assets/images/digital.png') ?>" alt="Digital Marketing">
        <div>Digital Marketing</div>
      </div>

      <div class="plus-sign">+</div>

      <!-- IT Support -->
      <div class="icon-box">
        <img src="<?= base_url('front/assets/images/support.png') ?>" alt="IT Support">
        <div>IT Support</div>
      </div>

      <div class="plus-sign">+</div>

      <!-- Cloud Storage -->
      <div class="icon-box">
        <img src="<?= base_url('front/assets/images/cloud.png') ?>" alt="Cloud Storage">
        <div>Cloud Storage</div>
      </div>

      <div class="equals-sign">=</div>

      <!-- Your Business -->
      <div class="icon-box">
        <img src="<?= base_url('front/assets/images/your-business.png') ?>" alt="Your Business">
        <div>Your Business</div>
      </div>

    </div>
  </div>
</section>


<section class="py-5 text-center not-sure-block">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-white">Not sure what you need?
      </h2>
    <p class="mb-4 text-white">Different businesses have different needs. Find out which products meet your needs.
      
    </p>
    <!-- <input name="submit" type="submit" value="Get A Consultation"> -->
    <a href="<?= base_url('contact-us') ?>" class="btn btn-primary">Get A Consultation</a>
  </div>
</section>




<?= $this->endSection() ?>





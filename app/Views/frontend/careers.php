<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">About Us : Careers</h1>
    <p class="lead  text-white">Explore exciting career opportunities in the ever-evolving world of IT at Zylax Computers.</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Careers</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Job Opportunities</h2>
    <div class="row">
      <!-- Text Content -->
      <div class="col-md-12">
        <h3 class="mb-3">IT Professional's has good opportunity at Prime IT</h3>
        <p>At <strong>Prime IT</strong>, we believe our people are our greatest strength. We’re constantly seeking motivated, skilled, and passionate individuals who want to grow their careers in the IT industry. Whether you’re a tech enthusiast, a networking specialist, or someone who excels in customer support, you’ll find exciting opportunities and challenging projects with us. Our work spans across server setups, network configuration, web hosting, and cloud solutions — all designed to shape the future of IT services.</p>
        <p>         
          We offer a collaborative and supportive work environment where learning never stops. From mentorship and hands-on training to exposure to cutting-edge technologies, we ensure every team member is empowered to grow professionally. With flexible work culture, strong ethics, and over three decades of industry trust, we provide the stability of a well-established company with the agility of a growing team.
        </p>
        <p>
          If you're looking to work on impactful solutions with a company that values integrity, innovation, and dedication — <strong>Prime IT</strong> is the place to be. Join us and take your IT career to new heights.
        </p>
       
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4">Send Your Resume.</h2>
    <form method="post" action="your-backend-script.php" enctype="multipart/form-data" class="p-4 border rounded shadow-sm">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
      
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      
        <div class="col-md-6 mb-3">
          <label for="message" class="form-label">Your Message</label>
          <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
      
        <div class="col-md-6 mb-3">
          <label for="resume" class="form-label">Upload Resume</label>
          <input class="form-control" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>

    </form>
  </div>
</section>


<section class="py-5 text-center text-bg-warning">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <input name="submit" type="submit" value="Contact Us">
  </div>
</section>

<?= $this->endSection() ?>
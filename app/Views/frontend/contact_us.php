<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Contact Us<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Ready to Talk</h1>
    <p class="lead  text-white"> Let's discuss how Prime IT can power your next tech project—get in touch with our experts today!</p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
</section>



<section class="py-5">
  <div class="container">
    <div class="row g-5 align-items-start">
      
      <!-- Left Content -->
      <div class="col-lg-6">
        <h2>About Prime IT</h2>
        <p>We have the most talented people in house that are excited to start with your new project. It is the drive that makes them creative. We have the most talented people in house that are excited to start with your new project. It is the drive that makes them creative.</p>

        <h4 class="mt-4">Your Perfect Tech Partner</h4>
        <p class="mb-1 fw-semibold">Prime IT Pty Ltd</p>
        <p class="mb-1">13/4A Foundry Road, Seven Hills,</p>
        <p class="mb-1">NSW-2147</p>
        <p class="mb-1">Call us now: <a href="tel:1300141822">1300 141822</a></p>
      </div>

      <!-- Right Form -->
     <div class="col-lg-6">
      
  <form action="<?= base_url('contact-submit') ?>" method="post" class="needs-validation" novalidate>
  
  <!-- Name -->
  <div class="mb-3">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" class="form-control <?= isset($validation) && $validation->hasError('your-name') ? 'is-invalid' : '' ?>" name="your-name" value="<?= old('your-name') ?>" required>
    <?php if (isset($validation) && $validation->hasError('your-name')): ?>
      <div class="invalid-feedback">
        <?= $validation->getError('your-name') ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- Email -->
  <div class="mb-3">
    <label for="email" class="form-label">Your Email</label>
    <input type="email" class="form-control <?= isset($validation) && $validation->hasError('your-email') ? 'is-invalid' : '' ?>" name="your-email" value="<?= old('your-email') ?>" required>
    <?php if (isset($validation) && $validation->hasError('your-email')): ?>
      <div class="invalid-feedback">
        <?= $validation->getError('your-email') ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- Contact -->
  <div class="mb-3">
    <label for="contact" class="form-label">Contact No</label>
    <input type="text" class="form-control <?= isset($validation) && $validation->hasError('contact') ? 'is-invalid' : '' ?>" name="contact" value="<?= old('contact') ?>" required>
    <?php if (isset($validation) && $validation->hasError('contact')): ?>
      <div class="invalid-feedback">
        <?= $validation->getError('contact') ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- Subject -->
  <div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" class="form-control <?= isset($validation) && $validation->hasError('your-subject') ? 'is-invalid' : '' ?>" name="your-subject" value="<?= old('your-subject') ?>">
    <?php if (isset($validation) && $validation->hasError('your-subject')): ?>
      <div class="invalid-feedback">
        <?= $validation->getError('your-subject') ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- Message -->
  <div class="mb-3">
    <label for="message" class="form-label">Your Message</label>
    <textarea class="form-control <?= isset($validation) && $validation->hasError('your-message') ? 'is-invalid' : '' ?>" name="your-message"><?= old('your-message') ?></textarea>
    <?php if (isset($validation) && $validation->hasError('your-message')): ?>
      <div class="invalid-feedback">
        <?= $validation->getError('your-message') ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- reCAPTCHA -->
  <div class="mb-3">
    <div class="g-recaptcha" data-sitekey="<?= getenv('recaptcha.secret') ?>"></div>
    <?php if (isset($validation) && $validation->hasError('g-recaptcha-response')): ?>
      <div class="text-danger small">
        <?= $validation->getError('g-recaptcha-response') ?>
      </div>
    <?php endif; ?>
  </div>

  <button type="submit" class="btn btn-primary">Send</button>
</form>

</div>

    </div>
  </div>
</section>

<section>
  <div class="container">
      <h3>Location</h3>
  </div>
  <iframe style="border: 1;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.7404729119735!2d150.95300301491912!3d-33.767371721232514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a275e895f047%3A0x7ca45210afc651b4!2sPrime%20IT%20Pty%20Ltd!5e0!3m2!1sen!2sin!4v1677838889064!5m2!1sen!2sin" width="100%" height="400" frameborder="1" allowfullscreen=""></iframe>
     
</section>



<section class="py-5 text-center text-bg-warning cto-block">
  <div class="container text-center py-5">
    <h2 class="mb-4 text-black">Call for help now! 1300 141822</h2>
    <a href="<?= base_url('contact-us') ?>" class="btn btn-primary">Contact Us</a>
  </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>">

<!-- Toastr JS -->
<script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>
<script>
  <?php if (session()->getFlashdata('success')): ?>
        toastr.success("<?= session()->getFlashdata('success'); ?>");
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        toastr.error("<?= session()->getFlashdata('error'); ?>");
    <?php endif; ?>
</script>


<script>
$recaptchaSecret = getenv('recaptcha.secret');
$recaptchaSecret = $recaptchaSecret;
$recaptchaResponse = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if(intval($responseKeys["success"]) !== 1) {
  echo "Please complete the reCAPTCHA";
} else {
  // process form
}
</script>
<?= $this->endSection() ?>
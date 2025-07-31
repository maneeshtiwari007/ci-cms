<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Digital Marketing<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Email Support & Services</h1>
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
        <li class="breadcrumb-item active " aria-current="page">Email Support & Services</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5">
  <div class="container">
    <h2 class="mb-4">Email Support & Services</h2>
    <div class="row align-items-top">
      <!-- Left Column: Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= base_url('front/assets/images/email-marketing.png') ?>" alt="IT Services" class="mb-4 img-fluid rounded shadow" />
      </div>

      <!-- Right Column: Text Content -->
      <div class="col-md-6">
        <h3 class="mb-3">Comprehensive Business IT Support Services Tailored for Small to Medium Enterprises Across Australia.</h3>
       
        <p>One of the most popular means of communication, Email remains the top choice for business communications. When it comes to communication, it is essential to maintain a continuous and open handed exchange of information between your clients and/or your customers. If your business requires a strengthened, secure and scalable email support and Exchange server support, Gmail, Office 365 or other means of email communication in Sydney, look no further than Prime IT that provides MDaemon, Gmail and MS Exchange server support at best prices in Australia. Prime IT offers a comprehensive range of customizable email support and MS Exchange services which you can utilize to deliver excellent customer and client support and boost your business reputation.</p>
      </div>
      <div class="col-md-12">
        <p>Get all your professional email accounts with your business name and manage all your features with our seamless email support and services Australia wide. Whether you are a small or a big business, get complete sync of your email, calendar, contacts across all devices and stay connected via a secure, reliable and responsive email systems with Prime IT. Our round-the-clock monitoring and service assistance will ensure you get complete peace of mind by outsourcing your email support to our experienced technical team.</p>
        <p>With Prime IT, many leading brands and businesses have greatly benefited from our prompt support and hassle free assistance. We support various email server technologies such as MS Exchange (up to latest version of 2016), MDaemon and Gmail to allow you to move your data from Microsoft server to any other email server or other way around, and save time and efforts. Thus, with Prime IT, you can manage your core business better and leave the email support and service part in Sydney to our experts. A low cost and non-intrusive process, you can access all your information, contacts and emails on multiple devices such as PC, Laptop or Mobile by simply outsourcing your email support to us and experiencing high quality services with a quick turnaround time.</p>
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
            <h5 class="card-title">Business Email Setup</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Gmail & Office 365</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Email Migration</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Contact Management</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Spam Protection</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Custom Domain Emails</h5>
          </div>
        </div>
      </div>
  
      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Data Backup</h5>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Seamless Integration</h5>
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
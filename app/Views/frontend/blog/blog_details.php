<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Blog<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Blog Detail Title</h1>
    <p class="lead  text-white">blog </p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>


<!-- Page Header with Background Image -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="/" class="">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Blog</li>
      </ol>
    </nav>
  </div>
</section>


<section class="py-5 blog-detail">

  <div class="container py-2">
      <div class="row">
        <!-- Left Content Area -->
        <div class="col-lg-9 content-block">
          <h1>Content Management</h1>
          <div class="d-flex author">
            <div class="author-item">
              <i class="bi bi-person"></i>
              <a href="#" class="text-decoration-none">admin</a>
            </div>
            <div class="author-item">
              <i class="bi bi-calendar-event"></i>
              <a href="#" class="text-decoration-none">Aug 07, 2024</a>
            </div>
          </div>
    
          <img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="img-fluid width-100" alt="Monitor Guide">
    
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet.</p>
          <p>Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
          <h4>Why Should You Choose Us?</h4>
          <ul>
            <li >Consider screen size and resolution</li>
            <li >Check refresh rate and response time</li>
            <li >Ensure the monitor has needed ports</li>
          </ul>
    
          <!-- Tags -->
          <div class="content-tags">
            <a href="#" class=""><i class="bi bi-tag-fill "></i>SEO</a>
            <a href="#" class=""><i class="bi bi-tag-fill "></i>App Development</a>
            <a href="#" class=""><i class="bi bi-tag-fill "></i>Technology</a>
          </div>
    
          <!-- Previous Blog -->
          <div class="other-block">
              <a class="otherblogCotent" href="#">
                  <div class="imgBlock"><img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="rounded me-3" alt="Previous Post Thumbnail"></div>
                  <div class="textBlock">
                      <small >Previous Post</small>
                      Top 5 web design in 2025
                  </div>
              </a>
              <a class="otherblogCotent" href="#">
                  <div class="imgBlock"><img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="rounded me-3" alt="Previous Post Thumbnail"></div>
                  <div class="textBlock">
                      <small >Next Post</small>
                      Top 5 web design in 2025
                  </div>
              </a>
          </div>
        </div>
    
        <!-- Right Sidebar -->
        <div class="col-lg-3 blogSidebar">
          
          <!-- Search -->
          <div class="searchSection">
            <h2>Search</h2>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search...">
              <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
    
          <!-- Categories -->
          <div class="widgetSection categorySection">
            <h3 >Category</h2>
            <ul>
              <li>
                  <a href="#">
                      <div class="imageText">
                          <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Web Development</span>
                      </div>
                      <span  class="badge">8</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="imageText">
                          <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Digital Marketing</span>
                      </div>
                      <span class="badge">18</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="imageText">
                          <img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Email Support</span>
                      </div>
                      <span  class="badge">98</span>
                  </a>
              </li>
            </ul>
          </div>
    
          <!-- Recent Posts -->
          <div class="widgetSection recentPostSection">
            <h3 >Recent Posts</h2>
            <ul>
              <li >
                  <a href="#" class="">
                  <img src="<?= base_url('front/assets/images/blog-1.jpeg') ?>" class="" alt="Recent Post">
                  Web development 
                  </a>
              </li>
              <li >
                  <a href="#" class="">
                      <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="" alt="Recent Post">
                      Social Media
                      </a>
              </li>
              <li >
                  <a href="#" class="">
                      <img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="" alt="Recent Post">
                      Cloud Backup
                      </a>
              </li>
            </ul>
          </div>
    
          <!-- Popular Tags -->
          <div class="widgetSection tagsSection">
            <h3 >Popular Tag</h2>
            <div class="tags">
              <a href="#" class="btn">Social Media</a>
              <a href="#" class="btn">Web Development </a>
              <a href="#" class="btn">Cloud </a>
              <a href="#" class="btn">Content Management</a>
              <a href="#" class="btn">Data Entry</a>
            </div>
          </div>
    
        </div>
      </div>
    </div>

  
 </section>

<?= $this->endSection() ?>
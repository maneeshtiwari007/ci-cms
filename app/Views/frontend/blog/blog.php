<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?>Blog<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold">Blog</h1>
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



<section class="py-5 blog-listing">

  <div class="container">
      <div class="row">
          <div class="col-lg-9">
              <div class="row g-4">
                  <!-- Blog Card Start -->
                  <div class="col-md-4">
                      <div class="card h-100 ">
                          <a href="blog-detail.html" class="">  <img src="<?= base_url('front/assets/images/blog-1.jpeg') ?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Repeat Blog Cards as needed -->
                  
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class="">  <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
              
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <h5 class="card-title">Buying a computer Monitor Guide</h5>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Blog Card End -->
                      <!-- Blog Card Start -->
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-1.jpeg') ?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class="">  <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Repeat Blog Cards as needed -->
                  
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-1.jpeg')?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
              
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-2.jpeg')?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Blog Card End -->
                      <!-- Blog Card Start -->
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-3.jpeg')?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Repeat Blog Cards as needed -->
                  
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-1.jpeg')?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
              
                  <div class="col-md-4">
                      <div class="card h-100 ">
                      <a href="blog-detail.html" class=""> <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="card-img-top" alt="Blog Image"></a>
                      <div class="card-body">
                          <p class=" small mb-1">26 Nov, 2024</p>
                          <a href="blog-detail.html" class=""> <h5 class="card-title">Buying a computer Monitor Guide</h5></a>
                          <p class="card-text">
                          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium…
                          </p>
                          <a href="<?= base_url('/blog/details') ?>" class="read-more d-inline-flex align-items-center">
                          Read More <i class="bi bi-arrow-up-right"></i>
                          </a>
                      </div>
                      </div>
                  </div>
                  <!-- Blog Card End -->    
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
                          <img src="<?= base_url('front/assets/images/blog-1.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Web</span>
                      </div>
                      <span  class="badge">8</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="imageText">
                          <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Cloud</span>
                      </div>
                      <span class="badge">18</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="imageText">
                          <img src="<?= base_url('front/assets/images/blog-3.jpeg') ?>" class="rounded me-2" alt="Category">
                          <span>Social</span>
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
                      <img src="<?= base_url('front/assets/images/blog-2.jpeg')?>" class="" alt="Recent Post">
                      Social Media
                      </a>
              </li>
              <li >
                  <a href="#" class="">
                      <img src="assets/images/blog-3.jpeg" class="" alt="Recent Post">
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


    <ul class="pagination py-3">

      <li>
          <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=1" aria-label="First">
              <span aria-hidden="true">First</span>
          </a>
      </li>
      <li>
          <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=1" aria-label="Previous">
              <span aria-hidden="true">Previous</span>
          </a>
      </li>
          
      <li class="active">
  <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=1">
      1				</a>
  </li>
      <li>
  <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=2">
      2				</a>
  </li>
      <li>
  <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=3">
      3				</a>
  </li>
  <li>
      <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=3">
          4				</a>
      </li>
      <li>
          <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=3">
              5				</a>
          </li>

      <li>
  <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=4" aria-label="Next">
      <span aria-hidden="true">Next</span>
  </a>
  </li>
  <li>
  <a href="https://dev2.zylaxonline.com.au/laptops?attr%5Bdisplay-size%3A26%5D%5B0%5D=10-to-13&amp;page=4" aria-label="Last">
      <span aria-hidden="true">Last</span>
  </a>
  </li>
  </ul>
  
 </section>

<?= $this->endSection() ?>
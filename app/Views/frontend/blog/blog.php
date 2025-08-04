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
                  <?php if (!empty($blogs)): ?>
                    <?php foreach ($blogs as $blog): ?>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <a href="<?= base_url('blog/details/' . $blog['slug']) ?>">
                                    <img src="<?= base_url('uploads/blogs/' . $blog['image']) ?>" class="card-img-top" alt="<?= esc($blog['title']) ?>">
                                </a>
                                <div class="card-body">
                                    <p class="small mb-1"><?= date('d M, Y', strtotime($blog['created_at'])) ?></p>
                                    <a href="<?= base_url('blog/details/' . $blog['slug']) ?>">
                                        <h5 class="card-title"><?= esc($blog['title']) ?></h5>
                                    </a>
                                    <p class="card-text">
                                        <?= character_limiter(strip_tags($blog['description']), 100) ?>
                                    </p>
                                    <a href="<?= base_url('blog/details/' . $blog['slug']) ?>" class="read-more d-inline-flex align-items-center">
                                        Read More <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p>No blogs found.</p>
                    </div>
                <?php endif; ?>
    
              </div>
          </div>
           <!-- Right Sidebar -->
        <div class="col-lg-3 blogSidebar">
          
          

          <div class="searchSection">
            <h2>Search</h2>
            <form method="get" action="<?= base_url('blog') ?>">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..." value="<?= esc($searchTerm ?? '') ?>">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>

    
          <!-- Categories -->
        <div class="widgetSection categorySection">
            <h3>Category</h3>
            <ul>
                <?php foreach ($categories as $category): ?>
                <li>
                    <a href="javascript:void(0);">
                    <div class="imageText">
                        <img src="<?= base_url('front/assets/images/blog-1.jpeg') ?>" class="rounded me-2" alt="Category">
                        <span><?= esc($category['name']) ?></span>
                    </div>
                    <span class="badge"><?= $category['blog_count'] ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

          <!-- Recent Posts -->
        <div class="widgetSection recentPostSection">
            <h3>Recent Posts</h3>
            <ul>
                <?php foreach ($recentPosts as $post): ?>
                    <li>
                        <a href="<?= base_url('blog/details/' . $post['slug']) ?>">
                            <img src="<?= base_url('uploads/blogs/' . $post['image']) ?>" alt="<?= esc($post['title']) ?>">
                            <?= esc($post['title']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>


    
          <!-- Popular Tags -->
        <div class="widgetSection tagsSection">
            <h3>Popular Tags</h3>
            <div class="tags">
                <?php foreach ($popularTags as $tag): ?>
                    <a href="javascript:void(0);" class="btn"><?= esc($tag) ?></a>
                <?php endforeach; ?>
            </div>
        </div>

    
        </div>
      </div>
    </div>


  <div class="d-flex justify-content-center mt-4">
    <?= $pager->links('default', 'default_full') ?>
</div>


  
 </section>

<?= $this->endSection() ?>
<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('pageTitle') ?><?= esc($blog['title']) ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page Header with Background Image -->
<header class="bg-dark text-white py-5 pt-5 position-relative" style="background-image: url('<?= base_url('front/assets/images/inner-banner.jpg'); ?>'); background-size: cover; background-position: center;">
  <div class="container">
    <h1 class="display-6 text-white fw-bold"><?= esc($blog['title']) ?></h1>
    <p class="lead text-white"><?= character_limiter(strip_tags($blog['description']), 100) ?></p>
  </div>
  <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0"></div>
</header>

<!-- Breadcrumb -->
<section class="breadcrumb-container">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= esc($blog['title']) ?></li>
      </ol>
    </nav>
  </div>
</section>

<!-- Blog Detail -->
<section class="py-5 blog-detail">
  <div class="container py-2">
    <div class="row">
      <!-- Left Content Area -->
      <div class="col-lg-9 content-block">
        <h1><?= esc($blog['title']) ?></h1>

        <div class="d-flex author mb-3">
          <div class="author-item me-3">
            <i class="bi bi-person"></i> <a href="#">Admin</a>
          </div>
          <div class="author-item">
            <i class="bi bi-calendar-event"></i> <?= date('M d, Y', strtotime($blog['created_at'])) ?>
          </div>
        </div>

        <img src="<?= base_url('uploads/blogs/' . $blog['image']) ?>" class="img-fluid mb-3" alt="<?= esc($blog['title']) ?>">

        <div class="blog-content">
          <?= $blog['description'] ?>
        </div>

        <!-- Tags -->
        <div class="content-tags mt-4">
          <?php foreach (explode(',', $blog['tags']) as $tag): ?>
            <a href="javascript:void(0);" class=""><i class="bi bi-tag-fill"></i> <?= esc(trim($tag)) ?></a>
          <?php endforeach; ?>
        </div>

        <!-- Previous & Next Posts -->
        <div class="other-block">
          <?php if (!empty($prevPost)): ?>
            <a class="otherblogCotent" href="<?= base_url($prevPost['slug']) ?>">
              <div class="imgBlock"><img src="<?= base_url('uploads/blogs/' . $prevPost['image']) ?>" class="rounded me-3" alt=""></div>
              <div class="textBlock">
                <small>Previous Post</small><br>
                <?= esc($prevPost['title']) ?>
              </div>
            </a>
          <?php endif; ?>

          <?php if (!empty($nextPost)): ?>
            <a class="otherblogCotent" href="<?= base_url( $nextPost['slug']) ?>">
              <div class="imgBlock"><img src="<?= base_url('uploads/blogs/' . $nextPost['image']) ?>" class="rounded me-3" alt=""></div>
              <div class="textBlock">
                <small>Next Post</small><br>
                <?= esc($nextPost['title']) ?>
              </div>
            </a>
          <?php endif; ?>
        </div>
      </div>
      
      <!-- Sidebar -->
      <div class="col-lg-3 blogSidebar">
        <!-- Search -->
        <div class="searchSection">
          <h2>Search</h2>
          <form method="get" action="<?= base_url('blog') ?>">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." value="<?= esc($searchTerm ?? '') ?>">
              <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
          </form>
        </div>
        <!-- <?php if (!empty($searchResults)): ?>
          <div class="searchResultSection mt-4">
            <h5>Search Results for: <strong><?= esc($searchTerm) ?></strong></h5>
            <ul class="list-unstyled">
              <?php foreach ($searchResults as $result): ?>
                <li class="mb-3">
                  <a href="<?= base_url('blog/details/' . $result['slug']) ?>" class="d-block">
                    <div class="d-flex">
                      <img src="<?= base_url('uploads/blogs/' . $result['image']) ?>" alt="<?= esc($result['title']) ?>" class="me-2" style="width: 60px; height: 60px; object-fit: cover;">
                      <div>
                        <strong><?= esc($result['title']) ?></strong><br>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div> -->
        <?php elseif (!empty($searchTerm)): ?>
          <div class="mt-3 text-muted">No results found for <strong><?= esc($searchTerm) ?></strong>.</div>
        <?php endif; ?>
        <!-- Categories -->
        <div class="widgetSection categorySection">
          <h3>Category</h3>
          <ul>
            <?php foreach ($categories as $category): ?>
              <li>
                <a href="<?= base_url('blog?category=' . $category['slug']) ?>">
                  <div class="imageText">
                    <img src="<?= base_url('front/assets/images/blog-2.jpeg') ?>" class="rounded me-2" alt="Category">
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
                <a href="<?= base_url($post['slug']) ?>">
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
</section>

<?= $this->endSection() ?>

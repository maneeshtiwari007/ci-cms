<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow rounded-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Blog</h5>
                  
                </div>
                <div class="card-body">
                    <form action="<?= base_url('admin/blogs/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row g-3">

                            <div class="col-sm-6">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" value="<?= old('title') ?>" placeholder="Enter blog title">
                                <?php if(session()->getFlashdata('errors')['title'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['title'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-sm-6">
                                <label for="cat_id">Blog Category <span class="text-danger">*</span></label>
                                <select name="cat_id" class="form-select">
                                    <option value="">-- Select Category --</option>
                                    <?php foreach($categories as $cat): ?>
                                        <option value="<?= $cat['id'] ?>" <?= old('cat_id') == $cat['id'] ? 'selected' : '' ?>>
                                            <?= esc($cat['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if(session()->getFlashdata('errors')['cat_id'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['cat_id'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-sm-6">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="<?= old('meta_title') ?>">
                                  <?php if(session()->getFlashdata('errors')['meta_title'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['meta_title'] ?></div>
                                  <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <label for="tags">Tags <span class="text-danger">*</span></label>
                                <select name="tags[]" id="tags" class="form-select" multiple>
                                    <?php 
                                        $oldTagsRaw = old('tags');
                                        $oldTags = is_array($oldTagsRaw) ? $oldTagsRaw : explode(',', (string) $oldTagsRaw);
                                        foreach ($oldTags as $tag):
                                            $tag = trim($tag);
                                            if ($tag): ?>
                                                <option value="<?= esc($tag) ?>" selected><?= esc($tag) ?></option>
                                    <?php   endif;
                                        endforeach;
                                    ?>
                                </select>
                                <?php if(session()->getFlashdata('errors')['tags'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['tags'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-sm-6">
                                <label for="meta_keywords">Meta Keywords</label>
                                <textarea name="meta_keywords" class="form-control" rows="3"><?= old('meta_keywords') ?></textarea>
                                   <?php if(session()->getFlashdata('errors')['meta_keywords'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['meta_keywords'] ?></div>
                                  <?php endif; ?>
                            </div>
                             <div class="col-sm-6">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" class="form-control" rows="3"><?= old('meta_description') ?></textarea>
                                <?php if(session()->getFlashdata('errors')['meta_description'] ?? false): ?>
                                <div class="text-danger"><?= session('errors')['meta_description'] ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-12">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <?php if(session()->getFlashdata('errors')['image'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['image'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-sm-12">
                                <label for="blog_content">Description</label>
                                <div id="div_editor1"><?= old('blog_content') ?></div>
                                <textarea name="blog_content" id="blog_content" style="display:none;"><?= old('blog_content') ?></textarea>
                                <?php if(session()->getFlashdata('errors')['blog_content'] ?? false): ?>
                                    <div class="text-danger"><?= session('errors')['blog_content'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-success me-2">
                                    <i class="bi bi-plus-circle"></i> Add Category
                                </button>
                                <a href="<?= base_url('admin/blogs') ?>" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- RichTextEditor CSS & JS -->
<link href="<?= base_url('assets/richtexteditor/rte_theme_default.css') ?>" rel="stylesheet" />
<script src="<?= base_url('assets/richtexteditor/rte.js') ?>"></script>
<script src="<?= base_url('assets/richtexteditor/plugins/all_plugins.js') ?>"></script>
<!-- Select2 CSS -->
 <script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
      $(document).ready(function () {
        $('#tags').select2({
            tags: true,
            tokenSeparators: [',']
        });
    });

    const editor1 = new RichTextEditor("#div_editor1");
    document.querySelector("form").addEventListener("submit", function () {
        document.getElementById("blog_content").value = editor1.getHTMLCode();
    });
</script>


<?= $this->endSection() ?>

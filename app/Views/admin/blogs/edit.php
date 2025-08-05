<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid mt-4">
    <div class="card border-0 rounded-2">
        <div class="card-header border-0 d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Edit Blog</h4>            
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/blogs/update/' . $blog['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label>Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="<?= old('title', $blog['title']) ?>">
                        <?php if(session()->getFlashdata('errors')['title'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['title'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-6">
                        <label>Blog Category <span class="text-danger">*</span></label>
                        <select name="cat_id" class="form-select">
                            <option value="">-- Select Category --</option>
                            <?php foreach($categories as $cat): ?>
                                <option value="<?= $cat['id'] ?>" <?= $blog['cat_id'] == $cat['id'] ? 'selected' : '' ?>>
                                    <?= esc($cat['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                         <?php if(session()->getFlashdata('errors')['cat_id'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['cat_id'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-6">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="<?= old('meta_title', $blog['meta_title']) ?>">
                         <?php if(session()->getFlashdata('errors')['meta_title'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['meta_title'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-6">
                        <label>Tags</label>
                        <select name="tags[]" id="tags" class="form-select" multiple>
                            <?php 
                                $tagsArray = explode(',', $blog['tags']);
                                foreach ($tagsArray as $tag): ?>
                                    <option value="<?= $tag ?>" selected><?= $tag ?></option>
                                <?php endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label>Meta Keywords</label>
                        <textarea name="meta_keywords" class="form-control"><?= old('meta_keywords', $blog['meta_keywords']) ?></textarea>
                          <?php if(session()->getFlashdata('errors')['meta_keywords'] ?? false): ?>
                             <div class="text-danger"><?= session('errors')['meta_keywords'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-6">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control"><?= old('meta_description', $blog['meta_description']) ?></textarea>
                         <?php if(session()->getFlashdata('errors')['meta_description'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['meta_description'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-12">
                        <label>Image</label><br>
                        <input type="file" name="image" class="form-control">
                        <?php if ($blog['image']): ?>
                            <img src="<?= base_url('uploads/blogs/' . $blog['image']) ?>" width="100" class="mb-2"><br>
                        <?php endif; ?>
                          <?php if(session()->getFlashdata('errors')['image'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['image'] ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-12">
                        <label>Description</label>
                        <div id="div_editor1"><?= old('blog_content', $blog['description']) ?></div>
                        <textarea name="blog_content" id="blog_content" style="display:none;"></textarea>
                           <?php if(session()->getFlashdata('errors')['blog_content'] ?? false): ?>
                            <div class="text-danger"><?= session('errors')['blog_content'] ?></div>
                        <?php endif; ?>
                    </div>
                     <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="bi bi-plus-lg me-2"></i>Update Blog
                        </button>
                        <a href="<?= base_url('admin/blogs') ?>" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include Select2 & RichTextEditor -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link href="<?= base_url('assets/richtexteditor/rte_theme_default.css') ?>" rel="stylesheet" />
<script src="<?= base_url('assets/richtexteditor/rte.js') ?>"></script>
<script src="<?= base_url('assets/richtexteditor/plugins/all_plugins.js') ?>"></script>

<script>
    $(document).ready(function () {
        $('#tags').select2({ tags: true, tokenSeparators: [','] });
    });

    const editor1 = new RichTextEditor("#div_editor1");
    document.querySelector("form").addEventListener("submit", function () {
        document.getElementById("blog_content").value = editor1.getHTMLCode();
    });
</script>

<?= $this->endSection() ?>

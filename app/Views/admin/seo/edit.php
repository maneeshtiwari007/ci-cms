<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit SEO</h4>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('validation')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('validation')->listErrors() ?>
                </div>
            <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

            <form action="<?= site_url('admin/seo/update/' . $seo['id']) ?>" method="post">
                <div class="mb-3">
                    <label for="page_url" class="form-label">Page URL</label>
                    <select name="page_url" class="form-control" required>
                        <option value="">Select Page</option>
                        <?php foreach ($pageOptions as $url => $label): ?>
                            <option value="<?= esc($url) ?>" <?= $seo['page_url'] == $url ? 'selected' : '' ?>>
                                <?= esc($label) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?= esc($seo['meta_title']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3" required><?= esc($seo['meta_description']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2" required><?= esc($seo['meta_keywords']) ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= site_url('admin/seo') ?>" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">SEO Add</h4>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="<?= site_url('admin/seo/store') ?>" method="post">
                <?= csrf_field() ?>
                
                <div class="mb-3">
                    <label for="page_url" class="form-label">Select Page</label>
                    <select name="page_url" class="form-select <?= session('validation') && session('validation')->hasError('page_url') ? 'is-invalid' : '' ?>">
                        <option value="">-- Select Page --</option>
                        <?php foreach ($pageOptions as $url => $label): ?>
                            <option value="<?= esc($url) ?>" <?= old('page_url') == $url ? 'selected' : '' ?>>
                                <?= esc($label) ?> 
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (session('validation') && session('validation')->hasError('page_url')): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('page_url') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" value="<?= old('meta_title') ?>" class="form-control <?= session('validation') && session('validation')->hasError('meta_title') ? 'is-invalid' : '' ?>">
                    <?php if (session('validation') && session('validation')->hasError('meta_title')): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('meta_title') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control"><?= old('meta_description') ?></textarea>
                      <?php if (session('validation') && session('validation')->hasError('meta_description')): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('meta_description') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <input type="text" name="meta_keywords" value="<?= old('meta_keywords') ?>" class="form-control">
                      <?php if (session('validation') && session('validation')->hasError('meta_keywords')): ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('meta_keywords') ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-success">Save SEO</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

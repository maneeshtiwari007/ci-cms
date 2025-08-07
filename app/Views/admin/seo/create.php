<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>
<!--begin::App Content Header-->
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add SEO</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/seo') ?>">SEO</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add SEO</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <div class="container-fluid">
        <div class="card border-0 rounded-2">
            <div class="card-body">
                <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <form action="<?= site_url('admin/seo/store') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="page_url" class="form-label">Select Page</label>
                                <select name="page_url"
                                    class="form-select <?= session('validation') && session('validation')->hasError('page_url') ? 'is-invalid' : '' ?>">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" value="<?= old('meta_title') ?>"
                                    class="form-control <?= session('validation') && session('validation')->hasError('meta_title') ? 'is-invalid' : '' ?>">
                                <?php if (session('validation') && session('validation')->hasError('meta_title')): ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('meta_title') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="<?= old('meta_keywords') ?>"
                                    class="form-control">
                                <?php if (session('validation') && session('validation')->hasError('meta_keywords')): ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('meta_keywords') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description"
                                    class="form-control"><?= old('meta_description') ?></textarea>
                                <?php if (session('validation') && session('validation')->hasError('meta_description')): ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('meta_description') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save SEO</button>
                    <a href="<?= base_url('admin/seo') ?>" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
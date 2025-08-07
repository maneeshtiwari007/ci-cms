<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<!--begin::App Content Header-->
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Slider</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/slider') ?>">Slider</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Slider</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <div class="container-fluid">
        <!-- Flash messages -->
        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="card border-0">
            <div class="card-header border-0">
                <h5 class="mb-0">Upload Slider Image</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/store-slider') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="image" class="form-label">Select Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                    required>
                                <?php if (isset($validation) && $validation->hasError('image')): ?>
                                <div class="text-danger">
                                    <?= $validation->getError('image') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="ordering" class="form-label">Ordering <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="ordering" id="ordering"
                                    value="<?= old('ordering', $slider['ordering'] ?? '') ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control form-select">
                                    <option value="1"
                                        <?= old('status', $slider['status'] ?? '') == '1' ? 'selected' : '' ?>>
                                        Active</option>
                                    <option value="0"
                                        <?= old('status', $slider['status'] ?? '') == '0' ? 'selected' : '' ?>>
                                        Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <a href="<?= base_url('admin/slider') ?>" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::App Content-->

<?= $this->endSection() ?>
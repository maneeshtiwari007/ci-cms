<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Edit Slider</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Update Slider</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/update-slider/' . $slider['id']) ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <?php if (!empty($slider['image'])): ?>
                                    <div class="mt-2">
                                        <img src="<?= base_url('uploads/sliders/' . $slider['image']) ?>" alt="Slider Image" height="80">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <label>Ordering</label>
                                <input type="number" name="ordering" class="form-control" value="<?= old('ordering', $slider['ordering'] ?? '') ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" <?= old('status', $slider['status'] ?? '') == '1' ? 'selected' : '' ?>>Active</option>
                                    <option value="0" <?= old('status', $slider['status'] ?? '') == '0' ? 'selected' : '' ?>>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="<?= base_url('admin/slider') ?>" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

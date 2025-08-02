<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header">
            <h4 class="mb-0">Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/categories/update/' . $category['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name"
                           value="<?= old('name', $category['name']) ?>"
                           class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>">
                    <?php if(session('errors.name')): ?>
                        <div class="invalid-feedback d-block"><?= session('errors.name') ?></div>
                    <?php endif; ?>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description"
                              class="form-control <?= session('errors.description') ? 'is-invalid' : '' ?>"
                              rows="4"><?= old('description', $category['description']) ?></textarea>
                    <?php if(session('errors.description')): ?>
                        <div class="invalid-feedback d-block"><?= session('errors.description') ?></div>
                    <?php endif; ?>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Category Image</label>
                    <input type="file" name="image" id="image"
                           class="form-control <?= session('errors.image') ? 'is-invalid' : '' ?>">
                    <?php if(session('errors.image')): ?>
                        <div class="invalid-feedback d-block"><?= session('errors.image') ?></div>
                    <?php endif; ?>

                    <?php if (!empty($category['image'])): ?>
                        <div class="mt-2">
                            <img src="<?= base_url('uploads/categories/' . $category['image']) ?>" alt="Current Image" width="100">
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Buttons -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-save"></i> Update Category
                    </button>
                    <a href="<?= base_url('admin/categories') ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle"></i> Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

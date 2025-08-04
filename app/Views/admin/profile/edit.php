<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Update Admin Profile</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/save-profile') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="<?= esc($admin['first_name']) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="<?= esc($admin['last_name']) ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= esc($admin['email']) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password <small class="text-muted">(leave blank to keep old password)</small></label>
                    <input type="password" name="password" class="form-control" placeholder="Leave blank to keep old password">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label><br>
                    <?php if (!empty($adminImage['image'])): ?>
                        <img src="<?= base_url('uploads/admins/' . $adminImage['image']) ?>" class="img-thumbnail mb-2" width="120" alt="Profile Image">
                    <?php endif; ?>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

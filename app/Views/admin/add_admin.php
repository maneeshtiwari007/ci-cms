<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Add New Admin</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Add Admin</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Admin Account</h4>
                    </div>
                    <div class="card-body">
                        <!-- Your add admin form -->
<form action="<?= base_url('admin/add') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <!-- Show global errors -->
    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="<?= old('first_name') ?>" required>
                <?php if (session('errors.first_name')): ?>
                    <small class="text-danger"><?= esc(session('errors.first_name')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="<?= old('last_name') ?>" required>
                <?php if (session('errors.last_name')): ?>
                    <small class="text-danger"><?= esc(session('errors.last_name')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>" required>
                <?php if (session('errors.email')): ?>
                    <small class="text-danger"><?= esc(session('errors.email')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?= old('phone') ?>" required>
                <?php if (session('errors.phone')): ?>
                    <small class="text-danger"><?= esc(session('errors.phone')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <?php if (session('errors.password')): ?>
                    <small class="text-danger"><?= esc(session('errors.password')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                <?php if (session('errors.confirm_password')): ?>
                    <small class="text-danger"><?= esc(session('errors.confirm_password')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="">-- Select Role --</option>
                    <option value="admin" <?= old('role') == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="editor" <?= old('role') == 'editor' ? 'selected' : '' ?>>Editor</option>
                    <!-- Add more roles as needed -->
                </select>
                <?php if (session('errors.role')): ?>
                    <small class="text-danger"><?= esc(session('errors.role')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <?php if (session('errors.image')): ?>
                    <small class="text-danger"><?= esc(session('errors.image')) ?></small>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Add Admin</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

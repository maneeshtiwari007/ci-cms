<?= $this->include('admin/layouts/header') ?>

<h2 class="text-center">Admin Login</h2>

<div class="row justify-content-center">
    <div class="col-md-4">
        <form method="post" action="<?= base_url('admin/login') ?>" class="border p-4 rounded shadow">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

<?= $this->include('admin/layouts/footer') ?>

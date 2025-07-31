<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#007bff" />
    <meta name="color-scheme" content="light dark" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('backend/css/adminlte.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('backend/css/bootstrap-icons.min.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('backend/css/overlayscrollbars.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('backend/css/index.css') ?>" media="print" onload="this.media='all'" />
</head>

<body class="login-page bg-body-secondary">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1 class="mb-0"><b>Prime</b>IT</h1>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <!-- Flash Success Message -->
                <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('message') ?>
                </div>
                <?php endif; ?>

                <!-- Error Message -->
                <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input id="loginEmail" name="email" type="email" class="form-control" required />
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input id="loginPassword" name="password" type="password" class="form-control" required />
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6 d-flex align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" />
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <!-- <div class="col-6 text-end">
                            <a href="#">Forgot Password?</a>
                        </div> -->
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 d-grid">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                </form>

                <!-- <p class="text-center mt-2">Don't have an account? <a href="#">Register</a></p> -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('backend/js/overlayscrollbars.browser.es6.min.js') ?>">
    </script>
    <script src="<?= base_url('backend/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('backend/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('backend/js/adminlte.js') ?>"></script>

</body>

</html>
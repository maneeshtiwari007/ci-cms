<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="<?= base_url('backend/css/bootstrap-icons.min.css') ?>" crossorigin="anonymous" />
    <link href="<?= base_url('backend/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
    body,
    html {
        overflow-x: hidden;
    }

    .error-page {
        background: linear-gradient(135deg, #007bff, #00d4ff);
    }

    .error-page .btn {
        transition: all 0.3s ease;
        color: #001c3b;
    }

    .error-page .btn:hover,
    .error-page .btn:focus,
    .error-page .btn:active {
        transform: scale(1.05);
        transition: all 0.3s ease;
        background-color: #001c3b;
        border-color: #001c3b;
        color: #fff;
    }

    .error-page h1,
    .error-page .h1 {
        font-size: 5rem;
        line-height: 1;
        text-shadow: 4px 4px 0 #fff, 6px 6px 0 #001c3b;
    }

    .error-page h2,
    .error-page .h2 {
        font-size: 2rem;
        line-height: 1;
    }

    @media screen and (max-width: 575px) {

        .error-page h3,
        .error-page .h3 {
            font-size: 1.5rem;
            line-height: 1.2;
        }
    }

    @media screen and (min-width: 576px) {

        .error-page h1,
        .error-page .h1 {
            font-size: 6.5rem;
        }

        .error-page h2,
        .error-page .h2 {
            font-size: 3rem;
        }

        .error-page-divider {
            border-left: 3px solid rgba(255, 255, 255, 0.2)
        }
    }

    @media screen and (min-width: 768px) {

        .error-page h1,
        .error-page .h1 {
            font-size: 7.375rem;
        }

        .error-page h2,
        .error-page .h2 {
            font-size: 3.375rem;
        }
    }

    @media screen and (min-width: 992px) {

        .error-page h1,
        .error-page .h1 {
            font-size: 9.375rem;
        }

        .error-page h2,
        .error-page .h2 {
            font-size: 4.375rem;
        }
    }
    </style>
</head>

<body>
    <?php 
    $uri = service('uri');
    $firstSegment = $uri->getSegment(1); 
    ?>
    <div class="error-page">
        <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center">
            <div class="page-content text-center mt-auto mb-0">
                <div class="row">
                    <div class="col-xl-7 mx-auto text-white">
                        <div class="row align-items-center d-flex flex-row mb-5">
                            <div class="col-lg-6 text-lg-right pr-lg-4">
                                <h1 class="display-1 mb-3 mb-xl-0">404</h1>
                            </div>
                            <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                                <h2 class="mb-xl-2 mb-3">SORRY!</h2>
                                <h3 class="fw-light mb-0">The page you’re looking for was not found.</h3>
                            </div>
                        </div>
                        <div class="text-center">
                        <?php if ($firstSegment === 'admin'): ?>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="<?= base_url('admin/slider') ?>">
                                <i class="bi bi-arrow-left me-2"></i>Back to Home
                            </a>
                        <?php else: ?>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="<?= base_url('/') ?>">
                                <i class="bi bi-arrow-left me-2"></i>Back to Home
                            </a>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="page-footer py-3 text-center mt-auto mb-0">
                <p class="text-white mb-0">
                    Copyright &copy; <?= date('Y') ?>&nbsp;
                    <strong><a class="text-white text-decoration-none" href="<?= base_url('admin/dashboard') ?>"
                            class="text-decoration-none">Prime IT Pvt.
                            Ltd.</a></strong>&nbsp;All rights reserved.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
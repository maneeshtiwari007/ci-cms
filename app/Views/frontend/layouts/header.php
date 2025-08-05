<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('pageTitle') ?></title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Coming Soon">
    <meta name="description" content="In the meantime, Stay tuned. We are almost ready to launch.">
    <!-- Font Link -->



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap & CSS -->
    <link href="<?= base_url('front/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('front/assets/css/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('front/assets/css/style.css') ?>" rel="stylesheet">
    <style>
    .cto-block .btn {
        background: linear-gradient(135deg, #007bff, #00d4ff);
        color: white;
        padding: 10px 20px;
        text-align: center;
        border-radius: 30px;
        border: 0px;
    }

    .cto-block .btn:hover {
        background: linear-gradient(135deg, #0056b3, #00aaff);
        border: 0px;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
    </style>
</head>
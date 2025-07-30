<?= $this->extend('frontend/layouts/main') ?>
<?= $this->section('title') ?>Home Page<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
$description = $content['description'] ?? '';
$descriptionWithBasePath = str_replace(
    'front/assets/images/',
    base_url('front/assets/images/') . '/',
    $description
);
?>
<div class="page-content">
    <?= $descriptionWithBasePath ?>
</div>


<?= $this->endSection() ?>
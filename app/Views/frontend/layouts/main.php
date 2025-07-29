<!DOCTYPE html>
<html lang="en">

<?= $this->include('frontend/layouts/header') ?>

<body>
<?= $this->include('frontend/layouts/navbar') ?>

<?= $this->renderSection('content') ?>

<?= $this->include('frontend/layouts/footer') ?>

</body>
</html>
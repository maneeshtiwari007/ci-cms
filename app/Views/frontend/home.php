<?= $this->extend('frontend/layouts/main') ?>

<?= $this->section('content') ?>
<section class="banner">
    <div class="container">
        <h1 class="banner__title">Coming Soon</h1>
        <p class="banner__text">In the meantime, Stay tuned. We are almost ready to launch.</p>
        <br />
        <div id="clockdiv">
            <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
            </div>
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div><span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div><span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>

    </div>
</section>
<script src="<?= base_url('./assets/javascripts/custom.js') ?>"></script>

<?= $this->endSection() ?>
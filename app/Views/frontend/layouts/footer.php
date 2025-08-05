<footer class="bg-dark py-4">
  <p class="text-center text-white mb-0">© 2025 Prime IT Pty Ltd. All Rights Reserved</p>
</footer>

<!-- JS -->
<script src="<?= base_url('front/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('front/assets/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('front/assets/js/calculate-price.js') ?>"></script>

<script src="<?= base_url('front/assets/js/custom.js') ?>"></script>


<!-- Shrink on Scroll Script -->
<script>
  const navbar = document.getElementById("main-navbar");
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("shrink");
    } else {
      navbar.classList.remove("shrink");
    }
  });
</script>
</html>

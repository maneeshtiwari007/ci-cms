<!--begin::Footer-->
<footer class="app-footer border-0">
    <div class="row">
        <div class="col-md-6 text-center text-md-start">
            <!--begin::Copyright-->
            <p class="mb-0"><strong>
                    Copyright &copy; <?= date('Y') ?>&nbsp;
                    <a href="#" class="text-decoration-none">Prime IT</a>.
                </strong>
                All rights reserved.</p>
            <!--end::Copyright-->
        </div>
        <div class="col-md-6 text-center text-md-end">
            <!--begin::To the end-->
            <p class="mb-0">Developed by: <a target="_blank" href="https://www.codeyiizen.com/">Codeyiizen</a></p>
            <!--end::To the end-->
        </div>
    </div>
</footer>
<!--end::Footer-->
</div>
<!--end::App Wrapper-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="<?= base_url('backend/js/overlayscrollbars.browser.es6.min.js') ?>" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)-->
<!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="<?= base_url('backend/js/popper.min.js') ?>" crossorigin="anonymous">
</script>
<!--end::Required Plugin(popperjs for Bootstrap 5)-->
<!--begin::Required Plugin(Bootstrap 5)-->
<script src="<?= base_url('backend/js/bootstrap.bundle.min.js') ?>"></script>
<!--end::Required Plugin(Bootstrap 5)-->
<!--begin::Required Plugin(AdminLTE)-->
<script src="<?= base_url('backend/js/adminlte.js') ?>"></script>
<!--end::Required Plugin(AdminLTE)-->
<script src="<?= base_url('backend/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('backend/js/dataTables.responsive.min.js') ?>"></script>
<!--begin::OverlayScrollbars Configure-->
<script>
const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
};
document.addEventListener('DOMContentLoaded', function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

    // Disable OverlayScrollbars on mobile devices to prevent touch interference
    const isMobile = window.innerWidth <= 992;

    if (
        sidebarWrapper &&
        OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
        !isMobile
    ) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
});
</script>
<!--end::OverlayScrollbars Configure-->

<!-- OPTIONAL SCRIPTS -->

<!-- sortablejs -->
<script src="<?= base_url('backend/js/Sortable.min.js') ?>" crossorigin="anonymous"></script>

<!-- sortablejs -->

<!--end::Script-->
</body>

</html>
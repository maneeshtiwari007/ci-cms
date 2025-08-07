<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <div class="col-6 mb-0">
                <h4 class="mb-0">SEO List</h4>
            </div>
            <div class="col-6 text-end">
                <a href="<?= site_url('admin/seo/create') ?>" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-2"></i>Add Seo
                </a>
            </div>
        </div>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="container mt-4">
            <div class="card border-0 rounded-2">
                <div class="card-body">
                    <table id="seoTable" class="table table-style-2 table-hover display no-wrap" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page URL</th>
                                <th>Meta Title</th>
                                <th>Meta Description</th>
                                <th>Meta Keywords</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($seoData)): ?>
                            <?php foreach ($seoData as $index => $seo): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($seo['page_url']) ?></td>
                                <td><?= esc($seo['meta_title']) ?></td>
                                <td><?= esc($seo['meta_description']) ?></td>
                                <td><?= esc($seo['meta_keywords']) ?></td>
                                <td>
                                    <a href="<?= site_url('admin/seo/edit/' . $seo['id']) ?>"
                                        class="btn btn-sm btn-success btn-success btn-icon"><i
                                            class="bi bi-pencil"></i></a>
                                    <button class="btn btn-sm btn-danger btn-icon deleteBtn"
                                        data-id="<?= $seo['id'] ?>"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No SEO Data Found.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>" />

        <script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
        <script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>
        <script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>

        <script>
        $(document).ready(function() {
            $('#seoTable').DataTable({
                scrollCollapse: false,
                responsive: true,
                scrollX: true,
                "bLengthChange": false,
                language: {
                    info: "_START_ - _END_ / _TOTAL_",
                    paginate: {
                        previous: "<i class='bi bi-arrow-left'></i>",
                        next: "<i class='bi bi-arrow-right'></i>"
                    }
                },
                "order": [
                    [1, "asc"]
                ],
                "columnDefs": [{
                    "orderable": false,
                    "targets": [0, 2, 3, 4, 5]
                }],
            });
            // Handle delete
            $('.deleteBtn').click(function() {
                var id = $(this).data('id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to delete route
                        window.location.href = "<?= site_url('admin/seo/delete/') ?>" + id;
                    }
                });
            });
        });
        </script>
        <script>
        <?php if (session()->getFlashdata('success')) : ?>
        toastr.success("<?= session()->getFlashdata('success') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
        toastr.error("<?= session()->getFlashdata('error') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('warning')) : ?>
        toastr.warning("<?= session()->getFlashdata('warning') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('info')) : ?>
        toastr.info("<?= session()->getFlashdata('info') ?>");
        <?php endif; ?>
        </script>

        <?= $this->endSection() ?>
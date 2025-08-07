<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3 mt-4">
    <h4 class="mb-0">SEO List</h4>
    <a href="<?= site_url('admin/seo/create') ?>" class="btn btn-primary">
        <i class="bi bi-plus-lg me-2"></i>Add Seo
    </a>
</div>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-striped" id="seoTable">
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
                                    <a href="<?= site_url('admin/seo/edit/' . $seo['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <button class="btn btn-sm btn-danger deleteBtn" data-id="<?= $seo['id'] ?>">Delete</button>
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
    $(document).ready(function () {
       $('#seoTable').DataTable({
         "order": [[1, "asc"]], 
            "columnDefs": [
                {
                    "orderable": false,
                    "targets": [0,2,3,4,5] 
                }
            ],
        });
        // Handle delete
        $('.deleteBtn').click(function () {
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

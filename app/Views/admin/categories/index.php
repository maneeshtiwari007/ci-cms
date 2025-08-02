<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Category List</h4>
        <a href="<?= base_url('admin/categories/create') ?>" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Category
        </a>
    </div>

    <div class="card shadow-sm rounded">
        <div class="card-body">
            <div class="table-responsive">
                <table id="categoryTable" class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $key => $category) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= esc($category['name']) ?></td>
                                    <td><?= esc($category['description']) ?></td>
                                    <td>
                                        <?php if (!empty($category['image'])) : ?>
                                            <img src="<?= base_url('uploads/categories/' . $category['image']) ?>" width="60" height="60" class="img-thumbnail">
                                        <?php else : ?>
                                            <span class="text-muted">No Image</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= date('d-m-Y', strtotime($category['created_at'])) ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/categories/edit/' . $category['id']) ?>" class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-danger btn-delete"
                                            data-id="<?= $category['id'] ?>"
                                            data-url="<?= base_url('admin/categories/delete/' . $category['id']) ?>"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- DataTables CSS -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css') ?>" />
<!-- Toastr CSS -->
<link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>" />

<!-- Scripts -->
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>

<script>
    $(document).ready(function () {
        $('#categoryTable').DataTable();

        $('.btn-delete').click(function () {
            const deleteUrl = $(this).data('url');

            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Create form dynamically for CSRF protection
                    const form = $('<form>', {
                        action: deleteUrl,
                        method: 'POST'
                    });

                    // Add CSRF token
                    form.append('<?= csrf_field() ?>');

                    $('body').append(form);
                    form.submit();
                }
            });
        });

        <?php if (session()->getFlashdata('success')) : ?>
            toastr.success("<?= session('success') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            toastr.error("<?= session('error') ?>");
        <?php endif; ?>
    });
</script>

<?= $this->endSection() ?>

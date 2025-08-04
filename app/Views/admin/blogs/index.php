<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<?php helper('text'); // Load word_limiter ?>

<div class="container-fluid mt-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Blog List</h4>
        <a href="<?= base_url('admin/blogs/create') ?>" class="btn btn-primary">
            <i class="bi bi-plus-lg me-2"></i>Add Blog
        </a>
    </div>

    <div class="card border-0 rounded-2">
        <div class="card-body">
            <div class="table-responsive">
                <table id="blogTable" class="table table-style-2 table-hover display no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th width="120">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($blogs as $blog): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($blog['title']) ?></td>
                            <td><?= esc($blog['tags']) ?></td>
                            <td><?= word_limiter(strip_tags($blog['description']), 20) ?></td>
                            <td><?= esc($blog['category_name']) ?></td>
                            <td>
                                <?php if($blog['image']): ?>
                                    <img src="<?= base_url('uploads/blogs/' . $blog['image']) ?>" width="60">
                                <?php endif; ?>
                            </td>
                            <td><?= date('d M, Y', strtotime($blog['created_at'])) ?></td>
                            <td>
                                <a href="<?= base_url('admin/blogs/edit/' . $blog['id']) ?>" class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete(<?= $blog['id'] ?>)">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
        $('#blogTable').DataTable();


        <?php if (session()->getFlashdata('success')) : ?>
            toastr.success("<?= session('success') ?>");
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            toastr.error("<?= session('error') ?>");
        <?php endif; ?>
    });

    function confirmDelete(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#6c757d",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('admin/blogs/delete/') ?>" + id;
            }
        });
    }
</script>

<?= $this->endSection() ?>

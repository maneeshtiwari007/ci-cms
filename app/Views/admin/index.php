<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 mb-sm-0 mb-3">
                <h4 class="mb-0">Content List</h4>
            </div>
            <div class="col-sm-6 text-sm-end">
                <a href="<?= base_url('admin/content/add') ?>" class="btn btn-primary"><i
                        class="bi bi-plus-lg me-2"></i>Add Content</a>
            </div>
        </div>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="card border-0 rounded-2">
            <div class="card-body">
                <table id="contentTable" class="table table-style-2 table-hover display no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Created On</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($contents)) : ?>
                        <?php foreach ($contents as $key => $content) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= esc($content['title']) ?></td>
                            <td><?= esc($content['slug']) ?></td>
                            <td><?= word_limiter(strip_tags($content['description']), 15) ?></td>
                            <td><?= date('d M Y', strtotime($content['created_at'] ?? $content['created_on'])) ?></td>
                            <td>
                                <a href="<?= base_url('admin/content/edit/' . $content['id']) ?>"
                                    class="btn btn-sm btn-success btn-icon"><i class="bi bi-pencil"></i></a>
                                <button onclick="deleteContent(<?= $content['id'] ?>)" class="btn btn-sm btn-danger btn-icon"><i
                                        class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>

                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- DataTables CSS -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />

<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css') ?>">

<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>">

<!-- Toastr JS -->
<script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>

<!-- SweetAlert2 JS -->
<script src="<?= base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Initialize DataTable and Delete Handler -->
<script>
$(document).ready(function() {
    $('#contentTable').DataTable({
        scrollCollapse: false,
        responsive: true,
        scrollX: true,
        "bLengthChange": false,
        info: "_START_ - _END_ / _TOTAL_",
        language: {
            emptyTable: "No data available in table",
            info: "_START_ - _END_ / _TOTAL_",
            paginate: {
                previous: "<i class='bi bi-arrow-left'></i>",
                next: "<i class='bi bi-arrow-right'></i>"
            }
        },
          "order": [[1, "asc"]], 
        "columnDefs": [
            {
                "orderable": false,
                "targets": [0,2,3,4,5] 
            }
        ],
    });
});

function deleteContent(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('admin/content/delete/') ?>" + id;
        }
    });
}


<?php if (session()->getFlashdata('success')) : ?>
toastr.success("<?= session('success') ?>");
<?php endif; ?>

<?php if (session()->getFlashdata('error')) : ?>
toastr.error("<?= session('error') ?>");
<?php endif; ?>
</script>

<?= $this->endSection() ?>
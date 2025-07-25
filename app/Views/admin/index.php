<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="mb-0">Content List</h3>
            </div>
            <div class="col-sm-6 text-end">
                <a href="<?= base_url('admin/content/add') ?>" class="btn btn-success">Add Content</a>
            </div>
        </div>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table id="contentTable" class="table table-bordered table-striped">
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
                                        <a href="<?= base_url('admin/content/edit/' . $content['id']) ?>" class="btn btn-sm btn-info">Edit</a>
                                        <button onclick="deleteContent(<?= $content['id'] ?>)" class="btn btn-sm btn-danger">Delete</button>
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
        $('#contentTable').DataTable();
        language: {
        emptyTable: "No data available in table"
    }
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

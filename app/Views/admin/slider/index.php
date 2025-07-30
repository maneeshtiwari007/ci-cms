<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="mb-0">Slider List</h3>
            </div>
            <div class="col-sm-6 text-end">
                <a href="<?= base_url('admin/add-slider') ?>" class="btn btn-success">Add Slider</a>
            </div>
        </div>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table id="sliderTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Ordering</th> <!-- ✅ Added -->
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($sliders)) : ?>
                            <?php foreach ($sliders as $key => $slider) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/sliders/' . $slider['image']) ?>" width="100" height="auto">
                                    </td>
                                    <td><?= esc($slider['ordering'] ?? '-') ?></td> <!-- ✅ Added -->
                                    <td>
                                        <?= $slider['status'] ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-secondary">Inactive</span>' ?>
                                    </td>
                                    <td><?= date('d M Y', strtotime($slider['created_at'] ?? $slider['created_on'])) ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/edit-slider/' . $slider['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <button onclick="deleteSlider(<?= $slider['id'] ?>)" class="btn btn-sm btn-danger">Delete</button>
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

<!-- Toastr CSS -->
<link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>">

<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- SweetAlert2 JS -->
<script src="<?= base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Toastr JS -->
<script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        $('#sliderTable').DataTable({
            language: {
                emptyTable: "No sliders available"
            }
        });
    });

    function deleteSlider(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "This slider will be deleted permanently!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('admin/delete-slider/') ?>" + id;
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

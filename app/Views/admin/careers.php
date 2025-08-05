<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<!-- DataTables CSS -->


<div class="app-content-header">
    <div class="container-fluid">
        <h4 class="mb-0">Career Applications</h4>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="card border-0 rounded-2">
            <div class="card-body">
                <table id="careerTable" class="table table-style-2 table-hover display no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Resume</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($applications as $row): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($row['name']) ?></td>
                            <td><?= esc($row['email']) ?></td>
                            <td><?= esc($row['message']) ?></td>
                            <td>
                                <?php if (!empty($row['resume'])): ?>
                                <a class="btn btn-link p-0 fs-7" href="<?= base_url('uploads/resumes/' . $row['resume']) ?>"
                                    target="_blank"><i class="bi bi-download me-2"></i>Download</a>
                                <?php else: ?>
                                N/A
                                <?php endif; ?>
                            </td>
                            <td><?= date('d-m-Y H:i', strtotime($row['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- jQuery and DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- Initialize DataTable -->
<script>
$(document).ready(function() {
    $('#careerTable').DataTable({
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
        "columnDefs": [{
                "orderable": true,
                "targets": 1
            },
            {
                "orderable": false,
                "targets": [0, 2, 3, 4, 5]
            }
        ],
        "order": [
            [1, "asc"]
        ]
    });
});
</script>

<?= $this->endSection() ?>
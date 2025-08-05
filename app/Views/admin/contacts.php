<!-- app/Views/admin/contacts/index.php -->

<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <h4 class="mb-0">Contact Us</h4>
    </div>
</div>
<div class="app-content-body">
    <div class="container-fluid">
        <div class="card border-0 rounded-2">
            <div class="card-body">
                <table class="table table-style-2 table-hover display no-wrap" width="100%" id="contactTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($contact['name']) ?></td>
                            <td><?= esc($contact['email']) ?></td>
                            <td><?= esc($contact['contact_no']) ?></td>
                            <td><?= esc($contact['subject']) ?></td>
                            <td><?= esc($contact['message']) ?></td>
                            <td><?= date('d M Y h:i', strtotime($contact['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script>
$(document).ready(function() {
    $('#contactTable').DataTable({
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
            [1, 'asc']
        ], // Default sorting on 'Name' column
        "columnDefs": [{
                "orderable": false,
                "targets": [0, 2, 3, 4, 5, 6]
            } // Disable sorting on all except column 1 (Name)
        ]
    });
});
</script>
<?= $this->endSection() ?>
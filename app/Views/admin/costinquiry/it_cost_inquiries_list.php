<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="mb-0">IT Cost Inquiries</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- ✅ Responsive table wrapper -->
                <div class="table-responsive">
                    <table id="inquiryTable" class="table table-bordered table-striped nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Helpdesk Support</th>
                                <th>Computers</th>
                                <th>Printers</th>
                                <th>Network Devices</th>
                                <th>Has Servers</th>
                                <th>Servers</th>
                                <th>Onsite Support Rate</th>
                                <th>Offsite Backup</th>
                                <th>Offsite Backup Cost</th>
                                <th>Imaging Based Backup</th>
                                <th>Imaging Backup Cost</th>
                                <th>Total Monthly Cost</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ CSS Files -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css') ?>">

<!-- ✅ JS Files -->
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/toastr/toastr.min.js') ?>"></script>
<script src="<?= base_url('assets/sweetalert2/sweetalert2.min.js') ?>"></script>

<script>
    $(document).ready(function () {
        $('#inquiryTable').DataTable({
            scrollX: true, // ✅ enable horizontal scroll
            responsive: false, // don't use responsive mode here
            ajax: {
                url: "<?= base_url('admin/it-cost-inquiries/list') ?>",
                dataSrc: ""
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                { data: 'name' },
                { data: 'email' },
                { data: 'phone' },
                { data: 'helpdesk_support' },
                { data: 'num_computers' },
                { data: 'num_printers' },
                { data: 'num_network_devices' },
                { data: 'has_servers' },
                { data: 'num_servers' },
                { data: 'onsite_support_rate' },
                { data: 'store_offsite_backup' },
                { data: 'offsite_backup_cost' },
                { data: 'imaging_based_backup' },
                { data: 'imaging_backup_cost' },
                { data: 'total_monthly_cost' },
                {
                    data: 'created_at',
                    render: function (data) {
                        const date = new Date(data);
                        return date.toLocaleDateString();
                    }
                }
            ]
        });
    });
</script>

<?= $this->endSection() ?>

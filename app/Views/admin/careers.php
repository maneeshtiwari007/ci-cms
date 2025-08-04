<?= $this->extend('admin/layouts/main') ?>
<?= $this->section('content') ?>

<!-- DataTables CSS -->

<div class="container mt-4">


  <div class="card shadow-sm">
    <div class="card-header text-black">
      <h5 class="mb-0">Career Applications</h5>
    </div>

    <div class="card-body">
      <table id="careerTable" class="display table table-bordered table-striped">
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
                  <a href="<?= base_url('uploads/resumes/' . $row['resume']) ?>" target="_blank">Download</a>
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

<!-- jQuery and DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/datatables/jquery.dataTables.min.css') ?>" />
<script src="<?= base_url('assets/js/jquery-3.7.0.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- Initialize DataTable -->
<script>
    $(document).ready(function() {
    $('#careerTable').DataTable({
      "columnDefs": [
        { "orderable": true, "targets": 1 },  
        { "orderable": false, "targets": [0, 2, 3, 4, 5] }  
      ],
      "order": [[1, "asc"]] 
    });
  });
</script>

<?= $this->endSection() ?>

<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Add Content</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Add Content</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Content Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/content/store') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label for="title" class="form-label">Page Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Content</label>
                                <textarea name="description" id="div_editor1" class="form-control" rows="8" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('admin/content') ?>" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link href="<?= base_url('assets/richtexteditor/rte_theme_default.css') ?>" rel="stylesheet" />
<!-- ✅ Local RichTextEditor JS -->
<script src="<?= base_url('assets/richtexteditor/rte.js') ?>"></script>
<script src="<?= base_url('assets/richtexteditor/plugins/all_plugins.js"') ?>"></script>

<!-- ✅ Init Script -->
<script>
    var editor1;
    document.addEventListener("DOMContentLoaded", function () {
        editor1 = new RichTextEditor("#div_editor1");
    });

    function updateTextarea() {
        document.getElementById("description").value = editor1.getHTMLCode();
    }
</script>

<?= $this->endSection() ?>

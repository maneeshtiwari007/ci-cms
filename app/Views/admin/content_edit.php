<?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Content</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Edit Content</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header border-0">
                <h4 class="card-title">Edit Content Form</h4>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/content/update/' . $content['id']) ?>" method="post"
                    onsubmit="updateTextarea()">
                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="title" class="form-label">Page Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            value="<?= esc($content['title']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Content</label>
                        <textarea name="description" id="div_editor1" class="form-control"
                            rows="8"><?= esc($content['description']) ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('admin/content') ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<link href="<?= base_url('assets/richtexteditor/rte_theme_default.css') ?>" rel="stylesheet" />
<script src="<?= base_url('assets/richtexteditor/rte.js') ?>"></script>
<script src="<?= base_url('assets/richtexteditor/plugins/all_plugins.js') ?>"></script>

<script>
var editor1;
document.addEventListener("DOMContentLoaded", function() {
    editor1 = new RichTextEditor("#div_editor1");
});

function updateTextarea() {
    document.getElementById("div_editor1").value = editor1.getHTMLCode();
}
</script>

<?= $this->endSection() ?>
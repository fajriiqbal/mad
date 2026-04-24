<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h3>Form <?= $title ?></h3>
        </div>
    </div>

    <?= form_open_multipart($form_action) ?>
    <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
    <div class="form-group row">
        <label for="id_guru" class="col-sm-2 col-form-label">ID Guru</label>
        <div class="col-sm-8">
            <input type="number" name="id_guru" id="id_guru" value="<?= isset($input->id_guru) ? $input->id_guru : '' ?>" required class="form-control">
            <?= form_error('id_guru', '<small class="form-text text-danger">', '</small>') ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="Nama_g" class="col-sm-2 col-form-label">Nama Guru</label>
        <div class="col-sm-8">
            <input type="text" name="Nama_g" id="Nama_g" value="<?= isset($input->Nama_g) ? $input->Nama_g : '' ?>" required class="form-control">
            <?= form_error('Nama_g', '<small class="form-text text-danger">', '</small>') ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="Mapel_g" class="col-sm-2 col-form-label">Mapel</label>
        <div class="col-sm-8">
            <input type="text" name="Mapel_g" id="Mapel_g" value="<?= isset($input->Mapel_g) ? $input->Mapel_g : '' ?>" required class="form-control">
            <?= form_error('Mapel_g', '<small class="form-text text-danger">', '</small>') ?>
        </div>
    </div>

    <div class="form-group row">
    <label for="photo" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-8">
        <input name="photo" type="file" class="form-control-file" required>
        <small><span class="text-danger">*</span> Maksimal ukuran gambar adalah 3 MB</small>
        <br><br>
        <?php if ($this->session->flashdata('image_error')) : ?>
            <small class="form-text text-danger">
                <?= $this->session->flashdata('image_error') ?>
            </small>
        <?php endif; ?>
    </div>
</div>

    <div class="row mt-4">
        <div class="col-8 offset-2">
            <a href="<?= base_url('dataguru') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
            <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
        </div>
    </div>
<?= form_close() ?>
</div>
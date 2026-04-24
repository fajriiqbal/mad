<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form Ubah Tata Tertib</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Gambar Tata Tertib</label>
			<div class="col-sm-8">
				<?php if(!empty($content->photo)) : ?>
					<img src="<?= base_url('img/tatatertib/' . $content->photo) ?>" alt="Tata Tertib" height="180" class="mb-3">
				<?php endif; ?>
				<input name="photo" type="file" class="form-control-file">
				<?php if($this->session->flashdata('image_error')) :  ?>
                <small class="form-text text-danger">
                  <?= $this->session->flashdata('image_error') ?>
                </small>
				<?php endif ?>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-8 offset-2">
				<a href="<?= base_url('tatatertibmanage') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
			</div>
		</div>
	<?= form_close() ?>
</div>

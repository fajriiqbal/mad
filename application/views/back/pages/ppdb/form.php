<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form Ubah PPDB</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>

		<div class="card shadow-sm mb-4">
			<div class="card-body">
				<h5 class="mb-3">Informasi Utama</h5>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Judul Hero</label>
					<div class="col-sm-8">
						<input type="text" name="hero_title" class="form-control" value="<?= $content->hero_title ?>">
						<?= form_error('hero_title', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Teks Hero</label>
					<div class="col-sm-8">
						<textarea name="hero_text" rows="4" class="form-control"><?= $content->hero_text ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">URL Formulir</label>
					<div class="col-sm-8">
						<input type="text" name="form_url" class="form-control" value="<?= $content->form_url ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">URL WhatsApp</label>
					<div class="col-sm-8">
						<input type="text" name="whatsapp_url" class="form-control" value="<?= $content->whatsapp_url ?>">
					</div>
				</div>
			</div>
		</div>

		<div class="card shadow-sm mb-4">
			<div class="card-body">
				<h5 class="mb-3">Informasi Pendaftaran</h5>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Teks Jadwal</label>
					<div class="col-sm-8">
						<textarea name="jadwal_text" rows="3" class="form-control"><?= $content->jadwal_text ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Daftar Syarat</label>
					<div class="col-sm-8">
						<textarea name="syarat_items" rows="5" class="form-control"><?= $content->syarat_items ?></textarea>
						<small class="form-text text-muted">Satu syarat per baris.</small>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Judul Informasi</label>
					<div class="col-sm-8">
						<input type="text" name="info_title" class="form-control" value="<?= $content->info_title ?>">
						<?= form_error('info_title', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Teks Informasi</label>
					<div class="col-sm-8">
						<textarea name="info_text" rows="3" class="form-control"><?= $content->info_text ?></textarea>
					</div>
				</div>
			</div>
		</div>

		<div class="card shadow-sm mb-4">
			<div class="card-body">
				<h5 class="mb-3">Hasil PPDB</h5>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Judul Hasil</label>
					<div class="col-sm-8">
						<input type="text" name="result_title" class="form-control" value="<?= $content->result_title ?>">
						<?= form_error('result_title', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Teks Hasil</label>
					<div class="col-sm-8">
						<textarea name="result_text" rows="3" class="form-control"><?= $content->result_text ?></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Catatan Jam</label>
					<div class="col-sm-8">
						<input type="text" name="result_note" class="form-control" value="<?= $content->result_note ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Banner Hasil</label>
					<div class="col-sm-8">
						<?php if(!empty($content->result_image)) : ?>
							<img src="<?= base_url('img/ppdb/' . $content->result_image) ?>" alt="" height="150" class="mb-2">
						<?php else: ?>
							<p class="mb-2 text-muted">Belum ada banner khusus.</p>
						<?php endif; ?>
						<input name="result_image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
						<small class="form-text text-danger">
							<?= $this->session->flashdata('image_error') ?>
						</small>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-8 offset-2">
				<a href="<?= base_url('ppdbmanage') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
			</div>
		</div>
	<?= form_close() ?>
</div>

<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h2>Detail Guru</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 mb-3">
			<?php if(!empty($guru->photo_g)) : ?>
				<img src="<?= base_url('img/identitas/' . $guru->photo_g) ?>" class="img-fluid rounded">
			<?php else : ?>
				<div class="alert alert-secondary mb-0">Foto belum tersedia.</div>
			<?php endif; ?>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<tr>
					<th style="width: 180px;">ID Guru</th>
					<td><?= $guru->id_guru ?></td>
				</tr>
				<tr>
					<th>Nama</th>
					<td><?= $guru->Nama_g ?></td>
				</tr>
				<tr>
					<th>Mapel</th>
					<td><?= $guru->Mapel_g ?></td>
				</tr>
			</table>

			<a href="<?= base_url('dataguru') ?>" class="btn btn-secondary btn-sm">
				<i class="fas fa-angle-left mr-1"></i>Kembali
			</a>
			<a href="<?= base_url('dataguru/edit/' . $guru->id) ?>" class="btn btn-warning btn-sm text-light">
				<i class="fas fa-pencil-alt mr-1"></i>Edit
			</a>
		</div>
	</div>
</div>

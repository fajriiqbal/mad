<div class="container">
	<div class="row">
		<div class="col">
			<h2>PPDB</h2>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?= $this->session->flashdata('success') ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
         <?php endif ?>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col">
			<div class="card shadow-sm">
				<div class="card-body">
					<h5 class="card-title"><?= $content->hero_title ?></h5>
					<p class="card-text"><?= $content->hero_text ?></p>
					<div class="row">
						<div class="col-md-6">
							<p class="mb-1"><strong>Form URL:</strong></p>
							<p class="text-break"><?= $content->form_url ?></p>
						</div>
						<div class="col-md-6">
							<p class="mb-1"><strong>WhatsApp:</strong></p>
							<p class="text-break"><?= $content->whatsapp_url ?></p>
						</div>
					</div>
					<a href="<?= base_url('ppdbmanage/edit') ?>" class="btn btn-warning btn-sm text-light mt-3">
						<i class="fas fa-pencil-alt mr-1"></i> Ubah Konten
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

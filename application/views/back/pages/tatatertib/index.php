<div class="container">
	<div class="row">
		<div class="col">
			<h2>Tata Tertib</h2>
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
				<div class="card-body text-center">
					<?php if(!empty($content->photo)) : ?>
						<img src="<?= base_url('img/tatatertib/' . $content->photo) ?>" class="img-fluid rounded mb-3" style="max-height: 380px;">
					<?php endif; ?>
					<a href="<?= base_url('tatatertibmanage/edit') ?>" class="btn btn-warning btn-sm text-light">
						<i class="fas fa-pencil-alt mr-1"></i> Ubah Tata Tertib
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

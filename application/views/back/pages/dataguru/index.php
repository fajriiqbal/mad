<div class="container">
	<div class="row">
		<div class="col">
			<h2>
				Data Guru
			</h2>
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
		<a href="<?= base_url('dataguru/add') ?>" class="btn btn-success btn-sm">
				<i class="fas fa-plus"></i> Tambah
         </a>

         <button class="btn btn-outline-secondary btn-sm" onclick="reload_table()">
               <i class="fas fa-sync-alt"></i> Reload
         </button>
			</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<!-- <th>Judul</th> -->
							<th>Nama</th>
							<th>Mapel</th>
							<!-- <th>Foto</th> -->
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($guru as $g): ?>
							<tr>
								<!-- <td><?= $g->nama ?></td> -->
								<td><?= $g->Nama_g ?></td>
								<td><?= $g->Mapel_g ?></td>
								<!-- <td>
									<img src="<?= base_url('img/identitas/' . $g->photo) ?>" class="img-responsive" style="max-height:150px; max-width:150px;">
								</td> -->
								<td>
									<a href="<?= base_url('dataguru/detail/' . $g->id); ?>" class="btn btn-info btn-sm text-light">
										<i class="fas fa fa-eye"></i>
									</a>
									<a href="<?= base_url('dataguru/edit/' . $g->id); ?>" class="btn btn-warning btn-sm text-light">
										<i class="fas fa fa-pencil-alt"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
								
					</tbody>
				</table>
			</div>	
		</div>

			

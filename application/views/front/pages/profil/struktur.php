<!--================Home Banner Area =================-->
<div class="jumbotron banner_area jumbotron-fluid" style="background-image: url(<?= base_url('img/banner_area/bg.jpg') ?>); ">
	<div class="container">
		<h1 class="display-4 my-auto text-light text-center">Visi & Misi</h1>
	</div>
</div>
<!--================End Home Banner Area =================-->

<!-- Content -->
<!-- <div class="content mt-5 mb-5 pb-5 pt-5">
	<div class="container text-center">
		<img src="<?= base_url('img/struktur_organisasi/' . $struktur->photo) ?>" class="img-fluid">
	</div>
</div> -->
<?php echo $breadcrumb; ?>
<div class="container mt-5">
    <h2 class="text-center animate__animated animate__fadeIn">Struktur Organisasi</h2>
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <div class="org-chart animate__animated animate__zoomIn">
                <div class="org-node">
                    <div class="org-title">Kepala Sekolah</div>
                </div>
                <div class="org-children">
                    <div class="org-node">
                        <div class="org-title">Wakil Kepala Sekolah</div>
                    </div>
                    <div class="org-node">
                        <div class="org-title">Kepala Tata Usaha</div>
                    </div>
                </div>
                <div class="org-children">
                    <div class="org-node">
                        <div class="org-title">Kepala Bidang Kurikulum</div>
                    </div>
                    <div class="org-node">
                        <div class="org-title">Kepala Bidang Kesiswaan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Content -->

<!--================Home Banner Area =================-->
<div class="jumbotron banner_area jumbotron-fluid" style="background-image: url(<?= base_url('img/banner_area/bg.jpg') ?>); ">
    <div class="container">
        <h1 class="display-4 my-auto text-light text-center">Guru</h1>
    </div>
</div>
<!--================End Home Banner Area =================-->

<!-- Content -->
<?php echo $breadcrumb; ?>
<div class="content mt-5 mb-5">
    <div class="container text-center">
        <h1></h1>
    </div>
</div>
<!-- End of Content -->

<!-- Grid Foto Guru -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Guru</h2>
    <div class="row">
        <?php foreach ($guru as $g): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="<?= base_url('img/identitas/' . $g->photo_g) ?>" class="card-img-top" alt="<?= $g->Nama_g ?>" style="width: 100%; height: auto; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $g->Nama_g ?></h5>
                        <p class="card-text"><?= $g->Mapel_g ?></p>
                        <a href="<?= base_url('home/guru') ?>" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End of Grid Foto Guru -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .card {
        transition: transform 0.2s; /* Efek transisi saat hover */
    }
    .card:hover {
        transform: scale(1.02); /* Membesarkan card saat hover */
    }
</style>
</body>
</html>

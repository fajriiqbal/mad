  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body{
      font-family: Arial, sans-serif;
      background:#f6fef9;
    }

    /* HERO */
    .hero{
      background: linear-gradient(135deg,#25D366,#128C7E);
      padding: 40px 20px;
      border-radius: 0 0 30px 30px;
      color:white;
    }

    /* MENU */
    .menu-container{
      display:grid;
      grid-template-columns: repeat(auto-fit,minmax(90px,1fr));
      gap:10px;
    }

    .menu-item{
      background:#fff;
      border-radius:15px;
      padding:15px 10px;
      text-align:center;
      box-shadow:0 5px 15px rgba(0,0,0,0.08);
      transition:0.2s;
      cursor:pointer;
    }

    .menu-item:hover{
      transform: translateY(-5px);
    }

    .menu-item i{
      font-size:26px;
      color:#25D366;
    }

    .menu-item div{
      font-size:12px;
      margin-top:5px;
    }

    /* CARD */
    .card{
      border:none;
      border-radius:15px;
      overflow:hidden;
      box-shadow:0 6px 15px rgba(0,0,0,0.1);
    }

    .card-body{
      text-align:center;
    }

    .card-title{
      font-size:16px;
      font-weight:bold;
    }

    .card-text{
      font-size:13px;
    }

    /* SAMBUTAN */
    .sambutan img{
      border-radius:15px;
    }

    /* BUTTON */
    .btn{
      border-radius:10px;
    }
    /* GURU LIST MODERN */
.guru-item{
  background:#fff;
  border-radius:15px;
  padding:10px;
  box-shadow:0 4px 12px rgba(0,0,0,0.08);
  transition:0.2s;
}

.guru-item:hover{
  transform:translateY(-3px);
}

/* FOTO BULAT */
.guru-img{
  width:60px;
  height:60px;
  border-radius:50%;
  object-fit:cover;
  margin-right:12px;
  border:3px solid #25D366;
}

/* TEXT */
.guru-info{
  text-align:left;
}

.guru-nama{
  font-weight:bold;
  font-size:14px;
}

.guru-mapel{
  font-size:12px;
  color:#666;
}

    /* RESPONSIVE */
    @media(max-width:768px){
      .hero h1{
        font-size:1.5rem;
      }
    }
  </style>
<!-- HERO -->
<div class="hero">
  <div class="container">
    <div class="row align-items-center text-center text-md-left">
      
      <div class="col-md-6">
        <h1 class="animate__animated animate__fadeInUp">
          MTS SUNAN KALIJAGA
        </h1>
        <p class="animate__animated animate__fadeInUp">
          Selamat datang di website resmi MTS Sunan Kalijaga.
        </p>
      </div>

      <div class="col-md-6 mt-3 mt-md-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php $no = 0; ?>
            <?php foreach($banners as $banner) : ?>
              <?php $no++; ?>
              <div class="carousel-item <?php if($no <= 1) { echo "active"; } ?>">
                <img src="<?= base_url("img/banner/$banner->photo") ?>" class="d-block w-100">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- MENU -->
<div class="container mt-4">
  <h5 class="text-center mb-3">Menu</h5>

  <div class="menu-container">

    <div class="menu-item" onclick="location.href='<?= base_url() ?>#sambutan'">
      <i class="fas fa-user"></i>
      <div>Sambutan</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('profil/visimisi')?>'">
      <i class="fas fa-lightbulb"></i>
      <div>Visi Misi</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('ppdb/inforpmb')?>'">
      <i class="fas fa-edit"></i>
      <div>PPDB</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('ppdb/hasilpmb')?>'">
      <i class="fas fa-desktop"></i>
      <div>Hasil</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('home/ekstra')?>'">
      <i class="fas fa-futbol"></i>
      <div>Ekskul</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('home/guru')?>'">
      <i class="fas fa-chalkboard-teacher"></i>
      <div>Guru</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('agenda') ?>'">
      <i class="fas fa-calendar-alt"></i>
      <div>Agenda</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url('blog') ?>'">
      <i class="fas fa-bullhorn"></i>
      <div>Info</div>
    </div>

    <div class="menu-item" onclick="location.href='<?= base_url() ?>#berita'">
      <i class="fas fa-trophy"></i>
      <div>Prestasi</div>
    </div>

  </div>
</div>

<!-- SAMBUTAN -->
<div id="sambutan" class="container sambutan mt-4">
  <div class="row align-items-center">

    <div class="col-md-8">
      <h5>Sambutan</h5>
      <p><?= $sambutan->content ?></p>
    </div>

    <div class="col-md-4 text-center">
      <img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" class="img-fluid">
    </div>

  </div>
</div>

<!-- GURU -->
<div class="container mt-5">
  <h5 class="text-center mb-4">Pengajar</h5>

  <div class="row">

    <?php foreach ($guru as $g): ?>
      <div class="col-md-6 col-12 mb-3">
        
        <div class="guru-item d-flex align-items-center">

          <!-- FOTO -->
          <img src="<?= base_url('img/identitas/' . $g->photo_g) ?>" class="guru-img">

          <!-- TEXT -->
          <div class="guru-info">
            <div class="guru-nama"><?= $g->Nama_g ?></div>
            <div class="guru-mapel"><?= $g->Mapel_g ?></div>
          </div>

        </div>

      </div>
    <?php endforeach; ?>

  </div>
</div>

<!-- BERITA -->
<div id="berita" class="container mt-5 mb-5">
  <h5 class="text-center">Berita Terbaru</h5>

  <div class="row mt-4">
    <?php foreach($berita as $b) : ?>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>" class="card-img-top" style="height:150px; object-fit:cover;">
          <div class="card-body">
            <h5 class="card-title"><?= $b->title ?></h5>
            <p class="card-text"><?= character_limiter($b->content,50) ?></p>
            <a href="<?= base_url("blog/baca/$b->seo_title") ?>" class="btn btn-success btn-sm">Baca</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>

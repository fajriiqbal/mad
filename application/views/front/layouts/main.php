<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title ?> - MTs Sunan Kalijaga</title>
<link rel="shortcut icon" href="<?= base_url('asset/favicon.ico') ?>">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!-- FontAwesome -->
<link rel="stylesheet" href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>">


<style>
/* Mobile Bottom Nav */
nav.bottom-nav{
  display:flex;
  position:fixed;
  bottom:12px;
  left:12px;
  right:12px;
  height:64px;
  background:#fff;
  border-radius:16px;
  justify-content:space-around;
  align-items:center;
  box-shadow:0 12px 30px rgba(0,0,0,0.12);
  z-index:50;
}
nav.bottom-nav a{
  text-decoration:none;
  font-size:12px;
  color:#475569;
  display:flex;
  flex-direction:column;
  align-items:center;
}
nav.bottom-nav a.active{
  color:#2563eb;
  font-weight:700;
}

/* FAB */
.fab{
  position: fixed;
  right: 28px;
  bottom: 86px;

  width: 60px;
  height: 60px;
  border-radius: 50%; /* jadi lingkaran seperti logo */

  background: linear-gradient(135deg, #25D366, #128C7E);
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;

  z-index: 55;
  text-decoration: none;

  font-size: 24px;
  font-weight: bold;

  box-shadow: 0 10px 25px rgba(0,0,0,0.2);

  transition: all 0.3s ease;
}

/* efek hover biar hidup */
.fab:hover{
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 15px 35px rgba(0,0,0,0.3);
}

/* Hide mobile nav and FAB on desktop */
@media(min-width:768px){
  nav.bottom-nav, .fab{
    display:none;
  }
}
</style>

</head>
<body>

<!-- Navbar Desktop -->
<div class="d-none d-md-block">
    <?php $this->load->view('front/layouts/_navbar'); ?>
</div>

<!-- Main Content -->
<main class="py-4">
  <div class="container">
    <?php $this->load->view('front/pages/'.$page); ?>
  </div>
</main>

<!-- Footer Desktop -->
<div class="d-none d-md-block">
    <?php $this->load->view('front/layouts/_footer'); ?>
</div>

<!-- Bottom Navigation Mobile -->
<nav class="bottom-nav d-md-none">
  <a href="<?= base_url() ?>" class="<?= ($title=='Beranda')?'active':'' ?>">
    <i class="fas fa-home"></i>
    <span>Beranda</span>
  </a>
  <a href="<?= base_url('profil/sejarah') ?>" class="<?= (in_array($title,['Sejarah','Visi & Misi','Struktur','Fasilitas']))?'active':'' ?>">
    <i class="fas fa-user"></i>
    <span>Profil</span>
  </a>
  <a href="<?= base_url('ppdb/form') ?>" class="<?= (in_array($page ?? '', ['ppdb/form','ppdb/inforpmb','ppdb/hasilpmb']))?'active':'' ?>">
    <i class="fas fa-file-alt"></i>
    <span>PPDB</span>
  </a>
  <a href="<?= base_url('blog') ?>" class="<?= ($title=='Berita')?'active':'' ?>">
    <i class="fas fa-newspaper"></i>
    <span>Berita</span>
  </a>
  <a href="<?= base_url('agenda') ?>" class="<?= ($title=='Agenda')?'active':'' ?>">
    <i class="fas fa-calendar-alt"></i>
    <span>Agenda</span>
  </a>
</nav>

<!-- Floating Action Button -->
<a href="https://wa.me/6282241509229" class="fab">
  <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
</a>

<!-- JS -->

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<?php if (!empty($scroll_to)) : ?>
<script>
  window.addEventListener('load', function () {
    var target = document.getElementById('<?= $scroll_to ?>');
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
</script>
<?php endif; ?>

</body>
</html>

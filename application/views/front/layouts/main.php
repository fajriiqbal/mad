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
  :root{
    --bg: #f5f7fb;
    --surface: rgba(255,255,255,0.78);
    --surface-strong: #ffffff;
    --border: rgba(15, 23, 42, 0.08);
    --text: #0f172a;
    --muted: #64748b;
    --accent: #2563eb;
    --accent-soft: rgba(37, 99, 235, 0.12);
    --success: #0f766e;
    --shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    --shadow-soft: 0 10px 24px rgba(15, 23, 42, 0.06);
    --radius-xl: 28px;
    --radius-lg: 22px;
    --radius-md: 18px;
  }

  html{
    scroll-behavior: smooth;
  }

  body{
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    background:
      radial-gradient(circle at top left, rgba(37, 99, 235, 0.08), transparent 28%),
      radial-gradient(circle at top right, rgba(15, 118, 110, 0.08), transparent 25%),
      linear-gradient(180deg, #f8fafc 0%, #f5f7fb 38%, #eef2f7 100%);
    color: var(--text);
  }

  a{
    color: inherit;
  }

  .site-shell{
    padding: 24px 0 54px;
  }

  .page-surface{
    background: var(--surface);
    backdrop-filter: blur(14px);
    border: 1px solid var(--border);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow);
    overflow: hidden;
  }

  .section-card,
  .surface-card{
    background: rgba(255,255,255,0.82);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-soft);
  }

  .section-card{
    padding: 28px;
  }

  .section-eyebrow{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 12px;
    border-radius: 999px;
    background: var(--accent-soft);
    color: var(--accent);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  .section-title{
    margin: 14px 0 8px;
    font-size: clamp(1.5rem, 2vw, 2.2rem);
    font-weight: 800;
    letter-spacing: -0.03em;
  }

  .section-subtitle{
    color: var(--muted);
    line-height: 1.75;
    max-width: 62ch;
  }

  .soft-btn{
    border: 0;
    border-radius: 999px;
    padding: 0.85rem 1.25rem;
    font-weight: 700;
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.18);
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
  }

  .soft-btn:hover{
    transform: translateY(-1px);
    box-shadow: 0 14px 28px rgba(37, 99, 235, 0.22);
  }

  .soft-btn-primary{
    background: linear-gradient(135deg, #2563eb, #0f766e);
    color: #fff;
  }

  .soft-btn-outline{
    background: rgba(255,255,255,0.86);
    color: var(--text);
    border: 1px solid var(--border);
    box-shadow: none;
  }

  .soft-btn-outline:hover{
    background: #fff;
  }

  .glass-card{
    background: rgba(255,255,255,0.72);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.6);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow);
  }

  .media-frame{
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-soft);
    background: #fff;
  }

  .media-frame img{
    width: 100%;
    display: block;
  }

  .pill{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 12px;
    border-radius: 999px;
    background: rgba(255,255,255,0.7);
    color: var(--text);
    border: 1px solid var(--border);
    font-size: 12px;
    font-weight: 600;
  }

  .content-section{
    margin-top: 28px;
  }

  .grid-3{
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
  }

  .grid-4{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
  }

  .mobile-hide{
    display: block;
  }

/* Mobile Bottom Nav */
nav.bottom-nav{
  display:flex;
  position:fixed;
  bottom:12px;
  left:12px;
  right:12px;
  height:68px;
  background: rgba(255,255,255,0.9);
  border-radius:20px;
  justify-content:space-around;
  align-items:center;
  box-shadow:0 16px 38px rgba(15,23,42,0.12);
  border: 1px solid var(--border);
  backdrop-filter: blur(16px);
  z-index:50;
}
nav.bottom-nav a{
  text-decoration:none;
  font-size:11px;
  color:var(--muted);
  display:flex;
  flex-direction:column;
  align-items:center;
  gap: 4px;
  min-width: 52px;
}
nav.bottom-nav a.active{
  color:var(--accent);
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

  background: linear-gradient(135deg, #25d366, #128c7e);
  color: white;

  display: flex;
  align-items: center;
  justify-content: center;

  z-index: 55;
  text-decoration: none;

  font-size: 24px;
  font-weight: bold;

  box-shadow: 0 12px 30px rgba(15,23,42,0.18);

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

  .site-shell{
    padding: 34px 0 70px;
  }
}

@media(max-width:767.98px){
  .page-surface{
    border-radius: 22px;
  }

  .section-card{
    padding: 20px;
  }

  .grid-3,
  .grid-4{
    grid-template-columns: 1fr;
  }

  .mobile-hide{
    display:none !important;
  }

  nav.bottom-nav{
    left: 10px;
    right: 10px;
    bottom: 10px;
    padding: 0 8px;
  }

  .fab{
    right: 18px;
    bottom: 92px;
    width: 54px;
    height: 54px;
    font-size: 22px;
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
<main class="site-shell">
  <div class="container">
    <div class="page-surface">
      <?php $this->load->view('front/pages/'.$page); ?>
    </div>
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

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
    --bg: #f4f6fa;
    --surface: rgba(255,255,255,0.86);
    --surface-strong: #ffffff;
    --border: rgba(15, 23, 42, 0.07);
    --text: #122033;
    --muted: #667085;
    --accent: #0f766e;
    --accent-soft: rgba(15, 118, 110, 0.10);
    --success: #166534;
    --shadow: 0 14px 30px rgba(15, 23, 42, 0.07);
    --shadow-soft: 0 8px 18px rgba(15, 23, 42, 0.05);
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
      radial-gradient(circle at top left, rgba(22, 101, 52, 0.06), transparent 28%),
      radial-gradient(circle at top right, rgba(15, 118, 110, 0.06), transparent 25%),
      linear-gradient(180deg, #fbfcfe 0%, #f6f8fb 42%, #eef3f8 100%);
    color: var(--text);
    line-height: 1.72;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
  }

  a{
    color: inherit;
  }

  .site-shell{
    padding: 28px 0 66px;
  }

  .page-surface{
    background: var(--surface);
    backdrop-filter: blur(10px);
    border: 1px solid var(--border);
    border-radius: 26px;
    box-shadow: var(--shadow);
    overflow: hidden;
  }

  .section-card,
  .surface-card{
    background: rgba(255,255,255,0.92);
    border: 1px solid var(--border);
    border-radius: 20px;
    box-shadow: var(--shadow-soft);
  }

  .section-card{
    padding: 26px;
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
    line-height: 1.8;
    max-width: 62ch;
  }

  .content-copy{
    color: var(--muted);
    line-height: 1.95;
  }

  .shortcut-grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
  }

  .shortcut-card{
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 18px;
    border-radius: 20px;
    border: 1px solid var(--border);
    background: rgba(255,255,255,0.84);
    box-shadow: var(--shadow-soft);
    text-decoration: none;
    min-height: 136px;
    transition: transform 0.18s ease, box-shadow 0.18s ease;
  }

  .shortcut-card:hover{
    transform: translateY(-1px);
    box-shadow: 0 14px 24px rgba(15,23,42,0.08);
    text-decoration: none;
  }

  .shortcut-icon{
    width: 46px;
    height: 46px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--accent-soft);
    color: var(--accent);
    font-size: 1.1rem;
  }

  .teacher-card{
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px;
    height: 100%;
    overflow: hidden;
    background: rgba(255,255,255,0.84);
    border: 1px solid var(--border);
    border-radius: 20px;
    box-shadow: var(--shadow-soft);
  }

  .teacher-avatar{
    width: 64px;
    height: 64px;
    border-radius: 20px;
    object-fit: cover;
    flex: none;
    border: 1px solid var(--border);
  }

  .teacher-name{
    margin: 0;
    font-weight: 700;
  }

  .teacher-role{
    margin-top: 4px;
    color: var(--muted);
    font-size: 13px;
  }

  .news-card{
    height: 100%;
    overflow: hidden;
    background: rgba(255,255,255,0.84);
    border: 1px solid var(--border);
    border-radius: 20px;
    box-shadow: var(--shadow-soft);
  }

  .news-card img{
    width: 100%;
    aspect-ratio: 16 / 10;
    object-fit: cover;
    display: block;
  }

  .news-card .news-body{
    padding: 18px;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .news-card .news-title{
    font-size: 1rem;
    line-height: 1.45;
    margin-bottom: 10px;
    font-weight: 700;
  }

  .news-card .news-text{
    color: var(--muted);
    font-size: 13px;
    line-height: 1.85;
    min-height: 72px;
  }

  .news-card .news-meta{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: auto;
    padding-top: 14px;
  }

  .news-pill{
    font-size: 12px;
    color: var(--accent);
    background: var(--accent-soft);
    border-radius: 999px;
    padding: 7px 12px;
  }

  .page-hero{
    padding: 34px 28px 10px;
  }

  .page-hero-inner{
    padding: 26px;
    border-radius: 24px;
    background:
      linear-gradient(135deg, rgba(15, 118, 110, 0.09), rgba(22, 101, 52, 0.08)),
      rgba(255,255,255,0.9);
    border: 1px solid var(--border);
    box-shadow: var(--shadow-soft);
  }

  .page-hero-title{
    margin: 12px 0 8px;
    font-size: clamp(1.9rem, 3vw, 2.6rem);
    font-weight: 800;
    letter-spacing: -0.04em;
  }

  .page-hero-text{
    color: var(--muted);
    line-height: 1.9;
    margin-bottom: 0;
    max-width: 65ch;
  }

  .page-content{
    padding: 0 28px 28px;
  }

  .soft-btn{
    border: 0;
    border-radius: 999px;
    padding: 0.85rem 1.25rem;
    font-weight: 700;
    box-shadow: 0 8px 18px rgba(29, 78, 216, 0.14);
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
  }

  .soft-btn:hover{
    transform: translateY(-1px);
    box-shadow: 0 12px 22px rgba(29, 78, 216, 0.18);
  }

  .soft-btn-primary{
    background: linear-gradient(135deg, #0f766e, #166534);
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
    background: rgba(255,255,255,0.84);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.6);
    border-radius: 24px;
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
  height:66px;
  background: rgba(255,255,255,0.94);
  border-radius:18px;
  justify-content:space-around;
  align-items:center;
  box-shadow:0 12px 28px rgba(15,23,42,0.10);
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

  nav.bottom-nav a:active{
    transform: translateY(1px) scale(0.97);
    opacity: 0.82;
  }

  .page-loading-overlay{
    position: fixed;
    inset: 0;
    z-index: 2000;
    display: none;
    align-items: center;
    justify-content: center;
    background: rgba(246, 248, 251, 0.72);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: opacity 0.2s ease;
  }

  .page-loading-overlay.is-visible{
    display: flex;
    opacity: 1;
  }

  .page-loading-card{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
    padding: 22px 24px;
    border-radius: 22px;
    background: rgba(255,255,255,0.92);
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    min-width: 180px;
  }

  .page-loading-spinner{
    width: 42px;
    height: 42px;
    border-radius: 50%;
    border: 3px solid rgba(15, 118, 110, 0.14);
    border-top-color: var(--accent);
    animation: pageSpin 0.8s linear infinite;
  }

  .page-loading-text{
    font-size: 13px;
    color: var(--muted);
    font-weight: 600;
    letter-spacing: 0.01em;
  }

  @keyframes pageSpin{
    to{
      transform: rotate(360deg);
    }
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

  box-shadow: 0 10px 24px rgba(15,23,42,0.16);

  transition: all 0.3s ease;
}

/* efek hover biar hidup */
.fab:hover{
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 14px 28px rgba(0,0,0,0.22);
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
      border-radius: 20px;
    }

    .page-hero{
      padding: 18px 18px 10px;
    }

    .page-content{
      padding: 0 18px 18px;
    }

    .page-hero-inner{
      padding: 18px;
      border-radius: 20px;
    }

    .section-card{
      padding: 18px;
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

<!-- Mobile page loading overlay -->
<div class="page-loading-overlay" id="pageLoadingOverlay" aria-hidden="true">
  <div class="page-loading-card">
    <div class="page-loading-spinner"></div>
    <div class="page-loading-text">Membuka halaman...</div>
  </div>
</div>

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

<script>
  (function () {
    var overlay = document.getElementById('pageLoadingOverlay');
    if (!overlay) {
      return;
    }

    function isInternalLink(anchor) {
      if (!anchor || !anchor.getAttribute) {
        return false;
      }

      var href = anchor.getAttribute('href') || '';
      if (!href || href === '#' || href.indexOf('javascript:') === 0) {
        return false;
      }

      if (href.indexOf('http://') === 0 || href.indexOf('https://') === 0) {
        return href.indexOf(window.location.origin) === 0;
      }

      return true;
    }

    function showOverlay() {
      overlay.classList.add('is-visible');
      overlay.setAttribute('aria-hidden', 'false');
    }

    function hideOverlay() {
      overlay.classList.remove('is-visible');
      overlay.setAttribute('aria-hidden', 'true');
    }

    document.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function (event) {
        if (!isInternalLink(link)) {
          return;
        }

        var href = link.getAttribute('href') || '';
        if (href.charAt(0) === '#') {
          return;
        }

        if (link.target === '_blank' || link.hasAttribute('download')) {
          return;
        }

        showOverlay();
      });
    });

    window.addEventListener('pageshow', function () {
      hideOverlay();
    });
  })();
</script>

</body>
</html>

<nav class="navbar navbar-expand-lg navbar-light glass-card mx-md-3 mt-md-3 py-md-2">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('img/identitas/logomad.png') ?>" alt="Logo" style="max-height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= ($title=='Beranda')?'active':'' ?>"><a class="nav-link" href="<?= base_url() ?>">Beranda</a></li>

        <li class="nav-item dropdown <?= (in_array($title,['Sejarah','Visi & Misi','Struktur','Fasilitas']))?'active':'' ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil" role="button" data-toggle="dropdown">Profil</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a>
            <a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>">Visi & Misi</a>
            <a class="dropdown-item" href="<?= base_url('profil/struktur') ?>">Struktur</a>
            <a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>">Fasilitas</a>
          </div>
        </li>

        <li class="nav-item dropdown <?= (in_array($page ?? '', ['ppdb/form','ppdb/inforpmb','ppdb/hasilpmb']))?'active':'' ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPPDB" role="button" data-toggle="dropdown">PPDB</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= base_url('ppdb/form') ?>">Form Pendaftaran</a>
            <a class="dropdown-item" href="<?= base_url('ppdb/inforpmb') ?>">Informasi PPDB</a>
            <a class="dropdown-item" href="<?= base_url('ppdb/hasilpmb') ?>">Hasil PPDB</a>
          </div>
        </li>

        <li class="nav-item <?= ($title=='Tata Tertib')?'active':'' ?>"><a class="nav-link" href="<?= base_url('tatatertib') ?>">Tata Tertib</a></li>
        <li class="nav-item <?= ($title=='Agenda')?'active':'' ?>"><a class="nav-link" href="<?= base_url('agenda') ?>">Agenda</a></li>
        <li class="nav-item <?= ($title=='Berita')?'active':'' ?>"><a class="nav-link" href="<?= base_url('blog') ?>">Berita</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar.glass-card{
    position: sticky;
    top: 14px;
    z-index: 40;
  }

  .navbar .nav-link{
    font-weight: 600;
    color: var(--text) !important;
    padding: 0.7rem 0.95rem !important;
    border-radius: 999px;
  }

  .navbar .nav-item.active > .nav-link,
  .navbar .nav-link:hover{
    background: var(--accent-soft);
    color: var(--accent) !important;
  }

  .navbar .dropdown-menu{
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow-soft);
    padding: 10px;
  }

  .navbar .dropdown-item{
    border-radius: 12px;
    padding: 10px 14px;
  }

  .navbar .dropdown-item:hover{
    background: var(--accent-soft);
    color: var(--accent);
  }

  @media (max-width: 767.98px){
    .navbar.glass-card{
      top: 0;
      margin: 0 !important;
      border-radius: 0;
      border-left: 0;
      border-right: 0;
      box-shadow: none;
      backdrop-filter: blur(10px);
    }
  }
</style>

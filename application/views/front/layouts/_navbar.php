<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('img/identitas/logomad.png') ?>" alt="Logo" style="max-height:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
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

        <li class="nav-item dropdown <?= (in_array($title,['Administrasi Perkantoran','Akutansi','Pemasaran']))?'active':'' ?>">
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

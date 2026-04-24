<style>
  .home-hero{
    padding: 28px;
  }

  .hero-intro{
    display: flex;
    flex-direction: column;
    gap: 18px;
    height: 100%;
    justify-content: center;
  }

  .hero-kicker{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    width: fit-content;
    padding: 8px 14px;
    border-radius: 999px;
    background: var(--accent-soft);
    color: var(--accent);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
  }

  .hero-title{
    font-size: clamp(2rem, 4vw, 3.6rem);
    line-height: 1.05;
    letter-spacing: -0.05em;
    font-weight: 800;
    margin: 0;
  }

  .hero-text{
    color: var(--muted);
    font-size: 1.02rem;
    line-height: 1.85;
    max-width: 56ch;
  }

  .hero-actions{
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
  }

  .carousel-shell{
    padding: 12px;
    border-radius: 28px;
    background: rgba(255,255,255,0.48);
    border: 1px solid rgba(255,255,255,0.55);
    box-shadow: var(--shadow);
  }

  .carousel-shell .carousel-inner,
  .carousel-shell .carousel-item img{
    border-radius: 22px;
  }

  .carousel-shell .carousel-item img{
    width: 100%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
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
    border-radius: 22px;
    border: 1px solid var(--border);
    background: rgba(255,255,255,0.84);
    box-shadow: var(--shadow-soft);
    text-decoration: none;
    min-height: 142px;
    transition: transform 0.18s ease, box-shadow 0.18s ease;
  }

  .shortcut-card:hover{
    transform: translateY(-2px);
    box-shadow: 0 18px 32px rgba(15,23,42,0.09);
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

  .shortcut-card strong{
    font-size: 0.98rem;
  }

  .shortcut-card span{
    color: var(--muted);
    font-size: 12px;
    line-height: 1.65;
  }

  .profile-card{
    overflow: hidden;
  }

  .profile-card .content-copy{
    color: var(--muted);
    line-height: 1.9;
  }

  .teacher-card,
  .news-card{
    height: 100%;
    overflow: hidden;
    background: rgba(255,255,255,0.84);
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: var(--shadow-soft);
  }

  .teacher-card{
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 18px;
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

  .news-card img{
    width: 100%;
    aspect-ratio: 16 / 10;
    object-fit: cover;
    display: block;
  }

  .news-card .news-body{
    padding: 18px;
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
    line-height: 1.75;
    min-height: 72px;
  }

  .news-card .news-meta{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: 14px;
  }

  .news-pill{
    font-size: 12px;
    color: var(--accent);
    background: var(--accent-soft);
    border-radius: 999px;
    padding: 7px 12px;
  }

  @media (max-width: 991.98px){
    .shortcut-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767.98px){
    .home-hero{
      padding: 18px;
    }

    .hero-actions,
    .news-card .news-meta{
      flex-direction: column;
      align-items: stretch;
    }

    .shortcut-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
    }

    .shortcut-card{
      min-height: 108px;
      padding: 12px;
      gap: 8px;
      border-radius: 18px;
    }

    .shortcut-icon{
      width: 38px;
      height: 38px;
      border-radius: 14px;
      font-size: 0.95rem;
    }

    .shortcut-card strong{
      font-size: 0.9rem;
      line-height: 1.25;
    }

    .shortcut-card span{
      font-size: 11px;
      line-height: 1.4;
    }

    .teacher-card{
      align-items: flex-start;
    }

    .section-card{
      padding: 18px;
    }
  }
</style>

<section class="home-hero">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-intro">
        <div class="hero-kicker"><i class="fas fa-school"></i> Website Resmi MTS Sunan Kalijaga</div>
        <h1 class="hero-title">Belajar dalam suasana yang tenang, modern, dan berkarakter.</h1>
        <p class="hero-text">
          Kami menghadirkan informasi sekolah, pendaftaran, berita, dan kegiatan dalam tampilan yang lebih bersih,
          lembut, dan mudah dipakai di desktop maupun mobile.
        </p>
        <div class="hero-actions">
          <a href="<?= base_url('ppdb/inforpmb') ?>" class="soft-btn soft-btn-primary">
            <i class="fas fa-user-plus mr-2"></i> PPDB
          </a>
          <a href="<?= base_url('profil/sejarah') ?>" class="soft-btn soft-btn-outline">
            <i class="fas fa-info-circle mr-2"></i> Profil Sekolah
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mt-4 mt-lg-0">
      <div class="carousel-shell">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php $bannerIndex = 0; ?>
            <?php if (!empty($banners)) : ?>
              <?php foreach ($banners as $banner) : ?>
                <?php $bannerIndex++; ?>
                <div class="carousel-item <?= $bannerIndex === 1 ? 'active' : '' ?>">
                  <img src="<?= base_url('img/banner/' . $banner->photo) ?>" alt="Banner sekolah">
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <div class="carousel-item active">
                <img src="<?= base_url('img/banner_area/bg.jpg') ?>" alt="Banner sekolah">
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section section-card mx-3 mx-md-4">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
    <div>
      <div class="section-eyebrow"><i class="fas fa-th-large"></i> Akses Cepat</div>
      <h2 class="section-title">Menu utama yang paling sering dipakai</h2>
      <p class="section-subtitle mb-0">
        Semua pintasan dibuat besar dan jelas supaya nyaman digunakan di layar desktop maupun ponsel.
      </p>
    </div>
  </div>

  <div class="shortcut-grid">
    <a class="shortcut-card" href="<?= base_url() ?>#sambutan">
      <div class="shortcut-icon"><i class="fas fa-user-tie"></i></div>
      <strong>Sambutan</strong>
      <span>Lihat pesan singkat dari pimpinan sekolah.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('profil/visimisi') ?>">
      <div class="shortcut-icon"><i class="fas fa-bullseye"></i></div>
      <strong>Visi Misi</strong>
      <span>Kenali arah, nilai, dan tujuan sekolah.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('ppdb/inforpmb') ?>">
      <div class="shortcut-icon"><i class="fas fa-clipboard-list"></i></div>
      <strong>PPDB</strong>
      <span>Informasi pendaftaran siswa baru.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('home/ekstra') ?>">
      <div class="shortcut-icon"><i class="fas fa-running"></i></div>
      <strong>Ekstrakurikuler</strong>
      <span>Kegiatan pengembangan minat dan bakat.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('home/guru') ?>">
      <div class="shortcut-icon"><i class="fas fa-chalkboard-teacher"></i></div>
      <strong>Guru</strong>
      <span>Profil tenaga pendidik sekolah.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('agenda') ?>">
      <div class="shortcut-icon"><i class="fas fa-calendar-alt"></i></div>
      <strong>Agenda</strong>
      <span>Lihat kegiatan sekolah yang akan datang.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url('blog') ?>">
      <div class="shortcut-icon"><i class="fas fa-newspaper"></i></div>
      <strong>Berita</strong>
      <span>Update informasi dan kabar terbaru.</span>
    </a>
    <a class="shortcut-card" href="<?= base_url() ?>#berita">
      <div class="shortcut-icon"><i class="fas fa-star"></i></div>
      <strong>Prestasi</strong>
      <span>Capaiannya tampil di area berita unggulan.</span>
    </a>
  </div>
</section>

<section id="sambutan" class="content-section section-card mx-3 mx-md-4">
  <div class="row align-items-center">
    <div class="col-lg-7">
      <div class="section-eyebrow"><i class="fas fa-comment-dots"></i> Sambutan</div>
      <h2 class="section-title mb-3">Pesan singkat untuk pengunjung website</h2>
      <div class="profile-card">
        <div class="content-copy">
          <?= $sambutan->content ?>
        </div>
      </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
      <div class="media-frame">
        <img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" alt="Sambutan">
      </div>
    </div>
  </div>
</section>

<section class="content-section section-card mx-3 mx-md-4">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
    <div>
      <div class="section-eyebrow"><i class="fas fa-users"></i> Pengajar</div>
      <h2 class="section-title">Tenaga pendidik yang mendampingi siswa</h2>
      <p class="section-subtitle mb-0">Tampilan kartu dibuat ringkas agar mudah dibaca dan terasa rapi di layar kecil.</p>
    </div>
  </div>

  <div class="grid-3">
    <?php if (!empty($guru)) : ?>
      <?php foreach ($guru as $g): ?>
        <div class="teacher-card">
          <img src="<?= base_url('img/identitas/' . $g->photo_g) ?>" class="teacher-avatar" alt="<?= $g->Nama_g ?>">
          <div>
            <p class="teacher-name"><?= $g->Nama_g ?></p>
            <div class="teacher-role"><?= $g->Mapel_g ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="surface-card p-4 text-center text-muted">Data guru belum tersedia.</div>
    <?php endif; ?>
  </div>
</section>

<section id="berita" class="content-section section-card mx-3 mx-md-4 mb-4">
  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
    <div>
      <div class="section-eyebrow"><i class="fas fa-newspaper"></i> Berita</div>
      <h2 class="section-title">Informasi dan kabar terbaru</h2>
      <p class="section-subtitle mb-0">Konten tampil sebagai kartu editorial yang lebih tenang dan mudah dipindai.</p>
    </div>
    <a class="soft-btn soft-btn-outline mt-3 mt-md-0" href="<?= base_url('blog') ?>">
      Lihat semua berita <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>

  <div class="grid-4">
    <?php if (!empty($berita)) : ?>
      <?php foreach($berita as $b) : ?>
        <article class="news-card">
          <img src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>" alt="<?= $b->title ?>">
          <div class="news-body">
            <h3 class="news-title"><?= $b->title ?></h3>
            <p class="news-text"><?= character_limiter($b->content, 90) ?></p>
            <div class="news-meta">
              <span class="news-pill">Berita sekolah</span>
              <a href="<?= base_url("blog/baca/$b->seo_title") ?>" class="soft-btn soft-btn-outline py-2 px-3">
                Baca
              </a>
            </div>
          </div>
        </article>
      <?php endforeach ?>
    <?php else: ?>
      <div class="surface-card p-4 text-center text-muted">Belum ada berita yang ditampilkan.</div>
    <?php endif; ?>
  </div>
</section>

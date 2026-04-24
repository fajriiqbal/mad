<style>
  .news-page{
    padding: 28px;
  }

  .news-grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
  }

  .news-card{
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .news-card .news-body{
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .pagination{
    justify-content: center;
  }

  @media (max-width: 991.98px){
    .news-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767.98px){
    .news-page{
      padding: 18px;
    }

    .news-grid{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="news-page">
  <div class="section-eyebrow"><i class="fas fa-newspaper"></i> Berita</div>
  <h1 class="section-title mb-2">Berita sekolah yang terbaru</h1>
  <p class="section-subtitle mb-4">
    Semua artikel ditata seperti editorial cards agar tampil lebih premium dan nyaman dibaca.
  </p>

  <div class="news-grid">
    <?php if (!empty($news)) : ?>
      <?php foreach($news as $n) : ?>
        <article class="news-card">
          <img src="<?= base_url('img/berita/thumbs/' . $n->photo) ?>" alt="<?= $n->title ?>">
          <div class="news-body">
            <h3 class="news-title"><?= $n->title ?></h3>
            <p class="news-text"><?= character_limiter($n->content, 90) ?></p>
            <div class="news-meta">
              <span class="news-pill">Artikel</span>
              <a href="<?= base_url("blog/baca/$n->seo_title") ?>" class="soft-btn soft-btn-outline py-2 px-3">
                Baca
              </a>
            </div>
          </div>
        </article>
      <?php endforeach ?>
    <?php else: ?>
      <div class="surface-card p-4 text-center text-muted">Belum ada berita yang tersedia.</div>
    <?php endif; ?>
  </div>

  <div class="row mt-4">
    <div class="col text-center">
      <nav>
        <?= $pagination ?>
      </nav>
    </div>
  </div>
</section>

<style>
  .facility-page{
    padding: 28px;
  }

  .facility-grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
  }

  .facility-card{
    background: rgba(255,255,255,0.88);
    border: 1px solid var(--border);
    border-radius: 22px;
    overflow: hidden;
    box-shadow: var(--shadow-soft);
    height: 100%;
    text-decoration: none;
  }

  .facility-card img{
    width: 100%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    display: block;
  }

  .facility-card .body{
    padding: 16px;
  }

  .facility-card h3{
    font-size: 0.98rem;
    font-weight: 800;
    margin-bottom: 0;
  }

  @media (max-width: 991.98px){
    .facility-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767.98px){
    .facility-page{
      padding: 18px;
    }

    .facility-grid{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="facility-page">
  <div class="section-eyebrow"><i class="fas fa-building"></i> Fasilitas</div>
  <h1 class="section-title mb-2">Fasilitas pendukung pembelajaran</h1>
  <p class="section-subtitle mb-4">
    Ditampilkan dalam kartu foto yang bersih agar mudah dilihat di desktop maupun mobile.
  </p>

  <div class="facility-grid">
    <?php if (!empty($fasilitas)) : ?>
      <?php foreach($fasilitas as $f) : ?>
        <a href="<?= base_url('img/fasilitas/' . $f->photo) ?>" target="_blank" class="facility-card">
          <img src="<?= base_url('img/fasilitas/' . $f->photo) ?>" alt="<?= $f->name ?>">
          <div class="body">
            <h3><?= $f->name ?></h3>
          </div>
        </a>
      <?php endforeach ?>
    <?php else: ?>
      <div class="surface-card p-4 text-center text-muted">Belum ada data fasilitas yang ditampilkan.</div>
    <?php endif; ?>
  </div>
</section>

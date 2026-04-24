<style>
  .teacher-page{
    padding: 28px;
  }

  .teacher-grid{
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
  }

  .teacher-profile{
    background: rgba(255,255,255,0.85);
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: var(--shadow-soft);
    overflow: hidden;
    height: 100%;
  }

  .teacher-profile img{
    width: 100%;
    aspect-ratio: 4 / 3;
    object-fit: cover;
    display: block;
  }

  .teacher-profile .body{
    padding: 18px;
  }

  .teacher-profile .name{
    font-size: 1rem;
    font-weight: 800;
    margin-bottom: 6px;
  }

  .teacher-profile .mapel{
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
  }

  .teacher-hero{
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 22px;
  }

  @media (max-width: 991.98px){
    .teacher-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767.98px){
    .teacher-page{
      padding: 18px;
    }

    .teacher-grid{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="teacher-page">
  <div class="teacher-hero">
    <div class="section-eyebrow"><i class="fas fa-chalkboard-teacher"></i> Guru</div>
    <h1 class="section-title mb-0">Daftar guru dan tenaga pendidik</h1>
    <p class="section-subtitle mb-0">
      Kartu dibuat lebih bersih dan besar supaya nyaman dipakai di desktop maupun ponsel.
    </p>
  </div>

  <div class="teacher-grid">
    <?php if (!empty($guru)) : ?>
      <?php foreach ($guru as $g): ?>
        <article class="teacher-profile">
          <img src="<?= base_url('img/identitas/' . $g->photo_g) ?>" alt="<?= $g->Nama_g ?>">
          <div class="body">
            <div class="name"><?= $g->Nama_g ?></div>
            <div class="mapel"><?= $g->Mapel_g ?></div>
          </div>
        </article>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="surface-card p-4 text-center text-muted">Belum ada data guru yang ditampilkan.</div>
    <?php endif; ?>
  </div>
</section>

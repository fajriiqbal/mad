<style>
  .extra-page{
    padding: 28px;
  }

  .extra-grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
  }

  .extra-card{
    padding: 22px;
    background: rgba(255,255,255,0.86);
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: var(--shadow-soft);
    min-height: 180px;
  }

  .extra-icon{
    width: 52px;
    height: 52px;
    border-radius: 18px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--accent-soft);
    color: var(--accent);
    font-size: 1.1rem;
    margin-bottom: 14px;
  }

  .extra-card h3{
    font-size: 1.03rem;
    font-weight: 800;
    margin-bottom: 8px;
  }

  .extra-card p{
    color: var(--muted);
    line-height: 1.8;
    margin-bottom: 0;
    font-size: 13px;
  }

  @media (max-width: 991.98px){
    .extra-grid{
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 767.98px){
    .extra-page{
      padding: 18px;
    }

    .extra-grid{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="extra-page">
  <div class="section-eyebrow"><i class="fas fa-running"></i> Ekstrakurikuler</div>
  <h1 class="section-title mb-2">Wadah minat, bakat, dan karakter siswa</h1>
  <p class="section-subtitle mb-4">
    Tampilan dibuat seperti kartu pilihan agar tetap rapi dan meyakinkan, meski data kegiatan sedang diperbarui.
  </p>

  <div class="extra-grid">
    <article class="extra-card">
      <div class="extra-icon"><i class="fas fa-futbol"></i></div>
      <h3>Olahraga</h3>
      <p>Pengembangan fisik, kerja sama tim, dan semangat kompetitif yang sehat.</p>
    </article>
    <article class="extra-card">
      <div class="extra-icon"><i class="fas fa-book-open"></i></div>
      <h3>Keagamaan</h3>
      <p>Kegiatan yang memperkuat akhlak, hafalan, dan kebiasaan ibadah yang baik.</p>
    </article>
    <article class="extra-card">
      <div class="extra-icon"><i class="fas fa-music"></i></div>
      <h3>Seni & Kreativitas</h3>
      <p>Ruang ekspresi untuk seni, karya, dan keterampilan kreatif siswa.</p>
    </article>
    <article class="extra-card">
      <div class="extra-icon"><i class="fas fa-users"></i></div>
      <h3>Kepemimpinan</h3>
      <p>Melatih keberanian, tanggung jawab, dan kemampuan berorganisasi.</p>
    </article>
  </div>
</section>

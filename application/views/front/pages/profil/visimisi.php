<style>
  .vision-page{
    padding: 28px;
  }

  .vision-grid{
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
  }

  .vision-card{
    padding: 24px;
    background: rgba(255,255,255,0.88);
    border: 1px solid var(--border);
    border-radius: 22px;
    box-shadow: var(--shadow-soft);
  }

  .vision-card h3{
    margin-bottom: 14px;
    font-size: 1.2rem;
    font-weight: 800;
  }

  .vision-card p,
  .vision-card li{
    color: var(--muted);
    line-height: 1.9;
  }

  .vision-list{
    padding-left: 18px;
    margin-bottom: 0;
  }

  @media (max-width: 767.98px){
    .vision-page{
      padding: 18px;
    }

    .vision-grid{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="vision-page">
  <div class="section-eyebrow"><i class="fas fa-bullseye"></i> Profil</div>
  <h1 class="section-title mb-2">Visi & Misi</h1>
  <p class="section-subtitle mb-4">
    Bagian ini disusun lebih elegan agar pengunjung mudah memahami arah sekolah pada tampilan desktop maupun mobile.
  </p>

  <div class="vision-grid">
    <article class="vision-card">
      <h3>Visi</h3>
      <p>
        Menjadi madrasah yang unggul dalam prestasi, berkarakter islami, dan adaptif terhadap perkembangan zaman
        dengan suasana belajar yang nyaman, aman, dan berdaya saing.
      </p>
    </article>

    <article class="vision-card">
      <h3>Misi</h3>
      <ul class="vision-list">
        <li>Menyelenggarakan pembelajaran yang aktif, terukur, dan menyenangkan.</li>
        <li>Menumbuhkan akhlak mulia, disiplin, dan budaya saling menghargai.</li>
        <li>Mendorong prestasi akademik maupun non-akademik secara seimbang.</li>
        <li>Menghadirkan layanan sekolah yang informatif, ramah, dan mudah diakses.</li>
      </ul>
    </article>
  </div>
</section>

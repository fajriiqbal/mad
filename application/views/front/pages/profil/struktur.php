<section class="page-hero">
  <div class="page-hero-inner">
    <div class="section-eyebrow"><i class="fas fa-sitemap"></i> Profil Sekolah</div>
    <h1 class="page-hero-title">Struktur Organisasi</h1>
    <p class="page-hero-text">
      Susunan organisasi ditata sederhana agar mudah dipahami dan tampil senada dengan halaman profil lainnya.
    </p>
  </div>
</section>

<?php echo $breadcrumb; ?>

<section class="page-content">
  <div class="section-card text-center">
    <div class="org-chart">
      <div class="org-node org-node-main">
        <div class="org-title">Kepala Sekolah</div>
      </div>
      <div class="org-children">
        <div class="org-node">
          <div class="org-title">Wakil Kepala Sekolah</div>
        </div>
        <div class="org-node">
          <div class="org-title">Kepala Tata Usaha</div>
        </div>
      </div>
      <div class="org-children">
        <div class="org-node">
          <div class="org-title">Kepala Bidang Kurikulum</div>
        </div>
        <div class="org-node">
          <div class="org-title">Kepala Bidang Kesiswaan</div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .org-chart{
    display: grid;
    gap: 16px;
    justify-items: center;
  }

  .org-node{
    min-width: 220px;
    padding: 16px 20px;
    background: rgba(255,255,255,0.9);
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow-soft);
  }

  .org-node-main{
    background: linear-gradient(135deg, rgba(37,99,235,0.12), rgba(15,118,110,0.10)), rgba(255,255,255,0.92);
  }

  .org-title{
    font-weight: 800;
    color: var(--text);
  }

  .org-children{
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    width: 100%;
    max-width: 760px;
  }

  @media (max-width: 767.98px){
    .org-children{
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="page-hero">
  <div class="page-hero-inner">
    <div class="section-eyebrow"><i class="fas fa-calendar-alt"></i> Agenda Sekolah</div>
    <h1 class="page-hero-title">Agenda</h1>
    <p class="page-hero-text">
      Informasi agenda ditampilkan dengan layout yang lembut dan fokus ke isi agar selaras dengan menu lainnya.
    </p>
  </div>
</section>

<?php echo $breadcrumb; ?>

<section class="page-content">
  <div class="section-card text-center">
    <?php if (!empty($agenda)) : ?>
      <div class="media-frame">
        <img src="<?= base_url('img/agenda/' . $agenda->photo) ?>" alt="Agenda sekolah">
      </div>
    <?php else: ?>
      <div class="surface-card p-4 text-muted">Agenda belum tersedia.</div>
    <?php endif; ?>
  </div>
</section>

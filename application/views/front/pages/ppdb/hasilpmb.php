<section class="page-hero">
  <div class="page-hero-inner">
    <div class="section-eyebrow"><i class="fas fa-magnifying-glass"></i> PPDB</div>
    <h1 class="page-hero-title"><?= $ppdb->result_title ?? 'Hasil PPDB' ?></h1>
    <p class="page-hero-text">
      Halaman pengumuman disajikan senada dengan halaman lain agar alur informasi tetap konsisten.
    </p>
  </div>
</section>

<?php echo $breadcrumb; ?>

<section class="page-content">
  <div class="section-card text-center">
    <div class="media-frame mb-4">
      <img src="<?= !empty($ppdb->result_image) ? base_url('img/ppdb/' . $ppdb->result_image) : base_url('img/banner_area/bg.jpg') ?>" class="img-fluid" alt="Pengumuman PPDB">
    </div>

    <h2 class="section-title mb-2"><?= $ppdb->result_title ?? 'Hasil Seleksi Telah Diumumkan' ?></h2>
    <p class="section-subtitle mx-auto">
      <?= $ppdb->result_text ?? 'Terima kasih telah mengikuti proses Penerimaan Peserta Didik Baru. Silakan menghubungi panitia untuk memperoleh hasil dan informasi selanjutnya.' ?>
    </p>

    <div class="surface-card p-4 my-4 text-left">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="shortcut-icon mb-3"><i class="fas fa-calendar-alt"></i></div>
          <h3 class="h5 font-weight-bold">Jam Layanan</h3>
          <p class="section-subtitle mb-0"><?= $ppdb->result_note ?? '08.00 - 15.00 WIB' ?></p>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="shortcut-icon mb-3"><i class="fas fa-bullhorn"></i></div>
          <h3 class="h5 font-weight-bold">Pengumuman</h3>
          <p class="section-subtitle mb-0">Informasi dapat dikonfirmasi langsung kepada panitia melalui WhatsApp.</p>
        </div>
        <div class="col-md-4">
          <div class="shortcut-icon mb-3"><i class="fas fa-phone-alt"></i></div>
          <h3 class="h5 font-weight-bold">Kontak</h3>
          <p class="section-subtitle mb-0">082241509229</p>
        </div>
      </div>
    </div>

      <a href="<?= $ppdb->whatsapp_url ?? 'https://wa.me/6282241509229?text=Assalamu\'alaikum%2C+saya+ingin+menanyakan+hasil+PPDB' ?>"
       target="_blank"
       class="soft-btn soft-btn-primary">
      Konfirmasi Hasil via WhatsApp
    </a>
  </div>
</section>

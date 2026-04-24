<section class="page-hero">
  <div class="page-hero-inner">
    <div class="section-eyebrow"><i class="fas fa-user-plus"></i> PPDB</div>
    <h1 class="page-hero-title"><?= $ppdb->hero_title ?? 'Penerimaan Peserta Didik Baru' ?></h1>
    <p class="page-hero-text">
      <?= $ppdb->hero_text ?? 'Informasi pendaftaran disajikan secara resmi, rapi, dan mudah dipahami oleh calon peserta didik maupun orang tua.' ?>
    </p>
  </div>
</section>

<?php echo $breadcrumb; ?>

<section class="page-content">
  <div class="grid-3">
    <div class="surface-card p-4">
      <div class="shortcut-icon mb-3"><i class="fas fa-calendar-alt"></i></div>
      <h3 class="h5 font-weight-bold">Jadwal</h3>
      <p class="section-subtitle mb-0">
        <?= $ppdb->jadwal_text ?? 'Pendaftaran dibuka sesuai ketentuan dan pengumuman resmi panitia.' ?>
      </p>
    </div>

    <div class="surface-card p-4">
      <div class="shortcut-icon mb-3"><i class="fas fa-file-alt"></i></div>
      <h3 class="h5 font-weight-bold">Syarat</h3>
      <ul class="section-subtitle mb-0 pl-3">
        <?php
          $syaratItems = preg_split("/\r\n|\r|\n/", (string) ($ppdb->syarat_items ?? ''));
          $syaratItems = array_filter(array_map('trim', $syaratItems));
          if (empty($syaratItems)) {
            $syaratItems = ['Fotokopi Ijazah / SKL', 'Fotokopi Akte Kelahiran', 'Fotokopi Kartu Keluarga', 'Pas Foto 3x4'];
          }
        ?>
        <?php foreach ($syaratItems as $item): ?>
          <li><?= $item ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="surface-card p-4">
      <div class="shortcut-icon mb-3"><i class="fas fa-phone-alt"></i></div>
      <h3 class="h5 font-weight-bold">Kontak</h3>
      <p class="section-subtitle mb-3">
        Panitia PPDB MTs Sunan Kalijaga Tulung
      </p>
      <a href="<?= $ppdb->whatsapp_url ?? 'https://wa.me/6282241509229?text=Assalamu\'alaikum%2C+saya+mau+tanya+tentang+PPDB' ?>" target="_blank" class="soft-btn soft-btn-outline">
        Hubungi Panitia
      </a>
    </div>
  </div>

  <div class="section-card mt-4 text-center">
    <h2 class="section-title mb-2">Pendaftaran melalui formulir resmi</h2>
    <p class="section-subtitle mx-auto">
      Silakan gunakan tautan berikut untuk mengisi formulir pendaftaran.
    </p>
    <a href="<?= $ppdb->form_url ?? 'https://docs.google.com/forms/d/e/1FAIpQLScxUnVHKh1OPw1yCaXYvtp7CMwfrX1TFLjE49j6pwfvuk2Mqw/viewform?usp=header' ?>"
       target="_blank"
       class="soft-btn soft-btn-primary mt-2">
       Isi Formulir Pendaftaran
    </a>
  </div>
</section>

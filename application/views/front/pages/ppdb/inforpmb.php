<style>
.ppdb-hero {
    background: linear-gradient(135deg, rgba(27,94,32,0.96), rgba(46,125,50,0.9), rgba(102,187,106,0.88)),
        url('<?= base_url('img/banner_area/bg.jpg') ?>') center/cover no-repeat;
    color: #fff;
    border-radius: 0 0 28px 28px;
    padding: 80px 20px;
    margin-bottom: 30px;
}

.ppdb-card {
    background: #fff;
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    height: 100%;
}

.ppdb-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

.ppdb-icon {
    width: 68px;
    height: 68px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
    margin-bottom: 18px;
}

.ppdb-cta {
    background: linear-gradient(135deg, #1b5e20, #2e7d32, #66bb6a);
    color: #fff;
    border-radius: 24px;
    padding: 50px 24px;
}

@media (max-width: 768px) {
    .ppdb-hero {
        padding: 56px 18px;
    }
}
</style>

<section class="ppdb-hero text-center">
    <div class="container">
        <h1 class="display-4 font-weight-bold mb-3">Penerimaan Peserta Didik Baru</h1>
        <p class="lead mb-4">
            MTs Sunan Kalijaga Tulung - Tahun Ajaran 2026/2027
        </p>
        <a href="<?= base_url('ppdb/form') ?>" class="btn btn-success btn-lg px-4 mr-2 mb-2">
            Daftar Sekarang
        </a>
        <a href="#info" class="btn btn-outline-light btn-lg px-4 mb-2">
            Lihat Informasi
        </a>
    </div>
</section>

<?php echo $breadcrumb; ?>

<section class="container my-5" id="info">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="ppdb-card p-4">
                <div class="ppdb-icon bg-primary">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h4 class="mb-3">Jadwal</h4>
                <p class="mb-0">
                    Pendaftaran gelombang spesial dibuka mulai <strong>September 2025</strong> hingga
                    <strong>November 2026</strong>.
                </p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="ppdb-card p-4">
                <div class="ppdb-icon bg-success">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h4 class="mb-3">Syarat</h4>
                <ul class="list-unstyled mb-0">
                    <li>- Fotokopi Ijazah / SKL</li>
                    <li>- Fotokopi Akte Kelahiran</li>
                    <li>- Fotokopi Kartu Keluarga</li>
                    <li>- Pas Foto 3x4 (2 lembar)</li>
                </ul>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="ppdb-card p-4">
                <div class="ppdb-icon bg-warning">
                    <i class="fas fa-phone"></i>
                </div>
                <h4 class="mb-3">Kontak</h4>
                <p class="mb-2">Panitia PPDB MTs Sunan Kalijaga</p>
                <p class="mb-3"><strong>Telp/WA: 082241509229</strong></p>
                <a href="https://wa.me/6282241509229?text=Assalamu'alaikum%2C+saya+mau+tanya+tentang+PPDB"
                   target="_blank"
                   class="btn btn-outline-success btn-sm">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="ppdb-cta text-center">
        <h2 class="mb-3">Bergabunglah bersama keluarga besar MTs Sunan Kalijaga</h2>
        <p class="lead mb-4">
            Tempat pendidikan islami yang unggul dalam ilmu pengetahuan dan akhlak mulia.
        </p>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxUnVHKh1OPw1yCaXYvtp7CMwfrX1TFLjE49j6pwfvuk2Mqw/viewform?usp=header"
           target="_blank"
           class="btn btn-light btn-lg px-4 py-2">
           Isi Formulir Pendaftaran
        </a>
    </div>
</section>

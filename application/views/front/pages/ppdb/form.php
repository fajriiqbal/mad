<!--================ Hero Banner Area =================-->
<div class="hero-banner d-flex align-items-center justify-content-center text-center">
    <div class="overlay"></div>

    <div class="container text-light position-relative">
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">
            Penerimaan Peserta Didik Baru
        </h1>

        <p class="lead mb-4 animate__animated animate__fadeInUp">
            MTs Sunan Kalijaga Tulung – Tahun Ajaran 2026/2027
        </p>

        <!-- TOMBOL TIDAK DIUBAH -->
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxUnVHKh1OPw1yCaXYvtp7CMwfrX1TFLjE49j6pwfvuk2Mqw/viewform?usp=header" 
           target="_blank" 
           class="btn btn-success btn-lg px-5 py-3 shadow-lg animate__animated animate__pulse animate__infinite">
           Daftar Sekarang
        </a>
    </div>
</div>
<!--================ End Hero Banner Area =================-->

<?php echo $breadcrumb; ?>

<!--================ INFORMASI =================-->
<div class="container my-5">
    <div class="row text-center">

        <!-- Jadwal -->
        <div class="col-md-4 mb-4">
            <div class="info-card h-100">
                <div class="icon-circle bg-primary">
                    <i class="bi bi-calendar-event"></i>
                </div>
                <h4 class="mt-3">Jadwal</h4>
                <p>
                    Pendaftaran Gelombang Spesial dibuka mulai 
                    <strong>September 2025</strong> hingga 
                    <strong>November 2026</strong>.
                </p>
            </div>
        </div>

        <!-- Syarat -->
        <div class="col-md-4 mb-4">
            <div class="info-card h-100">
                <div class="icon-circle bg-success">
                    <i class="bi bi-file-earmark-text"></i>
                </div>
                <h4 class="mt-3">Syarat</h4>
                <ul class="list-unstyled mt-3">
                    <li>✔ Fotokopi Ijazah / SKL</li>
                    <li>✔ Fotokopi Akte Kelahiran</li>
                    <li>✔ Fotokopi Kartu Keluarga</li>
                    <li>✔ Pas Foto 3x4 (2 lembar)</li>
                </ul>
            </div>
        </div>

        <!-- Kontak -->
        <div class="col-md-4 mb-4">
            <div class="info-card h-100">
                <div class="icon-circle bg-warning">
                    <i class="bi bi-telephone"></i>
                </div>
                <h4 class="mt-3">Kontak</h4>
                <p>Panitia PMB MTs Sunan Kalijaga</p>
                <p><strong>Telp/WA: 082241509229</strong></p>

                <!-- TOMBOL TIDAK DIUBAH -->
                <a href="https://wa.me/6282241509229?text=Assalamu'alaikum%2C+saya+mau+tanya+tentang+PPDB" 
                   target="_blank" 
                   class="btn btn-outline-success btn-sm">
                   Hubungi via WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>

<!--================ CTA =================-->
<div class="cta-section text-center text-light">
    <div class="container">
        <h2 class="mb-3">Bergabunglah bersama keluarga besar MTs Sunan Kalijaga</h2>
        <p class="lead mb-4">
            Tempat pendidikan islami yang unggul dalam ilmu pengetahuan dan akhlak mulia
        </p>

        <!-- TOMBOL TIDAK DIUBAH -->
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScxUnVHKh1OPw1yCaXYvtp7CMwfrX1TFLjE49j6pwfvuk2Mqw/viewform?usp=header" 
           target="_blank" 
           class="btn btn-light btn-lg px-4 py-2">
           Isi Formulir Pendaftaran
        </a>
    </div>
</div>

<!--================ STYLE =================-->
<style>

/* HERO */
.hero-banner {
    height: 75vh;
    background: url('<?= base_url('img/banner_area/bg.jpg') ?>') center/cover no-repeat;
    position: relative;
    overflow: hidden;
}

.hero-banner .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(27,94,32,0.9), rgba(46,125,50,0.85));
}

/* CARD */
.info-card {
    background: rgba(255,255,255,0.95);
    border-radius: 20px;
    padding: 30px;
    transition: 0.4s;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
}

.info-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 60px rgba(0,0,0,0.2);
}

/* ICON BULAT */
.icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    color: white;
    font-size: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
}

/* CTA */
.cta-section {
    background: linear-gradient(135deg,#1b5e20,#2e7d32,#66bb6a);
    padding: 80px 20px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-banner {
        height: 60vh;
    }
}

</style>
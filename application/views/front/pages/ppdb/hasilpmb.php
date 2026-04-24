<!--================ HERO =================-->
<!--================ VIDEOTRON =================-->
<div class="video-section text-center d-flex align-items-center justify-content-center">

    <div class="overlay"></div>

    <div class="container position-relative text-light">

        <h2 class="mb-3 fw-bold animate__animated animate__fadeInDown">
            Video Profil Sekolah
        </h2>

        <p class="mb-4 animate__animated animate__fadeInUp">
            Lihat lebih dekat kegiatan dan suasana belajar di MTs Sunan Kalijaga
        </p>

        <div class="video-box mx-auto">

            <!-- Thumbnail -->
            <img src="<?= base_url('img/banner_area/bg.jpg') ?>" class="img-fluid">

            <!-- Tombol Play -->
            <a href="https://www.youtube.com/watch?v=KG8schwPl1I"
               target="_blank"
               class="play-button">
               <i class="bi bi-play-fill"></i>
            </a>

        </div>

    </div>
</div>

<?php echo $breadcrumb; ?>

<!--================ CONTENT =================-->
<div class="container my-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="result-card text-center animate__animated animate__fadeInUp">

                <h3 class="mb-3">Hasil Seleksi Telah Diumumkan 🎉</h3>

                <p class="mb-4">
                    Terima kasih telah mengikuti proses Penerimaan Peserta Didik Baru.
                    Silakan hubungi panitia untuk mengetahui hasil dan informasi selanjutnya.
                </p>

                <!-- INFO BOX -->
                <div class="info-box mb-4">
                    <i class="bi bi-megaphone-fill"></i>
                    <p>
                        Pengumuman kelulusan dapat ditanyakan langsung kepada panitia melalui WhatsApp.
                    </p>
                </div>

                <!-- TOMBOL WA -->
                <a href="https://wa.me/6282241509229?text=Assalamu'alaikum%2C+saya+ingin+menanyakan+hasil+PPDB"
                   target="_blank"
                   class="btn btn-success btn-lg px-4 py-3 shadow">
                   <i class="bi bi-whatsapp"></i> Tanya Hasil via WhatsApp
                </a>

                <!-- TAMBAHAN -->
                <div class="mt-4 text-muted">
                    <small>
                        Jam layanan: 08.00 - 15.00 WIB
                    </small>
                </div>

            </div>

        </div>
    </div>

</div>

<!--================ EXTRA CTA =================-->
<div class="cta-section text-center text-light">
    <div class="container">
        <h2>Bergabunglah Bersama Kami</h2>
        <p class="mb-4">
            Wujudkan masa depan gemilang bersama MTs Sunan Kalijaga
        </p>

        <a href="https://wa.me/6282241509229?text=Assalamu'alaikum%2C+saya+ingin+bertanya+tentang+PPDB"
           target="_blank"
           class="btn btn-light btn-lg">
           Hubungi Sekarang
        </a>
    </div>
</div>

<!--================ STYLE =================-->
<style>


/* VIDEOTRON */
.video-section {
    height: 80vh;
    background: url('<?= base_url('img/banner_area/bg.jpg') ?>') center/cover no-repeat;
    position: relative;
    margin-top: 50px;
}

.video-section .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(27,94,32,0.9), rgba(46,125,50,0.85));
}

/* VIDEO BOX */
.video-box {
    position: relative;
    max-width: 700px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.4);
    transition: 0.4s;
}

.video-box:hover {
    transform: scale(1.03);
}

/* PLAY BUTTON */
.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    width: 80px;
    height: 80px;
    background: rgba(255,255,255,0.9);
    color: #2e7d32;
    border-radius: 50%;
    
    display: flex;
    align-items: center;
    justify-content: center;
    
    font-size: 40px;
    text-decoration: none;

    transition: 0.3s;
}

/* ANIMASI */
.play-button::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(255,255,255,0.4);
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 0.7; }
    70% { transform: scale(1.6); opacity: 0; }
    100% { opacity: 0; }
}

.play-button:hover {
    background: #2e7d32;
    color: white;
}


.hero-banner {
    height: 60vh;
    background: url('<?= base_url('img/banner_area/bg.jpg') ?>') center/cover no-repeat;
    position: relative;
}

.hero-banner .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(27,94,32,0.9), rgba(46,125,50,0.85));
}

.result-card {
    background: rgba(255,255,255,0.97);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* INFO BOX */
.info-box {
    background: #e8f5e9;
    border-left: 5px solid #2e7d32;
    padding: 15px;
    border-radius: 10px;
}

.info-box i {
    font-size: 30px;
    color: #2e7d32;
}

/* CTA */
.cta-section {
    background: linear-gradient(135deg,#1b5e20,#2e7d32,#66bb6a);
    padding: 70px 20px;
}

/* BUTTON */
.btn-success {
    border-radius: 50px;
    transition: 0.3s;
}

.btn-success:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

</style>
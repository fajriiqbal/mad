<!DOCTYPE html>
<html lang="id">
<head>
    
    <title>Informasi PPDB - MTs Sunan Kalijaga</title>

<meta name="description" content="Informasi lengkap PPDB MTs Sunan Kalijaga. Daftar sekarang dengan mudah dan cepat.">

<meta property="og:title" content="PPDB MTs Sunan Kalijaga">
<meta property="og:description" content="Penerimaan Peserta Didik Baru Tahun Ajaran 2026/2027. Daftar sekarang!">
<meta property="og:image" content="https://mtssunankalijagatulung.sch.id/asset/logo.png">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="500">
<meta property="og:url" content="https://mtssunankalijagatulung.sch.id/ppdb/inforpmb">
<meta property="og:type" content="website">
<!-- Favicon -->
<link rel="icon" href="<?= base_url('asset/favicon.ico') ?>">
    
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - Penerimaan Peserta Didik Baru</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons & Animasi -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        /* ================= HERO ================= */
        .hero-banner {
            height: 100vh;
            background: linear-gradient(135deg,#1b5e20,#2e7d32,#66bb6a);
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .btn-hero {
            padding: 12px 30px;
            border-radius: 50px;
            margin: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary-custom {
            background: #2e7d32;
            color: white;
            border: none;
        }

        .btn-primary-custom:hover {
            background: #1b5e20;
            transform: translateY(-3px);
        }

        .btn-outline-custom {
            border: 2px solid white;
            color: white;
        }

        .btn-outline-custom:hover {
            background: white;
            color: #2e7d32;
        }

        /* ================= INFO ================= */
        .info-section {
            padding: 80px 0;
            background: #f1f8f4;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1b5e20;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .info-card:hover {
            transform: translateY(-10px);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: #2e7d32;
            color: white;
            border-radius: 50%;
            line-height: 60px;
            margin: auto;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* ================= FOOTER ================= */
        footer {
            background: #1b5e20;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- ================= HERO ================= -->
<section class="hero-banner text-center">
    <div class="container hero-content">
        <h1 class="hero-title animate__animated animate__fadeInDown">
            PPDB
        </h1>

        <p class="hero-subtitle animate__animated animate__fadeInUp">
            Penerimaan Peserta Didik Baru secara online yang mudah, cepat, dan transparan
        </p>

        <div class="animate__animated animate__fadeInUp">
            <a href="<?= base_url('ppdb/form') ?>" class="btn btn-hero btn-primary-custom">
                <i class="bi bi-rocket-takeoff"></i> Mulai Daftar
            </a>

            <a href="#info" class="btn btn-hero btn-outline-custom">
                <i class="bi bi-info-circle"></i> Informasi
            </a>
        </div>
    </div>
</section>

<!-- ================= INFO ================= -->
<section class="info-section" id="info">
    <div class="container text-center">
        <h2 class="section-title mb-5">Alur Pendaftaran</h2>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="info-card">
                    <div class="step-number">1</div>
                    <i class="bi bi-person-plus fs-1 text-success"></i>
                    <h5 class="mt-3">Daftar Online</h5>
                    <p>Daftar Online menggunakan email aktif untuk memulai proses pendaftaran dengan menekan tombol daftar.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="info-card">
                    <div class="step-number">2</div>
                    <i class="bi bi-file-earmark-text fs-1 text-success"></i>
                    <h5 class="mt-3">Isi Formulir</h5>
                    <p>Lengkapi data diri dan upload dokumen yang diperlukan.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="info-card">
                    <div class="step-number">3</div>
                    <i class="bi bi-check-circle fs-1 text-success"></i>
                    <h5 class="mt-3">Verifikasi</h5>
                    <p>Data akan diverifikasi oleh panitia sebelum dinyatakan diterima.</p>
                </div>
            </div>

        </div>

        <a href="#" class="btn btn-primary-custom btn-lg mt-4">
            Daftar Sekarang
        </a>
    </div>
</section>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
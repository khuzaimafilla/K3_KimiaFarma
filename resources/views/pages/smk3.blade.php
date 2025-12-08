<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK3 - PT Kimia Farma Sejahtera</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #003366;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        /* Hero for SMK3 Page */
        .hero-smk3 {
            background: url('{{ asset('img/hero.jpg') }}') center/cover no-repeat;
            height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            color: white;
        }

        .hero-smk3::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero-smk3 h1 {
            position: relative;
            z-index: 2;
            font-size: 2.6rem;
            font-weight: 700;
        }

        .section-title {
            font-weight: 600;
            color: #003366;
            text-align: center;
            margin-bottom: 30px;
        }

        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-style: italic;
            font-weight: 100;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Hero -->
    <section class="hero-smk3">
        <h1>Sistem Manajemen K3 (SMK3)</h1>
    </section>

    <!-- Deskripsi SMK3 -->
    <section id="deskripsi" class="container py-5">
        <h2 class="section-title">Deskripsi SMK3</h2>
        <p class="text-center">
            Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3) merupakan pendekatan sistematis dalam memastikan
            bahwa aktivitas operasional perusahaan berjalan aman, terkendali, dan sesuai standar perlindungan tenaga
            kerja.
            PT Kimia Farma Sejahtera berkomitmen penuh dalam menjalankan SMK3 sebagai bentuk pencegahan kecelakaan
            kerja,
            pengendalian risiko, dan menciptakan tempat kerja yang sehat serta produktif.
        </p>
    </section>

    <!-- Struktur Organisasi -->
    <section id="struktur" class="container py-5">
        <h2 class="section-title">Struktur Organisasi PT Kimia Farma Sejahtera</h2>

        <div class="mb-4">
            <ul class="list-group">
                <li class="list-group-item">
                    <b>1. Managing Director (Direktur Utama)</b><br>
                    Bertanggung jawab atas strategi, arah kebijakan perusahaan, dan pengawasan seluruh direktorat.
                </li>

                <li class="list-group-item">
                    <b>2. Operation Director (Direktur Operasional)</b><br>
                    Mengelola operasional bisnis dan memastikan proses layanan berjalan efektif serta sesuai standar.
                    <ul>
                        <li>Operation Inventory Management - Pengelolaan persediaan dan distribusi produk.</li>
                        <li>Operation Performance Management - Pemantauan KPI operasional & peningkatan kinerja outlet.
                        </li>
                        <li>Operation Online Business & Digital Supporting - Pengelolaan penjualan digital & e-commerce.
                        </li>
                        <li>Service & Quality Assurance - Pengawasan kualitas layanan dan kepatuhan SOP.</li>
                        <li>Business Manager Apotek - Pengelolaan operasional apotek di lapangan.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <b>3. Finance & Human Capital Director</b><br>
                    Mengatur keuangan perusahaan dan pengelolaan SDM.
                    <ul>
                        <li>Finance & Accounting - Pengelolaan arus kas & laporan keuangan.</li>
                        <li>Risk Management - Pengendalian risiko bisnis.</li>
                        <li>IT Support - Dukungan sistem & infrastruktur teknologi.</li>
                        <li>HCBP & GA - Rekrutmen, pelatihan, dan administrasi umum.</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <b>4. Business Development Director</b>
                    <ul>
                        <li>Business Development</li>
                        <li>Digital Channel</li>
                        <li>Innovation</li>
                        <li>Health & Beauty</li>
                    </ul>
                </li>

                <li class="list-group-item">
                    <b>5. Corporate Secretary Division</b><br>
                    Mengelola komunikasi perusahaan dengan pemegang saham & regulator.
                </li>

                <li class="list-group-item">
                    <b>6. Internal Control Unit Division</b><br>
                    Mengawasi pengendalian internal & pencegahan penyimpangan.
                </li>

                <li class="list-group-item">
                    <b>7. Information Technology Division</b><br>
                    Mendukung sistem informasi dan keamanan data.
                </li>

                <li class="list-group-item">
                    <b>8. Human Capital Division</b><br>
                    Mengatur pengembangan SDM dan kesejahteraan pegawai.
                </li>

                <li class="list-group-item">
                    <b>9. Staff Expert Director</b><br>
                    Memberikan analisis dan rekomendasi strategis.
                </li>

                <li class="list-group-item">
                    <b>10. Unit Tambahan bawah Managing Director</b>
                    <ul>
                        <li>Strategy Analyst Management</li>
                        <li>Performance Management</li>
                        <li>Relation Management</li>
                        <li>Corporate Secretary</li>
                        <li>Internal Control Unit</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Bagan Gambar -->
        <div class="text-center mt-5">
            <h4 class="fw-bold mb-3">Bagan Struktur Organisasi</h4>
            <img src="{{ asset('img/organisasi.jpeg') }}" alt="Bagan Struktur Organisasi"
                class="img-fluid rounded shadow">
        </div>

    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk Management - Kimia Farma</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #003366;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            color: #003366;
        }
        .risk-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .risk-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .header-custom {
            padding: 1.5rem;
            border-bottom: 1px solid #dee2e6;
        }
        ul li {
            margin-bottom: 6px;
        }
        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 60px;
            font-style: italic;
            font-weight: 300;
        }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    <div class="container max-w-5xl mx-auto py-5 pt-5 mt-5">

        <!-- Hero -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary mb-4">Manajemen Risiko</h1>
            <p class="lead text-muted">
                Manajemen risiko K3 dilakukan untuk memastikan setiap potensi bahaya dapat diidentifikasi, dinilai, dan dikendalikan secara efektif sesuai standar industri farmasi.
            </p>
        </section>

        <h2 class="section-title">Identifikasi Potensi Sumber Bahaya</h2>

        <div class="card risk-card mb-5">
            <div class="header-custom bg-light">
                <h3 class="fw-bold mb-0 text-primary">Identifikasi Potensi Bahaya</h3>
            </div>
            <div class="card-body p-4 small text-muted">
                <p>
                    Tahap awal untuk menemukan dan mencatat semua potensi penyebab kecelakaan atau kerugian di lingkungan kerja. Pada industri farmasi, bahaya dapat berupa kimia, fisik, biologis, dan ergonomi.
                </p>

                <h5 class="fw-bold mt-4 mb-3 text-primary">Contoh Potensi Bahaya di Pabrik Kimia Farma</h5>

                <ul>
                    <li><strong>Bahaya Kimia:</strong> Paparan serbuk API, pelarut organik mudah terbakar (metanol, toluena), risiko reaksi eksotermis.</li>
                    <li><strong>Bahaya Fisik:</strong> Mesin bergerak (conveyor, mixer, packaging), tekanan tinggi pada tangki dan pipa uap, kebisingan mesin.</li>
                    <li><strong>Bahaya Biologis:</strong> Kontaminasi mikroba pada produksi steril/vaksin.</li>
                    <li><strong>Bahaya Ergonomi:</strong> Mengangkat beban berat, gerakan berulang pada lini pengemasan.</li>
                </ul>

            </div>
        </div>

        <h2 class="section-title">Penilaian Risiko (Risk Assessment)</h2>

        <div class="card risk-card mb-5">
            <div class="header-custom bg-light">
                <h3 class="fw-bold mb-0 text-success">Risk Assessment</h3>
            </div>
            <div class="card-body p-4 small text-muted">
                <p>
                    Penilaian menggabungkan Likelihood (kemungkinan) dan Severity (keparahan) untuk menentukan tingkat risiko dan prioritas penanganan.
                    Risiko ekstrem harus ditangani segera.
                </p>
            </div>
        </div>

        <h2 class="section-title">Tindakan Mengurangi / Menghilangkan Risiko</h2>

        <div class="card risk-card mb-5">
            <div class="header-custom bg-light">
                <h3 class="fw-bold mb-0 text-warning">Hierarki Pengendalian Risiko</h3>
            </div>
            <div class="card-body p-4 small text-muted">

                <h5 class="fw-bold text-primary">1. Eliminasi</h5>
                <ul>
                    <li>Menghilangkan manual handling berat → gunakan forklift / conveyor.</li>
                    <li>Mengurangi penggunaan bahan kimia volatil.</li>
                </ul>

                <h5 class="fw-bold text-success mt-3">2. Substitusi</h5>
                <ul>
                    <li>Mengganti pelarut berbahaya dengan bahan lebih aman.</li>
                    <li>Mengganti bahan pembersih bertoksisitas tinggi.</li>
                </ul>

                <h5 class="fw-bold text-danger mt-3">3. Rekayasa Teknis</h5>
                <ul>
                    <li>Ventilasi & dust collector area API.</li>
                    <li>Safety guard pada mesin bergerak.</li>
                    <li>Sistem deteksi kebocoran gas & APAR otomatis.</li>
                </ul>

                <h5 class="fw-bold text-info mt-3">4. Administrasi</h5>
                <ul>
                    <li>SOP, pelatihan K3 berkala, rotasi kerja.</li>
                </ul>

                <h5 class="fw-bold text-dark mt-3">5. APD</h5>
                <ul>
                    <li>Sarung tangan, respirator, goggles, coverall, sepatu safety, earplug.</li>
                </ul>
            </div>
        </div>

        <h2 class="section-title">Tindakan Pengendalian Risiko</h2>

        <div class="card risk-card mb-4">
            <div class="header-custom bg-light">
                <h3 class="fw-bold mb-0 text-danger">Pengendalian Risiko</h3>
            </div>
            <div class="card-body p-4 small text-muted">

                <h5 class="fw-bold text-primary mt-3">Langkah Pengendalian</h5>

                <ul>
                    <li><strong>Monitoring & Inspeksi Rutin:</strong> Pemeriksaan mesin, APD, ventilasi, kualitas udara.</li>
                    <li><strong>Audit K3 Internal & Eksternal:</strong> Evaluasi kepatuhan SOP dan sertifikasi ISO 45001.</li>
                    <li><strong>Evaluasi Efektivitas:</strong> Pemantauan penurunan kecelakaan, near miss, dan keluhan ergonomi.</li>
                    <li><strong>Pelaporan & Tindak Lanjut:</strong> Semua temuan dilaporkan ke tim HSE dan dibahas dalam rapat K3 bulanan.</li>
                </ul>

            </div>
        </div>

    </div>

    <footer>
        <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

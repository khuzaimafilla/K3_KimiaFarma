{{-- resources/views/pages/procedure.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure - Kimia Farma</title>
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
        .procedure-card {
            border-left: 4px solid;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .procedure-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .step-badge {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 600;
        }
        footer {
            background: #003366;
            color: white;
            text-align: center;
            font-style: italic;
            font-weight: 100;
            padding: 20px 0;
            margin-top: 60px;
        }
        .icon-small {
            height: 0.75rem !important;
            width: 0.75rem !important;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <!-- Hero-like Intro Section -->
    <section class="bg-light py-5">
        <div class="container text-center py-5">
            <h1 class="display-4 fw-bold text-primary mb-3">Prosedur Darurat</h1>
            <p class="lead text-muted">
                PT Kimia Farma menerapkan prosedur darurat untuk mengantisipasi berbagai <br>
                potensi bahaya, meliputi kebakaran, tumpahan B3, dan kecelakaan kerja, sesuai dengan SMK3 dan peraturan perundang-undangan yang berlaku <br>
                (UU No. 1 Tahun 1970 tentang Keselamatan Kerja).
            </p>
        </div>
    </section>

    <!-- Procedures Section -->
    <section class="container py-5">
        <h2 class="section-title">Prosedur Darurat</h2>
        <div class="row g-4">
            <!-- Section 1: Kebakaran & Ledakan -->
            <div class="col-md-4">
                <div class="card procedure-card border-left-danger h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="icon-small text-danger me-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h5 class="mb-0 fw-semibold text-dark">Kebakaran & Ledakan</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-danger text-white">1</span>
                                <span class="ms-2 small text-muted d-block">Penyediaan APAR (Alat Pemadam Api Ringan) di seluruh area operasional untuk respons cepat.</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-danger text-white">2</span>
                                <span class="ms-2 small text-muted d-block">APD khusus tim tanggap darurat: helm, sarung tangan tahan api, dan pakaian pelindung.</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-danger text-white">3</span>
                                <span class="ms-2 small text-muted d-block">Jalur evakuasi jelas dengan denah K3 dipasang di lokasi strategis; simulasi evakuasi berkala.</span>
                            </div>
                        </div>
                        <p class="small text-muted mt-3 fst-italic">Referensi: UU No. 1 Tahun 1970 tentang Keselamatan Kerja (Pasal 5 & 20 UUD 1945).</p>
                    </div>
                </div>
            </div>

            <!-- Section 2: Tumpahan & Kebocoran B3 -->
            <div class="col-md-4">
                <div class="card procedure-card border-left-warning h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="icon-small text-warning me-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <h5 class="mb-0 fw-semibold text-dark">Tumpahan & Kebocoran B3</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-warning text-white">1</span>
                                <span class="ms-2 small text-muted d-block">Safety shower & eyewash station tersedia di area laboratorium dan produksi untuk dekontaminasi cepat.</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-warning text-white">2</span>
                                <span class="ms-2 small text-muted d-block">Prosedur penanganan limbah kimia berbahaya (B3) dengan APD khusus (sarung tangan, masker, dll.).</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-warning text-white">3</span>
                                <span class="ms-2 small text-muted d-block">Laporan segera ke tim K3, isolasi area, dan penggunaan kit penyerap tumpahan.</span>
                            </div>
                        </div>
                        <p class="small text-muted mt-3 fst-italic">Referensi: PP No. 74 Tahun 2001 tentang Pengelolaan B3.</p>
                    </div>
                </div>
            </div>

            <!-- Section 3: Kecelakaan Kerja -->
            <div class="col-md-4">
                <div class="card procedure-card border-left-success h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="icon-small text-success me-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h5 class="mb-0 fw-semibold text-dark">Kecelakaan Kerja</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-success text-white">1</span>
                                <span class="ms-2 small text-muted d-block">Kotak P3K (Cedera Unit Kerja) tersedia di setiap unit kerja untuk pertolongan pertama.</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-success text-white">2</span>
                                <span class="ms-2 small text-muted d-block">Sistem pelaporan kecelakaan dan evakuasi ke fasilitas medis terdekat dengan protokol jelas.</span>
                            </div>
                            <div class="col-12 mb-2">
                                <span class="step-badge bg-success text-white">3</span>
                                <span class="ms-2 small text-muted d-block">Penanggung jawab K3 di setiap unit untuk koordinasi respons cepat; simulasi darurat berkala.</span>
                            </div>
                        </div>
                        <p class="small text-muted mt-3 fst-italic">Referensi: PP No. 50 Tahun 2012 tentang Penerapan SMK3.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
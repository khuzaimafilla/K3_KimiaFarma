{{-- resources/views/pages/apd.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APD - Kimia Farma</title>
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
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .card-header-custom {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 1.5rem;
        }
        .icon-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
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
    </style>
</head>
<body>
    @include('layouts.navbar')

    <!-- Hero-like Intro Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-primary mb-3">Alat Pelindung Diri <br>(APD)</h1>
            <p class="lead text-muted">PT Kimia Farma menerapkan APD sesuai Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja dan PP No. 50 Tahun 2012 tentang Penerapan SMK3. APD wajib digunakan untuk melindungi pekerja dari bahaya kimia, fisik, dan biologis di lingkungan kerja, termasuk area produksi, laboratorium, dan gudang B3.</p>
        </div>
    </section>

    <!-- Types of APD Section -->
    <section class="container py-5">
        <h2 class="section-title">Jenis dan Penerapan APD</h2>
        <div class="row g-4">
            <!-- Card 1: Alat Pelindung Muka dan Mata -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-primary text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Alat Pelindung Muka dan Mata</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-primary mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Melindungi dari percikan bahan kimia panas/korosif dan paparan cahaya.</p>
                        <p class="fw-semibold text-primary mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-primary me-2">•</span>Wajib di area pencampuran (mixing), reaktor kimia.</li>
                            <li class="d-flex align-items-start"><span class="text-primary me-2">•</span>Saat mengangani bahan kimia cair.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2: Alat Pernapasan -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-success text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Alat Pernapasan</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-success mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Mencegah pernapasan dari paparan debu, kabut, gas, uap, atau oksigen rendah.</p>
                        <p class="fw-semibold text-success mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-success me-2">•</span>Saat bongkar muat bahan baku.</li>
                            <li class="d-flex align-items-start mb-1"><span class="text-success me-2">•</span>Pemindahan bahan berbahaya di area proses granulasi.</li>
                            <li class="d-flex align-items-start"><span class="text-success me-2">•</span>Saat uap di area organik potensial.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 3: Alat Pelindung Telinga -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-warning text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9l-2 2-2-2" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18v-1a3 3 0 013-3h12a3 3 0 013 3v1" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Alat Pelindung Telinga</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-warning mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Mengurangi intensitas suara bising dari mesin (ear plug dan ear muff).</p>
                        <p class="fw-semibold text-warning mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-warning me-2">•</span>Di dekat kompresor, generator.</li>
                            <li class="d-flex align-items-start"><span class="text-warning me-2">•</span>Mesin tablet atau area pengemasan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 4: Alat Pelindung Tangan -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-danger text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11V7a5 5 0 0110 0v4" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Alat Pelindung Tangan</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-danger mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Melindungi tangan dari bahan kimia, benda tajam, khusus (nitril/latex).</p>
                        <p class="fw-semibold text-danger mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-danger me-2">•</span>Sarung tangan khusus (nitril/latex) untuk bahan kimia.</li>
                            <li class="d-flex align-items-start"><span class="text-danger me-2">•</span>Di gudang dan laboratorium.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 5: Alat Pelindung Kaki -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-info text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v1a2 2 0 002 2h2m-4 0h2m2 0h2m-6 0h2m2 2v1m0 0h4m-4 0h4m-4-2h4m-4 0h4m6 0v1a2 2 0 002 2h2m-8 0h8" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Alat Pelindung Kaki</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-info mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Melindungi dari benturan, tusukan, atau suhu ekstrem.</p>
                        <p class="fw-semibold text-info mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-info me-2">•</span>Sepatu safety shoes dengan sol anti-slip.</li>
                            <li class="d-flex align-items-start"><span class="text-info me-2">•</span>Di seluruh area produksi dan gudang.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 6: Pakaian Pelindung -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom h-100">
                    <div class="card-header-custom d-flex align-items-center">
                        <div class="icon-circle bg-purple text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h5 class="mb-0 fw-bold text-dark">Pakaian Pelindung</h5>
                    </div>
                    <div class="card-body">
                        <p class="fw-semibold text-purple mb-2">Fungsi Utama:</p>
                        <p class="text-muted small">Melindungi tubuh dari percikan bahan kimia, debu, atau kontaminasi.</p>
                        <p class="fw-semibold text-purple mb-2">Penerapan di Kimia Farma:</p>
                        <ul class="list-unstyled small text-muted">
                            <li class="d-flex align-items-start mb-1"><span class="text-purple me-2">•</span>Jas lab coverall atau apron.</li>
                            <li class="d-flex align-items-start"><span class="text-purple me-2">•</span>Di laboratorium (lab coat) dan area produksi berisiko tinggi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- General Regulations Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="card bg-gradient text-white rounded-3 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <h5 class="mb-0 fw-semibold">Ketentuan Umum APD</h5>
                        </div>
                        <ul class="list-unstyled small mb-3">
                            <li class="mb-1">APD disediakan oleh perusahaan dan wajib digunakan sesuai SOP SMK3.</li>
                            <li class="mb-1">Pelatihan penggunaan APD dilakukan secara berkala; pemeliharaan dan penggantian dilakukan jika rusak.</li>
                            <li>Sanksi bagi pelanggaran: Teguran lisan hingga pemecatan sesuai peraturan disiplin.</li>
                        </ul>
                        <p class="small mb-0 fst-italic">Referensi: UU No. 1 Tahun 1970 & PP No. 50 Tahun 2012 tentang SMK3.</p>
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
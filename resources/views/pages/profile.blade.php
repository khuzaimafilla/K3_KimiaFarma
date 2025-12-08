{{-- resources/views/pages/profile.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - Kimia Farma</title>
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

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            color: #003366;
        }

        .profile-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .header-custom {
            padding: 1.5rem;
            border-bottom: 1px solid #dee2e6;
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

        .bullet-point {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.5rem;
        }

        .bullet {
            width: 6px;
            height: 6px;
            background-color: currentColor;
            border-radius: 50%;
            margin-top: 0.5rem;
            margin-right: 0.75rem;
            flex-shrink: 0;
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

    <div class="container max-w-5xl mx-auto py-5 pt-5 mt-5">
        <!-- Hero-like Intro Section -->
        <section class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary mb-4">Profil Perusahaan</h1>
            <p class="lead text-muted mb-5">PT Kimia Farma Sejahtera adalah bagian dari Kimia Farma Group yang bergerak
                di industri manufaktur kimia dan layanan kesehatan. Produk meliputi cat, deterjen, pupuk, serta layanan
                kefarmasian. Perusahaan memiliki risiko tinggi karena penggunaan B3 dalam berbagai proses produksi.</p>
        </section>

        <!-- Characteristics Section -->
        <h2 class="section-title">Karakteristik Utama Perusahaan</h2>
        <div class="row g-4">
            <!-- CARD 1: Area Produksi -->
            <div class="col-md-4">
                <div class="card profile-card h-100">
                    <div class="header-custom bg-light d-flex align-items-center">
                        <h3 class="mb-0 fw-bold">Area Produksi</h3>
                    </div>
                    <div class="card-body p-4 small text-muted">
                        <p class="mb-3">Area inti tempat bahan baku diolah menjadi produk jadi.</p>
                        <div class="bullet-point text-primary">
                            <div class="bullet"></div>
                            <span>Mixing/Blending: Risiko paparan debu, uap, dan tumpahan.</span>
                        </div>
                        <div class="bullet-point text-primary">
                            <div class="bullet"></div>
                            <span>Reaktor Kimia: Risiko runaway reaction, ledakan, dan kebakaran.</span>
                        </div>
                        <div class="bullet-point text-primary">
                            <div class="bullet"></div>
                            <span>Pengemasan: Risiko paparan kronis dan ergonomi.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2: Gudang B3 -->
            <div class="col-md-4">
                <div class="card profile-card h-100">
                    <div class="header-custom bg-light d-flex align-items-center">
                        <h3 class="mb-0 fw-bold">Gudang B3</h3>
                    </div>
                    <div class="card-body p-4 small text-muted">
                        <p class="mb-3">Tempat penyimpanan bahan kimia berbahaya.</p>
                        <div class="bullet-point text-success">
                            <div class="bullet"></div>
                            <span>Segregasi berdasarkan kelas bahaya.</span>
                        </div>
                        <div class="bullet-point text-success">
                            <div class="bullet"></div>
                            <span>Penahanan tumpahan (110% kapasitas).</span>
                        </div>
                        <div class="bullet-point text-success">
                            <div class="bullet"></div>
                            <span>Ventilasi khusus pencegah uap kimia.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3: Laboratorium QC -->
            <div class="col-md-4">
                <div class="card profile-card h-100">
                    <div class="header-custom bg-light d-flex align-items-center">
                        <div class="icon-circle bg-purple text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9" />
                            </svg>
                        </div>
                        <h3 class="mb-0 fw-bold">Laboratorium QC</h3>
                    </div>
                    <div class="card-body p-4 small text-muted">
                        <p class="mb-3">Mengontrol kualitas bahan baku hingga produk jadi.</p>
                        <div class="bullet-point text-purple">
                            <div class="bullet"></div>
                            <span>Pengujian analitik menggunakan asam/basa kuat.</span>
                        </div>
                        <div class="bullet-point text-purple">
                            <div class="bullet"></div>
                            <span>Instrumen GC, HPLC, spektrofotometer.</span>
                        </div>
                        <div class="bullet-point text-purple">
                            <div class="bullet"></div>
                            <span>Fume hood + safety shower wajib.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- === DENAH PABRIK === -->
            <div class="layout-section">
                <h2 class="section-title">Denah Tata Letak Pabrik</h2>
                <div class="layout-card">
                    <div class="layout-title text-center">
                        Denah PT Kimia Farma Sejahtera
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('img/denah.png') }}" alt="Denah Pabrik Kimia Farma"
                            class="layout-img img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

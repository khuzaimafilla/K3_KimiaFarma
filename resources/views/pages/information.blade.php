{{-- resources/views/pages/information.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information - Kimia Farma</title>
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
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
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
        .btn-download {
            background-color: #198754;
            border-color: #198754;
            color: white;
            font-size: 0.875rem;
        }
        .btn-download:hover {
            background-color: #157347;
            border-color: #157347;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <!-- Hero-like Intro Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-primary mb-3">Landasan Hukum K3</h1>
            <p class="lead text-muted">PT Kimia Farma Sejahtera menerapkan Sistem Manajemen Kesehatan dan Keselamatan Kerja (SMK3) <br> sesuai peraturan perundangan yang berlaku</p>
        </div>
    </section>

    <!-- Laws Section -->
    <section class="container py-5">
        <h2 class="section-title">Undang-Undang K3</h2>
        <div class="row g-4">
            <!-- Card 1: UU No. 1 Tahun 1970 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">UU No. 1 Tahun 1970 tentang Keselamatan Kerja</h5>
                        <p class="text-muted small flex-grow-1">Bahwa setiap tenaga kerja berhak mendapat perlindungan atas keselamatannya dalam melakukan pekerjaan untuk kesejahteraan hidup dan meningkatkan produksi serta produktivitas Nasional. Bahwa setiap orang lainnya yang berada di tempat kerja perlu terjamin pula keselamatannya.</p>
                        <a href="/storage/pdfs/UU-No-1-Tahun-1970.pdf" download="UU-No-1-Tahun-1970-Keselamatan-Kerja.pdf" class="btn btn-download mt-auto">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 2: UU No. 13 Tahun 2003 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">UU No. 13 Tahun 2003 tentang Ketenagakerjaan</h5>
                        <p class="text-muted small flex-grow-1">Bahwa pembangunan nasional dilaksanakan dalam rangka pembangunan manusia Indonesia seutuhnya dan pembangunan masyarakat Indonesia seluruhnya untuk mewujudkan masyarakat yang sejahtera, adil, makmur, yang merata, baik materiil maupun spiritual berdasarkan Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.</p>
                        <a href="/storage/pdfs/UU-Nomor-13-Tahun-2003.pdf" download="UU-No-13-Tahun-2003-Ketenagakerjaan.pdf" class="btn btn-download mt-auto">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 3: PP No. 50 Tahun 2012 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">PP No. 50 Tahun 2012 tentang Penerapan SMK3</h5>
                        <p class="text-muted small flex-grow-1">Untuk melaksanakan ketentuan Pasal 87 ayat (2) Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan, perlu menetapkan Peraturan Pemerintah tentang Penerapan Sistem Manajemen Keselamatan dan Kesehatan Kerja.</p>
                        <a href="/storage/pdfs/PP-Nomor-50-Tahun-2012.pdf" download="PP-No-50-Tahun-2012-Penerapan-SMK3.pdf" class="btn btn-download mt-auto">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 4: PP No. 74 Tahun 2001 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">PP No. 74 Tahun 2001 tentang Pengelolaan B3</h5>
                        <p class="text-muted small flex-grow-1">Bahwa dengan meningkatnya kegiatan pembangunan di berbagai bidang terutama bidang industri dan perdagangan, terdapat kecenderungan semakin meningkat pula penggunaan bahan berbahaya dan beracun.</p>
                        <a href="/storage/pdfs/PP742001a.pdf" download="PP-No-74-Tahun-2001-Pengelolaan-B3.pdf" class="btn btn-download mt-auto">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 5: Permenaker No. 08/MEN/VII/2010 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">Permenaker No. 08/MEN/VII/2010 tentang APD</h5>
                        <p class="text-muted small flex-grow-1">Peraturan Menteri Tenaga Kerja dan Transmigrasi tentang Alat Pelindung Diri (APD) untuk melindungi pekerja dari bahaya di tempat kerja.</p>
                        <a href="/storage/pdfs/Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" download="Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" class="btn btn-download mt-auto">Download PDF</a>
                    </div>
                </div>
            </div>

            <!-- Card 6: Permenkes No. 27 Tahun 2017 -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-semibold text-dark mb-2">Permenkes No. 27 Tahun 2017 tentang Pencegahan Infeksi</h5>
                        <p class="text-muted small flex-grow-1">Peraturan Menteri Kesehatan tentang Pencegahan & Pengendalian Infeksi di Fasilitas Kesehatan untuk menjaga keamanan dan kesehatan di lingkungan kerja medis.</p>
                        <a href="/storage/pdfs/Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" download="Kep-Men-Naker-No.187-thn-1999_Pengendalian-Bahan-Kimia-Berbahaya_E.pdf" class="btn btn-download mt-auto">Download PDF</a>
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
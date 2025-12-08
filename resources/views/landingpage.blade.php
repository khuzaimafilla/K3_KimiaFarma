{{-- resources/views/landingpage.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi K3 - PT Kimia Farma</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #003366;
    }

    .navbar-brand, .nav-link {
      color: white !important;
    }

    /* Hero Section */
    .hero {
      background: url('../img/hero.jpg') center/cover no-repeat;
      color: white;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
      padding: 0 20px;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .hero h1, .hero p, .hero a {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 800;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      color: #003366;
    }

    footer {
      background: #003366;
      color: white;
      text-align: center;
      font-style: italic;
      font-weight: 100;
      padding: 20px 0;
    }

    .policy-card {
  position: relative;
  overflow: hidden;
  transition: all 0.5s ease;
  background-color: #fff;
  color: #000;
}

.policy-card .card-body {
  position: relative;
  z-index: 2;
  transition: color 0.3s ease;
}

/* Overlay gelap agar teks tetap terbaca */
.policy-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  z-index: 1;
  transition: background 0.5s ease;
}

/* Hover umum */
.policy-card:hover::before {
  background: rgba(0, 0, 0, 0.4);
}
.policy-card:hover .card-body {
  color: #fff;
}

/* Efek background berbeda untuk setiap card */
.card-safety:hover {
  background: url('{{ asset("../icon/safety.png") }}') center/cover no-repeat;
}

.card-health:hover {
  background: url('{{ asset("../icon/healthy.png") }}') center/cover no-repeat;
}

.card-apd:hover {
  background: url('{{ asset("../icon/apd.png") }}') center/cover no-repeat;
}

.card-training:hover {
  background: url('{{ asset("../icon/training.png") }}') center/cover no-repeat;
}

/* Styling dasar untuk card tim */
.team-card {
  position: relative; /* Penting untuk positioning layer */
  overflow: hidden; /* Agar layer tidak keluar dari card */
  transition: transform 0.3s ease; /* Opsional: efek lift card saat hover */
}

.team-card:hover {
  transform: translateY(-5px); /* Card naik sedikit saat hover */
}

.team-card .card-img-top {
  height: 250px; /* Sesuaikan tinggi foto utama agar konsisten */
  object-fit: cover; /* Agar foto pas tanpa distorsi */
}

/* Layer yang slide-up */
.slide-up-layer {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  color: white;
  padding: 20px;
  text-align: center; 
  transform: translateY(100%); /* Awal: tersembunyi di bawah */
  transition: transform 0.5s ease-in-out; /* Animasi smooth */
  height: 100%; /* Layer setinggi card img */
  display: flex;
  flex-direction: column;
  justify-content: flex-end; /* Teks di bawah layer */
}

.team-card:hover .slide-up-layer {
  transform: translateY(0); /* Muncul ke atas saat hover */
}

/* Styling untuk foto duplikat di layer */
.slide-up-layer .overlay-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 100%; /* Rendah agar tidak dominan, bisa diubah ke 0 untuk hilangkan */
}

/* Styling teks di layer */
.slide-up-layer h5 {
  margin-bottom: 10px;
  font-size: 1.2rem;
}

.slide-up-layer p {
  font-size: 0.9rem;
  line-height: 1.4;
  margin: 0;
}
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="{{ asset('../img/logo.png') }}" alt="Logo" width="130" height="50" class="me-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#policy">Kebijakan</a></li>
          <li class="nav-item"><a class="nav-link" href="#emergency">Prosedur Darurat</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Selengkapnya</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Selamat Datang di Sistem Informasi K3</h1>
    <p>PT Kimia Farma Tbk - Komitmen Kami terhadap Keselamatan dan Kesehatan Kerja</p>
    <a href="{{ route('profile') }}" class="btn btn-light mt-3">Pelajari Lebih Lanjut</a>
  </section>

  <!-- Tentang K3 -->
  <section id="about" class="container py-5">
    <h2 class="section-title">Tentang K3 di Kimia Farma</h2>
    <p class="text-center">
      Industri manufaktur kimia, seperti yang dijalankan oleh PT Kimia Farma Sejahtera, memegang peranan vital dalam perekonomian nasional dengan memproduksi cat, deterjen, dan pupuk. 
      Namun, proses produksi ini melibatkan penggunaan dan penanganan Bahan Berbahaya dan Beracun (B3) yang memiliki potensi risiko tinggi. 
      Risiko tersebut mencakup kecelakaan kerja akut seperti kebakaran, ledakan, dan tumpahan bahan kimia, serta risiko kesehatan jangka panjang bagi tenaga kerja akibat paparan kronis, seperti gangguan pernapasan, iritasi kulit, dan penyakit sistemik lainnya.
      PT Kimia Farma berkomitmen untuk menerapkan Keselamatan dan Kesehatan Kerja (K3) di setiap aktivitas operasional.
      Kami memastikan lingkungan kerja yang aman, sehat, dan bebas dari potensi bahaya dengan menerapkan sistem manajemen K3
      yang sesuai dengan standar nasional dan internasional.
    </p>
  </section>

  <!-- Kebijakan K3 -->
<section id="policy" class="bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Kebijakan K3</h2>
    <div class="row text-center">
      
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card policy-card card-safety shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="fw-bold text-primary">Keselamatan</h5>
            <p>Mengutamakan keselamatan kerja di setiap proses produksi dan operasional.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card policy-card card-health shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="fw-bold text-primary">Kesehatan</h5>
            <p>Menjamin kesehatan seluruh karyawan melalui pemeriksaan rutin dan lingkungan sehat.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card policy-card card-apd shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="fw-bold text-primary">APD Lengkap</h5>
            <p>Menyediakan alat pelindung diri (APD) sesuai risiko pekerjaan dan memastikan penggunaannya.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card policy-card card-training shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="fw-bold text-primary">Pelatihan</h5>
            <p>Memberikan pelatihan K3 secara berkala kepada seluruh karyawan untuk meningkatkan kesadaran dan tanggung jawab.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Prosedur Darurat -->
  <section id="emergency" class="container py-5">
    <h2 class="section-title">Prosedur Darurat</h2>
    <p class="text-center">
      Dalam keadaan darurat seperti kebakaran, tumpahan bahan kimia, atau kecelakaan kerja, setiap karyawan wajib mengikuti
      prosedur yang telah ditetapkan oleh tim K3. Simulasi dan pelatihan rutin dilakukan untuk memastikan kesiapan seluruh tim.
    </p>
    <div class="text-center mt-4">
      <a href="https://youtu.be/vUvjmfwFNc0?si=yJeGhahL14JsF3_3" target="_blank" class="btn btn-danger">
        Lihat Video SOP K3
      </a>
    </div>
  </section>

  <!-- Tim Pengembang -->
<section id="team" class="bg-light py-5">
  <div class="container text-center">
    <h2 class="section-title">Tim Pengembang</h2>
    <p>Kenali tim di balik pengembangan Sistem Informasi K3 PT Kimia Farma.</p>
    <div class="row justify-content-center">
      
      <!-- Khuzaima Filla J -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card team-card w-auto h-auto border-0">
          <img src='{{ asset("../dev/Filla.png") }}' class="card-img-top img-fluid" alt="Foto Khuzaima Filla">
          <div class="slide-up-layer">
            <!-- Foto duplikat seukuran, dengan opacity untuk efek overlay -->
            <img src='{{ asset("../dev/filla-hover.png") }}' class="overlay-img" alt="Foto Overlay Khuzaima Filla">
          </div>
          <div class="card-body">
            <h4 class="card-title">Khuzaima Filla</h4>
            <p class="card-text">UI Designer</p>
          </div>
        </div>
      </div>

      <!-- Deva Selvia Na -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card team-card w-auto h-auto border-0">
          <img src='{{ asset("../dev/deva.png") }}' class="card-img-top img-fluid" alt="Foto Deva Selviana">
          <div class="slide-up-layer">
            <!-- Foto duplikat seukuran -->
            <img src='{{ asset("../dev/deva-hover.png") }}' class="overlay-img" alt="Foto Overlay Deva Selviana"> 
          </div>
          <div class="card-body">
            <h4 class="card-title">Deva Selviana</h4>
            <p class="card-text">Frontend Developer</p>
          </div>
        </div>
      </div>

      <!-- Drics -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card team-card w-auto h-auto border-0">
          <img src='{{ asset("../dev/Audrics.png") }}' class="card-img-top img-fluid" alt="Foto Audric Andhika">
          <div class="slide-up-layer">
            <!-- Foto duplikat seukuran -->
            <img src='{{ asset("../dev/audric-hover.png") }}' class="overlay-img" alt="Foto Overlay Audric Andhika">
          </div>
          <div class="card-body">
            <h4 class="card-title">Audric Andhika</h4>
            <p class="card-text">System Analyst</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>  

  <!-- Footer -->
  <footer>
    <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hover effects for team cards
    document.querySelectorAll('.team-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        card.classList.add('hovered');
      });

      card.addEventListener('mouseleave', () => {
        card.classList.remove('hovered');
      });
    });
  </script>
</body>
</html>
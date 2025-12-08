{{-- resources/views/layouts/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('landingpage') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="130" height="50" class="me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('landingpage') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Information') }}">Informasi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Procedure') }}">Prosedur</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Apd') }}">APD</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Smk3') }}">SMK3</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('RiskManage') }}">Manajemen Risiko</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Audit') }}">Audit K3</a></li>
            </ul>
        </div>
    </div>
</nav>
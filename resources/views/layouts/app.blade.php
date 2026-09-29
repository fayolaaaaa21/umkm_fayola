<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Siswa SMK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .bg-primary, .btn-primary { background-color: #ffa1cd !important; border-color: #ffa8d1 !important; }
    .btn-outline-primary, .text-primary { color: #ffd1e6 !important; border-color: #ffbcdb !important; }
    
    /* Efek saat tombol dipencet / di-click */
    .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active,
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        background-color: #ffb5da !important;
        border-color: #ff90c8 !important;
        color: #fff !important;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Katalog UMKM SMK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('katalog') }}">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin CRUD</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href={{ 'assets/img/logo-emutan.png' }} type="image/x-icon">
    <!-- bootstrap & bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ 'assets/css/style.css' }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
</head>

<body>

    <!-- /* ===== #NAVBAR ===== */ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href={{ '/' }}>
                <img src={{ 'assets/img/logo.png' }} alt="logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Pendanaan (Keuangan)</a></li>
                            <li><a class="dropdown-item" href="#">Manajemen Sistem</a></li>
                            <li><a class="dropdown-item" href="#">Sustainable Market</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href={{ '/skoring' }}>Skoring</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href={{ route('pupuk') }}>Pupuk</a></li>
                            <li><a class="dropdown-item" href={{ route('bibit') }}>Bibit</a></li>
                            <li><a class="dropdown-item" href={{ route('obat_obatan') }}>Obat-Obatan</a></li>
                            <li><a class="dropdown-item" href={{ route('alsintan') }}>Alsintan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Komoditas</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href={{ route('cabe') }}>Cabe</a></li>
                            <li><a class="dropdown-item" href={{ route('kedelai') }}>Kedelai</a></li>
                            <li><a class="dropdown-item" href={{ route('jagung') }}>Jagung</a></li>
                            <li><a class="dropdown-item" href={{ route('kelapa_sawit') }}>Kelapa Sawit</a></li>
                            <li><a class="dropdown-item" href={{ route('padi') }}>Padi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href={{ '/kontak_kami' }}>Kontak Kami</a></li>
                            <li><a class="dropdown-item" href={{ '/tentang_kami' }}>Tentang Kami</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link text-black" href={{ '/blogs' }}>Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="line-space"></div>
                    </li>
                    <li class="nav-item dropdown login"><a class="nav-link text-black"
                            href={{ '/login' }}>Masuk</a></li>
                    <li class="nav-item dropdown signup"><a class="nav-link text-black"
                            href={{ '/daftar' }}>Daftar</a></li>
                    <li class="nav-item dropdown-lg">
                        <i class="bi bi-globe text-black"></i>
                        <select class="bg-light text-black border-0">
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

</body>

</html>

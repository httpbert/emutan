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
</head>

<body>


    <!-- /* ===== #NAVBAR ===== */ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"
            style="margin: 0px 1em; @media only screen and (max-width: 767px) { margin: 0px 0px !important; }">
            <a class="navbar-brand" href={{ '/home' }}>
                <img src={{ 'assets/img/logo.png' }} alt="logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown login">
                        <button type="button" id="button-show-info" onclick="myNotif()" class="border-0 bg-light">
                            <a class="nav-link text-black" id="button-show-info" onclick="myNotif()">
                                <i class="bi bi-bell-slash-fill"></i>
                            </a>
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-black" href="#">
                            <i class="bi bi-cart-check-fill"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="line-space"></div>
                    </li>
                    <!-- Default dropstart button -->
                    <div class="btn-group dropstart">
                        <button type="button" class="bg-light border-0" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src={{ 'assets/img/user-img/profile.png' }} alt="" width="25">
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href={{ '/home' }} style="font-size: 13px !important;">
                                    <i class="bi bi-house-fill ms-1"></i> &nbsp;
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href={{ '/dasboard' }} style="font-size: 13px !important;">
                                    <i class="bi bi-person-lines-fill ms-1"></i> &nbsp;
                                    Account
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href={{ '/home' }} style="font-size: 13px !important;">
                                    <i class="bi bi-x-circle text-danger ms-1"></i> &nbsp;
                                    Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- /* ===== #DAHBOARDMAIN ===== */ -->
    <section class="container-fluid sproduct sproduct-card">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 bg-produk-left container">
                <div class="card-dasrhobard-left">
                    <div class="group-dashboard">
                        <div class="user-profiles">
                            <div class="personal-image">
                                <img class="img-fluid small-img" src={{ 'assets/img/user-img/profile.png' }}
                                    alt="" width="60">
                            </div>
                            <div class="username">
                                <h5>Michael</h5>
                                <div class="verify-icons bg-primary rounded-5">
                                    <i class="bi bi-shield-fill-check text-white"></i>
                                    <small class="text-white">Verifikasi email</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ul>
                            <li class="mb-3">
                                <a href={{ 'dashboard' }} class="text-black text-decoration-none">
                                    <i class="bi bi-house-fill"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href={{ 'proyek' }} class="text-black text-decoration-none">
                                    <i class="bi bi-clock-fill"></i>
                                    Proyek Pendanaan
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href={{ 'skoring_user' }} class="text-black text-decoration-none">
                                    <i class="bi bi-clipboard-data-fill"></i>
                                    Skoring
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href={{ 'pembelian' }} class="text-black text-decoration-none">
                                    <i class="bi bi-file-earmark-word-fill"></i>
                                    Pembelian
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href={{ 'my_profile' }} class="text-black text-decoration-none">
                                    <i class="bi bi-filetype-doc"></i>
                                    Profile
                                </a>
                            </li>
                        </ul>

                        <div class="card-info m-1 text-center">
                            <img class="img-fluid small-img" src={{ 'assets/img/icons/img3.png' }}>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-12 personal-data">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 left-menu">
                            <ul>
                                <li class="mb-2">
                                    <a href={{ 'my_profile' }} class="text-black text-decoration-none">
                                        <i class="bi bi-person"></i>
                                        Akun Saya
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href={{ 'data_petani' }} class="text-black text-decoration-none">
                                        <i class="bi bi-person-vcard"></i>
                                        Data Pribadi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href={{ 'ubah_password' }} class="text-black text-decoration-none">
                                        <i class="bi bi-file-earmark-lock2"></i>
                                        Ubah Kata Sandi
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-black text-decoration-none">
                                        <i class="bi bi-file-earmark-medical"></i>
                                        Syarat & Ketentuan
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href={{ '/blogs' }} target="_blank"
                                        class="text-black text-decoration-none">
                                        <i class="bi bi-info-circle"></i>
                                        Tentang Kami
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-black text-decoration-none">
                                        <i class="bi bi-file-earmark-ruled"></i>
                                        Sosialisasi
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="group-dashboard-right"> -->

                        <!-- <div class="row"> -->
                        <div class="col-8">
                            <div class="bg-white p-2" id="akunsaya">
                                <ul class="nav nav-tabs justify-content-center d-flex">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#saldodana">
                                            Data Personal
                                        </a>
                                    </li>
                                    <li class="nav-item me-auto">
                                        <a class="nav-link" data-bs-toggle="tab" href="#riwayat">
                                            Alamat
                                        </a>
                                    </li>
                                </ul>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content">

                                            <div id="saldodana" class="tab-pane fade in active show">
                                                <div class="card mt-3">
                                                    <div class="row m-2">
                                                        <div class="gambar-user text-center">
                                                            <img src={{ 'assets/img/icons//img5.png' }} alt=""
                                                                class="img-fluid small-img d-block m-auto">
                                                            <a href=""
                                                                class="text-black text-decoration-none border-1 rounded">Pilih
                                                                gambar</a>
                                                        </div>
                                                        <div class="content-user mt-5">
                                                            <form class="row g-3">
                                                                <div class="col-md-6">
                                                                    <p class="m-0" style="color: grey;">Nama
                                                                        Lengkap</p>
                                                                    <p><b>Michael Ternando</b> <a href=""
                                                                            class="text-success ms-2">ubah</a></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <p class="m-0" style="color: grey;">Jenis
                                                                        Kelamin</p>
                                                                    <p><b>Laki-Laki</b> <a href=""
                                                                            class="text-success ms-2">ubah</a></p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="m-0" style="color: grey;">Tanggal
                                                                        Lahir</p>
                                                                    <p><b>12 Desember 1980</b> <a href=""
                                                                            class="text-success ms-2">ubah</a></p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <p class="m-0" style="color: grey;">Nomor
                                                                        Telepon</p>
                                                                    <p><b>0891223788902</b> <a href=""
                                                                            class="text-success ms-2">ubah</a></p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="m-0" style="color: grey;">Tanggal
                                                                        Lahir</p>
                                                                    <p><b>12 Desember 1980</b> <a href=""
                                                                            class="text-success ms-2">ubah</a></p>
                                                                </div>
                                                            </form>

                                                            <div class="mt-3 mb-5 text-center">
                                                                <marquee>
                                                                    <p class="text-success">Note: Identitas berhasil di
                                                                        lengkapi, klik selanjutnya untuk pengajuan
                                                                        pendanaan.</p>
                                                                </marquee>

                                                                <a href="{{ 'data_user' }}"
                                                                    class="text-center btn btn-success btn-sm">Selanjutnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="riwayat" class="tab-pane fade">
                                                <div class="card alamat-user d-flex justify-content-between mt-3">
                                                    <div class="group-alamat m-3 d-flex justify-content-between">
                                                        <label>Alamat saya</label>
                                                        <a href="{{ 'tambah_alamat' }}"
                                                            class="float-end alamat-baru rounded text-decoration-none">+
                                                            Alamat Baru</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>

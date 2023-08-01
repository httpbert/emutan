@extends('templates.main')

@section('konten')
    <!-- /* ===== #CAROUSEL-KOMODITAS ===== */ -->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src={{ '../assets/img/komoditas/carousel/jagung.png' }} class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Jagung</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('jagung') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/cabe.png' }} class="d-block w-100 c-img" alt="Slide 2">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Cabe</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('cabe') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/kedelai.png' }} class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kedelai</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kedelai') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/kalapasawit.png' }} class="d-block w-100 c-img"
                    alt="Slide 2">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kalapa Sawit</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kelapa_sawit') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/padi.png' }} class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Padi</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('padi') }}>Kunjungi</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- /* ===== #CONTENT-KOMODITAS ===== */ -->
    <div class="section-komoditas">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 left-komoditas">
                    <h2 class="komoditas-title">Apa itu Jagung?</h2>
                    <span class="mb-4"></span>
                    <p class="komoditas-description">
                        Jagung adalah tanaman serealia yang berasal dari Amerika Tengah dan Amerika Selatan. Tanaman jagung
                        biasanya tumbuh setinggi 2-3 meter dengan tangkai daun yang kuat dan berbentuk pita. Buah jagung
                        berupa tongkol yang terdiri dari butir-butir jagung yang biasa dimakan setelah dipisahkan dari
                        tangkai. Butir jagung dapat dimakan langsung setelah direbus, dipanggang, atau diolah menjadi produk
                        makanan lain seperti tepung jagung, mi jagung, atau keripik jagung. Selain itu, jagung juga
                        digunakan sebagai bahan baku untuk produksi etanol dan pakan ternak. Jagung merupakan salah satu
                        tanaman pangan penting dan menjadi sumber karbohidrat yang utama bagi masyarakat di seluruh dunia.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 right-komoditas">
                    <img src={{ '../assets/img/komoditas/jagung/jagung-thumbnails.png' }} class="thumb-jg"
                        alt="thumnails cabe">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #JENIS-KOMODITAS ===== */ -->
    <div class="content-komoditas">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white">Jenis - jenis Jagung</h3>
                <span class="line"></span>
                <div class="caption-komoditas">
                    <div class="col-sm-12 col-md-6 col-lg-8 cap-komoditas">
                        <p>Ada banyak jenis jagung yang tumbuh di seluruh dunia, namun secara umum, jagung dapat dibedakan
                            berdasarkan ukuran dan warna butirnya. Berikut ini adalah beberapa jenis jagung yang umum
                            ditemukan:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Jagung manis (sweet corn): Jenis jagung yang memiliki butir berwarna kuning atau putih dengan
                            rasa manis. Biasanya dimakan sebagai sayuran atau sebagai camilan.
                        </li>
                        <li>
                            Jagung dent (dent corn): Jenis jagung yang memiliki ciri khas gigi-gigi pada permukaan butir
                            jagung. Jenis jagung ini biasanya digunakan sebagai bahan baku untuk tepung jagung, mi jagung,
                            dan makanan lainnya.
                        </li>
                        <li>
                            Jagung flint (flint corn): Jenis jagung yang memiliki butir yang keras dan lebih kecil
                            dibandingkan jenis jagung lainnya. Biasanya digunakan sebagai bahan baku untuk tepung jagung, mi
                            jagung, dan makanan lainnya.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Jagung waxy (waxy corn): Jenis jagung yang memiliki butir berwarna putih dan lebih kental.
                            Biasanya digunakan untuk membuat bahan makanan yang lebih lengket seperti adonan kue atau pasta.
                        </li>
                        <li>
                            Jagung bungkil (corn gluten feed): Sisa sisa hasil olahan jagung yang digunakan sebagai bahan
                            pakan ternak.
                        </li>
                        <li>
                            Jagung biji-bijian (grain corn): Jenis jagung yang biasanya digunakan sebagai bahan baku untuk
                            makanan, minuman, dan bahan bakar etanol.
                        </li>
                        <li>
                            Jagung popcorn: Jenis jagung yang dapat meledak ketika dipanaskan dan digunakan sebagai camilan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #TIMELINES-KOMODITAS ===== */ -->
    <section class="timeline-section">
        <div class="row mb-5 text-center">
            <div class="col-sm-12 col-md-6 col-lg-12 header-section">
                <h3 class="title">Cara Membudidaya Jagung</h3>
                <span></span>
            </div>
        </div>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Lahan</div>
                <div class="timeline-content">
                    <p>Lahan harus dipersiapkan dengan baik untuk menghasilkan tanah yang subur dan memenuhi kebutuhan
                        jagung. Lahan harus dicangkul, dicampur dengan pupuk, dan dibuat alur-alur yang berfungsi untuk
                        mengalirkan air ke tanaman. </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penanaman</div>
                <div class="timeline-content">
                    <p>Penanaman jagung dilakukan dengan cara menaburkan benih jagung ke dalam alur yang telah dibuat.
                        Penanaman dapat dilakukan secara langsung atau menggunakan alat penanam jagung yang dapat
                        mempercepat proses penanaman.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemeliharaan</div>
                <div class="timeline-content">
                    <p>Pemeliharaan meliputi kegiatan pengairan, pemupukan, dan pengendalian hama dan penyakit. Pemberian
                        air harus dilakukan secara teratur dan cukup, sedangkan pemupukan dapat dilakukan secara rutin untuk
                        memperbaiki kondisi tanah. Selain itu, hama dan penyakit harus diawasi dan dikendalikan agar tidak
                        merusak tanaman jagung.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penanaman</div>
                <div class="timeline-content">
                    <p>Pemanenan jagung dilakukan setelah tanaman jagung mencapai umur panen yaitu sekitar 90-100 hari
                        setelah penanaman. Jagung dipanen bersama dengan tongkolnya dan kemudian dijemur atau dikeringkan
                        sebelum diolah atau disimpan.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengelolaan</div>
                <div class="timeline-content">
                    <p>Jagung dapat diolah menjadi berbagai produk makanan seperti tepung jagung, mi jagung, keripik jagung,
                        dan lain sebagainya. Selain itu, jagung juga dapat dijadikan bahan baku untuk produksi etanol dan
                        pakan ternak.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUK-TURUNAN ===== */ -->
    <div class="produk-unggulan">
        <div class="container">
            <div class="row header mt-5 mb-5">
                <h3 class="text-white mb-5">Produk Turunan Jagung</h3>
            </div>

            <div class="row mb-4 produk-turunan">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img1.png' }}>
                    <p>Gula Jagung</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img2.png' }}>
                    <p>Ethanol</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img3.png' }}>
                    <p>Popcorn</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img4.png' }}>
                    <p>Minuman</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img5.png' }}>
                    <p>Sirup Jagung</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img6.png' }}>
                    <p>Tepung Jagung</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/jagung/img7.png' }}>
                    <p>Pakan Ternak</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PROVINSI ===== */ -->
    <div class="kota-produksi">
        <div class="container">
            <div class="row provinsi-header pt-5">
                <h4 class="header-kota mb-4">
                    5 Provisi di Indonesia yang terkenal dengan budidaya jagung
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row row-kota mt-5">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kedelai/provinsi/jawa-timur.png' }}>
                            </div>
                            <p class="kota">Jawa Timur</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kedelai/provinsi/jawa-tengah.png' }}>
                            </div>
                            <p class="kota">Jawa Tengah</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kedelai/provinsi/lampung.png' }}>
                            </div>
                            <p class="kota">Lampung</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kedelai/provinsi/sulawesi-selatan.png' }}>
                            </div>
                            <p class="kota">Sulawesi Selatan</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kedelai/provinsi/jawa-barat.png' }}>
                            </div>
                            <p class="kota">Jawa Barat</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="box-peta">
                        <img src={{ '../assets/img/komoditas/peta-indonesia.png' }} width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PERMISSION ===== */ -->
    <div class="permission-section bg-light">
        <div class="container text-black">
            <div class="row text-center mb-5">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h5>Telah Berizin dan Diawasi oleh</h5>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h5>Anggota Terdaftar dari</h5>
                </div>
            </div>
            <div class="row" id="izin-bank">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src={{ '../assets/img/izin-ojk.png' }} class="img-fluid" alt="ojk">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src={{ '../assets/img/izin-fintech.png' }} class="img-fluid" alt="fintech">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src={{ '../assets/img/izin-afpi.png' }} class="img-fluid" alt="afpi">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #FOOTER ===== */ -->
    <footer>
        <!-- /* ===== #ABOUTUS ===== */ -->
        <div class="disclamer-section">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-sm-12 col-md-2" id="logo-footer">
                        <img class="img-fluid" src={{ '../assets/img/logo.png' }} alt="logo">
                    </div>
                    <div class="col-sm-12 col-md-3 text-start">
                        <div class="footer-menus m-3">
                            <p class="fw-bold">Contact Us</p>
                            <span>PT. Emutan</span>
                            <span>Jl. Lewinanggung RT.11/RW.03, Depok, Jawa Barat.</span>
                            <a href="#" class="text-decoration-none text-dark">pt.emutan@asia</a> <br>
                            <a href="#" class="text-decoration-none text-dark">021-341-560</a> <br><br>
                            <div class="media-sosial mb-3">
                                <a href="#" class="text-decoration-none text-primary">Find join us</a> <br>
                                <div class="icons mt-3">
                                    <i class="bi bi-facebook h5"></i>
                                    <i class="bi bi-twitter h5"></i>
                                    <i class="bi bi-linkedin h5"></i>
                                    <i class="bi bi-instagram h5"></i>
                                    <i class="bi bi-youtube h5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 text-start">
                        <div class="footer-menus m-3">
                            <p class="fw-bold">Pendanaan</p>
                            <a href="#" class="nav-link text-decoration-none">Petani</a>
                            <a href="#" class="nav-link text-decoration-none">Supplier</a>
                            <a href="#" class="nav-link text-decoration-none">Obtaker</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 text-start">
                        <div class="footer-menus m-3">
                            <p class="fw-bold">Categories</p>
                            <a href="#" class="nav-link text-decoration-none">Finance</a>
                            <a href="#" class="nav-link text-decoration-none">Manajemen Sistem</a>
                            <a href="#" class="nav-link text-decoration-none menu">Sustainable Market</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 text-start">
                        <div class="footer-menus m-3">
                            <p class="fw-bold">About E-Mutan</p>
                            <a href="#" class="nav-link text-decoration-none menu">FAQ</a>
                            <a href="#" class="nav-link text-decoration-none">Blogs</a>
                            <a href="#" class="nav-link text-decoration-none">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /* ===== #FOODNOTE ===== */ -->
        <div class="text-center p-3 foodnote" style="background-color: black; color: white">
            Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
            <img src={{ '../assets/img/izin-ojk.png' }} alt="ojk" class="img-fluid" width="45">
        </div>
    </footer>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection

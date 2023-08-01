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
                <img src={{ '../assets/img/komoditas/carousel/kedelai.png' }} class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kedelai</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kedelai') }}>Kunjungi</a>
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
                <img src={{ '../assets/img/komoditas/carousel/jagung.png' }} class="d-block w-100 c-img" alt="Slide 3">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Jagung</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('jagung') }}>Kunjungi</a>
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
                    <h2 class="komoditas-title">Apa itu Kedelai ?</h2>
                    <span class="mb-4"></span>
                    <p class="komoditas-description">
                        Kedelai adalah sejenis tanaman kacang-kacangan yang berasal dari Asia Timur. Kedelai sering ditanam
                        sebagai sumber protein nabati dan minyak nabati. Kedelai merupakan salah satu tanaman pangan yang
                        paling penting dan banyak dibudidayakan di seluruh dunia. Buah kedelai berbentuk polong berwarna
                        hijau, dan bijinya kecil berwarna kuning, hitam, atau hijau tergantung pada varietasnya. Kedelai
                        biasa diolah menjadi berbagai macam produk seperti tahu, tempe, susu kedelai, dan minyak kedelai.
                        Selain itu, kedelai juga digunakan sebagai bahan baku untuk membuat produk makanan dan minuman
                        lainnya. Kedelai juga diketahui memiliki banyak manfaat kesehatan karena kandungan nutrisi dan
                        senyawa alami yang dimilikinya.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 right-komoditas">
                    <img src={{ '../assets/img/komoditas/kedelai/kedelai-thumbnails.png' }} class="thumb"
                        alt="thumnails cabe">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #JENIS-KOMODITAS ===== */ -->
    <div class="content-komoditas">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white">Jenis - jenis Kedelai</h3>
                <span class="line"></span>
                <div class="caption-komoditas">
                    <div class="col-sm-12 col-md-6 col-lg-8 cap-komoditas">
                        <p>Ada banyak jenis kedelai yang berbeda-beda tergantung pada daerah asalnya, karakteristik
                            tumbuhannya, dan tingkat kepedasannya. Beberapa jenis kedelai yang paling umum di antaranya
                            adalah:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Kedelai hitam: Kedelai ini memiliki ciri khas kulit biji yang berwarna hitam dan isinya berwarna
                            kuning. Kedelai hitam umumnya dibudidayakan di Asia Timur dan digunakan sebagai bahan makanan
                            dan obat tradisional.
                        </li>
                        <li>
                            Kedelai kuning: Ini adalah jenis kedelai yang paling umum dan dikenal di seluruh dunia. Biji
                            kedelai kuning biasanya digunakan untuk membuat produk seperti tahu, tempe, susu kedelai, dan
                            minyak kedelai.
                        </li>
                        <li>
                            Kedelai hijau: Kedelai hijau memiliki kulit biji yang berwarna hijau dan isinya berwarna kuning.
                            Kedelai hijau umumnya digunakan sebagai bahan makanan di Asia Timur dan juga dijadikan bahan
                            baku untuk membuat minyak kedelai.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Kedelai kedua: Ini adalah jenis kedelai yang tumbuh setelah panen pertama pada musim gugur atau
                            musim dingin. Kedelai kedua biasanya lebih kecil dan memiliki kandungan protein yang lebih
                            tinggi daripada kedelai pertama.
                        </li>
                        <li>
                            Kedelai transgenik: Beberapa varietas kedelai telah dimodifikasi secara genetik untuk
                            meningkatkan kandungan protein dan ketahanan terhadap penyakit dan hama. Namun, penggunaan
                            kedelai transgenik masih kontroversial dan tidak disetujui di semua negara.
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
                <h3 class="title">Cara Membudidaya Kedelai</h3>
                <span></span>
            </div>
        </div>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Lahan</div>
                <div class="timeline-content">
                    <p>Pastikan lahan yang digunakan sudah diperbaiki dan memiliki pH tanah yang sesuai, struktur tanah yang
                        baik, dan drainase yang cukup. Lakukan pengolahan lahan dengan cara membajak dan menggemburkan
                        tanah.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penanaman</div>
                <div class="timeline-content">
                    <p>Tanam bibit kedelai pada waktu yang tepat dan di tempat yang sesuai. Pastikan bibit kedelai yang
                        digunakan adalah bibit yang bermutu baik. Jarak tanam yang dianjurkan antarbaris adalah 30-40 cm dan
                        antarjejaring 10-15 cm.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemupukan</div>
                <div class="timeline-content">
                    <p>Pemberian pupuk harus disesuaikan dengan kebutuhan tanaman dan kondisi lahan. Pupuk organik seperti
                        pupuk kandang atau kompos dapat digunakan bersamaan dengan pupuk anorganik.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penyiraman</div>
                <div class="timeline-content">
                    <p>Kedelai membutuhkan air yang cukup untuk tumbuh dengan baik. Pastikan tanah selalu lembab tetapi
                        tidak terlalu basah.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengendalian Hama dan Penyakit</div>
                <div class="timeline-content">
                    <p>Periksa tanaman secara teratur untuk menghindari serangan hama dan penyakit. Jika ditemukan
                        tanda-tanda serangan, segera ambil tindakan yang diperlukan.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemanenan</div>
                <div class="timeline-content">
                    <p>Kedelai biasanya dipanen setelah 100-120 hari setelah penanaman. Panen dilakukan ketika biji kedelai
                        sudah matang dan warnanya telah berubah dari hijau menjadi kuning.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengelolaan Hasil</div>
                <div class="timeline-content">
                    <p>Setelah dipanen, biji kedelai dapat diolah menjadi berbagai produk makanan seperti tahu, tempe, susu
                        kedelai, dan minyak kedelai. Pastikan biji kedelai diolah dengan baik dan higienis agar menghasilkan
                        produk yang berkualitas baik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUK-TURUNAN ===== */ -->
    <div class="produk-unggulan">
        <div class="container">
            <div class="row header mt-5 mb-5">
                <h3 class="text-white mb-5">Produk Turunan Kedelai</h3>
            </div>

            <div class="row mb-4 produk-turunan">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img2.png' }}>
                    <p>Susu Kedelai</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img3.png' }}>
                    <p>Minyak Kedelai</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img4.png' }}>
                    <p>Miso Kedelai</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img5.png' }}>
                    <p>Tahu & Tempe</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img6.png' }}>
                    <p>Kue</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kedelai/img7.png' }}>
                    <p>Tepung Kedelai</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PROVINSI ===== */ -->
    <div class="kota-produksi">
        <div class="container">
            <div class="row provinsi-header pt-5">
                <h4 class="header-kota mb-4">
                    5 Provisi di Indonesia yang terkenal dengan budidaya kedelai
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

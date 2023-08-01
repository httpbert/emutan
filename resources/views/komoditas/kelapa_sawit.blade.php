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
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/jagung.png' }} class="d-block w-100 c-img" alt="Slide 2">
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
            <div class="carousel-item active c-item">
                <img src={{ '../assets/img/komoditas/carousel/kalapasawit.png' }} class="d-block w-100 c-img"
                    alt="Slide 1">
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
                    <h2 class="komoditas-title">Apa itu Kelapa Sawit?</h2>
                    <span class="mb-4"></span>
                    <p class="komoditas-description">
                        Kelapa sawit adalah tanaman yang berasal dari Afrika Barat dan kini tersebar di seluruh dunia,
                        termasuk di Asia Tenggara dan Amerika Latin. Kelapa sawit (Elaeis guineensis) ditanam terutama
                        untuk menghasilkan minyak kelapa sawit, yang banyak digunakan dalam industri makanan, kosmetik,
                        dan bahan bakar. Kelapa sawit adalah salah satu tanaman penghasil minyak terbesar di dunia dan
                        memiliki produktivitas yang tinggi, sehingga menjadi sumber pendapatan penting bagi banyak
                        negara produsen minyak kelapa sawit. Namun, produksi kelapa sawit juga kontroversial karena
                        dikaitkan dengan deforestasi, perubahan iklim, dan hak asasi manusia.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 right-komoditas">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/kelapa-sawit-thumbnails.png' }} alt="thumnails cabe">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #JENIS-KOMODITAS ===== */ -->
    <div class="content-komoditas">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white">Jenis - jenis Kelapa sawit</h3>
                <span class="line"></span>
                <div class="caption-komoditas">
                    <div class="col-sm-12 col-md-6 col-lg-8 cap-komoditas">
                        <p>Ada banyak jenis kelapa sawit yang tumbuh di seluruh dunia, namun secara umum, kelapa sawit dapat
                            dibedakan berdasarkan ukuran dan warna butirnya. Berikut ini adalah beberapa jenis kelapa sawit
                            yang umum ditemukan:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Kelapa sawit Tenera adalah jenis kelapa sawit hasil persilangan antara kelapa sawit Dura dan
                            Pisifera. Jenis kelapa sawit ini memiliki buah yang besar dan menghasilkan minyak kelapa
                            sawit dengan kualitas yang baik, sehingga menjadi pilihan utama dalam industri minyak kelapa
                            sawit.
                        </li>
                        <li>
                            Kelapa sawit Dura adalah jenis kelapa sawit asli yang berasal dari Afrika Barat. Buah dari
                            kelapa sawit Dura lebih kecil dan menghasilkan minyak kelapa sawit yang kurang berkualitas
                            dibandingkan dengan kelapa sawit Tenera.
                        </li>
                        <li>
                            Kelapa sawit Pisifera adalah jenis kelapa sawit asli yang berasal dari wilayah Asia
                            Tenggara. Buah dari kelapa sawit Pisifera kecil dan tidak menghasilkan minyak kelapa sawit,
                            namun digunakan sebagai induk untuk persilangan dengan kelapa sawit Dura.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Kelapa sawit Kuning adalah jenis kelapa sawit yang menghasilkan buah berwarna kuning, yang
                            mengandung lebih banyak karotenoid dibandingkan dengan kelapa sawit Tenera. Minyak kelapa
                            sawit dari kelapa sawit Kuning memiliki kandungan beta-karoten yang lebih tinggi, sehingga
                            cocok untuk digunakan dalam industri makanan dan minuman yang memerlukan pewarna alami.
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
                <h3 class="title">Cara Membudidaya Kelapa Sawit</h3>
                <span></span>
            </div>
        </div>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Lahan</div>
                <div class="timeline-content">
                    <p>Hal ini meliputi pembersihan lahan dari gulma dan pohon-pohon liar, serta pengolahan tanah dengan
                        cara dibajak dan diberi pupuk.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Bibit</div>
                <div class="timeline-content">
                    <p>Usai dalam persiapan lahan, langkah selanjutnya yaitu dengan menggunakan bibit sawit unggul.
                        Dulur-dulur bisa memperoleh bibit sawit melalui lembaga pemerintah ataupun dengan membeli
                        langsung melalui toko bibit pertanian terdekat. Gunanya adalah untuk mendapatkan bibit yang
                        unggul lewat rekomendasi mereka.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemeliharaan</div>
                <div class="timeline-content">
                    <p>Pemeliharaan meliputi kegiatan pengairan, pemupukan, dan pengendalian hama dan penyakit.
                        Pemberian air harus dilakukan secara teratur dan cukup, sedangkan pemupukan dapat dilakukan
                        secara rutin untuk memperbaiki kondisi tanah. Selain itu, hama dan penyakit harus diawasi dan
                        dikendalikan agar tidak merusak tanaman kelapa sawit.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pola Tanam & Jarak Tanam Kelapa Sawit Yang Tepat</div>
                <div class="timeline-content">
                    <p>Pola tanam kelapa sawit perlu diperhatikan karena berkaitan dengan efektifitas penggunaan lahan. Pola
                        tanam segitiga sama sisi merupakan pola tanam yang paling efektif di areal datar, sehingga untuk
                        areal bergelombang/berbukit perlu dilakukan “viol linning” untuk mempertahankan jumlah populasi per
                        hektarnya dengan tetap memperhatikan tingkat kesuburan tanahnya.</p>

                    <p>Karena kelapa sawit saat ini banyak ditanam dilahan marginal maka perlu upaya khusus untuk
                        “menyuburkan” tanah kembali. Penggunaan pembenah tanah hayati GDM Black BOS sangat dianjurkan karena
                        akan mempercepat proses remediasi dan revitalisasi tanah-tanah marginal.</p>

                    <p>Dosis penggunaan GDM Black Bos yaitu 10 Kg/hektar atau sekitar 75 gram/pokok yang diberikan pada
                        lubang tanam.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Waktu Tanam yang Tepat</div>
                <div class="timeline-content">
                    <p>Tidak ada waktu tanam yang baku untuk dijadikan patokan dalam budidaya kelapa sawit. Jadi waktu tanam
                        yang tepat dalam budidaya kelapa sawit adalah jika umur bibit sawit siap tanam dan lahan budidaya
                        telah tersedia.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemupukan</div>
                <div class="timeline-content">
                    <p>Pemupukan kelapa sawit merupakan kegiatan perawatan budidaya kelapa sawit yang bertujuan untuk
                        memberikan makanan pada tanaman sawit. Kegiatan ini merupakan kegiatan yang harus dilakukan dengan
                        cara yang baik agar budidaya kelapa sawit dapat maksimal.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengendalian Hama Penyakit Kelapa Sawit</div>
                <div class="timeline-content">
                    <p>Hama dan penyakit merupakan kendala yang dihadapi oleh pelaku budidaya kelapa sawit. Serangan hama
                        dan penyakit dapat membuat kelapa sawit tidak berproduksi secara maksimal, bahkan akan membuat
                        kelapa sawit gagal panen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUK-TURUNAN ===== */ -->
    <div class="produk-unggulan">
        <div class="container">
            <div class="row header mt-5 mb-5">
                <h3 class="text-white mb-5">Produk Turunan Kelapa Sawit</h3>
            </div>

            <div class="row mb-4 produk-turunan">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img1.png' }}>
                    <p>Briket Arang</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img2.png' }}>
                    <p>EBiofuel</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img3.png' }}>
                    <p>Margarin</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img4.png' }}>
                    <p>Minyak Kelapa Sawit</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img5.png' }}>
                    <p>Biodiesel</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img6.png' }}>
                    <p>Serat Kelapa Sawit</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/kelapa-sawit/img7.png' }}>
                    <p>Shortening</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PROVINSI ===== */ -->
    <div class="kota-produksi">
        <div class="container">
            <div class="row provinsi-header pt-5">
                <h4 class="header-kota mb-4">
                    5 Provisi di Indonesia yang terkenal dengan budidaya kelapa sawit
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row row-kota mt-5">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kelapa-sawit/provinsi/riau.png' }}>
                            </div>
                            <p class="kota">Riau</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kelapa-sawit/provinsi/sumatera-selatan.png' }}>
                            </div>
                            <p class="kota">Sumatera Selatan</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kelapa-sawit/provinsi/kalimantantengah.png' }}>
                            </div>
                            <p class="kota">Kalimantan Tengah</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kelapa-sawit/provinsi/kalbar.png' }}>
                            </div>
                            <p class="kota">Kalimantan Barat</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/kelapa-sawit/provinsi/jambi.png' }}>
                            </div>
                            <p class="kota">Jambi</p>
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

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
                <img src={{ '../assets/img/komoditas/carousel/cabe.png' }} class="d-block w-100 c-img small-img img-fluid"
                    alt="Slide 1">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Cabe</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('cabe') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/kedelai.png' }}
                    class="d-block w-100 c-img small-img img-fluid" alt="Slide 2">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kedelai</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kedelai') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/jagung.png' }} class="d-block w-100 c-img small-img img-fluid"
                    alt="Slide 3">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Jagung</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('jagung') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/kalapasawit.png' }}
                    class="d-block w-100 c-img small-img img-fluid" alt="Slide 2">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kalapa Sawit</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kelapa_sawit') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/padi.png' }} class="d-block w-100 c-img small-img img-fluid"
                    alt="Slide 3">
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
                    <h2 class="komoditas-title">Apa itu Cabe ?</h2>
                    <span class="mb-4"></span>
                    <p class="komoditas-description">
                        Cabe (Capsicum annuum), yaitu jenis tanaman yang menghasilkan buah yang biasanya digunakan
                        sebagai bumbu dapur. Buah cabe ini dapat berwarna hijau, kuning, oranye, merah, atau ungu, dan
                        memiliki tingkat kepedasan yang bervariasi tergantung pada jenisnya. Cabe sangat umum digunakan
                        sebagai bumbu atau penyedap makanan di berbagai masakan di seluruh dunia, terutama di Asia dan
                        Amerika Latin.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 right-komoditas">
                    <img src={{ '../assets/img/komoditas/cabe/cabe-thumbnails.png' }} alt="cabe-thumbnails">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #MOBILE-FEATURES ===== */ -->
    <div class="content-komoditas">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white">Jenis - jenis Cabe</h3>
                <span class="line"></span>
                <div class="caption-komoditas">
                    <div class="col-sm-12 col-md-6 col-lg-8 cap-komoditas">
                        <p>Ada banyak jenis cabe yang berbeda-beda tergantung pada daerah asalnya, karakteristik
                            tumbuhannya, dan tingkat kepedasannya. Beberapa jenis cabe yang paling umum di antaranya
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
                            Cabe rawit: cabe kecil berwarna hijau atau merah yang sangat pedas.
                        </li>
                        <li>
                            Cabe merah besar: cabe besar berwarna merah yang umum digunakan dalam berbagai masakan.
                        </li>
                        <li>
                            Cabe keriting: cabe yang berbentuk keriting dan biasanya berwarna hijau atau merah.
                        </li>
                        <li>
                            Cabe jalapeno: cabe yang berasal dari Meksiko, berbentuk cembung dan biasanya digunakan
                            dalam masakan
                            Meksiko.
                        </li>
                        <li>
                            Cabe scotch bonnet: cabe kecil yang berbentuk cembung dan biasanya berwarna hijau atau merah
                            terang.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Cabe habanero: cabe kecil berbentuk cembung yang sangat pedas dan biasanya berwarna hijau
                            atau merah.
                        </li>
                        <li>
                            Cabe Thai: cabe kecil berwarna hijau atau merah terang yang biasanya digunakan dalam masakan
                            Asia Tenggara.
                        </li>
                        <li>
                            Cabe Anaheim: cabe besar berbentuk cembung yang umum digunakan dalam masakan Amerika Latin.
                        </li>
                        <li>
                            Cabe serrano: cabe kecil berbentuk silinder dan biasanya berwarna hijau atau merah.
                        </li>
                        <li>
                            Cabe paprika: cabe besar berbentuk lonjong dan biasanya tidak terlalu pedas, digunakan dalam
                            berbagai
                            masakan di seluruh dunia.
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
                <h3 class="title">Cara Membudidaya Cabe</h3>
                <span></span>
            </div>
        </div>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Lahan</div>
                <div class="timeline-content">
                    <p>Pilih lahan yang subur dan drainase yang baik. Tanah harus dicangkul hingga menggembur. Setelah
                        itu, buat bedengan dengan lebar sekitar 1-1,5 meter dan jarak antar-bedengan sekitar 50-60 cm.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Persiapan Bibit</div>
                <div class="timeline-content">
                    <!-- <h3>timeline item title</h3> -->
                    <p>Bibit cabe dapat dibeli dari pasar atau petani lokal. Perbanyak bibit cabe untuk mendapatkan
                        hasil yang maksimal. Taburkan bibit cabe pada media semai berupa pot atau polybag. Tanam bibit
                        cabe ke bedengan saat bibit sudah mencapai usia 25-30 hari.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penyiraman</div>
                <div class="timeline-content">
                    <!-- <h3>timeline item title</h3> -->
                    <p>Siram tanaman cabe secara teratur dengan air hingga tanah terlihat lembab. Pastikan tanaman tidak
                        terlalu basah karena dapat merusak akar.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemupukan</div>
                <div class="timeline-content">
                    <!-- <h3>timeline item title</h3> -->
                    <p>Berikan pupuk organik atau pupuk kimia pada interval tertentu untuk mendapatkan pertumbuhan yang
                        baik dan hasil yang maksimal.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengendalian Hama dan Penyakit</div>
                <div class="timeline-content">
                    <!-- <h3>timeline item title</h3> -->
                    <p>Selalu periksa tanaman cabe secara rutin untuk memastikan bahwa tidak ada serangan hama atau
                        penyakit. Jika ditemukan, segera lakukan pengendalian dengan pestisida yang aman untuk tanaman.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemanenan</div>
                <div class="timeline-content">
                    <!-- <h3>timeline item title</h3> -->
                    <p>Tanaman cabe dapat dipanen setelah mencapai usia sekitar 2-3 bulan setelah penanaman. Cabe yang
                        siap panen biasanya memiliki warna yang cerah dan kulit yang kenyal. Potong cabe dengan
                        hati-hati menggunakan pisau dan jangan merusak tanaman. Setelah dipanen, cabe dapat disimpan
                        dalam wadah tertutup di tempat yang sejuk dan kering untuk menjaga kesegarannya</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2021</div>
                <div class="timeline-content">
                    <h3>timeline item title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUK-TURUNAN ===== */ -->
    <div class="produk-unggulan">
        <div class="container">
            <div class="row header mt-5 mb-5">
                <h3 class="text-white mb-5">Produk Turunan Cabai</h3>
            </div>

            <div class="row mb-4 produk-turunan">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/cabe/img1.png' }}>
                    <p>Saus Sambal</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/cabe/img2.png' }}>
                    <p>Sambal</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/cabe/img3.png' }}>
                    <p>Cabai Kering</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/cabe/img4.png' }}>
                    <p>Abon Cabai</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/cabe/img5.png' }}>
                    <p>Bubuk Cabe</p>
                </div>
            </div>
        </div>
    </div>


    <!-- /* ===== #PROVINSI ===== */ -->
    <div class="kota-produksi">
        <div class="container">
            <div class="row provinsi-header pt-5">
                <h4 class="header-kota mb-4">
                    5 Provisi di Indonesia yang terkenal dengan budidaya cabe
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row row-kota mt-5">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/cabe/provinsi/img-jawa-timur.png' }}>
                            </div>
                            <p class="kota">Jawa Timur</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/cabe/provinsi/img-jawa-tengah.png' }}>
                            </div>
                            <p class="kota">Jawa Tengah</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/cabe/provinsi/img-sumatera-utara.png' }}>
                            </div>
                            <p class="kota">Sumatera Utara</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/cabe/provinsi/img-sulawesi-selatan.png' }}>
                            </div>
                            <p class="kota">Sulawesi Selatan</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/cabe/provinsi/img-bali.png' }}>
                            </div>
                            <p class="kota">Bali</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="box-peta">
                        <img src={{ '../assets/img/komoditas/peta-indonesia.png' }} class="img-fluid small-img"
                            alt="peta indonesia">
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

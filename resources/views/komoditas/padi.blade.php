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
            <div class="carousel-item c-item">
                <img src={{ '../assets/img/komoditas/carousel/kalapasawit.png' }} class="d-block w-100 c-img"
                    alt="Slide 3">
                <div class="carousel-caption top-0 mt-5 p-5">
                    <h1 class="display-1 fw-bolder mt-5 pt-5 text-capitalize">Komoditas Kalapa Sawit</h1>
                    <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href={{ route('kelapa_sawit') }}>Kunjungi</a>
                </div>
            </div>
            <div class="carousel-item active c-item">
                <img src={{ '../assets/img/komoditas/carousel/padi.png' }} class="d-block w-100 c-img" alt="Slide 1">
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
                    <h2 class="komoditas-title">Apa itu Padi ?</h2>
                    <span class="mb-4"></span>
                    <p class="komoditas-description">
                        Padi adalah tanaman pangan yang menjadi sumber makanan pokok bagi sebagian besar penduduk dunia,
                        terutama di Asia. Padi dikenal dengan nama latin Oryza sativa dan termasuk dalam keluarga Gramineae.
                        Tanaman ini biasanya ditanam di sawah dengan menggunakan sistem irigasi, dan dapat tumbuh hingga
                        ketinggian 1-2 meter. Bagian dari padi yang dapat dimakan adalah bijinya, yang setelah dipanen akan
                        diolah menjadi berbagai macam makanan seperti nasi, mi, dan lain-lain. Padi merupakan salah satu
                        tanaman penting dalam sektor pertanian dan menjadi sumber penghasilan bagi petani di berbagai
                        negara.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 right-komoditas">
                    <img src={{ '../assets/img/komoditas/padi/padi-thumbnails.png' }} alt="thumnails cabe">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #JENIS-KOMODITAS ===== */ -->
    <div class="content-komoditas">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white">Jenis - jenis Padi</h3>
                <span class="line"></span>
                <div class="caption-komoditas">
                    <div class="col-sm-12 col-md-6 col-lg-8 cap-komoditas">
                        <p>Ada banyak jenis padi yang tumbuh di seluruh dunia, namun secara umum, padi dapat
                            dibedakan berdasarkan ukuran dan warna butirnya. Berikut ini adalah beberapa jenis padi
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
                            Padi IR64: Jenis padi yang paling umum dan banyak dibudidayakan di Indonesia. Padi IR64 memiliki
                            biji yang panjang dan tipis dengan kandungan amilosa yang tinggi sehingga cocok untuk dijadikan
                            nasi.
                        </li>
                        <li>
                            Padi Inpari: Jenis padi yang dihasilkan dari hasil persilangan antara padi lokal dengan padi
                            impor. Padi Inpari memiliki biji yang besar dan panjang, serta tahan terhadap serangan hama dan
                            penyakit.
                        </li>
                        <li>
                            Padi Inpari: Jenis padi yang dihasilkan dari hasil persilangan antara padi lokal dengan padi
                            impor. Padi Inpari memiliki biji yang besar dan panjang, serta tahan terhadap serangan hama dan
                            penyakit.
                        </li>
                        <li>
                            Padi Cempo Ireng: Jenis padi yang berasal dari Jawa Tengah dan memiliki biji yang berwarna hitam
                            keunguan. Padi Cempo Ireng biasanya diolah menjadi ketan hitam atau bubur ketan.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 jenis-komoditas">
                    <ul>
                        <li>
                            Padi Rojolele: Jenis padi yang berasal dari Bali dan memiliki biji yang agak kecil dan berwarna
                            kuning. Padi Rojolele dikenal dengan kandungan vitamin B1 dan protein yang tinggi.
                        </li>
                        <li>
                            Padi Mentik Wangi: Jenis padi yang berasal dari Jawa dan memiliki biji yang panjang dan wangi.
                            Padi Mentik Wangi cocok untuk dijadikan nasi atau mi.
                        </li>
                        <li>
                            Padi Siam: Jenis padi yang berasal dari Thailand dan ditanam di beberapa wilayah Indonesia
                            seperti Sumatera dan Sulawesi. Padi Siam memiliki biji yang panjang dan wangi serta cocok untuk
                            dijadikan nasi.
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
                <h3 class="title">Cara Membudidaya Padi</h3>
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
                    <p>Pilihlah lahan yang sesuai dengan kebutuhan padi, yaitu lahan yang mudah diirigasi, gembur dan
                        berbukit rendah. Pastikan lahan tersebut telah dibersihkan dari sisa-sisa tanaman sebelumnya,
                        penggemburan dan pemupukan.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Benih Padi</div>
                <div class="timeline-content">
                    <p>Pilihlah benih padi yang berkualitas, bebas dari penyakit dan cacat. Benih padi yang berkualitas akan
                        membantu mempercepat pertumbuhan tanaman dan meningkatkan hasil panen. Jangan lupa untuk memilih
                        varietas yang cocok dengan kondisi lingkungan tempat Anda.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Penanaman Padi</div>
                <div class="timeline-content">
                    <p>Lakukan penanaman padi dengan jarak tanam yang sesuai dengan rekomendasi. Biasanya, jarak tanam padi
                        adalah 20-25 cm dengan kedalaman tanam 2-3 cm.</p>
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
                <div class="timeline-date">Pemeliharaan</div>
                <div class="timeline-content">
                    <p>Berikan pupuk secara teratur dan pastikan tanaman tetap terjaga dari hama dan penyakit. Penyiangan
                        dan pembumbunan juga perlu dilakukan secara teratur.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengarian</div>
                <div class="timeline-content">
                    <p>Pastikan tanaman padi selalu mendapatkan air yang cukup. Sistem irigasi yang baik dapat membantu
                        menjaga ketersediaan air untuk tanaman.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pemanenan</div>
                <div class="timeline-content">
                    <p>Panen padi dilakukan ketika tanaman sudah mencapai umur panen, biasanya antara 3-6 bulan setelah
                        penanaman. Pastikan untuk memanen padi saat cuaca cerah dan kering.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Pengelolaan Hasil</div>
                <div class="timeline-content">
                    <p>Setelah panen, padi harus diolah agar siap untuk dikonsumsi atau dijual. Pengolahan padi dapat
                        dilakukan dengan cara pengupasan, penjemuran, dan penggilingan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUK-TURUNAN ===== */ -->
    <div class="produk-unggulan">
        <div class="container">
            <div class="row header mt-5 mb-5">
                <h3 class="text-white mb-5">Produk Turunan Padi</h3>
            </div>

            <div class="row mb-4 produk-turunan">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/padi/img1.png' }}>
                    <p>Beras</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/padi/img2.png' }}>
                    <p>Tepung Beras</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/padi/img3.png' }}>
                    <p>Mie</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/padi/img4.png' }}>
                    <p>Beras Ketan</p>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 produk-card mb-3">
                    <img src={{ '../assets/img/komoditas/padi/img5.png' }}>
                    <p>Dedak (Pakan Ternak)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PROVINSI ===== */ -->
    <div class="kota-produksi">
        <div class="container">
            <div class="row provinsi-header pt-5">
                <h4 class="header-kota mb-4">
                    5 Provisi di Indonesia yang terkenal dengan budidaya padi
                </h4>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row row-kota mt-5">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/padi/provinsi/jawa-tengah.png' }}>
                            </div>
                            <p class="kota">Jawa Tengah</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/padi/provinsi/sumatera-utara.png' }}>
                            </div>
                            <p class="kota">Sumatera Utara</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/padi/provinsi/sulawesi-selatan.png' }}>
                            </div>
                            <p class="kota">Sulawesi Selatan</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/padi/provinsi/jawa-timur.png' }}>
                            </div>
                            <p class="kota">Jawa Timur</p>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                            <div class="box-kota">
                                <img src={{ '../assets/img/komoditas/padi/provinsi/bali.png' }}>
                            </div>
                            <p class="kota">Bali</p>
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

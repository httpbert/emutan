@extends('templates.main')

<!-- /* ===== #NAVBAR ===== */ -->
@section('konten')
    <!-- /* ===== #HEADER ===== */ -->
    <div class="main-section-header">
        <div class="container-fluid header d-flex">
            <div class="row my-4 d-flex justify-content-between jumbotron-head">
                <div class="col-xs col-sm-12 col-md-6 col-lg-7 jumbotron-left-section mb-3">
                    <div class="jumbotron-top-section">
                        <h1 class="jumbotron-header-section fw-bold">Pendanaan pertanian</h1>
                        <h1 class="jumbotron-head-section fw-bold">mudah cepat dan terpercaya</h1>
                    </div>
                    <div class="jumbotron-center-section">
                        <p>
                            Mulailah membangun pertanian yang lebih baik serta berkelanjutan dengan pendanaan yang andal
                            lewat e-Mutan.
                        </p>
                    </div>
                    <div class="jumbotron-bottom-section">
                        <a href="#mulai" class="btn-get text-decoration-none text-black">Get Started</a>
                        <a href="#funding" class="btn-learn text-decoration-none text-black">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 jumobtron-right-section">
                    <img src={{ 'assets/img/hero-jumbotron.png' }} alt="gambar jumbotron" class="img-fluid" width="100%">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #FUNDING-PROJECTS ===== */ -->
    <div class="section-funding" id="funding">
        <div class="container funding-content">
            <div class="row">
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img1.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">Rp 250 Miliiar</p>
                        <p class="fund-desc">Total Outstanding Pendanaan</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img2.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">Rp 500 Miliiar</p>
                        <p class="fund-desc">Total Outstanding Pendanaan</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img3.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">Rp 705 Miliiar</p>
                        <p class="fund-desc">Total Pendanaan Tersalurkan</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img4.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">Rp 250 Miliiar</p>
                        <p class="fund-desc">Total Pendanaan Tahun Berjalan</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img5.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">10 %</p>
                        <p class="fund-desc">Total Petani yang Tidak Aktif</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img6.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">85 %</p>
                        <p class="fund-desc">Total Penerima Pendanaan Aktif</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img7.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">80 %</p>
                        <p class="fund-desc">Total Penerima Pendanaan</p>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
                    <div class="funding-images">
                        <img src={{ 'assets/img/funding-projects/img8.png' }} alt="trafic pendanaan" class="img-fluid">
                    </div>
                    <div class="funding-desc">
                        <p class="fund-title">90 %</p>
                        <p class="fund-desc">Tingkat Keberhasilan 90 (TKB90)</p>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <span class="fs-6"><small>Note: <i class="text-warning">Data sementara (Belum up to date)</i></small></span>
        </center>
    </div>

    <!-- /* ===== #FEATURES ===== */ -->
    <div class="section-features-card">
        <div class="container-fluid features-container">
            <div class="row mb-3 features-row">
                <div class="col-sm-12 col-md-6 col-lg-6 features-header">
                    <p>Fitur Layanan</p>
                    <h2 class="mb-2">Fitur Layanan Yang Kami Sediakan</h2>
                    <p class="caption">
                        Berikut ini adalah fitur layanan yang disediakan oleh emutan, diantaranya dapat dilihat di menu
                        berikut:
                    </p>
                </div>
            </div>
            <div class="row features-main-row">
                <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
                    <div class="features-bx-sm rounded p-3 mb-3">
                        <div class="features-image">
                            <img src={{ 'assets/img/features/img1.png' }} alt="" class="img-fluid">
                        </div>
                        <div class="features-description">
                            <h5 class="mb-2 mt-3">Pendaan (Keuangan)</h5>
                            <p class="mb-3">
                                Mulai pendanaan pertanian di platform kami, tentunya mudah, cepat dan terpecaya, sekaligus
                                berdampak kepada masyarakat dan lingkungan.
                            </p>
                            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
                                Pelajari lebih lanjut
                                &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
                    <div class="features-bx-sm rounded p-3 mb-3">
                        <div class="features-image">
                            <img src={{ 'assets/img/features/img2.png' }} alt="" class="img-fluid">
                        </div>
                        <div class="features-description">
                            <h5 class="mb-2 mt-3">Manajemen Sistem</h5>
                            <p class="mb-">
                                Bagian ini adalah sistem layanan edukasi untuk membimbing dan mengarahkan para petani dalam
                                mengelola lahan pertaniannya masing-masing.
                            </p>
                            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
                                Pelajari lebih lanjut
                                &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
                    <div class="features-bx-sm rounded p-3 mb-3">
                        <div class="features-image">
                            <img src={{ 'assets/img/features/img3.png' }} alt="" class="img-fluid">
                        </div>
                        <div class="features-description">
                            <h5 class="mb-3 mt-3">Sustainable Market</h5>
                            <p class="mb-4">
                                Fitur terakhir adalah layanan pasar, dimana seluruh aktivitas transaksi yang terjadi
                                nantinya
                                dapat melalui layanan tersebut.
                            </p>
                            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
                                Pelajari lebih lanjut
                                &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #MOBILE-FEATURES ===== */ -->
    <div class="section-mobile">
        <div class="container-fluid mobile-container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6 col-lg-9 mobile-header">
                    <h2>Pendanaan Pertanian Lebih Mudah Bersama <b class="span">E-mutan</b></h2>
                    <p class="caption">
                        Berikut ini adalah fitur layanan yang disediakan oleh emutan, diantaranya dapat dilihat di menu
                        berikut:
                    </p>
                </div>
            </div>
            <div class="row mobile-bottom">
                <div class="col-sm-12 col-md-6 col-lg-4 mobile-left-content">
                    <div class="container mbl-description side-left">
                        <ul class="description-right">
                            <p class="fw-bold">Ini adalah Anda</p>
                            <li>
                                Tidak punya kemampuan bertani <i class="bi bi-x-circle text-danger ms-2"></i>
                            </li>
                            <li>
                                Tidak punya lahan <i class="bi bi-x-circle text-danger ms-2"></i>
                            </li>
                            <li>
                                Punya dana untuk menyalurkan pendanaan <i
                                    class="bi bi-check-circle-fill text-success ms-2"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="img-left side-right">
                        <img src={{ 'assets/img/imgright2.png' }} alt="petani" class="img-fluid">
                        <img src={{ 'assets/img/imgright1.png' }} alt="arrow" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mobile-center-content mt-3">
                    <div class="img-center">
                        <img src="assets/img/mobile-version2.png" alt="gambar mobile" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mobile-right-content mt-2">
                    <div class="container mbl-description">
                        <ul class="description-left">
                            <p class="fw-bold">Ini adalah Petani</p>
                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i> Punya kemampuan bertani
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill text-success me-2"></i> Punya lahan
                            </li>
                            <li>
                                <i class="bi bi-x-circle text-danger me-2"></i> Tidak punya kemampuan bertani
                            </li>
                        </ul>
                    </div>
                    <div class="img-right">
                        <img src={{ 'assets/img/imgleft1.png' }} alt="arrow" class="img-fluid">
                        <img src={{ 'assets/img/imgleft2.png' }} alt="petani" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #TIMELINE ===== */ -->
    <div class="section-timeline">
        <div class="row timeline-row-line">
            <ul class="d-flex justify-content-center timeline-main-line nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="button-tabs" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        role="tab" aria-controls="pills-home">
                        How E-mutan Help Farmer
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="button-tabs" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        role="tab" aria-controls="pills-contact">
                        How E-mutan to Fund a Project
                    </button>
                </li>
            </ul>

            <div class="d-flex justify-content-center tab-content py-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row timeline-step">
                        <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
                            <img src={{ 'assets/img/1.png' }} alt="choose project image">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 description-one mb-3">
                            <p class="heading">Choose Funding Project</p>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur. Ut nibh enim nec aliquam ut ultrices volutpat
                                tortor.
                                Fringilla aliquam odio nulla ultricies.
                            </p>
                        </div>
                        <div class="col" id="clear">
                            <span class="step-numbering step-one">1</span>
                        </div>
                    </div>

                    <div class="row timeline-step">
                        <div class="col-6" id="clear">
                            <span class="step-numbering step-two">2</span>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-2 margin-img margin-img-disbursed">
                            <img src={{ 'assets/img/2.png' }} alt="funding disbursed image">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 description-two mb-3">
                            <p class="heading">Funding Disbursed</p>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur. Ut nibh enim nec aliquam ut ultrices volutpat
                                tortor.
                                Fringilla aliquam odio nulla ultricies.
                            </p>
                        </div>
                    </div>

                    <div class="row timeline-step">
                        <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
                            <img src={{ 'assets/img/3.png' }} alt="monitor progress image">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 description-three mb-3">
                            <p class="heading">Monitor Progress</p>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur. Ut nibh enim nec aliquam ut ultrices volutpat
                                tortor.
                                Fringilla aliquam odio nulla ultricies.
                            </p>
                        </div>
                        <div class="col" id="clear">
                            <span class="step-numbering step-three">3</span>
                        </div>
                    </div>

                    <div class="row timeline-step">
                        <div class="col-sm-12 col-md-6 col-lg-6" id="clear">
                            <span class="step-numbering step-four">4</span>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
                            <img src={{ 'assets/img/4.png' }} alt="margin sharing image">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 description-four">
                            <p class="heading">Margin Sharing</p>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur. Ut nibh enim nec aliquam ut ultrices volutpat
                                tortor.
                                Fringilla aliquam odio nulla ultricies.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
            </div>
        </div>
    </div>

    <!-- /* ===== #JOINING FARMER ===== */ -->
    <div class="join-section">
        <div class="top-image">
            <img src="assets/img/top-img.png" alt="top-image">
        </div>

        <div class="white-box">
            <div class="box-content p-5">
                <div class="row top-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 join-header d-flex justify-content-center">
                        <h2>Mengapa harus bergabung dengan <b class="span">E-mutan</b> ?</h2>
                        <p class="caption">
                            Lorem ipsum dolor sit amet consectetur. Consectetur pharetra lorem vitae mauris eu cursus.
                        </p>
                    </div>
                </div>
                <div class="row row-bottom-bx">
                    <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                        <div class="content-image">
                            <img src={{ 'assets/img/join-left-img.png' }} alt="left-image-box">
                        </div>
                        <div class="content-box">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure cumque voluptate, voluptatum
                                corrupti,
                                officia alias eum obcaecati atque.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                        <div class="content-image">
                            <img src={{ 'assets/img/join-cernter-img.png' }} alt="center-image-box">
                        </div>
                        <div class="content-box">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure cumque voluptate, voluptatum
                                corrupti,
                                officia alias eum obcaecati atque.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                        <div class="content-image">
                            <img src={{ 'assets/img/join-right-img.png' }} alt="right-image-box">
                        </div>
                        <div class="content-box">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure cumque voluptate, voluptatum
                                corrupti,
                                officia alias eum obcaecati a.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-image">
            <img src={{ 'assets/img/bottom-img.png' }} alt="bottom-image">
        </div>
    </div>

    <!-- /* ===== #MOBILEVERSION ===== */ -->
    <div class="mobile-version">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 content-version content-version-left">
                    <div class="description mb-3">
                        <p class="span-heading">Nikmati pendaan pertanian dengan mudah </p>
                        <h2 class="title">Unduh Aplikasi E-mutan Gratis</h2>
                    </div>
                    <div class="content">
                        <p class="description">
                            Untuk memudahkan anda dalam mengakses dan melihat detail dari aplikasinya, silahkan download
                            terlebih dahulu melalui link yang sudah tertera dibawah ini. Dapat di download melalui AppStore
                            (IOS) dan PlayStore (Android).
                        </p>
                    </div>
                    <div class="mobile-buttons">
                        <a href="#" class="playstore text-decoration-none text-white">
                            <div class="app-left">
                                <img src={{ 'assets/img/google-playstore.png' }} alt="playstore" width="20">
                            </div>
                            <div class="app-right">
                                <small>Get it on</small>
                                <span>Play Store</span>
                            </div>
                        </a>

                        <a href="#" class="appstore text-decoration-none text-black">
                            <div class="app-left">
                                <img src={{ 'assets/img/google-appstore.png' }} alt="playstore" width="20">
                            </div>
                            <div class="app-right">
                                <small>Get it on</small>
                                <span>App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 content-version content-version-right">
                    <div class="mobile-image">
                        <img src={{ 'assets/img/mobile-version2.png' }} alt="gambar mobile 1">
                        <img src={{ 'assets/img/mobile-version1.png' }} alt="gambar mobile 2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #STEPREGISTER ===== */ -->
    <div class="regist-steps" id="mulai">
        <div class="container p-5 mt-5">
            <h2 class="fw-bold text-center text-white">How to <b class="text-black">Register</b> ?</h2>
            <span class="regis-line"></span>
            <div class="container-persteps">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
                        <div class="bx-regis mb-2">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <p class="text-center fw-bold">Step 1</p>
                        <div class="step-description text-center">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste?</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
                        <div class="bx-regis mb-2">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <p class="text-center fw-bold">Step 2</p>
                        <div class="step-description text-center">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste?</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
                        <div class="bx-regis mb-2">
                            <i class="bi bi-file-earmark-arrow-up"></i>
                        </div>
                        <p class="text-center fw-bold">Step 3</p>
                        <div class="step-description text-center">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste?</p>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom">
                    <div class="col-sm-12 col-md-6 col-lg-12 btn-regis">
                        <a href="{{ 'daftar' }}" target="_blank" class="regis-link">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #TESTIMONIAL ===== */ -->
    <div class="testimonial-users">
        <!-- Section Header Starts -->
        <header class="section-header-test mt-5">
            <h1 class="text-center">What Clients Say</h1>
        </header>
        <!-- Section Header Ends -->

        <!-- Owl Carousel Slider Starts -->
        <div class="container owl-carousel owl-theme testimonials-container mt-5">
            <!-- Item1 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img1.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
            <!-- Item1 Ends -->

            <!-- Item2 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img2.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
            <!-- Item2 Ends -->

            <!-- Item3 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img3.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
            <!-- Item3 Ends -->

            <!-- Item4 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img4.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
            <!-- Item4 Ends -->

            <!-- Item5 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img5.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
            <!-- Item5 Ends -->

            <!-- Item6 Starts -->
            <div class="item testimonial-card">
                <main class="test-card-body">
                    <p>
                        <i class="bi bi-quote text-success h2"></i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                    </p>
                </main>
                <div class="profile">
                    <div class="profile-image">
                        <img src={{ 'assets/img/testimonials/img6.png' }}>
                    </div>
                    <div class="profile-desc">
                        <span>Person Name</span>
                        <span>Description</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #PERMISSION ===== */ -->
    <div class="permission-section">
        <div class="container">
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
                    <img src={{ 'assets/img/izin-ojk.png' }} class="img-fluid" alt="ojk">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src={{ 'assets/img/izin-fintech.png' }} class="img-fluid" alt="fintech">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src={{ 'assets/img/izin-afpi.png' }} class="img-fluid" alt="afpi">
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="disclamer-section">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-sm-12 col-md-2" id="logo-footer">
                        <img class="img-fluid" src={{ 'assets/img/logo.png' }} alt="logo">
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

        <!-- /* ===== #DISCLAMER ===== */ -->
        <div class="about-info py-5 bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 left-desc mb-5" style="text-align: justify">
                        <p class="pharagraph text-white">PT Emutan Resources Indonesia (“EMUTAN”) selaku Penyelenggara
                            Layanan
                            Pinjam
                            Meminjam
                            Uang Berbasis Teknologi Informasi (peer to peer lending) telah berizin di Otoritas Jasa Keuangan
                            dengan
                            Nomor KEP-75/D.05/2021 pada tanggal 19 Agustus 2021 berdasarkan Peraturan Otoritas Jasa Keuangan
                            Nomor
                            10/POJK.05/2022 tentang Layanan Pendanaan Bersama Berbasis Teknologi Informasi (LPBBTI).
                            PT eMutan Resources Indonesia merupakan badan hukum yang didirikan berdasarkan Hukum Republik
                            Indonesia.
                            Berdiri sebagai perusahaan yang telah diatur oleh dan dalam pengawasan Otoritas Jasa
                            Keuangan(OJK)
                            di
                            Indonesia, Perusahaan menyediakan layanan interfacing sebagai penghubung pihak yang memberikan
                            pinjaman dan
                            pihak yang membutuhkan pinjaman meliputi pendanaan dari individu, organisasi, maupun badan hukum
                            kepada
                            individu atau badan hukum tertentu. Perusahaan tidak menyediakan segala bentuk saran atau
                            rekomendasi
                            pendanaan terkait pilihan - pilihan dalam situs ini.
                            Isi dan materi yang tersedia pada situs eMutan dimaksudkan untuk memberikan informasi dan tidak
                            dianggap
                            sebagai sebuah penawaran, permohonan, undangan, saran, maupun rekomendasi untuk menginvestasikan
                            sekuritas,
                            produk pasar modal, atau jasa keuangan lainnya. Perusahaan dalam memberikan jasanya hanya
                            terbatas
                            pada
                            fungsi administratif.
                            Pendanaan dan pinjaman yang ditempatkan di rekening eMutan adalah tidak dan tidak akan dianggap
                            sebagai
                            simpanan yang diselenggarakan oleh Perusahaan seperti diatur dalam Peraturan Perundang -
                            Undangan
                            tentang
                            Perbankan di Indonesia. Perusahaan atau setiap Direktur, Pegawai, Karyawan, Wakil, Afiliasi,
                            atau
                            Agen -
                            Agennya tidak memiliki tanggung jawab terkait dengan setiap gangguan atau masalah yang terjadi
                            atau
                            yang
                            dianggap terjadi yang disebabkan oleh minimnya persiapan atau publikasi dari materi yang
                            tercantum
                            pada
                            situs Perusahaan.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 text-white right-desc" style="text-align: justify">
                        <p class="pharagraph">DISCLAIMER RISIKO :</p>
                        <li>Layanan Pinjam Meminjam Berbasis Teknologi Informasi merupakan kesepakatan perdata antara
                            Pemberi
                            Pinjaman dengan Penerima Pinjaman, sehingga segala risiko yang timbul dari kesepakatan tersebut
                            ditanggung
                            sepenuhnya oleh masing - masing pihak.</li>
                        <li>Risiko kredit atau gagal bayar ditanggung sepenuhnya oleh Pemberi Pinjaman.Tidak ada lembaga
                            atau
                            otoritas negara yang bertanggung jawab atas risiko gagal bayar ini.</li>
                        <li>Penyelenggara dengan persetujuan dari masing - masing Pengguna (Pemberi Pinjaman dan / atau
                            Penerima
                            Pinjaman) mengakses, memperoleh, menyimpan, mengelola, dan / atau menggunakan data pribadi
                            Pengguna
                            ("Pemanfaatan Data") pada atau di dalam benda, perangkat elektronik(termasuk smartphone atau
                            telepon
                            seluler), perangkat keras(hardware) maupun lunak(software), dokumen elektronik, aplikasi atau
                            sistem
                            elektronik milik Pengguna atau yang dikuasai Pengguna, dengan memberitahukan tujuan, batasan,
                            dan
                            mekanisme Pemanfaatan Data tersebut kepada Pengguna yang bersangkutan sebelum memperoleh
                            persetujuan yang
                            dimaksud.</li>
                        <li>Pemberi Pinjaman yang belum memiliki pengetahuan dan pengalaman pinjam meminjam, disarankan
                            untuk tidak
                            menggunakan layanan ini.</li>
                        <li>Penerima Pinjaman harus mempertimbangkan tingkat bunga pinjaman dan biaya lainnya sesuai dengan
                            kemampuan dalam melunasi pinjaman.</li>
                        <li>Setiap kecurangan tercatat secara digital di dunia maya dan dapat diketahui masyarakat luas di
                            media
                            sosial.</li>
                        <li>Pengguna harus membaca dan memahami informasi ini sebelum membuat keputusan menjadi Pemberi
                            Pinjaman
                            atau Penerima Pinjaman.</li>
                        <li>Pemerintah yaitu dalam hal ini Otoritas Jasa Keuangan, tidak bertanggung jawab atas setiap
                            pelanggaran
                            atau ketidakpatuhan oleh Pengguna, baik Pemberi Pinjaman maupun Penerima Pinjaman(baik karena
                            kesengajaan
                            atau kelalaian Pengguna) terhadap ketentuan peraturan perundang - undangan maupun kesepakatan
                            atau
                            perikatan antara Penyelenggara dengan Pemberi Pinjaman dan / atau Penerima Pinjaman.</li>
                        <li>Setiap transaksi dan kegiatan pinjam meminjam atau pelaksanaan kesepakatan mengenai pinjam
                            meminjam
                            antara atau yang melibatkan Penyelenggara, Pemberi Pinjaman, dan / atau Penerima Pinjaman wajib
                            dilakukan
                            melalui escrow account dan virtual account sebagaimana yang diwajibkan berdasarkan Peraturan
                            Otoritas Jasa
                            Keuangan Nomor 10/POJK.05/2022 tentang Layanan Pendanaan Bersama Berbasis Teknologi Informasi
                            (LPBBTI) dan
                            pelanggaran atau ketidakpatuhan terhadap ketentuan tersebut merupakan bukti telah terjadinya
                            pelanggaran
                            hukum oleh Penyelenggara sehingga Penyelenggara wajib menanggung ganti rugi yang diderita oleh
                            masing -
                            masing Pengguna sebagai akibat langsung dari pelanggaran hukum tersebut di atas tanpa mengurangi
                            hak
                            Pengguna yang menderita kerugian menurut Kitab Undang - Undang Hukum Perdata.</li>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center p-3 foodnote" style="background-color: rgba(0, 0, 0, 0.2)">
            Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
            <img src={{ 'assets/img/izin-ojk.png' }} alt="ojk" class="img-fluid" width="45">
        </div>
    </footer>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src={{ 'assets/js/functions.js' }}></script>
@endsection

@extends('templates.main')

@section('konten')
    <!-- /* ===== #JUMBOTRON-ABOUTUS ===== */ -->
    <div class="container-jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 about-header">
                    {{-- <h1>Tentang Kami</h1>
                    <p>Menciptakan Ekosistem Pendanaan yang Ramah Petani</p> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #COMPANY-PROFILE ===== */ -->
    <div class="about-us">
        <div class="container">
            <div class="row row-logo">
                <a href="#">
                    <img src={{ 'assets/img/logo.png' }} alt="logo emutan" width="59%">
                </a>
                <div class="about-emutan">
                    <p>
                        E-mutan adalah perusahaan yang berfokus untuk mendukung sektor pertanian dengan menyediakan solusi
                        keuangan dan teknologi untuk petani dan usaha pertanian. E-mutan memiliki beberapa fitur seperti
                        platform e-commerce untuk produk pertanian, aplikasi manajemen pertanian, dan penyedia layanan
                        keuangan khusus untuk sektor pertanian. E-mutan berpotensi untuk memberikan kontribusi positif
                        terhadap perkembangan sektor pertanian dan membantu meningkatkan kesejahteraan petani.
                    </p>
                </div>
            </div>

            <div class="row visi-emutan">
                <div class="col-sm-12 col-md-6 col-lg-4 visi-left">
                    <img src={{ 'assets/img/aboutus/mission-image.png' }} alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 visi-right">
                    <img class="img-fluid mb-3" src={{ 'assets/img/aboutus/vission-icon.png' }} alt="vision icon"
                        width="50">
                    <h5>Visi Perusahaan eMutan</h5>
                    <span class="line-emutan"></span>
                    <p>
                        Menjadi lembaga pendanaan pertanian yang terpercaya dan terkemuka dalam memberikan dukungan keuangan
                        kepada petani dan usaha pertanian untuk meningkatkan produktivitas dan kesejahteraan.
                    </p>
                </div>
            </div>

            <div class="row misi-emutan">
                <div class="col-sm-12 col-md-6 col-lg-8 misi-right">
                    <img class="img-fluid mb-3" src={{ 'assets/img/aboutus/mission-icon.png' }} alt="mission icon"
                        width="50">
                    <h5>Misi Perusahaan eMutan</h5>
                    <span class="line-emutan"></span>
                    <ol>
                        <li>Memberikan dukungan keuangan yang terjangkau dan berkelanjutan kepada petani dan usaha pertanian
                            untuk meningkatkan produksi dan kesejahteraan.</li>
                        <li>Mengembangkan produk keuangan yang inovatif dan berorientasi pada kebutuhan petani dan usaha
                            pertanian.</li>
                        <li>Menjalin kemitraan strategis dengan pemerintah, organisasi internasional, dan lembaga keuangan
                            lainnya untuk memperkuat sektor pertanian dan meningkatkan ketahanan pangan.</li>
                    </ol>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 misi-left">
                    <img src={{ 'assets/img/aboutus/image-vission.png' }} alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #BUSINESS-MOBEL ===== */ -->
    <div class="business-model">
        <div class="container">
            <div class="row">
                <div class="col-12 about-header">
                    <h1>Model Bisnis Kami</h1>
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

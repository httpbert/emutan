@extends('templates.main')

@section('konten')
    <!-- /* ===== #CAROUSEL-OBAT-OBATAN ===== */ -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{ '../assets/img/pupuk/img1.png' }} class="d-block w-100" alt="gambar jumbotron pupuk">
            </div>
        </div>
    </div>

    <!-- /* ===== #CONTENT-PUPUK ===== */ -->
    <div class="container">
        <div class="row produk-header-top">
            <div class="col-12 py-5 d-flex">
                <h4 class="text-black row-produk-top">Filter by</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-12">
                <div class="bg-white rounded p-2">
                    <ul class="nav nav-tabs bg-light bg-header-produk justify-content-center" style="border: none;">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#semua" style="border: none;">Semua
                                Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#cabe" style="border: none;">Cabe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#padi" style="border: none;">Padi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kelapasawit" style="border: none;">Kelapa
                                Sawit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kedelai" style="border: none;">Kedelai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#jagung" style="border: none;">Jagung</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content">

                                <div id="semua" class="tab-pane fade in active show">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="cabe" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="padi" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="kelapasawit" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="kedelai" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="jagung" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk.png' }} width="100"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                                                <p class="card-text fw-bold">Rp. 1.000,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk1.png' }} width="106"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/pupuk/pupuk2.png' }} width="112"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Pupuk Zk Petro</h5>
                                                <p class="card-text fw-bold">Rp. 1.120,000</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                                            <div class="card card-body-produk p-2">
                                                <img src={{ '../assets/img/pupuk/alsintan/alsintan1.png' }} width="150"
                                                    style="display: block; margin: auto">
                                                <h5 class="card-title">Petro Hi-Corn</h5>
                                                <p class="card-text fw-bold">Rp. 80.720,999</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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

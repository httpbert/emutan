@extends('templates.headeruser')

@section('user-content')
    <!-- /* ===== #MULTIFORMS ===== */ -->
    <div class="container-regform">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form id="regForm">
                    <h1 id="register"><small>Syarat Pengajuan Pendanaan</small></h1>
                    <p>Sesuai dengan ketentuan & peraturan OJK, kami membutuhkan identitas pribadi anda</p>
                    <div class="tab">
                        <div class="form-group regform-caption mb-3">
                            <label class="d-flex">Komoditas</label>
                            <select class="form-select fs-6" aria-label="Disabled select example">
                                <option selected disabled>Pilih Komoditas</option>
                                <option value="Cabe">Cabe</option>
                                <option value="Kedelai">Kedelai</option>
                                <option value="Jagung">Jagung</option>
                                <option value="Kelapa Sawit">Kelapa Sawit</option>
                                <option value="Padi">Padi</option>
                            </select>
                        </div>
                        <div class="form-group regform-caption mb-3">
                            <label class="d-flex">Lama Periode Pendanaan</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Contoh: 12" max="12"
                                    min="0">
                                <span class="input-group-text">
                                    <small class="fs-6">Bulan</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group regform-caption mb-3">
                            <label>Alamat/Lokasi Lahan Proyek</label>
                            <input type="text" placeholder="Masukkan alamat lahan proyek">
                        </div>
                        <div class="form-group regform-caption mb-3">
                            <label class="d-flex">Luas Lahan Proyek</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Masukkan lama periode">
                                <span class="input-group-text">
                                    <small class="fs-6">Meter</small>
                                </span>
                            </div>
                        </div>
                        <div class="form-group regform-caption mb-3">
                            <label>Upload Dokumen Pendukung</label>
                            <label for="images" class="drop-container mb-4">
                                <span class="drop-title">Drop files here</span>
                                or
                                <input type="file" id="images" accept="image/*">
                            </label>
                        </div>
                    </div>
                    <button type="button" class="btn text-white d-flex justify-content-center w-100"
                        style="background-color: #1a5653;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Selanjutnya
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                    </h1>
                                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ 'assets/img/success.png' }}">
                                    <p>Pengajuan pembiayaan berhasil dilakukan, tunggu konfirmasi admin yaa...</p>
                                </div>
                                <div class="modal-body d-flex justify-content-center">
                                    <a href="{{ 'home' }}" class="btn text-white"
                                        style="background-color: #1a5653; width: 20%; display: block;">
                                        Oke
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
    <script src={{ 'assets/js/multiform.js' }}></script>
@endsection

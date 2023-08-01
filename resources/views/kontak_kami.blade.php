@extends('templates.main')

@section('konten')
    <!-- /* ===== #KONTAK-KAMI ===== */ -->
    <div class="kontak-kami">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 form-img">
                    <img src={{ 'assets/img/hero-jumbotron.png' }} alt="gambar petani" class="img-fluid" width="80%">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-kontak">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label d-flex">
                                Nama Depan
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="firstName">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label d-flex">
                                Nama Belakang
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                        <div class="col-md-6">
                            <label for="company" class="form-label d-flex">
                                Perusahaan
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="company">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label d-flex">
                                Email
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-12">
                            <label for="phoneNumber" class="form-label d-flex">
                                Nomor Telepon
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <div class="input-group-text">+62</div>
                                <input type="number" class="form-control" id="phoneNumber" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="pesan" class="form-label d-flex">
                                Pesan
                                &nbsp;<span class="text-danger">*</span>
                            </label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Tinggalkan pesan anda disini" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Tinggalkan pesan anda disini</label>
                            </div>
                        </div>

                        <p><small><em>
                                    I agree with Agrocorp's Data Protection and Privacy Policy.
                                </em></small></p>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-custom">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- /* ===== #LOCATIONMPAS ===== */ -->
    <div class="dena-emutan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 alamat-perusahaan">
                    <h3>Alamat Perusahaan</h3>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9372301307867!2d106.90770471449507!3d-6.402089264395846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebad20b39b5b%3A0x5810ab42cacbb79!2sCibubur%20Town%20House!5e0!3m2!1sid!2sid!4v1679708721314!5m2!1sid!2sid"
                width="100%" height="600" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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

@extends('templates.headeruser')

@section('user-content')
    <section>
        <!-- /* ===== #HEADER ===== */ -->
        <div class="container-users">
            <div class="container-fluid rounded main-user-content">
                <div class="row my-4">
                    <div class="col-xs col-sm-12 col-md-6 col-lg-8 left-users-dashboard mb-3">
                        <div class="top-section">
                            <h1 class="heading-users-dashboard fw-bold">
                                Dapatkan Pendanaan Pertanian <br> Hingga Rp 100.000.000
                            </h1>
                        </div>
                        <div class="bottom-section">

                            <button type="button"
                                style="background-color: #1a5653; border: none; padding: 1rem 3rem; border-radius: 25px"
                                class="btn text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Dapatkan
                                Sekarang
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Syarat Pendanaan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src={{ 'assets/img/File.png' }} class="mb-3">
                                            <h4>Lengkapi Profile!</h4>
                                            <p>Lengkapi identitas anda terlebih dahulu!</p>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="{{ 'pendanaan' }}" style="border-radius: 6px;"
                                                class="btn text-white text-decoration-none"
                                                style="background-color: #1a5653;">
                                                Lengkapi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 right-section">
                        <img src={{ 'assets/img/gambar-jumbotron-users.png' }} alt="gambar jumbotron" class="img-fluid"
                            width="60%">
                    </div>
                </div>
            </div>
        </div>

        <!-- /* ===== #INFO-MAINUSER-DASHBOARD ===== */ -->
        <div class="warning">
            <div class="container">
                <i class="bi bi-info-circle d-flex"></i>
                <span>
                    Lengkapi Persyaratan Profil anda, agar dapat mengajukan pendanaan sesuai komoditas yang dipilih.
                </span>
            </div>
        </div>

        <!-- /* ===== #CAROUSEL-MAINUSER-DASHBOARD ===== */ -->
        <div class="container-fluid carousel-users" id="getstarted">
            <h2 class="text-center header-carousel-users">Ajukan Pendanaan Anda</h2>
            <span class="line"></span>
            <div class="row">
                <p class="">Komoditas</p>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                            <div class="card">
                                <img src={{ 'assets/img/carousel/img1.png' }} class="card-img-top" alt="komoditas jagung">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Jagung</p>
                                    <hr>
                                    <p class="card-title">Total Pendanaan Mencapai</p>
                                    <p class="card-title">Rp. 20,000,000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                            <div class="card">
                                <img src={{ 'assets/img/carousel/img2.png' }} class="card-img-top" alt="komoditas kedelai">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Kedelai</p>
                                    <hr>
                                    <p class="card-title">Total Pendanaan Mencapai</p>
                                    <p class="card-title">Rp. 20,000,000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                            <div class="card">
                                <img src={{ 'assets/img/carousel/img3.png' }} class="card-img-top"
                                    alt="komoditas kelapa-sawit">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Sawit</p>
                                    <hr>
                                    <p class="card-title">Total Pendanaan Mencapai</p>
                                    <p class="card-title">Rp. 20,000,000</p>
                                </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                        <div class="card">
                            <img src={{ 'assets/img/carousel/img4.png' }} class="card-img-top" alt="komoditas padi">
                            <div class="card-body">
                                <p class="card-title">Komoditas Padi</p>
                                <hr>
                                <p class="card-title">Total Pendanaan Mencapai</p>
                                <p class="card-title">Rp. 20,000,000</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                        <div class="card">
                            <img src={{ 'assets/img/carousel/img5.png' }} class="card-img-top" alt="komoditas cabe">
                            <div class="card-body">
                                <p class="card-title">Komoditas Cabe</p>
                                <hr>
                                <p class="card-title">Total Pendanaan Mencapai</p>
                                <p class="card-title">Rp. 20,000,000</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href={{ route('keranjang') }} target="_blank" class="text-decoration-none text-black">
                        <div class="card">
                            <img src={{ 'assets/img/carousel/img1.png' }} class="card-img-top" alt="komoditas jagung">
                            <div class="card-body">
                                <p class="card-title">Komoditas Jagung</p>
                                <hr>
                                <p class="card-title">Total Pendanaan Mencapai</p>
                                <p class="card-title">Rp. 20,000,000</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- /* ===== #CAROUSEL-MAINUSER-DASHBOARD ===== */ -->
        <div class="keunggulan-cards-users">
            <div class="container">
                <h3 class="text-center">Keunggulan Ajukan Pendanaan di E-mutan</h3>
                <span class="line"></span>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src={{ 'assets/img/user-img/img1.png' }} class="card-img-top d-block m-auto"
                                alt="Keunggulan1">
                            <div class="card-body">
                                <h5 class="card-title">Terpercaya</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src={{ 'assets/img/user-img/img2.png' }} class="card-img-top d-block m-auto"
                                alt="Keunggulan2">
                            <div class="card-body">
                                <h5 class="card-title">Cepat</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src={{ 'assets/img/user-img/img3.png' }} class="card-img-top d-block m-auto"
                                alt="Keunggulan3">
                            <div class="card-body">
                                <h5 class="card-title">Mudah</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img src={{ 'assets/img/user-img/img4.png' }} class="card-img-top d-block m-auto"
                                alt="Keunggulan1">
                            <div class="card-body">
                                <h5 class="card-title">Menguntungkan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's
                                    content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #FOOTER ===== */ -->
    <footer>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src={{ 'assets/js/bootstrap-show-toast.js' }}></script>
    <script src={{ 'assets/js/app.js' }}></script>
@endsection

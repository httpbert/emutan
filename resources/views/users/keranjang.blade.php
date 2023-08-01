@extends('templates.headeruser')

@section('user-content')
    <!-- /* ===== #PRODUKCARD ===== */ -->
    <section class="container sproduct">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 bg-produk-left container">
                <img class="img-fluid w-100 pb-1 rounded" src={{ 'assets/img/carousel/cabe.png' }}>

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src={{ 'assets/img/carousel/img1.png' }} class="small-img rounded" alt="gambar thumbnail kecil"
                            width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src={{ 'assets/img/carousel/img2.png' }} class="small-img rounded" alt="gambar thumbnail kecil"
                            width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src={{ 'assets/img/carousel/img3.png' }} class="small-img rounded" alt="gambar thumbnail kecil"
                            width="100%">
                    </div>
                    <div class="small-img-col">
                        <img src={{ 'assets/img/carousel/img4.png' }} class="small-img rounded" alt="gambar thumbnail kecil"
                            width="100%">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 bg-produk-right">
                <div class="card">
                    <div class="card-body">
                        <div class="title-product">
                            <h5 class="text-center">Komoditas Jagung</h5>
                            <span></span>
                        </div>
                        <div class="details">
                            <p class="caption-details">Jumlah petani yang menerima pendanaan</p>
                            <p class="bold-details">50.000 Petani</p>
                            <p class="caption-details">Jumlah petani yang menerima pendanaan
                                komoditas Jagung</p>
                            <p class="bold-details">12.000 Petani</p>
                        </div>
                        <hr>
                        <div class="details">
                            <p class="caption-details">Jumlah maksimal pendanaan yang diterima</p>
                            <p class="bold-details">15.000 Petani</p>
                            <p class="caption-details">Jumlah minimal pendanaan yang diterima</p>
                            <p class="bold-details">10.000.000 Petani</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /* ===== #PRODUCT-IMAGES ===== */ -->
    <div class="container sproduct mb-5">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12">
                <div class="card-produkleft">
                    <div class="card-body">
                        <i class="bi bi-list text-black"></i> Semua
                    </div>
                    <hr>
                    <ul class="m-0 p-0">
                        <li><a href="#">Pupuk</a></li>
                        <li><a href="#">Bibit</a></li>
                        <li><a href="#">Obat-Obatan</a></li>
                        <li><a href="#">Alsintan</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-10 col-md-12 col-12">
                <div class="card-body-product ms-auto m-1 p-1 rounded">
                    <ul class="ms-auto d-flex">
                        <a href="#" class="text-black text-decoration-none ms-4">Populer</a>
                        <a href="#" class="text-black text-decoration-none ms-4">Terbaru</a>
                        <a class="text-black text-decoration-none ms-4">Harga
                            <select class="border-0">
                                <option value=""></option>
                                <option value="">100.000</option>
                                <option value="">200.000</option>
                                <option value="">300.000</option>
                            </select>
                        </a>
                    </ul>
                </div>
                <div class="card-produkright">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                <div class="card p-3">
                                    <div class="img-products-cards">
                                        <img src={{ 'assets/img/produk/produk.png' }} alt=""
                                            class="img-fluid small-img w-100" width="">
                                    </div>
                                    <div class="details-produk mb-3">
                                        <p>Nama Produk</p>
                                        <p>Rp, 200.000</p>

                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star text-warning"></i>
                                    </div>
                                    <div class="details-produk-buttons">
                                        <a href="#" class="btn btn-sm rounded btn-lihat">Lihat</a>
                                        <button type="button" class="btn text-black btn-sm rounded btn-cart"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Add to Cart
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-6" id="staticBackdropLabel">Successfull
                                                        </h1>
                                                        <button type="button" class="btn-close btn-sm"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="bi bi-check-circle fs-1 text-success"></i>
                                                        <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <a href="{{ 'pesanan' }}" class="btn btn-primary btn-oke">
                                                            OKE
                                                        </a>
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
        </div>
    </div>

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
    <script src="assets/js/bootstrap-show-toast.js"></script>
    <script src="assets/js/app.js"></script>
@endsection

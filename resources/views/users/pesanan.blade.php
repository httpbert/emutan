@extends('templates.headeruser')

@section('user-content')
    <!-- /* ===== #PRODUKCARD ===== */ -->
    <section class="container sproduct sproduct-card">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 bg-produk-left container">
                <h5>Keranjang</h5>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-center">
                            <img src={{ 'assets/img/produk/img1.png' }} alt="gambar pesanan" width="90"
                                class="img-fluid small-img mb-2">
                            <p>Tulis Pesanan</p>
                        </div>
                        <div class="col-6">
                            <div class="group-details-pesanan">
                                <p>Pupuk Jagung</p>
                                <p>Rp. 520.000</p>
                            </div>
                            <a onclick="alert('Berhasil di hapus')" href="#" class="text-decoration-none text-black">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <div class="button-pesanan">
                                <a href="">-</a>
                                <a href="">1</a>
                                <a href="">+</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 text-center">
                            <img src={{ 'assets/img/produk/img2.png' }} alt="gambar pesanan" width="90"
                                class="img-fluid small-img mb-2">
                            <p>Tulis Pesanan</p>
                        </div>
                        <div class="col-6">
                            <div class="group-details-pesanan">
                                <p>Pupuk Kedelai</p>
                                <p>Rp. 100.000</p>
                            </div>
                            <a onclick="alert('Berhasil di hapus')" href="#" class="text-decoration-none text-black">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <div class="button-pesanan">
                                <a href="">-</a>
                                <a href="">1</a>
                                <a href="">+</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-3 text-center">
                            <img src={{ 'assets/img/produk/img3.png' }} alt="gambar pesanan" width="90"
                                class="img-fluid small-img mb-2">
                            <p>Tulis Pesanan</p>
                        </div>
                        <div class="col-6">
                            <div class="group-details-pesanan">
                                <p>Pupuk Kelapa Sawit</p>
                                <p>Rp. 500.000</p>
                            </div>
                            <a onclick="alert('Berhasil di hapus')" href="#" class="text-decoration-none text-black">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <div class="button-pesanan">
                                <a href="">-</a>
                                <a href="">1</a>
                                <a href="">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 bg-produk-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center align-content-center mt-2">
                            <p>Saldo</p>
                            <p>Rp. 20.000.000</p>
                        </div>
                        <hr>
                        <div class="record-total-belanja">
                            <div class="d-flex justify-content-between">
                                <p>Pupuk Jagung</p>
                                <p>Rp. 520.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Pupuk Kedelai</p>
                                <p>Rp. 100.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Pupuk Kelapa Sawit</p>
                                <p>Rp. 500.000</p>
                            </div>
                        </div>
                        <hr>
                        <div class="details-belanja">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="text-black fw-bold">Total Belanja</p>
                                <p class="text-black fw-bold">Rp. 1.620.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ 'checkout_produk' }}" class="tombol-checkout">Checkout</a>
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
@endsection

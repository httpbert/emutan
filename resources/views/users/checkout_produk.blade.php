@extends('templates.headeruser')

@section('user-content')
    <!-- /* ===== #PRODUKCARD ===== */ -->
    <section class="container sproduct sproduct-card">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 bg-produk-left container">
                <h5 class="mb-3">Checkout</h5>
                <p class="fw-bold">Alamat Pengiriman</p>
                <hr>
                <div class="data-pemesan">
                    <p class="m-0 fw-bold">Oyon Ternando</p>
                    <p class="m-0 fw-bold">628575446762</p>
                    <p class="alamat-pemesan">
                        (Cibubur Palm Resort, Jl. Leuwinanggung, Tapos, Kota Depok, Jawa Barat) <br>Tapos, Kota Depok, 16456
                    </p>
                </div>
                <hr>
                <a href="" class="updated-data-pemesan rounded-2">Ubah</a>
                <hr>
                <div class="row">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-bold">Produk di Pesanan</th>
                                <th></th>
                                <th scope="col" class="fw-normal">Harga Satuan</th>
                                <th scope="col" class="fw-normal">Jumlah</th>
                                <th scope="col" class="fw-normal">Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-flex">
                                    <img src={{ 'assets/img/produk/img1.png' }} alt="gambar pesanan" width="50"
                                        class="img-fluid small-img mb-2 rounded-1 me-2">
                                    <p>Bibit Jagung</p>
                                </td>
                                <td colspan="2">Rp. 20.000</td>
                                <td>4</td>
                                <td>Rp. 800.000</td>
                            </tr>
                            <tr style="background-color: #f4f4f4;" class="pengiriman-pesanan">
                                <td class="d-flex justify-content-start align-items-start">
                                    <input type="checkbox" class="m-3">
                                    <p class="fw-bold">
                                        Asuransi Barang <br>
                                        <small class="fw-normal">Melindungi produkmu dari kerusakan/kerugian</small>
                                    </p>
                                </td>
                                <td colspan="2">Rp. 10.000</td>
                                <td>1</td>
                                <td>Rp. 2.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <p class="fw-bold">Pengiriman</p>
                <div class="jasa-pengiriman d-flex justify-content-between">
                    <div>
                        <select class="form-select pilih-ekspedisi">
                            <option disabled>Pilih Ekspedisi</option>
                            <option selected disabled>Reguler</option>
                            <option value="JNE">JNE</option>
                            <option value="Express">Express</option>
                        </select>
                    </div>
                    <p>Rp. 20.000</p>
                </div>
                <hr>
                <div class="subtotal-produk d-flex justify-content-between">
                    <p class="fw-bold">Subtotal</p>
                    <p>Rp. 820.000</p>
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
                        <div class="record-total-belanja mb-3">
                            <p class="fw-bold mb-3">Ringkasan Belanja</p>
                            <div class="d-flex justify-content-between">
                                <p>Total Harga (4 Produk)</p>
                                <p>Rp. 800.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Total Ongkir</p>
                                <p>Rp. 20.000</p>
                            </div>
                        </div>
                        <hr>
                        <div class="details-belanja">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="text-black fw-bold">Total Tagihan</p>
                                <p class="text-black fw-bold">Rp. 820.000</p>
                            </div>
                            <div class="d-flex justify-content-between">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary d-flex w-100 justify-content-center"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Pilih Pembayaran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="staticBackdropLabel">Pembayaran</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mb-4">Metode Pembayaran</h5>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        <img src="{{ 'assets/img/bca.png' }}" alt="bca va" width="35">
                                                        BCA Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2" checked>
                                                </div>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ 'assets/img/bni.png' }}" alt="bni va" width="35">
                                                        BNI Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                </div>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ 'assets/img/bri.png' }}" alt="bri va"
                                                            width="35"> BRI Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body">
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ 'assets/img/dompet-mutan.png' }}" alt="dompet mutan"
                                                            width="30">
                                                        Dompet Mutan
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body">
                                                <h5 class="mb-3">Ringkasan Pembayaran</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="fs-6">Total Belanja</span>
                                                    <span class="fs-6">Rp 820,000</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="fs-6">Biaya Layanan <i
                                                            class="ri-information-fill"></i></span>
                                                    <span class="fs-6">Rp 1,000</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body d-flex justify-content-between">
                                                <span class="fs-6 fw-bold">Total Tagihan</span>
                                                <span class="fs-6">Rp 821,000</span>
                                            </div>
                                            <div class="modal-body mt-4">
                                                <a href="{{ 'metode_pembayaran' }}" class="btn btn-primary float-end">
                                                    <i class="ri-secure-payment-fill"> Bayar Sekarang</i>
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

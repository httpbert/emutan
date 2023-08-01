@extends('templates.dashboard_user')

@section('dashboard-side')
    <div class="group-dashboard-right">
        <!-- <div class="row"> -->
        <div class="col-sm-12 col-md-6 col-lg-12">
            <div class="bg-white p-2">
                <ul class="nav nav-tabs justify-content-center d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#saldodana">
                            <i class="bi bi-credit-card-fill"></i>
                            Dana Saya
                        </a>
                    </li>
                    <li class="nav-item me-auto">
                        <a class="nav-link" data-bs-toggle="tab" href="#riwayat">
                            <i class="bi bi-file-earmark-check-fill"></i>
                            Riwayat Transaksi
                        </a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">

                            <div id="saldodana" class="tab-pane fade in active show">
                                <div class="card saldo-grouping d-flex justify-content-between">
                                    <div class="saldo-grouping-pendanaan">
                                        <div class="saldo-pengembalian">
                                            <p class="fw-bold">Saldo pengembalian</p>
                                            <p>Rp. <b class="nilai-rupiah">0</b></p>
                                        </div>
                                        <div class="saldo-pendanaan">
                                            <p class="fw-bold">Saldo pendanaan</p>
                                            <p>Rp. <b class="nilai-rupiah">0</b></p>
                                        </div>
                                        <div class="topup-saldo d-flex justify-content-center align-items-center">
                                            <button type="button" class="bg-white p-2 border-0 rounded">
                                                <i class="bi bi-calendar-plus"></i> Top up
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="saldo-grouping-laporan mt-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                                                <div class="saldo-pengembalian-terdekat">
                                                    <p class="fw-bold m-1">Pengembalian terdekat</p>
                                                    <div
                                                        class="total-tagihan p-2 bg-light d-flex justify-content-between rounded-1">
                                                        <p class="float-start">Total tagihan</p>
                                                        <p class="float-end">Rp. <b>1.000.000</b></p>
                                                    </div>

                                                    <div class="people-dashboard d-flex justify-content-center mt-3 mb-3">
                                                        <img class="img-fluid small-img" src="assets/img/icons/img1.png">
                                                    </div>
                                                    <center>
                                                        <small><b>Belum ada jadwal tagihan pengembalian</b></small><br>
                                                        <small style="font-size: 12px; color: grey">Anda belum memiliki
                                                            pengembalian dana</small>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6 laporan-pendanaan">
                                                <p class="fw-bold m-1">Laporan</p>
                                                <div class="card p-1 bg-light d-flex justify-content-between">

                                                    <div
                                                        class="people-dashboard d-flex justify-content-center mt-3 mb-3 flex-column">
                                                        <img class="img-fluid small-img mb-3 d-block m-auto"
                                                            src="assets/img/icons/img2.png" width="200">
                                                        <center>

                                                            <small><b>Belum ada laporan yang harus dibuat</b></small> <br>
                                                            <small style="font-size: 12px; color: grey">Anda dapat Buat
                                                                Laporan untuk proyek pendanaan
                                                                Anda disini.</small>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="riwayat" class="tab-pane fade">
                                <div class="card-riwayat">
                                    <div class="content-riwayat">
                                        <img src={{ 'assets/img/icons/img4.png' }}
                                            class="img-fluid small-img d-block m-auto">
                                        <center>
                                            <p>Belom ada Riwayat Transaksi</p>
                                            <p style="font-size: 13px; color: grey;">Anda belom memiliki riwayat transaksi
                                            </p>
                                        </center>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
@endsection

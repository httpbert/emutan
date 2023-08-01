@extends('templates.dashboard_user')

@section('dashboard-side')
    <div class="group-dashboard-right">
        <!-- <div class="row"> -->
        <div class="col-sm-12 col-md-6 col-lg-12">
            <div class="bg-white p-2">
                <ul class="nav nav-tabs justify-content-center d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#saldodana">
                            Pendanaan Aktif <small class="rounded"
                                style="background-color: #1A5653; color: white; padding: 0 1em;">1 Proyek</small>
                        </a>
                    </li>
                    <li class="nav-item me-auto">
                        <a class="nav-link" data-bs-toggle="tab" href="#riwayat">
                            Pendanaan Selesai <small class="rounded"
                                style="background-color: #1A5653; color: white; padding: 0 1em;">0 Proyek</small>
                        </a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" data-bs-toggle="tab" href="#"
                            style="background-color: #1A5653; color: white; padding: 0 1em;">
                            + Ajukan pendanaan baru
                        </a>
                        <!-- <button class="rounded button-baru" style="background-color: #1A5653; color: white; padding: 0 1em; border: none;">+ Ajukan pendanaan baru</button> -->
                    </li>
                </ul>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">

                            <div id="saldodana" class="tab-pane fade in active show">
                                <div class="card mt-3">
                                    <div class="row m-2">
                                        <div class="group-top d-flex align-items-center">
                                            <img src={{ 'assets/img/produk/img1.png' }} class="img-fluid small-img rounded"
                                                width="100">
                                            <h5 class="ms-2 fw-bold">Komoditas Jagung</h5>
                                        </div>
                                    </div>
                                    <div class="row m-2">
                                        <div class="grouping-margin d-flex">
                                            <div class="group-btn-left">
                                                <p class="m-0">Nominal pengajuan</p>
                                                <p>Rp. 20.000.000</p>
                                            </div>
                                            <div class="span"></div>
                                            <div class="group-btn-right ms-3">
                                                <p class="m-0">Periode Margin</p>
                                                <p>5 Bulan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="riwayat" class="tab-pane fade">
                                <div class="card-riwayat">
                                    <div class="content-riwayat">
                                        <img src={{ 'assets/img/icons/img2.png' }}
                                            class="img-fluid small-img d-block m-auto">
                                        <center>
                                            <p>Belom ada pendanaan selesai</p>
                                            <p style="font-size: 13px; color: grey;">Anda belum memiliki riwayat pendanaan
                                                Selesai</p>
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

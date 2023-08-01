@extends('templates.dashboard_user')

@section('dashboard-side')
    <div class="group-dashboard-right">
        <!-- <div class="row"> -->
        <div class="col-sm-12 col-md-6 col-lg-12">
            <div class="bg-white p-2">
                <ul class="nav nav-tabs justify-content-center d-flex">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#saldodana">
                            Masukkan Data
                        </a>
                    </li>
                    <li class="nav-item me-auto">
                        <a class="nav-link" data-bs-toggle="tab" href="#riwayat">
                            Cek Hasil
                        </a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">

                            <div id="saldodana" class="tab-pane fade in active show">
                                <div class="skoring-user m-5">
                                    <div class="container">

                                        <h5 class="text-center">Masukkan Identitas</h5>
                                        <span class="line"></span>

                                        <form class="row g-3">
                                            <div class="col-md-12">
                                                <label for="inputNik" class="form-label d-flex">NIK <span
                                                        class="text-danger"> &nbsp;*</span></label>
                                                <input type="number" class="form-control" id="inputNik"
                                                    placeholder="Masukkan NIK">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputNama" class="form-label d-flex">Nama Lengkap <span
                                                        class="text-danger"> &nbsp;*</span></label>
                                                <input type="text" class="form-control" id="inputNama"
                                                    placeholder="Masukkan nama">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress2" class="form-label d-flex">Jenis Kelamin <span
                                                        class="text-danger"> &nbsp;*</span></label>
                                                <select id="inputState" class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option>Pria</option>
                                                    <option>Wanita</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputTanggal" class="form-label">Tanggal</label>
                                                <input type="number" class="form-control" id="inputTanggal"
                                                    placeholder="DD">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputBulan" class="form-label">Bulan</label>
                                                <input type="number" class="form-control" id="inputBulan" placeholder="MM">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="inputTahun" class="form-label">Tahun</label>
                                                <input type="number" class="form-control" id="inputTahun"
                                                    placeholder="YYYY">
                                            </div>
                                            <div class="col-12">
                                                <a onclick="alert('Berhasil disubmit')" href="#"
                                                    class="float-end cek_skor btn btn-primary">Cek Skor</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="riwayat" class="tab-pane fade">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
@endsection

  <!doctype html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ $title }}</title>
      <link rel="shortcut icon" href={{ 'assets/img/logo-emutan.png' }} type="image/x-icon">
      <!-- bootstrap & bootstrap icon -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
          rel="stylesheet">
      <link rel="stylesheet" href={{ 'assets/css/style.css' }}>
  </head>

  <body>


      <!-- /* ===== #NAVBAR ===== */ -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid"
              style="margin: 0px 1em; @media only screen and (max-width: 767px) { margin: 0px 0px !important; }">
              <a class="navbar-brand" href={{ '/home' }}>
                  <img src={{ 'assets/img/logo.png' }} alt="logo" width="120">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item dropdown login">
                          <button type="button" id="button-show-info" onclick="myNotif()" class="border-0 bg-light">
                              <a class="nav-link text-black" id="button-show-info" onclick="myNotif()">
                                  <i class="bi bi-bell-slash-fill"></i>
                              </a>
                          </button>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link text-black" href="#">
                              <i class="bi bi-cart-check-fill"></i>
                          </a>
                      </li>
                      <li class="nav-item dropdown">
                          <div class="line-space"></div>
                      </li>
                      <!-- Default dropstart button -->
                      <div class="btn-group dropstart">
                          <button type="button" class="bg-light border-0" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <img src={{ 'assets/img/user-img/profile.png' }} alt="" width="25">
                          </button>
                          <ul class="dropdown-menu">
                              <div class="card-top ms-3">
                                  <li>
                                      <a class="text-dark text-decoration-none fw-bold"
                                          style="font-size: 13.5px !important;">Saldo
                                          Pendanaan</a>
                                  </li>
                                  <li>
                                      <a class="text-dark text-decoration-none fw-bold"
                                          style="font-size: 13.5px !important;">Rp.
                                          100,000,000</a>
                                  </li>
                              </div>
                              <hr>
                              <li>
                                  <a class="dropdown-item" href={{ '/home' }} style="font-size: 13px !important;">
                                      <i class="bi bi-house-fill ms-1"></i> &nbsp;
                                      Dashboard
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href={{ '/dasboard' }} style="font-size: 13px !important;">
                                      <i class="bi bi-person-lines-fill ms-1"></i> &nbsp;
                                      Account
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href={{ '/keranjang' }} style="font-size: 13px !important;">
                                      <i class="bi bi-cart-check ms-1"></i> &nbsp;
                                      Keranjang
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#" style="font-size: 13px !important;">
                                      <i class="bi bi-gear-wide-connected ms-1"></i> &nbsp;
                                      Pengaturan
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href={{ '/home' }} style="font-size: 13px !important;">
                                      <i class="bi bi-x-circle text-danger ms-1"></i> &nbsp;
                                      Keluar
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </ul>
              </div>
          </div>
      </nav>

      <!-- /* ===== #DAHBOARDMAIN ===== */ -->
      <section class="container-fluid sproduct sproduct-card">
          <div class="row">
              <div class="col-lg-4 col-md-12 col-12 bg-produk-left container">
                  <div class="card-dasrhobard-left">
                      <div class="group-dashboard">
                          <div class="user-profiles">
                              <div class="personal-image">
                                  <img class="img-fluid small-img" src={{ 'assets/img/user-img/profile.png' }}
                                      alt="" width="60">
                              </div>
                              <div class="username">
                                  <h5>Michael</h5>
                                  <div class="verify-icons bg-primary rounded-5">
                                      <i class="bi bi-shield-fill-check text-white"></i>
                                      <small class="text-white">Verifikasi email</small>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <ul>
                              <li class="mb-3">
                                  <a href={{ 'dashboard' }} class="text-black text-decoration-none">
                                      <i class="bi bi-house-fill"></i>
                                      Dashboard
                                  </a>
                              </li>
                              <li class="mb-3">
                                  <a href={{ 'proyek' }} class="text-black text-decoration-none">
                                      <i class="bi bi-clock-fill"></i>
                                      Proyek Pendanaan
                                  </a>
                              </li>
                              <li class="mb-3">
                                  <a href={{ 'skoring_user' }} class="text-black text-decoration-none">
                                      <i class="bi bi-clipboard-data-fill"></i>
                                      Skoring
                                  </a>
                              </li>
                              <li class="mb-3">
                                  <a href={{ 'dokumen' }} class="text-black text-decoration-none">
                                      <i class="bi bi-file-earmark-word-fill"></i>
                                      Dokumen
                                  </a>
                              </li>
                              <li class="mb-3">
                                  <a href={{ 'my_profile' }} class="text-black text-decoration-none">
                                      <i class="bi bi-filetype-doc"></i>
                                      Profile
                                  </a>
                              </li>
                          </ul>

                          <div class="card-info m-1 text-center">
                              <img class="img-fluid small-img" src={{ 'assets/img/icons/img3.png' }}>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-8 col-md-12 col-12 personal-data">
                  <div class="col-12">
                      <div class="row">
                          <div class="col-4 left-menu">
                              <ul>
                                  <li class="mb-2">
                                      <a href={{ 'my_profile' }} class="text-black text-decoration-none">
                                          <i class="bi bi-person"></i>
                                          Akun Saya
                                      </a>
                                  </li>
                                  <li class="mb-2">
                                      <a href={{ 'data_petani' }} class="text-black text-decoration-none">
                                          <i class="bi bi-person-vcard"></i>
                                          Data Pribadi
                                      </a>
                                  </li>
                                  <li class="mb-2">
                                      <a href={{ 'ubah_password' }} class="text-black text-decoration-none">
                                          <i class="bi bi-file-earmark-lock2"></i>
                                          Ubah Kata Sandi
                                      </a>
                                  </li>
                                  <li class="mb-2">
                                      <a href="#" class="text-black text-decoration-none">
                                          <i class="bi bi-file-earmark-medical"></i>
                                          Syarat & Ketentuan
                                      </a>
                                  </li>
                                  <li class="mb-2">
                                      <a href={{ '/blogs' }} target="_blank"
                                          class="text-black text-decoration-none">
                                          <i class="bi bi-info-circle"></i>
                                          Tentang Kami
                                      </a>
                                  </li>
                                  <li class="mb-2">
                                      <a href="#" class="text-black text-decoration-none">
                                          <i class="bi bi-file-earmark-ruled"></i>
                                          Sosialisasi
                                      </a>
                                  </li>
                              </ul>
                          </div>
                          <!-- <div class="group-dashboard-right"> -->
                          <!-- <div class="row"> -->
                          <div class="col-8">
                              <div class="bg-white p-2" id="akunsaya">
                                  <ul class="nav nav-tabs justify-content-center d-flex">
                                      <li class="nav-item">
                                          <a class="nav-link active" data-bs-toggle="tab" href="#saldodana">
                                              Data Personal
                                          </a>
                                      </li>
                                      <li class="nav-item me-auto">
                                          <a class="nav-link" data-bs-toggle="tab" href="#riwayat">
                                              Alamat
                                          </a>
                                      </li>
                                  </ul>

                                  <div class="row">
                                      <div class="col-12">
                                          <div class="tab-content">

                                              <div id="saldodana" class="tab-pane fade in active show">
                                                  <div class="card mt-3">
                                                      <div class="row m-2">
                                                          <h5 class="text-center mt-3 mb-3">Lengkapi Identitas Anda
                                                          </h5>
                                                          <p class="text-center">Sesuai dengan ketentuan & peraturan
                                                              OJK, Kami membutuhkan identitas pribadi Anda</p>
                                                          <form class="row g-3">
                                                              <div class="form-group regform-caption mb-3">
                                                                  <label>Nama Bank</label>
                                                                  <div class="select-bank">
                                                                      <select class="fs-6">
                                                                          <option value="BCA (Bank Central Asia)">BCA
                                                                              (Bank Central Asia)</option>
                                                                          <option value="BNI (Bank Negara Indonesia)">
                                                                              BNI (Bank Negara Indonesia)</option>
                                                                          <option value="BRI (Bank Rakyat Indonesia)">
                                                                              BRI (Bank Rakyat Indonesia)</option>
                                                                          <option value="Bank Kalbar">Bank Kalbar
                                                                          </option>
                                                                          <option value="Bank Mandiri">Bank Mandiri
                                                                          </option>
                                                                          <option value="Bank Nagari">Bank Nagari
                                                                          </option>
                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <div class="form-group regform-caption mb-3">
                                                                  <label class="d-flex">Nomor Rekening
                                                                      <span class="text-danger"> &nbsp; *</span>
                                                                  </label>
                                                                  <div class="input-group mb-3">
                                                                      <input type="text" class="form-control"
                                                                          placeholder="Masukkan nomor rekening anda">
                                                                      <span class="input-group-text">
                                                                          <small class="fs-6">Periksa nomor</small>
                                                                      </span>
                                                                  </div>
                                                              </div>

                                                              <button type="button"
                                                                  class="btn text-white d-flex justify-content-center w-100"
                                                                  data-bs-toggle="modal"
                                                                  style="background-color: #1a5653;"
                                                                  data-bs-target="#staticBackdrop">
                                                                  Masukkan
                                                              </button>

                                                              <!-- Modal -->
                                                              <div class="modal fade" id="staticBackdrop"
                                                                  data-bs-backdrop="static" data-bs-keyboard="false"
                                                                  tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                  aria-hidden="true">
                                                                  <div class="modal-dialog modal-dialog-centered">
                                                                      <div class="modal-content">
                                                                          <div class="modal-header">
                                                                              <h1 class="modal-title fs-6"
                                                                                  id="staticBackdropLabel">Successfull
                                                                              </h1>
                                                                              <button type="button"
                                                                                  class="btn-close btn-sm"
                                                                                  data-bs-dismiss="modal"
                                                                                  aria-label="Close"></button>
                                                                          </div>
                                                                          <div class="modal-body text-center">
                                                                              <img src="{{ 'assets/img/File-sukses.png' }}"
                                                                                  alt="">
                                                                              <h4 class="mt-3">Berhasil!</h4>
                                                                              <p>Klik selanjutnya untuk melakukan
                                                                                  pengajuan pembiayaan.</p>
                                                                          </div>
                                                                          <div class="modal-body text-center">
                                                                              <a href="{{ 'my_profile' }}"
                                                                                  class="btn btn-danger">
                                                                                  Tutup
                                                                              </a>
                                                                              <a href="{{ 'data_user' }}"
                                                                                  class="btn btn-success"
                                                                                  style="background-color: #1a5653;">
                                                                                  Selanjutnya
                                                                              </a>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div id="riwayat" class="tab-pane fade">
                                                  <div class="card alamat-user d-flex justify-content-between mt-3">
                                                      <div class="group-alamat m-3 d-flex justify-content-between">
                                                          <label>Alamat saya</label>
                                                          <a href="{{ 'tambah_alamat' }}"
                                                              class="float-end alamat-baru rounded text-decoration-none">+
                                                              Alamat Baru</a>
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
      </section>

      <!-- script -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
      </script>
  </body>

  </html>

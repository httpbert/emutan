@extends('templates.headeruser')

@section('user-content')
    <!-- /* ===== #PRODUKCARD ===== */ -->
    <section class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7">
                <div class="mt-3 text-center auto">
                    <span class="fs-6">Selesaikan pembayaran dalam</span>
                    <span class="text-danger fw-bold">23:59:59</span> <br>

                    <span class="fs-6" style="color: grey">Batas akhir pembayaran</span>
                    <span class="text-black fw-bold fs-5">Kamis, 6 Juni 2023 10:23</span>
                </div>

                <div class="card mt-5 auto">
                    <div class="card-header">
                        BCA Virtual Account
                    </div>
                    <div class="card-body">
                        <span class="fs-6">Nomor Virtual Account</span>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fs-6 fw-bold">8011097013308313114144</span>
                            <span class="fs-6">Salin <i class="ri-file-copy-line"></i></span>
                        </div>
                        <span class="fs-6">Total Pembayaran</span>
                        <span class="fs-6 fw-bold">Rp 821,000</span>
                    </div>
                </div>

                <div class="card-body mt-3">

                    <button type="button" class="btn d-flex justify-content-center w-100 w-24" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" style="background color: #198754;">Upload</button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p class="text-center mt-4">Silahkan upload bukti transfer dengan format (PNG/JPG)
                                        melalui
                                        foramat
                                        form dibawah
                                    </p>
                                    <input type="file" name="" id="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>

                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#upload"
                                        style="background color: #198754;">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <img src="{{ 'assets/img/true.png' }}" alt="">
                                    <strong>Berhasil</strong>
                                    <p>Pembayaran berhasil dilakukan, tunggu konfirmasi admin yaa...</p>
                                </div>
                                <div class="modal-body text-center">
                                    <a href="" class="btn btn-success btn-sm">
                                        OK
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between mt-2 w-100">
                        <a href="{{ 'pembelian' }}" class="btn d-flex justify-content-center w-50 me-1"
                            style="border: 1px solid #198754; color: #198754;">Cek Status
                            Pembayaran</a>
                        <a href="{{ '/home' }}"
                            class="btn btn-danger d-flex w-50 d-flex justify-content-center">Batalkan Transaksi</a>
                    </div>
                </div>

                <div class="card-body mt-4">
                    <p class="fw-bold">Cara Pembayaran</p>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    ATM BCA
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-black">
                                    <ol>
                                        <li class="text-black">Masukkan kartu ATM BCA kamu ke mesin ATM.</li>
                                        <li class="text-black">Masukkan PIN ATM BCA kamu</li>
                                        <li class="text-black">Pilih menu Transaksi Lainnya</li>
                                        <li class="text-black">Pilih Transfer</li>
                                        <li class="text-black">Pilih BCA Virtual Account.</li>
                                        <li class="text-black">Masukkan nomor Virtual Account pembayaran (
                                            8011097013308313114144).</li>
                                        <li class="text-black">Masukkan nominal saldo yang ingin kamu isi di transfer.</li>
                                        <li class="text-black">Jika sudah benar, klik tombol benar untuk mengirimkan dana
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    M-BANKING BCA
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li class="text-black" style="text-align: justify">Pastikan Anda memiliki rekening
                                            di Bank BCA dan sudah
                                            terdaftar sebagai pengguna layanan BCA Virtual Account.</li>
                                        <li class="text-black" style="text-align: justify">Buka aplikasi BCA Mobile atau
                                            akses halaman internet banking BCA melalui browser
                                            di perangkat Anda.</li>
                                        <li class="text-black" style="text-align: justify">Masuk ke akun Anda dengan
                                            menggunakan username dan password yang telah Anda
                                            daftarkan.</li>
                                        <li class="text-black" style="text-align: justify">Setelah berhasil masuk, cari
                                            menu
                                            atau opsi yang terkait dengan pembayaran
                                            virtual akun. Biasanya, Anda dapat menemukan opsi ini di menu "Pembayaran" atau
                                            "Transfer".</li>
                                        <li class="text-black" style="text-align: justify">Pilih jenis layanan atau
                                            penyedia
                                            yang ingin Anda bayar, misalnya tagihan
                                            telepon, listrik, atau pembayaran e-commerce tertentu.</li>
                                        <li class="text-black" style="text-align: justify">Masukkan nomor virtual akun
                                            yang
                                            diberikan oleh penyedia layanan atau e-commerce
                                            tersebut. Pastikan Anda memasukkan nomor dengan benar agar pembayaran dapat
                                            diterima dengan tepat.</li>
                                        <li class="text-black" style="text-align: justify">Masukkan jumlah pembayaran yang
                                            harus Anda bayar. Periksa kembali jumlah yang
                                            diminta oleh penyedia layanan atau e-commerce untuk memastikan keakuratan
                                            pembayaran.</li>
                                        <li class="text-black" style="text-align: justify">Setelah itu, konfirmasikan
                                            transaksi pembayaran virtual akun tersebut.</li>
                                        <li class="text-black" style="text-align: justify">Periksa kembali semua detail
                                            transaksi sebelum Anda menyelesaikan pembayaran.
                                            Pastikan nomor virtual akun, jumlah pembayaran, dan informasi lainnya telah
                                            dimasukkan dengan benar.</li>
                                        <li class="text-black" style="text-align: justify">Jika semua informasi sudah
                                            sesuai, lanjutkan untuk menyelesaikan transaksi
                                            dengan mengikuti instruksi yang diberikan oleh aplikasi atau halaman internet
                                            banking BCA.</li>
                                        <li class="text-black" style="text-align: justify">Setelah pembayaran selesai,
                                            Anda
                                            akan menerima konfirmasi bahwa pembayaran telah
                                            berhasil dilakukan. Simpanlah bukti pembayaran sebagai referensi.</li>
                                    </ol>
                                    <p style="text-align: justify">Penting untuk diingat bahwa langkah-langkah ini mungkin
                                        dapat berbeda sedikit
                                        tergantung
                                        pada antarmuka atau versi aplikasi BCA Mobile atau internet banking BCA yang Anda
                                        gunakan. Jika Anda mengalami kesulitan, disarankan untuk menghubungi layanan
                                        pelanggan
                                        Bank BCA untuk mendapatkan bantuan lebih lanjut.</p>
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

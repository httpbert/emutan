<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href={{ '../assets/img/logo-emutan.png' }} type="image/x-icon">
    <!-- bootstrap & bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ '../assets/css/style.css' }}>
</head>

<body>

    <!-- /* ===== #TAB=CHOICE ===== */ -->
    <div class="container d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-5 pt-4">

            <div class="row header-login mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center box-header-login">
                    <a href="/">
                        <img class="img-fluid mb-4" src={{ '../assets/img/logo.png' }} alt="logo emutan">
                    </a>
                    <div class="languages">
                        <i class="bi bi-globe text-black"></i>
                        <select name="select-lg" class="pilihan-bahasa" style="border: none;">
                            <option value="Indonesia">Indonesia</option>
                            <option value="English">English</option>
                        </select>
                    </div>
                </div>
            </div>

            <h4 class="text-start heading pt-3 pb-4 fw-bold">Silahkan Verifikasi Data Anda</h4>

            <ul class="nav nav-tabs justify-content-center" style="border: none;">
                <li class="nav-item text-dark text-center me-5">
                    <a class="nav-link d-flex flex-column active" data-bs-toggle="tab" href="#petani">
                        <i class="bi bi-envelope-check"></i>
                        Email
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-dark d-flex flex-column" data-bs-toggle="tab" href="#perusahaan">
                        <i class="bi bi-whatsapp"></i>
                        Telepon
                    </a>
                </li>
            </ul>

            <div class="row">
                <div class="col-12">
                    <div class="tab-content">

                        <!-- Verifikasi by Email -->
                        <div id="petani" class="tab-pane fade in active show">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 my-4">
                                    <form action="#">
                                        <div class="card d-flex mb-3">
                                            <div class="card-body d-flex justify-content-center">
                                                <i class="bi bi-info-circle-fill me-2"></i>
                                                <p>
                                                    Masukkan alamat email anda, untuk mendapatkan informasi mengenai otp
                                                    verfikasi yang kami
                                                    kirimkan!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group text-start">
                                            <label for="noTelp" class="form-label">
                                                Email
                                                <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="bi bi-envelope-check"></i>
                                                </span>
                                                <input type="email" class="form-control"
                                                    placeholder="Verifikasi via email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <a href="/verifikasi_email"
                                                class="btn-login text-decoration-none btn btn-primary d-flex">
                                                Dapatkan kode
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Verifikasi by Telp -->
                        <div id="perusahaan" class="tab-pane fade">
                            <div class="row text-start">
                                <div class="col-sm-12 col-md-12 col-lg-12 my-4">
                                    <form action="#">
                                        <div class="card d-flex mb-3">
                                            <div class="card-body d-flex justify-content-center">
                                                <i class="bi bi-info-circle-fill me-2"></i>
                                                <p>
                                                    Masukkan nomor telepon atau whatsApp anda, untuk mendapatkan
                                                    informasi mengenai otp verfikasi
                                                    yang kami kirimkan!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="noTelp" class="form-label">
                                                Telepon
                                                <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-whatsapp"></i> </span>
                                                <input type="number" class="form-control"
                                                    placeholder="Masukkan via telp">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <a href="/verifikasi_telp"
                                                class="btn-login text-decoration-none btn btn-primary d-flex">
                                                Dapatkan kode
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>

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

    <!-- /* ===== #FORM-LOGIN ===== */ -->
    <div class="container-login m-auto">
        <div class="row header-login">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center box-header-login">
                <a href={{ '/' }}>
                    <img class="img-fluid mb-3" src={{ 'assets/img/logo.png' }} alt="logo emutan">
                </a>
                <div class="languages">
                    <i class="bi bi-globe text-black"></i>
                    <select name="select-lg" class="pilihan-bahasa">
                        <option value="Indonesia">Indonesia</option>
                        <option value="English">English</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row justify-content-center main-login pt-4">
            <div class="col-sm-12 col-md-12 col-lg-4 text-center main-box-login">
                <h4 class="text-start heading pt-3 pb-4 fw-bold">Sign In</h4>

                <form action="#">
                    <div class="form-group text-start">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-person-lines-fill"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Contoh@gmail.com">
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-shield-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Masukkan password">
                        </div>
                    </div>
                    <div class="form-group text-start">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cek">
                            &nbsp;<label class="form-check-label">
                                Remember me
                            </label>

                            <a href={{ '/otp_verifikasi' }} class="text-primary text-decoration-none float-end">
                                Lupa password?
                            </a>
                        </div>
                    </div>
                    <div class="form-group pt-5 pb-5">
                        <button type="button" style="background-color: #1a5653; border: none"
                            class="d-flex justify-content-center w-100 d-flex btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Masuk
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <img src="{{ 'assets/img/true.png' }}" class="mb-3">
                                        <p>Anda berhasil login</p>
                                    </div>
                                    <div class="modal-body text-center">
                                        <a href="{{ 'home' }}" class="btn btn-success btn-sm">
                                            Oke
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-start mt-4 text-center">Belum memiliki akun?
                            <a href={{ '/daftar' }} class="btn-daftar text-decoration-none">Daftar</a>
                        </p>
                    </div>
                </form>
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

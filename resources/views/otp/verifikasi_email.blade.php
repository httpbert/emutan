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

    <!-- /* ===== #VERIFIKASI-EMAIL ===== */ -->
    <div class="otp-container">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card card-otp py-5 px-5">
                <h5 class="m-0 mb-4">Verifikasi by Email</h5>
                <span class="mobile-text">
                    Masukkan kode yang telah dikirimkan melalui email yang anda masukkan!
                    <b class="text-primary">emailanda@gmail.com</b>
                </span>
                <div class="d-flex flex-row mt-5">
                    <input type="text" class="form-control" autofocus="">
                    <input type="text" class="form-control">
                    <input type="text" class="form-control">
                    <input type="text" class="form-control">
                </div>
                <div class="text-danger mt-5">
                    <span class="d-block mobile-text" id="countdown"></span>
                    <span class="d-block mobile-text" id="resend"></span>
                </div>
                <div class="text-button mt-5">
                    <a onclick="alert('Verifikasi berhasil')" href="/login"
                        class="btn-login text-decoration-none btn btn-primary d-flex">Verifikasi</a>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src={{ '../assets/js/script.js' }}></script>

</body>

</html>

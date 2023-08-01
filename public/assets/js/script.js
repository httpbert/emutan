// OTP VERIFIKASI
let timerOn = true;
function timer(remaining) {
    var m = Math.floor(remaining / 60);
    var s = remaining % 60;
    m = m < 10 ? '0' + m : m;
    s = s < 10 ? '0' + s : s;

    document.getElementById("countdown").innerHTML =
        `Time left : ${m} : ${s}`;
    remaining -= 1;
    if (remaining >= 0 && timerOn) {
        setTimeout(function () {
            timer(remaining);
        }, 1000);

        document.getElementById("resend").innerHTML =
            ``;
        return;
    }

    if (!timerOn) {
        return;
    }

    document.getElementById("resend").innerHTML =
        `Belum mendapatkan kode? <span class="fw-bold text-danger cursor" onclick="timer(60)">Resend</span>`
}

// 1 menit untuk mengirimkan kode verifikasi.
timer(60);

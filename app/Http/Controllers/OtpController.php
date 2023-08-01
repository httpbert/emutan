<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function otp_verifikasi() {
        $judul_halaman = "Verifikasi Data";
        return view("otp.otp_verifikasi")->with("title", $judul_halaman);
    }
    public function verifikasi_email() {
        $judul_halaman = "Verifikasi via Email";
        return view("otp.verifikasi_email")->with("title", $judul_halaman);
    }
    public function verifikasi_telp() {
        $judul_halaman = "Verifikasi via Telp";
        return view("otp.verifikasi_telp")->with("title", $judul_halaman);
    }
}
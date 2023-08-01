<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboarduserController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("index", [
        "title" => "eMutan | Platform pendanaan pertanian yang mudah, cepat dan terpecaya"
    ]);
});
Route::get("/skoring", function () {
    return view("skoring", [
        "title" => "Skoring | Apa itu skoring dan keuntungannaya"
    ]);
});
Route::get("/blogs", function () {
    return view("blogs", [
        "title" => "Blogs | Lihat artikel terkait pertanian di emutan"
    ]);
});
Route::get("/tentang_kami", function () {
    return view("tentang_kami", [
        "title" => "Tentang Kami | Profile perusahaan emutan"
    ]);
});
Route::get("/kontak_kami", function () {
    return view("kontak_kami", [
        "title" => "Kontak Kami | Hubungi kami melalui kontak form ini"
    ]);
});
Route::get("/login", function () {
    return view("login", [
        "title" => "eMutan | Halaman login"
    ]);
});
Route::get("/daftar", function () {
    return view("daftar", [
        "title" => "eMutan | Halaman daftar"
    ]);
});

// UserPage
Route::get("/home", [UsersController::class, "home"])->name("home");
Route::get("/data_user", [UsersController::class, "data_user"])->name("data_user");
Route::get("/keranjang", [UsersController::class, "keranjang"])->name("keranjang");
Route::get("/pesanan", [UsersController::class, "pesanan"])->name("pesanan");
Route::get("/checkout_produk", [UsersController::class, "checkout_produk"])->name("checkout_produk");
Route::get("/metode_pembayaran", [UsersController::class, "metode_pembayaran"])->name("metode_pembayaran");
Route::get("/bukti_pembayaran", [UsersController::class, "bukti_pembayaran"])->name("bukti_pembayaran");
Route::get("/dashboard", [DashboarduserController::class, "dashboard"])->name("dashboard");
Route::get("/proyek", [DashboarduserController::class, "proyek"])->name("proyek");
Route::get("/skoring_user", [DashboarduserController::class, "skoring_user"])->name("skoring_user");
Route::get("/pembelian", [DashboarduserController::class, "pembelian"])->name("pembelian");
Route::get("/my_profile", [DashboarduserController::class, "my_profile"])->name("my_profile");
Route::get("/pendanaan", [DashboarduserController::class, "pendanaan"])->name("pendanaan");
Route::get("/akun_bank", [DashboarduserController::class, "akun_bank"])->name("akun_bank");
Route::get("/ubah_password", [DashboarduserController::class, "ubah_password"])->name("ubah_password");
Route::get("/data_petani", [DashboarduserController::class, "data_petani"])->name("data_petani");
Route::get("/tambah_alamat", [DashboarduserController::class, "tambah_alamat"])->name("tambah_alamat");

// OtpPage
Route::get("/otp_verifikasi", [OtpController::class, "otp_verifikasi"])->name("otp_verifikasi");
Route::get("/verifikasi_email", [OtpController::class, "verifikasi_email"])->name("verifikasi_email");
Route::get("/verifikasi_telp", [OtpController::class, "verifikasi_telp"])->name("verifikasi_telp");

// Produk
Route::get("/pupuk", [ProdukController::class, "pupuk"])->name("pupuk");
Route::get("/bibit", [ProdukController::class, "bibit"])->name("bibit");
Route::get("/obat_obatan", [ProdukController::class, "obat_obatan"])->name("obat_obatan");
Route::get("/alsintan", [ProdukController::class, "alsintan"])->name("alsintan");

// Komoditas
Route::get("/cabe", [KomoditasController::class, "cabe"])->name("cabe");
Route::get("/kedelai", [KomoditasController::class, "kedelai"])->name("kedelai");
Route::get("/jagung", [KomoditasController::class, "jagung"])->name("jagung");
Route::get("/kelapa_sawit", [KomoditasController::class, "kelapa_sawit"])->name("kelapa_sawit");
Route::get("/padi", [KomoditasController::class, "padi"])->name("padi");

// Blogs
Route::get("/artikel_satu", [BlogController::class, "artikel_satu"])->name("artikel_satu");
Route::get("/artikel_dua", [BlogController::class, "artikel_dua"])->name("artikel_dua");

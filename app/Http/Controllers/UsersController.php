<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // home
    public function home()
    {
        $judul_halaman = "eMutan | Dashboard Utama Users";
        return view("users.home")->with("title", $judul_halaman);
    }
    public function data_user()
    {
        $judul_halaman = "eMutan | Formulir Pengisian Identitas Pendanaan Users";
        return view("users.data_user")->with("title", $judul_halaman);
    }
    public function keranjang()
    {
        $judul_halaman = "eMutan | Keranjang Belanja Users";
        return view("users.keranjang")->with("title", $judul_halaman);
    }
    public function pesanan()
    {
        $judul_halaman = "eMutan | Produk dan Komoditas Pesanan Users";
        return view("users.pesanan")->with("title", $judul_halaman);
    }
    public function checkout_produk()
    {
        $judul_halaman = "eMutan | Checkout Produk";
        return view("users.checkout_produk")->with("title", $judul_halaman);
    }
    public function metode_pembayaran()
    {
        $judul_halaman = "eMutan | Pembayaran";
        return view("users.metode_pembayaran")->with("title", $judul_halaman);
    }
    public function bukti_pembayaran()
    {
        $judul_halaman = "eMutan | Bukti Pembayaran";
        return view("users.bukti_pembayaran")->with("title", $judul_halaman);
    }
}

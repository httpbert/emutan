<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarduserController extends Controller
{
    public function dashboard()
    {
        $judul_halaman = "eMutan | Dashboard Profile Users";
        return view("users.profileusers.dashboard")->with("title", $judul_halaman);
    }
    public function proyek()
    {
        $judul_halaman = "eMutan | Proyek Pendanaan";
        return view("users.profileusers.proyek")->with("title", $judul_halaman);
    }
    public function skoring_user()
    {
        $judul_halaman = "eMutan | Halaman Skoring Users";
        return view("users.profileusers.skoring_user")->with("title", $judul_halaman);
    }
    public function pembelian()
    {
        $judul_halaman = "eMutan | Pembelian Users";
        return view("users.profileusers.pembelian")->with("title", $judul_halaman);
    }
    public function my_profile()
    {
        $judul_halaman = "eMutan | Profile Users";
        return view("users.profileusers.my_profile")->with("title", $judul_halaman);
    }
    public function pendanaan()
    {
        $judul_halaman = "eMutan | Halaman Pendanaan";
        return view("users.profileusers.pendanaan")->with("title", $judul_halaman);
    }
    public function akun_bank()
    {
        $judul_halaman = "eMutan | Tautkan Akun Bank";
        return view("users.profileusers.akun_bank")->with("title", $judul_halaman);
    }
    public function ubah_password()
    {
        $judul_halaman = "eMutan | Ubah Password Users";
        return view("users.profileusers.ubah_password")->with("title", $judul_halaman);
    }
    public function data_petani()
    {
        $judul_halaman = "eMutan | Data Pribadi Petani";
        return view("users.profileusers.data_petani")->with("title", $judul_halaman);
    }
    public function tambah_alamat()
    {
        $judul_halaman = "eMutan | Alamat Baru";
        return view("users.profileusers.tambah_alamat")->with("title", $judul_halaman);
    }
}

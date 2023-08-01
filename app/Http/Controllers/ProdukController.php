<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function pupuk()
    {
        $judul_halaman = "Pupuk | Lihat pupuk dari perusahaan kami";
        return view("produk.pupuk")->with("title", $judul_halaman);
    }
    public function bibit()
    {
        $judul_halaman = "Bibit | Lihat bibit dari perusahaan kami";
        return view("produk.bibit")->with("title", $judul_halaman);
    }
    public function obat_obatan()
    {
        $judul_halaman = "Obat - Obatan Tanaman | Lihat jenis obatan-obatan untuk tanaman dari perusahaan kami";
        return view("produk.obat_obatan")->with("title", $judul_halaman);
    }
    public function alsintan()
    {
        $judul_halaman = "Alsintan | Lihat alsintan dari perusahaan kami";
        return view("produk.alsintan")->with("title", $judul_halaman);
    }
    public function blogspa()
    {
        $judul_halaman = "Alsintan | Lihat alsintan dari perusahaan kami";
        return view("blogspa.artikel1")->with("title", $judul_halaman);
    }
}

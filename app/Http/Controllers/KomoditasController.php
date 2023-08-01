<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    public function cabe() {
        $judul_halaman = "Komoditas Cabe | Apa itu cabe dan bagaimana cara budidayanya";
        return view("komoditas.cabe")->with("title", $judul_halaman);
    }

    public function kedelai() {
        $judul_halaman = "Komoditas Kedelai | Apa itu kedelai dan bagaimana cara budidayanya";
        return view("komoditas.kedelai")->with("title", $judul_halaman);
    }

    public function jagung() {
        $judul_halaman = "Komoditas Jagung | Apa itu kedelai dan bagaimana cara budidayanya";
        return view("komoditas.jagung")->with("title", $judul_halaman);
    }

    public function kelapa_sawit() {
        $judul_halaman = "Komoditas Kelapa Sawit | Apa itu kelapa sawit dan bagaimana cara budidayanya";
        return view("komoditas.kelapa_sawit")->with("title", $judul_halaman);
    }

    public function padi() {
        $judul_halaman = "Komoditas Padi | Apa itu padi dan bagaimana cara budidayanya";
        return view("komoditas.padi")->with("title", $judul_halaman);
    }
}

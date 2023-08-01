<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function artikel_satu()
    {
        $judul_halaman = "eMutan | Menjawab tantangan pengembang benih kedelai 2022";
        return view("blogspa.artikel_satu")->with("title", $judul_halaman);
    }
    public function artikel_dua()
    {
        $judul_halaman = "eMutan | Menjawab tantangan pengembang benih kedelai 2022";
        return view("blogspa.artikel_dua")->with("title", $judul_halaman);
    }
}

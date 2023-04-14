<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\DetailBlog;
use App\Models\DetailProduk;
use App\Models\Footer;
use App\Models\Mitra;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $mitras = Mitra::all();
        $footer = Footer::first();
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(2);
        $detail_blogs = DetailBlog::orderBy('id', 'desc')->paginate(3);
        return view('home.index', compact('beranda', 'mitras', 'footer', 'detail_produks', 'detail_blogs'));
    }

    public function profil()
    {
        $profil = Profil::first();
        $footer = Footer::first();
        return view('home.profil', compact('profil', 'footer'));
    }

    public function galeri()
    {
        $footer = Footer::first();
        return view('home.galeri', compact('footer'));
    }

    public function detail_galeri()
    {
        $footer = Footer::first();
        return view('home.detail_galeri', compact('footer'));
    }

    public function blog()
    {
        $footer = Footer::first();
        return view('home.blog', compact('footer'));
    }

    public function detail_blog()
    {
        $footer = Footer::first();
        return view('home.detail_blog', compact('footer'));
    }
}

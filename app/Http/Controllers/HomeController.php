<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Mitra;
use App\Models\Profil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $mitras = Mitra::all();
        return view('home.index', compact('beranda', 'mitras'));
    }

    public function profil()
    {
        $profil = Profil::first();
        return view('home.profil', compact('profil'));
    }

    public function galeri()
    {
        return view('home.galeri');
    }

    public function detail_galeri()
    {
        return view('home.detail_galeri');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function detail_blog()
    {
        return view('home.detail_blog');
    }
}

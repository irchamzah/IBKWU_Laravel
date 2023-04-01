<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function profil()
    {
        return view('home.profil');
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

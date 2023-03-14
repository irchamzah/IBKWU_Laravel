<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        // return view('home.index', compact('sliders'));
        return view('home.index', compact('sliders'));
    }

    public function index3()
    {
        $sliders = Slider::all();
        // return view('home.index', compact('sliders'));
        return view('home.index3', compact('sliders'));
    }

    public function profil()
    {
        return view('home.profil');
    }

    public function ibkppk()
    {
        return view('home.ibkppk');
    }

    public function programkegiatan()
    {
        return view('home.programkegiatan');
    }
}

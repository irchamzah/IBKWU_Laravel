<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $mitras = Mitra::all();
        return view('admin.halaman.beranda.index', compact('beranda', 'mitras'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->home_img1);
        //validasi data
        $rules = [
            'home_h1' => 'required|string|max:255',
            'home_p1' => 'required', 'string',
            'home_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'about_h1' => 'required|string|max:255',
            'about_h2' => 'required|string|max:255',
            'about_p1' => 'required', 'string',
            'about_h3' => 'required|string|max:255',
            'about_p2' => 'required', 'string',
            'galeri_h1' => 'required|string|max:255',
            'galeri_h2' => 'required|string|max:255',
            'galeri_p1' => 'required', 'string',
            'mitra_h1' => 'required|string|max:255',
            'mitra_h2' => 'required|string|max:255',
            'mitra_p1' => 'required', 'string',
            'blog_h1' => 'required|string|max:255',
            'blog_h2' => 'required|string|max:255',
            'blog_p1' => 'required', 'string',
            'kontak_h1' => 'required|string|max:255',
            'kontak_h2' => 'required|string|max:255',
            'kontak_p1' => 'required', 'string',
        ];
        $message = [
            'home_h1.required' => 'Tidak Boleh Kosong',
            'home_h1.string' => 'Harus Berupa String',

            'home_p1.required' => 'Tidak Boleh Kosong',
            'home_p1.string' => 'Harus Berupa String',

            'home_img1.max' => ' Ukuran File Terlalu Besar',
            'home_img1.mimes' => ' File Format Harus jpeg,png,jpg',

            'about_h1.required' => 'Tidak Boleh Kosong',
            'about_h1.string' => 'Tidak Boleh Kosong',

            'about_h2.required' => 'Tidak Boleh Kosong',
            'about_h2.string' => 'Harus Berupa String',

            'about_p1.required' => 'Tidak Boleh Kosong',
            'about_p1.string' => 'Harus Berupa String',

            'about_h3.required' => 'Tidak Boleh Kosong',
            'about_h3.string' => 'Harus Berupa String',

            'about_p2.required' => 'Tidak Boleh Kosong',
            'about_p2.string' => 'Harus Berupa String',

            'galeri_h1.required' => 'Tidak Boleh Kosong',
            'galeri_h1.string' => 'Harus Berupa String',

            'galeri_h2.required' => 'Tidak Boleh Kosong',
            'galeri_h2.string' => 'Harus Berupa String',

            'galeri_p1.required' => 'Tidak Boleh Kosong',
            'galeri_p1.string' => 'Harus Berupa String',

            'mitra_h1.required' => 'Tidak Boleh Kosong',
            'mitra_h1.string' => 'Harus Berupa String',

            'mitra_h2.required' => 'Tidak Boleh Kosong',
            'mitra_h2.string' => 'Harus Berupa String',

            'mitra_p1.required' => 'Tidak Boleh Kosong',
            'mitra_p1.string' => 'Harus Berupa String',

            'blog_h1.required' => 'Tidak Boleh Kosong',
            'blog_h1.string' => 'Harus Berupa String',

            'blog_h2.required' => 'Tidak Boleh Kosong',
            'blog_h2.string' => 'Harus Berupa String',

            'blog_p1.required' => 'Tidak Boleh Kosong',
            'blog_p1.string' => 'Harus Berupa String',

            'kontak_h1.required' => 'Tidak Boleh Kosong',
            'kontak_h1.string' => 'Harus Berupa String',

            'kontak_h2.required' => 'Tidak Boleh Kosong',
            'kontak_h2.string' => 'Harus Berupa String',

            'kontak_p1.required' => 'Tidak Boleh Kosong',
            'kontak_p1.string' => 'Harus Berupa String',


        ];
        $this->validate($request, $rules, $message);

        //simpan ke database beranda
        $beranda = Beranda::where('id', $request->id)->first();
        $beranda->home_h1 = $request->home_h1;
        $beranda->home_p1 = $request->home_p1;
        if (!empty($request->home_img1)) {
            if (\File::exists(public_path('img/beranda/') . $beranda->home_img1)) {
                \File::delete(public_path('img/beranda/') . $beranda->home_img1);
            }
            $fileName = date('Ymd') . time() . '.' . $request->home_img1->extension();
            $request->file('home_img1')->move(public_path('img/beranda'), $fileName);
            $beranda->home_img1 = $fileName;
        }
        $beranda->about_h1 = $request->about_h1;
        $beranda->about_h2 = $request->about_h2;
        $beranda->about_p1 = $request->about_p1;
        $beranda->about_h3 = $request->about_h3;
        $beranda->about_p2 = $request->about_p2;
        $beranda->galeri_h1 = $request->galeri_h1;
        $beranda->galeri_h2 = $request->galeri_h2;
        $beranda->galeri_p1 = $request->galeri_p1;
        $beranda->mitra_h1 = $request->mitra_h1;
        $beranda->mitra_h2 = $request->mitra_h2;
        $beranda->mitra_p1 = $request->mitra_p1;
        $beranda->blog_h1 = $request->blog_h1;
        $beranda->blog_h2 = $request->blog_h2;
        $beranda->blog_p1 = $request->blog_p1;
        $beranda->kontak_h1 = $request->kontak_h1;
        $beranda->kontak_h2 = $request->kontak_h2;
        $beranda->kontak_p1 = $request->kontak_p1;
        $beranda->update();

        return Redirect::route('admin.halaman.beranda')->with('message', 'Halaman Beranda Berhasil Diperbarui');
    }

    public function tambah_mitra()
    {
        return view('admin.halaman.beranda.tambah_mitra');
    }

    public function store(Request $request)
    {
        // Validasi Data
        $rules = [
            'mitra_img' => 'required', 'max:5000|mimes:jpeg,png,jpg,svg',
            'mitra_link' => 'required', 'string',
        ];
        $message = [
            'mitra_img.required' => ' Logo Tidak Boleh Kosong',
            'mitra_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'mitra_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'mitra_link.required' => ' Link Tidak Boleh Kosong',
            'mitra_link.string' => ' Link Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $fileName = date('Ymd') . time() . '.' . $request->mitra_img->extension();
        $request->file('mitra_img')->move(public_path('img/mitra'), $fileName);
        Mitra::create([
            'mitra_img' => $fileName,
            'mitra_link' => $request->mitra_link,
        ]);

        $beranda = Beranda::first();
        $mitras = Mitra::all();
        return view('admin.halaman.beranda.index', compact('beranda', 'mitras'));
    }

    public function edit_mitra($id)
    {
        $mitra = Mitra::whereId($id)->first();
        return view('admin.halaman.beranda.edit_mitra', compact('mitra'));
    }

    public function update_mitra(Request $request)
    {
        // Validasi Data
        $rules = [
            'mitra_img' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'mitra_link' => 'required', 'string',
        ];
        $message = [
            'mitra_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'mitra_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'mitra_link.required' => ' Link Tidak Boleh Kosong',
            'mitra_link.string' => ' Link Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $mitra = Mitra::where('id', $request->id)->first();
        if (!empty($request->mitra_img)) {
            if (\File::exists(public_path('img/mitra/') . $mitra->mitra_img)) {
                \File::delete(public_path('img/mitra/') . $mitra->mitra_img);
            }
            $fileName = date('Ymd') . time() . '.' . $request->mitra_img->extension();
            $request->file('mitra_img')->move(public_path('img/mitra'), $fileName);
            $mitra->mitra_img = $fileName;
        }
        $mitra->mitra_link = $request->mitra_link;
        $mitra->update();

        $beranda = Beranda::first();
        $mitras = Mitra::all();
        return view('admin.halaman.beranda.index', compact('beranda', 'mitras'));
    }

    public function destroy(Request $request)
    {
        // dd($request->id);
        $request = Mitra::where('id', $request->id)->first();
        if (\File::exists(public_path('img/mitra/') . $request->mitra_img)) {
            \File::delete(public_path('img/mitra/') . $request->mitra_img);
        }
        $request->delete();

        $beranda = Beranda::first();
        $mitras = Mitra::all();
        return view('admin.halaman.beranda.index', compact('beranda', 'mitras'));
    }

    public function create()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
}

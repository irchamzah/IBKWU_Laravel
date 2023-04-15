<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        return view('admin.halaman.profil.index', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->home_img1);
        //validasi data
        $rules = [
            'tentang_h1' => 'required|string|max:255',
            'tentang_h2' => 'required|string|max:255',
            'tentang_p1' => 'required', 'string',
            'tentang_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'tentang_h3' => 'required|string|max:255',
            'tentang_p2' => 'required', 'string',
            'tentang_img2' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'tentang_h4' => 'required|string|max:255',
            'tentang_p3' => 'required', 'string',
            'visi_h1' => 'required|string|max:255',
            'visi_h2' => 'required|string|max:255',
            'visi_p1' => 'required', 'string',
            'visi_h3' => 'required|string|max:255',
            'visi_p2' => 'required', 'string',
            'visi_h4' => 'required|string|max:255',
            'visi_p3' => 'required', 'string',
            'tujuan_h1' => 'required|string|max:255',
            'tujuan_h2' => 'required|string|max:255',
            'tujuan_p1' => 'required', 'string',
            'tujuan_h3' => 'required|string|max:255',
            'tujuan_p2' => 'required', 'string',
            'tujuan_h4' => 'required|string|max:255',
            'tujuan_p3' => 'required', 'string',
            'struktur_h1' => 'required|string|max:255',
            'struktur_h2' => 'required|string|max:255',
            'struktur_p1' => 'required', 'string',
            'struktur_p2' => 'required', 'string',
            'struktur_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
        ];
        $message = [
            'tentang_h1.required' => 'Tidak Boleh Kosong',
            'tentang_h1.string' => 'Harus Berupa String',

            'tentang_h2.required' => 'Tidak Boleh Kosong',
            'tentang_h2.string' => 'Harus Berupa String',

            'tentang_p1.required' => 'Tidak Boleh Kosong',
            'tentang_p1.string' => 'Tidak Boleh Kosong',

            'tentang_img1.max' => ' Ukuran File Terlalu Besar',
            'tentang_img1.mimes' => ' File Format Harus jpeg,png,jpg',

            'tentang_h3.required' => 'Tidak Boleh Kosong',
            'tentang_h3.string' => 'Harus Berupa String',

            'tentang_p2.required' => 'Tidak Boleh Kosong',
            'tentang_p2.string' => 'Harus Berupa String',

            'tentang_img2.max' => ' Ukuran File Terlalu Besar',
            'tentang_img2.mimes' => ' File Format Harus jpeg,png,jpg',

            'tentang_h4.required' => 'Tidak Boleh Kosong',
            'tentang_h4.string' => 'Harus Berupa String',

            'tentang_p3.required' => 'Tidak Boleh Kosong',
            'tentang_p3.string' => 'Harus Berupa String',

            'visi_h1.required' => 'Tidak Boleh Kosong',
            'visi_h1.string' => 'Harus Berupa String',

            'visi_h2.required' => 'Tidak Boleh Kosong',
            'visi_h2.string' => 'Harus Berupa String',

            'visi_p1.required' => 'Tidak Boleh Kosong',
            'visi_p1.string' => 'Harus Berupa String',

            'visi_h3.required' => 'Tidak Boleh Kosong',
            'visi_h3.string' => 'Harus Berupa String',

            'visi_p2.required' => 'Tidak Boleh Kosong',
            'visi_p2.string' => 'Harus Berupa String',

            'visi_h4.required' => 'Tidak Boleh Kosong',
            'visi_h4.string' => 'Harus Berupa String',

            'visi_p3.required' => 'Tidak Boleh Kosong',
            'visi_p3.string' => 'Harus Berupa String',

            'tujuan_h1.required' => 'Tidak Boleh Kosong',
            'tujuan_h1.string' => 'Harus Berupa String',

            'tujuan_h2.required' => 'Tidak Boleh Kosong',
            'tujuan_h2.string' => 'Harus Berupa String',

            'tujuan_p1.required' => 'Tidak Boleh Kosong',
            'tujuan_p1.string' => 'Harus Berupa String',

            'tujuan_h3.required' => 'Tidak Boleh Kosong',
            'tujuan_h3.string' => 'Harus Berupa String',

            'tujuan_p2.required' => 'Tidak Boleh Kosong',
            'tujuan_p2.string' => 'Harus Berupa String',

            'tujuan_h4.required' => 'Tidak Boleh Kosong',
            'tujuan_h4.string' => 'Harus Berupa String',

            'tujuan_p3.required' => 'Tidak Boleh Kosong',
            'tujuan_p3.string' => 'Harus Berupa String',

            'struktur_h1.required' => 'Tidak Boleh Kosong',
            'struktur_h1.string' => 'Harus Berupa String',

            'struktur_h2.required' => 'Tidak Boleh Kosong',
            'struktur_h2.string' => 'Harus Berupa String',

            'struktur_p1.required' => 'Tidak Boleh Kosong',
            'struktur_p1.string' => 'Harus Berupa String',

            'struktur_p2.required' => 'Tidak Boleh Kosong',
            'struktur_p2.string' => 'Harus Berupa String',

            'struktur_img1.max' => ' Ukuran File Terlalu Besar',
            'struktur_img1.mimes' => ' File Format Harus jpeg,png,jpg',


        ];
        $this->validate($request, $rules, $message);

        //simpan ke database profil
        $profil = Profil::where('id', $request->id)->first();
        $profil->tentang_h1 = $request->tentang_h1;
        $profil->tentang_h2 = $request->tentang_h2;
        $profil->tentang_p1 = $request->tentang_p1;
        if (!empty($request->tentang_img1)) {
            if (\File::exists(public_path('img/profil/') . $profil->tentang_img1)) {
                \File::delete(public_path('img/profil/') . $profil->tentang_img1);
            }
            $fileName = uniqid() . date('Ymd') . time() . '.' . $request->tentang_img1->extension();
            $request->file('tentang_img1')->move(public_path('img/profil'), $fileName);
            $profil->tentang_img1 = $fileName;
        }
        $profil->tentang_h3 = $request->tentang_h3;
        $profil->tentang_p2 = $request->tentang_p2;
        if (!empty($request->tentang_img2)) {
            if (\File::exists(public_path('img/profil/') . $profil->tentang_img2)) {
                \File::delete(public_path('img/profil/') . $profil->tentang_img2);
            }
            $fileName = uniqid() . date('Ymd') . time() . '.' . $request->tentang_img2->extension();
            $request->file('tentang_img2')->move(public_path('img/profil'), $fileName);
            $profil->tentang_img2 = $fileName;
        }
        $profil->tentang_h4 = $request->tentang_h4;
        $profil->tentang_p3 = $request->tentang_p3;
        $profil->visi_h1 = $request->visi_h1;
        $profil->visi_h2 = $request->visi_h2;
        $profil->visi_p1 = $request->visi_p1;
        $profil->visi_h3 = $request->visi_h3;
        $profil->visi_p2 = $request->visi_p2;
        $profil->visi_h4 = $request->visi_h4;
        $profil->visi_p3 = $request->visi_p3;
        $profil->tujuan_h1 = $request->tujuan_h1;
        $profil->tujuan_h2 = $request->tujuan_h2;
        $profil->tujuan_p1 = $request->tujuan_p1;
        $profil->tujuan_h3 = $request->tujuan_h3;
        $profil->tujuan_p2 = $request->tujuan_p2;
        $profil->tujuan_h4 = $request->tujuan_h4;
        $profil->tujuan_p3 = $request->tujuan_p3;
        $profil->struktur_h1 = $request->struktur_h1;
        $profil->struktur_h2 = $request->struktur_h2;
        $profil->struktur_p1 = $request->struktur_p1;
        $profil->struktur_p2 = $request->struktur_p2;
        if (!empty($request->struktur_img1)) {
            if (\File::exists(public_path('img/profil/') . $profil->struktur_img1)) {
                \File::delete(public_path('img/profil/') . $profil->struktur_img1);
            }
            $fileName = date('Ymd') . time() . '.' . $request->struktur_img1->extension();
            $request->file('struktur_img1')->move(public_path('img/profil'), $fileName);
            $profil->struktur_img1 = $fileName;
        }
        $profil->update();

        return Redirect::route('admin.halaman.profil')->with('message', 'Halaman Profil Berhasil Diperbarui');
    }
}

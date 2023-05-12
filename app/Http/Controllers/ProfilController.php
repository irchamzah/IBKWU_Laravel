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
            'tentang_p1' => 'required', 'string',
            'visi_h1' => 'required|string|max:255',
            'visi_h2' => 'required|string|max:255',
            'visi_p1' => 'required', 'string',
            'visi_h3' => 'required|string|max:255',
            'visi_p2' => 'required', 'string',
            'tujuan_h1' => 'required|string|max:255',
            'tujuan_h2' => 'required|string|max:255',
            'tujuan_p1' => 'required', 'string',
            'tujuan_h3' => 'required|string|max:255',
            'tujuan_p2' => 'required', 'string',
            'struktur_h1' => 'required|string|max:255',
            'struktur_p1' => 'required', 'string',
            'struktur_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'sdm_h1' => 'required|string|max:255',
            'sdm_p1' => 'required', 'string',
        ];
        $message = [
            'tentang_h1.required' => 'Tidak Boleh Kosong',
            'tentang_h1.string' => 'Harus Berupa String',

            'tentang_p1.required' => 'Tidak Boleh Kosong',
            'tentang_p1.string' => 'Tidak Boleh Kosong',

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

            'struktur_h1.required' => 'Tidak Boleh Kosong',
            'struktur_h1.string' => 'Harus Berupa String',

            'struktur_p1.required' => 'Tidak Boleh Kosong',
            'struktur_p1.string' => 'Harus Berupa String',

            'struktur_img1.max' => ' Ukuran File Terlalu Besar',
            'struktur_img1.mimes' => ' File Format Harus jpeg,png,jpg',

            'sdm_h1.required' => 'Tidak Boleh Kosong',
            'sdm_h1.string' => 'Harus Berupa String',

            'sdm_p1.required' => 'Tidak Boleh Kosong',
            'sdm_p1.string' => 'Harus Berupa String',

        ];
        $this->validate($request, $rules, $message);

        //simpan ke database profil
        $profil = Profil::where('id', $request->id)->first();
        $profil->tentang_h1 = $request->tentang_h1;
        $profil->tentang_p1 = $request->tentang_p1;
        $profil->visi_h1 = $request->visi_h1;
        $profil->visi_h2 = $request->visi_h2;
        $profil->visi_p1 = $request->visi_p1;
        $profil->visi_h3 = $request->visi_h3;
        $profil->visi_p2 = $request->visi_p2;
        $profil->tujuan_h1 = $request->tujuan_h1;
        $profil->tujuan_h2 = $request->tujuan_h2;
        $profil->tujuan_p1 = $request->tujuan_p1;
        $profil->tujuan_h3 = $request->tujuan_h3;
        $profil->tujuan_p2 = $request->tujuan_p2;
        $profil->struktur_h1 = $request->struktur_h1;
        $profil->struktur_p1 = $request->struktur_p1;
        if (!empty($request->struktur_img1)) {
            if (\File::exists(public_path('img/profil/') . $profil->struktur_img1)) {
                \File::delete(public_path('img/profil/') . $profil->struktur_img1);
            }
            $fileName = date('Ymd') . time() . '.' . $request->struktur_img1->extension();
            $request->file('struktur_img1')->move(public_path('img/profil'), $fileName);
            $profil->struktur_img1 = $fileName;
        }
        $profil->sdm_h1 = $request->sdm_h1;
        $profil->sdm_p1 = $request->sdm_p1;
        $profil->update();

        return Redirect::route('admin.halaman.profil')->with('message', 'Halaman Profil Berhasil Diperbarui');
    }
}

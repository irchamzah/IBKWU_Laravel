<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\DetailBlog;
use App\Models\DetailProduk;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $mitras = Mitra::all();
        $post_pengumumans = DetailBlog::where('kategori_blog_id', '8')->orderBy('id', 'desc')->paginate(3);
        $post_beritas = DetailBlog::where('kategori_blog_id', '6')->orderBy('id', 'desc')->paginate(3);
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(9);
        return view('admin.halaman.beranda.index', compact('beranda', 'mitras', 'post_pengumumans', 'post_beritas', 'detail_produks'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->home_img1);
        //validasi data
        $rules = [
            'pengumuman_h1' => 'required|string|max:255',
            'ig_h1' => 'required', 'string',
            'link_ig' => 'required|string|max:255',
            'yt_h1' => 'required|string|max:255',
            'link_yt' => 'required', 'string',
            'berita_h1' => 'required|string|max:255',
            'galeri_h1' => 'required', 'string',
            'lokasi_h1' => 'required|string|max:255',
        ];
        $message = [
            'pengumuman_h1.required' => 'Tidak Boleh Kosong',
            'pengumuman_h1.string' => 'Harus Berupa String',

            'ig_h1.required' => 'Tidak Boleh Kosong',
            'ig_h1.string' => 'Harus Berupa String',

            'link_ig.required' => 'Tidak Boleh Kosong',
            'link_ig.string' => 'Tidak Boleh Kosong',

            'yt_h1.required' => 'Tidak Boleh Kosong',
            'yt_h1.string' => 'Harus Berupa String',

            'link_yt.required' => 'Tidak Boleh Kosong',
            'link_yt.string' => 'Harus Berupa String',

            'berita_h1.required' => 'Tidak Boleh Kosong',
            'berita_h1.string' => 'Harus Berupa String',

            'galeri_h1.required' => 'Tidak Boleh Kosong',
            'galeri_h1.string' => 'Harus Berupa String',

            'lokasi_h1.required' => 'Tidak Boleh Kosong',
            'lokasi_h1.string' => 'Harus Berupa String',

        ];
        $this->validate($request, $rules, $message);

        //simpan ke database beranda
        $beranda = Beranda::where('id', $request->id)->first();
        $beranda->pengumuman_h1 = $request->pengumuman_h1;
        $beranda->ig_h1 = $request->ig_h1;
        $beranda->link_ig = $request->link_ig;
        $beranda->yt_h1 = $request->yt_h1;
        $beranda->link_yt = $request->link_yt;
        $beranda->berita_h1 = $request->berita_h1;
        $beranda->galeri_h1 = $request->galeri_h1;
        $beranda->lokasi_h1 = $request->lokasi_h1;
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
        return Redirect::route('admin.halaman.footer')->with('message', 'Mitra Berhasil Ditambahkan');
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
        return Redirect::route('admin.halaman.footer')->with('message', 'Mitra Berhasil Diperbarui');
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
        return Redirect::route('admin.halaman.footer')->with('message', 'Mitra Berhasil Dihapus');
    }
}

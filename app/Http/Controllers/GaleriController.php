<?php

namespace App\Http\Controllers;

use App\Models\DetailProduk;
use App\Models\FotoProduk;
use App\Models\Galeri;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GaleriController extends Controller
{

    /////////// EDIT GALERI TENANT
    public function index()
    {
        $galeri = Galeri::first();
        $detail_produks = DetailProduk::all();
        return view('admin.halaman.galeri.index', compact('galeri', 'detail_produks'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $rules = [
            'sorotan_h1' => 'required', 'string',
            'sorotan_h2' => 'required', 'string',
            'sorotan_p1' => 'required', 'string',
            'galeri_h1' => 'required', 'string',
            'galeri_h2' => 'required', 'string',
            'galeri_p1' => 'required', 'string',
        ];
        $message = [
            'sorotan_h1.required' => 'Tidak Boleh Kosong',
            'sorotan_h1.string' => 'Harus Berupa String',

            'sorotan_h2.required' => 'Tidak Boleh Kosong',
            'sorotan_h2.string' => 'Harus Berupa String',

            'sorotan_p1.required' => 'Tidak Boleh Kosong',
            'sorotan_p1.string' => 'Harus Berupa String',

            'galeri_h1.required' => 'Tidak Boleh Kosong',
            'galeri_h1.string' => 'Harus Berupa String',

            'galeri_h2.required' => 'Tidak Boleh Kosong',
            'galeri_h2.string' => 'Harus Berupa String',

            'galeri_p1.required' => 'Tidak Boleh Kosong',
            'galeri_p1.string' => 'Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        //simpan ke database galeri
        $galeri = Galeri::where('id', $request->id)->first();
        $galeri->sorotan_h1 = $request->sorotan_h1;
        $galeri->sorotan_h2 = $request->sorotan_h2;
        $galeri->sorotan_p1 = $request->sorotan_p1;
        $galeri->galeri_h1 = $request->galeri_h1;
        $galeri->galeri_h2 = $request->galeri_h2;
        $galeri->galeri_p1 = $request->galeri_p1;
        $galeri->update();

        return Redirect::route('admin.halaman.galeri')->with('message', 'Halaman Galeri Tenant Berhasil Diperbarui');
    }


    /////////// DETAIL PRODUK
    public function tambah_produk()
    {
        return view('admin.halaman.galeri.create');
    }

    public function store_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'judul_h1' => 'required', 'string',
            'detail_produk_img' => 'required', 'max:5000|mimes:jpeg,png,jpg,svg',
            'link_yt' => 'required', 'string',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'detail_produk_img.required' => ' Foto Tidak Boleh Kosong',
            'detail_produk_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_produk_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'deskripsi_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'deskripsi_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        $fileName = date('Ymd') . time() . '.' . $request->detail_produk_img->extension();
        $request->file('detail_produk_img')->move(public_path('img/detail_produk'), $fileName);
        DetailProduk::create([
            'detail_produk_img' => $fileName,
            'judul_h1' => $request->judul_h1,
            'link_yt' => $request->link_yt,
            'deskripsi_p1' => $request->deskripsi_p1,
        ]);

        $detail_produk = DetailProduk::latest()->first();
        return Redirect::route('admin.halaman.galeri.edit_produk', $detail_produk->id)->with('message', 'Produk Berhasil Dibuat.');
    }

    public function edit_produk($id)
    {
        $detail_produk = DetailProduk::whereId($id)->first();
        $foto_produks = FotoProduk::where('produk_id', $id)->orderBy('id', 'asc')->get();
        return view('admin.halaman.galeri.edit', compact('detail_produk', 'foto_produks'));
    }

    public function update_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'detail_produk_img' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'judul_h1' => 'required', 'string',
            'link_yt' => 'required', 'string',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'detail_produk_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_produk_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'deskripsi_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'deskripsi_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database produk
        $detail_produk = DetailProduk::where('id', $request->id)->first();
        if (!empty($request->detail_produk_img)) {
            if (\File::exists(public_path('img/detail_produk/') . $detail_produk->detail_produk_img)) {
                \File::delete(public_path('img/detail_produk/') . $detail_produk->detail_produk_img);
            }
            $fileName = date('Ymd') . time() . '.' . $request->detail_produk_img->extension();
            $request->file('detail_produk_img')->move(public_path('img/detail_produk'), $fileName);
            $detail_produk->detail_produk_img = $fileName;
        }
        $detail_produk->judul_h1 = $request->judul_h1;
        $detail_produk->link_yt = $request->link_yt;
        $detail_produk->deskripsi_p1 = $request->deskripsi_p1;
        $detail_produk->update();

        return Redirect::route('admin.halaman.galeri.edit_produk', $detail_produk->id)->with('message', 'Produk Berhasil Diperbarui');
    }

    public function delete_produk(Request $request)
    {
        $detail_produk = DetailProduk::where('id', $request->id)->first();
        if (\File::exists(public_path('img/detail_produk/') . $detail_produk->detail_produk_img)) {
            \File::delete(public_path('img/detail_produk/') . $detail_produk->detail_produk_img);
        }
        $detail_produk->delete();

        return Redirect::route('admin.halaman.galeri')->with('message', 'Produk Berhasil Dihapus');
    }


    /////////// FOTO PRODUK
    public function tambah_foto_produk($id)
    {
        return view('admin.halaman.galeri.tambah_foto', compact('id'));
    }

    public function store_foto_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'produk_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'produk_h1' => 'required', 'string',
            'produk_p1' => 'required', 'string',
        ];
        $message = [
            'produk_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'produk_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'produk_h1.required' => ' Judul Tidak Boleh Kosong',
            'produk_h1.string' => ' Judul Harus Berupa String',

            'produk_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'produk_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        $fileName = date('Ymd') . time() . '.' . $request->produk_img1->extension();
        $request->file('produk_img1')->move(public_path('img/foto_produk'), $fileName);
        FotoProduk::create([
            'produk_id' => $request->produk_id,
            'produk_img1' => $fileName,
            'produk_h1' => $request->produk_h1,
            'produk_p1' => $request->produk_p1,
        ]);

        return Redirect::route('admin.halaman.galeri.edit_produk', $request->produk_id)->with('message', 'Foto Produk Berhasil Ditambahkan.');
    }

    public function edit_foto_produk($id)
    {
        $foto_produk = FotoProduk::whereId($id)->first();
        return view('admin.halaman.galeri.edit_foto', compact('foto_produk'));
    }

    public function update_foto_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'produk_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'produk_h1' => 'required', 'string',
            'produk_p1' => 'required', 'string',
        ];
        $message = [
            'produk_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'produk_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'produk_h1.required' => ' Judul Tidak Boleh Kosong',
            'produk_h1.string' => ' Judul Harus Berupa String',

            'produk_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'produk_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $foto_produk = FotoProduk::where('id', $request->id)->first();
        if (!empty($request->produk_img1)) {
            if (\File::exists(public_path('img/foto_produk/') . $foto_produk->produk_img1)) {
                \File::delete(public_path('img/foto_produk/') . $foto_produk->produk_img1);
            }
            $fileName = date('Ymd') . time() . '.' . $request->produk_img1->extension();
            $request->file('produk_img1')->move(public_path('img/foto_produk'), $fileName);
            $foto_produk->produk_img1 = $fileName;
        }
        $foto_produk->produk_h1 = $request->produk_h1;
        $foto_produk->produk_p1 = $request->produk_p1;
        $foto_produk->update();

        return Redirect::route('admin.halaman.galeri.edit_produk.edit_foto', $foto_produk->id)->with('message', 'Foto Produk Berhasil Diperbarui.');
    }

    public function delete_foto_produk(Request $request)
    {
        $foto_produk = FotoProduk::where('id', $request->id)->first();
        if (\File::exists(public_path('img/foto_produk/') . $foto_produk->produk_img1)) {
            \File::delete(public_path('img/foto_produk/') . $foto_produk->produk_img1);
        }
        $foto_produk->delete();

        return Redirect::route('admin.halaman.galeri.edit_produk', $foto_produk->produk_id)->with('message', 'Foto Produk Berhasil Dihapus.');
    }

    /////////// SOSMED PRODUK
    public function tambah_sosmed_produk()
    {
        return view('admin.halaman.galeri.tambah_sosmed');
    }

    public function edit_sosmed_produk()
    {
        return view('admin.halaman.galeri.edit_sosmed');
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function show(Galeri $galeri)
    {
        //
    }

    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }
}

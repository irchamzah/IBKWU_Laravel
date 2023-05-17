<?php

namespace App\Http\Controllers;

use App\Models\DetailProduk;
use App\Models\FotoProduk;
use App\Models\Galeri;
use App\Models\KategoriGaleri;
use App\Models\Sosmed;
use App\Models\Warna;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Str;

class GaleriController extends Controller
{

    /////////// EDIT GALERI TENANT
    public function index()
    {
        $galeri = Galeri::first();
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(6);
        $kategoris = KategoriGaleri::all();
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        return view('admin.halaman.galeri.index', compact('galeri', 'detail_produks', 'kategoris', 'rekomendasiGaleris'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $rules = [
            'sorotan_h1' => 'required|string|max:255',
            'galeri_h1' => 'required|string|max:255',
        ];
        $message = [
            'sorotan_h1.required' => 'Tidak Boleh Kosong',
            'sorotan_h1.string' => 'Harus Berupa String',

            'galeri_h1.required' => 'Tidak Boleh Kosong',
            'galeri_h1.string' => 'Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        //simpan ke database galeri
        $galeri = Galeri::where('id', $request->id)->first();
        $galeri->sorotan_h1 = $request->sorotan_h1;
        $galeri->galeri_h1 = $request->galeri_h1;
        $galeri->update();

        return Redirect::route('admin.halaman.galeri')->with('message', 'Halaman Galeri Tenant Berhasil Diperbarui');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $detail_produks = DetailProduk::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $galeri = Galeri::first();
        $kategoris = KategoriGaleri::all();
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        return view('admin.halaman.galeri.index', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris'));
    }

    public function filter(Request $request)
    {
        $query = DetailProduk::query();

        if ($request->kategori == null) {
            return Redirect::route('admin.halaman.galeri');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_galeri_id', $request->kategori);

            $kategoris = KategoriGaleri::all();
            $detail_produks = $query->orderBy('id', 'desc')->get();
            $galeri = Galeri::first();
            $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
            return view('admin.halaman.galeri.galeri_list', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris'));
        }
    }

    /////////// KATEGORI PRODUK
    public function show_kategori_produk()
    {
        $kategoris = KategoriGaleri::all();
        return view('admin.halaman.galeri.show_kategori', compact('kategoris'));
    }

    public function tambah_kategori_produk()
    {
        return view('admin.halaman.galeri.tambah_kategori');
    }

    public function store_kategori_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'kategori' => 'required|string|max:255',
        ];
        $message = [
            'kategori.required' => ' Judul Tidak Boleh Kosong',
            'kategori.string' => ' Judul Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        KategoriGaleri::create([
            'kategori' => $request->kategori,
        ]);

        return Redirect::route('admin.halaman.galeri.show_kategori')->with('message', 'Kategori Berhasil Ditambahkan.');
    }

    public function edit_kategori_produk($id)
    {


        $kategori_produk = KategoriGaleri::whereId($id)->first();

        if ($kategori_produk->id == '1') {
            return back()->withErrors(['Kategori "Tidak Ada" tidak boleh diedit']);
        } elseif ($kategori_produk->id == '2') {
            return back()->withErrors(['Kategori "Sorotan" tidak boleh diedit']);
        }

        return view('admin.halaman.galeri.edit_kategori', compact('kategori_produk'));
    }

    public function update_kategori_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'kategori' => 'required|string|max:255',
        ];
        $message = [
            'kategori.required' => ' Judul Tidak Boleh Kosong',
            'kategori.string' => ' Judul Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $kategori_produk = KategoriGaleri::where('id', $request->id)->first();
        $kategori_produk->kategori = $request->kategori;
        $kategori_produk->update();

        return Redirect::route('admin.halaman.galeri.show_kategori.edit_kategori', $kategori_produk->id)->with('message', 'Kategori Produk Berhasil Diperbarui.');
    }

    public function delete_kategori_produk(Request $request)
    {
        $kategori_produk = KategoriGaleri::where('id', $request->id)->first();
        if ($kategori_produk->id == '1') {
            return back()->withErrors(['Kategori "Tidak Ada" tidak boleh dihapus']);
        } elseif ($kategori_produk->id == '2') {
            return back()->withErrors(['Kategori "Sorotan" tidak boleh dihapus']);
        }
        $kategori_produk->delete();

        return Redirect::route('admin.halaman.galeri.show_kategori', $kategori_produk->produk_id)->with('message', 'Kategori Produk Berhasil Dihapus.');
    }



    /////////// DETAIL PRODUK
    public function tambah_produk()
    {
        $kategoris = KategoriGaleri::all();
        return view('admin.halaman.galeri.create', compact('kategoris'));
    }

    public function store_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'judul_h1' => 'required|string|unique:detail_produks|max:255',
            'detail_produk_img' => 'required', 'max:5000|mimes:jpeg,png,jpg,svg',
            'link_yt' => 'required|string|max:255',
            'link_ig' => 'required|string|max:255',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.unique' => 'Judul tidak boleh sama dengan judul post lain',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'detail_produk_img.required' => ' Foto Tidak Boleh Kosong',
            'detail_produk_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_produk_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'link_ig.required' => ' Link Tidak Boleh Kosong',
            'link_ig.string' => ' Link Harus Berupa String',

            'deskripsi_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'deskripsi_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        $fileName = date('Ymd') . time() . '.' . $request->detail_produk_img->extension();
        $request->file('detail_produk_img')->move(public_path('img/detail_produk'), $fileName);
        DetailProduk::create([
            'detail_produk_img' => $fileName,
            'judul_h1' => $request->judul_h1,
            'slug' => Str::slug($request->judul_h1, '-'),
            'link_yt' => $request->link_yt,
            'link_ig' => $request->link_ig,
            'deskripsi_p1' => $request->deskripsi_p1,
            'kategori_galeri_id' => $request->kategori,
        ]);

        $detail_produk = DetailProduk::latest()->first();
        return Redirect::route('admin.halaman.galeri.edit_produk', $detail_produk->id)->with('message', 'Produk Berhasil Dibuat.');
    }

    public function edit_produk($id)
    {

        $detail_produk = DetailProduk::whereId($id)->first();
        $foto_produks = FotoProduk::where('produk_id', $id)->orderBy('id', 'asc')->get();
        $sosmeds = Sosmed::where('produk_id', $id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriGaleri::orderByRaw("id = $detail_produk->kategori_galeri_id DESC")->get();
        return view('admin.halaman.galeri.edit', compact('detail_produk', 'foto_produks', 'sosmeds', 'kategoris'));
    }

    public function update_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'detail_produk_img' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'judul_h1' => 'required|string|max:255',
            'link_yt' => 'required|string|max:255',
            'link_ig' => 'required|string|max:255',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'detail_produk_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_produk_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'link_ig.required' => ' Link Tidak Boleh Kosong',
            'link_ig.string' => ' Link Harus Berupa String',

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
        $detail_produk->slug = Str::slug($request->judul_h1, '-');
        $detail_produk->link_yt = $request->link_yt;
        $detail_produk->link_ig = $request->link_ig;
        $detail_produk->deskripsi_p1 = $request->deskripsi_p1;
        $detail_produk->kategori_galeri_id = $request->kategori;
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
            'produk_img1' => 'required', 'max:5000|mimes:jpeg,png,jpg,svg',
            'produk_h1' => 'max:255',
        ];
        $message = [
            'produk_img1.required' => 'Foto Tidak Boleh Kosong',
            'produk_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'produk_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'produk_h1.max' => 'Text Tidak Boleh Lebih dari 255 Karakter',
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
            'produk_h1' => 'max:255',
        ];
        $message = [
            'produk_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'produk_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'produk_h1.max' => 'Text Tidak Boleh Lebih dari 255 Karakter',
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
    public function tambah_sosmed_produk($id)
    {
        $warnas = Warna::get();
        return view('admin.halaman.galeri.tambah_sosmed', compact('id', 'warnas'));
    }

    public function store_sosmed_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'nama_sosmed' => 'required|string|max:255',
            'link_sosmed' => 'required|string|max:255',
            'warna_id' => 'required',
        ];
        $message = [
            'nama_sosmed.required' => ' Judul Tidak Boleh Kosong',
            'nama_sosmed.string' => ' Judul Harus Berupa String',

            'link_sosmed.required' => ' Deskripsi Tidak Boleh Kosong',
            'link_sosmed.string' => ' Deskripsi Harus Berupa String',

            'warna_id.required' => ' Warna Tidak Boleh Kosong',
        ];
        $this->validate($request, $rules, $message);

        Sosmed::create([
            'produk_id' => $request->produk_id,
            'nama_sosmed' => $request->nama_sosmed,
            'link_sosmed' => $request->link_sosmed,
            'warna_id' => $request->warna_id,
        ]);

        return Redirect::route('admin.halaman.galeri.edit_produk', $request->produk_id)->with('message', 'Sosmed Produk Berhasil Ditambahkan.');
    }

    public function edit_sosmed_produk($id)
    {


        $sosmed_produk = Sosmed::whereId($id)->first();
        $warnas = Warna::orderByRaw("id = $sosmed_produk->warna_id DESC")->get();
        return view('admin.halaman.galeri.edit_sosmed', compact('sosmed_produk', 'warnas'));
    }

    public function update_sosmed_produk(Request $request)
    {
        // Validasi Data
        $rules = [
            'nama_sosmed' => 'required|string|max:255',
            'link_sosmed' => 'required|string|max:255',
            'warna_id' => 'required',
        ];
        $message = [
            'nama_sosmed.required' => ' Judul Tidak Boleh Kosong',
            'nama_sosmed.string' => ' Judul Harus Berupa String',

            'link_sosmed.required' => ' Deskripsi Tidak Boleh Kosong',
            'link_sosmed.string' => ' Deskripsi Harus Berupa String',

            'warna_id.required' => ' Warna Tidak Boleh Kosong',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $sosmed_produk = Sosmed::where('id', $request->id)->first();
        $sosmed_produk->nama_sosmed = $request->nama_sosmed;
        $sosmed_produk->link_sosmed = $request->link_sosmed;
        $sosmed_produk->warna_id = $request->warna_id;
        $sosmed_produk->update();

        return Redirect::route('admin.halaman.galeri.edit_produk.edit_sosmed', $sosmed_produk->id)->with('message', 'Sosmed Produk Berhasil Diperbarui.');
    }

    public function delete_sosmed_produk(Request $request)
    {
        $sosmed_produk = Sosmed::where('id', $request->id)->first();
        $sosmed_produk->delete();

        return Redirect::route('admin.halaman.galeri.edit_produk', $sosmed_produk->produk_id)->with('message', 'Sosmed Produk Berhasil Dihapus.');
    }
}

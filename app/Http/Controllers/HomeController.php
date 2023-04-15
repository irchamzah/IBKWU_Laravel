<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Blog;
use App\Models\DetailBlog;
use App\Models\DetailProduk;
use App\Models\Footer;
use App\Models\FotoBlog;
use App\Models\FotoProduk;
use App\Models\Galeri;
use App\Models\KategoriBlog;
use App\Models\KategoriGaleri;
use App\Models\Mitra;
use App\Models\Profil;
use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

    ///////////// GALERI
    public function galeri()
    {
        $galeri = Galeri::first();
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(9);
        $footer = Footer::first();
        $kategoris = KategoriGaleri::all();
        return view('home.galeri', compact('galeri', 'footer', 'rekomendasiGaleris', 'detail_produks', 'kategoris'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_produks = DetailProduk::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $galeri = Galeri::first();
        $kategoris = KategoriGaleri::all();
        $footer = Footer::first();
        return view('home.galeri', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris', 'footer'));
    }

    public function filter(Request $request)
    {
        $query = DetailProduk::query();

        if ($request->kategori == null) {
            return Redirect::route('galeri');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_galeri_id', $request->kategori);

            $kategoris = KategoriGaleri::all();
            $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
            $detail_produks = $query->orderBy('id', 'desc')->paginate(6);
            $galeri = Galeri::first();
            $footer = Footer::first();
            return view('home.galeri', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris', 'footer'));
        }
    }

    public function detail_galeri($id)
    {
        $detail_produk = DetailProduk::whereId($id)->first();
        $foto_produks = FotoProduk::where('produk_id', $id)->orderBy('id', 'asc')->get();
        $sosmeds = Sosmed::where('produk_id', $id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriGaleri::orderByRaw("id = $detail_produk->kategori_galeri_id DESC")->get();
        $footer = Footer::first();
        return view('home.detail_galeri', compact('footer', 'detail_produk', 'foto_produks', 'sosmeds', 'kategoris'));
    }

    ///////////// BLOG
    public function blog()
    {
        $blog = Blog::first();
        $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_blogs = DetailBlog::orderBy('id', 'desc')->paginate(9);
        $footer = Footer::first();
        $kategoris = KategoriBlog::all();
        return view('home.blog', compact('blog', 'footer', 'rekomendasiblogs', 'detail_blogs', 'kategoris'));
    }

    public function search_blog(Request $request)
    {
        $query = $request->input('query');
        $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_blogs = DetailBlog::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $blog = Blog::first();
        $kategoris = KategoriBlog::all();
        $footer = Footer::first();
        return view('home.blog', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiblogs', 'footer'));
    }

    public function filter_blog(Request $request)
    {
        $query = DetailBlog::query();

        if ($request->kategori == null) {
            return Redirect::route('blog');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_blog_id', $request->kategori);

            $kategoris = KategoriBlog::all();
            $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
            $detail_blogs = $query->orderBy('id', 'desc')->paginate(6);
            $blog = Blog::first();
            $footer = Footer::first();
            return view('home.blog', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiblogs', 'footer'));
        }
    }

    public function detail_blog($id)
    {
        $detail_blog = DetailBlog::whereId($id)->first();
        $foto_blogs = FotoBlog::where('blog_id', $id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriBlog::orderByRaw("id = $detail_blog->kategori_blog_id DESC")->get();
        $footer = Footer::first();
        return view('home.detail_blog', compact('footer', 'detail_blog', 'foto_blogs', 'kategoris'));
    }
}

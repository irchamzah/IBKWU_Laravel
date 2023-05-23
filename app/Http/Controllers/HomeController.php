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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $mitras = Mitra::all();
        $footer = Footer::first();
        $post_pengumumans = DetailBlog::where('kategori_blog_id', '7')->orderBy('id', 'desc')->paginate(4);
        $post_beritas = DetailBlog::where('kategori_blog_id', '5')->orderBy('id', 'desc')->paginate(4);
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(9);
        return view('home.index', compact('beranda', 'mitras', 'footer', 'post_pengumumans', 'post_beritas', 'detail_produks'));
    }

    public function profil()
    {
        $mitras = Mitra::all();
        $profil = Profil::first();
        $footer = Footer::first();
        return view('home.profil', compact('profil', 'footer', 'mitras'));
    }

    public function layanan()
    {
        $mitras = Mitra::all();
        $kategoris = KategoriBlog::all();
        $detail_blogs = DetailBlog::where('kategori_blog_id', '3')->orderBy('id', 'desc')->get();
        $blog = Blog::first();
        $footer = Footer::first();
        return view('home.layanan', compact('detail_blogs', 'blog', 'kategoris', 'footer', 'mitras'));
    }

    public function ibk_ppk()
    {
        $mitras = Mitra::all();
        $kategoris = KategoriBlog::all();
        $detail_blogs = DetailBlog::where('kategori_blog_id', '3')->orderBy('id', 'desc')->get();
        $blog = Blog::first();
        $footer = Footer::first();
        return view('home.ibk_ppk', compact('detail_blogs', 'blog', 'kategoris', 'footer', 'mitras'));
    }

    public function program_kegiatan()
    {
        $mitras = Mitra::all();
        $kategoris = KategoriBlog::all();
        $detail_blogs = DetailBlog::where('kategori_blog_id', '4')->orderBy('id', 'desc')->get();
        $blog = Blog::first();
        $footer = Footer::first();
        return view('home.program_kegiatan', compact('detail_blogs', 'blog', 'kategoris', 'footer', 'mitras'));
    }

    ///////////// GALERI
    public function galeri()
    {
        $mitras = Mitra::all();
        $galeri = Galeri::first();
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_produks = DetailProduk::orderBy('id', 'desc')->paginate(9);
        $footer = Footer::first();
        $kategoris = KategoriGaleri::all();
        return view('home.galeri', compact('galeri', 'footer', 'rekomendasiGaleris', 'detail_produks', 'kategoris', 'mitras'));
    }

    public function search(Request $request)
    {
        $mitras = Mitra::all();
        $query = $request->input('query');
        $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_produks = DetailProduk::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $galeri = Galeri::first();
        $kategoris = KategoriGaleri::all();
        $footer = Footer::first();
        return view('home.galeri', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris', 'footer', 'mitras'));
    }

    public function filter(Request $request)
    {
        $query = DetailProduk::query();

        if ($request->kategori == null) {
            return Redirect::route('galeri');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_galeri_id', $request->kategori);

            $mitras = Mitra::all();
            $kategoris = KategoriGaleri::all();
            $rekomendasiGaleris = DetailProduk::where('kategori_galeri_id', '2')->orderBy('id', 'desc')->paginate(3);
            $detail_produks = $query->orderBy('id', 'desc')->get();
            $galeri = Galeri::first();
            $footer = Footer::first();
            return view('home.list_galeri', compact('detail_produks', 'query', 'galeri', 'kategoris', 'rekomendasiGaleris', 'footer', 'mitras'));
        }
    }

    public function detail_galeri($slug)
    {
        $mitras = Mitra::all();
        $detail_produk = DetailProduk::where('slug', $slug)->first();
        $foto_produks = FotoProduk::where('produk_id', $detail_produk->id)->orderBy('id', 'asc')->get();
        $sosmeds = Sosmed::where('produk_id', $detail_produk->id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriGaleri::orderByRaw("id = $detail_produk->kategori_galeri_id DESC")->get();
        $footer = Footer::first();
        return view('home.detail_galeri', compact('footer', 'detail_produk', 'foto_produks', 'sosmeds', 'kategoris', 'mitras'));
    }

    ///////////// BLOG
    public function blog()
    {
        $mitras = Mitra::all();
        $blog = Blog::first();
        $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_blogs = DetailBlog::orderBy('id', 'desc')->paginate(9);
        $footer = Footer::first();
        $kategoris = KategoriBlog::all();
        // $kategoriss = DB::table('detail_blogs')
        //     ->join('kategori_blogs', 'detail_blogs.kategori_blog_id', '=', 'kategori_blogs.id')
        //     ->select('kategori_blogs.kategori', DB::raw('count(detail_blogs.id) as total'))
        //     ->groupBy('kategori_blogs.kategori')
        //     ->get();

        // dd($kategoriss);
        return view('home.blog', compact('blog', 'footer', 'rekomendasiblogs', 'detail_blogs', 'kategoris', 'mitras'));
    }

    public function search_blog(Request $request)
    {
        $mitras = Mitra::all();
        $query = $request->input('query');
        $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        $detail_blogs = DetailBlog::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $blog = Blog::first();
        $kategoris = KategoriBlog::all();
        $footer = Footer::first();
        return view('home.blog', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiblogs', 'footer', 'mitras'));
    }

    public function filter_blog(Request $request)
    {
        $query = DetailBlog::query();

        if ($request->kategori == null) {
            return Redirect::route('blog');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_blog_id', $request->kategori);

            $mitras = Mitra::all();
            $kategoris = KategoriBlog::all();
            $rekomendasiblogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
            $detail_blogs = $query->orderBy('id', 'desc')->get();
            $blog = Blog::first();
            $footer = Footer::first();
            return view('home.list_blog', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiblogs', 'footer', 'mitras'));
        }
    }

    public function detail_blog($slug)
    {
        $mitras = Mitra::all();
        $detail_blog = DetailBlog::where('slug', $slug)->first();
        $foto_blogs = FotoBlog::where('blog_id', $detail_blog->id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriBlog::orderByRaw("id = $detail_blog->kategori_blog_id DESC")->get();
        $footer = Footer::first();
        $kategoriss = DB::table('detail_blogs')
            ->join('kategori_blogs', 'detail_blogs.kategori_blog_id', '=', 'kategori_blogs.id')
            ->select('kategori_blogs.kategori', DB::raw('count(detail_blogs.id) as total'))
            ->groupBy('kategori_blogs.kategori')
            ->get();
        return view('home.detail_blog', compact('footer', 'detail_blog', 'foto_blogs', 'kategoris', 'kategoriss', 'mitras'));
    }

    public function list_blog($kategori)
    {
        $blog = Blog::first();
        $mitras = Mitra::all();
        $kategori_terpilih = KategoriBlog::where('kategori', 'LIKE', '%' . $kategori . '%')->get();
        // dd($kategori_terpilih);
        $detail_blogs = DetailBlog::where('kategori_blog_id', $kategori_terpilih->id)->orderBy('id', 'desc')->get();
        $kategoris = KategoriBlog::all();
        // $kategoriss = DB::table('detail_blogs')
        //     ->join('kategori_blogs', 'detail_blogs.kategori_blog_id', '=', 'kategori_blogs.id')
        //     ->select('kategori_blogs.kategori', DB::raw('count(detail_blogs.id) as total'))
        //     ->groupBy('kategori_blogs.kategori')
        //     ->get();
        $footer = Footer::first();
        return view('home.list_blog', compact('blog', 'mitras', 'detail_blogs', 'kategoris', 'footer'));
    }
}

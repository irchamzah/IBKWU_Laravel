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
use App\Models\Komen;
use App\Models\Komenb;
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
        $detail_produks = DetailProduk::where('kategori_galeri_id', $detail_produk->kategori_galeri_id)->orderBy('id', 'desc')->paginate(9);
        $komen_produks = Komen::where('produk_id', $detail_produk->id)->orderBy('id', 'desc')->get();
        return view('home.detail_galeri', compact('footer', 'detail_produk', 'foto_produks', 'sosmeds', 'kategoris', 'mitras', 'detail_produks', 'komen_produks'));
    }

    public function komen_galeri_create($slug)
    {
        $mitras = Mitra::all();
        $detail_produk = DetailProduk::where('slug', $slug)->first();
        $foto_produks = FotoProduk::where('produk_id', $detail_produk->id)->orderBy('id', 'asc')->get();
        $sosmeds = Sosmed::where('produk_id', $detail_produk->id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriGaleri::orderByRaw("id = $detail_produk->kategori_galeri_id DESC")->get();
        $footer = Footer::first();
        $detail_produks = DetailProduk::where('kategori_galeri_id', $detail_produk->kategori_galeri_id)->orderBy('id', 'desc')->paginate(9);
        $komen_produks = Komen::where('produk_id', $detail_produk->id)->orderBy('id', 'asc')->get();
        return view('home.detail_galeri_komen', compact('footer', 'detail_produk', 'foto_produks', 'sosmeds', 'kategoris', 'mitras', 'detail_produks', 'komen_produks'));
    }

    public function komen_galeri_store(Request $request)
    {
        // dd($request);
        // Validasi Data
        $rules = [
            'nama_user' => 'required|string|max:255',
            'komen_user' => 'required|string|max:255',
        ];
        $message = [
            'nama_user.required' => ' Judul Tidak Boleh Kosong',
            'nama_user.string' => ' Judul Harus Berupa String',

            'komen_user.required' => ' Deskripsi Tidak Boleh Kosong',
            'komen_user.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        Komen::create([
            'produk_id' => $request->id,
            'nama_user' => $request->nama_user,
            'komen_user' => $request->komen_user,
        ]);

        $detail_produk_id = DetailProduk::where('id', $request->id)->first();
        // dd($detail_produk_id);

        return Redirect::route('galeri.detail_galeri', $detail_produk_id->slug)->with('message', 'Komentar Berhasil Ditambahkan.');
    }

    public function delete_komen_produk(Request $request)
    {
        // dd($request->produk_id);
        $komen_produk = Komen::where('id', $request->id)->first();
        $detail_produk_id = DetailProduk::where('id', $komen_produk->produk_id)->first();
        $komen_produk->delete();



        return Redirect::route('galeri.detail_galeri', $detail_produk_id->slug)->with('message', 'Komentar Berhasil Dihapus.');
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
        // dd($slug);
        $foto_blogs = FotoBlog::where('blog_id', $detail_blog->id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriBlog::orderByRaw("id = $detail_blog->kategori_blog_id DESC")->get();
        $footer = Footer::first();
        $kategoriss = DB::table('detail_blogs')
            ->join('kategori_blogs', 'detail_blogs.kategori_blog_id', '=', 'kategori_blogs.id')
            ->select('kategori_blogs.kategori', DB::raw('count(detail_blogs.id) as total'))
            ->groupBy('kategori_blogs.kategori')
            ->get();
        $detail_blogs = DetailBlog::where('kategori_blog_id', $detail_blog->kategori_blog_id)->orderBy('id', 'desc')->paginate(9);
        $komen_blogs = Komenb::where('blog_id', $detail_blog->id)->orderBy('id', 'desc')->get();
        // dd($komen_blogs);
        return view('home.detail_blog', compact('footer', 'detail_blog', 'foto_blogs', 'kategoris', 'kategoriss', 'mitras', 'detail_blogs', 'komen_blogs'));
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

    public function komen_blog_create($slug)
    {
        $mitras = Mitra::all();
        $detail_blog = DetailBlog::where('slug', $slug)->first();
        $foto_blogs = Fotoblog::where('blog_id', $detail_blog->id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriBlog::orderByRaw("id = $detail_blog->kategori_blog_id DESC")->get();
        $footer = Footer::first();
        $kategoriss = DB::table('detail_blogs')
            ->join('kategori_blogs', 'detail_blogs.kategori_blog_id', '=', 'kategori_blogs.id')
            ->select('kategori_blogs.kategori', DB::raw('count(detail_blogs.id) as total'))
            ->groupBy('kategori_blogs.kategori')
            ->get();
        $detail_blogs = DetailBlog::where('kategori_blog_id', $detail_blog->kategori_blog_id)->orderBy('id', 'desc')->paginate(9);
        $komen_blogs = Komenb::where('blog_id', $detail_blog->id)->orderBy('id', 'asc')->get();
        return view('home.detail_blog_komen', compact('footer', 'detail_blog', 'foto_blogs', 'kategoris', 'kategoriss', 'mitras', 'detail_blogs', 'komen_blogs'));
    }

    public function komen_blog_store(Request $request)
    {
        // dd($request);
        // Validasi Data
        $rules = [
            'nama_user' => 'required|string|max:255',
            'komen_user' => 'required|string|max:255',
        ];
        $message = [
            'nama_user.required' => ' Judul Tidak Boleh Kosong',
            'nama_user.string' => ' Judul Harus Berupa String',

            'komen_user.required' => ' Deskripsi Tidak Boleh Kosong',
            'komen_user.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        Komenb::create([
            'blog_id' => $request->id,
            'nama_user' => $request->nama_user,
            'komen_user' => $request->komen_user,
        ]);

        $detail_blog_id = DetailBlog::where('id', $request->id)->first();
        // dd($detail_blog_id);

        return Redirect::route('blog.detail_blog', $detail_blog_id->slug)->with('message', 'Komentar Berhasil Ditambahkan.');
    }

    public function delete_komen_blog(Request $request)
    {
        // dd($request->blog_id);
        $komen_blog = Komenb::where('id', $request->id)->first();
        $detail_blog_id = DetailBlog::where('id', $komen_blog->blog_id)->first();
        // dd($komen_blog);
        $komen_blog->delete();

        return Redirect::route('blog.detail_blog', $detail_blog_id->slug)->with('message', 'Komentar Berhasil Dihapus.');
    }
}

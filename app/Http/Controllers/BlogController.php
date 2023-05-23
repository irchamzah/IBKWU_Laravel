<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\DetailBlog;
use App\Models\FotoBlog;
use App\Models\KategoriBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /////////// EDIT BLOG
    public function index()
    {
        $blog = Blog::first();
        $detail_blogs = DetailBlog::orderBy('id', 'desc')->paginate(6);
        $kategoris = KategoriBlog::all();
        $rekomendasiBlogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        return view('admin.halaman.blog.index', compact('blog', 'detail_blogs', 'kategoris', 'rekomendasiBlogs'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $rules = [
            'sorotan_h1' => 'required|string|max:255',
            'blog_h1' => 'required|string|max:255',
        ];
        $message = [
            'sorotan_h1.required' => 'Tidak Boleh Kosong',
            'sorotan_h1.string' => 'Harus Berupa String',

            'blog_h1.required' => 'Tidak Boleh Kosong',
            'blog_h1.string' => 'Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        //simpan ke database blog
        $blog = Blog::where('id', $request->id)->first();
        $blog->sorotan_h1 = $request->sorotan_h1;
        $blog->blog_h1 = $request->blog_h1;
        $blog->update();

        return Redirect::route('admin.halaman.blog')->with('message', 'Halaman Blog Berhasil Diperbarui');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $detail_blogs = DetailBlog::where('judul_h1', 'LIKE', '%' . $query . '%')
            ->orWhere('deskripsi_p1', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'desc')->paginate(6);
        $blog = Blog::first();
        $kategoris = KategoriBlog::all();
        $rekomendasiBlogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
        return view('admin.halaman.blog.index', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiBlogs'));
    }

    public function filter(Request $request)
    {
        $query = DetailBlog::query();

        if ($request->kategori == null) {
            return Redirect::route('admin.halaman.blog');
        } elseif ($request->has('kategori')) {
            $query->where('kategori_blog_id', $request->kategori);

            $kategoris = KategoriBlog::all();
            $detail_blogs = $query->orderBy('id', 'desc')->paginate(6);
            $blog = Blog::first();
            $rekomendasiBlogs = DetailBlog::where('kategori_blog_id', '2')->orderBy('id', 'desc')->paginate(3);
            return view('admin.halaman.blog.blog_list', compact('detail_blogs', 'query', 'blog', 'kategoris', 'rekomendasiBlogs'));
        }
    }

    /////////// KATEGORI BLOG
    public function show_kategori_blog()
    {
        $kategoris = KategoriBlog::all();
        return view('admin.halaman.blog.show_kategori', compact('kategoris'));
    }

    public function tambah_kategori_blog()
    {
        return view('admin.halaman.blog.tambah_kategori');
    }

    public function store_kategori_blog(Request $request)
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

        KategoriBlog::create([
            'kategori' => $request->kategori,
        ]);

        return Redirect::route('admin.halaman.blog.show_kategori')->with('message', 'Kategori Berhasil Ditambahkan.');
    }

    public function edit_kategori_blog($id)
    {


        $kategori_blog = KategoriBlog::whereId($id)->first();

        if ($kategori_blog->id == '1') {
            return back()->withErrors(['Kategori "Tidak Ada" tidak boleh diedit']);
        } elseif ($kategori_blog->id == '2') {
            return back()->withErrors(['Kategori "Sorotan" tidak boleh diedit']);
        } elseif ($kategori_blog->id == '3') {
            return back()->withErrors(['Kategori "Layanan" tidak boleh diedit']);
        } elseif ($kategori_blog->id == '4') {
            return back()->withErrors(['Kategori "Program Kegiatan" tidak boleh diedit']);
        } elseif ($kategori_blog->id == '5') {
            return back()->withErrors(['Kategori "Berita" tidak boleh diedit']);
        } elseif ($kategori_blog->id == '7') {
            return back()->withErrors(['Kategori "Pengumuman" tidak boleh diedit']);
        }

        return view('admin.halaman.blog.edit_kategori', compact('kategori_blog'));
    }

    public function update_kategori_blog(Request $request)
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
        $kategori_blog = KategoriBlog::where('id', $request->id)->first();
        $kategori_blog->kategori = $request->kategori;
        $kategori_blog->update();

        return Redirect::route('admin.halaman.blog.show_kategori.edit_kategori', $kategori_blog->id)->with('message', 'Kategori Blog Berhasil Diperbarui.');
    }

    public function delete_kategori_blog(Request $request)
    {
        $kategori_blog = KategoriBlog::where('id', $request->id)->first();
        if ($kategori_blog->id == '1') {
            return back()->withErrors(['Kategori "Tidak Ada" tidak boleh dihapus']);
        } elseif ($kategori_blog->id == '2') {
            return back()->withErrors(['Kategori "Sorotan" tidak boleh dihapus']);
        } elseif ($kategori_blog->id == '3') {
            return back()->withErrors(['Kategori "Layanan" tidak boleh dihapus']);
        } elseif ($kategori_blog->id == '4') {
            return back()->withErrors(['Kategori "Program Kegiatan" tidak boleh dihapus']);
        } elseif ($kategori_blog->id == '5') {
            return back()->withErrors(['Kategori "Berita" tidak boleh dihapus']);
        } elseif ($kategori_blog->id == '7') {
            return back()->withErrors(['Kategori "Pengumuman" tidak boleh dihapus']);
        }
        $kategori_blog->delete();

        return Redirect::route('admin.halaman.blog.show_kategori', $kategori_blog->blog_id)->with('message', 'Kategori Blog Berhasil Dihapus.');
    }



    /////////// DETAIL BLOG
    public function tambah_blog()
    {
        $kategoris = KategoriBlog::all();
        return view('admin.halaman.blog.create', compact('kategoris'));
    }

    public function store_blog(Request $request)
    {
        // Validasi Data
        $rules = [
            'judul_h1' => 'required|string|unique:detail_blogs|max:255',
            'detail_blog_img' => 'required', 'max:5000|mimes:jpeg,png,jpg,svg',
            'link_yt' => 'required|string|max:255',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.unique' => 'Judul tidak boleh sama dengan judul post lain',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'detail_blog_img.required' => ' Foto Tidak Boleh Kosong',
            'detail_blog_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_blog_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'deskripsi_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'deskripsi_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        $fileName = date('Ymd') . time() . '.' . $request->detail_blog_img->extension();
        $request->file('detail_blog_img')->move(public_path('img/detail_blog'), $fileName);
        DetailBlog::create([
            'detail_blog_img' => $fileName,
            'judul_h1' => $request->judul_h1,
            'slug' => Str::slug($request->judul_h1, '-'),
            'link_yt' => $request->link_yt,
            'deskripsi_p1' => $request->deskripsi_p1,
            'kategori_blog_id' => $request->kategori,
        ]);

        $detail_blog = DetailBlog::latest()->first();
        return Redirect::route('admin.halaman.blog.edit_blog', $detail_blog->id)->with('message', 'Blog Berhasil Dibuat.');
    }

    public function edit_blog($id)
    {

        $detail_blog = DetailBlog::whereId($id)->first();
        $foto_blogs = FotoBlog::where('blog_id', $id)->orderBy('id', 'asc')->get();
        $kategoris = KategoriBlog::orderByRaw("id = $detail_blog->kategori_blog_id DESC")->get();
        return view('admin.halaman.blog.edit', compact('detail_blog', 'foto_blogs', 'kategoris'));
    }

    public function update_blog(Request $request)
    {
        // Validasi Data
        $rules = [
            'detail_blog_img' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'judul_h1' => 'required|string|max:255',
            'link_yt' => 'required|string|max:255',
            'deskripsi_p1' => 'required', 'string',
        ];
        $message = [
            'detail_blog_img.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'detail_blog_img.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'judul_h1.required' => ' Judul Tidak Boleh Kosong',
            'judul_h1.string' => ' Judul Harus Berupa String',

            'link_yt.required' => ' Link Tidak Boleh Kosong',
            'link_yt.string' => ' Link Harus Berupa String',

            'deskripsi_p1.required' => ' Deskripsi Tidak Boleh Kosong',
            'deskripsi_p1.string' => ' Deskripsi Harus Berupa String',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database blog
        $detail_blog = DetailBlog::where('id', $request->id)->first();
        if (!empty($request->detail_blog_img)) {
            if (\File::exists(public_path('img/detail_blog/') . $detail_blog->detail_blog_img)) {
                \File::delete(public_path('img/detail_blog/') . $detail_blog->detail_blog_img);
            }
            $fileName = date('Ymd') . time() . '.' . $request->detail_blog_img->extension();
            $request->file('detail_blog_img')->move(public_path('img/detail_blog'), $fileName);
            $detail_blog->detail_blog_img = $fileName;
        }
        $detail_blog->judul_h1 = $request->judul_h1;
        $detail_blog->slug = Str::slug($request->judul_h1, '-');
        $detail_blog->link_yt = $request->link_yt;
        $detail_blog->deskripsi_p1 = $request->deskripsi_p1;
        $detail_blog->kategori_blog_id = $request->kategori;
        $detail_blog->update();

        return Redirect::route('admin.halaman.blog.edit_blog', $detail_blog->id)->with('message', 'Blog Berhasil Diperbarui');
    }

    public function delete_blog(Request $request)
    {
        $detail_blog = DetailBlog::where('id', $request->id)->first();
        if (\File::exists(public_path('img/detail_blog/') . $detail_blog->detail_blog_img)) {
            \File::delete(public_path('img/detail_blog/') . $detail_blog->detail_blog_img);
        }
        $detail_blog->delete();

        return Redirect::route('admin.halaman.blog')->with('message', 'Blog Berhasil Dihapus');
    }


    /////////// FOTO BLOG
    public function tambah_foto_blog($id)
    {
        return view('admin.halaman.blog.tambah_foto', compact('id'));
    }

    public function store_foto_blog(Request $request)
    {
        // Validasi Data
        $rules = [
            'blog_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'blog_h1' => 'max:255',
        ];
        $message = [
            'blog_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'blog_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'blog_h1.max' => ' Judul Tidak Boleh Lebih Dari 255 Karakter',
        ];
        $this->validate($request, $rules, $message);

        $fileName = date('Ymd') . time() . '.' . $request->blog_img1->extension();
        $request->file('blog_img1')->move(public_path('img/foto_blog'), $fileName);
        FotoBlog::create([
            'blog_id' => $request->blog_id,
            'blog_img1' => $fileName,
            'blog_h1' => $request->blog_h1,
            'blog_p1' => $request->blog_p1,
        ]);

        return Redirect::route('admin.halaman.blog.edit_blog', $request->blog_id)->with('message', 'Foto Blog Berhasil Ditambahkan.');
    }

    public function edit_foto_blog($id)
    {
        $foto_blog = FotoBlog::whereId($id)->first();
        return view('admin.halaman.blog.edit_foto', compact('foto_blog'));
    }

    public function update_foto_blog(Request $request)
    {
        // Validasi Data
        $rules = [
            'blog_img1' => 'max:5000|mimes:jpeg,png,jpg,svg',
            'blog_h1' => 'max:255',
        ];
        $message = [
            'blog_img1.max' => ' Ukuran File Tidak Boleh Lebih Dari 5 MB',
            'blog_img1.mimes' => ' File Format Harus jpeg,png,jpg,svg',

            'blog_h1.max' => ' Judul Tidak Boleh Lebih Dari 255 Karakter',
        ];
        $this->validate($request, $rules, $message);

        // Simpan ke database Mitra
        $foto_blog = FotoBlog::where('id', $request->id)->first();
        if (!empty($request->blog_img1)) {
            if (\File::exists(public_path('img/foto_blog/') . $foto_blog->blog_img1)) {
                \File::delete(public_path('img/foto_blog/') . $foto_blog->blog_img1);
            }
            $fileName = date('Ymd') . time() . '.' . $request->blog_img1->extension();
            $request->file('blog_img1')->move(public_path('img/foto_blog'), $fileName);
            $foto_blog->blog_img1 = $fileName;
        }
        $foto_blog->blog_h1 = $request->blog_h1;
        $foto_blog->blog_p1 = $request->blog_p1;
        $foto_blog->update();

        return Redirect::route('admin.halaman.blog.edit_blog.edit_foto', $foto_blog->id)->with('message', 'Foto Blog Berhasil Diperbarui.');
    }

    public function delete_foto_blog(Request $request)
    {
        $foto_blog = FotoBlog::where('id', $request->id)->first();
        if (\File::exists(public_path('img/foto_blog/') . $foto_blog->blog_img1)) {
            \File::delete(public_path('img/foto_blog/') . $foto_blog->blog_img1);
        }
        $foto_blog->delete();

        return Redirect::route('admin.halaman.blog.edit_blog', $foto_blog->blog_id)->with('message', 'Foto Blog Berhasil Dihapus.');
    }
}

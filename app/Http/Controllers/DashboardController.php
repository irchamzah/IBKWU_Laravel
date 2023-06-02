<?php

namespace App\Http\Controllers;

use App\Models\DetailBlog;
use App\Models\DetailProduk;
use App\Models\Komen;
use App\Models\Komenb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalProduk = DetailProduk::count();
        $totalBlog = DetailBlog::count();
        $komens = DB::table('komens')
            ->join('detail_produks', 'komens.produk_id', '=', 'detail_produks.id')
            ->select('komens.*', 'detail_produks.slug as post_slug')
            ->orderBy('id', 'desc')->paginate(10);
        $komenbs = DB::table('komenbs')
            ->join('detail_blogs', 'komenbs.blog_id', '=', 'detail_blogs.id')
            ->select('komenbs.*', 'detail_blogs.slug as post_slug')
            ->orderBy('id', 'desc')->paginate(10);
        return view('admin.dashboard', compact('totalUser', 'totalProduk', 'totalBlog', 'komens', 'komenbs'));
    }
}

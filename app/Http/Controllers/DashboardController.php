<?php

namespace App\Http\Controllers;

use App\Models\DetailBlog;
use App\Models\DetailProduk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalProduk = DetailProduk::count();
        $totalBlog = DetailBlog::count();
        return view('admin.dashboard', compact('totalUser', 'totalProduk', 'totalBlog'));
    }
}

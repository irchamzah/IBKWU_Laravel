<?php

namespace Database\Seeders;

use App\Models\FotoProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FotoProduk::create([
            'produk_id' => 1,
            'produk_img1' => 'MusaeChips-1.jpg',
            'produk_h1' => 'Tips Belajar Programming 1',
            'produk_p1' => 'ini Deskripsi foto 1'
        ]);

        FotoProduk::create([
            'produk_id' => 1,
            'produk_img1' => 'MusaeChips-2.jpg',
            'produk_h1' => 'Review Keyboard GMMK Pro 2',
            'produk_p1' => 'ini Deskripsi foto 2'
        ]);

        FotoProduk::create([
            'produk_id' => 2,
            'produk_img1' => 'MusaeChips-1.jpg',
            'produk_h1' => 'Tips Belajar Programming 3',
            'produk_p1' => 'ini Deskripsi foto 3'
        ]);

        FotoProduk::create([
            'produk_id' => 2,
            'produk_img1' => 'MusaeChips-2.jpg',
            'produk_h1' => 'Review Keyboard GMMK Pro 4',
            'produk_p1' => 'ini Deskripsi foto 4'
        ]);

        FotoProduk::create([
            'produk_id' => 3,
            'produk_img1' => 'MusaeChips-1.jpg',
            'produk_h1' => 'Tips Belajar Programming 5',
            'produk_p1' => 'ini Deskripsi foto 5'
        ]);

        FotoProduk::create([
            'produk_id' => 3,
            'produk_img1' => 'MusaeChips-2.jpg',
            'produk_h1' => 'Review Keyboard GMMK Pro 6',
            'produk_p1' => 'ini Deskripsi foto 6'
        ]);
    }
}

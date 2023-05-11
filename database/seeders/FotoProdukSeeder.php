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
            'produk_img1' => 'RedVelvet-1.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 1,
            'produk_img1' => 'RedVelvet-2.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 2,
            'produk_img1' => 'MusaeChips-1.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 2,
            'produk_img1' => 'MusaeChips-2.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 3,
            'produk_img1' => 'macarina-1.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 3,
            'produk_img1' => 'macarina-2.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 4,
            'produk_img1' => 'GT-BumbuHerbal-1.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 4,
            'produk_img1' => 'GT-BumbuHerbal-2.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 5,
            'produk_img1' => 'GT-Samber Mbegor.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);

        FotoProduk::create([
            'produk_id' => 5,
            'produk_img1' => 'GT-Samber Mbegor2.jpg',
            'produk_h1' => '',
            'produk_p1' => ''
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeri::create([
            'sorotan_h1' => 'Sorotan Galeri Tenant',
            'sorotan_h2' => 'Sorotan Produk',
            'sorotan_p1' => 'Berikut adalah tenant yang direkomendasikan.',
            'galeri_h1' => 'Galeri Tenant',
            'galeri_h2' => 'Produk yang Tersedia',
            'galeri_p1'  => 'Berikut Semua Produk yang Tersedia.'
        ]);
    }
}

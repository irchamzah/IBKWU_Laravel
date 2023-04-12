<?php

namespace Database\Seeders;

use App\Models\KategoriGaleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriGaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriGaleri::create([
            'kategori' => 'Tidak Ada'
        ]);

        KategoriGaleri::create([
            'kategori' => 'Rekomendasi'
        ]);
    }
}

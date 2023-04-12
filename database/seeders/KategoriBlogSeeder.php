<?php

namespace Database\Seeders;

use App\Models\KategoriBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriBlog::create([
            'kategori' => 'Tidak Ada'
        ]);

        KategoriBlog::create([
            'kategori' => 'Rekomendasi'
        ]);

        KategoriBlog::create([
            'kategori' => 'IBK & PPK'
        ]);

        KategoriBlog::create([
            'kategori' => 'Layanan IBKWU'
        ]);

        KategoriBlog::create([
            'kategori' => 'Program Kegiatan'
        ]);
    }
}

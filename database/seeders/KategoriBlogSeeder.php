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
        //1
        KategoriBlog::create([
            'kategori' => 'Tidak Ada'
        ]);

        //2
        KategoriBlog::create([
            'kategori' => 'Sorotan'
        ]);

        //3
        KategoriBlog::create([
            'kategori' => 'Layanan'
        ]);

        //4
        KategoriBlog::create([
            'kategori' => 'Program Kegiatan'
        ]);

        //5
        KategoriBlog::create([
            'kategori' => 'Berita'
        ]);

        //6
        KategoriBlog::create([
            'kategori' => 'Kegiatan'
        ]);

        //7
        KategoriBlog::create([
            'kategori' => 'Pengumuman'
        ]);

        //8
        KategoriBlog::create([
            'kategori' => 'Popular'
        ]);

        //9
        KategoriBlog::create([
            'kategori' => 'Seminar dan Loka Karya'
        ]);
    }
}

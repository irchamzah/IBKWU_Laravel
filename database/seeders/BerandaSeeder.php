<?php

namespace Database\Seeders;

use App\Models\Beranda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beranda::create([
            'pengumuman_h1' => 'PENGUMUMAN',
            'ig_h1' => 'TEMUI KAMI DI INSTAGRAM',
            'link_ig' => 'Ck3kfIPPEVS',
            'yt_h1' => 'TEMUI KAMI DI YOUTUBE',
            'link_yt' => 's9AtzO8r1WI',
            'berita_h1' => 'BERITA TERBARU',
            'galeri_h1' => 'GALERI TENANT',
            'lokasi_h1' => 'LOKASI KANTOR'
        ]);
    }
}

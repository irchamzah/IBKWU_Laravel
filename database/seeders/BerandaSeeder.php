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
            'home_h1' => '',
            'home_p1' => '',
            'home_img1' => '',
            'about_h1' => '',
            'about_h2' => '',
            'about_p1' => '',
            'about_h3' => '',
            'about_p2' => '',
            'galeri_h1' => 'Galeri Tenant',
            'galeri_h2' => 'Sub Judul',
            'galeri_p1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat adipisci qui dolores similique harum odit in molestiae quaerat laboriosam voluptate?',
            'mitra_h1' => 'Mitra Kami',
            'mitra_h2' => 'Yang Pernah Bekerjasama',
            'mitra_p1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nulla adipisci! Voluptates!',
            'blog_h1' => 'Blog',
            'blog_h2' => '',
            'blog_p1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minus cupiditate sed dolorem.',
            'kontak_h1' => 'Kontak',
            'kontak_h2' => 'Hubungi Kami',
            'kontak_p1'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, provident!'
        ]);
    }
}

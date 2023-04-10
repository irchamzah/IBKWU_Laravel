<?php

namespace Database\Seeders;

use App\Models\Sosmed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sosmed::create([
            'nama_sosmed' => 'Youtube',
            'link_sosmed' => 'https://www.youtube.com/',
            'warna_id' => '3',
            'produk_id' => '1'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'instagram',
            'link_sosmed' => 'https://www.instagram.com/',
            'warna_id' => '4',
            'produk_id' => '1'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Twitter',
            'link_sosmed' => 'https://twitter.com/',
            'warna_id' => '5',
            'produk_id' => '1'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'LinkedIn',
            'link_sosmed' => 'https://www.linkedin.com/',
            'warna_id' => '9',
            'produk_id' => '1'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'Youtube',
            'link_sosmed' => 'https://www.youtube.com/',
            'warna_id' => '3',
            'produk_id' => '2'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'instagram',
            'link_sosmed' => 'https://www.instagram.com/',
            'warna_id' => '4',
            'produk_id' => '2'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Twitter',
            'link_sosmed' => 'https://twitter.com/',
            'warna_id' => '5',
            'produk_id' => '2'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'LinkedIn',
            'link_sosmed' => 'https://www.linkedin.com/',
            'warna_id' => '9',
            'produk_id' => '2'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'Youtube',
            'link_sosmed' => 'https://www.youtube.com/',
            'warna_id' => '3',
            'produk_id' => '3'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'instagram',
            'link_sosmed' => 'https://www.instagram.com/',
            'warna_id' => '4',
            'produk_id' => '3'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Twitter',
            'link_sosmed' => 'https://twitter.com/',
            'warna_id' => '5',
            'produk_id' => '3'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'LinkedIn',
            'link_sosmed' => 'https://www.linkedin.com/',
            'warna_id' => '9',
            'produk_id' => '3'
        ]);
    }
}

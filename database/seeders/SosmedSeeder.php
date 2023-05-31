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
            'nama_sosmed' => 'Instagram',
            'link_sosmed' => 'https://www.instagram.com/rvsccookies.id/',
            'warna_id' => '9',
            'produk_id' => '1'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Email',
            'link_sosmed' => 'mailto:rvsccookies@gmail.com',
            'warna_id' => '6',
            'produk_id' => '1'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp',
            'link_sosmed' => 'https://wa.me/082245896948',
            'warna_id' => '5',
            'produk_id' => '1'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp',
            'link_sosmed' => 'https://wa.me/+6285804211994',
            'warna_id' => '5',
            'produk_id' => '2'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Email',
            'link_sosmed' => 'mailto:musaechips@gmail.com',
            'warna_id' => '4',
            'produk_id' => '2'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Website',
            'link_sosmed' => 'http://www.musaechips.com',
            'warna_id' => '8',
            'produk_id' => '2'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp',
            'link_sosmed' => 'https://wa.me/+6281217757777',
            'warna_id' => '5',
            'produk_id' => '3'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Email',
            'link_sosmed' => 'mailto:helmiceo@macarina.id',
            'warna_id' => '6',
            'produk_id' => '3'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp',
            'link_sosmed' => 'https://wa.me/8508089',
            'warna_id' => '5',
            'produk_id' => '4'
        ]);

        //

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp 1',
            'link_sosmed' => 'https://wa.me/+6285101747899',
            'warna_id' => '5',
            'produk_id' => '5'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'WhatsApp 2',
            'link_sosmed' => 'https://wa.me/+6289639099000',
            'warna_id' => '5',
            'produk_id' => '5'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Email',
            'link_sosmed' => 'mailto:sambel.mbegor@gmail.com',
            'warna_id' => '3',
            'produk_id' => '5'
        ]);

        Sosmed::create([
            'nama_sosmed' => 'Instagram',
            'link_sosmed' => 'https://www.instagram.com/sambal.mbegor/',
            'warna_id' => '9',
            'produk_id' => '5'
        ]);
    }
}

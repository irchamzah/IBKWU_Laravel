<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'address' => 'Inkubator Bisnis dan Kewirausahaan, Gedung Pasca Sarjana Politeknik Negeri Jember',
            'address_2' => 'Jl. Mastrip, Kotak Pos 164 – Tegalgede, Sumbersari, Kabupaten Jember, Jawa Timur 68124',
            'phone' => '(0331) 333 532',
            'phone_2' => '085 204 980 161 (Hariono Rakhmat)',
            'link_1' => 'https://polije.ac.id/',
            'link_2' => '',
            'link_3' => '',
            'link_4' => ''
        ]);
    }
}

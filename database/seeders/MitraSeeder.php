<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mitra::create([
            'mitra_img' => 'aibi.png',
            'mitra_link' => 'https://aibinetwork.com/'
        ]);

        Mitra::create([
            'mitra_img' => 'apo_64.png',
            'mitra_link' => 'https://www.apo-tokyo.org/'
        ]);

        Mitra::create([
            'mitra_img' => 'bekraf_64.png',
            'mitra_link' => 'https://bekraf.wordpress.com/'
        ]);

        Mitra::create([
            'mitra_img' => 'bi_64.png',
            'mitra_link' => 'https://www.bi.go.id/id/default.aspx'
        ]);

        Mitra::create([
            'mitra_img' => 'cpc_64.png',
            'mitra_link' => 'https://www.cpc.org.tw/en-us'
        ]);

        Mitra::create([
            'mitra_img' => 'p4s_64.png',
            'mitra_link' => 'http://distani.tulangbawangkab.go.id/news/read/4436/peran-p4s-dalam-meningkatkan-sdm-pertanian'
        ]);

        Mitra::create([
            'mitra_img' => 'pnm_64.png',
            'mitra_link' => 'https://www.pnm.co.id/'
        ]);

        Mitra::create([
            'mitra_img' => 'ristekdikti_64.png',
            'mitra_link' => 'https://pddikti.kemdikbud.go.id/'
        ]);

        Mitra::create([
            'mitra_img' => 'shell_64.png',
            'mitra_link' => 'https://www.shell.co.id/'
        ]);

        Mitra::create([
            'mitra_img' => 'ubc_64.png',
            'mitra_link' => 'https://www.crunchbase.com/organization/entrepreneurship-ubc-seed-fund'
        ]);
    }
}

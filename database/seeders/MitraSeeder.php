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
            'mitra_img' => 'gojek.svg',
            'mitra_link' => 'https://www.gojek.com/id-id/'
        ]);

        Mitra::create([
            'mitra_img' => 'google.svg',
            'mitra_link' => 'https://www.google.com/?hl=id'
        ]);

        Mitra::create([
            'mitra_img' => 'tokopedia.svg',
            'mitra_link' => 'https://www.tokopedia.com/'
        ]);

        Mitra::create([
            'mitra_img' => 'traveloka.svg',
            'mitra_link' => 'https://www.traveloka.com/en-id/'
        ]);
    }
}

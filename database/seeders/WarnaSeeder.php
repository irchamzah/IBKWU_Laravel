<?php

namespace Database\Seeders;

use App\Models\Warna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warna::create([
            'nama_warna' => 'slate'
        ]);

        Warna::create([
            'nama_warna' => 'gray'
        ]);

        Warna::create([
            'nama_warna' => 'red'
        ]);

        Warna::create([
            'nama_warna' => 'yellow'
        ]);

        Warna::create([
            'nama_warna' => 'green'
        ]);

        Warna::create([
            'nama_warna' => 'blue'
        ]);

        Warna::create([
            'nama_warna' => 'indigo'
        ]);

        Warna::create([
            'nama_warna' => 'purple'
        ]);

        Warna::create([
            'nama_warna' => 'pink'
        ]);
    }
}

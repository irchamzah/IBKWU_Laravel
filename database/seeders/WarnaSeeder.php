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
        //1
        Warna::create([
            'nama_warna' => 'slate'
        ]);

        //2
        Warna::create([
            'nama_warna' => 'gray'
        ]);

        //3
        Warna::create([
            'nama_warna' => 'red'
        ]);

        //4
        Warna::create([
            'nama_warna' => 'yellow'
        ]);

        //5
        Warna::create([
            'nama_warna' => 'green'
        ]);

        //6
        Warna::create([
            'nama_warna' => 'blue'
        ]);

        //7
        Warna::create([
            'nama_warna' => 'indigo'
        ]);

        //8
        Warna::create([
            'nama_warna' => 'purple'
        ]);

        //9
        Warna::create([
            'nama_warna' => 'pink'
        ]);
    }
}

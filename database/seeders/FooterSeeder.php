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
            'phone' => '(0331)333532,333533',
            'email' => 'politeknik @polije.ac.id',
            'address' => 'Mastrip POBOX 164 Jember',
            'yt_link' => 'https://youtube.com/ibkwu',
            'ig_link' => 'https://instagram.com/ibkwu',
            'twt_link' => 'https://twitter.com/ibkwu',
            'li_link' => 'https://linkedin.com/in/ibkwu'
        ]);
    }
}

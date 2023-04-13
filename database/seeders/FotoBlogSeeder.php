<?php

namespace Database\Seeders;

use App\Models\FotoBlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FotoBlog::create([
            'blog_id' => 1,
            'blog_img1' => 'MusaeChips-1.jpg',
            'blog_h1' => 'Tips Belajar Programming 1',
            'blog_p1' => 'ini Deskripsi foto 1'
        ]);

        FotoBlog::create([
            'blog_id' => 1,
            'blog_img1' => 'MusaeChips-2.jpg',
            'blog_h1' => 'Review Keyboard GMMK Pro 2',
            'blog_p1' => 'ini Deskripsi foto 2'
        ]);

        FotoBlog::create([
            'blog_id' => 2,
            'blog_img1' => 'MusaeChips-1.jpg',
            'blog_h1' => 'Tips Belajar Programming 3',
            'blog_p1' => 'ini Deskripsi foto 3'
        ]);

        FotoBlog::create([
            'blog_id' => 2,
            'blog_img1' => 'MusaeChips-2.jpg',
            'blog_h1' => 'Review Keyboard GMMK Pro 4',
            'blog_p1' => 'ini Deskripsi foto 4'
        ]);

        FotoBlog::create([
            'blog_id' => 3,
            'blog_img1' => 'MusaeChips-1.jpg',
            'blog_h1' => 'Tips Belajar Programming 5',
            'blog_p1' => 'ini Deskripsi foto 5'
        ]);

        FotoBlog::create([
            'blog_id' => 3,
            'blog_img1' => 'MusaeChips-2.jpg',
            'blog_h1' => 'Review Keyboard GMMK Pro 6',
            'blog_p1' => 'ini Deskripsi foto 6'
        ]);
    }
}

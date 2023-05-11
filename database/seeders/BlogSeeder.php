<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'sorotan_h1' => 'Sorotan Blog Tenant',
            'sorotan_h2' => 'Sorotan Post',
            'sorotan_p1' => 'Berikut adalah tenant yang direkomendasikan.',
            'blog_h1' => 'Blog Tenant',
            'blog_h2' => 'Post yang Tersedia',
            'blog_p1'  => 'Berikut Semua Produk yang Tersedia.'
        ]);
    }
}

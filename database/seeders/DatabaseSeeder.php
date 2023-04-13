<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BerandaSeeder::class);
        $this->call(MitraSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(GaleriSeeder::class);
        $this->call(DetailProdukSeeder::class);
        $this->call(FotoProdukSeeder::class);
        $this->call(SosmedSeeder::class);
        $this->call(WarnaSeeder::class);
        $this->call(KategoriGaleriSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(DetailBlogSeeder::class);
        $this->call(FotoBlogSeeder::class);
        $this->call(KategoriBlogSeeder::class);
        $this->call(FooterSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\DetailProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailProduk::create([
            'detail_produk_img' => 'MusaeChips-1.jpg',
            'judul_h1' => 'Judul Produk 1',
            'link_yt' => 'FLGCGc7sAUw',
            'deskripsi_p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a lacus efficitur urna commodo imperdiet et sit amet ex. Nulla rutrum lorem nibh, quis egestas tellus faucibus sit amet. Nullam varius mollis nulla, ac elementum augue gravida at. Mauris faucibus eleifend ante, dictum feugiat ligula scelerisque eget. Etiam eu porttitor tellus, non vestibulum sapien. Mauris mollis nisi et purus congue vehicula. Suspendisse volutpat nibh sed dapibus ullamcorper. Nam at cursus velit. Vivamus auctor iaculis ex, mollis efficitur nulla tincidunt sit amet. Pellentesque at laoreet purus, ut semper quam. Proin quis congue tellus, et imperdiet quam. Quisque commodo nisi non justo lobortis, vitae tempor sapien vulputate. Fusce lacus sapien, consequat varius tortor et, consectetur consequat magna. Aenean gravida vulputate augue, at condimentum ante auctor sagittis. Aliquam tristique, lorem ut vulputate mollis, metus est efficitur quam, nec fringilla dui tortor eget mauris. Pellentesque semper nunc vitae justo sodales porta.'
        ]);

        DetailProduk::create([
            'detail_produk_img' => 'MusaeChips-2.jpg',
            'judul_h1' => 'Judul Produk 2',
            'link_yt' => 'PEM0Vs8jf1w',
            'deskripsi_p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a lacus efficitur urna commodo imperdiet et sit amet ex. Nulla rutrum lorem nibh, quis egestas tellus faucibus sit amet. Nullam varius mollis nulla, ac elementum augue gravida at. Mauris faucibus eleifend ante, dictum feugiat ligula scelerisque eget. Etiam eu porttitor tellus, non vestibulum sapien. Mauris mollis nisi et purus congue vehicula. Suspendisse volutpat nibh sed dapibus ullamcorper. Nam at cursus velit. Vivamus auctor iaculis ex, mollis efficitur nulla tincidunt sit amet. Pellentesque at laoreet purus, ut semper quam. Proin quis congue tellus, et imperdiet quam. Quisque commodo nisi non justo lobortis, vitae tempor sapien vulputate. Fusce lacus sapien, consequat varius tortor et, consectetur consequat magna. Aenean gravida vulputate augue, at condimentum ante auctor sagittis. Aliquam tristique, lorem ut vulputate mollis, metus est efficitur quam, nec fringilla dui tortor eget mauris. Pellentesque semper nunc vitae justo sodales porta.'
        ]);

        DetailProduk::create([
            'detail_produk_img' => 'macarina-1.jpg',
            'judul_h1' => 'Judul Produk 3',
            'link_yt' => 'kagoEGKHZvU',
            'deskripsi_p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a lacus efficitur urna commodo imperdiet et sit amet ex. Nulla rutrum lorem nibh, quis egestas tellus faucibus sit amet. Nullam varius mollis nulla, ac elementum augue gravida at. Mauris faucibus eleifend ante, dictum feugiat ligula scelerisque eget. Etiam eu porttitor tellus, non vestibulum sapien. Mauris mollis nisi et purus congue vehicula. Suspendisse volutpat nibh sed dapibus ullamcorper. Nam at cursus velit. Vivamus auctor iaculis ex, mollis efficitur nulla tincidunt sit amet. Pellentesque at laoreet purus, ut semper quam. Proin quis congue tellus, et imperdiet quam. Quisque commodo nisi non justo lobortis, vitae tempor sapien vulputate. Fusce lacus sapien, consequat varius tortor et, consectetur consequat magna. Aenean gravida vulputate augue, at condimentum ante auctor sagittis. Aliquam tristique, lorem ut vulputate mollis, metus est efficitur quam, nec fringilla dui tortor eget mauris. Pellentesque semper nunc vitae justo sodales porta.'
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berandas', function (Blueprint $table) {
            $table->id();
            $table->string('home_h1');
            $table->text('home_p1');
            $table->string('home_img1')->default('');
            $table->string('about_h1');
            $table->string('about_h2');
            $table->text('about_p1');
            $table->string('about_h3');
            $table->text('about_p2');
            $table->string('galeri_h1');
            $table->string('galeri_h2');
            $table->text('galeri_p1');
            $table->string('mitra_h1');
            $table->string('mitra_h2');
            $table->text('mitra_p1');
            $table->string('blog_h1');
            $table->string('blog_h2');
            $table->text('blog_p1');
            $table->string('kontak_h1');
            $table->string('kontak_h2');
            $table->text('kontak_p1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berandas');
    }
};

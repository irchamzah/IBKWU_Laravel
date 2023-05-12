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
            $table->string('pengumuman_h1');
            $table->string('ig_h1');
            $table->string('link_ig');
            $table->string('yt_h1');
            $table->string('link_yt');
            $table->string('berita_h1');
            $table->string('galeri_h1');
            $table->string('lokasi_h1');
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

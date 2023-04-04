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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('tentang_h1');
            $table->string('tentang_h2');
            $table->text('tentang_p1');
            $table->string('tentang_img1')->default('');
            $table->string('tentang_h3');
            $table->text('tentang_p2');
            $table->string('tentang_img2')->default('');
            $table->string('tentang_h4');
            $table->text('tentang_p3');
            $table->string('visi_h1');
            $table->string('visi_h2');
            $table->text('visi_p1');
            $table->string('visi_h3');
            $table->text('visi_p2');
            $table->string('visi_h4');
            $table->text('visi_p3');
            $table->string('tujuan_h1');
            $table->string('tujuan_h2');
            $table->text('tujuan_p1');
            $table->string('tujuan_h3');
            $table->text('tujuan_p2');
            $table->string('tujuan_h4');
            $table->text('tujuan_p3');
            $table->string('struktur_h1');
            $table->string('struktur_h2');
            $table->text('struktur_p1');
            $table->text('struktur_p2');
            $table->string('struktur_img1')->default('');
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
        Schema::dropIfExists('profils');
    }
};

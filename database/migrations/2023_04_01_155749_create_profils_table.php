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
            $table->text('tentang_p1');
            $table->string('visi_h1');
            $table->string('visi_h2');
            $table->text('visi_p1');
            $table->string('visi_h3');
            $table->text('visi_p2');
            $table->string('tujuan_h1');
            $table->string('tujuan_h2');
            $table->text('tujuan_p1');
            $table->string('tujuan_h3');
            $table->text('tujuan_p2');
            $table->string('struktur_h1');
            $table->text('struktur_p1');
            $table->string('struktur_img1')->default('');
            $table->string('sdm_h1');
            $table->text('sdm_p1');
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

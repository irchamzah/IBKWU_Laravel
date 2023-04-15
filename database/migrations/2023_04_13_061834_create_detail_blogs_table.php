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
        Schema::create('detail_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('detail_blog_img')->default('');
            $table->string('judul_h1');
            $table->string('slug');
            $table->string('link_yt');
            $table->text('deskripsi_p1');
            $table->integer('kategori_blog_id');
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
        Schema::dropIfExists('detail_blogs');
    }
};

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
        Schema::create('foto_blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->string('blog_img1')->default('');
            $table->string('blog_h1')->nullable();
            $table->text('blog_p1')->nullable();
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
        Schema::dropIfExists('foto_blogs');
    }
};

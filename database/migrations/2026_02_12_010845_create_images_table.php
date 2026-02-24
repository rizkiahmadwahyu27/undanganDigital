<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_pesan')->unique();
            $table->string('slug')->unique();
            $table->string('foto_cover');
            $table->string('foto_mempelai_wanita');
            $table->string('foto_mempelai_pria');
            $table->json('gallery');
            $table->string('soundtrack');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};

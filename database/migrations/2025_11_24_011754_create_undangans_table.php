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
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();

            // Informasi mempelai
            $table->string('slug')->unique();
            $table->string('nama_pria');
            $table->string('nama_ayah_mempelai_pria')->nullable();
            $table->string('nama_ibu_mempelai_pria')->nullable();
            $table->integer('mempelai_pria_anak_ke')->nullable();

            $table->string('nama_wanita');
            $table->string('nama_ayah_mempelai_wanita')->nullable();
            $table->string('nama_ibu_mempelai_wanita')->nullable();
            $table->integer('mempelai_wanita_anak_ke')->nullable();

            // Data acara
            $table->date('tanggal_acara');
            $table->string('lokasi');
            $table->text('maps_url')->nullable();

            // Uploads
            $table->string('foto_cover')->nullable(); 

            // JSON Fields
            $table->json('gallery')->nullable();
            $table->string('video_url')->nullable();
            $table->json('rekening')->nullable();

            // Features
            $table->boolean('rsvp_enabled')->default(false);
            $table->string('template')->default('classic');

            // Sections
            $table->json('sections')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangans');
    }
};

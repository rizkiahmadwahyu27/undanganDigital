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
        Schema::create('order_undangans', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_pesan')->unique();
            $table->string('slug')->unique();
            $table->string('template');
            $table->string('nama_mempelai_wanita');
            $table->string('nama_mempelai_pria');
            $table->string('nama_ayah_pria');
            $table->string('nama_ibu_pria');
            $table->string('nama_ayah_wanita');
            $table->string('nama_ibu_wanita');
            $table->integer('pria_anak_ke');
            $table->integer('wanita_anak_ke');
            $table->dateTime('tgl_akad');
            $table->dateTime('tgl_resepsi');
            $table->string('alamat_akad');
            $table->string('alamat_resepsi');
            $table->string('maps_akad');
            $table->string('maps_resepsi');
            $table->string('alamat_kirim_hadiah');
            $table->string('nama_bank');
            $table->string('an_bank');
            $table->string('no_rek_bank');
            $table->string('nama_ewalet');
            $table->string('an_ewalet');
            $table->string('no_ewalet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_undangans');
    }
};

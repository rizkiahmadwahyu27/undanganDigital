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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesan')->unique();
            $table->string('slug')->unique();
            $table->date('tgl_stori_1');
            $table->date('tgl_stori_2');
            $table->date('tgl_stori_3');
            $table->date('tgl_stori_4');
            $table->date('tgl_stori_5');
            $table->date('tgl_stori_6');
            $table->text('story_1');
            $table->text('story_2');
            $table->text('story_3');
            $table->text('story_4');
            $table->text('story_5');
            $table->text('story_6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};

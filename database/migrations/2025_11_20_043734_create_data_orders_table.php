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
        Schema::create('data_orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('kode_template');
            $table->string('jenis_bayar');
            $table->string('bayar');
            $table->integer('id_template')->nullable();
            $table->integer('id_user_create')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_orders');
    }
};

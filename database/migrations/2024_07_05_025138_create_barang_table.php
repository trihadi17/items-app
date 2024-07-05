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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kd_barang',15)->unique();
            $table->string('barang',25);
            $table->text('deskripsi');
            $table->integer('kd_satuan');
            $table->integer('kd_klasifikasi');
            $table->integer('kd_rak');
            $table->integer('kd_gudang');
            $table->integer('stok');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};

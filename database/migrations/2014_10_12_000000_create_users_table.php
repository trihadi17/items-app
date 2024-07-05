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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('nama',50);
            $table->string('email',50)->unique();
            $table->string('password',25);
            $table->string('telepon',15);
            $table->string('alamat',100);
            $table->string('foto');
            $table->enum('status',['Aktif','Tidak Aktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan'); // [cite: 15]
            
            // Relasi
            $table->unsignedBigInteger('id_anak'); // [cite: 15]
            $table->unsignedBigInteger('id_kader'); // [cite: 15]
            $table->foreign('id_anak')->references('id_anak')->on('anak')->onDelete('cascade');
            $table->foreign('id_kader')->references('id_user')->on('users')->onDelete('cascade');
            
            $table->date('tanggal_kunjungan'); // [cite: 15]
            $table->enum('status_kunjungan', ['Selesai', 'Belum']); // [cite: 16]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
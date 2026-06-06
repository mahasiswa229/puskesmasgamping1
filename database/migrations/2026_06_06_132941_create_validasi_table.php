<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('validasi', function (Blueprint $table) {
            $table->id('id_validasi'); // [cite: 14]
            
            // Relasi
            $table->unsignedBigInteger('id_pemantauan'); // [cite: 14]
            $table->unsignedBigInteger('id_bidan'); // [cite: 14, 15]
            $table->foreign('id_pemantauan')->references('id_pemantauan')->on('pemantauan')->onDelete('cascade');
            $table->foreign('id_bidan')->references('id_user')->on('users')->onDelete('cascade');
            
            $table->enum('status_validasi', ['Lengkap', 'Tidak Lengkap']); // [cite: 15]
            $table->text('catatan_validasi')->nullable(); // [cite: 15]
            $table->date('tanggal_validasi'); // [cite: 15]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('validasi');
    }
};
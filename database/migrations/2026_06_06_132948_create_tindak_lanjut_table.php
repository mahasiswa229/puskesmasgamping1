<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tindak_lanjut', function (Blueprint $table) {
            $table->id('id_tindaklanjut'); // [cite: 15]
            
            // Relasi
            $table->unsignedBigInteger('id_pemantauan'); // [cite: 15]
            $table->unsignedBigInteger('id_bidan'); // [cite: 15]
            $table->foreign('id_pemantauan')->references('id_pemantauan')->on('pemantauan')->onDelete('cascade');
            $table->foreign('id_bidan')->references('id_user')->on('users')->onDelete('cascade');
            
            $table->text('tindakan'); // [cite: 15]
            $table->date('jadwal_kunjungan')->nullable(); // [cite: 15]
            $table->text('rujukan')->nullable(); // [cite: 15]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tindak_lanjut');
    }
};
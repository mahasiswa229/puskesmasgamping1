<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hasil_checklist', function (Blueprint $table) {
            $table->id('id_hasil'); // [cite: 14]
            
            // Relasi
            $table->unsignedBigInteger('id_pemantauan'); // [cite: 14]
            $table->unsignedBigInteger('id_checklist'); // [cite: 14]
            $table->foreign('id_pemantauan')->references('id_pemantauan')->on('pemantauan')->onDelete('cascade');
            $table->foreign('id_checklist')->references('id_checklist')->on('checklist_perkembangan')->onDelete('cascade');
            
            $table->enum('status', ['Sesuai', 'Tidak Sesuai']); // [cite: 14]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_checklist');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id('id_pemeriksaan');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_bidan')->constrained('users', 'id_user')->onDelete('cascade');
            $table->enum('hasil_pemeriksaan', ['Normal', 'Perlu Pemantauan', 'Rujuk']); // Disesuaikan untuk klinis
            $table->text('catatan')->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan');
    }
};
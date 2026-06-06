<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('masalah_perkembangan', function (Blueprint $table) {
            $table->id('id_masalah');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->string('jenis_masalah'); // cth: Stunting, Wasting, Keterlambatan Motorik
            $table->enum('status', ['Aktif', 'Teratasi']);
            $table->text('penanganan')->nullable();
            $table->enum('sumber', ['Deteksi Kader', 'Pemeriksaan Bidan']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('masalah_perkembangan');
    }
};
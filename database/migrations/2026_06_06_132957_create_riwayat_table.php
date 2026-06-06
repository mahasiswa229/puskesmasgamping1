<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id('id_riwayat'); // [cite: 15]
            
            $table->unsignedBigInteger('id_anak'); // [cite: 15]
            $table->foreign('id_anak')->references('id_anak')->on('anak')->onDelete('cascade');
            
            $table->text('aktivitas'); // [cite: 15]
            $table->date('tanggal'); // [cite: 15]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
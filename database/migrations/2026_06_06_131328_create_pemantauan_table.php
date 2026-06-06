<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pemantauan', function (Blueprint $table) {
            $table->id('id_pemantauan');
            
            // Relasi ke anak dan kader
            $table->unsignedBigInteger('id_anak');
            $table->unsignedBigInteger('id_kader');
            $table->foreign('id_anak')->references('id_anak')->on('anak')->onDelete('cascade');
            $table->foreign('id_kader')->references('id_user')->on('users')->onDelete('cascade');
            
            $table->date('tanggal_pemantauan');
            $table->enum('status_screening', ['Normal', 'Berisiko', 'Risiko Tinggi'])->nullable();
            $table->text('catatan')->nullable();
            $table->string('foto')->nullable(); // Menyimpan path file foto
            $table->double('latitude')->nullable(); // Koordinat saat pemantauan dilakukan
            $table->double('longitude')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemantauan');
    }
};
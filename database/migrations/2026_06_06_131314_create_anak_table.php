<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->id('id_anak');
            $table->string('nik')->unique()->nullable(); // Tambahan baru dari ERD
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_lahir');
            $table->string('nama_ortu');
            $table->text('kelurahan')->nullable();
            $table->string('dusun')->nullable();
            $table->string('nama_posyandu')->nullable();
            $table->string('rt', 10)->nullable();
            $table->string('rw', 10)->nullable();
            $table->string('foto')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            
            // Relasi ke tabel users (siapa yang menginput data ini)
            $table->foreignId('created_by')->nullable()->constrained('users', 'id_user')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
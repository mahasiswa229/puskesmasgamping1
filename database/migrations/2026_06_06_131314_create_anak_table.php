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
            $table->string('nik', 16)->unique();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('nama_ortu');
            $table->text('alamat');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            
            // Relasi ke tabel users (Kader yang menginput)
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id_user')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
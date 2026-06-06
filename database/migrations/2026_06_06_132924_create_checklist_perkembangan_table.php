<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('checklist_perkembangan', function (Blueprint $table) {
            $table->id('id_checklist'); // [cite: 14]
            $table->integer('usia_bulan'); // [cite: 14]
            $table->text('indikator'); // [cite: 14]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('checklist_perkembangan');
    }
};
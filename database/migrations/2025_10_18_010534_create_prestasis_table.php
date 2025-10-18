<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('tempat');
            $table->string('tingkat'); // Sekolah, Kecamatan, Kabupaten, Provinsi, Nasional, Internasional
            $table->date('tanggal');
            $table->string('juara'); // Juara 1, Juara 2, Juara 3, Harapan 1, dll.
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
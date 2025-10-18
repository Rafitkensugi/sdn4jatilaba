<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip', 20)->unique();
            $table->string('jabatan', 100);
            $table->string('foto')->nullable();
            $table->string('bidang_studi', 100);
            $table->date('aktif_sejak');
            $table->enum('status', ['PNS', 'Honorer']);
            $table->string('domisili');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
            
            // Index untuk performa
            $table->index('status');
            $table->index('jabatan');
            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
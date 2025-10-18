<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('artikels', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penulis')->default('Admin SDN 4 Jatilaba');
        $table->text('isi');
        $table->string('gambar')->nullable();
        $table->date('tanggal')->default(now());
        $table->unsignedBigInteger('views')->default(0);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
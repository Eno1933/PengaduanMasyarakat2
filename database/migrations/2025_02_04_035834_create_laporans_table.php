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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->unsignedBigInteger('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduans')->onDelete('cascade');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('administrators')->onDelete('cascade');
            $table->date('tgl_generate');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};

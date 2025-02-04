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
        Schema::create('bukti_pendukungs', function (Blueprint $table) {
            $table->id('id_bukti');
            $table->unsignedBigInteger('id_pengaduan');
            $table->foreign('id_pengaduan')->references('id_pengaduan')->on('pengaduans')->onDelete('cascade');
            $table->string('foto', 255);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukti_pendukungs');
    }
};

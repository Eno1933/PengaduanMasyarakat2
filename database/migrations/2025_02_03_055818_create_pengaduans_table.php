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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->date('tgl_pengaduan');
            $table->char('nik', 16);
            $table->text('isi_laporan');
            $table->string('foto', 255)->nullable();
            $table->enum('status', ['0', 'proses', 'selesai']);
            $table->foreign('nik')->references('nik')->on('masyarakats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};

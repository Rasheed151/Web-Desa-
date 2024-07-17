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
        Schema::create('spesifikasi_teknis', function (Blueprint $table) {
            $table->id();
            $table->string('no_keg'); // No Keg
            $table->string('no_id_hps'); // No ID HPS
            $table->string('kegiatan'); // Kegiatan
            $table->text('spesifikasi_1'); // Spesifikasi**
            $table->text('spesifikasi_2'); // Spesifikasi*
            $table->string('kegiatan_pekerjaan'); // Kegiatan Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('kasi_kaur'); // Kasi/Kaur
            $table->string('nama_kasi_kaur'); // Nama Kasi/Kaur
            $table->string('jenis'); // Jenis
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_teknis');
    }
};
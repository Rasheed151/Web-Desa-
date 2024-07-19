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
        Schema::create('spesifikasi_teknis_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noKeg'); // No Keg
            $table->string('noHps'); // No ID HPS
            $table->string('kegiatan'); // Kegiatan
            $table->string('jenis'); // Jenis
            $table->string('pekerjaan'); // Kegiatan Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->text('spek1'); // Spesifikasi**
            $table->text('spek2'); // Spesifikasi*
            $table->string('namaKasi'); // Kasi/Kaur
            $table->string('jabatanKasi'); // Nama Kasi/Kaur
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_teknis_penyedia');
    }
};

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
        Schema::create('laporan_kemajuan_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no'); // Nomor
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('kegiatan'); // Kegiatan
            $table->string('biaya'); // Biaya
            $table->string('bobot'); // Bobot
            $table->string('rencana'); // Rencana/Realisasi
            $table->string('jdwlPekerjaan1'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-1)
            $table->string('jdwlPekerjaan2'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-2)
            $table->string('jdwlPekerjaan3'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-3)
            $table->string('jdwlPekerjaan4'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-4)
            $table->string('jdwlPekerjaan5'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-5)
            $table->string('jdwlPekerjaan6'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-6)
            $table->string('jdwlPekerjaan7'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-7)
            $table->string('jdwlPekerjaan8'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-8)
            $table->string('jdwlPekerjaan9'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-9)
            $table->string('jdwlPekerjaan10'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-10)
            $table->string('jdwlPekerjaan11'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-11)
            $table->string('jdwlPekerjaan12'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-12)
            $table->string('jdwlPekerjaan13'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-13)
            $table->string('jdwlPekerjaan14'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-14)
            $table->string('jdwlPekerjaan15'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-15)
            $table->string('jdwlPekerjaan16'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-16)
            $table->string('jdwlPekerjaan17'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-17)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kemajuan_swa');
    }
};

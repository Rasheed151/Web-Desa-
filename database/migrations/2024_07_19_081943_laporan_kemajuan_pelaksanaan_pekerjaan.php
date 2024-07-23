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
            $table->integer('no'); // Nomor
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('kegiatan'); // Kegiatan
            $table->string('biaya'); // Biaya
            $table->integer('bobot'); // Bobot
            $table->string('rencana'); // Rencana/Realisasi
            $table->integer('jdwlPekerjaan1'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-1)
            $table->integer('jdwlPekerjaan2'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-2)
            $table->integer('jdwlPekerjaan3'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-3)
            $table->integer('jdwlPekerjaan4'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-4)
            $table->integer('jdwlPekerjaan5'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-5)
            $table->integer('jdwlPekerjaan6'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-6)
            $table->integer('jdwlPekerjaan7'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-7)
            $table->integer('jdwlPekerjaan8'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-8)
            $table->integer('jdwlPekerjaan9'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-9)
            $table->integer('jdwlPekerjaan10'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-10)
            $table->integer('jdwlPekerjaan11'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-11)
            $table->integer('jdwlPekerjaan12'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-12)
            $table->integer('jdwlPekerjaan13'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-13)
            $table->integer('jdwlPekerjaan14'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-14)
            $table->integer('jdwlPekerjaan15'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-15)
            $table->integer('jdwlPekerjaan16'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-16)
            $table->integer('jdwlPekerjaan17'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-17)
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

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
        Schema::create('laporan_kemajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor 
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('kegiatan'); // Kegiatan
            $table->string('biaya'); // Biaya
            $table->integer('bobot'); // Bobot
            $table->string('rencana'); // Rencana/Realisasi
            $table->integer('jdwlKerja1'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-1)
            $table->integer('jdwlKerja2'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-2)
            $table->integer('jdwlKerja3'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-3)
            $table->integer('jdwlKerja4'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-4)
            $table->integer('jdwlKerja5'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-5)
            $table->integer('jdwlKerja6'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-6)
            $table->integer('jdwlKerja7'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-7)
            $table->integer('jdwlKerja8'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-8)
            $table->integer('jdwlKerja9'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-9)
            $table->integer('jdwlKerja10'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-10)
            $table->integer('jdwlKerja11'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-11)
            $table->integer('jdwlKerja12'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-12)
            $table->integer('jdwlKerja13'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-13)
            $table->integer('jdwlKerja14'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-14)
            $table->integer('jdwlKerja15'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-15)
            $table->integer('jdwlKerja16'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-16)
            $table->integer('jdwlKerja17'); // Jadwal Pekerjaan (Hari/Minggu/Bulan Ke-17)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kemajuan');
    }
};

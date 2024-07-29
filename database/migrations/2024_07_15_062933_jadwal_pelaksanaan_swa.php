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
        Schema::create('jadwal_pelaksanaan_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->string('namaKegiatan'); // Nama Pekerjaan/Kegiatan
            $table->string('kegiatan'); // Nama Kegiatan
            $table->string('jdwlLaksana'); // Jadwal Pelaksanaan Kegiatan
            $table->bigInteger('biaya'); // Biaya Rp.
            $table->string('bobot'); // Bobot
            $table->date('namaKasi'); // Nama Kepala Seksi 
            $table->date('jbtnKasi'); // Jabatan Kepala Seksi
            $table->date('jdwlKerja1'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-1)
            $table->date('jdwlKerja2'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-2)
            $table->date('jdwlKerja3'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-3)
            $table->date('jdwlKerja4'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-4)
            $table->date('jdwlKerja5'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-5)
            $table->date('jdwlKerja6'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-6)
            $table->date('jdwlKerja7'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-7)
            $table->date('jdwlKerja8'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-8)
            $table->date('jdwlKerja9'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-9)
            $table->date('jdwlKerja10'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-10)
            $table->date('jdwlKerja11'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-11)
            $table->date('jdwlKerja12'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-12)
            $table->date('jdwlKerja13'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-13)
            $table->date('jdwlKerja14'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-14)
            $table->date('jdwlKerja15'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-15)
            $table->date('jdwlKerja16'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-16)
            $table->date('jdwlKerja17'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-17)
            $table->date('jdwlKerja18'); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-18)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelaksanaan_swa');
    }
};
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
            $table->string('namaKasi'); // Nama Kepala Seksi 
            $table->string('jbtnKasi'); // Jabatan Kepala Seksi
            $table->date('jdwlKerja1')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-1)
            $table->date('jdwlKerja2')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-2)
            $table->date('jdwlKerja3')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-3)
            $table->date('jdwlKerja4')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-4)
            $table->date('jdwlKerja5')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-5)
            $table->date('jdwlKerja6')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-6)
            $table->date('jdwlKerja7')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-7)
            $table->date('jdwlKerja8')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-8)
            $table->date('jdwlKerja9')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-9)
            $table->date('jdwlKerja10')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-10)
            $table->date('jdwlKerja11')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-11)
            $table->date('jdwlKerja12')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-12)
            $table->date('jdwlKerja13')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-13)
            $table->date('jdwlKerja14')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-14)
            $table->date('jdwlKerja15')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-15)
            $table->date('jdwlKerja16')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-16)
            $table->date('jdwlKerja17')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-17)
            $table->date('jdwlKerja18')->nullable(); // Jadwal Pekerjaan (Hari/Minggu/Bulan ke-18)
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps();
    
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
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
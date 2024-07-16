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
        Schema::create('pengumuman_pengadaan', function (Blueprint $table) {
            $table->id();
            $table->integer('no'); // Nomor
            $table->string('nama_kegiatan'); // Nama Kegiatan
            $table->decimal('nilai_pengadaan', 15, 2); // Nilai Pengadaan
            $table->string('cara_pengadaan'); // Cara Pengadaan
            $table->string('volume'); // Volume
            $table->string('satuan'); // Satuan
            $table->string('nama_tpk'); // Nama TPK
            $table->string('lokasi_kegiatan'); // Lokasi Kegiatan
            $table->date('tanggal_mulai'); // Tanggal Mulai
            $table->date('tanggal_selesai'); // Tanggal Selesai
            $table->string('jangka_waktu_selama'); // Jangka Waktu Selama
            $table->string('waktu_pelaksanaan'); // Waktu Pelaksanaan
            $table->date('tanggal_pengumuman'); // Tanggal Pengumuman
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman_pengadaan');
    }
};

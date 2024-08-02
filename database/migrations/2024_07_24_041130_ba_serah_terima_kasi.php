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
        Schema::create('ba_serah_kasi', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->integer('noBa'); // Nomor Berita Acara
            $table->string('kegiatan'); // Kegiatan
            $table->bigInteger('nlaiPengadaan'); // Nilai Pengadaan  
            $table->string('output'); // Keluaran/Output
            $table->string('satuan'); // Satuan (meter)
            $table->string('lokasi'); // Lokasi Pekerjaan
            $table->string('namaKasi'); // Nama Kepala Seksi
            $table->string('jabatanKasi'); // Jabatan Kepala seksi
            $table->string('noTus'); // Nomor Keputusan
            $table->string('tgglTus'); // Tanggal Keputusan
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ba_serah_kasi');
    }
};

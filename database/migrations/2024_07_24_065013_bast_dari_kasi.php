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
        Schema::create('bast_kasi', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noBa'); // Nomor Berita Acara
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('namaKasi'); // Nama Kepala Seksi Selaku PKA
            $table->string('jabatanKasi'); // Jabatan Kepala Seksi Selaku PKA
            $table->string('noSkpka'); // Nomor SK PKA  
            $table->string('kegiatan'); // Nama Kegiatan 
            $table->string('nlaiPengadaan'); // Nilai Pengadaan
            $table->string('output'); // Keluaran/Output
            $table->string('satuan'); // Satuan
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bast_kasi');
    }
};

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
        Schema::create('bast_penyedia', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noBa'); // Nomor Berita Acara
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('namaKasi'); // Nama Kepala Seksi Selaku PKA
            $table->string('jabatanKasi'); // Jabatan Kepala Seksi Selaku PKA
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->integer('noSp'); // Nomor Surat Perjanjian
            $table->date('tgglSp'); // Tanggal Surat Perjanjian
            $table->string('namaToko'); // Toko/Pemasok/Penyedia
            $table->string('alamatToko'); // Alamat Toko/Pemasok/Penyedia
            $table->string('namaDir'); // Nama Dir/Pimpinan
            $table->string('kegiatan'); // Nama Kegiatan 
            $table->string('nlaiPengadaan'); // Nilai Pengadaan
            $table->string('output'); // Keluaran/Output
            $table->string('satuan'); // Satuan
            $table->string('lokasi'); // Lokasi Pekerjaan
            $table->string('jdwlLaksana'); // Jadwal Pelaksanaan
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bast_penyedia');
    }
};

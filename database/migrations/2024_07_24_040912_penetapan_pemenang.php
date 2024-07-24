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
        Schema::create('penetapan_pemenang', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->integer('noSrt'); // Nomor Surat
            $table->string('lampiran'); // Lampiran
            $table->string('prihal'); // Perihal
            $table->string('noBaNego'); // Nomor BA Hasil Negosiasi
            $table->date('tgglBaNego'); // Tanggal/Bulan/Tahun BA Hasil Negosiasi 
            $table->string('kegiatan'); // Kegiatan 
            $table->string('pekerjaan'); // Paket Pekerjaan
            $table->integer('nilaiHps'); // Nilai HPS
            $table->string('smbrDana'); // Sumber Dana
            $table->string('namaToko'); // Nama Perusahaan/Penyedia/Toko
            $table->string('alamatToko'); // Alamat Perusahaab/Penyedia/Toko
            $table->integer('hrgaTawar'); // Harga Penawaran 
            $table->string('jabatanKasi'); // Jabatan Kepala Seksi
            $table->string('ketuaTpk'); // Nama Ketua TPK
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penetapan_pemenang');
    }
};

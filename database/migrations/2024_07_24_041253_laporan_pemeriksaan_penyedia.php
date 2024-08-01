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
        Schema::create('laporan_pemeriksaan_penyedia', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('kpd'); // Kepada Yth
            $table->string('kegiatan'); // Nama Kegiatan
            $table->string('lokasi'); // Kegiatan
            $table->string('namaToko'); // Toko/Pemasok/Penyedia
            $table->string('alamatToko'); // Alamat Toko/Pemasok/Penyedia
            $table->date('tgglKeg'); // Tanggal Kegiatan 
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->enum('dgnHsl', ['Baik','Tidak Baik']); // Dengan Hasil
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pemeriksaan_penyedia');
    }
};

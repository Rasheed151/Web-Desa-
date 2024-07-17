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
        Schema::create('rkp_desa', function (Blueprint $table) {
            $table->id();
            $table->integer('no'); // Nomor
            $table->date('tanggal_bulan_tahun'); // Tanggal Bulan Tahun
            $table->string('bidang'); // Bidang
            $table->string('sub_bidang'); // Sub Bidang
            $table->string('jenis_kegiatan'); // Jenis Kegiatan
            $table->string('lokasi_kegiatan'); // Lokasi Kegiatan
            $table->string('volume'); // Volume
            $table->string('sasaran_penerima_manfaat'); // Sasaran/Penerima Manfaat
            $table->string('waktu_pelaksanaan'); // Waktu Pelaksanaan
            $table->decimal('jumlah_biaya', 15, 2); // Jumlah Biaya (Rp)
            $table->string('sumber_biaya'); // Sumber Biaya
            $table->boolean('swakelola')->default(false); // Swakelola
            $table->boolean('kerjasama_antar_desa')->default(false); // Kerjasama Antar Desa
            $table->boolean('kerjasama_pihak_ketiga')->default(false); // Kerjasama Pihak Ketiga
            $table->string('rencana_pelaksana_kegiatan'); // Rencana Pelaksana Kegiatan
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rkp_desa');
    }
};
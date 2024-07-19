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
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->date('TBL'); // Tanggal Bulan Tahun
            $table->string('bidang'); // Bidang
            $table->string('subBidang'); // Sub Bidang
            $table->string('jnsKegiatan'); // Jenis Kegiatan
            $table->string('lksKegiatan'); // Lokasi Kegiatan
            $table->string('volume'); // Volume
            $table->string('sasaran'); // Sasaran/Penerima Manfaat
            $table->string('wktuPelaksanaan'); // Waktu Pelaksanaan
            $table->decimal('jmlhBiaya', 15, 2); // Jumlah Biaya (Rp)
            $table->string('smbrBiaya'); // Sumber Biaya
            $table->boolean('swakelola')->default(false); // Swakelola
            $table->boolean('krjsmaAndes')->default(false); // Kerjasama Antar Desa
            $table->boolean('krjsmaPitig')->default(false); // Kerjasama Pihak Ketiga
            $table->string('rncnaPegiat'); // Rencana Pelaksana Kegiatan
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
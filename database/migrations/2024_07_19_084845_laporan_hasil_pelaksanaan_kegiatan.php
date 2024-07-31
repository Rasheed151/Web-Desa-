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
        Schema::create('laporan_hasil', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->string('lprnBulan'); // Laporan Bulan
            $table->text('uraian'); // Uraian/Kegiatan
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('rencanaVolume'); // Output Rencana Volume
            $table->string('rencanaSatuan'); // Output Rencana Satuan
            $table->string('rencanaAnggaran'); // Output Rencana Anggaran
            $table->string('realisasiVolume'); // Output Realisasi Volume
            $table->string('realisasiSatuan'); // Output Realisasi Satuan
            $table->string('realisasiAnggaran'); // Output Realisasi Anggaran
            $table->string('capaian'); // Capaian
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_hasil');
    }
};

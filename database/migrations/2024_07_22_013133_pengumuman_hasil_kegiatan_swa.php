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
        Schema::create('pengumuman_hasil_kegiatan_swa', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->text('kegiatan'); // Nama Kegiatan
            $table->string('nilaiPengadaan'); // Nilai Pengadaan Sebesar
            $table->string('output'); // Keluaran/Output
            $table->integer('noPengumuman'); // Nomor Pengumuman 
            $table->string('lokasi'); // Lokasi
            $table->string('wktuPelaksanaan'); // Waktu Pelaksanaan
            $table->string('satuan'); // Satuan
            $table->string('ketuaTpk'); // Ketua Tpk
            $table->string('sekTpk'); // Sekretaris Tpk
            $table->string('angTpk'); // Anggota Tpk
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman_hasil_kegiatan_swa');
    }
};

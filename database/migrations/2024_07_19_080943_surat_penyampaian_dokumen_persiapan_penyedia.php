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
        Schema::create('data_pengadaan_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->date('tanggal'); // Tanggal/Bulan/Tahun
            $table->string('noSurat'); // Nomor Surat
            $table->string('perihal'); // Perihal
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi
            $table->string('noPerbup'); // Nomor Perbup ttg Pengadaan Barjas di Desa
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
            $table->string('noDpa'); // Nomor SK DPA
            $table->date('tgglDpa'); // Tanggal SK DPA
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengadaan_penyedia');
    }
};

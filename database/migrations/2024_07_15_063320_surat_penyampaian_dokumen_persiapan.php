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
        Schema::create('data_pengadaan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Tanggal/Bulan/Tahun
            $table->string('nomor_surat'); // Nomor Surat
            $table->string('perihal'); // Perihal
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi
            $table->string('nama_kasi'); // Nama Kasi/Kaur
            $table->string('jabatan_kasi'); // Jabatan Kasi/Kaur
            $table->string('nomor_sk_dpa'); // Nomor SK DPA
            $table->date('tanggal_sk_dpa'); // Tanggal SK DPA
            $table->string('nomor_perbup'); // Nomor Perbup ttg Pengadaan Barjas di Desa
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengadaan');
    }
};

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
        Schema::create('rktk_bahan_dan_peralatan_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pekerjaan'); // Tanggal/Bulan/Tahun
            $table->string('jenis'); // Nomor Surat
            $table->string('kegiatan'); // Perihal
            $table->string('kode'); // Kegiatan
            $table->string('satuan'); // Lokasi
            $table->string('koefisien'); // Nomor Perbup ttg Pengadaan Barjas di Desa
            $table->string('volume'); // Nama Kasi/Kaur
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
        Schema::dropIfExists('data_pengadaan');
    }
};

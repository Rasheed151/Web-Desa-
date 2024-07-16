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
        Schema::create('kak', function (Blueprint $table) {
            $table->id();
            $table->integer('no'); // Nomor
            $table->text('latar_belakang'); // Latar Belakang
            $table->string('penerima_manfaat'); // Penerima Manfaat
            $table->string('cara_melaksanakan'); // Cara Melaksanakan
            $table->string('ketua_tpk'); // Ketua TPK
            $table->string('sekretaris_tpk'); // Sekretaris TPK
            $table->string('anggota_tpk'); // Anggota TPK
            $table->string('kasi_kaur'); // Kasi/Kaur
            $table->string('nama_kasi_kaur'); // Nama Kasi/Kaur
            $table->string('di_lokasi_diserahterimakan'); // Di Lokasi/Diserahterimakan
            $table->date('tanggal_mulai'); // Tanggal Bulan Tahun Mulai
            $table->string('jangka_waktu_pelaksanaan'); // Jangka Waktu Pelaksanaan
            $table->string('kegiatan'); // Kegiatan
            $table->decimal('besar', 15, 2); // Kegiatan Sebesar
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kak');
    }
};
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
        Schema::create('surat_perintah', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noSpk'); // Nomor Surat Perintah Kerja
            $table->date('tgglSpk'); // Tanggal Surat Perintah Kerja
            $table->string('namaPka'); // Nama PKA
            $table->string('jbtnPka'); // Jabatan PKA
            $table->string('namaPenyedia'); // Nama Penyedia 
            $table->string('namaToko'); // Nama Perusahan/Pemasok/Toko
            $table->string('noSpl'); // Nomor Surat Pengadaan Langsung
            $table->date('tgglSpl'); // Satuan
            $table->string('noBa'); // Nomor BA Hasil Pengadaan Langsung
            $table->date('tgglBa'); // Tanggal BA Hasil Pengadaan Langsung
            $table->string('smbrDana'); // Sumber Dana
            $table->string('kegiatan'); // Nama Kegiatan
            $table->bigInteger('sbesar'); // Sebesar Rp.
            $table->string('jnsKontrak'); // Anggota Tpk
            $table->string('wktuLaksana'); // Waktu Pelaksanaan Pekerjaan (1 hari)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_perintah');
    }
};

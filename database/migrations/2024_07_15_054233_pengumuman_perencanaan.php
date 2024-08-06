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
        Schema::create('pengumuman_pengadaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->string('namaKegiatan'); // Nama Kegiatan
            $table->decimal('nilaiPengadaan', 15, 2); // Nilai Pengadaan
            $table->string('caraPengadaan'); // Cara Pengadaan
            $table->string('volume'); // Volume
            $table->string('satuan'); // Satuan
            $table->string('namaTpk'); // Nama TPK
            $table->string('lksKegiatan'); // Lokasi Kegiatan
            $table->date('tglMulai'); // Tanggal Mulai
            $table->date('tglSelesai'); // Tanggal Selesai
            $table->string('jangkaWaktu'); // Jangka Waktu Selama
            $table->string('wktuPelaksanaan'); // Waktu Pelaksanaan
            $table->date('tglPengumuman'); // Tanggal Pengumuman
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps();
    
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman_pengadaan');
    }
};

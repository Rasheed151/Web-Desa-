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
        Schema::create('hps_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noKeg'); // Nomor Kegiatan
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
            $table->string('idHps'); // ID HPS
            $table->string('namaBarjas'); // Nama Barang/Jasa
            $table->text('spesifikasi'); // Spesifikasi
            $table->string('kode'); // Kode
            $table->decimal('koefisien', 10, 2); // Koefisien
            $table->decimal('volume', 10, 2); // Volume
            $table->string('satuan'); // Satuan
            $table->decimal('hargaSatuan', 15, 2); // Harga Satuan Rp
            $table->decimal('jmlhHarga', 15, 2); // Jumlah Harga Rp
            $table->string('jenis'); // Jenis
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hps_swa');
    }
};
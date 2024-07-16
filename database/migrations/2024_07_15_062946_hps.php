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
        Schema::create('hps', function (Blueprint $table) {
            $table->id();
            $table->integer('no_keg'); // Nomor Kegiatan
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi
            $table->string('id_hps'); // ID HPS
            $table->string('nama_barang_jasa'); // Nama Barang/Jasa
            $table->text('spesifikasi'); // Spesifikasi
            $table->string('kode'); // Kode
            $table->decimal('koefisien', 10, 2); // Koefisien
            $table->decimal('volume', 10, 2); // Volume
            $table->string('satuan'); // Satuan
            $table->decimal('harga_satuan', 15, 2); // Harga Satuan Rp
            $table->decimal('jumlah_harga', 15, 2); // Jumlah Harga Rp
            $table->string('jenis'); // Jenis
            $table->string('nama_kasi_kaur'); // Nama Kasi/Kaur
            $table->string('jabatan_kasi_kaur'); // Jabatan Kasi/Kaur
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hps');
    }
};
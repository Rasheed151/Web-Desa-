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
        Schema::create('ahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_hps'); // No HPS
            $table->string('kegiatan'); // Kegiatan
            $table->string('kode'); // Kode
            $table->string('satuan'); // Satuan
            $table->decimal('koefisien', 10, 2); // Koefisien
            $table->decimal('harga_satuan', 15, 2); // Harga Satuan Rp
            $table->decimal('jumlah_harga', 15, 2); // Jumlah Harga
            $table->string('jenis'); // Jenis
            $table->integer('no_keg'); // No Keg
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
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
        Schema::dropIfExists('ahs');
    }
};
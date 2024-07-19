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
        Schema::create('ahs_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_keg'); // No Keg
            $table->string('noHps'); // No HPS
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
            $table->string('kegiatan'); // Kegiatan
            $table->string('kode'); // Kode
            $table->string('satuan'); // Satuan
            $table->decimal('koefisien', 10, 2); // Koefisien
            $table->decimal('hargaSatuan', 15, 2); // Harga Satuan Rp
            $table->decimal('jmlhHarga', 15, 2); // Jumlah Harga
            $table->string('jenis'); // Jenis
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
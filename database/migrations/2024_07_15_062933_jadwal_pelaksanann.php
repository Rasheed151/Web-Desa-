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
        Schema::create('jadwal_pelaksanaan', function (Blueprint $table) {
            $table->id();
            $table->integer('no'); // Nomor
            $table->string('nama_pekerjaan_kegiatan'); // Nama Pekerjaan/Kegiatan
            $table->string('ketua_tpk'); // Ketua TPK
            $table->string('sekretaris_tpk'); // Sekretaris TPK
            $table->string('anggota_tpk'); // Anggota TPK
            $table->string('jumlah_waktu'); // Jumlah Waktu
            $table->date('waktu_pelaksanaan_dari'); // Waktu Pelaksanaan dari
            $table->date('waktu_pelaksanaan_sampai'); // Waktu Pelaksanaan s/d
            $table->decimal('nilai_pekerjaan', 15, 2); // Nilai Pekerjaan
            $table->string('nama_kasi_kaur'); // Nama Kasi/Kaur
            $table->string('jabatan_kasi_kaur'); // Jabatan Kasi/Kaur
            $table->string('lokasi'); // Lokasi
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelaksanaan');
    }
};
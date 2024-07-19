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
        Schema::create('jadwal_pelaksanaan_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->string('namaKegiatan'); // Nama Pekerjaan/Kegiatan
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('anggotaTpk'); // Anggota TPK
            $table->string('jmlhWaktu'); // Jumlah Waktu
            $table->date('wktPelaksanaanDari'); // Waktu Pelaksanaan dari
            $table->date('wktPelaksanaanSampai'); // Waktu Pelaksanaan s/d
            $table->decimal('nlaiPekerjaan', 15, 2); // Nilai Pekerjaan
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
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
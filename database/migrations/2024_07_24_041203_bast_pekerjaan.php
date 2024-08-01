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
        Schema::create('bast_pekerjaan', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noBa'); // Nomor Berita Acara
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('noSktpk'); // Nomor SK TPK
            $table->date('tgglSktpk'); // Tanggal SK TPK
            $table->string('namaKasi'); // Nama Kepala Seksi
            $table->string('jbtnKasi'); // Jabatan Kepala Seksi
            $table->string('kegiatan'); // Nama Kegiatan
            $table->string('nlaiPengadaan'); // Nilai Pengadaan
            $table->string('output'); // Keluaran/Output
            $table->string('satuan'); // satuan
            $table->string('lokasi'); // Lokasi Pekerjaan
            $table->string('jdwlLaksana'); // Jadwal Pelaksanaan (sampai dengan)
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->string('noSkpka'); // Nomor SK PKA
            $table->date('tgglSkpka'); // Tanggal SK PKA
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bast_pekerjaan');
    }
};

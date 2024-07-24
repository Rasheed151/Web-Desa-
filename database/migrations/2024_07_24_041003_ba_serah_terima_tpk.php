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
        Schema::create('ba_serah_terima_tpk', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->integer('noBa'); // Nomor BA
            $table->string('kegiatan'); // Kegiatan
            $table->bigInteger('nlaiPengadaan'); // Nilai Pengadaan
            $table->string('output'); // Keluaran/Output
            $table->string('satuan'); // Satuan
            $table->string('lokasi'); // Lokasi Kegiatan 
            $table->string('jdwl'); // Jadwal Pelaksanaan 
            $table->string('namaKasi'); // Nama Kepala Seksi
            $table->string('jabatanKasi'); // Jabatan Kepala Seksi
            $table->string('noDes'); // Nomor SK Kades
            $table->string('tgglDes'); // Tanggal SK Kades
            $table->string('ketuaTpk'); // Ketua TPK 
            $table->string('sekTpk'); // Sekretaris TPK 
            $table->string('angTpk'); // Anggota TPK 
            $table->string('noTus'); // Nomor Keputusan
            $table->string('tgglTus'); // Tanggal Keputusan
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ba_serah_terima_tpk');
    }
};

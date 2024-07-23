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
        Schema::create('ba_evaluasi', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noBa'); // Nomor BA
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('noSktpk'); // Nomor SK TPK
            $table->string('tgglSktpk'); // Tanggal SK TPK
            $table->string('kegiatan'); // Kegiatan
            $table->string('lingkup'); // Lingkup Pekerjaan
            $table->string('lokasi'); // Lokasi 
            $table->integer('nilaiHps'); // Nilai HPS
            $table->string('suDa'); // Sumber Dana
            $table->string('tawarSbyk'); // Penawaran Sebanyak
            $table->string('namaToko'); // Nama Perusahaan/Toko/Pemasok
            $table->string('alamatToko'); // Alamat Perusahaan/Toko/Pemasok

            $table->enum('adaSpku', ['Ada', 'Tidak Ada']); // Ada/Tidaknya Surat Pernyataan Kebenaran Usaha
            $table->enum('heSpku', ['Memenuhi Syarat', 'Tidak Memenuhi']); // Hasil Evaluasi Surat Pernyataan Kebenaran Usaha
            
            $table->enum('adaSt', ['Ada', 'Tidak Ada']); // Ada/Tidaknya Spesifikasi Teknis
            $table->enum('heSt', ['Sesuai', 'Tidak Sesuai']); // Hasil Evaluasi Spesifikasi Teknis

            $table->enum('adaJpp', ['Ada', 'Tidak Ada']); // Ada/Tidaknya Jadwal Pelaksanaan Pekerjaan
            $table->enum('heJpp', ['Sesuai', 'Tidak Sesuai']); // Hasil Evaluasi Jadwal Pelaksanaan Pekerjaan

            $table->enum('adaDkh', ['Ada', 'Tidak Ada']); // Ada/Tidaknya Daftar Kuantitas dan Harga
            $table->enum('heDkh', ['Lulus', 'Tidak Lulus 100% dari HPS']); // Hasil Evaluasi Daftar Kuantitas dan Harga

            $table->string('ketuaTpk'); // Ketua TPK
            $table->integer('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ba_evaluasi');
    }
};

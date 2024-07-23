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
        Schema::create('surat_penawaran_penyedia', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('noSuratPpenyedia'); // Nomor Surat

            $table->string('lampiran'); // Lampiran
            $table->string('namaPekerjaan'); // Penawaran Pengadaan
            $table->string('noSuratPpenawar'); // Nomor Surat Permintaan Penawaran 
            $table->string('tgglpPenawar'); // Tanggal/Bulan/Tahun Surat Permintaan Penawaran
            $table->string('noSppenawar'); // Nomor Surat Permintaan Penawar
            $table->date('sebesar'); // Sebesar
            $table->string('jangkaWktu'); // Jangka Waktu Pelaksanaan Pekerjaan Selama (hari)
            $table->string('tgglBa'); // Tanggal BA Hasil Pengadaan Langsung
            $table->string('penawaranBerlaku'); // Penawaran Ini Berlaku Selama (hari)
            $table->string('namaPemasok'); // Nama Dir/Pimpinan Perusahaan/Toko/Pemasok
            $table->bigInteger('namaToko'); // Nama Perusahaan/Toko/Pemasok
            $table->string('alamatToko'); // Alamat Perusahaan/Toko/Pemasok
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_penawaran_penyedia');
    }
};

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
        Schema::create('surat_pernyataan', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('pekerjaan'); // Nama Pekerjaan
            $table->string('lokasi'); // Lampiran
            $table->string('namaPemasok'); // Nama Lengkap
            $table->string('ttl'); // Tempat,  Tanggal Lahir
            $table->bigInteger('NIK'); // NIK/SIM/Paspor
            $table->string('alamat'); // Alamat Tempat Tinggal
            $table->string('gerakDibidang'); // Perusahaan Bergerak Dibidang
            $table->string('namaToko'); // Nama Perusahaan/Toko/Pemasok
            $table->string('alamatToko'); // Tanggal BA Hasil Pengadaan Langsung
            $table->string('noHp'); // Penawaran Ini Berlaku Selama (hari)
            $table->integer('npwp'); // Nomor Pokok Wajib Pajak
            $table->string('nib'); // Nama Perusahaan/Toko/Pemasok
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pernyataan');
    }
};

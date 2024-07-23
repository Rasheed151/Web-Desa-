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
        Schema::create('surat_permintaan_penawaran', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tgglpPenawar'); // Tanggal/Bulan/Tahun
            $table->integer('noSPpenawar'); // Nomor Surat
            $table->string('lampiran'); // Lampiran
            $table->string('kpdYth'); // Kepada Yth: Dir/Pem di
            $table->string('namaPekerjaan'); // Nama Pekerjaan 
            $table->bigInteger('nilaiTtl'); // Nilai Total Hps
            $table->date('penawaranPalam'); // Penawaran Paling Lambat
            $table->date('pukul'); // Pukul S/d
            $table->string('jangkaWktu'); // Jangka Waktu Pelaksanaan Pekerjaan Selama (hari)
            $table->string('ketuaTpk'); // Ketua TPK

            $table->date('tgglPpdp'); // Tanggal Pemasukan dan Pembukaan Dokumen Penawaran
            $table->string('pukulPpdp'); // Pukul Pemasukan dan Pembukaan Dokumen Penawaran
            $table->text('tempatPpdp'); // Tempat Pemasukan dan Pembukaan Dokumen Penawaran
            $table->string('ketPpdp'); // Keterangan Pemasukan dan Pembukaan Dokumen Penawaran

            $table->date('tgglEtb'); // Tanggal Evaluasi Teknis dan Biaya
            $table->string('pukulEtb'); // Pukul Evaluasi Teknis dan Biaya
            $table->text('tempatEtb'); // Tempat Evaluasi Teknis dan Biaya
            $table->string('ketEtb'); // Keterangan Evaluasi Teknis dan Biaya

            $table->date('tgglNh'); // Tanggal Negosiasi Harga
            $table->string('pukulNh'); // Pukul Negosiasi Harga
            $table->text('tempatNh'); // Tempat Negosiasi Harga
            $table->string('ketNh'); // Keterangan Negosiasi Harga
            $table->string('wktuLaksana'); // Waktu Pelaksanaan Pekerjaan (1 hari)
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_permintaan_penawaran');
    }   
};

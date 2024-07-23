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
        Schema::create('surat_perjanjian', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->integer('noSp'); // Nomor Surat Perjanjian
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('namaKasi'); // Nama Kepala Seksi
            $table->string('jabatanKasi'); // Jabatan Kepala Seksi
            $table->string('alamat'); // Alamat/Berkedudukan di Jalan
            $table->string('namaPekerjaan'); // Nama Pekerjaan 
            $table->string('lokasi'); // Lokasi Pekerjaan 
            $table->string('namaDir'); // Alamat Tempat Tinggal
            $table->string('alamatToko'); // Alamat Toko
            $table->string('namaToko'); // Nama Perusahaan/Toko
            $table->string('namaBank'); // Pembayaran Melalui Rekening Bank
            $table->string('cabang'); // Cabang
            $table->integer('noRek'); // Nomor Rekening
            $table->string('spesifikasi'); // Spesifikasi
            $table->integer('nego'); // Harga Negosiasi
            $table->string('selesaiKerja'); // Penyelesaian Pekerjaan Selama (hari)
            $table->date('sd'); // Sampai dengan Tanggal
            $table->bigInteger('bayarPka'); // PKA Membayar Sebesar
            $table->string('garansi'); // Garansi Selama
            $table->string('spdr'); // Surat Perjanjian dalam Rangkap
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_perjanjian');
    }
};

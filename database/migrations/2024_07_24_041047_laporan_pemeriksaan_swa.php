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
        Schema::create('lprn_pemeriksaan_swa', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->date('tggl'); // Tanggal/Bulan/Tahun
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi Pekerjaan  
            $table->string('namaToko'); // Nama Penyedia
            $table->string('alamatToko'); // Alamat Penyedia
            $table->date('tgglBast'); // Tanggal/Bulan/Tahun BAST
            $table->enum('dgnHsl', ['Baik', 'Tidak Baik']); // Dengan Hasil 
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lprn_pemeriksaan_swa');
    }
};

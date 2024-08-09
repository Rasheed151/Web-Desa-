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
        Schema::create('kak_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor 
            $table->text('ltrBelakang'); // Latar Belakang
            $table->string('nerimaManfaat'); // Penerima Manfaat
            $table->string('caraLaksana'); // Cara Melaksanakan
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jbtnKasi'); // Jabatan Kasi/Kaur
            $table->string('diLokasi'); // Di Lokasi/Diserahterimakan
            $table->date('tgglMulai'); // Tanggal Bulan Tahun Mulai
            $table->string('jangkaWaktu'); // Jangka Waktu Pelaksanaan
            $table->string('biayaKegiatan'); // Kegiatan
            $table->decimal('sebesarRp', 15, 2); // Kegiatan Sebesar
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps();
    
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kak_swa');
    }
};
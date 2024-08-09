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
        Schema::create('catatan_hasil_pembahasan_swa', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('no'); // Nomor
            $table->string('kegiatan'); // Rapat Pembahasan Kegiatan
            $table->string('tempat'); // Tempat Pelaksanaan
            $table->date('tggl'); // Hari/Tanggal
            $table->string('waktuPelaksana'); // Waktu Pelaksanaan
            $table->string('agenda'); // Agenda
            $table->text('ltrBelakang'); // Latar Belakang
            $table->text('pembahasan'); // Pembahasn
            $table->text('tndkLanjut'); // Tindak Lanjut
            $table->string('pp'); // Panitia Pengadaan
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
        Schema::dropIfExists('catatan_hasil_pembahasan_swa');
    }
};

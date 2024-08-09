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
        Schema::create('rktk_bahan_dan_peralatan_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('jenis'); // Jenis Bahan
            $table->string('kegiatan'); // Kegiatan 
            $table->string('kode'); // Kode Bahan 
            $table->string('satuan'); // Lokasi
            $table->string('koefisien'); // Nomor Perbup ttg Pengadaan Barjas di Desa
            $table->string('volume'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
            $table->string('noDpa'); // Nomor SK DPA
            $table->date('tgglDpa'); // Tanggal SK DPA
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
        Schema::dropIfExists('rktk_bahan_dan_peralatan_swa');
    }
};

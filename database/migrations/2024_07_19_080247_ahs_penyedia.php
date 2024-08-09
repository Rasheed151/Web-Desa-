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
        Schema::create('ahs_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_keg'); // Nomor Kegiatan
            $table->string('noHps'); // Nomor HPS
            $table->string('pekerjaan'); // Pekerjaan
            $table->string('lokasi'); // Lokasi
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jabatanKasi'); // Jabatan Kasi/Kaur
            $table->string('kegiatan'); // Kegiatan
            $table->string('kode'); // Kode
            $table->string('satuan'); // Satuan
            $table->integer('koefisien'); // Koefisien
            $table->integer('hargaSatuan'); // Harga Satuan Rp
            $table->integer('jmlhHarga'); // Jumlah Harga
            $table->string('jenis'); // Jenis
            $table->unsignedBigInteger('userId'); 
            $table->timestamps(); // Created at and updated at timestamps

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahs_penyedia');
    }
};

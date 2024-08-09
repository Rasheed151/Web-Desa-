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
        Schema::create('hps_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noKeg'); // Nomor Kegiatan
            $table->string('kegiatan'); // Kegiatan
            $table->string('lokasi'); // Lokasi
            $table->string('namaKasi'); // Nama Kasi/Kaur
            $table->string('jbtnKasi'); // Jabatan Kasi/Kaur
            $table->integer('idHps'); // ID HPS
            $table->string('namaBarjas'); // Nama Barang/Jasa
            $table->text('spesifikasi'); // Spesifikasi
            $table->string('kode'); // Kode
            $table->integer('koefisien'); // Koefisien
            $table->integer('volume'); // Volume
            $table->string('satuan'); // Satuan
            $table->integer('hrgSatuan'); // Harga Satuan Rp
            $table->integer('jmlhHarga'); // Jumlah Harga Rp
            $table->string('jenis'); // Jenis
            $table->unsignedBigInteger('userId'); // Jenis
            $table->timestamps(); // Created at and updated at timestamps

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hps_penyedia');
    }
};

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
        Schema::create('jadwal_pelaksanaan_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->string('namaKegiatan'); // Nama Pekerjaan/Kegiatan
            $table->string('ketuaTpk'); // Ketua TPK
            $table->string('sekTpk'); // Sekretaris TPK
            $table->string('angTpk'); // Anggota TPK
            $table->string('jmlhWaktu'); // Jumlah Waktu
            $table->date('wktLaksanaDari'); // Waktu Pelaksanaan dari
            $table->date('wktLaksanaSampai'); // Waktu Pelaksanaan s/d
            $table->integer('nlaiPekerjaan'); // Nilai Pekerjaan
            $table->string('namaKasi')->nullable(); // Nama Kasi/Kaur
            $table->string('jbtnKasi')->nullable(); // Jabatan Kasi/Kaur
            $table->string('lokasi')->nullable(); // Lokasi
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps(); // Created at and updated at timestamps

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pelaksanaan_penyedia');
    }
};

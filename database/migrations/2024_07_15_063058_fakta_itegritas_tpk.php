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
        Schema::create('fakta_integritas_tpk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Tanggal/Bulan/Tahun
            $table->string('peran'); // Ketua/Sekretaris/Anggota
            $table->string('nomor_identitas'); // Nomor Identitas
            $table->string('alamat'); // Alamat
            $table->string('bertindak_untuk'); // Bertindak untuk dan atas nama
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakta_integritas_tpk');
    }
};
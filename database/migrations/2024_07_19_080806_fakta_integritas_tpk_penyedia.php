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
        Schema::create('fakta_integritas_tpk_penyedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->date('tanggal'); // Tanggal/Bulan/Tahun
            $table->string('nama'); // Ketua/Sekretaris/Anggota
            $table->string('alamat'); // Alamat
            $table->string('atasNama'); // Bertindak untuk dan atas nama
            $table->string('noIdentitas'); // Nomor Identitas
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakta_integritas_tpk_penyedia');
    }
};

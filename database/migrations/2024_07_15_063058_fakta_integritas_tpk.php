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
        Schema::create('fakta_integritas_tpk_swa', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal'); // Tanggal/Bulan/Tahun
            $table->string('nama'); // Ketua/Sekretaris/Anggota
            $table->string('alamat'); // Alamat
            $table->string('atasNama'); // Bertindak untuk dan atas nama
            $table->string('noIdentitas'); // Nomor Identitas
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
        Schema::dropIfExists('fakta_integritas_tpk_swa');
    }
};
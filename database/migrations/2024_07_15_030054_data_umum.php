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
        Schema::create('data_umum', function (Blueprint $table) {
            $table->string('tempat_desa');
            $table->text('alamat_kantor');
            $table->string('npwp');
            $table->integer('kode_desa');
            $table->string('kepala_desa');
            $table->integer('no_perbub_pjb');
            $table->timestamp('tanggal_perbub_pjb')->nullable();
            $table->integer('no_keputusan_dpa');
            $table->timestamp('tanggal_keputusan_dpa')->nullable();
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_umum');
    }
};

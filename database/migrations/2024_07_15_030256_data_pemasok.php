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
        Schema::create('data_pemasok', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gender');
            $table->string('ttl');
            $table->integer('NIK');
            $table->text('alamat_rumah');
            $table->string('nama_toko');
            $table->text('alamat_toko');
            $table->string('no_hp');
            $table->integer('npwp');
            $table->integer('nib');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemasok');
    }
};

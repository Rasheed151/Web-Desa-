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
        Schema::create('dataPka', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor');
            $table->string('nama');
            $table->string('ttl');
            $table->integer('NIK');
            $table->string('jabatan');
            $table->string('noHp');
            $table->text('alamat');
            $table->integer('npwp');
            $table->integer('noSkPka');
            $table->timestamp('tanggalSkPka')->nullable();
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pka');
    }
};

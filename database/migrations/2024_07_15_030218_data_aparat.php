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
        Schema::create('data_aparat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('gender');
            $table->string('ttl');
            $table->integer('NIK');
            $table->text('alamat');
            $table->integer('npwp');
            $table->integer('no_hp');
            $table->string('jabatan');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aparat');
    }
};

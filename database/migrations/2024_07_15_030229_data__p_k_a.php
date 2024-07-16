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
        Schema::create('data_pka', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ttl');
            $table->integer('NIK');
            $table->string('jabatan');
            $table->string('no_hp');
            $table->text('alamat');
            $table->integer('npwp');
            $table->integer('no_sk_pka');
            $table->timestamp('tanggal_sk_pka')->nullable();
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

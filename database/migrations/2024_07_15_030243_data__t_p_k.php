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
        Schema::create('data_tpk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gender');
            $table->string('ttl');
            $table->text('alamat');
            $table->integer('NIK');
            $table->integer('no_hp');
            $table->integer('no_sk_tpk');
            $table->timestamp('tanggal_sk_tpk')->nullable();
            $table->string('jabatan');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tpk');
    }
};

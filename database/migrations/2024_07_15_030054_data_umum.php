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
        Schema::create('dataUmum', function (Blueprint $table) {
            $table->id();
            $table->string('tempatDesa');
            $table->text('alamatKantor');
            $table->string('npwp');
            $table->integer('kodeDesa');
            $table->string('kepalaDesa');
            $table->bigInteger('noPerbubPjb');
            $table->timestamp('tanggalPerbubPjb')->nullable();
            $table->bigInteger('noKeputusanDpa');
            $table->timestamp('tanggalKeputusanDpa')->nullable();
            $table->string('email')->unique();
            $table->timestamps();
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

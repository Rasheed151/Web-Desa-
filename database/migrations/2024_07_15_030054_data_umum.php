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
        $table->string('desa');
        $table->string('kecamatan');
        $table->string('kabupaten');
        $table->string('provinsi');
        $table->text('alamat');
        $table->string('email')->unique();
        $table->string('npwp');
        $table->integer('kodeDesa');
        $table->string('kepalaDesa');
        $table->bigInteger('noPerbubPjb');
        $table->string('tanggalPerbubPjb')->nullable();
        $table->bigInteger('noKeputusanDpa');
        $table->string('tanggalKeputusanDpa')->nullable();
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
        Schema::dropIfExists('dataUmum');
    }
};

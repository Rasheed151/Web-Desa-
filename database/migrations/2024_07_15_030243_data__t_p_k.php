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
            $table->string('noHp');
            $table->integer('noSkTpk');
            $table->timestamp('tanggalSkTpk')->nullable();
            $table->string('jabatan');
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
        Schema::dropIfExists('data_tpk');
    }
};

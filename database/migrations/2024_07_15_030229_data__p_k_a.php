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
            $table->integer('noPka');
            $table->string('namaAparat');
            $table->string('ttl');
            $table->integer('NIK');
            $table->string('jabatan');
            $table->string('noHp');
            $table->text('alamat');
            $table->integer('npwp');
            $table->integer('noSkPka');
<<<<<<< HEAD
            $table->timestamp('tanggalSkPka')->nullable();
            $table->unsignedBigInteger('userId'); // Updated column type
            $table->timestamps();
    
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
=======
            $table->timestamp('tanggalSkPka');
            $table->timestamps(); // Created at and updated at timestamps
>>>>>>> 6aab7acfb45c6e77037d548d7f516a60d1968632
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

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
        Schema::create('berita_murbangdes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no'); // Nomor
            $table->date('date'); // Tanggal
            $table->time('jam'); // Jam
            $table->string('tempat'); // Tempat
            $table->text('bahasKegiatan'); // Membahas Kegiatan
            $table->string('ketuaBpd'); // Ketua BPD
            $table->string('wklMasyarakat'); // Wakil Masyarakat
            $table->string('pimpinanRapat'); // Pimpinan Rapat
            $table->string('notulen'); // Notulen
            $table->string('ns1')->nullable(); // Narasumber 1
            $table->string('ns1Dari')->nullable(); // Narasumber 1 dari
            $table->string('ns2')->nullable(); // Narasumber 2
            $table->string('ns2Dari')->nullable(); // Narasumber 2 dari
            $table->string('ns3')->nullable(); // Narasumber 3
            $table->string('ns3Dari')->nullable(); // Narasumber 3 dari
            $table->string('ns4')->nullable(); // Narasumber 4
            $table->string('ns4Dari')->nullable(); // Narasumber 4 dari
            $table->string('ns5')->nullable(); // Narasumber 5
            $table->string('ns5Dari')->nullable(); // Narasumber 5 dari
            $table->text('materiPembahasan'); // Materi Pembahasan
            $table->text('kesepakatanAkhir'); // Kesepakatan Akhir dari Musrenbangdes
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
        Schema::dropIfExists('berita_murbangdes');
    }
};

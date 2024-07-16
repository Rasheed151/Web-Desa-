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
            $table->id();
            $table->integer('no'); // Nomor
            $table->date('date'); // Tanggal
            $table->time('jam'); // Jam
            $table->string('tempat'); // Tempat
            $table->text('membahas_kegiatan'); // Membahas Kegiatan
            $table->string('ketua_bpd'); // Ketua BPD
            $table->string('wakil_masyarakat'); // Wakil Masyarakat
            $table->string('pimpinan_rapat'); // Pimpinan Rapat
            $table->string('notulen'); // Notulen
            $table->string('narasumber_1')->nullable(); // Narasumber 1
            $table->string('narasumber_1_dari')->nullable(); // Narasumber 1 dari
            $table->string('narasumber_2')->nullable(); // Narasumber 2
            $table->string('narasumber_2_dari')->nullable(); // Narasumber 2 dari
            $table->string('narasumber_3')->nullable(); // Narasumber 3
            $table->string('narasumber_3_dari')->nullable(); // Narasumber 3 dari
            $table->string('narasumber_4')->nullable(); // Narasumber 4
            $table->string('narasumber_4_dari')->nullable(); // Narasumber 4 dari
            $table->string('narasumber_5')->nullable(); // Narasumber 5
            $table->string('narasumber_5_dari')->nullable(); // Narasumber 5 dari
            $table->text('materi_pembahasan'); // Materi Pembahasan
            $table->text('kesepakatan_akhir'); // Kesepakatan Akhir dari Musrenbangdes
            $table->timestamps(); // Created at and updated at timestamps
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

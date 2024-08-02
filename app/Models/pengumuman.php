<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman_pengadaan';

        // Tentukan primary key
        protected $primaryKey = 'id';

        // Tentukan apakah primary key auto-increment atau tidak
        public $incrementing = true;
    
        // Tentukan tipe data primary key
        protected $keyType = 'int';
    
        // Tentukan apakah tabel menggunakan timestamps atau tidak
        public $timestamps = true;

    protected $fillable = [
        'no',
        'namaKegiatan',
        'nilaiPengadaan',
        'caraPengadaan',
        'volume',
        'satuan',
        'namaTpk',
        'lksKegiatan',
        'tglMulai',
        'tglSelesai',
        'jangkaWaktu',
        'wktuPelaksanaan',
        'tglPengumuman',
    ];
}

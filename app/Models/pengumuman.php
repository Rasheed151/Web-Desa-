<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman_pengadaan';

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

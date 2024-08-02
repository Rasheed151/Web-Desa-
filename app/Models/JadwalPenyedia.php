<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPenyedia extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pelaksanaan_penyedia';

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
        'ketuaTpk',
        'sekTpk',
        'anggotaTpk',
        'jmlhWaktu',
        'wktPelaksanaanDari',
        'wktPelaksanaanSampai',
        'nlaiPekerjaan',
        'namaKasi',
        'jabatanKasi',
        'lokasi'
    ];

    // Kolom yang di-cast ke tipe data tertentu
    protected $casts = [
        'wktPelaksanaanDari' => 'date',
        'wktPelaksanaanSampai' => 'date',
        'nlaiPekerjaan' => 'decimal:2'
    ];
}

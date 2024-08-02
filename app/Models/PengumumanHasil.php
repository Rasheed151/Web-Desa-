<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengumumanHasil extends Model
{
    use HasFactory;

    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'pengumuman_hasil_kegiatan_swa';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi (mass assignable)
    protected $fillable = [
        'no', 
        'tggl', 
        'kegiatan', 
        'nilaiPengadaan', 
        'output', 
        'noPengumuman', 
        'lokasi', 
        'wktuPelaksanaan', 
        'satuan', 
        'ketuaTpk', 
        'sekTpk', 
        'angTpk'
    ];

    // Jika ada atribut yang harus di-cast, tambahkan di sini
    protected $casts = [
        'tggl' => 'date',
    ];
}

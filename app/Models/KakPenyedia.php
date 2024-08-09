<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakPenyedia extends Model
{
    use HasFactory;

    protected $table = 'kak_penyedia';

    // Tentukan primary key
    protected $primaryKey = 'id'; 

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    protected $fillable = [
        'noKeg',
        'ltrBelakang',
        'nerimaManfaat',
        'caraLaksana',
        'ketuaTpk',
        'sekTpk',
        'angTpk',
        'namaKasi',
        'jbtnKasi',
        'diLokasi',
        'tgglMulai',
        'jangkaWaktu',
        'biayaKegiatan',
        'sebesarRp',
        'userId'
    ];

}

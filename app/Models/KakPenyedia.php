<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakPenyedia extends Model
{
    use HasFactory;

    protected $table = 'kak_penyedia';
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
        'sebesarRp'
    ];
    protected $casts = [
        'sebesarRp' => 'decimal:2'
    ];
}

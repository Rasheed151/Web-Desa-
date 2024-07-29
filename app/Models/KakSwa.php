<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakSwa extends Model
{
    use HasFactory;
    protected $table = 'kak_swa';
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

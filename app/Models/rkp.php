<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rkp extends Model
{
    use HasFactory;

    protected $table = 'rkp_desa';
    protected $fillable = [
        'no',
        'TBL',
        'bidang',
        'subBidang',
        'jnsKegiatan',
        'lksKegiatan',
        'volume',
        'sasaran',
        'wktuPelaksanaan',
        'jmlhBiaya',
        'smbrBiaya',
        'swakelola',
        'krjsmaAndes',
        'krjsmaPitig',
        'rncnaPegiat',
    ];

    protected $casts = [
        'swakelola' => 'boolean',
        'krjsmaAndes' => 'boolean',
        'krjsmaPitig' => 'boolean',
        'jmlhBiaya' => 'decimal:2',
    ];
}

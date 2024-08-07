<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rkp extends Model
{
    use HasFactory;

    protected $table = 'rkp_desa';

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
        'userId', // Ensure this is fillable
    ];

    protected $casts = [
        'swakelola' => 'boolean',
        'krjsmaAndes' => 'boolean',
        'krjsmaPitig' => 'boolean',
        'jmlhBiaya' => 'decimal:2',
    ];
}

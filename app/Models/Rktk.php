<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rktk extends Model
{
    use HasFactory;

    protected $table = 'rktk_swa';
    protected $fillable = [
        'no',
        'pekerjaan',
        'jenis',
        'kegiatan',
        'kode',
        'satuan',
        'noPerbup',
        'namaKasi',
        'jbtnKasi',
        'noDpa',
        'tgglDpa'
    ];

    // Kolom yang di-cast ke tipe data tertentu
    protected $casts = [
        'tggl' => 'date',
        'tgglDpa' => 'date'
    ];
}

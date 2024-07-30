<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanHasil extends Model
{
    use HasFactory;

    protected $table = 'catatan_hasil';
    protected $fillable = [
        'no',
        'kegiatan',
        'tempat',
        'tggl',
        'waktuLaksana',
        'agenda',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    use HasFactory;

    protected $table = 'dataUmum';
    public $timestamps = false;

    protected $fillable = [
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'npwp',
        'kodeDesa',
        'kepalaDesa',
        'noPerbubPjb',
        'tanggalPerbubPjb',
        'noKeputusanDpa',
        'tanggalKeputusanDpa',
        'email',
    ];
     // Kolom yang di-cast ke tipe data tertentu
    
}

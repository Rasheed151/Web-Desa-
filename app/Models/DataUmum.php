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
        'tempatDesa',
        'alamatKantor',
        'npwp',
        'kodeDesa',
        'kepalaDesa',
        'noPerbubPjb',
        'tanggalPerbubPjb',
        'noKeputusanDpa',
        'tanggalKeputusanDpa',
        'email',
    ];
}

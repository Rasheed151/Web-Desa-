<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    use HasFactory;

    protected $table = 'data_umum';

    protected $fillable = [
        'tempat_desa',
        'alamat_kantor',
        'npwp',
        'kode_desa',
        'kepala_desa',
        'no_perbub_pjb',
        'tanggal_perbub_pjb',
        'no_keputusan_dpa',
        'tanggal_keputusan_dpa',
        'email',
    ];
}

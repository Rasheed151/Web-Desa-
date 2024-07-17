<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAparat extends Model
{
    use HasFactory;

    protected $table = 'data_aparat';

    protected $fillable = [
        'nomor',
        'nama_lengkap',
        'gender',
        'ttl',
        'NIK',
        'alamat',
        'npwp',
        'no_hp',
        'jabatan',
    ];
}

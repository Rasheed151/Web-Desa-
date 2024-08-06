<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pka extends Model
{
    use HasFactory;

    protected $table = 'data_pka';

    protected $fillable = [
        'nomor',
        'nama',
        'ttl',
        'NIK',
        'jabatan',
        'noHp',
        'alamat',
        'npwp',
        'noSkPka',
        'tanggalSkPka',
        'userId', // Ensure this is fillable
    ];
}

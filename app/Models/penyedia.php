<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyedia extends Model
{
    use HasFactory;

    protected $table = 'data_penyedia';

    protected $fillable = [
        'nama',
        'gender',
        'ttl',
        'NIK',
        'alamat_rumah',
        'nama_toko',
        'alamat_toko',
        'npwp',
        'nib',
        'userId', // Ensure this is fillable
    ];
}

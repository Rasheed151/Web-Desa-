<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpk extends Model
{
    use HasFactory;

    protected $table = 'data_tpk';

    protected $fillable = [
        'nama', 
        'gender', 
        'ttl', 
        'alamat', 
        'NIK', 
        'noHp', 
        'noSkTpk', 
        'tanggalSkTpk', 
        'jabatan',
        'userId', // Ensure this is fillable
    ];
}

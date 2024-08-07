<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAparat extends Model
{
    use HasFactory;

    protected $table = 'data_aparat';
    public $timestamps = true;

    protected $fillable = [
        'noAparat',
        'namaAparat',
        'gender',
        'ttl',
        'NIK',
        'almtAparat',
        'npwp',
        'noHp',
        'jabatan',
        'userId', // Ensure this is fillable
    ];
    public function aparat(){
        return $this->hasMany(Pka::class, 'namaAparat');
    }
}

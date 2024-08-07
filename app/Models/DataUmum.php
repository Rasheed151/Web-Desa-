<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUmum extends Model
{
    use HasFactory;

    protected $table = 'dataUmum';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    protected $fillable = [
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'alamat',
        'email',
        'npwp',
        'kodeDesa',
        'kepalaDesa',
        'noPerbubPjb',
        'tanggalPerbubPjb',
        'noKeputusanDpa',
        'tanggalKeputusanDpa',
        'userId', // Ensure this is fillable
    ];
    
     // Kolom yang di-cast ke tipe data tertentu
    
}

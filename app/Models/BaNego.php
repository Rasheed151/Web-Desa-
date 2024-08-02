<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaNego extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'ba_negosiasi';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    // Tentukan atribut yang dapat diisi (mass assignable)
    protected $fillable = [
        'no',
        'noBa',
        'tggl',
        'noSktpk',
        'tgglSktpk',
        'ketuaTpk',
        'sekTpk',
        'angTpk',
        'namaToko',
        'alamatToko',
        'namaBank',
        'cabang',
        'noRek',
        'spesifikasi',
        'nego',
        'selesaiKerja',
        'sd',
        'bayarPka',
        'garansi',
        'spdr'
    ];

    // Jika ada atribut yang harus di-cast, tambahkan di sini
    protected $casts = [
        'tggl' => 'date',
        'sd' => 'date'
    ];

    
}


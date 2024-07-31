<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerjanjian extends Model
{
    use HasFactory;

    protected $table = 'surat_perjanjian';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    protected $fillable = [
        'no',
        'noSp',
        'tggl',
        'namaKasi',
        'jbtnKasi',
        'alamat',
        'namaPekerjaan',
        'lokasi',
        'namaDir',
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

    protected $cast = [
        'tggl' => 'date',
        'sd' => 'date'
    ];
}

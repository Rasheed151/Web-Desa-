<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BastPekerjaan extends Model
{
    use HasFactory;


    protected $table = 'bast_pekerjaan';

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
        'noSkTpk',
        'tgglSktpk',
        'namaKasi',
        'jbtnKasi',
        'kegiatan',
        'nlaiPengadaan',
        'output',
        'satuan',
        'lokasi',
        'jdwlLaksana',
        'ketuaTpk',
        'sekTpk',
        'angTpk',
        'noSkpka',
        'tgglSkpka'

    ];

    // Jika ada atribut yang harus di-cast, tambahkan di sini
    protected $casts = [
        'tggl' => 'date',
        'tgglSktpk' => 'date',
        'tgglSkpka' => 'date'
    ];
}

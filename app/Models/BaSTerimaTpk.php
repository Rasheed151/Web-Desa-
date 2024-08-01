<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaSTerimaTpk extends Model
{
    use HasFactory;

    protected $table = 'ba_serah_tpk';

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
        'tggl',
        'noBa',
        'kegiatan',
        'nlaiPengadaan',
        'output',
        'satuan',
        'lokasi',
        'jdwlLaksana',
        'namaKasi',
        'jbtnKasi',
        'noDes',
        'tgglDes',
        'ketuaTpk',
        'sekTpk',
        'angTpk',
        'noTus',
        'tgglTus'
    ];

    // Jika ada atribut yang harus di-cast, tambahkan di sini
    protected $casts = [
        'tggl' => 'date',
        'tgglDes' => 'date',
        'tgglTus' => 'date'
    ];
}

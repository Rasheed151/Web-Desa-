<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BastPenyedia extends Model
{
    use HasFactory;

    protected $table = 'kak_penyedia';

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
        'noBa',
        'tggl',
        'namaKasi',
        'jbtnKasi',
        'ketuaTpk',
        'sekTpk',
        'angTpk',
        'noSp',
        'tgglSp',
        'namaToko',
        'alamatToko',
        'namaDir',
        'kegiatan',
        'nlaiPengadaan',
        'output',
        'satuan',
        'lokasi',
        'jdwlLaksana'
    ];
    protected $casts = [
        'tggl' => 'date',
        'tgglSp' => 'date'
    ];

}

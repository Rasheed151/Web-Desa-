<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenetapanPemenang extends Model
{
    use HasFactory;

    protected $table = 'penetapan_pemenang';

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
        'noSrt',
        'lampiran',
        'prihal',
        'noBaNego',
        'tgglBaNego',
        'kegiatan',
        'pekerjaan',
        'nilaiHps',
        'smbrDana',
        'namaToko',
        'alamatToko',
        'hrgaTawar',
        'jbtnKasi',
        'ketuaTpk'
    ];

    // Jika ada atribut yang harus di-cast, tambahkan di sini
    protected $casts = [
        'tggl' => 'date'
    ];
}

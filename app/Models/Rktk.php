<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rktk extends Model
{
    use HasFactory;

    protected $table = 'rktk_swa';

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
        'pekerjaan',
        'jenis',
        'kegiatan',
        'kode',
        'satuan',
        'noPerbup',
        'namaKasi',
        'jbtnKasi',
        'noDpa',
        'tgglDpa'
    ];

    // Kolom yang di-cast ke tipe data tertentu
    protected $casts = [
        'tggl' => 'date',
        'tgglDpa' => 'date'
    ];
}

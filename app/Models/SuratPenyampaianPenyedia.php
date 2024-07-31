<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPenyampaianPenyedia extends Model
{
    use HasFactory;

    protected $table = 'srt_penyampaian_penyedia';

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
        'noSrt',
        'tggl',
        'perihal',
        'kegiatan',
        'lokasi',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPenyampaianSwa extends Model
{
    use HasFactory;

    protected $table = 'srt_penyampaian_swa';
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanHasil extends Model
{
    use HasFactory;

    protected $table = 'catatan_hasil_pembahasan_swa';

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
        'kegiatan',
        'tempat',
        'tggl',
        'waktuPelaksana',
        'agenda',
        'noPerbup',
        'namaKasi',
        'jbtnKasi',
        'noDpa',
       'tgglDpa',
        'userId', // Ensure this is fillable
    ];

    // Kolom yang di-cast ke tipe data tertentu
    protected $casts = [
        'tggl' => 'date',
        'tgglDpa' => 'date'
    ];
}

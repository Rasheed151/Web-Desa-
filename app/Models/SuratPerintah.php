<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPerintah extends Model
{
    use HasFactory;

    protected $table = 'surat_perintah';

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
        'noSpk',
        'tgglSpk',
        'namaPka',
        'jbtnPka',
        'namaPenyedia',
        'namaToko',
        'noSpl',
        'tgglSpl',
        'noBa',
        'tgglBa',
        'smbrDana',
        'kegiatan',
        'sbsr',
        'jnsKontrak',
        'wktuLaksana'
    ];

    protected $cast = [
        'tgglSpk' => 'date',
        'tgglSpl' => 'date',
        'tgglBa' => 'date'
    ];
}

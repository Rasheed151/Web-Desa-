<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPenawaran extends Model
{
    use HasFactory;

    protected $table = 'surat_penawaran';

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
        'tggl',
        'noSTawar',
        'lampiran',
        'namaPekerjaan',
        'noSMinta',
        'tgglSMinta',
        'sebesar',
        'jangkaWktu',
        'tgglBa',
        'pnwrnBerlaku',
        'namaPemasok',
        'namaToko',
        'alamatToko'
    ];

    protected $cast = [
        'tggl' => 'date',
        'tgglSMinta' => 'date',
        'tgglBa' => 'date'
    ];
}

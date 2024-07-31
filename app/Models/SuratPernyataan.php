<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPernyataan extends Model
{
    use HasFactory;

    protected $table = 'surat_pernyataan';

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
        'pekerjaan',
        'lokasi',
        'namaPemasok',
        'ttl',
        'NIK',
        'alamat',
        'gerakDibidang',
        'namaToko',
        'alamatToko',
        'noHp',
        'npwp',
        'nip'
    ];

    protected $cast = [
        'tggl' => 'date'
    ];
}

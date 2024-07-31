<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHasil extends Model
{
    use HasFactory;

    protected $table = 'laporan_hasil';

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
        'kegiatan',
        'ketuaTpk',
        'rencanaVolume',
        'rencanaSatuan',
        'rencanaAnggaran',
        'realisasiVolume',
        'realisasiSatuan',
        'realisasiAnggaran',
        'capaian'
    ];
}

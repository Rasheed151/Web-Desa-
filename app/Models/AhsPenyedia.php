<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhsPenyedia extends Model
{
    use HasFactory;

    protected $table = 'ahs_penyedia';

    // Tentukan primary key
    protected $primaryKey = 'id';

    // Tentukan apakah primary key auto-increment atau tidak
    public $incrementing = true;

    // Tentukan tipe data primary key
    protected $keyType = 'int';

    // Tentukan apakah tabel menggunakan timestamps atau tidak
    public $timestamps = true;

    protected $fillable = [
        'noKeg',
        'noHps',
        'pekerjaan',
        'lokasi',
        'namaKasi',
        'jbtnKasi',
        'kegiatan',
        'kode',
        'satuan',
        'koefisien',
        'hrgSatuan',
        'jmlhHarga',
        'jenis',
        'userId'
    ];
    protected $casts = [
        'koefisien' => 'decimal:2',
        'hrgSatuan' => 'decimal:2',
        'jmlhHarga' => 'decimal:2'
    ];
}

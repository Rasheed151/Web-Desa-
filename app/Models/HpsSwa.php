<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HpsSwa extends Model
{
    use HasFactory;

    protected $table = 'hps_swa';

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
        'kegiatan',
        'lokasi',
        'namaKasi',
        'jbtnKasi',
        'idHps',
        'namaBarjas',
        'spesifikasi',
        'kode',
        'koefisien',
        'volume',
        'satuan',
        'hrgSatuan',
        'jmlhHarga',
        'jenis',
        'userId', // Ensure this is fillable
    ];
    protected $casts = [
        'volume' => 'decimal:2',
        'koefisien' => 'decimal:2',
        'hrgSatuan' => 'decimal:2',
        'jmlhHarga' => 'decimal:2'
    ];
}

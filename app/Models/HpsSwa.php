<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HpsSwa extends Model
{
    use HasFactory;

    protected $table = 'hps_swa';
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
        'jenis'
    ];
    protected $casts = [
        'volume' => 'decimal:2',
        'koefisien' => 'decimal:2',
        'hrgSatuan' => 'decimal:2',
        'jmlhHarga' => 'decimal:2'
    ];
}

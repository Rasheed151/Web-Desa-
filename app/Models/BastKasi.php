<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BastKasi extends Model
{
    use HasFactory;

    protected $table = 'kak_penyedia';

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
        'noBa',
        'tggl',
        'namaKasi',
        'jbtnKasi',
        'noSkpka',
        'kegiatan',
        'nlaiPengadaan',
        'output',
        'satuan'
    ];
    protected $casts = [
        'tggl' => 'date'
    ];
}

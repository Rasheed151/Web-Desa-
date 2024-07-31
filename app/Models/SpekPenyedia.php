<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpekPenyedia extends Model
{
    use HasFactory;

    protected $table = 'spek_swa';

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
        'kegiatan',
        'jenis',
        'pekerjaan',
        'lokasi',
        'spek1',
        'spek2',
        'namaKasi',
        'jbtnKasi'
    ];
}

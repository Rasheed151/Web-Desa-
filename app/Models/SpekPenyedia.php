<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpekPenyedia extends Model
{
    use HasFactory;

    protected $table = 'spek_swa';
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

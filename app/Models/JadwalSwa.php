<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSwa extends Model
{
    use HasFactory;
    protected $table = 'jadwal_pelaksanaan_swa';
    protected $fillable = [
        'no',
        'namaKegiatan',
        'kegiatan',
        'jdwlLaksana',
        'biaya',
        'bobot',
        'namaKasi',
        'jbtnKasi',
        'jdwlKerja1',
        'jdwlKerja2',
        'jdwlKerja3',
        'jdwlKerja4',
        'jdwlKerja5',
        'jdwlKerja6',
        'jdwlKerja7',
        'jdwlKerja8',
        'jdwlKerja9',
        'jdwlKerja10',
        'jdwlKerja11',
        'jdwlKerja12',
        'jdwlKerja13',
        'jdwlKerja14',
        'jdwlKerja15',
        'jdwlKerja16',
        'jdwlKerja17',
        'jdwlKerja18',
    ];
}

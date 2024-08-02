<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKemajuan extends Model
{
    use HasFactory; 

    protected $table = 'laporan_kemajuan';

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
        'pekerjaan',
        'lokasi',
        'kegiatan',
        'biaya',
        'bobot',
        'rencana',
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
        'jdwlKerja17'
    ];
}

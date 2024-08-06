<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $table = 'berita_murbangdes';

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
         'date',
          'jam',
           'tempat',
            'bahasKegiatan',
             'ketuaBpd',
              'wklMasyarakat',
               'pimpinanRapat', 
        'notulen', 'ns1', 'ns1Dari', 'ns2', 'ns2Dari', 'ns3', 'ns3Dari', 'ns4', 'ns4Dari', 'ns5', 
        'ns5Dari', 'materiPembahasan', 'kesepakatanAkhir'
    ];
}

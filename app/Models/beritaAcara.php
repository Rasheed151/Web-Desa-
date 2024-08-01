<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;

    protected $table = 'berita_murbangdes';

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

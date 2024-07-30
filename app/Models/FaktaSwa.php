<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaktaSwa extends Model
{
    use HasFactory;

    protected $table = 'fakta_swa';
    protected $fillable = [
        'tggl',
        'nama',
        'alamat',
        'atasNama',
        'noIdentitas'
    ];

    // Kolom yang di-cast ke tipe data tertentu
    protected $casts = [
        'tggl' => 'date'
    ];
}

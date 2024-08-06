<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pka extends Model
{
    use HasFactory;

    protected $table = 'data_pka';

    protected $fillable = [
        'noPka',
        'noSkPka',
        'tanggalSkPka',
        'userId', // Ensure this is fillable
    ];

    public function aparat(){
        return $this->belongsTo(DataAparat::class, 'noAparat');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitkompetensi extends Model
{
    use HasFactory;
    
    public function skema(){
        return $this->belongsTo(Skema::class);
    }

    protected $fillable = [
        'kode_unit',
        'skema_id',
        'judul_unit'
    ];
}

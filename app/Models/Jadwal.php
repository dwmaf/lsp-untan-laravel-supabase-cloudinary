<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    public function skema(){
        return $this->belongsTo(Skema::class);
    }
    public function asesor(){
        return $this->hasOne(Asesor::class);
    }

    protected $fillable = [
        'kapasitas',
        'skema_id',
        'asesor_id',
        'biaya',
        'tanggal_mulai',
        'tanggal_berakhir',
        'daftar_mulai',
        'daftar_berakhir'
    ];
}

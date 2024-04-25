<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaSertif extends Model
{
    use HasFactory;

    public function skema(){
        return $this->belongsTo(Skema::class);
    }
}

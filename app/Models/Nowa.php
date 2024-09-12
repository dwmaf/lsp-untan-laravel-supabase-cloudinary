<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nowa extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'value'
    ];

    // Di dalam model Nowa
    public static function getByKey($key)
    {
        return self::where('key', $key)->get();
    }
}

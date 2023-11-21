<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feladat extends Model
{
    use HasFactory;

    protected $fillable = [
        'leírás',
        'kezdete',
        'vége',
    ];
}

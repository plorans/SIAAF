<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{

    use HasFactory;

    protected $table = 'cat_estatus';

    protected $fillable = [
        'descripcion'
    ];
}

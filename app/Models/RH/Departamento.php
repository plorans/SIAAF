<?php

namespace App\Models\RH;

use App\Models\Estatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

    use HasFactory;

    protected $table = 'cat_departamento';

    protected $fillable = [
        'nombre',
        'id_area',
        'id_estatus'
    ];

    // Relaciones
    public function area()
    {
        return $this->hasMany(Area::class);
    }

    public function estatus()
    {
        return $this->hasMany(Estatus::class);
    }
}

<?php

namespace App\Models\RH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermisoTipo extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relaciones
    public function permisoSolicitud()
    {
        return $this->hasMany(PermisoSolicitud::class);
    }

}

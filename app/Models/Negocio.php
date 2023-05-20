<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'user_id',
        'tipo_negocio',
        'impuestos',
        'tipo_cuenta',
        'notas',
        'logoPrincipal',
        'direccion',
        'altura',
        'ciudad',
        'provincia',
        'incluye_imp',
    ];

}

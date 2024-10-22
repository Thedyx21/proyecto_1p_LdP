<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProximoPartido extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'proximo_partidos';

    // Definir la relación con el modelo Compra
    public function compras()
    {
        return $this->hasMany(Compra::class, 'partido_id');
    }
}


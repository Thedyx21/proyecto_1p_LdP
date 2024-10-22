<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaPosiciones extends Model
{
    use HasFactory;

    // Definir los campos que se pueden asignar de forma masiva
    protected $fillable = [
        'equipo',
        'puntos',
        'partidos_jugados',
        'victorias',
        'empates',
        'derrotas',
    ];

    // Si tu tabla en la base de datos no sigue la convención de nombres (plural), puedes especificar el nombre de la tabla
    // protected $table = 'nombre_de_tu_tabla'; 
}


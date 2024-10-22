<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    // Si el nombre de la tabla es "partidos", Laravel lo reconocerá automáticamente
    protected $table = 'partidos';

    // Campos que pueden ser llenados por el usuario
    protected $fillable = ['equipo_local', 'equipo_visitante', 'fecha', 'resultado_local', 'resultado_visitante'];
}

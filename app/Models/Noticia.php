<?php

// app/Models/Noticia.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Agregar los campos que pueden ser llenados por el usuario
    protected $fillable = ['titulo', 'contenido', 'imagen', 'resumen', 'fecha'];
}
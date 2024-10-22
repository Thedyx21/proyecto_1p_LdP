<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaRopa extends Model
{
    use HasFactory;

    protected $table = 'venta_ropa'; // Tabla asociada
    protected $fillable = ['nombre', 'talla', 'precio', 'cantidad'];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaPosicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('tabla_posiciones', function (Blueprint $table) {
        $table->id(); // Clave primaria AUTO_INCREMENT
        $table->string('equipo', 255); // Columna 'equipo' tipo VARCHAR
        $table->integer('puntos'); // Columna 'puntos' tipo INT
        $table->integer('partidos_jugados'); // Columna 'partidos_jugados' tipo INT
        $table->integer('victorias'); // Columna 'victorias' tipo INT
        $table->integer('empates'); // Columna 'empates' tipo INT
        $table->integer('derrotas'); // Columna 'derrotas' tipo INT
        $table->timestamps(); // Crea 'created_at' y 'updated_at'
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabla_posiciones');
    }
}

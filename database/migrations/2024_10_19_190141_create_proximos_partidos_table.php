<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximosPartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximo_partidos', function (Blueprint $table) {
            $table->id();
            $table->string('equipo_local');
            $table->string('equipo_visitante');
            $table->dateTime('fecha_partido');
            $table->string('estadio');
            $table->decimal('precio_entrada', 8, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proximos_partidos');
    }
}

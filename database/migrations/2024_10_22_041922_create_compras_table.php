<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id(); // ID de la compra
            $table->foreignId('partido_id')->constrained('proximos_partidos')->onDelete('cascade'); // ID del partido
            $table->integer('cantidad'); // Cantidad de entradas
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios')->onDelete('set null'); // ID del usuario
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}

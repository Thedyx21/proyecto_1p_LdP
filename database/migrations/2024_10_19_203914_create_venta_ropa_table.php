<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaRopaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_ropa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('talla', 10);
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
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
        Schema::dropIfExists('venta_ropa');
    }
}

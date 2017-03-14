<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionNecesidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_necesidades', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->integer('estacion_id')->unsigned();
            $table->foreign('estacion_id')->references('id')->on('crear_estaciones');
            $table->integer('tipequip_id')->unsigned();
            $table->foreign('tipequip_id')->references('id')->on('maestro_tipo_equipamientos');
            $table->string('estatus')->default('1');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('gestion_necesidades');
    }
}

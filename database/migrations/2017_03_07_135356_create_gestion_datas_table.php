<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\maestro_tipo_equipamiento;
class CreateGestionDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipequip_id')->unsigned();
            $table->foreign('tipequip_id')->references('id')->on('maestro_tipo_equipamientos');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->integer('estacion_id')->unsigned();
            $table->foreign('estacion_id')->references('id')->on('crear_estaciones');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('gestion_datas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementosTipoEquipamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos_tipo_equipamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomelemento');
            $table->integer('tipequip_id')->unsigned();
            $table->foreign('tipequip_id')->references('id')->on('maestro_tipo_equipamientos');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('elementos_tipo_equipamientos');
    }
}

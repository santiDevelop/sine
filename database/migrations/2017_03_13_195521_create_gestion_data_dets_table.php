<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionDataDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_data_dets', function (Blueprint $table) {
            $table->foreign('solicitud_id')->references('id')->on('gestion_datas');
            $table->integer('solicitud_id')->unsigned();
            $table->integer('elemento_id')->unsigned();
            $table->foreign('elemento_id')->references('id')->on('elementos_tipo_equipamientos');
            $table->integer('cantotal')->nullable();
            $table->integer('cantopt')->nullable();
            $table->integer('cantdet')->nullable();
            $table->integer('cantfs')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('serial')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('gestion_data_dets');
    }
}

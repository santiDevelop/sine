<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user')->unique();
            $table->smallInteger('status'); // 1 activo, 2 bloqueado
            $table->string('name');
            $table->integer('cedula')->unique();
            $table->smallInteger('cargo');
            $table->smallInteger('typeuser')->default('2'); //1 administrador , 2 usuarios regular
            $table->smallInteger('cbombero');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

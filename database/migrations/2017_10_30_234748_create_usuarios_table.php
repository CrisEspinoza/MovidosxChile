<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');

          //fk
          $table->integer('id_rol')->unsigned()->nullable();
          $table->foreign('id_rol')->references('id')->on('rol');

          $table->string('Rut')->unique();
          $table->string('Nombres');
          $table->string('Apellidos');
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
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('usuarios');
      Schema::enableForeignKeyConstraints();
    }
}

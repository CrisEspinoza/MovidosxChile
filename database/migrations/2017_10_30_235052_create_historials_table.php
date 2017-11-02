<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Fecha');

            $table->string('Accion');
            $table->string('Nombre_Tabla');
            $table->string('Atributo_Modificado');


            //fk
            $table->integer('id_usuario')->unsigned()->nullable();
            $table->foreign('id_usuario')->references('id')->on('usuarios');


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
      Schema::dropIfExists('historials');
      Schema::enableForeignKeyConstraints();
    }
}

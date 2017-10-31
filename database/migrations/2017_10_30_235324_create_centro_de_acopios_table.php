<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroDeAcopiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_de_acopios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Estado');
          $table->integer('Avance');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');
          $table->integer('Id_Usuario');
          $table->integer('Id_Catastrofe');

          $table->string('Nombre_Centro_Acopio');

          $table->integer('Id_Medida')->unsigned()->nullable();
          $table->foreign('Id_Medida')->references('id')->on('medidas');


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
      Schema::dropIfExists('centro_de_acopios');
      Schema::enableForeignKeyConstraints();
    }
}

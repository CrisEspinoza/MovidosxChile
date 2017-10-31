<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntariados', function (Blueprint $table) {
          $table->increments('id');

          $table->string('Estado');
          $table->integer('Avance');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');
          $table->integer('Id_Usuario');
          $table->integer('Id_Catastrofe');

          $table->string('Tipo_Trabajo');
          $table->string('Perfil_Voluntario');
          $table->integer('Cantidad_Minima_Voluntarios');
          $table->integer('Cantidad_Maxima_Voluntarios');


          $table->integer('Id_Medida')->unsigned()->nullable();
          $table->foreign('Id_Medida')->references('id')->on('medidas');

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
      Schema::dropIfExists('voluntariados');
      Schema::enableForeignKeyConstraints();
    }
}

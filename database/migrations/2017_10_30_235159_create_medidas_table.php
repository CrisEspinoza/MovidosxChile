<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Estado');
          $table->integer('Avance');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');


          //fk
          $table->integer('Id_Usuario')->unsigned()->nullable();
          $table->foreign('Id_Usuario')->references('id')->on('usuarios');

          $table->integer('Id_Catastrofe')->unsigned()->nullable();
          $table->foreign('Id_Catastrofe')->references('id')->on('catastrofe');



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
      Schema::dropIfExists('medidas');
      Schema::enableForeignKeyConstraints();
    }
}

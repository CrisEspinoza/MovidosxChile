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
          
          $table->morphs('medidaOP');

          $table->string('Estado');
          $table->integer('Avance');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');

          //fk
          $table->integer('id_isuario')->unsigned()->nullable();
          $table->foreign('id_isuario')->references('id')->on('usuarios');

          $table->integer('id_catastrofe')->unsigned()->nullable();
          $table->foreign('id_catastrofe')->references('id')->on('catastrofes');



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
        Schema::dropIfExists('medidas');
    }
}

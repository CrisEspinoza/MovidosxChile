<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Estado');
          $table->integer('Avance');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');
          $table->integer('Id_Usuario');
          $table->integer('Id_Catastrofe');

          $table->integer('Monto');
          $table->integer('Tipo_Donacion');


          $table->integer('Id_Banco')->unsigned()->nullable();
          $table->foreign('Id_Banco')->references('id')->on('banco');

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
      Schema::dropIfExists('donacions');
      Schema::enableForeignKeyConstraints();
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntarioMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('voluntario_medida', function (Blueprint $table) {

             $table->integer('id_voluntario')->unsigned()->nullable();
             $table->foreign('id_voluntario')->references('id')
                  ->on('voluntarios')->onDelete('cascade');


             $table->integer('id_medida')->unsigned()->nullable();
             $table->foreign('id_medida')->references('id')
                  ->on('medidas')->onDelete('cascade');

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
       Schema::dropIfExists('voluntario_medida');
       Schema::enableForeignKeyConstraints();
     }
}

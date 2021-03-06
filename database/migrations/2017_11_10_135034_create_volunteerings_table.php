<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteeringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteerings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_work');
            $table->string('profile_voluntary');
            $table->integer('min_voluntaries');
            $table->integer('max_voluntaries');
            $table->integer('current_voluntaries');
            $table->integer('location_id');
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
        Schema::dropIfExists('volunteerings');
    }
}

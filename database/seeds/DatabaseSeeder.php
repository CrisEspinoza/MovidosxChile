<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();

        DB::table('usuarios')->insert([
          'id' => 1,
          'id_rol' => null,
          'Rut'=> '19.391.681-3',
          'Nombres'=> 'Julio Enrique',
          'Apellidos'=> 'Serrano Pavez',
          'password' =>'secret',
        ]);
    }
}

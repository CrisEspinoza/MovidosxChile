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
        DB::table('bancos')->delete();
        DB::table('biens')->delete();
        DB::table('usuarios')->delete();
        DB::table('ubicacions')->delete();
        DB::table('permisos')->delete();
        DB::table('historials')->delete();

        DB::table('rols')->insert([
          'id' => 1,
          'Tipo_Rol' => 1,
        ]);

        DB::table('usuarios')->insert([
          'id' => 1,
          'id_rol' => 1,
          'Rut'=> '19.391.681-3',
          'Nombres'=> 'Julio Enrique',
          'Apellidos'=> 'Serrano Pavez',
          'password' =>'secret',
        ]);


        DB::table('bancos')->insert([
          'id' => 1,
          'Nombre_Banco' => 'banco santander',
        ]);

        DB::table('biens')->insert([
          'id' => 1,
          'Tipo_Bien' => 'polera',
          'Nombre_Bien' => 'Ropa',
        ]);

        DB::table('ubicacions')->insert([
          'id' => 1,
          'Calle' => 'El belloto',
          'Comuna' => 'Estacion Central',
          'Ciudad' => 'Santiago',
        ]);

        DB::table('permisos')->insert([
          'id' => 1,
          'Permiso' => 2,
        ]);

        DB::table('historials')->insert([
          'id' => 1,
          'Fecha' => 2014-10-25,
          'id_usuario' => 2,
        ]);
        
        DB::table('voluntarios')->insert([
          'id' => 1,
          'Nombres_Voluntario' => 'Julio Enrique',
          'Apellidos_Voluntario' => 'Serrano Pavez',
          'Edad' => 20,
        ]);

        /*
        DB::table('catastrofes')->insert([
          'id' => 1,
          'Nombres_Voluntario' => 'Julio Enrique',
          'Apellidos_Voluntario' => 'Serrano Pavez',
          'Edad' => 20,
        ]);

        */






    }
}

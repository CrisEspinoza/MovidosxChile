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

        DB::table('rol_permiso')->insert([
          'id_rol' => 1,
          'id_permiso' => 1,
        ]);


        DB::table('historials')->insert([
          'id' => 1,
          'Fecha' => '2014-10-25',
          'id_usuario' => 1,
        ]);
        
        DB::table('voluntarios')->insert([
          'id' => 1,
          'Nombres_Voluntario' => 'Julio Enrique',
          'Apellidos_Voluntario' => 'Serrano Pavez',
          'Edad' => 20,
        ]);

        
        DB::table('catastrofes')->insert([
          'id' => 1,
          'Tipo_Catastrofe' => 1,
          'id_usuario' => 1 ,
          'id_ubicacion' => 1,
        ]);

/*
        DB::table('medidas')->insert([
          'id' => 1,
          'id_catastrofe' => 1,
          'id_usuario' => 1 ,
          'Estado' => "estado de la medida",
          'Avance' => 50,
          'Fecha_Inicio' => '20141025',
          'Fecha_Termino' => '20141025',
        ]);


        DB::table('centro_de_acopios')->insert([
          'id' => 1,
          'Nombre_Centro_Acopio' => 'Centro de acopio 1',
        ]);

        DB::table('voluntario_medida')->insert([
          'id_voluntario' => 1,
          'id_medida' => 1,
        ]);

        DB::table('eventos')->insert([
          'id' => 1,
          'Nombre_Evento' => 'Evento 1',
          'Actividades' =>'Actividades a realizar: ' ,
          'Alimentos' => 'Alimentos a la venta: ',
        ]);

        DB::table('voluntariados')->insert([
          'id' => 1,
          'Tipo_Trabajo' => 'Construccion',
          'Perfil_Voluntario' => 'Disposicion y fuerza',
          'Cantidad_Minima_Voluntarios' => 10,
          'Cantidad_Maxima_Voluntarios' => 30,
        ]);

        DB::table('donacions')->insert([
          'id' => 1,
          'Monto' => 50000,
          'Tipo_Donación' => 1 ,
          'id_banco' => 1,
        ]);

        DB::table('centro_acopio_bien')->insert([
          'id_banco' => 1 ,
          'id_centroAcopio' => 1,
        ]);


*/


        






    }
}

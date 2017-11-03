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
        DB::table('voluntarios')->delete();
        DB::table('catastrofes')->delete();
        DB::table('medidas')->delete();
        DB::table('centro_de_acopios')->delete();
        DB::table('voluntario_medida')->delete();
        DB::table('eventos')->delete();
        DB::table('voluntariados')->delete();
        DB::table('donacions')->delete();
        DB::table('centro_acopio_bien')->delete();


        DB::table('rols')->insert([
          'id' => 1,
          'Tipo_Rol' => 1,
        ]);

        DB::table('rols')->insert([
          'id' => 3,
          'Tipo_Rol' => 1,
        ]);

        DB::table('rols')->insert([
          'id' => 2,
          'Tipo_Rol' => 1,
        ]);

        DB::table('rols')->insert([
          'id' => 4,
          'Tipo_Rol' => 1,
        ]);

        DB::table('usuarios')->insert([
          'id' => 1,
          'id_rol' => 1,
          'Rut'=> '19.391.681-3',
          'Nombres'=> 'Julio Enrique',
          'Apellidos'=> 'Serrano Pavez',
          'password' =>'secret',
          'Mail'=> 'julio.serrano@usach.cl'
        ]);

        DB::table('usuarios')->insert([
          'id' => 2,
          'id_rol' => 1,
          'Rut'=> '16.509.634-k',
          'Nombres'=> 'Claudio Hector',
          'Apellidos'=> 'Alvarez Espinosa',
          'password' =>'secret',
          'Mail'=> 'claudio.alvarez@gmail.com'
        ]);

        DB::table('usuarios')->insert([
          'id' => 3,
          'id_rol' => 1,
          'Rut'=> '18.809.352-6',
          'Nombres'=> 'Miguel Angel',
          'Apellidos'=> 'Caceres Cabello',
          'password' =>'secret',
          'Mail'=> 'miguel.angel@gmail.com'
        ]);

        DB::table('usuarios')->insert([
          'id' => 4,
          'id_rol' => 1,
          'Rut'=> '19.321.433-1',
          'Nombres'=> 'Jorge Eleuterio',
          'Apellidos'=> 'Godoy Rojas',
          'password' =>'secret',
          'Mail'=> 'jorge.rojas@usach.cl'
        ]);



        DB::table('bancos')->insert([
          'id' => 1,
          'Nombre_Banco' => 'banco santander',
        ]);

        DB::table('bancos')->insert([
          'id' => 2,
          'Nombre_Banco' => 'banco bci',
        ]);

        DB::table('bancos')->insert([
          'id' => 3,
          'Nombre_Banco' => 'banco de chile',
        ]);

        DB::table('bancos')->insert([
          'id' => 4,
          'Nombre_Banco' => 'banco falabella',
        ]);




        DB::table('biens')->insert([
          'id' => 1,
          'Tipo_Bien' => 'Ropa',
          'Nombre_Bien' => 'polera',
        ]);

        DB::table('biens')->insert([
          'id' => 2,
          'Tipo_Bien' => 'Comida',
          'Nombre_Bien' => 'Arroz',
        ]);



        DB::table('ubicacions')->insert([
          'id' => 1,
          'Calle' => 'El belloto',
          'Comuna' => 'Estacion Central',
          'Ciudad' => 'Santiago',
        ]);

        DB::table('ubicacions')->insert([
          'id' => 2,
          'Calle' => 'Presidente Carlos Davila',
          'Comuna' => 'Maipu',
          'Ciudad' => 'Santiago',
        ]);

        DB::table('ubicacions')->insert([
          'id' => 3,
          'Calle' => 'Luis Beltran',
          'Comuna' => 'Pudahuel',
          'Ciudad' => 'Santiago',
        ]);

        DB::table('ubicacions')->insert([
          'id' => 4,
          'Calle' => 'Avenida las torres',
          'Comuna' => 'Quilicura',
          'Ciudad' => 'Santiago',
        ]);

        DB::table('ubicacions')->insert([
          'id' => 5,
          'Calle' => 'Las bellotas',
          'Comuna' => 'Concon',
          'Ciudad' => 'Valparaiso',
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
          'Accion' => 'nada',
          'Atributo_Modificado'=>'nada',
          'Nombre_Tabla'=> 'nada',
          'id_usuario' => 1,
        ]);



        DB::table('voluntarios')->insert([
          'id' => 1,
          'Nombres_Voluntario' => 'Julio Enrique',
          'Apellidos_Voluntario' => 'Serrano Pavez',
          'Edad' => 20,
        ]);

        DB::table('voluntarios')->insert([
          'id' => 2,
          'Nombres_Voluntario' => 'Jorge Andres',
          'Apellidos_Voluntario' => 'Lopez Castro',
          'Edad' => 32,
        ]);

        DB::table('voluntarios')->insert([
          'id' => 3,
          'Nombres_Voluntario' => 'Rosa Ester',
          'Apellidos_Voluntario' => 'Navarrete Pizarro',
          'Edad' => 26,
        ]);

        DB::table('voluntarios')->insert([
          'id' => 4,
          'Nombres_Voluntario' => 'Paula Sofia',
          'Apellidos_Voluntario' => 'Poblete Illesca',
          'Edad' => 24,
        ]);


        DB::table('catastrofes')->insert([
          'id' => 1,
          'Tipo_Catastrofe' => 1,
          'id_usuario' => 1 ,
          'id_ubicacion' => 1,
        ]);


        DB::table('medidas')->insert([
          'id' => 1,
          'medidaOP_id'=> 0,
          'medidaOP_type'=>'null',
          'id_catastrofe' => 1,
          'id_usuario' => 1 ,
          'Estado' => "estado de la medida",
          'Avance' => 50,
          'Meta' => 100,
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

        DB::table('voluntariados')->insert([
          'id' => 2,
          'Tipo_Trabajo' => 'Acopio de ropa',
          'Perfil_Voluntario' => 'Disposicion y tiempo',
          'Cantidad_Minima_Voluntarios' => 5,
          'Cantidad_Maxima_Voluntarios' => 20,
        ]);

        DB::table('voluntariados')->insert([
          'id' => 3,
          'Tipo_Trabajo' => 'Cocina',
          'Perfil_Voluntario' => 'Conocimientos basicos de la cocina',
          'Cantidad_Minima_Voluntarios' => 2,
          'Cantidad_Maxima_Voluntarios' => 5,
        ]);

        DB::table('donacions')->insert([
          'id' => 1,
          'Monto' => 50000,
          'Tipo_Donacion' => 1 ,
          'id_banco' => 1,
        ]);

        DB::table('donacions')->insert([
          'id' => 2,
          'Monto' => 2000,
          'Tipo_Donacion' => 1 ,
          'id_banco' => 3,
        ]);

        DB::table('donacions')->insert([
          'id' => 3,
          'Monto' => 1000,
          'Tipo_Donacion' => 1 ,
          'id_banco' => 3,
        ]);

        DB::table('donacions')->insert([
          'id' => 4,
          'Monto' => 15000,
          'Tipo_Donacion' => 1 ,
          'id_banco' => 2,
        ]);

        DB::table('centro_acopio_bien')->insert([
          'id_bien' => 1 ,
          'id_centroAcopio' => 1,
        ]);




    }
}

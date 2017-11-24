<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('users')->delete();


        DB::table('roles')->insert(['id'=>1, 'type_Rol'=> 'Usuario']);
        DB::table('roles')->insert(['id'=>2, 'type_Rol'=> 'Gobierno']);
        DB::table('roles')->insert(['id'=>3, 'type_Rol'=> 'Organizacion']);

        static $password;
        DB::table('users')->insert(
        ['name'=> 'Gobierno',
        'run'=>'0','email'=> 'gobierno@gmail.com', 'password'=> $password ?: $password = bcrypt('gobierno'), 'role_id'=>2, 'banned'=>0]);

        DB::table('users')->insert(
            ['name'=> 'Techo para chile',
                'run'=>'1','email'=> 'techo@gmail.com', 'password'=> $password ?: $password = bcrypt('secret'), 'role_id'=>3, 'banned'=>0]);

        DB::table('users')->insert(
            ['name'=> 'Greenpeace',
                'run'=>'2','email'=> 'green@gmail.com', 'password'=> $password ?: $password = bcrypt('secret'), 'role_id'=>3, 'banned'=>0]);


        DB::table('regions')->insert([ 'name'=>'Región Metropolitana']);
        DB::table('regions')->insert([ 'name'=>'Arica y Parinacota']);
        DB::table('regions')->insert([ 'name'=>'Tarapacá']);
        DB::table('regions')->insert([ 'name'=>'Antofagasta']);
        DB::table('regions')->insert([ 'name'=>'Atacama']);
        DB::table('regions')->insert([ 'name'=>'Coquimbo']);
        DB::table('regions')->insert([ 'name'=>'Valparaíso']);
        DB::table('regions')->insert([ 'name'=>'OHiggins']);
        DB::table('regions')->insert([ 'name'=>'Maule']);
        DB::table('regions')->insert([ 'name'=>'Ñuble']);
        DB::table('regions')->insert([ 'name'=>'Biobío']);
        DB::table('regions')->insert([ 'name'=>'La Araucanía']);
        DB::table('regions')->insert([ 'name'=>'Los Ríos']);
        DB::table('regions')->insert([ 'name'=>'Los Lagos']);
        DB::table('regions')->insert([ 'name'=>'Aysén']);
        DB::table('regions')->insert([ 'name'=>'Magallanes y Antártica']);

        DB::table('communes')->insert([ 'name'=>'Colina', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Lampa', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Tiltil', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Pirque', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Puente Alto', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San José de Maipo', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Buin', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Calera de Tango', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Paine', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San Bernardo', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Alhué', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Curacaví', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'María Pinto', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Melipilla', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San Pedro', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Cerrillos', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Cerro Navia', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Conchalí', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'El Bosque', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Estación Central', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Huechuraba', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Independencia', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'La Cisterna', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'La Granja', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'La Florida', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'La Pintana', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'La Reina', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Las Condes', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Lo Barnechea', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Lo Espejo', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Lo Prado', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Macul', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Maipú', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Ñuñoa', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Pedro Aguirre Cerda', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Peñalolén', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Providencia', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Pudahuel', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Quilicura', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Quinta Normal', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Recoleta', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Renca', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San Miguel', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San Joaquín', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'San Ramón', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Santiago', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Vitacura', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'El Monte', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Isla de Maipo', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Padre Hurtado', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Peñaflor', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Talagante', 'region_id'=>1]);
        DB::table('communes')->insert([ 'name'=>'Arica', 'region_id'=>2]);
        DB::table('communes')->insert([ 'name'=>'Camarones', 'region_id'=>2]);
        DB::table('communes')->insert([ 'name'=>'General Lagos', 'region_id'=>2]);
        DB::table('communes')->insert([ 'name'=>'Putre', 'region_id'=>2]);
        DB::table('communes')->insert([ 'name'=>'Alto Hospicio', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Iquique', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Camiña', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Colchane', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Huara', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Pica', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Pozo Almonte', 'region_id'=>3]);
        DB::table('communes')->insert([ 'name'=>'Antofagasta', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Mejillones', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Sierra Gorda', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Taltal', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Calama', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Ollagüe', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'San Pedro de Atacama', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'María Elena', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Tocopilla', 'region_id'=>4]);
        DB::table('communes')->insert([ 'name'=>'Chañaral', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Diego de Almagro', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Caldera', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Copiapó', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Tierra Amarilla', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Alto del Carmen', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Freirina', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Huasco', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Vallenar', 'region_id'=>5]);
        DB::table('communes')->insert([ 'name'=>'Canela', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Illapel', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Los Vilos', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Salamanca', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Andacollo', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Coquimbo', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'La Higuera', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'La Serena', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Paihuano', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Vicuña', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Combarbalá', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Monte Patria', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Ovalle', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Punitaqui', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Río Hurtado', 'region_id'=>6]);
        DB::table('communes')->insert([ 'name'=>'Isla de Pascua', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Calle Larga', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Los Andes', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Rinconada de Los Andes', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'San Esteban', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Limache', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Olmué', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Quilpué', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Villa Alemana', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Cabildo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'La Ligua', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Papudo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Petorca', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Zapallar', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Hijuelas', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'La Calera', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'La Cruz', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Nogales', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Quillota', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Algarrobo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Cartagena', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'El Quisco', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'El Tabo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'San Antonio', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Santo Domingo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Catemu', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Llaillay', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Panquehue', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Putaendo', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'San Felipe', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Santa María', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Casablanca', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Concón', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Juan Fernández', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Puchuncaví', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Quintero', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Valparaíso', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Viña del Mar', 'region_id'=>7]);
        DB::table('communes')->insert([ 'name'=>'Codegua', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Coínco', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Coltauco', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Doñihue', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Graneros', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Las Cabras', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Machalí', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Malloa', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Olivar', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Peumo', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Pichidegua', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Quinta de Tilcoco', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Rancagua', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Requínoa', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Rengo', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'San Francisco de Mostazal', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'San Vicente de Tagua Tagua', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'La Estrella', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Litueche', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Marchigüe', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Navidad', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Paredones', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Pichilemu', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Chépica', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Chimbarongo', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Lolol', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Nancagua', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Palmilla', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Peralillo', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Placilla', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Pumanque', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'San Fernando', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Santa Cruz', 'region_id'=>8]);
        DB::table('communes')->insert([ 'name'=>'Cauquenes', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Chanco', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Pelluhue', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Curicó', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Hualañé', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Licantén', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Molina', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Rauco', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Romeral', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Sagrada Familia', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Teno', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Vichuquén', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Colbún', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Linares', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Longaví', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Parral', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Retiro', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'San Javier de Loncomilla', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Villa Alegre', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Yerbas Buenas', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Constitución', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Curepto', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Empedrado', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Maule', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Pelarco', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Pencahue', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Río Claro', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'San Clemente', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'San Rafael', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Talca', 'region_id'=>9]);
        DB::table('communes')->insert([ 'name'=>'Bulnes', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Coelemu', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Ninhue', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Portezuelo', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Quirihue', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Ránquil', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Treguaco', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Bulnes', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Chillán Viejo', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Chillán', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'El Carmen', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Pemuco', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Pinto', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Quillón', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'San Ignacio', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Yungay', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Coihueco', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Ñiquén', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'San Carlos', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'San Fabián', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'San Nicolás', 'region_id'=>10]);
        DB::table('communes')->insert([ 'name'=>'Arauco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Cañete', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Contulmo', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Curanilahue', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Lebu', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Los Álamos', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Tirúa', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Alto Biobío', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Antuco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Cabrero', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Laja', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Los Ángeles', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Mulchén', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Nacimiento', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Negrete', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Quilaco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Quilleco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Rosendo', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Santa Bárbara', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Tucapel', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Yumbel', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Chiguayante', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Concepción', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Coronel', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Florida', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Hualpén', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Hualqui', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Lota', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Penco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Pedro de la Paz', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Santa Juana', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Talcahuano', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Tomé', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Bulnes', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Chillán', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Chillán Viejo', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Cobquecura', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Coelemu', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Coihueco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'El Carmen', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Ninhue', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Ñiquén', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Pemuco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Pinto', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Portezuelo', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Quillón', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Quirihue', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Ránquil', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Carlos', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Fabián', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Ignacio', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'San Nicolás', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Treguaco', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Yungay', 'region_id'=>11]);
        DB::table('communes')->insert([ 'name'=>'Carahue', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Cholchol', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Cunco', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Curarrehue', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Freire', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Galvarino', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Gorbea', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Lautaro', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Loncoche', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Melipeuco', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Nueva Imperial', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Padre Las Casas', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Perquenco', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Pitrufquén', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Pucón', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Saavedra', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Temuco', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Teodoro Schmidt', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Toltén', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Vilcún', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Villarrica', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Angol', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Collipulli', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Curacautín', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Ercilla', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Lonquimay', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Los Sauces', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Lumaco', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Purén', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Renaico', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Traiguén', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Victoria', 'region_id'=>12]);
        DB::table('communes')->insert([ 'name'=>'Futrono', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'La Unión', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Lago Ranco', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Río Bueno', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Corral', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Lanco', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Los Lagos', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Máfil', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Mariquina', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Paillaco', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Panguipulli', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Valdivia', 'region_id'=>13]);
        DB::table('communes')->insert([ 'name'=>'Ancud', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Castro', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Chonchi', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Curaco de Vélez', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Dalcahue', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Puqueldón', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Queilén', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Quellón', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Quemchi', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Quinchao', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Calbuco', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Cochamó', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Fresia', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Frutillar', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Llanquihue', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Los Muermos', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Maullín', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Puerto Montt', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Puerto Varas', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Osorno', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Puerto Octay', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Purranque', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Puyehue', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Río Negro', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'San Pablo', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'San Juan de la Costa', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Chaitén', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Futaleufú', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Hualaihué', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Palena', 'region_id'=>14]);
        DB::table('communes')->insert([ 'name'=>'Aysén', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Cisnes', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Guaitecas', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Cochrane', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'OHiggins', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Tortel', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Coyhaique', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Lago Verde', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Chile Chico', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Río Ibáñez', 'region_id'=>15]);
        DB::table('communes')->insert([ 'name'=>'Antártica', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Cabo de Hornos', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Laguna Blanca', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Punta Arenas', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Río Verde', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'San Gregorio', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Porvenir', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Primavera', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Timaukel', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Natales', 'region_id'=>16]);
        DB::table('communes')->insert([ 'name'=>'Torres del Paine', 'region_id'=>16]);

        DB::table('type_catastrophes')->insert([ 'name_type'=>'Terremoto']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Tsunami']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Incendio']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Inundación']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Aluvion']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Temporal de lluvia']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Sequía']);
        DB::table('type_catastrophes')->insert([ 'name_type'=>'Erupción']);


        DB::table('banks')->insert([ 'name'=>'Banco de Chile']);
        DB::table('banks')->insert([ 'name'=>'BCI']);
        DB::table('banks')->insert([ 'name'=>'BBVA']);
        DB::table('banks')->insert([ 'name'=>'Banco Estado']);
        DB::table('banks')->insert([ 'name'=>'Banco Falabella']);
        DB::table('banks')->insert([ 'name'=>'Banco Santander']);
        DB::table('banks')->insert([ 'name'=>'Banco Itau']);




        factory(App\Location::class, 10)->create();
        factory(App\User::class, 10)->create();
        factory(App\Catastrophe::class, 10)->create();
        factory(App\Volunteering::class, 10)->create();
        factory(App\Donation::class, 10)->create();
        factory(App\Event::class, 10)->create();


        factory(App\Collection_center::class, 10)->create();
        factory(App\Asset::class, 10)->create()->each(function($asset){
          $boolean = random_int(0,1);
          $ids= range(1,10);
          shuffle($ids);

          if($boolean){
            $sliced= array_slice($ids,0,2);
            $asset->collection_center()->attach($sliced);
          }
          else{
              $asset->collection_center()->attach(array_rand($ids,1));
          }
        });

        factory(App\Action::class, 10)->create();













  }
}

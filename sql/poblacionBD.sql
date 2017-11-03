/* Insert: BANCO*/
insert into BANCO (NOMBRE_BANCO) values ('Santander');
insert into BANCO (NOMBRE_BANCO) values ('Paribas');
insert into BANCO (NOMBRE_BANCO) values ('Banco de Chile');
insert into BANCO (NOMBRE_BANCO) values ('Patito');


/* Insert: BIEN*/
insert into BIEN (NOMBRE_BIEN, TIPO_BIEN) values ('Ropa', 'Urgente');
insert into BIEN (NOMBRE_BIEN, TIPO_BIEN) values ('Comida no perecible', 'Normal');
insert into BIEN (NOMBRE_BIEN, TIPO_BIEN) values ('Agua', 'Urgente');
insert into BIEN (NOMBRE_BIEN, TIPO_BIEN) values ('Indumentaria', 'Normal');

/* Insert: PERMISO*/
insert into PERMISOS (PERMISO) values (1);
insert into PERMISOS (PERMISO) values (2);
insert into PERMISOS (PERMISO) values (3);

/* Insert: ROL*/
insert into ROL (TIPO_ROL) values (1);
insert into ROL (TIPO_ROL) values (2);
insert into ROL (TIPO_ROL) values (3);

/* Insert: USUARIO*/
insert into USUARIO (RUT, NOMBRES, APELLIDOS, PASSWORD, ID_ROL) values ('19.448.718-5', 'Javier Andres', 'Arredondo Contreras', 'jijijiji', 1);
insert into USUARIO (RUT, NOMBRES, APELLIDOS, PASSWORD, ID_ROL) values ('19.444.444-5', 'Javier Andronico', 'Arbol Conti', 'jijijiji', 2);
insert into USUARIO (RUT, NOMBRES, APELLIDOS, PASSWORD, ID_ROL) values ('19.448.700-5', 'Michael', 'Arredondo Contreras', 'jijijiji', 1);
insert into USUARIO (RUT, NOMBRES, APELLIDOS, PASSWORD, ID_ROL) values ('19.444.400-5', 'Juliaco', 'Arbol Conti', 'jijijiji', 2);
/* Insert: VOLUNTARIO*/
insert into VOLUNTARIOS (NOMBRES_VOLUNTARIO, APELLIDOS_VOLUNTARIO, EDAD) values ('Pangal', 'Andrade', 90);
insert into VOLUNTARIOS (NOMBRES_VOLUNTARIO, APELLIDOS_VOLUNTARIO, EDAD) values ('Kel', 'Calderon', 98);
insert into VOLUNTARIOS (NOMBRES_VOLUNTARIO, APELLIDOS_VOLUNTARIO, EDAD) values ('Hector', 'Antillanca', 1000);
insert into VOLUNTARIOS (NOMBRES_VOLUNTARIO, APELLIDOS_VOLUNTARIO, EDAD) values ('Rick', 'Grimmes', 38);

/* Insert: UBICACION*/
insert into UBICACION (CIUDAD, CALLE, COMUNA) values ('Santiago', 'Conchali', 'Nada');
insert into UBICACION (CIUDAD, CALLE, COMUNA) values ('Santiago', 'Quilicura', 'Nada');
insert into UBICACION (CIUDAD, CALLE, COMUNA) values ('Los Andes', 'San Esteban', 'La Parva');

/* Insert: HISTORIAL*/
insert into HISTORIAL (FECHA, ID_USUARIO) values ('2017-10-20', 1);
insert into HISTORIAL (FECHA, ID_USUARIO) values ('2017-11-20', 2);


/* Insert: CATASTROFE*/
insert into CATASTROFE (ID_UBICACION, ID_USUARIO, TIPO_CATASTROFE) values (1, 1, 1);
insert into CATASTROFE (ID_UBICACION, ID_USUARIO, TIPO_CATASTROFE) values (2, 1, 2);

/* Insert: MEDIDA*/
insert into MEDIDAS (ESTADO, AVANCE, FECHA_INICIO, FECHA_TERMINO, ID_CATASTROFE, ID_USUARIO, META) values ('Bien', 10, '2017-10-20' , '2017-10-20', 1, 1, 100);
insert into MEDIDAS (ESTADO, AVANCE, FECHA_INICIO, FECHA_TERMINO, ID_CATASTROFE, ID_USUARIO, META) values ('Mal', 20, '2017-11-20','2017-10-20', 2, 1, 100);


/* Insert: CENTRO DE ACOPIO*/
insert into CENTRO_DE_ACOPIO (ID_MEDIDA, NOMBRE_CENTRO_ACOPIO) values (1, 'Concha y Toro');
insert into CENTRO_DE_ACOPIO (ID_MEDIDA, NOMBRE_CENTRO_ACOPIO) values (1, 'VodkaRecolecta');

/* Insert: DONACION*/
insert into DONACION (ID_MEDIDA, MONTO, TIPO_DONACION, ID_BANCO) values (1, 2000, 1, 1);
insert into DONACION (ID_MEDIDA, MONTO, TIPO_DONACION, ID_BANCO) values (1, 2000, 2, 1);

/* Insert: VOLUNTARIADO*/
insert into VOLUNTARIADO (ID_MEDIDA, TIPO_TRABAJO, CANTIDAD_MINIMA_VOLUNTARIOS, CANTIDAD_MAXIMA_VOLUNTARIOS, PERFIL_VOLUNTARIO)
	values (1, 'Limpieza', 10, 20, 'Experimentado');
insert into VOLUNTARIADO (ID_MEDIDA, TIPO_TRABAJO, CANTIDAD_MINIMA_VOLUNTARIOS, CANTIDAD_MAXIMA_VOLUNTARIOS, PERFIL_VOLUNTARIO)
	values (1, 'Reconstruccion', 10, 20, 'no excluyente');

/* Insert: EVENTO*/
insert into EVENTO (ID_MEDIDA, ID_UBICACION, NOMBRE_EVENTO, ACTIVIDADES, ALIMENTOS) values (1, 1, 'Lollapaloza', 'Completada', 'Completos');
insert into EVENTO (ID_MEDIDA, ID_UBICACION, NOMBRE_EVENTO, ACTIVIDADES, ALIMENTOS) values (1, 2, 'asdf', 'Bingo', 'Empanadas');

/* Insert: VOLUNTARIOS_MEDIDAS*/
insert into VOLUNTARIOS_MEDIDAS(ID_VOLUNTARIO, ID_MEDIDA) values (1, 1);
insert into VOLUNTARIOS_MEDIDAS(ID_VOLUNTARIO, ID_MEDIDA) values (2, 2);

/* Insert: ROL_PERMISO*/
insert into PERMISO_ROL (ID_ROL, ID_PERMISO) values (1, 1);
insert into PERMISO_ROL (ID_ROL, ID_PERMISO) values (2, 2);
/*
 Insert: CENTROACOPIO_BIEN*/
insert into CENTRODEACOPIO_BIEN(ID_MEDIDA, ID_CENTRO_ACOPIO,ID_BIEN) values (1,1, 1);
insert into CENTRODEACOPIO_BIEN(ID_MEDIDA, ID_CENTRO_ACOPIO, ID_BIEN) values (1,1, 2);


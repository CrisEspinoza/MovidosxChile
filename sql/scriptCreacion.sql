/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     02-11-2017 19:34:07                          */
/*==============================================================*/
drop index if exists BANCO_PK cascade;

DROP TABLE if exists  BANCO cascade;

drop index if exists BIEN_PK cascade;

DROP TABLE if exists  BIEN cascade;

drop index if exists INGRESA_FK cascade;

drop index if exists TIENE5_FK cascade;

drop index if exists CATASTROFE_PK cascade;

DROP TABLE if exists CATASTROFE cascade;

drop index if exists TIENE8_FK cascade;

drop index if exists TIENE7_FK cascade;

drop index if exists TIENE6_PK cascade;

DROP TABLE if exists CENTRODEACOPIO_BIEN cascade;

drop index if exists CENTRO_DE_ACOPIO_PK cascade;

DROP TABLE if exists  CENTRO_DE_ACOPIO cascade;

drop index if exists PARTICIPA_FK cascade;

drop index if exists DONACION_PK cascade;

DROP TABLE if exists DONACION cascade;

drop index if exists TIENE9_FK cascade;

drop index if exists EVENTO_PK cascade;

DROP TABLE if exists EVENTO cascade;

drop index if exists TIENE_FK cascade;

drop index if exists HISTORIAL_PK cascade;

DROP TABLE if exists HISTORIAL cascade;

drop index if exists SOLVENTA_FK cascade;

drop index if exists OPERA_FK cascade;

drop index if exists MEDIDAS_PK cascade;

DROP TABLE if exists MEDIDAS cascade; 

drop index if exists PERMISOS_PK cascade;

DROP TABLE if exists PERMISOS cascade;

drop index if exists TIENE4_FK cascade;

drop index if exists TIENE3_FK cascade;

drop index if exists TIENE3_PK cascade;

DROP TABLE if exists PERMISO_ROL cascade;

drop index if exists ROL_PK cascade;

DROP TABLE if exists ROL cascade;

drop index if exists UBICACION_PK cascade;

DROP TABLE if exists UBICACION cascade; 

drop index if exists TIENE2_FK cascade;

drop index if exists USUARIO_PK cascade;

DROP TABLE if exists USUARIO cascade;

DROP TABLE if exists VOLUNTARIADO cascade;

drop index if exists VOLUNTARIOS_PK cascade;

DROP TABLE if exists VOLUNTARIOS cascade;

drop index if exists RELACION_PK cascade;

DROP TABLE if exists VOLUNTARIOS_MEDIDAS cascade;
/*==============================================================*/
/* Table: BANCO                                                 */
/*==============================================================*/
create table BANCO (
   NOMBRE_BANCO         TEXT                 null,
   ID_BANCO             SERIAL not null,
   constraint PK_BANCO primary key (ID_BANCO)
);

/*==============================================================*/
/* Index: BANCO_PK                                              */
/*==============================================================*/
create unique index BANCO_PK on BANCO (
ID_BANCO
);

/*==============================================================*/
/* Table: BIEN                                                  */
/*==============================================================*/
create table BIEN (
   ID_BIEN              SERIAL not null,
   NOMBRE_BIEN          TEXT                 null,
   TIPO_BIEN            TEXT                 null,
   constraint PK_BIEN primary key (ID_BIEN)
);

/*==============================================================*/
/* Index: BIEN_PK                                               */
/*==============================================================*/
create unique index BIEN_PK on BIEN (
ID_BIEN
);

/*==============================================================*/
/* Table: CATASTROFE                                            */
/*==============================================================*/
create table CATASTROFE (
   ID_CATASTROFE        SERIAL not null,
   ID_UBICACION         INT4                 null,
   ID_USUARIO           INT4                 null,
   TIPO_CATASTROFE      INT4                 null,
   constraint PK_CATASTROFE primary key (ID_CATASTROFE)
);

/*==============================================================*/
/* Index: CATASTROFE_PK                                         */
/*==============================================================*/
create unique index CATASTROFE_PK on CATASTROFE (
ID_CATASTROFE
);

/*==============================================================*/
/* Index: TIENE5_FK                                             */
/*==============================================================*/
create  index TIENE5_FK on CATASTROFE (
ID_UBICACION
);

/*==============================================================*/
/* Index: INGRESA_FK                                            */
/*==============================================================*/
create  index INGRESA_FK on CATASTROFE (
ID_USUARIO
);

/*==============================================================*/
/* Table: CENTRODEACOPIO_BIEN                                   */
/*==============================================================*/
create table CENTRODEACOPIO_BIEN (
   ID_MEDIDA            INT4                 not null,
   ID_CENTRO_ACOPIO     INT4                 not null,
   ID_BIEN              INT4                 not null,
   constraint PK_CENTRODEACOPIO_BIEN primary key (ID_MEDIDA, ID_CENTRO_ACOPIO, ID_BIEN)
);

/*==============================================================*/
/* Index: TIENE6_PK                                             */
/*==============================================================*/
create unique index TIENE6_PK on CENTRODEACOPIO_BIEN (
ID_MEDIDA,
ID_CENTRO_ACOPIO,
ID_BIEN
);

/*==============================================================*/
/* Index: TIENE7_FK                                             */
/*==============================================================*/
create  index TIENE7_FK on CENTRODEACOPIO_BIEN (
ID_MEDIDA,
ID_CENTRO_ACOPIO
);

/*==============================================================*/
/* Index: TIENE8_FK                                             */
/*==============================================================*/
create  index TIENE8_FK on CENTRODEACOPIO_BIEN (
ID_BIEN
);

/*==============================================================*/
/* Table: CENTRO_DE_ACOPIO                                      */
/*==============================================================*/
create table CENTRO_DE_ACOPIO (
   ID_MEDIDA            INT4                 not null,
   ID_CENTRO_ACOPIO     SERIAL not null,
   NOMBRE_CENTRO_ACOPIO VARCHAR(20)          null,
   constraint PK_CENTRO_DE_ACOPIO primary key (ID_MEDIDA, ID_CENTRO_ACOPIO)
);

/*==============================================================*/
/* Index: CENTRO_DE_ACOPIO_PK                                   */
/*==============================================================*/
create unique index CENTRO_DE_ACOPIO_PK on CENTRO_DE_ACOPIO (
ID_MEDIDA,
ID_CENTRO_ACOPIO
);

/*==============================================================*/
/* Table: DONACION                                              */
/*==============================================================*/
create table DONACION (
   ID_MEDIDA            INT4                 not null,
   ID_DONACION          SERIAL not null,
   MONTO                INT4                 null,
   TIPO_DONACION        INT4                 null,
   ID_BANCO             INT4                 null,
   constraint PK_DONACION primary key (ID_MEDIDA, ID_DONACION)
);

/*==============================================================*/
/* Index: DONACION_PK                                           */
/*==============================================================*/
create unique index DONACION_PK on DONACION (
ID_MEDIDA,
ID_DONACION
);

/*==============================================================*/
/* Index: PARTICIPA_FK                                          */
/*==============================================================*/
create  index PARTICIPA_FK on DONACION (
ID_BANCO
);

/*==============================================================*/
/* Table: EVENTO                                                */
/*==============================================================*/
create table EVENTO (
   ID_MEDIDA            INT4                 not null,
   ID_EVENTO            SERIAL not null,
   ID_UBICACION         INT4                 null,
   NOMBRE_EVENTO        VARCHAR(20)          null,
   ACTIVIDADES          VARCHAR(20)          null,
   ALIMENTOS            VARCHAR(20)          null,
   constraint PK_EVENTO primary key (ID_MEDIDA, ID_EVENTO)
);

/*==============================================================*/
/* Index: EVENTO_PK                                             */
/*==============================================================*/
create unique index EVENTO_PK on EVENTO (
ID_MEDIDA,
ID_EVENTO
);

/*==============================================================*/
/* Index: TIENE9_FK                                             */
/*==============================================================*/
create  index TIENE9_FK on EVENTO (
ID_UBICACION
);

/*==============================================================*/
/* Table: HISTORIAL                                             */
/*==============================================================*/
create table HISTORIAL (
   FECHA                DATE                 null,
   ID_HISTORIAL         SERIAL not null,
   ID_USUARIO           INT4                 null,
   ACCION               VARCHAR(20)          null,
   NOMBRE_TABLA         VARCHAR(20)          null,
   ATIBUTO_MODIFICADO   VARCHAR(20)          null,
   constraint PK_HISTORIAL primary key (ID_HISTORIAL)
);

/*==============================================================*/
/* Index: HISTORIAL_PK                                          */
/*==============================================================*/
create unique index HISTORIAL_PK on HISTORIAL (
ID_HISTORIAL
);

/*==============================================================*/
/* Index: TIENE_FK                                              */
/*==============================================================*/
create  index TIENE_FK on HISTORIAL (
ID_USUARIO
);

/*==============================================================*/
/* Table: MEDIDAS                                               */
/*==============================================================*/
create table MEDIDAS (
   ESTADO               VARCHAR(20)          null,
   AVANCE               INT4                 null,
   FECHA_INICIO         DATE                 null,
   FECHA_TERMINO        DATE                 null,
   ID_MEDIDA            SERIAL not null,
   ID_CATASTROFE        INT4                 null,
   ID_USUARIO           INT4                 null,
   META                 INT4                 null,
   constraint PK_MEDIDAS primary key (ID_MEDIDA)
);

/*==============================================================*/
/* Index: MEDIDAS_PK                                            */
/*==============================================================*/
create unique index MEDIDAS_PK on MEDIDAS (
ID_MEDIDA
);

/*==============================================================*/
/* Index: OPERA_FK                                              */
/*==============================================================*/
create  index OPERA_FK on MEDIDAS (
ID_USUARIO
);

/*==============================================================*/
/* Index: SOLVENTA_FK                                           */
/*==============================================================*/
create  index SOLVENTA_FK on MEDIDAS (
ID_CATASTROFE
);

/*==============================================================*/
/* Table: PERMISOS                                              */
/*==============================================================*/
create table PERMISOS (
   ID_PERMISO           SERIAL not null,
   PERMISO              INT4                 null,
   constraint PK_PERMISOS primary key (ID_PERMISO)
);

/*==============================================================*/
/* Index: PERMISOS_PK                                           */
/*==============================================================*/
create unique index PERMISOS_PK on PERMISOS (
ID_PERMISO
);

/*==============================================================*/
/* Table: PERMISO_ROL                                           */
/*==============================================================*/
create table PERMISO_ROL (
   ID_PERMISO           INT4                 not null,
   ID_ROL               INT4                 not null,
   constraint PK_PERMISO_ROL primary key (ID_PERMISO, ID_ROL)
);

/*==============================================================*/
/* Index: TIENE3_PK                                             */
/*==============================================================*/
create unique index TIENE3_PK on PERMISO_ROL (
ID_PERMISO,
ID_ROL
);

/*==============================================================*/
/* Index: TIENE3_FK                                             */
/*==============================================================*/
create  index TIENE3_FK on PERMISO_ROL (
ID_PERMISO
);

/*==============================================================*/
/* Index: TIENE4_FK                                             */
/*==============================================================*/
create  index TIENE4_FK on PERMISO_ROL (
ID_ROL
);

/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROL (
   ID_ROL               SERIAL not null,
   TIPO_ROL             INT4                 null,
   constraint PK_ROL primary key (ID_ROL)
);

/*==============================================================*/
/* Index: ROL_PK                                                */
/*==============================================================*/
create unique index ROL_PK on ROL (
ID_ROL
);

/*==============================================================*/
/* Table: UBICACION                                             */
/*==============================================================*/
create table UBICACION (
   ID_UBICACION         SERIAL not null,
   CIUDAD               VARCHAR(20)          null,
   COMUNA               VARCHAR(20)          null,
   CALLE                VARCHAR(20)          null,
   constraint PK_UBICACION primary key (ID_UBICACION)
);

/*==============================================================*/
/* Index: UBICACION_PK                                          */
/*==============================================================*/
create unique index UBICACION_PK on UBICACION (
ID_UBICACION
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO (
   RUT                  VARCHAR(20)          null,
   NOMBRES              VARCHAR(20)          null,
   APELLIDOS            VARCHAR(20)          null,
   ID_USUARIO           SERIAL not null,
   ID_ROL               INT4                 null,
   PASSWORD             VARCHAR(20)          null,
   MAIL                 VARCHAR(20)          null,
   constraint PK_USUARIO primary key (ID_USUARIO)
);

/*==============================================================*/
/* Index: USUARIO_PK                                            */
/*==============================================================*/
create unique index USUARIO_PK on USUARIO (
ID_USUARIO
);

/*==============================================================*/
/* Index: TIENE2_FK                                             */
/*==============================================================*/
create  index TIENE2_FK on USUARIO (
ID_ROL
);

/*==============================================================*/
/* Table: VOLUNTARIADO                                          */
/*==============================================================*/
create table VOLUNTARIADO (
   ID_MEDIDA            INT4                 not null,
   TIPO_TRABAJO         VARCHAR(20)          null,
   CANTIDAD_MINIMA_VOLUNTARIOS INT4                 null,
   CANTIDAD_MAXIMA_VOLUNTARIOS INT4                 null,
   PERFIL_VOLUNTARIO    VARCHAR(20)          null,
   ID_VOLUNTARIADO      SERIAL not null,
   constraint PK_VOLUNTARIADO primary key (ID_MEDIDA, ID_VOLUNTARIADO)
);

/*==============================================================*/
/* Table: VOLUNTARIOS                                           */
/*==============================================================*/
create table VOLUNTARIOS (
   ID_VOLUNTARIO        SERIAL not null,
   NOMBRES_VOLUNTARIO   VARCHAR(20)          null,
   APELLIDOS_VOLUNTARIO VARCHAR(20)          null,
   EDAD                 INT4                 null,
   constraint PK_VOLUNTARIOS primary key (ID_VOLUNTARIO)
);

/*==============================================================*/
/* Index: VOLUNTARIOS_PK                                        */
/*==============================================================*/
create unique index VOLUNTARIOS_PK on VOLUNTARIOS (
ID_VOLUNTARIO
);

/*==============================================================*/
/* Table: VOLUNTARIOS_MEDIDAS                                   */
/*==============================================================*/
create table VOLUNTARIOS_MEDIDAS (
   ID_VOLUNTARIO        INT4                 not null,
   ID_MEDIDA            INT4                 not null,
   constraint PK_VOLUNTARIOS_MEDIDAS primary key (ID_VOLUNTARIO, ID_MEDIDA)
);

/*==============================================================*/
/* Index: RELACION_PK                                           */
/*==============================================================*/
create unique index RELACION_PK on VOLUNTARIOS_MEDIDAS (
ID_VOLUNTARIO,
ID_MEDIDA
);

alter table CATASTROFE
   add constraint FK_CATASTRO_INGRESA_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table CATASTROFE
   add constraint FK_CATASTRO_TIENE4_UBICACIO foreign key (ID_UBICACION)
      references UBICACION (ID_UBICACION)
      on delete restrict on update restrict;

alter table CENTRODEACOPIO_BIEN
   add constraint FK_CENTRODE_CENTRODEA_CENTRO_D foreign key (ID_MEDIDA, ID_CENTRO_ACOPIO)
      references CENTRO_DE_ACOPIO (ID_MEDIDA, ID_CENTRO_ACOPIO)
      on delete restrict on update restrict;

alter table CENTRODEACOPIO_BIEN
   add constraint FK_CENTRODE_CENTRODEA_BIEN foreign key (ID_BIEN)
      references BIEN (ID_BIEN)
      on delete restrict on update restrict;

alter table CENTRO_DE_ACOPIO
   add constraint FK_CENTRO_D_TIPO_MEDI_MEDIDAS foreign key (ID_MEDIDA)
      references MEDIDAS (ID_MEDIDA)
      on delete restrict on update restrict;

alter table DONACION
   add constraint FK_DONACION_PARTICIPA_BANCO foreign key (ID_BANCO)
      references BANCO (ID_BANCO)
      on delete restrict on update restrict;

alter table EVENTO
   add constraint FK_EVENTO_TIENE7_UBICACIO foreign key (ID_UBICACION)
      references UBICACION (ID_UBICACION)
      on delete restrict on update restrict;

alter table EVENTO
   add constraint FK_EVENTO_TIPO_MEDI_MEDIDAS foreign key (ID_MEDIDA)
      references MEDIDAS (ID_MEDIDA)
      on delete restrict on update restrict;

alter table HISTORIAL
   add constraint FK_HISTORIA_TIENE_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_OPERA_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table MEDIDAS
   add constraint FK_MEDIDAS_SOLVENTA_CATASTRO foreign key (ID_CATASTROFE)
      references CATASTROFE (ID_CATASTROFE)
      on delete restrict on update restrict;

alter table PERMISO_ROL
   add constraint FK_PERMISO__PERMISO_R_PERMISOS foreign key (ID_PERMISO)
      references PERMISOS (ID_PERMISO)
      on delete restrict on update restrict;

alter table PERMISO_ROL
   add constraint FK_PERMISO__PERMISO_R_ROL foreign key (ID_ROL)
      references ROL (ID_ROL)
      on delete restrict on update restrict;

alter table USUARIO
   add constraint FK_USUARIO_TIENE2_ROL foreign key (ID_ROL)
      references ROL (ID_ROL)
      on delete restrict on update restrict;

alter table VOLUNTARIADO
   add constraint FK_VOLUNTAR_TIPO_MEDI_MEDIDAS foreign key (ID_MEDIDA)
      references MEDIDAS (ID_MEDIDA)
      on delete restrict on update restrict;

alter table VOLUNTARIOS_MEDIDAS
   add constraint FK_VOLUNTAR_VOLUNTARI_VOLUNTAR foreign key (ID_VOLUNTARIO)
      references VOLUNTARIOS (ID_VOLUNTARIO)
      on delete restrict on update restrict;

alter table VOLUNTARIOS_MEDIDAS
   add constraint FK_VOLUNTAR_VOLUNTARI_MEDIDAS foreign key (ID_MEDIDA)
      references MEDIDAS (ID_MEDIDA)
      on delete restrict on update restrict;


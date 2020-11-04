/*create database bd_palki_sa;*/

use  bd_palki_sa;


CREATE TABLE Estado (
    idestado  INTEGER IDENTITY(1,1),
    estado    VARCHAR(30)
);



ALTER TABLE Estado ADD CONSTRAINT estado_pk PRIMARY KEY ( idestado );




CREATE TABLE Colaborador (
    codigocolaborador           INTEGER IDENTITY(1,1),
    dpi                         VARCHAR(25),
    nombre1          VARCHAR(30),
	nombre2          VARCHAR(30),
    apellido1        VARCHAR(30),
	apellido2        VARCHAR(30),
    edad             INTEGER,
    fechanacimiento	 VARCHAR(30),
    direccion        VARCHAR(30),
    genero           VARCHAR(30),
    imagen			 image,
    telefono		 VARCHAR(10),
    email            VARCHAR(50),
	fecha_ingreso				VARCHAR(30),
	finca_idfinca				INTEGER,
	departamento_iddepartamento	INTEGER,
	horario_idhorario			INTEGER,
    estado_idestado             INTEGER,
    actividad_idactividad       INTEGER
);


ALTER TABLE Colaborador ADD CONSTRAINT colaborador_pk PRIMARY KEY ( codigocolaborador );

CREATE TABLE Departamento (
    iddepartamento      INTEGER IDENTITY(1,1),
    nombredepartamento  VARCHAR(35)
);

ALTER TABLE Departamento ADD CONSTRAINT departamento_pk PRIMARY KEY ( iddepartamento );

CREATE TABLE Finca (
    idfinca                        INTEGER IDENTITY(1,1),
    nombrefinca                    VARCHAR(50),
	direccion						VARCHAR(50)
);

ALTER TABLE Finca ADD CONSTRAINT finca_pk PRIMARY KEY ( idfinca );

CREATE TABLE horario (
    idhorario                      INTEGER IDENTITY(1,1),
    hora_entrada                   TIME,
    hora_salida                    TIME,
);

ALTER TABLE Horario ADD CONSTRAINT horario_pk PRIMARY KEY ( idhorario );

CREATE TABLE Medidaplanta (
    idmedidaplanta   INTEGER IDENTITY(1,1),
    medidaplanta     VARCHAR(30),
	unidadmedida varchar(30)
);

ALTER TABLE Medidaplanta ADD CONSTRAINT medidaplanta_pk PRIMARY KEY ( idmedidaplanta );

CREATE TABLE Planta (
    idplanta      INTEGER IDENTITY(1,1),
    nombreplanta  VARCHAR(30),
	medidaplanta_idmedidaplanta INTEGER,
);

ALTER TABLE Planta ADD CONSTRAINT planta_pk PRIMARY KEY ( idplanta );


CREATE TABLE Rendimiento (
    idrendimiento       INTEGER IDENTITY(1,1),
    rendimiento_unidad  INTEGER,
    rendimeinto_hora    INTEGER,
    reporte_idreporte   INTEGER
);

ALTER TABLE Rendimiento ADD CONSTRAINT rendimiento_pk PRIMARY KEY ( idrendimiento );

CREATE TABLE Reporte (
    idreporte  INTEGER IDENTITY(1,1),
    reporte    VARCHAR(30),
	tiporeporte_idtiporeporte INTEGER,
	rendimiento_idrendimiento INTEGER
);

ALTER TABLE Reporte ADD CONSTRAINT reporte_pk PRIMARY KEY ( idreporte );

CREATE TABLE Tarea (
    idtarea          INTEGER IDENTITY(1,1),
    tarea            VARCHAR(30),
    planta_idplanta  INTEGER,
    precio           INTEGER
);

ALTER TABLE Tarea ADD CONSTRAINT tarea_pk PRIMARY KEY ( idtarea );

CREATE TABLE Tiempo (
    idtiempo     INTEGER IDENTITY(1,1),
    fecha        DATE,
    hora_inicio  TIME,
    hora_final   TIME,
    horas_laboradas  INTEGER
);

ALTER TABLE Tiempo ADD CONSTRAINT tiempo_pk PRIMARY KEY ( idtiempo );

CREATE TABLE Tiporeporte (
    idtiporeporte      INTEGER IDENTITY(1,1),
    tiporeporte        VARCHAR(30)
);

ALTER TABLE Tiporeporte ADD CONSTRAINT tiporeporte_pk PRIMARY KEY ( idtiporeporte );

CREATE TABLE Tipousuario (
    idtipousuario      INTEGER IDENTITY(1,1),
    tipousuario        VARCHAR(30),
);

ALTER TABLE Tipousuario ADD CONSTRAINT tipousuario_pk PRIMARY KEY ( idtipousuario );

CREATE TABLE Usuario (
    idusuario  INTEGER IDENTITY(1,1),
    nombre1    VARCHAR(30),
    nombre2    VARCHAR(30),
    apellido1  VARCHAR(30),
    apellido2  VARCHAR(30),
    username   VARCHAR(30),
    password   VARCHAR(30),
	tipousuario_idtipousuario INTEGER,
    estado_idestado     INTEGER
);
ALTER TABLE Usuario ADD CONSTRAINT usuario_pk PRIMARY KEY ( idusuario );

CREATE TABLE Actividad (
    idactividad      INTEGER IDENTITY(1,1),
	colaborador_codigocolaborador INTEGER,
    tarea_idtarea    INTEGER,
	finca_idfinca INTEGER,
    planta_idplanta  INTEGER,
	fechainicio varchar(30),
	horainicio varchar(30),
	fechafin varchar(30),
	horafin varchar(30)
);
ALTER TABLE Actividad ADD CONSTRAINT actividad_pk PRIMARY KEY ( idactividad );

/*llaves foraneas Actividad*/
ALTER TABLE Actividad
    ADD CONSTRAINT actividad_colaborador_fk FOREIGN KEY ( colaborador_codigocolaborador )
        REFERENCES Colaborador ( codigocolaborador );

ALTER TABLE Actividad
    ADD CONSTRAINT actividad_tarea_fk FOREIGN KEY ( tarea_idtarea )
        REFERENCES Tarea ( idtarea );

ALTER TABLE Actividad
    ADD CONSTRAINT actividadfk_finca_fk FOREIGN KEY (finca_idfinca )
        REFERENCES Finca ( idfinca );

ALTER TABLE Actividad
    ADD CONSTRAINT actividadllave_tarea_fk FOREIGN KEY ( planta_idplanta )
        REFERENCES Planta ( idplanta );

ALTER TABLE Colaborador
    ADD CONSTRAINT colaborador_actividad_fk FOREIGN KEY ( actividad_idactividad )
        REFERENCES Actividad ( idactividad );

ALTER TABLE Colaborador
    ADD CONSTRAINT colaborador_estado_fk FOREIGN KEY ( estado_idestado)
        REFERENCES Estado ( idestado );

ALTER TABLE Colaborador
    ADD CONSTRAINT colaborador_colaborador_fk FOREIGN KEY ( finca_idfinca)
        REFERENCES Finca ( idfinca );

ALTER TABLE Usuario
    ADD CONSTRAINT usuario_estado_fk FOREIGN KEY ( estado_idestado )
        REFERENCES Estado ( idestado );

ALTER TABLE Usuario
    ADD CONSTRAINT usuario_tipousuario_fk FOREIGN KEY ( tipousuario_idtipousuario )
        REFERENCES tipousuario ( idtipousuario );

ALTER TABLE Colaborador
    ADD CONSTRAINT colaborador_horario_fk FOREIGN KEY ( horario_idhorario )
        REFERENCES Horario ( idhorario );

ALTER TABLE Planta
    ADD CONSTRAINT planta_medidaplanta_fk FOREIGN KEY ( medidaplanta_idmedidaplanta )
        REFERENCES Medidaplanta ( idmedidaplanta );


ALTER TABLE Rendimiento
    ADD CONSTRAINT rendimiento_reporte_fk FOREIGN KEY ( reporte_idreporte )
        REFERENCES Reporte ( idreporte );

ALTER TABLE Tarea
    ADD CONSTRAINT tarea_planta_fk FOREIGN KEY ( planta_idplanta )
        REFERENCES Planta ( idplanta );

ALTER TABLE Reporte
    ADD CONSTRAINT reporte_tiporeporte_fk FOREIGN KEY ( tiporeporte_idtiporeporte )
        REFERENCES Tiporeporte ( idtiporeporte );

ALTER TABLE Reporte
    ADD CONSTRAINT reporte_rendimiento_fk FOREIGN KEY ( rendimiento_idrendimiento )
        REFERENCES Rendimiento ( idrendimiento );
/* llenado bd*/

INSERT INTO Tipousuario(tipousuario) 
VALUES
('Administrador');

INSERT INTO Tipousuario(tipousuario) 
VALUES
('Operador/Digitador');


INSERT INTO Estado(estado) 
VALUES
('Activo');

INSERT INTO Estado(estado) 
VALUES
('No Activo');
/*DBCC CHECKIDENT (usuario, RESEED, 0)*/


INSERT INTO Usuario(nombre1, nombre2, apellido1,apellido2, username, password, tipousuario_idtipousuario, estado_idestado) 
VALUES
('Mario','Estuardo', 'Perez', 'Oliva','admin', 'admin', 1, 1)

INSERT INTO Usuario(nombre1, nombre2, apellido1,apellido2, username, password, tipousuario_idtipousuario, estado_idestado) 
VALUES
('Juan','Antonio', 'Ramos', 'Cardona','juan123', 'Juan123', 2, 1);

INSERT INTO Usuario(nombre1, nombre2, apellido1,apellido2, username, password, tipousuario_idtipousuario, estado_idestado) 
VALUES
('Mario','Aexis', 'Moran', 'Orellana','alexis123', 'Alexis/1', 1, 1)



INSERT INTO Departamento(nombredepartamento) VALUES('Produccion');
INSERT INTO Departamento(nombredepartamento) VALUES('Compras');
INSERT INTO Departamento(nombredepartamento) VALUES('Ventas');

INSERT INTO Finca (nombrefinca, direccion)
VALUES ('Finca Palencia','Palencia,Guatemala, Guatemala');

INSERT INTO Finca (nombrefinca, direccion)
VALUES ('Finca Salama','Salama,Baja Verapaz, Guatemala');

INSERT INTO Finca (nombrefinca, direccion)
VALUES ('Finca La Izotera','San Cristobal, El Progreso, Guatemala');



INSERT INTO Medidaplanta (medidaplanta,unidadmedida) 
VALUES ('10','Centimetro (s)');

INSERT INTO Medidaplanta (medidaplanta,unidadmedida) 
VALUES ('4','Pulgada (s)');


INSERT INTO Planta (nombreplanta,medidaplanta_idmedidaplanta) 
VALUES ('Yucca guatemalensis',1);
INSERT INTO Planta (nombreplanta,medidaplanta_idmedidaplanta) 
VALUES ('Palmeras',1);


INSERT INTO Tarea(tarea) 
VALUES ('Siembra');
INSERT INTO Tarea(tarea) 
VALUES ('Corte');
INSERT INTO Tarea(tarea) 
VALUES ('Fumigar');
INSERT INTO Tarea(tarea) 
VALUES ('Limpiar');

INSERT INTO Colaborador (
		dpi,
		nombre1,
		nombre2,
		apellido1,
		apellido2,
		edad,
		direccion, 
		genero,
		telefono,
		email,
		finca_idfinca,
		departamento_iddepartamento,
		estado_idestado
		) 
    VALUES (
		'3058993651228',
		'Allan',
		'Jordani',
		'Mejia',
		'Reyes',
		20,
		'Sansare',
		'Masculino',
		'57859625',
		'allan@gmail.com',
		1,
		1,
		1
		);

INSERT INTO Colaborador (
		dpi,
		nombre1,
		nombre2,
		apellido1,
		apellido2,
		edad,
		direccion, 
		genero,
		telefono,
		email,
		finca_idfinca,
		departamento_iddepartamento,
		estado_idestado
		) 
    VALUES (
		'3059886232526',
		'Marcos',
		'Antonio',
		'Ramos',
		'Cardona',
		28,
		'Sanarate',
		'Masculino',
		'57568478',
		'mantonio@gmail.com',
		2,
		1,
		1
		);
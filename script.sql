USE [bd_palki_sa]
GO
/****** Object:  Table [dbo].[Actividad]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Actividad](
	[idactividad] [int] IDENTITY(1,1) NOT NULL,
	[colaborador_codigocolaborador] [int] NULL,
	[tarea_idtarea] [int] NULL,
	[finca_idfinca] [int] NULL,
	[planta_idplanta] [int] NULL,
	[fechainicio] [varchar](30) NULL,
	[horainicio] [varchar](30) NULL,
	[fechafin] [varchar](30) NULL,
	[horafin] [varchar](30) NULL,
 CONSTRAINT [actividad_pk] PRIMARY KEY CLUSTERED 
(
	[idactividad] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Colaborador]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Colaborador](
	[codigocolaborador] [int] IDENTITY(1,1) NOT NULL,
	[dpi] [varchar](25) NULL,
	[nombre1] [varchar](30) NULL,
	[nombre2] [varchar](30) NULL,
	[apellido1] [varchar](30) NULL,
	[apellido2] [varchar](30) NULL,
	[edad] [int] NULL,
	[fechanacimiento] [varchar](30) NULL,
	[direccion] [varchar](30) NULL,
	[genero] [varchar](30) NULL,
	[imagen] [image] NULL,
	[telefono] [varchar](10) NULL,
	[email] [varchar](50) NULL,
	[fecha_ingreso] [varchar](30) NULL,
	[finca_idfinca] [int] NULL,
	[departamento_iddepartamento] [int] NULL,
	[horario_idhorario] [int] NULL,
	[estado_idestado] [int] NULL,
	[actividad_idactividad] [int] NULL,
 CONSTRAINT [colaborador_pk] PRIMARY KEY CLUSTERED 
(
	[codigocolaborador] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Departamento]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Departamento](
	[iddepartamento] [int] IDENTITY(1,1) NOT NULL,
	[nombredepartamento] [varchar](35) NULL,
 CONSTRAINT [departamento_pk] PRIMARY KEY CLUSTERED 
(
	[iddepartamento] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Estado]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Estado](
	[idestado] [int] IDENTITY(1,1) NOT NULL,
	[estado] [varchar](30) NULL,
 CONSTRAINT [estado_pk] PRIMARY KEY CLUSTERED 
(
	[idestado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Finca]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Finca](
	[idfinca] [int] IDENTITY(1,1) NOT NULL,
	[nombrefinca] [varchar](50) NULL,
	[direccion] [varchar](50) NULL,
 CONSTRAINT [finca_pk] PRIMARY KEY CLUSTERED 
(
	[idfinca] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[horario]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[horario](
	[idhorario] [int] IDENTITY(1,1) NOT NULL,
	[hora_entrada] [time](7) NULL,
	[hora_salida] [time](7) NULL,
 CONSTRAINT [horario_pk] PRIMARY KEY CLUSTERED 
(
	[idhorario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Medidaplanta]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Medidaplanta](
	[idmedidaplanta] [int] IDENTITY(1,1) NOT NULL,
	[medidaplanta] [varchar](30) NULL,
	[unidadmedida] [varchar](30) NULL,
 CONSTRAINT [medidaplanta_pk] PRIMARY KEY CLUSTERED 
(
	[idmedidaplanta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Planta]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Planta](
	[idplanta] [int] IDENTITY(1,1) NOT NULL,
	[nombreplanta] [varchar](30) NULL,
	[medidaplanta_idmedidaplanta] [int] NULL,
 CONSTRAINT [planta_pk] PRIMARY KEY CLUSTERED 
(
	[idplanta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Rendimiento]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Rendimiento](
	[idrendimiento] [int] IDENTITY(1,1) NOT NULL,
	[rendimiento_unidad] [int] NULL,
	[rendimeinto_hora] [int] NULL,
	[reporte_idreporte] [int] NULL,
 CONSTRAINT [rendimiento_pk] PRIMARY KEY CLUSTERED 
(
	[idrendimiento] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Reporte]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Reporte](
	[idreporte] [int] IDENTITY(1,1) NOT NULL,
	[reporte] [varchar](30) NULL,
	[tiporeporte_idtiporeporte] [int] NULL,
	[rendimiento_idrendimiento] [int] NULL,
 CONSTRAINT [reporte_pk] PRIMARY KEY CLUSTERED 
(
	[idreporte] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Tarea]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tarea](
	[idtarea] [int] IDENTITY(1,1) NOT NULL,
	[tarea] [varchar](30) NULL,
	[planta_idplanta] [int] NULL,
	[precio] [int] NULL,
 CONSTRAINT [tarea_pk] PRIMARY KEY CLUSTERED 
(
	[idtarea] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Tiempo]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tiempo](
	[idtiempo] [int] IDENTITY(1,1) NOT NULL,
	[fecha] [date] NULL,
	[hora_inicio] [time](7) NULL,
	[hora_final] [time](7) NULL,
	[horas_laboradas] [int] NULL,
 CONSTRAINT [tiempo_pk] PRIMARY KEY CLUSTERED 
(
	[idtiempo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Tiporeporte]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tiporeporte](
	[idtiporeporte] [int] IDENTITY(1,1) NOT NULL,
	[tiporeporte] [varchar](30) NULL,
 CONSTRAINT [tiporeporte_pk] PRIMARY KEY CLUSTERED 
(
	[idtiporeporte] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Tipousuario]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipousuario](
	[idtipousuario] [int] IDENTITY(1,1) NOT NULL,
	[tipousuario] [varchar](30) NULL,
 CONSTRAINT [tipousuario_pk] PRIMARY KEY CLUSTERED 
(
	[idtipousuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Usuario]    Script Date: 31/10/2020 21:44:57 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Usuario](
	[idusuario] [int] IDENTITY(1,1) NOT NULL,
	[nombre1] [varchar](30) NULL,
	[nombre2] [varchar](30) NULL,
	[apellido1] [varchar](30) NULL,
	[apellido2] [varchar](30) NULL,
	[username] [varchar](30) NULL,
	[password] [varchar](30) NULL,
	[tipousuario_idtipousuario] [int] NULL,
	[estado_idestado] [int] NULL,
 CONSTRAINT [usuario_pk] PRIMARY KEY CLUSTERED 
(
	[idusuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET IDENTITY_INSERT [dbo].[Actividad] ON 

INSERT [dbo].[Actividad] ([idactividad], [colaborador_codigocolaborador], [tarea_idtarea], [finca_idfinca], [planta_idplanta], [fechainicio], [horainicio], [fechafin], [horafin]) VALUES (1, 1, 3, 1, 1, N'2020-10-30', N'07:00 hrs', N'2020-10-30', N'21:00 hrs')
SET IDENTITY_INSERT [dbo].[Actividad] OFF
SET IDENTITY_INSERT [dbo].[Colaborador] ON 

INSERT [dbo].[Colaborador] ([codigocolaborador], [dpi], [nombre1], [nombre2], [apellido1], [apellido2], [edad], [fechanacimiento], [direccion], [genero], [imagen], [telefono], [email], [fecha_ingreso], [finca_idfinca], [departamento_iddepartamento], [horario_idhorario], [estado_idestado], [actividad_idactividad]) VALUES (1, N'3058993651228', N'Allan', N'Jordani', N'Mejia', N'Reyes', 20, NULL, N'Sansare', N'Masculino', NULL, N'57859625', N'allan@gmail.com', NULL, 1, 1, NULL, 1, NULL)
INSERT [dbo].[Colaborador] ([codigocolaborador], [dpi], [nombre1], [nombre2], [apellido1], [apellido2], [edad], [fechanacimiento], [direccion], [genero], [imagen], [telefono], [email], [fecha_ingreso], [finca_idfinca], [departamento_iddepartamento], [horario_idhorario], [estado_idestado], [actividad_idactividad]) VALUES (2, N'3059886232526', N'Marcos', N'Antonio', N'Ramos', N'Cardona', 28, NULL, N'Sanarate', N'Masculino', NULL, N'57568478', N'mantonio@gmail.com', NULL, 2, 1, NULL, 1, NULL)
SET IDENTITY_INSERT [dbo].[Colaborador] OFF
SET IDENTITY_INSERT [dbo].[Departamento] ON 

INSERT [dbo].[Departamento] ([iddepartamento], [nombredepartamento]) VALUES (1, N'Produccion')
INSERT [dbo].[Departamento] ([iddepartamento], [nombredepartamento]) VALUES (2, N'Compras')
INSERT [dbo].[Departamento] ([iddepartamento], [nombredepartamento]) VALUES (3, N'Ventas')
SET IDENTITY_INSERT [dbo].[Departamento] OFF
SET IDENTITY_INSERT [dbo].[Estado] ON 

INSERT [dbo].[Estado] ([idestado], [estado]) VALUES (1, N'Activo')
INSERT [dbo].[Estado] ([idestado], [estado]) VALUES (2, N'No Activo')
SET IDENTITY_INSERT [dbo].[Estado] OFF
SET IDENTITY_INSERT [dbo].[Finca] ON 

INSERT [dbo].[Finca] ([idfinca], [nombrefinca], [direccion]) VALUES (1, N'Finca Palencia', N'Palencia,Guatemala, Guatemala')
INSERT [dbo].[Finca] ([idfinca], [nombrefinca], [direccion]) VALUES (2, N'Finca Salama', N'Salama,Baja Verapaz, Guatemala')
INSERT [dbo].[Finca] ([idfinca], [nombrefinca], [direccion]) VALUES (3, N'Finca La Izotera', N'San Cristobal, El Progreso, Guatemala')
SET IDENTITY_INSERT [dbo].[Finca] OFF
SET IDENTITY_INSERT [dbo].[Medidaplanta] ON 

INSERT [dbo].[Medidaplanta] ([idmedidaplanta], [medidaplanta], [unidadmedida]) VALUES (1, N'10', N'Centimetro (s)')
INSERT [dbo].[Medidaplanta] ([idmedidaplanta], [medidaplanta], [unidadmedida]) VALUES (2, N'4', N'Pulgada (s)')
SET IDENTITY_INSERT [dbo].[Medidaplanta] OFF
SET IDENTITY_INSERT [dbo].[Planta] ON 

INSERT [dbo].[Planta] ([idplanta], [nombreplanta], [medidaplanta_idmedidaplanta]) VALUES (1, N'Yucca guatemalensis', 1)
INSERT [dbo].[Planta] ([idplanta], [nombreplanta], [medidaplanta_idmedidaplanta]) VALUES (2, N'Palmeras', 1)
SET IDENTITY_INSERT [dbo].[Planta] OFF
SET IDENTITY_INSERT [dbo].[Tarea] ON 

INSERT [dbo].[Tarea] ([idtarea], [tarea], [planta_idplanta], [precio]) VALUES (1, N'Siembra', NULL, NULL)
INSERT [dbo].[Tarea] ([idtarea], [tarea], [planta_idplanta], [precio]) VALUES (2, N'Corte', NULL, NULL)
INSERT [dbo].[Tarea] ([idtarea], [tarea], [planta_idplanta], [precio]) VALUES (3, N'Fumigar', NULL, NULL)
SET IDENTITY_INSERT [dbo].[Tarea] OFF
SET IDENTITY_INSERT [dbo].[Tipousuario] ON 

INSERT [dbo].[Tipousuario] ([idtipousuario], [tipousuario]) VALUES (1, N'Administrador')
INSERT [dbo].[Tipousuario] ([idtipousuario], [tipousuario]) VALUES (2, N'Operador/Digitador')
SET IDENTITY_INSERT [dbo].[Tipousuario] OFF
SET IDENTITY_INSERT [dbo].[Usuario] ON 

INSERT [dbo].[Usuario] ([idusuario], [nombre1], [nombre2], [apellido1], [apellido2], [username], [password], [tipousuario_idtipousuario], [estado_idestado]) VALUES (1, N'Mario', N'Estuardo', N'Perez', N'Oliva', N'admin', N'admin', 1, 1)
INSERT [dbo].[Usuario] ([idusuario], [nombre1], [nombre2], [apellido1], [apellido2], [username], [password], [tipousuario_idtipousuario], [estado_idestado]) VALUES (2, N'Juan', N'Antonio', N'Ramos', N'Cardona', N'juan123', N'Juan123', 2, 1)
INSERT [dbo].[Usuario] ([idusuario], [nombre1], [nombre2], [apellido1], [apellido2], [username], [password], [tipousuario_idtipousuario], [estado_idestado]) VALUES (4, N'Mario', N'Aexis', N'Moran', N'Orellana', N'alexis123', N'Alexis/1', 1, 1)
SET IDENTITY_INSERT [dbo].[Usuario] OFF
ALTER TABLE [dbo].[Actividad]  WITH CHECK ADD  CONSTRAINT [actividad_colaborador_fk] FOREIGN KEY([colaborador_codigocolaborador])
REFERENCES [dbo].[Colaborador] ([codigocolaborador])
GO
ALTER TABLE [dbo].[Actividad] CHECK CONSTRAINT [actividad_colaborador_fk]
GO
ALTER TABLE [dbo].[Actividad]  WITH CHECK ADD  CONSTRAINT [actividad_tarea_fk] FOREIGN KEY([tarea_idtarea])
REFERENCES [dbo].[Tarea] ([idtarea])
GO
ALTER TABLE [dbo].[Actividad] CHECK CONSTRAINT [actividad_tarea_fk]
GO
ALTER TABLE [dbo].[Actividad]  WITH CHECK ADD  CONSTRAINT [actividadfk_finca_fk] FOREIGN KEY([finca_idfinca])
REFERENCES [dbo].[Finca] ([idfinca])
GO
ALTER TABLE [dbo].[Actividad] CHECK CONSTRAINT [actividadfk_finca_fk]
GO
ALTER TABLE [dbo].[Actividad]  WITH CHECK ADD  CONSTRAINT [actividadllave_tarea_fk] FOREIGN KEY([planta_idplanta])
REFERENCES [dbo].[Planta] ([idplanta])
GO
ALTER TABLE [dbo].[Actividad] CHECK CONSTRAINT [actividadllave_tarea_fk]
GO
ALTER TABLE [dbo].[Colaborador]  WITH CHECK ADD  CONSTRAINT [colaborador_actividad_fk] FOREIGN KEY([actividad_idactividad])
REFERENCES [dbo].[Actividad] ([idactividad])
GO
ALTER TABLE [dbo].[Colaborador] CHECK CONSTRAINT [colaborador_actividad_fk]
GO
ALTER TABLE [dbo].[Colaborador]  WITH CHECK ADD  CONSTRAINT [colaborador_colaborador_fk] FOREIGN KEY([finca_idfinca])
REFERENCES [dbo].[Finca] ([idfinca])
GO
ALTER TABLE [dbo].[Colaborador] CHECK CONSTRAINT [colaborador_colaborador_fk]
GO
ALTER TABLE [dbo].[Colaborador]  WITH CHECK ADD  CONSTRAINT [colaborador_estado_fk] FOREIGN KEY([estado_idestado])
REFERENCES [dbo].[Estado] ([idestado])
GO
ALTER TABLE [dbo].[Colaborador] CHECK CONSTRAINT [colaborador_estado_fk]
GO
ALTER TABLE [dbo].[Colaborador]  WITH CHECK ADD  CONSTRAINT [colaborador_horario_fk] FOREIGN KEY([horario_idhorario])
REFERENCES [dbo].[horario] ([idhorario])
GO
ALTER TABLE [dbo].[Colaborador] CHECK CONSTRAINT [colaborador_horario_fk]
GO
ALTER TABLE [dbo].[Planta]  WITH CHECK ADD  CONSTRAINT [planta_medidaplanta_fk] FOREIGN KEY([medidaplanta_idmedidaplanta])
REFERENCES [dbo].[Medidaplanta] ([idmedidaplanta])
GO
ALTER TABLE [dbo].[Planta] CHECK CONSTRAINT [planta_medidaplanta_fk]
GO
ALTER TABLE [dbo].[Rendimiento]  WITH CHECK ADD  CONSTRAINT [rendimiento_reporte_fk] FOREIGN KEY([reporte_idreporte])
REFERENCES [dbo].[Reporte] ([idreporte])
GO
ALTER TABLE [dbo].[Rendimiento] CHECK CONSTRAINT [rendimiento_reporte_fk]
GO
ALTER TABLE [dbo].[Reporte]  WITH CHECK ADD  CONSTRAINT [reporte_rendimiento_fk] FOREIGN KEY([rendimiento_idrendimiento])
REFERENCES [dbo].[Rendimiento] ([idrendimiento])
GO
ALTER TABLE [dbo].[Reporte] CHECK CONSTRAINT [reporte_rendimiento_fk]
GO
ALTER TABLE [dbo].[Reporte]  WITH CHECK ADD  CONSTRAINT [reporte_tiporeporte_fk] FOREIGN KEY([tiporeporte_idtiporeporte])
REFERENCES [dbo].[Tiporeporte] ([idtiporeporte])
GO
ALTER TABLE [dbo].[Reporte] CHECK CONSTRAINT [reporte_tiporeporte_fk]
GO
ALTER TABLE [dbo].[Tarea]  WITH CHECK ADD  CONSTRAINT [tarea_planta_fk] FOREIGN KEY([planta_idplanta])
REFERENCES [dbo].[Planta] ([idplanta])
GO
ALTER TABLE [dbo].[Tarea] CHECK CONSTRAINT [tarea_planta_fk]
GO
ALTER TABLE [dbo].[Usuario]  WITH CHECK ADD  CONSTRAINT [usuario_estado_fk] FOREIGN KEY([estado_idestado])
REFERENCES [dbo].[Estado] ([idestado])
GO
ALTER TABLE [dbo].[Usuario] CHECK CONSTRAINT [usuario_estado_fk]
GO
ALTER TABLE [dbo].[Usuario]  WITH CHECK ADD  CONSTRAINT [usuario_tipousuario_fk] FOREIGN KEY([tipousuario_idtipousuario])
REFERENCES [dbo].[Tipousuario] ([idtipousuario])
GO
ALTER TABLE [dbo].[Usuario] CHECK CONSTRAINT [usuario_tipousuario_fk]
GO

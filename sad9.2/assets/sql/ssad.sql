-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2018 a las 02:39:38
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ssad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL,
  `nom_competencia` varchar(15) DEFAULT NULL,
  `ver_competencia` varchar(50) DEFAULT NULL,
  `desc_competencia` varchar(250) DEFAULT NULL,
  `id_programa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competencias`
--

INSERT INTO `competencias` (`id_competencia`, `nom_competencia`, `ver_competencia`, `desc_competencia`, `id_programa`) VALUES
(2, 'Analizar', '1.2', 'Identificar problemas', 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `consulta_ficha_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `consulta_ficha_usuarios` (
`apellidos` varchar(30)
,`nombres` varchar(30)
,`num_documento` varchar(30)
,`Tip_doc` varchar(30)
,`correo_instu` varchar(30)
,`num_ficha` int(11)
,`fecha_inicio` date
,`fecha_fin` date
,`nom_programa` varchar(40)
,`estado_programa` varchar(10)
,`nvl_programa` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `consulta_trimestre_fichas`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `consulta_trimestre_fichas` (
`Ficha` int(11)
,`Trimestre` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deserciones`
--

CREATE TABLE `deserciones` (
  `id_desercion` int(11) NOT NULL,
  `observaciones` varchar(250) DEFAULT NULL,
  `fecha_desercion1` date DEFAULT NULL,
  `fecha_desercion2` date NOT NULL,
  `fecha_desercion3` date NOT NULL,
  `estado_desercion` varchar(20) DEFAULT NULL,
  `id_instructor` int(11) DEFAULT NULL,
  `id_aprendiz` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `num_ficha` int(11) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_programa` int(11) DEFAULT NULL,
  `id_trimestre` int(11) DEFAULT NULL,
  `id_jornada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`num_ficha`, `fecha_inicio`, `fecha_fin`, `id_programa`, `id_trimestre`, `id_jornada`) VALUES
(1503799, '2018-08-01', '2018-08-16', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas_has_usuarios`
--

CREATE TABLE `fichas_has_usuarios` (
  `fichas_num_ficha` int(11) NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas_has_usuarios`
--

INSERT INTO `fichas_has_usuarios` (`fichas_num_ficha`, `usuarios_id_usuario`) VALUES
(1503799, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id_jornada` int(11) NOT NULL,
  `nom_jornada` varchar(20) DEFAULT NULL,
  `siglas_jornada` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id_jornada`, `nom_jornada`, `siglas_jornada`) VALUES
(2, 'Diurna', 'jd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificaciones`
--

CREATE TABLE `justificaciones` (
  `id_justificaciones` int(11) NOT NULL,
  `estado_justificacion` varchar(15) DEFAULT NULL,
  `tip_justificacion` varchar(15) DEFAULT NULL,
  `fecha_justificacion` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_programa` int(11) NOT NULL,
  `nom_programa` varchar(40) DEFAULT NULL,
  `estado_programa` varchar(10) DEFAULT NULL,
  `nvl_programa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id_programa`, `nom_programa`, `estado_programa`, `nvl_programa`) VALUES
(2, 'ADSI', 'activo', 'tecnologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `tip_rol` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `tip_rol`) VALUES
(1, 'aprendiz'),
(2, 'instructor'),
(3, 'lider de area'),
(4, 'coordinador'),
(5, 'enfermera'),
(6, 'abogado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_doc` int(11) NOT NULL,
  `Tip_doc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_doc`, `Tip_doc`) VALUES
(1, 'cedula'),
(2, 'tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestres`
--

CREATE TABLE `trimestres` (
  `id_trimestre` int(11) NOT NULL,
  `num_trimestre` varchar(20) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trimestres`
--

INSERT INTO `trimestres` (`id_trimestre`, `num_trimestre`, `fecha_inicio`, `fecha_fin`) VALUES
(2, '4', '2018-08-01', '2018-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `id_doc` int(11) DEFAULT NULL,
  `num_documento` varchar(30) DEFAULT NULL,
  `cel_usuario` varchar(11) DEFAULT NULL,
  `tel_usuario` varchar(20) NOT NULL,
  `correo_instu` varchar(30) DEFAULT NULL,
  `correo_perso` varchar(30) NOT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `imagen`, `create_time`, `nombres`, `apellidos`, `id_doc`, `num_documento`, `cel_usuario`, `tel_usuario`, `correo_instu`, `correo_perso`, `contrasenia`, `id_rol`) VALUES
(2, '', '2018-08-25 23:21:03', NULL, 'Juan', 1, '1023038037', '313078921', '', 'Juan@misena.edu.co', '', '202cb962ac59075b964b07152d234b70', 2),
(5, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(6, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(7, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(8, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(9, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(10, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(11, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(12, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(13, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(14, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(15, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(16, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2),
(17, '', '2018-08-25 23:35:27', 'Juan1', 'Garcia', 1, '15037', '15687', '12146', '1@gmail.com', '1@.misena.edu.co', '123', 1),
(18, '', '2018-08-25 23:35:27', 'Jenni', 'Garcia', 1, '15037', '15687', '12146', '2@gmail.com', '2@.misena.edu.co', '123', 2);

-- --------------------------------------------------------

--
-- Estructura para la vista `consulta_ficha_usuarios`
--
DROP TABLE IF EXISTS `consulta_ficha_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consulta_ficha_usuarios`  AS  select `usuarios`.`apellidos` AS `apellidos`,`usuarios`.`nombres` AS `nombres`,`usuarios`.`num_documento` AS `num_documento`,`tipo_documento`.`Tip_doc` AS `Tip_doc`,`usuarios`.`correo_instu` AS `correo_instu`,`fichas`.`num_ficha` AS `num_ficha`,`fichas`.`fecha_inicio` AS `fecha_inicio`,`fichas`.`fecha_fin` AS `fecha_fin`,`programas`.`nom_programa` AS `nom_programa`,`programas`.`estado_programa` AS `estado_programa`,`programas`.`nvl_programa` AS `nvl_programa` from (((((`fichas_has_usuarios` join `usuarios` on((`fichas_has_usuarios`.`usuarios_id_usuario` = `usuarios`.`id_usuario`))) join `fichas` on((`fichas_has_usuarios`.`fichas_num_ficha` = `fichas`.`num_ficha`))) join `programas` on((`programas`.`id_programa` = `fichas`.`id_programa`))) join `trimestres` on((`fichas`.`id_trimestre` = `trimestres`.`id_trimestre`))) join `tipo_documento` on((`usuarios`.`id_doc` = `tipo_documento`.`id_doc`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `consulta_trimestre_fichas`
--
DROP TABLE IF EXISTS `consulta_trimestre_fichas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consulta_trimestre_fichas`  AS  select `fichas`.`num_ficha` AS `Ficha`,`trimestres`.`num_trimestre` AS `Trimestre` from (`fichas` join `trimestres` on((`fichas`.`id_trimestre` = `trimestres`.`id_trimestre`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id_competencia`),
  ADD KEY `id_programa` (`id_programa`);

--
-- Indices de la tabla `deserciones`
--
ALTER TABLE `deserciones`
  ADD PRIMARY KEY (`id_desercion`),
  ADD KEY `id_instructor` (`id_instructor`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`num_ficha`),
  ADD KEY `id_programa` (`id_programa`),
  ADD KEY `id_trimestre` (`id_trimestre`),
  ADD KEY `id_jornada` (`id_jornada`);

--
-- Indices de la tabla `fichas_has_usuarios`
--
ALTER TABLE `fichas_has_usuarios`
  ADD PRIMARY KEY (`fichas_num_ficha`,`usuarios_id_usuario`),
  ADD KEY `fk_fichas_has_usuarios_usuarios1_idx` (`usuarios_id_usuario`),
  ADD KEY `fk_fichas_has_usuarios_fichas1_idx` (`fichas_num_ficha`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
  ADD PRIMARY KEY (`id_justificaciones`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indices de la tabla `trimestres`
--
ALTER TABLE `trimestres`
  ADD PRIMARY KEY (`id_trimestre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_doc` (`id_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competencias`
--
ALTER TABLE `competencias`
  MODIFY `id_competencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `deserciones`
--
ALTER TABLE `deserciones`
  MODIFY `id_desercion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
  MODIFY `id_justificaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trimestres`
--
ALTER TABLE `trimestres`
  MODIFY `id_trimestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD CONSTRAINT `competencias_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programas` (`id_programa`);

--
-- Filtros para la tabla `deserciones`
--
ALTER TABLE `deserciones`
  ADD CONSTRAINT `deserciones_ibfk_1` FOREIGN KEY (`id_instructor`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programas` (`id_programa`),
  ADD CONSTRAINT `fichas_ibfk_2` FOREIGN KEY (`id_trimestre`) REFERENCES `trimestres` (`id_trimestre`),
  ADD CONSTRAINT `fichas_ibfk_3` FOREIGN KEY (`id_jornada`) REFERENCES `jornadas` (`id_jornada`);

--
-- Filtros para la tabla `fichas_has_usuarios`
--
ALTER TABLE `fichas_has_usuarios`
  ADD CONSTRAINT `fk_fichas_has_usuarios_fichas1` FOREIGN KEY (`fichas_num_ficha`) REFERENCES `fichas` (`num_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fichas_has_usuarios_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
  ADD CONSTRAINT `justificaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_doc` FOREIGN KEY (`id_doc`) REFERENCES `tipo_documento` (`id_doc`),
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

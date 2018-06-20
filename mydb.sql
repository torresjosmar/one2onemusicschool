-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2018 a las 00:26:34
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjunto`
--

CREATE TABLE `adjunto` (
  `idadjunto` int(11) NOT NULL,
  `clase_idclase` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `telefono_celular` varchar(20) DEFAULT NULL,
  `telefono_fijo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono_celular` varchar(20) DEFAULT NULL,
  `telefono_fijo` varchar(20) DEFAULT NULL,
  `foto_perfil` varchar(45) DEFAULT NULL,
  `nombre_responsable` varchar(200) DEFAULT NULL,
  `apellido_responsable` varchar(200) DEFAULT NULL,
  `subcategoria_idsubcategoria` int(11) DEFAULT NULL,
  `provincia_idprovincia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `nombres`, `usuario_idusuario`, `apellidos`, `edad`, `telefono_celular`, `telefono_fijo`, `foto_perfil`, `nombre_responsable`, `apellido_responsable`, `subcategoria_idsubcategoria`, `provincia_idprovincia`) VALUES
(1, 'Josmar Eduardo', 4, 'Torres Aguilar', 28, '+584147330639', '+5802763940686', NULL, 'responsable de prueba', 'responsable de prueba', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `idcalificacion` int(11) NOT NULL,
  `profesor_idprofesor` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `pais_idpais` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `idclase` int(11) NOT NULL,
  `profesorcurso_idprofesorcurso` int(11) NOT NULL,
  `cursoalumno_idcursoalumno` int(11) DEFAULT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `estadoclase_idestadoclase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentarios` int(11) NOT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `profesor_idprofesor` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL,
  `profesor_idprofesor` int(11) NOT NULL,
  `dificultad_iddificultad` int(11) NOT NULL,
  `estadocurso_idestadocurso` int(11) NOT NULL,
  `nivel_idnivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoalumno`
--

CREATE TABLE `cursoalumno` (
  `idcursoalumno` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL,
  `profesorcurso_idprofesorcurso` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dificultad`
--

CREATE TABLE `dificultad` (
  `iddificultad` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nombre`, `descripcion`) VALUES
(1, 'Usuario Verificado', 'Descripcion de usuario verificado'),
(2, 'Usuario por Verificar', 'Descripcion de usuario por verificar'),
(3, 'Usuario Spam', 'Descripcion de usuario spam'),
(4, 'Usuario Verificado', 'Descripcion de usuario verificado'),
(5, 'Usuario por Verificar', 'Descripcion de usuario por verificar'),
(6, 'Usuario Spam', 'Descripcion de usuario spam');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoclase`
--

CREATE TABLE `estadoclase` (
  `idestadoclase` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocurso`
--

CREATE TABLE `estadocurso` (
  `idestadocurso` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacionacademica`
--

CREATE TABLE `formacionacademica` (
  `idformacionacademica` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `profesor_idprofesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idpais` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idprofesor` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono_celular` varchar(20) DEFAULT NULL,
  `telefono_fijo` varchar(20) DEFAULT NULL,
  `foto_perfil` varchar(45) DEFAULT NULL,
  `especialidad` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `video_presentacion` varchar(45) DEFAULT NULL,
  `url_facebook` varchar(45) DEFAULT NULL,
  `url_twitter` varchar(45) DEFAULT NULL,
  `url_instagram` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `provincia_idprovincia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombres`, `apellidos`, `edad`, `telefono_celular`, `telefono_fijo`, `foto_perfil`, `especialidad`, `descripcion`, `video_presentacion`, `url_facebook`, `url_twitter`, `url_instagram`, `usuario_idusuario`, `provincia_idprovincia`) VALUES
(2, 'Josmar Profesor', 'Torres Aguilar', 28, '+584147330639', '+583940686', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `idprovincia` int(11) NOT NULL,
  `ciudad_idciudad` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestacomentarios`
--

CREATE TABLE `respuestacomentarios` (
  `idrespuestacomentarios` int(11) NOT NULL,
  `comentarios_idcomentarios` int(11) NOT NULL,
  `profesor_idprofesor` int(11) DEFAULT NULL,
  `alumno_idalumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'Descripcion de rol de administrador'),
(2, 'Profesor', 'Descripcion de rol de profesor'),
(3, 'Alumno', 'Descripcion de rol de alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idsubcategoria` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `users`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `users` (
`id` int(11)
,`username` varchar(100)
,`password` varchar(100)
,`id_rol` int(11)
,`id_estado` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `rol_idrol` int(11) NOT NULL,
  `estado_idestado` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `rol_idrol`, `estado_idestado`, `email`, `password`) VALUES
(4, 3, 1, 'josmar.torres3@gmail.com', '$2y$10$ehScEIrklACfElgdhxTFeup4nzmKYfW7eb0FWPzycWCrQ8D.PxN9m'),
(8, 2, 2, 'josmar@mailkdm.com', '$2y$10$vSvUkheKMRAjZfJ0VzbBBuJJAqRWZ7UuiQrlzDUxzI5Kcb68sRYg6');

-- --------------------------------------------------------

--
-- Estructura para la vista `users`
--
DROP TABLE IF EXISTS `users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users`  AS  select `usuario`.`idusuario` AS `id`,`usuario`.`email` AS `username`,`usuario`.`password` AS `password`,`usuario`.`rol_idrol` AS `id_rol`,`usuario`.`estado_idestado` AS `id_estado` from `usuario` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adjunto`
--
ALTER TABLE `adjunto`
  ADD PRIMARY KEY (`idadjunto`),
  ADD KEY `fk_adjunto_clase1_idx` (`clase_idclase`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`),
  ADD KEY `fk_administrador_usuarios1_idx` (`usuarios_idusuarios`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `fk_alumno_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_alumno_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_alumno_provincia1_idx` (`provincia_idprovincia`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`idcalificacion`),
  ADD KEY `fk_calificacion_profesor1_idx` (`profesor_idprofesor`),
  ADD KEY `fk_calificacion_alumno1_idx` (`alumno_idalumno`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `fk_ciudad_pais1_idx` (`pais_idpais`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`idclase`),
  ADD KEY `fk_clase_cursoalumno1_idx` (`cursoalumno_idcursoalumno`),
  ADD KEY `fk_clase_curso1_idx` (`curso_idcurso`),
  ADD KEY `fk_clase_estadoclase1_idx` (`estadoclase_idestadoclase`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentarios`),
  ADD KEY `fk_comentarios_profesor1_idx` (`profesor_idprofesor`),
  ADD KEY `fk_comentarios_alumno1_idx` (`alumno_idalumno`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`),
  ADD KEY `fk_curso_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_curso_profesor1_idx` (`profesor_idprofesor`),
  ADD KEY `fk_curso_dificultad1_idx` (`dificultad_iddificultad`),
  ADD KEY `fk_curso_estadocurso1_idx` (`estadocurso_idestadocurso`);

--
-- Indices de la tabla `cursoalumno`
--
ALTER TABLE `cursoalumno`
  ADD PRIMARY KEY (`idcursoalumno`),
  ADD KEY `fk_cursoalumno_alumno1_idx` (`alumno_idalumno`),
  ADD KEY `fk_cursoalumno_curso1_idx` (`curso_idcurso`);

--
-- Indices de la tabla `dificultad`
--
ALTER TABLE `dificultad`
  ADD PRIMARY KEY (`iddificultad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `estadoclase`
--
ALTER TABLE `estadoclase`
  ADD PRIMARY KEY (`idestadoclase`);

--
-- Indices de la tabla `estadocurso`
--
ALTER TABLE `estadocurso`
  ADD PRIMARY KEY (`idestadocurso`);

--
-- Indices de la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  ADD PRIMARY KEY (`idformacionacademica`),
  ADD KEY `fk_formacionacademica_profesor1_idx` (`profesor_idprofesor`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idpais`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idprofesor`),
  ADD KEY `fk_profesor_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_profesor_provincia1_idx` (`provincia_idprovincia`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprovincia`),
  ADD KEY `fk_provincia_ciudad1_idx` (`ciudad_idciudad`);

--
-- Indices de la tabla `respuestacomentarios`
--
ALTER TABLE `respuestacomentarios`
  ADD PRIMARY KEY (`idrespuestacomentarios`),
  ADD KEY `fk_respuestacomentarios_comentarios1_idx` (`comentarios_idcomentarios`),
  ADD KEY `fk_respuestacomentarios_profesor1_idx` (`profesor_idprofesor`),
  ADD KEY `fk_respuestacomentarios_alumno1_idx` (`alumno_idalumno`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `fk_subcategoria_categoria1_idx` (`categoria_idcategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuarios_rol_idx` (`rol_idrol`),
  ADD KEY `fk_usuarios_estado1_idx` (`estado_idestado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adjunto`
--
ALTER TABLE `adjunto`
  MODIFY `idadjunto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `idcalificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `idclase` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentarios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursoalumno`
--
ALTER TABLE `cursoalumno`
  MODIFY `idcursoalumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dificultad`
--
ALTER TABLE `dificultad`
  MODIFY `iddificultad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estadoclase`
--
ALTER TABLE `estadoclase`
  MODIFY `idestadoclase` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadocurso`
--
ALTER TABLE `estadocurso`
  MODIFY `idestadocurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  MODIFY `idformacionacademica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idpais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idprofesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adjunto`
--
ALTER TABLE `adjunto`
  ADD CONSTRAINT `fk_adjunto_clase1` FOREIGN KEY (`clase_idclase`) REFERENCES `clase` (`idclase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_provincia1` FOREIGN KEY (`provincia_idprovincia`) REFERENCES `provincia` (`idprovincia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_calificacion_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificacion_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_pais1` FOREIGN KEY (`pais_idpais`) REFERENCES `pais` (`idpais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `fk_clase_curso1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clase_cursoalumno1` FOREIGN KEY (`cursoalumno_idcursoalumno`) REFERENCES `cursoalumno` (`idcursoalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clase_estadoclase1` FOREIGN KEY (`estadoclase_idestadoclase`) REFERENCES `estadoclase` (`idestadoclase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentarios_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_dificultad1` FOREIGN KEY (`dificultad_iddificultad`) REFERENCES `dificultad` (`iddificultad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_estadocurso1` FOREIGN KEY (`estadocurso_idestadocurso`) REFERENCES `estadocurso` (`idestadocurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursoalumno`
--
ALTER TABLE `cursoalumno`
  ADD CONSTRAINT `fk_cursoalumno_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cursoalumno_curso1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  ADD CONSTRAINT `fk_formacionacademica_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_provincia1` FOREIGN KEY (`provincia_idprovincia`) REFERENCES `provincia` (`idprovincia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profesor_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `fk_provincia_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuestacomentarios`
--
ALTER TABLE `respuestacomentarios`
  ADD CONSTRAINT `fk_respuestacomentarios_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respuestacomentarios_comentarios1` FOREIGN KEY (`comentarios_idcomentarios`) REFERENCES `comentarios` (`idcomentarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respuestacomentarios_profesor1` FOREIGN KEY (`profesor_idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_subcategoria_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuarios_estado1` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_rol` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

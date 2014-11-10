-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2014 a las 16:25:54
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bvtyslko_frank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  `tta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_admin_tb_tipo_admin1_idx` (`tta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nombre`, `apellido`, `correo`, `estado`, `tta_id`) VALUES
(1, 'frank', 'de la rosa', 'frankdelarosacampos@gmail.com', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_desafio`
--

CREATE TABLE IF NOT EXISTS `tb_desafio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(8) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `duraccion` time NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_examen`
--

CREATE TABLE IF NOT EXISTS `tb_examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_id` int(11) NOT NULL,
  `tne_id` int(11) NOT NULL,
  `puntuacion` decimal(10,2) NOT NULL,
  `duracion` time NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_tb_examen_tb_realiza1_idx` (`tr_id`),
  KEY `fk_tb_examen_tb_nivel_examen1_idx` (`tne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_logro`
--

CREATE TABLE IF NOT EXISTS `tb_logro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_id` int(11) NOT NULL,
  `puntuacion` decimal(10,2) DEFAULT NULL,
  `estado` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_logro_tb_realiza1_idx` (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nivel_examen`
--

CREATE TABLE IF NOT EXISTS `tb_nivel_examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tb_nivel_examen`
--

INSERT INTO `tb_nivel_examen` (`id`, `codigo`, `descripcion`, `orden`, `estado`) VALUES
(1, '01', 'chancho', 1, '1'),
(2, '02', 'mono', 2, '1'),
(3, '03', 'delfin', 3, '1'),
(4, '04', 'humano', 4, '1'),
(5, '05', 'alumno', 5, '1'),
(6, '06', 'kolaz', 6, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pregunta`
--

CREATE TABLE IF NOT EXISTS `tb_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  `estado` varchar(45) NOT NULL DEFAULT '1',
  `tne_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_pregunta_tb_nivel_examen1_idx` (`tne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_realiza`
--

CREATE TABLE IF NOT EXISTS `tb_realiza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tu_id` int(11) NOT NULL,
  `td_id` int(11) NOT NULL,
  `duracion` time NOT NULL,
  `puntuacion` decimal(10,2) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_realiza_tb_user1_idx` (`tu_id`),
  KEY `fk_realiza_desafio1_idx` (`td_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_respuesta`
--

CREATE TABLE IF NOT EXISTS `tb_respuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `te_id` int(11) NOT NULL,
  `pregunta` int(11) NOT NULL,
  `respuesta` text,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_tb_respuesta_tb_examen1_idx` (`te_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_admin`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tb_tipo_admin`
--

INSERT INTO `tb_tipo_admin` (`id`, `descripcion`, `estado`) VALUES
(1, 'administrador', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `colegio` varchar(60) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `user` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '1',
  `ta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tb_user_tb_admin_idx` (`ta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tb_user`
--

INSERT INTO `tb_user` (`id`, `correo`, `pass`, `colegio`, `telefono`, `user`, `nombre`, `apellidos`, `estado`, `ta_id`) VALUES
(1, 'frankdelarosacampos@gmail.com', '04444d3d500e7a0734d014671df1e1ba', 'san juan de dios', '015572275', 'wampy', 'frank', 'de la rosa campos ', '1', 1),
(3, 'ehuapayaromero@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'mariano melgar', '013541464', 'yiyito', 'ivan eduardo', 'huapaya romero', '1', NULL),
(4, 'j.salsavilca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'alfonso ugarte', '3540280', 'kolaz', 'kolaz', 'salsavilca huamanyauri', '1', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `fk_tb_admin_tb_tipo_admin1` FOREIGN KEY (`tta_id`) REFERENCES `tb_tipo_admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_examen`
--
ALTER TABLE `tb_examen`
  ADD CONSTRAINT `fk_tb_examen_tb_nivel_examen1` FOREIGN KEY (`tne_id`) REFERENCES `tb_nivel_examen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_examen_tb_realiza1` FOREIGN KEY (`tr_id`) REFERENCES `tb_realiza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_logro`
--
ALTER TABLE `tb_logro`
  ADD CONSTRAINT `fk_tb_logro_tb_realiza1` FOREIGN KEY (`tr_id`) REFERENCES `tb_realiza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_pregunta`
--
ALTER TABLE `tb_pregunta`
  ADD CONSTRAINT `fk_tb_pregunta_tb_nivel_examen1` FOREIGN KEY (`tne_id`) REFERENCES `tb_nivel_examen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_realiza`
--
ALTER TABLE `tb_realiza`
  ADD CONSTRAINT `fk_realiza_desafio1` FOREIGN KEY (`td_id`) REFERENCES `tb_desafio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_realiza_tb_user1` FOREIGN KEY (`tu_id`) REFERENCES `tb_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_respuesta`
--
ALTER TABLE `tb_respuesta`
  ADD CONSTRAINT `fk_tb_respuesta_tb_examen1` FOREIGN KEY (`te_id`) REFERENCES `tb_examen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_tb_user_tb_admin` FOREIGN KEY (`ta_id`) REFERENCES `tb_admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 28-02-2017 a las 16:26:57
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `acoinprevbd`
-- 
CREATE DATABASE `acoinprevbd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `acoinprevbd`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `candidatos`
-- 

CREATE TABLE `candidatos` (
  `cdtcodigo` int(11) NOT NULL auto_increment,
  `cdtnombres` varchar(50) NOT NULL,
  `cdtapellido` varchar(50) NOT NULL,
  `cdtcurso` varchar(10) NOT NULL,
  PRIMARY KEY  (`cdtcodigo`),
  KEY `cdtcurso` (`cdtcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `candidatos`
-- 

INSERT INTO `candidatos` VALUES (1, 'Angie', 'Rojas', '91');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `cursos`
-- 

CREATE TABLE `cursos` (
  `crscodigo` varchar(10) NOT NULL,
  `crsnombre` varchar(10) NOT NULL,
  `crsjornada` varchar(10) NOT NULL,
  `crsgrado` varchar(10) NOT NULL,
  PRIMARY KEY  (`crscodigo`),
  KEY `crsjornada` (`crsjornada`),
  KEY `crsgrado` (`crsgrado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `cursos`
-- 

INSERT INTO `cursos` VALUES ('91', '9-1', '1', '9');
INSERT INTO `cursos` VALUES ('92', '9-2', '1', '9');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estudiantes`
-- 

CREATE TABLE `estudiantes` (
  `estcodigo` int(11) NOT NULL auto_increment,
  `estnombres` varchar(50) NOT NULL,
  `estapellidos` varchar(50) NOT NULL,
  `estcurso` varchar(10) NOT NULL,
  PRIMARY KEY  (`estcodigo`),
  KEY `estcurso` (`estcurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1009 ;

-- 
-- Volcar la base de datos para la tabla `estudiantes`
-- 

INSERT INTO `estudiantes` VALUES (100, 'Hernando', 'Guayakan Ramirez', '91');
INSERT INTO `estudiantes` VALUES (102, 'Maria', 'Barrios Mercado', '91');
INSERT INTO `estudiantes` VALUES (1001, 'Jorge', 'Martinez Ramirez', '91');
INSERT INTO `estudiantes` VALUES (1008, 'Maria Carolina', 'Payares Macea', '92');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `grados`
-- 

CREATE TABLE `grados` (
  `grdcodigo` varchar(10) NOT NULL,
  `grdnumero` varchar(10) NOT NULL,
  `grdjornada` varchar(10) NOT NULL,
  PRIMARY KEY  (`grdcodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `grados`
-- 

INSERT INTO `grados` VALUES ('9', '9º', '1');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `jornadas`
-- 

CREATE TABLE `jornadas` (
  `jndcodigo` varchar(10) NOT NULL,
  `jndnombre` varchar(10) NOT NULL,
  `jdndescripcion` varchar(255) NOT NULL,
  PRIMARY KEY  (`jndcodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `jornadas`
-- 

INSERT INTO `jornadas` VALUES ('1', 'UNICA', 'Jornada única. Horario: 7:00 AM - 3:30 PM');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `usrid` int(11) NOT NULL auto_increment,
  `usrusuario` varchar(20) NOT NULL,
  `usrpassword` varchar(255) NOT NULL,
  PRIMARY KEY  (`usrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `votacion`
-- 

CREATE TABLE `votacion` (
  `vtncodigo` int(11) NOT NULL auto_increment,
  `vtnestudiante` int(11) NOT NULL,
  `vtncandidato` int(11) NOT NULL,
  PRIMARY KEY  (`vtncodigo`),
  KEY `vtnestudiante` (`vtnestudiante`),
  KEY `vtncandidato` (`vtncandidato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `votacion`
-- 


-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `candidatos`
-- 
ALTER TABLE `candidatos`
  ADD CONSTRAINT `fk_candidato_curso` FOREIGN KEY (`cdtcurso`) REFERENCES `cursos` (`crscodigo`);

-- 
-- Filtros para la tabla `cursos`
-- 
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_curso_grado` FOREIGN KEY (`crsgrado`) REFERENCES `grados` (`grdcodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_curso_jornada` FOREIGN KEY (`crsjornada`) REFERENCES `jornadas` (`jndcodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `estudiantes`
-- 
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiante_curso` FOREIGN KEY (`estcurso`) REFERENCES `cursos` (`crscodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Filtros para la tabla `votacion`
-- 
ALTER TABLE `votacion`
  ADD CONSTRAINT `fk_votacion_candidato` FOREIGN KEY (`vtncandidato`) REFERENCES `candidatos` (`cdtcodigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_votacion_estudiante` FOREIGN KEY (`vtnestudiante`) REFERENCES `estudiantes` (`estcodigo`) ON DELETE CASCADE ON UPDATE CASCADE;

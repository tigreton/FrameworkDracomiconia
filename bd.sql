-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-02-2010 a las 12:50:21
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `dracoframework`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

DROP TABLE IF EXISTS `juego`;
CREATE TABLE IF NOT EXISTS `juego` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `nombre`, `descripcion`) VALUES
(5, 'Jaime', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `password`) VALUES
(1, 'Jaime', 'c4ca4238a0b923820dcc509a6f75849b');

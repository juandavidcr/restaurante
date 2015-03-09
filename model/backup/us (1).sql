
-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2015 a las 23:13:46
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios`
--
CREATE DATABASE restaurante;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `us`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `us`
--

INSERT INTO `usuarios` (`id`, `email`, `password`,  `estado`) VALUES
(1, 'j1dcrane@gmail.com',  '12345', 1),
(2, 'soyleonardo2009@hotmail.com',  '12345', 0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

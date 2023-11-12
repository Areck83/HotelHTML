-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-05-2018 a las 00:39:09
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto2depw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `NombreC` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `NombreU` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Alias` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contra` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`NombreU`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NombreC`, `NombreU`, `Alias`, `Correo`, `Contra`, `Foto`) VALUES
('seba', 'pvto', 'pvto', 'kulo@hotmail.com', 'wawa', 'imagenes/Android-PNG-Pic.png'),
('Alfredo Issac Ramirez Gonzalez', 'Areck083', 'Areck083', 'ntralfre@hotmail.com', '12345', 'imagenes/Al.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2026 a las 01:54:43
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hospital_db2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_pacient` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(80) NOT NULL,
  `Apellido` varchar(80) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(120) NOT NULL,
  `Diagnostico` varchar(120) NOT NULL,
  `FechaIngreso` date NOT NULL,
  PRIMARY KEY (`id_pacient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_pacient`, `Nombre`, `Apellido`, `Edad`, `Sexo`, `Telefono`, `Direccion`, `Diagnostico`, `FechaIngreso`) VALUES
(2, 'Jarumi', 'Aguilar', 19, 'F', '7894561239', 'Cocos num.15', 'Ematoma', '2026-07-05'),
(3, 'Emanuel', 'Alacantar', 20, 'M', '7894561238', 'Gym num.5', 'DaÃ±o Hepatico', '2026-07-03'),
(4, 'Orlando', 'Alvarardo', 21, 'M', '7894561237', 'Regi num.9', 'Fractura de Femur', '2026-07-09'),
(5, 'Carlos', 'Aviles', 25, 'F', '7894561236', 'Ferrocarril num.4', 'Coma Etilico', '2026-06-10'),
(6, 'Carlos', 'Aviles', 25, 'F', '7894561236', 'Ferrocarril num.4', 'Coma Etilico', '2026-06-10'),
(7, 'Angel', 'Bautista', 19, 'M', '7894561235', 'Reforma num.1', 'Cirrocis', '2026-06-11'),
(8, 'Diego', 'Bautista', 20, 'M', '7894561235', 'Reforma num.1', 'Cancer Pulmonar', '2026-06-11'),
(9, 'Esteban', 'Cardenas', 18, 'M', '7894561234', 'Carretera num.23', 'Cuagulacion', '2026-07-05'),
(10, 'Issac', 'Chavez', 21, 'M', '7894561233', 'Sandoval num.2', 'Cruda', '2026-07-31'),
(11, 'Issac', 'Chavez', 21, 'M', '7894561233', 'Sandoval num.2', 'Cruda', '2026-07-31'),
(12, 'Ricardo', 'Cordova', 19, 'M', '7894561231', 'Estacion num.23', 'Sano', '2026-05-12'),
(13, 'Emilio', 'Corrales', 20, 'M', '123456789', 'Puerta num.8', 'Dolor de Cabeza', '2026-07-04'),
(14, 'Erika', 'Cruz', 18, 'F', '123987456', 'Rosario num.56', 'Paperas', '2026-07-04'),
(15, 'Miguel', 'Galicia', 21, 'M', '741852963', 'Torres num.98', 'Viruela', '2026-07-12'),
(16, 'Yareli', 'Guzman', 19, 'F', '789456125', 'Nose num.34', 'Tos', '2026-07-05'),
(17, 'Yareli', 'Guzman', 19, 'F', '789456125', 'Nose num.34', 'Tos', '2026-07-05'),
(18, 'Jose', 'Guzman', 22, 'F', '321654987', 'Flor num.2', 'Gripe', '2026-07-12'),
(19, 'Ana', 'Jimenez', 20, 'F', '55789461', 'Estacion num.34', 'Covid', '2026-05-10'),
(20, 'Ezequiel', 'Lima', 24, 'M', '557894614', 'Zaragoza num.8', 'Cancer', '2026-05-10'),
(21, 'Grecia', 'Lopez', 19, 'F', '55566611122', 'Atlas num.4', 'Fractura', '2026-07-02'),
(22, 'Christian', 'Lopez', 21, 'M', '6666555221', 'Arroz num.25', 'Herpes', '2026-07-05'),
(23, 'Christian', 'Lopez', 21, 'M', '6666555221', 'Arroz num.25', 'Herpes', '2026-07-05'),
(24, 'Rosa', 'Martinez', 24, 'F', '9996541', 'Cafe num.1', 'Diabetes', '2026-05-05'),
(25, 'Fabiola', 'Morales', 18, 'F', '666332214', 'Nose num.56', 'Anorexia', '2026-07-12'),
(26, 'Victor', 'Nava', 25, 'M', '5555666147', 'Coarzon num.98', 'Gonorrea', '2026-04-08'),
(27, 'Victor', 'Nava', 25, 'M', '5555666147', 'Coarzon num.98', 'Gonorrea', '2026-04-08'),
(28, 'Luz', 'Padilla', 22, 'F', '3332221116', 'Ozumba num.0', 'Bulimia', '2026-06-23'),
(29, 'Jaqueline ', 'Peralta', 26, 'F', '9996663332', 'Hidalgo num.34', 'Hipotermia', '2026-06-27'),
(30, 'Julissa', 'Perez', 20, 'F', '8887779995', 'Lejos num.89', 'TDH', '2026-06-30'),
(31, 'Maria', 'Ramirez', 19, 'F', '5552223334', 'Blanco num.5', 'Diabetes', '2026-06-28'),
(32, 'Maria', 'Ramirez', 19, 'F', '5552223334', 'Blanco num.5', 'Diabetes', '2026-06-28'),
(33, 'Karen', 'Rueda', 26, 'F', '3332221144', 'Rueda num.90', 'Sarampion', '2026-07-02'),
(34, 'Ken', 'Salgado', 28, 'M', '8945612354', 'Cabeza num.8', 'Hipertension', '2026-07-03'),
(35, 'Yordan', 'Sandoval', 19, 'M', '8945612357', 'Negro num.8', 'Hipertension', '2026-07-03'),
(36, 'Jennifer', 'Soriano', 18, 'F', '7778889994', 'Correo num.23', 'Sana', '2026-07-03'),
(37, 'Jesus', 'YaÃ±ez', 39, 'M', '123654795', 'Atlas num.0', 'Gay', '2026-07-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-10-2020 a las 16:55:05
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `resoca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuses`
--

DROP TABLE IF EXISTS `acuses`;
CREATE TABLE IF NOT EXISTS `acuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) NOT NULL,
  `encargado` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `manifiesto` varchar(10) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acuses`
--

INSERT INTO `acuses` (`id`, `cliente`, `encargado`, `puesto`, `descripcion`, `manifiesto`, `estado`, `creado`) VALUES
(1, 'cfdsfd', 'dfsdf', 'sasd', 'dsdadasasd', 'das', 'Activo', '2020-10-15 16:44:30'),
(2, 'dadas', 'asdas', 'sdasda', 'sda', 'dasddsa', 'Activo', '2020-10-15 16:46:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `contra`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) NOT NULL,
  `nra` varchar(15) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(30) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `dir` varchar(150) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `user` varchar(40) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `rfc` (`rfc`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nra`, `telefono`, `email`, `area`, `rfc`, `dir`, `cp`, `user`, `pwd`, `creado`) VALUES
(1, 'Juan Pablo de Jesus Figuero Jaramillo', '125789567789456', '3141467895', 'pablo@gmail.com', 'Sistemas', 'FIJJ990225473', 'Av.los patos no.511', '28869', 'pablito', 'pablito123', '2020-10-12 16:38:07'),
(2, 'jesus javier', '115789567123', '3141208975', 'mendezjavierh97@gmail.com', 'sistemas', 'JJAJ992603482', 'Av.los manglares 511', '28296', 'javier', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-10-12 17:21:13'),
(3, 'Panchito Lopez', '51651651', '3141208975', 'servicios.sistemas@gruposoca.com.mx', 'sistemas', 'dfsfdsfds', 'Av.los manglares 511', '28296', 'prueba', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-10-13 14:15:47'),
(4, '', '', '', '', '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '2020-10-13 14:21:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cortes`
--

DROP TABLE IF EXISTS `cortes`;
CREATE TABLE IF NOT EXISTS `cortes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folio` varchar(5) NOT NULL,
  `ticket` varchar(5) NOT NULL,
  `porcentaje` varchar(3) NOT NULL,
  `kg` varchar(5) NOT NULL,
  `cantidad` varchar(5) NOT NULL,
  `unidad` varchar(5) NOT NULL,
  `descripcion` varchar(5) NOT NULL,
  `precio` varchar(5) NOT NULL,
  `importe` varchar(5) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cortes`
--

INSERT INTO `cortes` (`id`, `folio`, `ticket`, `porcentaje`, `kg`, `cantidad`, `unidad`, `descripcion`, `precio`, `importe`, `creado`) VALUES
(1, '123', '123', '50', '500', '12', 'kg', '1', '1500', '5000', '2020-10-15 16:19:38'),
(2, '123', '124', '50', '500', '12', 'kg', '1', '1500', '4000', '2020-10-15 16:22:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manifiestos`
--

DROP TABLE IF EXISTS `manifiestos`;
CREATE TABLE IF NOT EXISTS `manifiestos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `capacidad` varchar(10) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `totalresiduo` varchar(7) NOT NULL,
  `volpeso` varchar(7) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `nombrerecibe` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `manifiestos`
--

INSERT INTO `manifiestos` (`id`, `nombre`, `capacidad`, `tipo`, `totalresiduo`, `volpeso`, `fecha`, `unidad`, `nombrerecibe`, `estado`, `creado`) VALUES
(1, 'vgfdisbdfo', '1500', 'dhbvgais', '5465', 'vol', 'sda', 'dsasd', 'dsadasdasd', 'Activo', '2020-10-15 16:33:26'),
(2, 'xscdas', '1500', 'asdas', '5465', 'peso', '01-01-2014', 'sda', 'dasdasd', 'Activo', '2020-10-15 16:36:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
CREATE TABLE IF NOT EXISTS `ordenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(75) NOT NULL,
  `encargado` varchar(75) NOT NULL,
  `cargo` varchar(75) NOT NULL,
  `servicio` varchar(75) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `cantidad` varchar(4) NOT NULL,
  `unidad` varchar(15) NOT NULL,
  `concepto` varchar(40) NOT NULL,
  `manifiesto` varchar(15) NOT NULL,
  `factura` varchar(15) NOT NULL,
  `unidadasig` varchar(25) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `cliente`, `encargado`, `cargo`, `servicio`, `fecha`, `cantidad`, `unidad`, `concepto`, `manifiesto`, `factura`, `unidadasig`, `estado`, `creado`) VALUES
(1, 'sfs', 'dffsfsd', 'fdsfdw', 'dfsd', 'fdsfds', '20', 'dfsfsd', 'fsdfsd', 'dsfdsf', 'dfsfsdf', 'fdsfds', 'Activo', '2020-10-15 16:00:20'),
(2, 'sfs', 'dffsfsd', 'dffsfsd', 'dfsd', '01-01-2014', '20', 'dsas', 'sdas', 'aadas', 'adsa', 'dasd', 'Activo', '2020-10-15 16:05:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_combustible`
--

DROP TABLE IF EXISTS `registros_combustible`;
CREATE TABLE IF NOT EXISTS `registros_combustible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` varchar(50) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `kminicial` varchar(25) NOT NULL,
  `kmfinal` varchar(25) NOT NULL,
  `tiposervicio` varchar(50) NOT NULL,
  `litros` varchar(3) NOT NULL,
  `rendimiento` varchar(20) NOT NULL,
  `factura` varchar(30) NOT NULL,
  `operador` varchar(50) NOT NULL,
  `importe` varchar(10) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros_combustible`
--

INSERT INTO `registros_combustible` (`id`, `unidad`, `fecha`, `kminicial`, `kmfinal`, `tiposervicio`, `litros`, `rendimiento`, `factura`, `operador`, `importe`, `creado`) VALUES
(1, 'dasdas', 'asd', 'dasas', 'as', 'asdd', 'das', 'das', 'das', 'das', 'das', '2020-10-15 17:48:33'),
(2, '', '', '', '', '', '', '', '', '', '', '2020-10-15 17:52:16'),
(3, 'as', '01-01-2014', 'sd', 'sda', 'sad', 'das', 'dsa', 'das', 'das', 'das', '2020-10-15 17:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_mantenimiento`
--

DROP TABLE IF EXISTS `registros_mantenimiento`;
CREATE TABLE IF NOT EXISTS `registros_mantenimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidad` varchar(50) NOT NULL,
  `taller` varchar(50) NOT NULL,
  `nofactura` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `km` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `nofactura` (`nofactura`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros_mantenimiento`
--

INSERT INTO `registros_mantenimiento` (`id`, `unidad`, `taller`, `nofactura`, `descripcion`, `fecha`, `km`, `creado`) VALUES
(1, 'xfd', 'sxs', 'sda', 'sda', 'aasd', '', '2020-10-19 14:08:07'),
(2, 'as', 'as', 'as', 'as', 'as', 'as', '2020-10-19 14:08:30'),
(3, 'as', 'asd', 'asd', 'das', '01-01-2014', 'asd', '2020-10-19 14:10:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `operador` varchar(50) NOT NULL,
  `auxiliar` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placas` varchar(10) NOT NULL,
  `destinofinal` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `material` varchar(150) NOT NULL,
  `equipo` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `tipo`, `descripcion`, `supervisor`, `operador`, `auxiliar`, `modelo`, `placas`, `destinofinal`, `ubicacion`, `material`, `equipo`, `creado`) VALUES
(1, 'bsfj', 'bi', 'bnj', 'ib', 'ib', 'ib', 'ib', 'ib', 'ihb', 'ib', 'ib', 'i', '2020-10-15 15:55:13'),
(2, 'dfsdf', 'sfsd', 'sdfsdf', 'dsfsdfds', 'sdfds', 'fdsfsdf', 'fsdfds', 'dsfdsfds', 'fdsfds', 'dfsdsfds', 'dfsdfs', 'fdfsdfds', '2020-10-15 15:58:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

DROP TABLE IF EXISTS `trabajador`;
CREATE TABLE IF NOT EXISTS `trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) NOT NULL,
  `curp` varchar(40) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `nss` varchar(25) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `curp` (`curp`),
  UNIQUE KEY `rfc` (`rfc`),
  UNIQUE KEY `nss` (`nss`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `curp`, `rfc`, `nss`, `cargo`, `user`, `pwd`, `creado`) VALUES
(1, 'Panchito Lopez', 'fijahsvhbas', 'jdkbas', 'jdaoahjsd', 'sistemas', 'panchito', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-10-12 17:38:33'),
(2, '', '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '2020-10-13 14:22:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

DROP TABLE IF EXISTS `unidades`;
CREATE TABLE IF NOT EXISTS `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(75) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `color` varchar(15) NOT NULL,
  `placas` varchar(15) NOT NULL,
  `noeconomico` varchar(20) NOT NULL,
  `capacidad` varchar(20) NOT NULL,
  `tipounidad` varchar(30) NOT NULL,
  `tipocombustible` varchar(75) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `modelo`, `ano`, `color`, `placas`, `noeconomico`, `capacidad`, `tipounidad`, `tipocombustible`, `serie`, `descripcion`, `creado`) VALUES
(1, 'Chryshler', '2011', 'Blanco', 'FJAJS15', '1524', '100 kg', 'Carga pesada', 'Diesel', '6465465', 'fnhisdbfojdns', '2020-10-13 15:11:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

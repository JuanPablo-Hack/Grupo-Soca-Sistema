-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2020 a las 20:44:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `slg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `contra`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancia`
--

CREATE TABLE `mercancia` (
  `id` int(11) NOT NULL,
  `no_formato` varchar(50) NOT NULL,
  `no_contenedor` varchar(50) NOT NULL,
  `naviera` varchar(50) NOT NULL,
  `tipo_contenedor` varchar(150) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `booking` varchar(40) NOT NULL,
  `referencia` varchar(40) NOT NULL,
  `agencia_aduanal` varchar(40) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `transportista` varchar(40) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `observa` varchar(50) NOT NULL,
  `hora_comienzo` varchar(10) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `hora_final` varchar(10) NOT NULL,
  `no_vgm` varchar(30) NOT NULL,
  `embalaje` varchar(30) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mercancia`
--

INSERT INTO `mercancia` (`id`, `no_formato`, `no_contenedor`, `naviera`, `tipo_contenedor`, `fecha`, `booking`, `referencia`, `agencia_aduanal`, `cliente`, `transportista`, `unidad`, `operador`, `observa`, `hora_comienzo`, `peso`, `hora_final`, `no_vgm`, `embalaje`, `creado`) VALUES
(1, 'SLG-1547', '549687', 'Los barcos de popeye', 'Contenedor 4x4 all terreno perro', '14-05-2020', '546549', '41649', 'La agencia del vergas', 'El pablo vergas', 'La transporte', 1, 1, 'kjdaslkjdaks', '15:00', '150 kg', '17:00', '564987', '150', '2020-11-12 19:17:22'),
(2, 'SLG-1579', '4564987', 'Linea de los patos', 'Vergas', '30-09-2020', '13256', '132sdaas', 'daas', 'as', 'dasdasdas', 2, 1, 'Esta bien guapo el pablo', '15:00', '150 kg', '17:00', '15754', '4587', '2020-11-12 19:29:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `curp` varchar(40) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `nss` varchar(25) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `curp`, `rfc`, `nss`, `cargo`, `user`, `pwd`, `creado`) VALUES
(1, 'Juan Pablo de Jesus Figuero Jaramillo', 'FFJJ549874ADAS', 'FFJJ990225473', 'ASGDAIGUASDU', 'Director de Sistemas', 'pablo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-10 19:51:38'),
(2, 'Juan Carlos Lopez Ruiz', 'FIJJ879865AS', 'JCAC6549874', '5498756498', 'Director de Operaciones', 'carlos', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-10 20:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
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
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `modelo`, `ano`, `color`, `placas`, `noeconomico`, `capacidad`, `tipounidad`, `tipocombustible`, `serie`, `descripcion`, `creado`) VALUES
(1, 'L200', '2018', 'Blanca', 'FF5897', '6549786', '850', 'Kg', 'Diesel', '45649879856464', 'Camioneta vergas ajua', '2020-11-10 19:50:53'),
(2, 'RAM 2500', '2008', 'Gris', 'FF89764GB', '6548754697', '50 Toneladas', 'Kg', 'Diesel', '54679765', 'Camioneta mamalona', '2020-11-10 20:12:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `id` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `no_viaje` varchar(4) NOT NULL,
  `peso` float NOT NULL,
  `transportista` varchar(40) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`id`, `fecha`, `hora`, `unidad`, `operador`, `no_viaje`, `peso`, `transportista`, `creado`) VALUES
(1, '19-11-2020', '18:00', 1, 1, '1579', 800, 'Linea de patos transportistas', '2020-11-10 19:52:08'),
(2, '21-09-2020', '15:00', 2, 2, '1598', 1500, 'Linea de transporte vete a la verga', '2020-11-10 20:13:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curp` (`curp`),
  ADD UNIQUE KEY `rfc` (`rfc`),
  ADD UNIQUE KEY `nss` (`nss`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mercancia`
--
ALTER TABLE `mercancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

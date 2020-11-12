-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2020 a las 20:44:32
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
-- Base de datos: `smm`
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
-- Estructura de tabla para la tabla `minas`
--

CREATE TABLE `minas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `localidad` varchar(75) NOT NULL,
  `km_patio` varchar(75) NOT NULL,
  `no_titulo` varchar(75) NOT NULL,
  `vigencia_concesion` varchar(75) NOT NULL,
  `coordenadas` varchar(75) NOT NULL,
  `concesionarios` varchar(150) NOT NULL,
  `estudios` varchar(40) NOT NULL,
  `pagos` varchar(50) NOT NULL,
  `propiedad` varchar(50) NOT NULL,
  `propiedad_peque` varchar(50) NOT NULL,
  `ejido` varchar(50) NOT NULL,
  `carretera` varchar(5) NOT NULL,
  `terraceria` varchar(10) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `herradura` varchar(50) DEFAULT NULL,
  `caminata` varchar(50) DEFAULT NULL,
  `veta` varchar(5) NOT NULL,
  `largo_veta` varchar(10) DEFAULT NULL,
  `ancho_veta` varchar(10) DEFAULT NULL,
  `alto_veta` varchar(10) DEFAULT NULL,
  `cuerpo` varchar(5) NOT NULL,
  `largo_cuerpo` varchar(10) DEFAULT NULL,
  `ancho_cuerpo` varchar(10) DEFAULT NULL,
  `alto_cuerpo` varchar(10) DEFAULT NULL,
  `otro_dimen` varchar(50) DEFAULT NULL,
  `minado_cielo` varchar(5) NOT NULL,
  `minado_sub` varchar(5) NOT NULL,
  `otro_minado` varchar(50) DEFAULT NULL,
  `material` varchar(50) NOT NULL,
  `prod_mensual` varchar(10) NOT NULL,
  `presen_material` varchar(40) NOT NULL,
  `triturado` varchar(40) NOT NULL,
  `breña` varchar(40) NOT NULL,
  `otro_presen` varchar(40) DEFAULT NULL,
  `laboratorio` varchar(75) NOT NULL,
  `metodologia` varchar(75) NOT NULL,
  `explotacion` varchar(5) NOT NULL,
  `transito` varchar(5) NOT NULL,
  `nombre_minero` varchar(50) NOT NULL,
  `tel_minero` varchar(10) NOT NULL,
  `email_minero` varchar(100) NOT NULL,
  `nombre_representante` varchar(50) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `expectativas` varchar(5) NOT NULL,
  `comentarios` varchar(100) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `minas`
--

INSERT INTO `minas` (`id`, `nombre`, `localidad`, `km_patio`, `no_titulo`, `vigencia_concesion`, `coordenadas`, `concesionarios`, `estudios`, `pagos`, `propiedad`, `propiedad_peque`, `ejido`, `carretera`, `terraceria`, `estado`, `herradura`, `caminata`, `veta`, `largo_veta`, `ancho_veta`, `alto_veta`, `cuerpo`, `largo_cuerpo`, `ancho_cuerpo`, `alto_cuerpo`, `otro_dimen`, `minado_cielo`, `minado_sub`, `otro_minado`, `material`, `prod_mensual`, `presen_material`, `triturado`, `breña`, `otro_presen`, `laboratorio`, `metodologia`, `explotacion`, `transito`, `nombre_minero`, `tel_minero`, `email_minero`, `nombre_representante`, `nombre_empresa`, `expectativas`, `comentarios`, `creado`) VALUES
(1, 'Mina de las altas', 'Guadalajara el trapiche', '1500', '1654984', '18-08-2022', 'Latitud: 8976 Altitud: 89756', 'Juan Pablo de Jesus Figueroa Jaramillo', '1646', '2', 'Ejido el grande', 'El rancho Verde', 'La catrina', 'Si', '15', 'Regular', 'De metal', '15', 'Si', '40', '50', '60', 'Si', '80', '15', '20', NULL, '150', '150', NULL, 'Bolsas de papel', '150 kg', 'En bolsitas', '45', '100', NULL, 'Laboratorio el hacker', 'Metodos de las altas metalurgicas', 'Si', 'Si', 'Juan de Jesus Cordova', '314597964', 'miner@hotmail.com', 'Juan Pablo Figueroa Jaramillo', 'Soca Marketers Minerals', 'Si', 'Estan perron el material', '2020-11-11 16:58:28'),
(2, 'Mina de las altas', 'Guadalajara el trapiche', '1500', '1654984', '18-08-2022', 'Latitud: 8976 Altitud: 89756', 'Juan Pablo de Jesus Figueroa Jaramillo', '1646', '2', 'Ejido el grande', 'El rancho Verde', 'La catrina', 'Si', '15', 'Regular', 'De metal', '15', 'Si', '40', '50', '60', 'Si', '80', '15', '20', NULL, '150', '150', NULL, 'Bolsas de papel', '150 kg', 'En bolsitas', '45', '100', NULL, 'Laboratorio el hacker', 'Metodos de las altas metalurgicas', 'Si', 'Si', 'Juan de Jesus Cordova', '314597964', 'miner@hotmail.com', 'Juan Pablo Figueroa Jaramillo', 'Soca Marketers Minerals', 'Si', 'Estan perron el material', '2020-11-11 16:59:03'),
(3, 'Los angeles de las minas', 'Yucatan, Mercurio', '4500', '54649', '14-08-2022', 'Latitud: 5896 Altitud: 150.89', 'Juan, Carlo y Perez', 'Esta perron el impacto', 'Realizado con exito', 'asdasd', 'aafdfa', 'dasafsdasd', '2', '150 km', 'Regular', '15 km', '15 minutos', '2', '150', '12', '10', '2', '15', '15', '12', 'dasda', 'Si', 'Si', 'asdas', 'Mineral de Cobre', '150 tonela', 'En bolsas', '150 toneladas', '150 toneladas', 'asdad', 'Laboratorio los patitos', 'Metodologia Vergas', 'Si', 'Si', 'Jair Solano Quiroz', '3144567898', 'jairsq@hotmail.com', 'Juan Pablo Figueroa', 'Empresa el hacker', 'Si', 'sdaasdfas', '2020-11-11 18:51:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patio_acopio`
--

CREATE TABLE `patio_acopio` (
  `id` int(11) NOT NULL,
  `mina_origen` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `no_guia` varchar(50) NOT NULL,
  `p_tara` varchar(10) NOT NULL,
  `p_bruto` varchar(10) NOT NULL,
  `p_neto` varchar(10) NOT NULL,
  `autoriza` varchar(50) NOT NULL,
  `hora_ingreso` varchar(25) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patio_acopio`
--

INSERT INTO `patio_acopio` (`id`, `mina_origen`, `unidad`, `operador`, `no_guia`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_ingreso`, `creado`) VALUES
(1, 1, 1, 1, 'FSFS16546', '500', '1500', '2000', 'Aldha', '00:00', '2020-11-10 18:01:55'),
(2, 1, 1, 1, 'SADAS4654978', '500', '1500', '2000', 'Juan Pablo ', '15:00', '2020-11-11 19:10:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patio_acopio_salida`
--

CREATE TABLE `patio_acopio_salida` (
  `id` int(11) NOT NULL,
  `patio_destino` varchar(75) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `no_guia` varchar(50) NOT NULL,
  `p_tara` varchar(10) NOT NULL,
  `p_bruto` varchar(10) NOT NULL,
  `p_neto` varchar(10) NOT NULL,
  `autoriza` varchar(50) NOT NULL,
  `hora_salida` varchar(25) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `patio_acopio_salida`
--

INSERT INTO `patio_acopio_salida` (`id`, `patio_destino`, `unidad`, `operador`, `no_guia`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_salida`, `creado`) VALUES
(1, 'Patio de GDL', 1, 1, 'FSFS16546', '500', '1500', '2000', 'Aldha', '15:00', '2020-11-10 18:08:45'),
(2, 'Patio patito', 1, 1, 'ads4as56d4a', '500', '1500', '2000', 'Juan Pablo ', '15:00', '2020-11-11 19:14:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_mina`
--

CREATE TABLE `produccion_mina` (
  `id` int(11) NOT NULL,
  `nombre_mina` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `no_guia` varchar(50) NOT NULL,
  `p_tara` varchar(10) NOT NULL,
  `p_bruto` varchar(10) NOT NULL,
  `p_neto` varchar(10) NOT NULL,
  `autoriza` varchar(50) NOT NULL,
  `hora_salida` varchar(25) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `produccion_mina`
--

INSERT INTO `produccion_mina` (`id`, `nombre_mina`, `unidad`, `operador`, `no_guia`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_salida`, `creado`) VALUES
(2, 1, 1, 1, 'FSFS16546', '500', '1500', '2000', 'Aldha', '18:00', '2020-11-10 17:47:14'),
(3, 2, 1, 2, 'SADAS4654978', '500', '1500', '2000', 'Juan Pablo ', '15:00', '2020-11-11 18:59:55'),
(4, 1, 2, 2, 'SADAS4654978', '500', '1500', '2000', 'Juan Pablo ', '15:00', '2020-11-11 19:02:12'),
(5, 3, 1, 1, 'SADAS4654978', '500', '1500', '2000', 'Juan Pablo ', '15:00', '2020-11-11 19:04:15');

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
(1, 'Juan Pablo de Jesus Figueroa Jaramillo', 'FFJJ549874ADAS', 'FFJJ990225473', 'ASGDAIGUASDU', 'Director de Sistemas', 'pablo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-10 17:31:07'),
(2, 'Juan Carlos ', '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '2020-11-10 18:33:46'),
(3, 'Juan Carlos Lopez Ruiz', 'FIJJ879865AS', 'JCAC6549874', '5498756498', 'Director de Operaciones', 'carlos', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-10 18:34:27');

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
(1, 'L200', '2018', 'Blanca', 'FF5897', '6549786', '850', 'Kg', 'Diesel', '45649879856464', 'Es un carro muy perron', '2020-11-10 17:27:29'),
(2, 'RAM 2500', '2008', 'Gris', 'FF89764GB', '6548754697', '50 Toneladas', 'Kg', 'Diesel', '54679765', 'Es un carro de mucha velocidad', '2020-11-10 18:13:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `minas`
--
ALTER TABLE `minas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patio_acopio`
--
ALTER TABLE `patio_acopio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patio_acopio_salida`
--
ALTER TABLE `patio_acopio_salida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `produccion_mina`
--
ALTER TABLE `produccion_mina`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `minas`
--
ALTER TABLE `minas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `patio_acopio`
--
ALTER TABLE `patio_acopio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `patio_acopio_salida`
--
ALTER TABLE `patio_acopio_salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `produccion_mina`
--
ALTER TABLE `produccion_mina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

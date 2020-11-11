-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2020 a las 21:13:57
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
-- Estructura de tabla para la tabla `patio_acopio`
--

CREATE TABLE `patio_acopio` (
  `id` int(11) NOT NULL,
  `mina_origen` varchar(75) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
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

INSERT INTO `patio_acopio` (`id`, `mina_origen`, `unidad`, `operador`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_ingreso`, `creado`) VALUES
(1, 'Mina de las Altas', 1, 1, '500', '1500', '2000', 'Aldha', '00:00', '2020-11-10 18:01:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patio_acopio_salida`
--

CREATE TABLE `patio_acopio_salida` (
  `id` int(11) NOT NULL,
  `patio_destino` varchar(75) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
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

INSERT INTO `patio_acopio_salida` (`id`, `patio_destino`, `unidad`, `operador`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_salida`, `creado`) VALUES
(1, 'Patio de GDL', 1, 1, '500', '1500', '2000', 'Aldha', '15:00', '2020-11-10 18:08:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_mina`
--

CREATE TABLE `produccion_mina` (
  `id` int(11) NOT NULL,
  `nombre_mina` varchar(75) NOT NULL,
  `unidad` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
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

INSERT INTO `produccion_mina` (`id`, `nombre_mina`, `unidad`, `operador`, `p_tara`, `p_bruto`, `p_neto`, `autoriza`, `hora_salida`, `creado`) VALUES
(2, 'Mina de las Altas', 1, 1, '500', '1500', '2000', 'Aldha', '18:00', '2020-11-10 17:47:14');

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
-- AUTO_INCREMENT de la tabla `patio_acopio`
--
ALTER TABLE `patio_acopio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `patio_acopio_salida`
--
ALTER TABLE `patio_acopio_salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `produccion_mina`
--
ALTER TABLE `produccion_mina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

create table ordenes(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(75) NOT NULL,
    localidad VARCHAR(75) NOT NULL,
    km_patio VARCHAR(75) NOT NULL,
    no_titulo VARCHAR(75) NOT NULL,
    vigencia_concesion VARCHAR(75) NOT NULL,
    coordenadas VARCHAR(75) NOT NULL,
    concesionarios VARCHAR(150) NOT NULL,
    estudios VARCHAR(40) NOT NULL,
    pagos VARCHAR(50) NOT NULL,
    propiedad VARCHAR(50) NOT NULL,
    propiedad_peque VARCHAR(50) NOT NULL,
    ejido VARCHAR(50) NOT NULL,
    carretera VARCHAR(5) NOT NULL,
    terraceria VARCHAR(10) NULL,
    estado VARCHAR(20) NULL,
    herradura VARCHAR(50) NULL,
    caminata VARCHAR(50) NULL,
    veta VARCHAR(5) NOT NULL,
    largo_veta VARCHAR(10) NULL,
    ancho_veta VARCHAR(10) NULL,
    alto_veta VARCHAR(10) NULL,
    cuerpo VARCHAR(5) NOT NULL,
    largo_cuerpo VARCHAR(10) NULL,
    ancho_cuerpo VARCHAR(10) NULL,
    alto_cuerpo VARCHAR(10) NULL,
    otro_dimen varchar(50) NULL,
    minado_cielo varchar(5) NOT NULL,
    minado_sub varchar(5) NOT NULL,
    otro_minado varchar(50) NULL,
    material varchar(50) NOT NULL,
    prod_mensual varchar(10) NOT NULL,
    presen_material varchar(40) NOT NULL,
    triturado varchar(40) NOT NULL,
    breña varchar(40) NOT NULL,
    otro_presen varchar(40) NULL,
    laboratorio varchar(75) NOT NULL,
    metodologia varchar(75) NOT NULL,
    explotacion varchar(5) NOT NULL,
    transito varchar(5) NOT NULL,
    nombre_minero varchar(50) NOT NULL,
    tel_minero varchar(10) NOT NULL,
    email_minero varchar(100) NOT NULL,
    nombre_representante varchar(50) NOT NULL,
    nombre_empresa varchar(50) NOT NULL,
    expectativas varchar(5) NOT NULL,
    comentarios varchar(100) not NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
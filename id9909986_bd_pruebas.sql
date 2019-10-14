-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-09-2019 a las 22:50:29
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id9909986_bd_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red_edicion_lect`
--

CREATE TABLE `red_edicion_lect` (
  `id_reg` int(11) NOT NULL,
  `medidor` int(200) NOT NULL,
  `lectura_ant` int(200) NOT NULL,
  `lectura_act` int(200) NOT NULL,
  `fecha` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `red_edicion_lect`
--

INSERT INTO `red_edicion_lect` (`id_reg`, `medidor`, `lectura_ant`, `lectura_act`, `fecha`) VALUES
(14, 33333, 234023, 30, '2019-08-25'),
(15, 33333, 4, 30, '2019-08-25'),
(16, 33333, 5, 30, '2019-08-25'),
(17, 33333, 6, 30, '2019-08-25'),
(18, 33333, 7, 30, '2019-08-25'),
(19, 11111, 234023, 2, '2019-08-25'),
(20, 11111, 4, 2, '2019-08-25'),
(21, 11111, 4, 2, '2019-08-25'),
(22, 11111, 4, 2, '2019-08-25'),
(23, 11111, 6, 2, '2019-08-25'),
(24, 11111, 4, 2, '2019-08-25'),
(25, 11111, 5, 2, '2019-08-25'),
(26, 11111, 5, 2, '2019-08-25'),
(27, 11111, 6, 2, '2019-08-25'),
(28, 22222, 232340, 3, '2019-08-25'),
(29, 22222, 4, 3, '2019-08-25'),
(30, 22222, 3, 3, '2019-08-26'),
(31, 22222, 2, 3, '2019-08-26'),
(32, 22222, 1, 3, '2019-08-26'),
(33, 22222, 3, 3, '2019-08-26'),
(34, 11111, 2, 2, '2019-08-26'),
(35, 11111, 1, 2, '2019-08-26'),
(36, 22222, 2, 3, '2019-08-26'),
(37, 22222, 1, 3, '2019-08-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(255) NOT NULL,
  `medidor` int(200) NOT NULL,
  `lectura` varchar(200) NOT NULL,
  `pago` varchar(200) NOT NULL,
  `monto` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `rut` int(200) NOT NULL,
  `mes` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `medidor`, `lectura`, `pago`, `monto`, `nombre`, `apellido`, `direccion`, `sector`, `fecha`, `rut`, `mes`) VALUES
(22, 44444, '2', 'No', 2700, 'Sandra', 'Soto', 'Los Notros 23', 'null', '15082019', 124235347, 8),
(23, 11111, '2', 'No', 2700, 'Juan', 'Rodriguez', 'Av. Los Carreras', 'null', '15082019', 162026763, 8),
(24, 22222, '2', 'No', 2700, 'Patricio', 'Bustamante', 'Calle Los Avellanos', 'null', '15082019', 223334445, 8),
(25, 33333, '2', 'No', 2700, 'Romina', 'Torres', 'los castaño', 'null', '15082019', 172303204, 8),
(26, 11111, '2', 'SI', 2000, 'Juan', 'Rodriguez', 'Av. Los Carreras', 'null', '9092019', 162026763, 9),
(27, 22222, '3', 'No', 2350, 'Patricio', 'Bustamante', 'Calle Los Avellanos', 'null', '9092019', 223334445, 9),
(28, 22222, '4', 'No', 2350, 'Patricio', 'Bustamante', 'Calle Los Avellanos', 'null', '7102019', 223334445, 10),
(29, 11111, '3', 'No', 2350, 'Juan', 'Rodriguez', 'Av. Los Carreras', 'null', '7102019', 162026763, 10),
(30, 33333, '3', 'No', 2350, 'Romina', 'Torres', 'los castaño', 'null', '7102019', 172303204, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `usuario`, `contrasena`) VALUES
(1, 'secretario1', 'sec123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `medidor` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `rut` int(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `medidor`, `nombre`, `apellido`, `rut`, `direccion`, `sector`, `correo`) VALUES
(1, 11111, 'romina', 'peres', 12333444, 'los castalos', 'huife', 'null'),
(2, 33333, 'jose', 'albornos', 12333444, 'los castalos', 'huife', 'null'),
(3, 44444, 'julio', 'peres', 12333444, 'los castalos', 'huife', 'null');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `red_edicion_lect`
--
ALTER TABLE `red_edicion_lect`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `red_edicion_lect`
--
ALTER TABLE `red_edicion_lect`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

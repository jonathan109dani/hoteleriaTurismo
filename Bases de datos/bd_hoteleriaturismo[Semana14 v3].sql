-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2017 a las 00:15:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hoteleriaturismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `tarjeta` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `id`, `telefono`, `tarjeta`) VALUES
('Mario Rodriguez', '208100140', 86476717, 2147483647),
('Pedro', '2564848', 4481518, 87721548),
('Julio', '28999', 888, 954115),
('Petronilo', '346543', 2425, 2354253),
('elieser', '401230123', 88888888, 543);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nombreCliente` varchar(100) NOT NULL,
  `habitacion` int(100) NOT NULL,
  `precio` int(50) NOT NULL,
  `numeroFactura` int(100) NOT NULL,
  `ingreso` varchar(50) NOT NULL,
  `estadia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nombreCliente`, `habitacion`, `precio`, `numeroFactura`, `ingreso`, `estadia`) VALUES
('Mario Rodriguez', 1, 0, 101, '2017-09-01', '2017-09-12'),
('Pedro', 4, 0, 102, '2017-09-22', '2017-10-26'),
('Mario Rodriguez', 1, 0, 201, '2017-09-01', '2017-09-07'),
('Julio', 6, 0, 401, '2017-09-22', '2017-09-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`id`, `nombre`, `puesto`) VALUES
(208000264, 'Brayan Hernández', 'Miembro'),
(208100133, 'Jonathan Villalobos', 'Lider'),
(208100140, 'Mario Rodriguez', 'Co-Lider'),
(402440303, 'Kevin Ugalde', 'Veterano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `numero` int(10) NOT NULL,
  `piso` int(5) NOT NULL,
  `tipo` varchar(500) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`numero`, `piso`, `tipo`, `Estado`) VALUES
(101, 1, '1', 0),
(102, 1, '1', 0),
(103, 1, '1', 0),
(104, 1, '1', 0),
(105, 1, '1', 0),
(106, 1, '2', 0),
(107, 1, '2', 0),
(108, 1, '2', 0),
(109, 1, '2', 0),
(110, 1, '2', 0),
(201, 2, '1', 0),
(202, 2, '1', 0),
(203, 2, '1', 0),
(204, 2, '1', 0),
(205, 2, '1', 0),
(206, 2, '2', 0),
(207, 2, '2', 0),
(208, 2, '2', 0),
(209, 2, '2', 0),
(210, 2, '2', 0),
(301, 3, '3', 0),
(302, 3, '3', 0),
(303, 3, '3', 0),
(304, 3, '3', 0),
(305, 3, '3', 0),
(306, 3, '4', 0),
(307, 3, '4', 0),
(308, 3, '4', 0),
(309, 3, '4', 0),
(310, 3, '4', 0),
(401, 4, '6', 0),
(402, 4, '6', 0),
(403, 4, '6', 0),
(404, 4, '6', 0),
(405, 4, '6', 0),
(406, 4, '7', 0),
(407, 4, '7', 0),
(408, 4, '7', 0),
(409, 4, '5', 0),
(410, 4, '5', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `precio`) VALUES
(1, 'Coca Cola', 3),
(2, 'Hamburguesa', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_habitacion`
--

CREATE TABLE `productos_habitacion` (
  `numeroHabitacion` int(10) NOT NULL,
  `idProducto` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_habitacion`
--

INSERT INTO `productos_habitacion` (`numeroHabitacion`, `idProducto`, `id`) VALUES
(101, 1, 9),
(102, 2, 10),
(102, 2, 11),
(409, 2, 14),
(101, 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE `tipohabitacion` (
  `id` int(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `numeroCamas` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `moneda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`id`, `descripcion`, `numeroCamas`, `precio`, `moneda`) VALUES
(1, 'Sencilla', 1, 100, '$'),
(2, 'Doble', 2, 200, '¢'),
(3, 'Triple', 3, 250, '$'),
(4, 'Quadruple', 4, 300, '¥'),
(5, 'Presi', 2, 2000, '€'),
(6, 'Jr Suit', 1, 500, '$'),
(7, 'Suit', 2, 1000, '$');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreUsuario`, `password`, `nombre`, `tipoUsuario`) VALUES
('Brayan', 'fff6ed575ad00ee84f1cf02d2c8084ce', 'Brayan', 2),
('juan', 'fff6ed575ad00ee84f1cf02d2c8084ce', 'Juan Perez Perez', 1),
('Kevin', 'fff6ed575ad00ee84f1cf02d2c8084ce', 'Kevin', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`numeroFactura`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_habitacion`
--
ALTER TABLE `productos_habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productos_habitacion`
--
ALTER TABLE `productos_habitacion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

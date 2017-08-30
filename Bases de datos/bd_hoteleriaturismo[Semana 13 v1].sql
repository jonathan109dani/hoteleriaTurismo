-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2017 a las 20:30:30
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
  `ingreso` varchar(50) NOT NULL,
  `estadia` varchar(50) NOT NULL,
  `tarjeta` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `id`, `telefono`, `ingreso`, `estadia`, `tarjeta`) VALUES
('kevin', '1233', 888888, '2017-08-26', '2017-08-29', 1000),
('Ana', '123546', 852147, '2017-08-26', '2017-09-05', 0),
('Mario Rodriguez', '208100140', 86476717, '2017-08-05', '2017-08-13', 2147483647),
('Julio', '28999', 888, '2017-10-19', '2017-11-01', 954115);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nombreCliente` varchar(100) NOT NULL,
  `habitacion` int(100) NOT NULL,
  `precio` int(50) NOT NULL,
  `numeroFactura` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nombreCliente`, `habitacion`, `precio`, `numeroFactura`) VALUES
('Mario Rodriguez', 6, 0, 108),
('Ana', 3, 0, 133);

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
(101, 1, 'Sencilla', 0),
(102, 1, 'Sencilla', 0),
(103, 1, 'Sencilla', 0),
(104, 1, 'Sencilla', 0),
(105, 1, 'Sencilla', 0),
(106, 1, 'Doble', 0),
(107, 1, 'Doble', 0),
(108, 1, 'Doble', 0),
(109, 1, 'Doble', 0),
(110, 1, 'Doble', 0),
(201, 2, 'Sencilla', 0),
(202, 2, 'Sencilla', 0),
(203, 2, 'Sencilla', 0),
(204, 2, 'Sencilla', 0),
(205, 2, 'Sencilla', 0),
(206, 2, 'Doble', 0),
(207, 2, 'Doble', 0),
(208, 2, 'Doble', 0),
(209, 2, 'Doble', 0),
(210, 2, 'Doble', 0),
(301, 3, 'Triple', 0),
(302, 3, 'Triple', 0),
(303, 3, 'Triple', 0),
(304, 3, 'Triple', 0),
(305, 3, 'Triple', 0),
(306, 3, 'Quadruple', 0),
(307, 3, 'Quadruple', 0),
(308, 3, 'Quadruple', 0),
(309, 3, 'Quadruple', 0),
(310, 3, 'Quadruple', 0),
(401, 4, 'Jr Suit', 0),
(402, 4, 'Jr Suit', 0),
(403, 4, 'Jr Suit', 0),
(404, 4, 'Jr Suit', 0),
(405, 4, 'Jr Suit', 0),
(406, 4, 'Suit', 0),
(407, 4, 'Suit', 0),
(408, 4, 'Suit', 0),
(409, 4, 'Presi', 0),
(410, 4, 'Presi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE `tipohabitacion` (
  `id` int(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `numeroCamas` int(10) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`id`, `descripcion`, `numeroCamas`, `precio`) VALUES
(1, 'Sencilla', 1, 200),
(2, 'Doble', 2, 250),
(3, 'Triple', 3, 300),
(4, 'Quadruple', 4, 300),
(5, 'Presi', 2, 2000),
(6, 'Jr Suit', 1, 500),
(7, 'Suit', 2, 1000);

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
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

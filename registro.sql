-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2024 a las 01:39:48
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `Nombre_completo` varchar(45) NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `Nombre_completo`, `correo`, `clave`) VALUES
(5, 'Ibar', 'Jerny Ibarguen', 'Iba@gmail.com', '$2y$10$R7Egrd.WuPVbRAb3UuWwCuEUdWafxrjP5gLFueaLTI64uyjk268fS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` text NOT NULL,
  `problema` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `problema`, `descripcion`) VALUES
(22, 'Jerny', 'jernyalejo1005@gmail.com', 'No eh recibido mi paquete', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `idcupon` int(11) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `descuento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `correo` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `apellido`, `cedula`, `telefono`, `usuario`, `correo`, `password`) VALUES
(59, 'prueba', 'probando', '1001238401', '312', 'test', 'test@gmail.com', '$2y$10$s2Q1Vh7z.Ed9VymxX.RaOOJuZ3W5Ln0cNSZ/x1cYJNe0OqF5VgRLS'),
(60, 'prueba2', 'probando2', '12345', '312412412', 'Test2', 'testing@gmail.com', '$2y$10$ksL5NqD1dX0LnseLDuSyX.tBGnu1E9b.xK5OGQ6TV.1M3M.Uw3bdy'),
(61, 'Jerny Alejandro', 'Ibarguen Boliva', '1029780016', '3114868276', 'Jaibarguen', 'jernyalejo1005@gmail.com', '$2y$10$mo5Ma4OvGyNodCRqSQtXUO.g.dVjDA75WmTvgJ95.PHNR07/3bky2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `precio` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` varchar(3) NOT NULL,
  `informacion` text NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` text NOT NULL,
  `infovendedor` text NOT NULL,
  `vendedorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `precio`, `imagen`, `stock`, `informacion`, `descripcion`, `tipo`, `infovendedor`, `vendedorid`) VALUES
(7, 'Dron', '2500000', 'product-5.jpg', '1', 'dron', 'dron con oro', 'Electronico', 'Test2', 12345),
(8, 'Sueter', '65000', 'product-2.jpg', '20', 'sueter', 'sueter azul', 'Ropa', 'test', 1001238401),
(9, 'Silla', '85000', 'product-9.jpg', '8', 'silla', 'azul', 'Hogar', 'Jaibarguen', 1029780016),
(10, 'Reloj', '100000', 'product-6.jpg', '12', 'asdf', 'qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem', 'Electronico', 'Jaibarguen', 1029780016),
(11, 'Crema', '12000', 'product-8.jpg', '5', 'asd', 'dsa', 'Aseo', 'Jaibarguen', 1029780016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventa` int(11) NOT NULL,
  `idfactura` int(11) NOT NULL,
  `cliente` varchar(15) NOT NULL,
  `usuario` text NOT NULL,
  `correo` text NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `Dl1` text NOT NULL,
  `Dl2` text NOT NULL,
  `pais` text NOT NULL,
  `ciudad` text NOT NULL,
  `departamento` text NOT NULL,
  `cpostal` text NOT NULL,
  `mpago` text NOT NULL,
  `productos` text NOT NULL,
  `precio` text NOT NULL,
  `cantidad` varchar(3) NOT NULL,
  `total` text NOT NULL,
  `idproductos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idventa`, `idfactura`, `cliente`, `usuario`, `correo`, `telefono`, `Dl1`, `Dl2`, `pais`, `ciudad`, `departamento`, `cpostal`, `mpago`, `productos`, `precio`, `cantidad`, `total`, `idproductos`) VALUES
(1, 2147483647, 'prueba2', 'Test2', 'testing@gmail.com', '312412412', '#12-49', '12-66', 'Colombia', 'Bogota', 'Antioquia', '110221', 'banktransfer', 'Reloj', '100000', '2', '200000', '10'),
(2, 2147483647, 'prueba2', 'Test2', 'testing@gmail.com', '312412412', '#12-49', '12-66', 'Colombia', 'Bogota', 'Antioquia', '110221', 'banktransfer', 'Silla', '85000', '1', '85000', '9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

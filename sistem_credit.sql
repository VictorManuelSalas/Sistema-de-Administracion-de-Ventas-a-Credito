-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2022 a las 06:46:17
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistem_credit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_registro` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ap_pat` varchar(255) NOT NULL,
  `ap_mat` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(8) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_registro`, `id`, `nombre`, `ap_pat`, `ap_mat`, `edad`, `sexo`, `telefono`, `img_url`, `email`, `tipo_usuario`, `created_at`, `updated_at`) VALUES
(15, 12343, 'Esperanza', 'Robles', 'Sanchez', 30, 'Mujer', '8711545896', 'null', 'esperanza@hotmail.com', 1, '2022-04-05 22:27:34', '2022-04-07 04:55:37'),
(19, 19080545, 'Edwin', 'Fierro', 'Perez', 43, 'Hombre', '5253763484', '', 'empresabenitojuares@edu.com.mx', 0, '2022-04-07 05:02:39', '2022-04-07 05:02:39'),
(20, 1908054, 'Edwin', 'Fierro', 'Perez', 43, 'Hombre', '5253763484', '', 'empresabenitojuares@edu.com.mx', 0, '2022-04-07 10:48:25', '2022-04-07 10:48:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID` int(11) NOT NULL,
  `Articulo` varchar(70) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `FechadeVenta` date NOT NULL DEFAULT current_timestamp(),
  `Cliente` varchar(50) NOT NULL,
  `ACuantosMeses` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `Articulo`, `Cantidad`, `FechadeVenta`, `Cliente`, `ACuantosMeses`, `img_url`, `total`, `created_at`, `updated_at`) VALUES
(11, 'Proyectores', 20, '2022-03-01', 'Susana Caldera', 25, NULL, 15205, '2022-04-05 15:47:50', '2022-04-07 05:11:10'),
(12, 'Computadora Mac', 13, '2022-02-11', 'Susana Medina', 15, NULL, 50000, '2022-04-05 15:47:50', '2022-04-05 15:48:11'),
(14, 'CPU', 150, '2022-04-05', 'Solem Hill', NULL, 'null', 4120, '2022-04-05 23:27:03', '2022-04-05 23:27:03'),
(15, 'CPU', 150, '2022-04-05', 'Solem Hill', 10, 'null', 4120, '2022-04-05 23:27:34', '2022-04-05 23:27:34'),
(16, 'Pinzas', 231, '2021-01-01', 'Hilary', 12, 'null', 123, '2022-04-05 23:30:51', '2022-04-05 23:30:51'),
(17, 'Pinzas de doble', 123, '2021-02-12', 'Marlene Putona', 12, '', 12, '2022-04-05 23:31:16', '2022-04-05 23:50:51'),
(18, 'Impresora Termica', 192, '2021-01-12', 'Pedro ALvares', 12, '', 50555, '2022-04-07 05:14:35', '2022-04-07 05:14:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_registro`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2024 a las 21:31:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inscribir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_E` int(70) NOT NULL,
  `Nombre` text NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `rut` int(20) NOT NULL,
  `edad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_E`, `Nombre`, `apellido`, `rut`, `edad`) VALUES
(3, 'juan', 'perez', 21467890, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incribir`
--

CREATE TABLE `incribir` (
  `id_I` int(70) NOT NULL,
  `id_E` int(70) NOT NULL,
  `id_R` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramos`
--

CREATE TABLE `ramos` (
  `id_R` int(70) NOT NULL,
  `Nombre_R` varchar(70) NOT NULL,
  `creditos` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ramos`
--

INSERT INTO `ramos` (`id_R`, `Nombre_R`, `creditos`) VALUES
(2, 'calculo', 6),
(3, 'ingles 2', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`rut`),
  ADD UNIQUE KEY `id_E` (`id_E`);

--
-- Indices de la tabla `incribir`
--
ALTER TABLE `incribir`
  ADD PRIMARY KEY (`id_I`),
  ADD KEY `id_E` (`id_E`),
  ADD KEY `id_R` (`id_R`);

--
-- Indices de la tabla `ramos`
--
ALTER TABLE `ramos`
  ADD PRIMARY KEY (`id_R`),
  ADD KEY `id_R` (`id_R`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_E` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `incribir`
--
ALTER TABLE `incribir`
  MODIFY `id_I` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ramos`
--
ALTER TABLE `ramos`
  MODIFY `id_R` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incribir`
--
ALTER TABLE `incribir`
  ADD CONSTRAINT `incribir_ibfk_1` FOREIGN KEY (`id_E`) REFERENCES `alumnos` (`id_E`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incribir_ibfk_2` FOREIGN KEY (`id_R`) REFERENCES `ramos` (`id_R`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

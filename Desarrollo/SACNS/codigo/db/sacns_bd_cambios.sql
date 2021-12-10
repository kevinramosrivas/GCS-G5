-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 17:31:32
-- Versión del servidor: 8.0.26
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sacns_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `adminitrador_id` int NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `alum_id` int NOT NULL,
  `nivel_id` int NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `asignatura_id` int NOT NULL,
  `nivel_id` int NOT NULL,
  `docente_id` int NOT NULL,
  `nombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `docente_id` int NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `asignatura_id` int NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int NOT NULL,
  `especialidad` varchar(200) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falta_asistencia`
--

CREATE TABLE `falta_asistencia` (
  `id` int NOT NULL,
  `asignatura_id` int NOT NULL,
  `alum_id` int NOT NULL,
  `descripción` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `nivel_id` int NOT NULL,
  `nivel` varchar(10) COLLATE utf16_spanish_ci NOT NULL,
  `año` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `nota_id` int NOT NULL,
  `asignatura_id` int NOT NULL,
  `alum_id` int NOT NULL,
  `trimestre` int NOT NULL,
  `nota` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observación`
--

CREATE TABLE `observación` (
  `obs_id` int NOT NULL,
  `id_alum` int NOT NULL,
  `id_asig` int NOT NULL,
  `descripción` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `padre_id` int NOT NULL,
  `usuario` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `nombres` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf16_spanish_ci NOT NULL,
  `alum_id` int NOT NULL,
  `email` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `celular` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`adminitrador_id`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`alum_id`),
  ADD KEY `FK_NIVEL` (`nivel_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`asignatura_id`),
  ADD KEY `FK_NIVEL` (`nivel_id`),
  ADD KEY `FK_DOCENTE` (`docente_id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`docente_id`),
  ADD UNIQUE KEY `usuario_2` (`usuario`),
  ADD KEY `FK_ASIGNATURA` (`asignatura_id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asignatura_id` (`asignatura_id`),
  ADD KEY `alum_id` (`alum_id`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivel_id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `FK_ASIGNATURA` (`asignatura_id`),
  ADD KEY `FK_ALUMN0` (`alum_id`);

--
-- Indices de la tabla `observación`
--
ALTER TABLE `observación`
  ADD PRIMARY KEY (`obs_id`),
  ADD KEY `id_alum` (`id_alum`),
  ADD KEY `id_asig` (`id_asig`);

--
-- Indices de la tabla `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`padre_id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `alum_id` (`alum_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `adminitrador_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `alum_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `asignatura_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `docente_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `nivel_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observación`
--
ALTER TABLE `observación`
  MODIFY `obs_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `padre`
--
ALTER TABLE `padre`
  MODIFY `padre_id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`nivel_id`),
  ADD CONSTRAINT `asignatura_ibfk_2` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`docente_id`);

--
-- Filtros para la tabla `falta_asistencia`
--
ALTER TABLE `falta_asistencia`
  ADD CONSTRAINT `falta_asistencia_ibfk_1` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`),
  ADD CONSTRAINT `falta_asistencia_ibfk_2` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`asignatura_id`),
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`);

--
-- Filtros para la tabla `observación`
--
ALTER TABLE `observación`
  ADD CONSTRAINT `observación_ibfk_1` FOREIGN KEY (`id_alum`) REFERENCES `alumno` (`alum_id`),
  ADD CONSTRAINT `observación_ibfk_2` FOREIGN KEY (`id_asig`) REFERENCES `asignatura` (`asignatura_id`);

--
-- Filtros para la tabla `padre`
--
ALTER TABLE `padre`
  ADD CONSTRAINT `padre_ibfk_1` FOREIGN KEY (`alum_id`) REFERENCES `alumno` (`alum_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

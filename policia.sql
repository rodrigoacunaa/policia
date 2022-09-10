-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2022 a las 19:43:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `policia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `dni` varchar(11) NOT NULL,
  `nomApe` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `cdPostal` int(4) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `destino` text NOT NULL,
  `comisariaD` varchar(100) NOT NULL,
  `secundario` tinyint(1) NOT NULL,
  `paisNacimiento` text NOT NULL,
  `aula` int(3) NOT NULL,
  `armaAsig` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `cuatrimestre` int(2) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finales`
--

CREATE TABLE `finales` (
  `idMat` int(2) NOT NULL,
  `fecha_f` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `nombreM` varchar(50) NOT NULL,
  `idMat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `dni` varchar(11) NOT NULL,
  `idMat` int(2) NOT NULL,
  `nota` float NOT NULL,
  `periodo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relmatalu`
--

CREATE TABLE `relmatalu` (
  `idMat` int(2) NOT NULL,
  `aula` int(3) NOT NULL,
  `cuatrimestre` int(2) NOT NULL,
  `profEncargado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundario`
--

CREATE TABLE `secundario` (
  `dni` varchar(11) NOT NULL,
  `analiticoAlum` tinyint(1) NOT NULL,
  `promedio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `aula` (`aula`);

--
-- Indices de la tabla `finales`
--
ALTER TABLE `finales`
  ADD PRIMARY KEY (`idMat`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD UNIQUE KEY `idMat` (`idMat`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `idMat` (`idMat`);

--
-- Indices de la tabla `relmatalu`
--
ALTER TABLE `relmatalu`
  ADD UNIQUE KEY `idMat` (`idMat`),
  ADD UNIQUE KEY `aula` (`aula`);

--
-- Indices de la tabla `secundario`
--
ALTER TABLE `secundario`
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`aula`) REFERENCES `relmatalu` (`aula`);

--
-- Filtros para la tabla `finales`
--
ALTER TABLE `finales`
  ADD CONSTRAINT `finales_ibfk_1` FOREIGN KEY (`idMat`) REFERENCES `materias` (`idMat`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `alumnos` (`dni`),
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`idMat`) REFERENCES `materias` (`idMat`);

--
-- Filtros para la tabla `relmatalu`
--
ALTER TABLE `relmatalu`
  ADD CONSTRAINT `relmatalu_ibfk_1` FOREIGN KEY (`idMat`) REFERENCES `materias` (`idMat`);

--
-- Filtros para la tabla `secundario`
--
ALTER TABLE `secundario`
  ADD CONSTRAINT `secundario_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `alumnos` (`dni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

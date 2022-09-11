-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2022 a las 08:08:40
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
  `dni` int(20) NOT NULL,
  `nomApe` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `cdPostal` int(4) NOT NULL,
  `distrito` varchar(150) NOT NULL,
  `domicilio` varchar(150) NOT NULL,
  `destino` varchar(150) NOT NULL,
  `comisariaD` varchar(150) NOT NULL,
  `secundario` text NOT NULL,
  `paisNacimiento` text NOT NULL,
  `aula` varchar(3) NOT NULL,
  `armaAsig` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nomApe`, `email`, `telefono`, `cdPostal`, `distrito`, `domicilio`, `destino`, `comisariaD`, `secundario`, `paisNacimiento`, `aula`, `armaAsig`) VALUES
(4545, 'Anacleto', 'rodrigosebastianok@gmail.com', '2233127654', 5432, 'sadsad', 'dasdsa', 'dasda', 'dsadsa', 'dasdas', 'dsadas', 'dsa', 'dasdas'),
(4545, 'Anacleto', 'rodrigosebastianok@gmail.com', '2233127654', 5432, 'sadsad', 'dasdsa', 'dasda', 'dsadsa', 'dasdas', 'dsadas', 'dsa', 'dasdas'),
(4545, 'Anacleto', 'rodrigosebastianok@gmail.com', '2233127654', 5432, 'sadsad', 'dasdsa', 'dasda', 'dsadsa', 'dasdas', 'dsadas', 'dsa', 'dasdas'),
(21212, 'maximo', 'rodrigosebastianok@gmail.com', '121212', 1234, 'asdasd', 'dasdas', 'dasdas', 'dadsa', 'si', 'argentina', '201', 'sasa'),
(21212, 'maximo', 'rodrigosebastianok@gmail.com', '121212', 1234, 'asdasd', 'dasdas', 'dasdas', 'dadsa', 'si', 'argentina', '201', 'sasa'),
(21212, 'maximo', 'rodrigosebastianok@gmail.com', '121212', 1234, 'asdasd', 'dasdas', 'dasdas', 'dadsa', 'si', 'argentina', '201', 'sasa'),
(21212, 'maximo', 'rodrigosebastianok@gmail.com', '121212', 1234, 'asdasd', 'dasdas', 'dasdas', 'dadsa', 'si', 'argentina', '201', 'sasa'),
(21212, 'maximo', 'rodrigosebastianok@gmail.com', '121212', 1234, 'asdasd', 'dasdas', 'dasdas', 'dadsa', 'si', 'argentina', '201', 'sasa'),
(12345, 'Anacleto', 'rodrigosebastianok@gmail.com', '2233127654', 1234, 'dasdas', 'dadas', 'dasdas', 'dasdsa', 'si', 'dsadsa', '201', 'sadasds'),
(132452, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 2132, '45320176', 'sdassa', 'dasdas', 'fdsfds', 'si', 'weqwqds', '201', 'dsasdas'),
(31321, 'maximo', 'rodrigosebastianok@gmail.com', '2233127654', 1234, 'dsadas', 'dsadas', 'dasdas', 'dsadsa', 'si', 'dasdsa', '201', 'dasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `cuatrimestre` varchar(40) NOT NULL,
  `inicio` varchar(40) NOT NULL,
  `final` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finales`
--

CREATE TABLE `finales` (
  `idMat` int(11) NOT NULL,
  `fecha_f` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `nombreM` text NOT NULL,
  `idMat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `dni` int(11) NOT NULL,
  `idMat` int(11) NOT NULL,
  `nota` int(2) NOT NULL,
  `periodo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relmatalu`
--

CREATE TABLE `relmatalu` (
  `idMat` int(11) NOT NULL,
  `aula` int(3) NOT NULL,
  `cuatrimestre` int(2) NOT NULL,
  `profEncargado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundario`
--

CREATE TABLE `secundario` (
  `dni` int(11) NOT NULL,
  `analiticoAlum` text NOT NULL,
  `promedio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

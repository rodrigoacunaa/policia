-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2022 a las 18:32:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

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
  `armaAsig` varchar(40) NOT NULL,
  `estado` int(1) NOT NULL,
  `fechaB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nomApe`, `email`, `telefono`, `cdPostal`, `distrito`, `domicilio`, `destino`, `comisariaD`, `secundario`, `paisNacimiento`, `aula`, `armaAsig`, `estado`, `fechaB`) VALUES
(45320176, 'ernesto', 'rodrigosebastianok@gmail.com', '2233127654', 7109, 'este', 'ese', 'ala', 'aca', 'si', 'ARGENTINA', '123', 'bereta', 1, '2022-09-12'),
(12345654, 'carlos', 'theshitman27@gmail.com', '2243245687', 5434, 'aaa', 'bbb', 'ccc', 'nnn', 'si', 'argentina', '444', 'bereta', 1, '2022-09-13'),
(12543675, 'bastian baez', 'alcuri123@gmail.com', '2243245687', 6543, 'gdgdsa', 'shahs', 'hhh', 'ashsah', 'si', 'argentina', '201', 'bereta', 1, '2022-09-14'),
(54676876, 'tomas alcuri', 'tomasalcuri@gmail.com', '2246588707', 7107, 'santa teresita', 'calle 11 Nº 1603', 'hdshdh', 'djdjsjd', 'si', 'argentina', '201', 'bereta', 1, '2022-09-11'),
(34251665, 'ailen', 'theshitman27@gmail.com', '2243245687', 5643, 'casjhash', 'jsdhahda', 'hdasdag', 'hdfshsdhsd', 'si', 'argentina', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(546376728, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 6767, 'dsadsa', 'dasdsa', 'dadsa', 'dsadsa', 'SI', '', '201', 'bereta', 0, '0000-00-00'),
(45678987, 'Anacleto', 'rodrigo12@gmail.com', '2233127654', 7654, 'gdgsdh', 'hdshdsh', 'hhhsdhds', 'hsdhdsh', 'SI', 'Argentina', '201', 'bereta', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cc_titulosencundario`
--

CREATE TABLE `cc_titulosencundario` (
  `id` int(11) NOT NULL,
  `nomApe` text NOT NULL,
  `tituloSecundario` varchar(900) NOT NULL,
  `resolucion` varchar(900) NOT NULL,
  `escuela` varchar(90) NOT NULL,
  `distrito` varchar(60) NOT NULL,
  `observaciones` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`nombreM`, `idMat`) VALUES
('Derecho Penal', 1),
('Cibercrimen y Delitos Informaticos', 2),
('Bioseguridad y Primeros Auxilios', 3),
('Perspectiva de Genero y Diversidad', 4),
('Derecho Procesal Penal', 5),
('Práctica del Lenguaje y Comunicaíon', 6),
('Derecho Constitucional y Derechos Humanos', 7),
('Seguridad Pública y Policía de Proximidad', 8),
('Manejo y Mantenimiento de Móviles Policiales', 9),
('Teorias de Intervencíon y Procedimientos Policial', 10),
('Educación Física Aplicada a la Función Policial', 11),
('Técnicas de Investigación Criminal', 12),
('Defensa Personal Policial', 13),
('Armamento y Tiro Policial', 14),
('Régimen Legal de la Profesión Policial', 15),
('Prácticas Profesionalizantes', 16);

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
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'rodrigosebastianok@gmail.com', '12345678'),
(2, 'tomasalcuri@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cc_titulosencundario`
--
ALTER TABLE `cc_titulosencundario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idMat`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cc_titulosencundario`
--
ALTER TABLE `cc_titulosencundario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `idMat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

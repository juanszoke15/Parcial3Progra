-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2018 a las 15:13:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hollywood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

CREATE TABLE `actores` (
  `id` int(11) NOT NULL,
  `nombre_real` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_celebridad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `sexo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `oscars_ganados` int(11) NOT NULL,
  `nominaciones_oscar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`id`, `nombre_real`, `nombre_celebridad`, `fecha`, `sexo`, `oscars_ganados`, `nominaciones_oscar`) VALUES
(3, 'Juan Gomez', 'Szoke', '2018-02-03 00:00:00', 'Masculino', 9, 12),
(4, 'Manuel Szoke', 'Manu', '2018-08-02 00:00:00', 'Masculino', 7, 19),
(6, 'Sofia Hernandez', 'Sofi', '0000-00-00 00:00:00', 'Femenino', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1520253766),
('m180305_123611_create_actores_table', 1520253768),
('m180305_124002_create_peliculas_table', 1520253769);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre_real` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `year` int(11) NOT NULL,
  `duracion_minutos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `papel_realizado` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre_real`, `titulo`, `year`, `duracion_minutos`, `papel_realizado`) VALUES
(1, 'Juan Gomez', 'Fifa Cup', 1998, '25', 'Arbitro'),
(2, 'Juan Gomez', 'Titanic', 1997, '432', 'conductor'),
(3, 'Manuel Szoke', 'Dragon Ball La batalla de los dioses', 2014, '180', 'bills'),
(4, 'Manuel Szoke', 'Death Note', 2017, '265', 'Ryuk'),
(6, 'Sofia Hernandez', 'La negra Matea', 1997, '65', 'La negra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

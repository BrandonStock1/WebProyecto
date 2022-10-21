-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-08-2022 a las 18:14:55
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figuritas`
--

CREATE TABLE `figuritas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `figuritas`
--

INSERT INTO `figuritas` (`id`, `tipo`, `id_jugador`, `pagina`) VALUES
(1, 'jugador', 1, 1),
(2, 'jugador', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre`, `apellido`, `edad`, `peso`, `altura`, `equipo`, `posicion`) VALUES
(1, 'Lionel', 'Messi', 34, 75, 170, 'Barcelona', 'Delantero'),
(2, 'Neymar', 'Junior', 19, 44, 189, 'PSG', 'Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_de_usuario` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_de_usuario`, `mail`, `contrasenia`) VALUES
(1, 'Brandon', 'brandonstock@gmail.com', '123'),
(2, 'root', 'juani@gmail.com', 'rootroot'),
(3, 'juani', 'juani@gmail.com', '123'),
(5, 'lara', 'laragenovese@gmail.com', '1234'),
(6, 'mirko', 'mirkowalenten@gmail.com', 'mirko123'),
(7, 'sasha', 'sashaa@cattaneo.com', 'gilbrrt'),
(8, 'nico', 'nico@gmail.com', '1234'),
(9, 'gasti', 'gasti@gmail.com', '123456'),
(10, 'LARA123', 'larulari@gmail.com', 'qwertyuiop');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `figuritas`
--
ALTER TABLE `figuritas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `figuritas`
--
ALTER TABLE `figuritas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

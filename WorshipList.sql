-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2021 a las 05:12:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `WorshipList`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cancion`
--

CREATE TABLE `Cancion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `autor` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `letra` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `Cancion`
--

INSERT INTO `Cancion` (`id`, `nombre`, `autor`, `letra`, `tipo`) VALUES
(4, 'Viento Fresco', 'Hillsong', 'Espíritu Muévete Con poder y fuego ven\r\nSopla hoy Con tu aliento aquí\r\n\r\nArrepentido Vengo a ti\r\nTu avivamiento enciende en mí\r\n\r\nSopla Dios Y haz tu llama arder\r\n\r\nUn viento fresco, fragancia del cielo\r\nVen Espíritu, Ven Espíritu\r\n\r\nRefina Dios Mi corazón Y purifica mi interior\r\nTu fuego en mí Arde con pasión\r\n\r\nTu Iglesia Dios La antorcha es\r\nTú la harás resplandecer\r\n\r\nTu reino aquí Es nuestra oración\r\n\r\nUn viento fresco, fragancia del cielo\r\nVen Espíritu, Ven Espíritu\r\n\r\nTu santa presencia Del cielo desciende\r\nVen espíritu, Ven espíritu\r\n\r\nVen espíritu\r\n\r\nLos que redimió, Profetizarán\r\nCon tu aliento Dios\r\n\r\nSopla\r\n\r\nEn la adoración Tú te moverás\r\nCon tu aliento Dios\r\n\r\nSopla', 'Adoración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cancion_Lista`
--

CREATE TABLE `Cancion_Lista` (
  `idCancion` int(11) NOT NULL,
  `idLista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Lista`
--

CREATE TABLE `Lista` (
  `id` int(11) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cancion`
--
ALTER TABLE `Cancion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Cancion_Lista`
--
ALTER TABLE `Cancion_Lista`
  ADD KEY `idCancion` (`idCancion`),
  ADD KEY `idLista` (`idLista`);

--
-- Indices de la tabla `Lista`
--
ALTER TABLE `Lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cancion`
--
ALTER TABLE `Cancion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Lista`
--
ALTER TABLE `Lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cancion_Lista`
--
ALTER TABLE `Cancion_Lista`
  ADD CONSTRAINT `idCancion_FK` FOREIGN KEY (`idCancion`) REFERENCES `Cancion` (`id`),
  ADD CONSTRAINT `idLista_FK` FOREIGN KEY (`idLista`) REFERENCES `Lista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

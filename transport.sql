-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2014 a las 19:25:54
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `transport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda`
--

CREATE TABLE IF NOT EXISTS `comanda` (
  `idComanda` int(10) NOT NULL,
  `idZona` int(1) NOT NULL,
  `desti` varchar(30) NOT NULL,
  `volum` float NOT NULL,
  `data` date NOT NULL,
  `quilometres` float NOT NULL,
  `conductor` int(4) NOT NULL,
  PRIMARY KEY (`idComanda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comanda`
--

INSERT INTO `comanda` (`idComanda`, `idZona`, `desti`, `volum`, `data`, `quilometres`, `conductor`) VALUES
(1, 1, 'Granollers', 7, '2013-10-07', 23.21, 1),
(2, 1, 'Mataró', 14, '2013-11-11', 32.4, 4),
(3, 1, 'Vic', 5, '2013-11-11', 72.2, 5),
(4, 2, 'Tortosa', 13, '2013-11-10', 180, 1),
(5, 2, 'Lleida', 12, '2013-11-09', 170, 6),
(6, 3, 'Madrid', 24, '2013-11-22', 625, 7),
(7, 3, 'Granada', 17, '2013-11-01', 886, 10),
(8, 3, 'Lugo', 17, '2013-11-01', 995, 3),
(9, 3, 'Santiago de Compostela', 19, '2013-11-22', 1104, 9),
(10, 1, 'Granollers', 7, '2013-10-07', 23.21, 1),
(11, 1, 'Terrassa', 11, '2013-11-22', 35.4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportista`
--

CREATE TABLE IF NOT EXISTS `transportista` (
  `idTransportista` int(4) NOT NULL,
  `nomTransportista` varchar(25) NOT NULL,
  `dniTransportista` varchar(9) NOT NULL,
  PRIMARY KEY (`idTransportista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transportista`
--

INSERT INTO `transportista` (`idTransportista`, `nomTransportista`, `dniTransportista`) VALUES
(1, 'Joan', '98978016T'),
(2, 'Andreu', '73531146P'),
(3, 'Òscar', '85477529F'),
(4, 'Berta', '00280854R'),
(5, 'Albert', '79805697K'),
(6, 'Arnau', '34881203R'),
(7, 'Carles', '70563476M'),
(8, 'Adrià', '06195125Y'),
(9, 'Ricard', '94887409N'),
(10, 'Javi', '49279809D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `matricula` varchar(7) NOT NULL,
  `tipusVehicle` int(11) NOT NULL,
  `Conductor` int(11) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehicle`
--

INSERT INTO `vehicle` (`matricula`, `tipusVehicle`, `Conductor`) VALUES
('0023JWH', 1, 8),
('0325VFC', 1, 6),
('1526HNJ', 1, 9),
('1986KLM', 2, 1),
('2316DFC', 2, 4),
('2597LKM', 3, 10),
('4526SDC', 1, 3),
('4923HTF', 3, 10),
('5556PQL', 2, 8),
('6253BVC', 3, 1),
('6327BSD', 3, 6),
('6851VDC', 3, 5),
('7410VFR', 1, 6),
('8345SFG', 2, 2),
('9856HJN', 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE IF NOT EXISTS `zona` (
  `idZona` int(1) NOT NULL,
  `nomZona` varchar(3) NOT NULL,
  PRIMARY KEY (`idZona`),
  UNIQUE KEY `idZoma_2` (`idZona`),
  KEY `idZoma` (`idZona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`idZona`, `nomZona`) VALUES
(1, 'BCN'),
(2, 'CAT'),
(3, 'ESP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

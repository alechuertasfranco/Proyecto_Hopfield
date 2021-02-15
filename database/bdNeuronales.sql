-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2021 a las 17:54:27
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdneuronales`
DROP DATABASE IF EXISTS bdNeuronales;
CREATE DATABASE bdNeuronales;
USE bdNeuronales;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracter`
--

CREATE TABLE `caracter` (
  `idCaracter` int(11) NOT NULL,
  `caracter` char(1) DEFAULT NULL,
  `idTipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `caracter`
--

INSERT INTO `caracter` (`idCaracter`, `caracter`, `idTipo`) VALUES
(1, 'A', 1),
(2, 'E', 1),
(3, 'I', 1),
(4, 'O', 1),
(5, 'U', 1),
(6, '1', 2),
(7, '2', 2),
(8, '3', 2),
(9, '4', 2),
(10, '5', 2),
(11, '6', 2),
(12, '7', 2),
(13, '8', 2),
(14, '9', 2),
(15, '0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordenada`
--

CREATE TABLE `coordenada` (
  `idCoordenada` int(11) NOT NULL,
  `ejex` int(11) DEFAULT NULL,
  `ejey` int(11) DEFAULT NULL,
  `idCaracter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coordenada`
--

INSERT INTO `coordenada` (`idCoordenada`, `ejex`, `ejey`, `idCaracter`) VALUES
(1, 0, 0, 1),
(2, 1, 0, 1),
(3, 2, 0, 1),
(4, 3, 0, 1),
(5, 4, 0, 1),
(6, 0, 1, 1),
(7, 4, 1, 1),
(8, 0, 2, 1),
(9, 1, 2, 1),
(10, 2, 2, 1),
(11, 3, 2, 1),
(12, 4, 2, 1),
(13, 0, 3, 1),
(14, 4, 3, 1),
(15, 0, 4, 1),
(16, 4, 4, 1),
(17, 0, 0, 2),
(18, 1, 0, 2),
(19, 2, 0, 2),
(20, 3, 0, 2),
(21, 4, 0, 2),
(22, 0, 1, 2),
(23, 0, 2, 2),
(24, 1, 2, 2),
(25, 2, 2, 2),
(26, 3, 2, 2),
(27, 0, 3, 2),
(28, 0, 4, 2),
(29, 1, 4, 2),
(30, 2, 4, 2),
(31, 3, 4, 2),
(32, 4, 4, 2),
(33, 1, 0, 3),
(34, 2, 0, 3),
(35, 3, 0, 3),
(36, 2, 1, 3),
(37, 2, 2, 3),
(38, 2, 3, 3),
(39, 1, 4, 3),
(40, 2, 4, 3),
(41, 3, 4, 3),
(42, 0, 0, 4),
(43, 1, 0, 4),
(44, 2, 0, 4),
(45, 3, 0, 4),
(46, 4, 0, 4),
(47, 0, 1, 4),
(48, 4, 1, 4),
(49, 0, 2, 4),
(50, 4, 2, 4),
(51, 0, 3, 4),
(52, 4, 3, 4),
(53, 0, 4, 4),
(54, 1, 4, 4),
(55, 2, 4, 4),
(56, 3, 4, 4),
(57, 4, 4, 4),
(58, 0, 0, 5),
(59, 4, 0, 5),
(60, 0, 1, 5),
(61, 4, 1, 5),
(62, 0, 2, 5),
(63, 4, 2, 5),
(64, 0, 3, 5),
(65, 4, 3, 5),
(66, 0, 4, 5),
(67, 1, 4, 5),
(68, 2, 4, 5),
(69, 3, 4, 5),
(70, 4, 4, 5),
(71, 1, 0, 6),
(72, 2, 0, 6),
(73, 2, 1, 6),
(74, 2, 2, 6),
(75, 2, 3, 6),
(76, 2, 4, 6),
(77, 0, 0, 7),
(78, 1, 0, 7),
(79, 2, 0, 7),
(80, 3, 0, 7),
(81, 4, 0, 7),
(82, 4, 1, 7),
(83, 0, 2, 7),
(84, 1, 2, 7),
(85, 2, 2, 7),
(86, 3, 2, 7),
(87, 4, 2, 7),
(88, 0, 3, 7),
(89, 0, 4, 7),
(90, 1, 4, 7),
(91, 2, 4, 7),
(92, 3, 4, 7),
(93, 4, 4, 7),
(94, 0, 0, 8),
(95, 1, 0, 8),
(96, 2, 0, 8),
(97, 3, 0, 8),
(98, 4, 0, 8),
(99, 4, 1, 8),
(100, 0, 2, 8),
(101, 1, 2, 8),
(102, 2, 2, 8),
(103, 3, 2, 8),
(104, 4, 2, 8),
(105, 4, 3, 8),
(106, 0, 4, 8),
(107, 1, 4, 8),
(108, 2, 4, 8),
(109, 3, 4, 8),
(110, 4, 4, 8),
(111, 0, 0, 9),
(112, 3, 0, 9),
(113, 0, 1, 9),
(114, 3, 1, 9),
(115, 0, 2, 9),
(116, 1, 2, 9),
(117, 2, 2, 9),
(118, 3, 2, 9),
(119, 4, 2, 9),
(120, 3, 3, 9),
(121, 3, 4, 9),
(122, 0, 0, 10),
(123, 1, 0, 10),
(124, 2, 0, 10),
(125, 3, 0, 10),
(126, 4, 0, 10),
(127, 0, 1, 10),
(128, 0, 2, 10),
(129, 1, 2, 10),
(130, 2, 2, 10),
(131, 3, 2, 10),
(132, 4, 2, 10),
(133, 4, 3, 10),
(134, 0, 4, 10),
(135, 1, 4, 10),
(136, 2, 4, 10),
(137, 3, 4, 10),
(138, 4, 4, 10),
(139, 0, 0, 11),
(140, 1, 0, 11),
(141, 2, 0, 11),
(142, 3, 0, 11),
(143, 4, 0, 11),
(144, 0, 1, 11),
(145, 0, 2, 11),
(146, 1, 2, 11),
(147, 2, 2, 11),
(148, 3, 2, 11),
(149, 4, 2, 11),
(150, 0, 3, 11),
(151, 4, 3, 11),
(152, 0, 4, 11),
(153, 1, 4, 11),
(154, 2, 4, 11),
(155, 3, 4, 11),
(156, 4, 4, 11),
(157, 0, 0, 12),
(158, 1, 0, 12),
(159, 2, 0, 12),
(160, 3, 0, 12),
(161, 3, 1, 12),
(162, 3, 2, 12),
(163, 3, 3, 12),
(164, 3, 4, 12),
(165, 0, 0, 13),
(166, 1, 0, 13),
(167, 2, 0, 13),
(168, 3, 0, 13),
(169, 4, 0, 13),
(170, 0, 1, 13),
(171, 4, 1, 13),
(172, 0, 2, 13),
(173, 1, 2, 13),
(174, 2, 2, 13),
(175, 3, 2, 13),
(176, 4, 2, 13),
(177, 0, 3, 13),
(178, 4, 3, 13),
(179, 0, 4, 13),
(180, 1, 4, 13),
(181, 2, 4, 13),
(182, 3, 4, 13),
(183, 4, 4, 13),
(184, 0, 0, 14),
(185, 1, 0, 14),
(186, 2, 0, 14),
(187, 3, 0, 14),
(188, 4, 0, 14),
(189, 0, 1, 14),
(190, 4, 1, 14),
(191, 0, 2, 14),
(192, 1, 2, 14),
(193, 2, 2, 14),
(194, 3, 2, 14),
(195, 4, 2, 14),
(196, 4, 3, 14),
(197, 4, 4, 14),
(198, 0, 0, 15),
(199, 1, 0, 15),
(200, 2, 0, 15),
(201, 3, 0, 15),
(202, 4, 0, 15),
(203, 0, 1, 15),
(204, 4, 1, 15),
(205, 0, 2, 15),
(206, 4, 2, 15),
(207, 0, 3, 15),
(208, 4, 3, 15),
(209, 0, 4, 15),
(210, 1, 4, 15),
(211, 2, 4, 15),
(212, 3, 4, 15),
(213, 4, 4, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `tipo`) VALUES
(1, 'Vocal'),
(2, 'Número'),
(3, 'Letra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracter`
--
ALTER TABLE `caracter`
  ADD PRIMARY KEY (`idCaracter`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indices de la tabla `coordenada`
--
ALTER TABLE `coordenada`
  ADD PRIMARY KEY (`idCoordenada`),
  ADD KEY `idCaracter` (`idCaracter`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracter`
--
ALTER TABLE `caracter`
  MODIFY `idCaracter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `coordenada`
--
ALTER TABLE `coordenada`
  MODIFY `idCoordenada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracter`
--
ALTER TABLE `caracter`
  ADD CONSTRAINT `caracter_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`);

--
-- Filtros para la tabla `coordenada`
--
ALTER TABLE `coordenada`
  ADD CONSTRAINT `coordenada_ibfk_1` FOREIGN KEY (`idCaracter`) REFERENCES `caracter` (`idCaracter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2019 a las 15:34:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fertiberia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_ngreen`
--

CREATE TABLE `ur_ngreen` (
  `fecha` date NOT NULL,
  `so3` int(11) NOT NULL,
  `mgo` int(11) NOT NULL,
  `n2_total` int(11) NOT NULL,
  `n2_amidico` int(11) NOT NULL,
  `n2_nitrico` int(11) NOT NULL,
  `n2_amonico` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_ngreen`
--

INSERT INTO `ur_ngreen` (`fecha`, `so3`, `mgo`, `n2_total`, `n2_amidico`, `n2_nitrico`, `n2_amonico`, `densidad`, `ph`) VALUES
('0000-00-00', 2, 2, 2, 2, 2, 2, 2, 2),
('0000-00-00', 3, 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion25_t1`
--

CREATE TABLE `ur_solucion25_t1` (
  `fecha` date NOT NULL,
  `amoniaco` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_solucion25_t1`
--

INSERT INTO `ur_solucion25_t1` (`fecha`, `amoniaco`, `densidad`, `temperatura`) VALUES
('0000-00-00', 1, 1, 1),
('0000-00-00', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion25_t2`
--

CREATE TABLE `ur_solucion25_t2` (
  `fecha` date NOT NULL,
  `amoniaco` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_solucion25_t2`
--

INSERT INTO `ur_solucion25_t2` (`fecha`, `amoniaco`, `densidad`, `temperatura`) VALUES
('0000-00-00', 1, 1, 1),
('0000-00-00', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion32_v181`
--

CREATE TABLE `ur_solucion32_v181` (
  `fecha` varchar(30) NOT NULL,
  `n2_total` int(11) NOT NULL,
  `n2_amidico` int(11) NOT NULL,
  `n2_nitrico` int(11) NOT NULL,
  `n2_amonico` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_solucion32_v181`
--

INSERT INTO `ur_solucion32_v181` (`fecha`, `n2_total`, `n2_amidico`, `n2_nitrico`, `n2_amonico`, `densidad`, `ph`) VALUES
('', 2, 2, 2, 2, 2, 2),
('', 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion32_v182`
--

CREATE TABLE `ur_solucion32_v182` (
  `densidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `n2_amidico` int(11) NOT NULL,
  `n2_nitrico` int(11) NOT NULL,
  `n2_amonico` int(11) NOT NULL,
  `n2_total` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_solucion32_v182`
--

INSERT INTO `ur_solucion32_v182` (`densidad`, `fecha`, `n2_amidico`, `n2_nitrico`, `n2_amonico`, `n2_total`, `ph`) VALUES
(2, '0000-00-00', 3, 3, 2, 2, 2),
(1, '0000-00-00', 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion32_v183`
--

CREATE TABLE `ur_solucion32_v183` (
  `densidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `n2_amidico` int(11) NOT NULL,
  `n2_amonico` int(11) NOT NULL,
  `n2_nitrico` int(11) NOT NULL,
  `n2_total` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_solucion32_v183`
--

INSERT INTO `ur_solucion32_v183` (`densidad`, `fecha`, `n2_amidico`, `n2_amonico`, `n2_nitrico`, `n2_total`, `ph`) VALUES
(2, '0000-00-00', 3, 3, 3, 3, 3),
(4, '0000-00-00', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_torre_ref`
--

CREATE TABLE `ur_torre_ref` (
  `fecha` int(11) NOT NULL,
  `ph` int(11) NOT NULL,
  `amoniaco` int(11) NOT NULL,
  `nitrito` int(11) NOT NULL,
  `nitrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_torre_ref`
--

INSERT INTO `ur_torre_ref` (`fecha`, `ph`, `amoniaco`, `nitrito`, `nitrato`) VALUES
(0, 2, 2, 2, 2),
(0, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_urea`
--

CREATE TABLE `ur_urea` (
  `fecha` date NOT NULL,
  `n2Total` int(11) NOT NULL,
  `humedad` int(11) NOT NULL,
  `biuret` int(11) NOT NULL,
  `granulometria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ur_urea`
--

INSERT INTO `ur_urea` (`fecha`, `n2Total`, `humedad`, `biuret`, `granulometria`) VALUES
('0000-00-00', 32, 1, 1, 1),
('0000-00-00', 32, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `email`, `password`) VALUES
('basico', 'ufertiberia', 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

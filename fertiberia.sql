-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2019 a las 13:29:07
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.0.26

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ur_solucion32_v181`
--

CREATE TABLE `ur_solucion32_v181` (
  `fecha` date NOT NULL,
  `n2_total` int(11) NOT NULL,
  `n2_amidico` int(11) NOT NULL,
  `n2_nitrico` int(11) NOT NULL,
  `n2_amonico` int(11) NOT NULL,
  `densidad` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

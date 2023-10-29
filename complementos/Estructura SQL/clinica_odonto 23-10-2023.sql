-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2023 a las 15:37:49
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
-- Base de datos: `clinica_odonto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompanante`
--

CREATE TABLE `acompanante` (
  `ci_acompanante` int(10) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `celular` int(8) NOT NULL,
  `parentesco` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_medicos`
--

CREATE TABLE `antecedentes_medicos` (
  `cod_antecedente` int(5) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `medicacion` text NOT NULL,
  `patologia` varchar(100) NOT NULL,
  `observacion` text NOT NULL,
  `tratamiento_medico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `cod_atencion` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `dientes` int(2) NOT NULL,
  `tratamiento` text NOT NULL,
  `observacion` text NOT NULL,
  `ci_doctor` int(10) NOT NULL,
  `ci_paciente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontologo`
--

CREATE TABLE `odontologo` (
  `ci_doctor` int(10) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `celular` int(8) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `ci_paciente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ap_paterno` varchar(25) NOT NULL,
  `ap_materno` varchar(25) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `celular` int(8) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `nacionalidad` varchar(25) NOT NULL,
  `ocupacion` varchar(60) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `ci_acompanante` int(10) DEFAULT NULL,
  `cod_antecedente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompanante`
--
ALTER TABLE `acompanante`
  ADD PRIMARY KEY (`ci_acompanante`);

--
-- Indices de la tabla `antecedentes_medicos`
--
ALTER TABLE `antecedentes_medicos`
  ADD PRIMARY KEY (`cod_antecedente`);

--
-- Indices de la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD KEY `odontologo` (`ci_doctor`),
  ADD KEY `ci_paciente` (`ci_paciente`);

--
-- Indices de la tabla `odontologo`
--
ALTER TABLE `odontologo`
  ADD PRIMARY KEY (`ci_doctor`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ci_paciente`),
  ADD KEY `ci_acompañante` (`ci_acompanante`),
  ADD KEY `cod_antecedente` (`cod_antecedente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial_clinico`
--
ALTER TABLE `historial_clinico`
  ADD CONSTRAINT `historial_clinico_ibfk_1` FOREIGN KEY (`ci_paciente`) REFERENCES `paciente` (`ci_paciente`),
  ADD CONSTRAINT `historial_clinico_ibfk_2` FOREIGN KEY (`ci_doctor`) REFERENCES `odontologo` (`ci_doctor`),
  ADD CONSTRAINT `historial_clinico_ibfk_3` FOREIGN KEY (`ci_doctor`) REFERENCES `odontologo` (`ci_doctor`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`cod_antecedente`) REFERENCES `antecedentes_medicos` (`cod_antecedente`),
  ADD CONSTRAINT `paciente_ibfk_2` FOREIGN KEY (`ci_acompanante`) REFERENCES `acompanante` (`ci_acompanante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

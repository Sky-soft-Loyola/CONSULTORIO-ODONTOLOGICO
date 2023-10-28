-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2023 a las 22:30:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acompanante`
--

INSERT INTO `acompanante` (`ci_acompanante`, `nombre_completo`, `celular`, `parentesco`, `direccion`) VALUES
(0, '', 0, '', ''),
(11111, 'wwwwww', 33322244, 'fsdfsd', 'dfdffd'),
(12300, 'ttttttt', 98765043, 'wwwww', 'mmmmm'),
(23345, '324534', 0, 'dfvdvf', 'el alto'),
(23453, '32435', 0, 'cdff', 'fddfvfd'),
(123456, 'vivi', 9876543, 'madre', 'av busch zona central'),
(789878, '76656', 0, '', 'uuuu'),
(7768787, '88889', 0, '', 'uuuuu'),
(67859432, '56763542', 0, 'sara flores lau', 'av busch zona central');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_medicos`
--

CREATE TABLE `antecedentes_medicos` (
  `cod_antecedente` int(5) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `medicacion` text NOT NULL,
  `patologia` varchar(100) NOT NULL,
  `tratamiento_medico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_medicos`
--

INSERT INTO `antecedentes_medicos` (`cod_antecedente`, `alergias`, `medicacion`, `patologia`, `tratamiento_medico`) VALUES
(0, '', '', '', ''),
(568, 'dfhgfh', 'gjhg', 'gjhgj', 'setrdt'),
(22334, ' dmd', 'md c', 'dfvf', 'sdsdc'),
(123456, 'polvo', 'paracetamol', 'ninguna', 'paracetamol cada 8 horas por 7 dias'),
(234556, 'nnnnnn', 'dddddd', 'eeeee', 'oooo'),
(576707, 'ghg', 'gfvuj', 'hgui', 'fyguj'),
(6734848, 'polvo', 'paracetamol', 'ninguna', 'sdsdc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_clinico`
--

CREATE TABLE `historial_clinico` (
  `cod_atencion` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `estado_dientes` varchar(20) NOT NULL,
  `dientes` int(2) NOT NULL,
  `tratamiento` text NOT NULL,
  `ci_doctor` int(10) NOT NULL,
  `ci_paciente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial_clinico`
--

INSERT INTO `historial_clinico` (`cod_atencion`, `fecha`, `estado_dientes`, `dientes`, `tratamiento`, `ci_doctor`, `ci_paciente`) VALUES
(6790, '2023-08-17', 'hgjgjkh', 5, 'gugui', 5678, 9779),
(737484, '2023-09-28', '01', 0, 'd cdf', 76473894, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `odontologo`
--

INSERT INTO `odontologo` (`ci_doctor`, `contraseña`, `nombre_completo`, `celular`, `direccion`, `especialidad`) VALUES
(0, '', '', 0, '', ''),
(3456, '32443', '12243', 0, 'fdcd', 'dfvdvf'),
(5678, 'hguugu', 'cghftf', 5766966, 'jgfvyjhg', 'gjjhg'),
(33333, '11111', '2222', 0, 'hhh', 'ana'),
(45600, 'booo', 'ttttttt', 98463782, 'huhdu', 'djndsj'),
(234532, 'doc1234', 'vivi', 92839928, 'villa fatima', 'pediatria'),
(457665, '33435', '32434', 0, 'fvhgvj', 'cdff'),
(76473894, '3944995', 'doc1234', 0, 'pediatria', 'tatiana vaca'),
(76543218, '12345678', '1234', 0, 'odontopediatra', 'sara flores laura');

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
  `ci_acompanante` int(10) NOT NULL,
  `cod_antecedente` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`ci_paciente`, `nombre`, `ap_paterno`, `ap_materno`, `fecha_nacimiento`, `correo`, `celular`, `direccion`, `genero`, `nacionalidad`, `ocupacion`, `estado_civil`, `ci_acompanante`, `cod_antecedente`) VALUES
(23400, 'ppppp', 'xxxxxx', 'zzzzzzzzzz', '1998-01-01', '23400@gmail.com', 98056421, 'gggggggg', 'F', 'BOLIVIANA', 'VVVVVVV', 'uuuuuuuu', 12300, 234556),
(120345, 'katy', 'perez', 'floores', '2003-04-23', 'katy@gmail.com', 23456456, 'av busch zona central', 'F', 'boliviana', 'estudiante', 'soltera', 123456, 12034);

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
  ADD PRIMARY KEY (`cod_atencion`),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

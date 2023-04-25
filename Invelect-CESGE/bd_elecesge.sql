-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2023 a las 21:08:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_elecesge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_ADMINISTRADOR` int(11) NOT NULL,
  `NOM_ADMINISTRADOR` varchar(200) NOT NULL,
  `PASSWORD_ADMIN` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_ADMINISTRADOR`, `NOM_ADMINISTRADOR`, `PASSWORD_ADMIN`) VALUES
(1, 'Administrador', 'Senaadmin2021'),
(71214638, 'Oscar Alonso Gonzalez Muñoz', '71214638');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `ITEM` int(11) NOT NULL,
  `NOM_AMBIENTE` varchar(200) NOT NULL,
  `RL_COD_SEDE` int(11) NOT NULL,
  `NUM_PISO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`ITEM`, `NOM_AMBIENTE`, `RL_COD_SEDE`, `NUM_PISO`) VALUES
(1, '1001', 1, '10'),
(2, '1002', 1, '10'),
(3, '1003', 1, '10'),
(4, '1004', 1, '10'),
(5, '1005', 1, '10'),
(6, '1006', 1, '10'),
(7, '1007', 1, '10'),
(8, 'Bodega Prod audiovisual', 1, '10'),
(9, 'CF-P10-LN', 1, '10'),
(10, 'WHA-P10-LN', 1, '10'),
(11, 'WDA-P10-LS', 1, '10'),
(12, 'HALL-P10', 1, '10'),
(13, 'PAS-P10-LN', 1, '10'),
(14, 'PAS-P10-LS', 1, '10'),
(15, 'SEE-P10', 1, '10'),
(16, 'ESC-10-11', 1, '10'),
(17, 'UMA-P10-CEN', 1, '10'),
(18, 'UMA-P10-LS', 1, '10'),
(19, 'CT-P10-LN', 1, '10'),
(20, 'EXIT-ASC-P10', 1, '10'),
(21, 'PLAZ-01-LN', 1, '1'),
(22, 'PLAZ-01-ME', 1, '1'),
(23, 'PLAZ-01-LS', 1, '1'),
(24, 'CT-P00-LN', 1, 'Sótano'),
(25, 'CF-P04-LN', 1, '4'),
(26, 'Terraza', 1, '11'),
(27, 'Fábrica de software', 1, '3'),
(28, 'Pruebas de software', 1, '3'),
(29, 'Contenidos digitales', 1, '3'),
(30, 'WDF-P09-LS', 1, '9'),
(31, '605', 1, '6'),
(32, '604', 1, '6'),
(33, '801', 1, '8'),
(34, '802', 1, '8'),
(35, 'Aula de Bilinguismo', 7, '1'),
(36, '602', 1, '6'),
(37, '603', 1, '6'),
(38, 'P08-INSTRUCTORES', 1, '8'),
(39, '407', 1, '4'),
(40, 'Pasillos internos P04', 1, '4'),
(41, 'Pasillos internos P05', 1, '4'),
(42, '406', 1, '4'),
(43, '411', 1, '4'),
(44, '601', 1, '6'),
(45, '609', 1, '6'),
(46, '610', 1, '6'),
(47, '707', 1, '7'),
(48, 'Pasillos internos P07', 1, '7'),
(49, '504', 1, '5'),
(50, '705', 1, '7'),
(51, 'CF-P04-LN', 1, '4'),
(52, 'Archivo-P04', 1, '4'),
(53, '704', 1, '7'),
(54, 'Pasillos internos P07', 1, '7'),
(55, 'Auditorio ', 1, '2'),
(56, 'WHF-P04-LN', 1, '4'),
(57, 'Laboratorio forense', 1, '5'),
(58, 'WD-P01-01', 1, '1'),
(59, 'CT-P05-LS', 1, '5'),
(60, 'CT-P04-LS', 1, '4'),
(61, 'Sotano, torre norte', 1, 'Sotano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chilers`
--

CREATE TABLE `chilers` (
  `NUM_CHILLERS` int(11) NOT NULL,
  `NOMBRE_CHIL` varchar(100) NOT NULL,
  `MARCA` varchar(100) NOT NULL,
  `MODELO` varchar(100) NOT NULL,
  `REFERENCIA` varchar(100) NOT NULL,
  `SER` varchar(100) NOT NULL,
  `CANT_MOTORES` int(3) NOT NULL,
  `MOTORES1` varchar(200) NOT NULL,
  `MOTORES2` varchar(200) NOT NULL,
  `CIRCUITO` varchar(100) NOT NULL,
  `UBICACION` varchar(100) NOT NULL,
  `OBSERVACIONES` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `chilers`
--

INSERT INTO `chilers` (`NUM_CHILLERS`, `NOMBRE_CHIL`, `MARCA`, `MODELO`, `REFERENCIA`, `SER`, `CANT_MOTORES`, `MOTORES1`, `MOTORES2`, `CIRCUITO`, `UBICACION`, `OBSERVACIONES`) VALUES
(0, 'b', 'b', 'b', 'b', 'b', 0, '', '', '1', '11', 'bbb'),
(1, '1', '1', '1', '1', '1', 1, '', '', '19', '1', '111'),
(12, 'aa', 'a', 'a', 'a', 'a', 1, '', '', '18', '1', 'asdes'),
(45, 'MURO', 'DC', '1236', 'DEFR123', '1245123', 2, '1', '2', '14', '1', 'SDCEE'),
(123, 'q', 'q', 'q', 'q', 'q', 1, '', '', '19', '1', 'qqqqq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dist_tab`
--

CREATE TABLE `dist_tab` (
  `Item_detab` int(11) NOT NULL,
  `RL_CODE_TAB` varchar(30) NOT NULL,
  `Num_cto` int(3) NOT NULL,
  `Distri` varchar(50) NOT NULL,
  `Cant_lumin` int(3) NOT NULL,
  `Cant_tomas` int(3) NOT NULL,
  `CAL_SAL` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dist_tab`
--

INSERT INTO `dist_tab` (`Item_detab`, `RL_CODE_TAB`, `Num_cto`, `Distri`, `Cant_lumin`, `Cant_tomas`, `CAL_SAL`) VALUES
(1, '1', 1, 'Tomas ambiente 1001', 0, 2, 12),
(2, '1', 2, 'SIATA (estacion meteorologica Terraza)', 0, 2, 12),
(3, '1', 3, 'Lamparas 4 lado derecho ct A.A.', 4, 0, 12),
(4, '1', 4, 'N/D', 0, 0, 0),
(5, '1', 5, 'N/D', 0, 0, 0),
(6, '1', 6, 'Iluminacion WHLN /cuarto util 1002', 4, 0, 12),
(7, '1', 7, 'N/D', 0, 0, 0),
(8, '1', 8, 'iluminacion WDLS / UMA /Bodega', 4, 4, 12),
(9, '1', 9, 'N/D', 0, 0, 0),
(10, '1', 10, 'Disponible', 0, 0, 0),
(11, '1', 11, 'Disponible', 0, 0, 0),
(12, '1', 12, 'Disponible', 0, 0, 0),
(13, '1', 13, 'N/D', 0, 0, 0),
(14, '1', 14, 'Disponible', 0, 0, 0),
(15, '1', 15, 'Tomas ambiente 1005', 0, 2, 12),
(16, '1', 16, 'Disponible', 0, 0, 0),
(17, '1', 17, 'N/D', 0, 0, 0),
(18, '1', 18, 'Disponible', 0, 0, 0),
(19, '1', 19, 'Disponible', 0, 0, 0),
(20, '1', 20, 'Disponible', 0, 0, 0),
(21, '1', 21, 'Disponible', 0, 0, 0),
(22, '1', 22, 'Disponible', 0, 0, 0),
(23, '1', 23, 'Disponible', 0, 0, 0),
(24, '1', 24, 'Disponible', 0, 0, 0),
(25, '2', 1, 'Tomas ambiente', 0, 3, 12),
(26, '2', 2, 'Extractor LS', 0, 1, 12),
(27, '2', 3, 'Tomas ambiente', 0, 4, 12),
(28, '2', 4, 'Extractor LS', 0, 1, 12),
(29, '2', 5, 'Tomas ambiente', 0, 4, 12),
(30, '2', 6, 'Extractor LN', 0, 1, 12),
(31, '2', 7, 'Tomas ambiente', 0, 4, 12),
(32, '2', 8, 'Extractor LN', 0, 1, 12),
(33, '2', 9, 'Tomas ambiente', 4, 0, 12),
(34, '2', 10, 'Iluminación ambiente', 4, 0, 12),
(35, '2', 11, 'Tomas ambiente', 0, 4, 12),
(36, '2', 12, 'Iluminación ambiente', 4, 0, 12),
(37, '2', 13, 'Tomas ambiente', 0, 4, 12),
(38, '2', 14, 'Iluminación ambiente', 4, 0, 12),
(39, '2', 15, 'Iluminacion y tomas cocineta', 1, 3, 12),
(40, '2', 16, 'Toma 220v taller', 0, 2, 10),
(41, '2', 17, 'Tomas cocineta', 0, 2, 12),
(42, '2', 18, 'Toma 220v taller', 0, 2, 10),
(43, '2', 19, 'Fan coil  1002', 0, 0, 12),
(44, '2', 20, 'Disponible', 0, 0, 0),
(45, '2', 21, 'Fan coil  1005', 0, 1, 12),
(46, '2', 22, 'Disponible', 0, 0, 0),
(47, '2', 23, 'Disponible', 0, 0, 0),
(48, '2', 24, 'Disponible', 0, 0, 0),
(49, '3', 1, 'Lámparas frente subestacion ', 2, 0, 12),
(50, '3', 2, 'Lamparas y reflectores (220) plazoleta LS', 4, 0, 12),
(51, '3', 3, 'Lámparas Lamparas atrás de asensores', 4, 0, 12),
(52, '3', 4, 'Lamparas y reflectores (220) plazoleta LS', 4, 0, 12),
(53, '3', 5, 'Entrada sótano lado sur', 4, 0, 12),
(54, '3', 6, 'Iluminación plazoleta centro, Reflector (220)', 4, 0, 12),
(55, '3', 7, 'Lampara junto a patios sótano', 8, 0, 12),
(56, '3', 8, 'Iluminacion plazoleta centro, Reflector (220)', 4, 0, 12),
(57, '3', 9, 'Lamparas junto a CT A.A. y derecha asensor', 8, 0, 12),
(58, '3', 10, 'Reflector (220) Plazoleta y luminarias LN', 4, 0, 12),
(59, '3', 11, 'Lamparas 4 lado derecho ct A.A.', 4, 0, 12),
(60, '3', 12, '4 Reflectores (220) Plazoleta y 3 luminarias LN', 4, 0, 12),
(61, '4', 1, 'Tomas Lockers', 0, 2, 12),
(62, '4', 2, 'Tomas terraza LN ', 0, 2, 12),
(63, '4', 3, 'Cto Aprendizaje y pasillos internos', 5, 0, 12),
(64, '4', 7, 'Pasillos internos- luminarias', 5, 0, 12),
(65, '4', 10, 'Luminaria y tomas Amb 404', 8, 2, 12),
(66, '4', 11, 'Pasillos internos luminarias', 5, 0, 12),
(67, '4', 12, 'Iluminacion terraza LN', 4, 0, 12),
(68, '4', 13, 'Iluminacion ambiente 405', 6, 0, 12),
(69, '4', 14, 'WDLN', 3, 0, 12),
(70, '4', 16, 'Tomas Pasillo interior', 0, 2, 12),
(71, '4', 19, 'Cocineta toma y luminaria', 1, 1, 12),
(72, '4', 21, 'Iluminacion WDLN', 2, 0, 12),
(73, '4', 23, 'Tomacorriente nevera y lavaplatos', 0, 2, 12),
(74, '4', 25, 'UMA 01 LN', 0, 0, 12),
(75, '4', 27, 'UMA 01 LN', 0, 0, 12),
(76, '4', 29, 'UMA 01 LN', 0, 0, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfriamiento`
--

CREATE TABLE `enfriamiento` (
  `ITEM` int(11) NOT NULL,
  `TIPO_EQUIPO` varchar(200) NOT NULL,
  `MARCA` varchar(200) NOT NULL,
  `MODELO` varchar(200) NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `UBICACION` varchar(200) NOT NULL,
  `CANTIDAD` varchar(50) NOT NULL,
  `UN_MEDIDA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `enfriamiento`
--

INSERT INTO `enfriamiento` (`ITEM`, `TIPO_EQUIPO`, `MARCA`, `MODELO`, `SEDE`, `UBICACION`, `CANTIDAD`, `UN_MEDIDA`) VALUES
(1, 'qss', 'qss', 'qsss', '1ssss', 'ssd', 'qsssss', 'qsss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fancoils`
--

CREATE TABLE `fancoils` (
  `ITEM` int(11) NOT NULL,
  `NOM_FANCOILS` varchar(200) NOT NULL,
  `MODELO` varchar(200) NOT NULL,
  `REFERENCIA` varchar(200) NOT NULL,
  `SER` varchar(200) NOT NULL,
  `CANTIDAD_MOT` varchar(200) NOT NULL,
  `MOTOR1` varchar(200) NOT NULL,
  `MOTOR2` varchar(200) NOT NULL,
  `BRECKETS` varchar(200) NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `UBICACION` varchar(200) NOT NULL,
  `CUBRE` varchar(200) NOT NULL,
  `OBSERVACIONES` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fancoils`
--

INSERT INTO `fancoils` (`ITEM`, `NOM_FANCOILS`, `MODELO`, `REFERENCIA`, `SER`, `CANTIDAD_MOT`, `MOTOR1`, `MOTOR2`, `BRECKETS`, `SEDE`, `UBICACION`, `CUBRE`, `OBSERVACIONES`) VALUES
(1, 'baaa', '', 'baaa', 'baaa', '1aaa', '', '', '18aaa', '', '18aaa', 'baaaa', ''),
(2, 'a', '', 'a', 'a', '1', '', '', '16', '', '18aaaaa', 'aaaaaa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lamps`
--

CREATE TABLE `lamps` (
  `ITEM` int(5) NOT NULL,
  `NOM_LAMP` varchar(25) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Sede` varchar(60) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `UBICACION` varchar(60) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Tip_lamp` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Tip_tubo` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Tip_sock` varchar(25) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Tecno` varchar(25) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Cant_tubos` int(2) NOT NULL,
  `Marca` varchar(30) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Volt` int(10) NOT NULL,
  `Watts` int(10) NOT NULL,
  `Amp` varchar(10) NOT NULL,
  `Largo` varchar(30) NOT NULL,
  `Tablero` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Cto` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lamps`
--

INSERT INTO `lamps` (`ITEM`, `NOM_LAMP`, `Sede`, `UBICACION`, `Tip_lamp`, `Tip_tubo`, `Tip_sock`, `Tecno`, `Cant_tubos`, `Marca`, `Volt`, `Watts`, `Amp`, `Largo`, `Tablero`, `Cto`) VALUES
(1, 'LR-P10-1001-01', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'GE', 110, 68, '0,61', '110', '1', 17),
(2, 'LR-P10-1001-02', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 60, '0,61', '110', '', 0),
(3, 'LR-P10-1001-03', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(4, 'LR-P10-1001-04', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(5, 'LR-P10-1001-05', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(6, 'LR-P10-1001-06', '1', '1', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(7, 'LR-P10-1002-01', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(8, 'LR-P10-1002-02', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 68, '0.61', '110', '', 0),
(9, 'LR-P10-1002-03', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 68, '0,61', '110', '', 0),
(10, 'LR-P10-1002-04', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(11, 'LR-P10-1002-05', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0,61', '110', '', 0),
(12, 'LR-P10-1002-06', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 68, '0,61', '110', '', 0),
(13, 'LR-P10-1002-07', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 68, '0,61', '110', '', 0),
(15, 'LR-P10-1002-08', '1', '2', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 68, '0,67', '110', '', 0),
(16, 'LB-P10-ASC-01', '1', '20', 'Tornillar', 'Bombillo', 'E27', 'Ahorrador', 1, '', 110, 9, '0,08', '110', '', 0),
(17, 'LB-P10-ASC-02', '1', '20', 'Tornillar', 'Bombillo', 'E27', 'Ahorrador', 1, '', 110, 9, '0,8', '110', '', 0),
(18, 'LR-P10-1003-01', '1', '3', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0.61818182', '60', '', 0),
(19, 'RH-P01-PLAZ-01', '1', '21', 'Tornillar', 'Bombillo', 'E40', 'Hal?geno', 1, 'Sylvania', 220, 400, '1.81818182', 'Bombillo', '3', 10),
(20, 'RH-P01-PLAZ-02', '1', '22', 'Tornillar', 'Bombillo', 'E40', 'Hal?geno', 1, 'Sylvania', 220, 400, '1.81818182', 'Bombillo', '', 0),
(21, 'RH-P01-PLAZ-03', '1', '22', 'Tornillar', 'Bombillo', 'E40', 'Hal?geno', 1, 'Sylvania', 220, 400, '1.81818182', 'Bombillo', '', 0),
(22, 'RH-P01-PLAZ-04', '1', '23', 'Tornillar', 'Bombillo', 'E40', 'Hal?geno', 1, 'Sylvania', 220, 400, '1.81818182', 'Bombillo', '', 0),
(23, 'LB-P01-PLAZ-01', '1', '22', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Gen?rica', 110, 26, '0.11818182', 'Bombillo', '3', 12),
(24, 'LB-P01-PLAZ-02', '1', '22', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Gen?rica', 110, 26, '0.11818182', 'Bombillo', '3', 10),
(25, 'LB-P01-PLAZ-03', '1', '22', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Gen?rica', 110, 13, '0.11818182', 'Bombillo', '3', 10),
(26, 'LB-P01-PLAZ-04', '1', '23', 'Tornillar', 'Bombillo', 'E27', 'LED-Ahorrador', 2, 'Gen?rica', 110, 26, '0.23636364', 'Bombillo', '3', 4),
(27, 'LB-P01-PLAZ-05', '1', '23', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Gen?rica', 110, 26, '0.23636364', 'Bombillo', '3', 4),
(28, 'LB-P01-PLAZ-06', '1', '23', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Generica', 110, 26, '0.23636364', 'Bombillo', '3', 4),
(30, 'LB-P01-PLAZ-07', '1', '23', 'Tornillar', 'Bombillo', 'E27', 'LED', 2, 'Generica', 110, 26, '0.23636364', 'Bombillo', '3', 4),
(31, 'RL-P01-PLAZ-01', '1', '21', 'Tornillar', 'Reflector LED', 'Driver', 'LED', 1, 'Kunix', 110, 100, '0.90909091', 'Panel Led', '3', 12),
(32, 'RL-P01-PLAZ-02', '1', '21', 'Tornillar', 'Reflector LED', 'Driver', 'LED', 1, 'Kunix', 110, 100, '0.90909091', 'Panel Led', '3', 12),
(33, 'LR-P10-BOD-01', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 68, '0.61818182', '60', '', 0),
(34, 'LR-P10-BOD-02', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(35, 'LR-P10-BOD-05', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(36, 'LR-P10-BOD-06', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Gen?rica', 110, 36, '0.32727273', '60', '', 0),
(37, 'LR-P10-BOD-03', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(38, 'LR-P10-BOD-04', '1', '8', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '120', '', 0),
(39, 'LR-P10-1006-01', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(40, 'LR-P10-1006-02', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(41, 'LR-P10-1006-03', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(42, 'LR-P10-1006-04', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(43, 'LR-P10-1006-05', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(44, 'LR-P10-1006-06', '1', '6', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(45, 'LR-P10-PAIN-01', '1', '13', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(48, 'LR-P10-PAIN-02', '1', '13', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(49, 'LR-P10-PAIN-03', '1', '13', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(50, 'LR-P10-PAIN-04', '1', '10', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(51, 'LR-P10-PAIN-08', '1', '14', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(53, 'LR-P10-PAIN-09', '1', '14', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(54, 'LP-P03-FASO-03', '1', '27', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', 'Panel Led', '', 0),
(55, 'LR-P10-PAIN-07', '1', '13', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(56, 'LR-P10-PAIN-06', '1', '11', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(57, 'LR-P10-PAIN-05', '1', '14', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(58, 'LR-P10-PAIN-10', '1', '14', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(59, 'LR-P10-PAIN-11', '1', '14', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(60, 'LR-P10-1005-01', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(63, 'LR-P10-1005-02', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(64, 'LR-P10-1005-03', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(65, 'LR-P10-1005-04', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(66, 'LR-P10-1005-05', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(67, 'LR-P10-1005-06', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(68, 'LR-P10-1005-07', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(69, 'LR-P10-1005-08', '1', '5', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(70, 'LR-P10-UMAC-01', '1', '17', 'Sobreponer', 'Recto', 'T8', 'Fluorescente', 4, '', 110, 36, '0.32727273', '60', '', 0),
(71, 'LR-P10-1004-01', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(72, 'LR-P10-1004-02', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(73, 'LR-P10-1004-03', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '120', '', 0),
(74, 'LR-P10-1004-04', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(75, 'LR-P10-1004-05', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(76, 'LR-P10-1004-06', '1', '4', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(77, 'LR-P10-1007-01', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '#', 0),
(78, 'LR-P10-1007-02', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(79, 'LR-P10-1007-03', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(80, 'LR-P10-1007-04', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(81, 'LR-P10-1007-05', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(82, 'LR-P10-1007-06', '1', '7', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(83, 'LP-P03-FASO-05', '1', '27', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(84, 'LP-P03-FASO-06', '1', '27', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(85, 'LP-P03-FASO-07', '1', '27', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(86, 'LP-P03-FASO-08', '1', '27', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(87, 'LP-P03-PRSO-01', '1', '28', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(88, 'LP-P03-CODI-02', '1', '29', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(89, 'LP-P03-CODI-03', '1', '29', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(90, 'LP-P03-CODI-05', '1', '29', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', 'Panel Led', '', 0),
(91, 'LP-P03-CODI-06', '1', '29', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', '60', '', 0),
(92, 'LR-P10-WHLN-01', '1', '10', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(93, 'LR-P10-WHLN-02', '1', '10', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(94, 'LR-P10-WDLS-01', '1', '11', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(95, 'LR-P10-WDLS-02', '1', '11', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(96, 'LP-P09-WDF-01', '1', '30', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, 'Mercury', 110, 48, '0.43636364', 'Panel Led', '', 0),
(97, 'LP-P09-WDF-02', '1', '30', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, 'Mercury', 110, 48, '0.43636364', '60', '', 0),
(98, 'LR-P06-605-01', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(99, 'LR-P06-605-02', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(100, 'LR-P06-605-03', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(101, 'LR-P06-605-04', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(102, 'LR-P06-605-05', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(103, 'LR-P06-605-06', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(104, 'LR-P06-605-07', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(105, 'LR-P06-605-08', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Cricon', 110, 36, '0.32727273', '60', '', 0),
(106, 'LR-P06-604-01', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(107, 'LR-P06-604-02', '1', '31', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(108, 'LR-P06-604-03', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(109, 'LR-P06-604-04', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(110, 'LR-P06-604-05', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(111, 'LR-P06-604-06', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(112, 'LR-P06-604-07', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(113, 'LR-P06-604-08', '1', '32', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(114, 'LR-P08-801-01', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(115, 'LR-P08-801-02', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Generica', 110, 36, '0.32727273', '60', '', 0),
(116, 'LR-P08-801-03', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 24, 36, '1.5', '60', '', 0),
(117, 'LR-P08-801-04', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(118, 'LR-P08-801-05', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(119, 'LR-P08-801-06', '1', '33', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(120, 'LR-P08-802-01', '1', '34', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(121, 'LR-P08-802-02', '1', '34', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(122, 'LP-P01-BILI-03', '7', '35', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, 'Mercury', 110, 48, '0.43636364', 'Panel Led ', '', 0),
(123, 'LP-P01-BILI-05', '7', '35', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, 'Mercury', 110, 48, '0.43636364', 'Panel Led', '', 0),
(124, 'LP-P01-BILI-06', '7', '35', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, 'Mercury', 110, 48, '0.43636364', 'Panel Led', '', 0),
(125, 'LP-P01-BILI-09', '7', '35', 'Empotrar', 'Panel LED', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', 'Panel Led', '', 0),
(126, 'LR-P06-603-01', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(127, 'LR-P06-603-02', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(128, 'LR-P06-603-03', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(129, 'LR-P06-603-04', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(130, 'LR-P06-603-05', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(131, 'LR-P06-603-06', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(132, 'LR-P06-603-07', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(133, 'LR-P06-603-08', '1', '37', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(135, 'LR-P08-INST-01', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(136, 'LR-P08-INST-02', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(137, 'LR-P08-INST-03', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(138, 'LR-P08-INST-04', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(141, 'LR-P08-INST-05', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(142, 'LR-P08-INST-06', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(143, 'LR-P08-INST-08', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(144, 'LR-P08-INST-09', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(145, 'LR-P04-407-01', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(146, 'LR-P04-407-02', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(147, 'LR-P04-407-03', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(148, 'LR-P04-407-05', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(149, 'LR-P04-407-06', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(150, 'LR-P04-PAIN-09', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(151, 'LR-P04-PAIN-07', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(153, 'LR-P04-PAIN-10', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(154, 'LR-P04-PAIN-08', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(155, 'LR-P04-PAIN-03', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(156, 'LR-P04-407-04', '1', '39', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(157, 'LR-P04-PAIN-05', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(158, 'LR-P04-406-01', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(159, 'LR-P04-406-02', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(160, 'LR-P04-406-03', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(161, 'LR-P04-406-04', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(162, 'LR-P04-406-05', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(163, 'LR-P04-406-06', '1', '42', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(164, 'LR-P04-PAIN-04', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(165, 'LR-P04-PAIN-06', '1', '40', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(166, 'LR-P08-INST-07', '1', '38', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(167, 'LR-P04-411-01', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(168, 'LR-P04-411-02', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(169, 'LR-P04-411-08', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(170, 'LR-P04-411-03', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(171, 'LR-P04-411-04', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '#', 0),
(172, 'LR-P04-411-05', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(173, 'LR-P04-411-06', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(174, 'LR-P04-411-07', '1', '43', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(175, 'LR-P06-601-01', '1', '44', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '#', 0),
(176, 'LR-P06-601-02', '1', '44', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(177, 'LR-P06-601-03', '1', '44', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(178, 'LR-P06-609-01', '1', '45', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(179, 'LR-P06-609-02', '1', '45', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(180, 'LR-P06-609-03', '1', '45', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(181, 'LR-P06-609-05', '1', '45', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(182, 'LR-P06-609-04', '1', '45', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(183, 'LR-P06-610-01', '1', '46', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(184, 'LR-P06-610-02', '1', '46', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(185, 'LR-P06-610-03', '1', '46', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(186, 'LR-P06-610-04', '1', '46', 'Empotrar', 'Recto', 'T8', 'LED', 4, 'Electrocontrol', 110, 36, '0.32727273', '60', '', 0),
(187, 'LR-P07-707-01', '1', '47', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(188, 'LR-P07-707-02', '1', '47', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(189, 'LR-P07-707-03', '1', '47', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(190, 'LR-P07-707-04', '1', '47', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(191, 'LR-P07-707-05', '1', '47', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(192, 'LR-P07-PAIN-01', '1', '48', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(193, 'LR-P07-PAIN-02', '1', '48', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(194, 'LR-P05-504-01', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(195, 'LR-P05-504-02', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(196, 'LR-P05-504-03', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(197, 'LR-P05-504-04', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(198, 'LR-P05-504-05', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(199, 'LR-P05-504-06', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(200, 'LR-P05-504-07', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(201, 'LR-P05-504-08', '1', '49', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(202, 'LR-P07-705-01', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(204, 'LR-P07-705-02', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(205, 'LR-P07-705-03', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(206, 'LR-P07-705-04', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(207, 'LR-P07-705-05', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(208, 'LR-P07-705-06', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(209, 'LR-P07-705-07', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(210, 'LR-P07-705-08', '1', '50', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(211, 'LR-P04-CFLN-01', '1', '51', 'Empotrar', 'En U', 'T8', 'LED', 2, '', 110, 36, '0.32727273', '60', '', 0),
(212, 'LR-P04-ARCH-01', '1', '', 'Sobreponer', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(213, 'LR-P04-ARCH-02', '1', '52', 'Sobreponer', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(214, 'LR-P07-704-01', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(215, 'LR-P07-704-02', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(216, 'LR-P07-704-03', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(217, 'LR-P07-704-04', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(218, 'LR-P07-704-05', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(219, 'LR-P07-704-06', '1', '53', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(220, 'LR-P07-PAIN-06', '1', '54', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(221, 'LB-P02-AUDI-01', '1', '55', 'Tornillar', 'Bombillo', 'E27', 'LED', 1, 'Kunix', 110, 9, '0.08181818', 'Bombillo', '', 0),
(222, 'LR-P04-WHLN-01', '1', '56', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(223, 'LR-P04-WHLN-02', '1', '56', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(224, 'LP-P05-510-01', '1', '57', 'Empotrar', 'Recto', 'Driver', 'LED', 1, '', 110, 48, '0.43636364', 'Panel Led', '', 0),
(225, 'LR-P01-WDLS-01', '1', '58', 'Empotrar', 'Recto', 'T8', 'LED', 4, '', 110, 36, '0.32727273', '60', '', 0),
(226, 'LB-P05-CTLS-01', '1', '59', 'Tornillar', 'Bombillo', 'E27', 'LED', 1, '', 110, 9, '0.08181818', 'Bombillo', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motores`
--

CREATE TABLE `motores` (
  `ITEM` int(3) NOT NULL,
  `NOM_MOTOR` varchar(200) NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `UBICACION` varchar(200) NOT NULL,
  `FABRIC` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MODELO` varchar(30) NOT NULL,
  `TIP_MOT` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `VOLT` int(3) NOT NULL,
  `WATTS` varchar(30) NOT NULL,
  `AMP` varchar(30) NOT NULL,
  `POT` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FREC` int(2) NOT NULL,
  `RPM` varchar(30) NOT NULL,
  `TIP_CON` varchar(50) NOT NULL,
  `CANT_FASES` int(2) NOT NULL,
  `FMM` varchar(30) NOT NULL,
  `TABLERO` varchar(50) NOT NULL,
  `CTO` int(3) NOT NULL,
  `CALIBRE` int(2) NOT NULL,
  `USO` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `motores`
--

INSERT INTO `motores` (`ITEM`, `NOM_MOTOR`, `SEDE`, `UBICACION`, `FABRIC`, `MODELO`, `TIP_MOT`, `VOLT`, `WATTS`, `AMP`, `POT`, `FREC`, `RPM`, `TIP_CON`, `CANT_FASES`, `FMM`, `TABLERO`, `CTO`, `CALIBRE`, `USO`) VALUES
(1, 'MV-TEVYD-01', '1', '26', 'Siemens', '1 LA7 081-4YA60', 'Ventilador', 330, '900', '2.727272727272727', '1.2', 60, '1675', 'Estrella', 3, '0.85', '', 0, 10, 'Torre enfriamiento'),
(2, 'MV-TE01', '1', '26', 'WEG', 'TE1BE0XQ', 'Ventilador', 330, '1500', '4.545454545454546', '2', 60, '850', 'Doble delta', 3, '', '', 0, 10, 'Torre de enfriamiento'),
(3, 'MV-TE02', '1', '26', 'WEG ', 'TE1BE0XQ', 'Extractor', 330, '1500', '4.545454', '2', 60, '850', 'Doble delta', 3, '', '', 0, 10, 'Torre de enfriamiento'),
(4, 'MB-VYD-01	', '1', '26', 'Siemens', '1 LA7 090-4YC60', 'Motobomba', 330, '1300', '3.9393939393939394', '1.8', 50, '1700', 'Doble estrella', 3, '0.77', '', 0, 10, 'Motobomba 1, Agua caliente VyD'),
(5, 'MB-VYD-R-02', '1', '26', 'Siemens', '1 LA7 090-4YC60', 'Motobomba', 330, '1300', '3.9393939393939394', '1.8', 50, '1700', 'Doble delta', 3, '0.77', '', 0, 10, 'Motobomba R, Agua caliente VyD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novechillers`
--

CREATE TABLE `novechillers` (
  `RL_CODE_CHILLERS` int(11) NOT NULL,
  `FECHACT` date NOT NULL,
  `NOM_CHILLERS` varchar(100) NOT NULL,
  `ACT_REALI` varchar(200) NOT NULL,
  `ESTADO` varchar(50) NOT NULL,
  `OBSERVA` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `novechillers`
--

INSERT INTO `novechillers` (`RL_CODE_CHILLERS`, `FECHACT`, `NOM_CHILLERS`, `ACT_REALI`, `ESTADO`, `OBSERVA`) VALUES
(1, '2023-04-10', '0', 'mantenimiento', 'Por reparar', 'reparado'),
(2, '2023-04-10', '0', 'MANTENIMIENTO', 'Por reparar', 'MANTENIMIENTO'),
(3, '2023-04-10', '0', 'LISTO', 'Funcional', 'LISTO'),
(4, '2023-04-10', '0', '4', 'Por reparar', '5124');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noveenfriamiento`
--

CREATE TABLE `noveenfriamiento` (
  `RL_CODE_ENFRIA` int(11) NOT NULL,
  `FECHACT` date NOT NULL,
  `TIPO_EQUIPO` varchar(100) NOT NULL,
  `ACT_REALI` varchar(200) NOT NULL,
  `ESTADO` varchar(200) NOT NULL,
  `OBSERVA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noveenfriamiento`
--

INSERT INTO `noveenfriamiento` (`RL_CODE_ENFRIA`, `FECHACT`, `TIPO_EQUIPO`, `ACT_REALI`, `ESTADO`, `OBSERVA`) VALUES
(1, '2023-04-18', '1', 'e', 'Funcional', 'eee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novefancoils`
--

CREATE TABLE `novefancoils` (
  `RL_CODE_FANCOILS` int(11) NOT NULL,
  `FECHACT` date NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `ACT_REALI` varchar(200) NOT NULL,
  `STATE` varchar(200) NOT NULL,
  `OBSERV` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `novefancoils`
--

INSERT INTO `novefancoils` (`RL_CODE_FANCOILS`, `FECHACT`, `NOMBRE`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '2023-04-12', '2', 'J', 'Por reparar', 'JGGGGG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novelamp`
--

CREATE TABLE `novelamp` (
  `RL_CODE_LAMP` int(5) NOT NULL,
  `FECHACT` date NOT NULL,
  `NUME_LAMP` int(5) NOT NULL,
  `ACT_REALI` varchar(500) NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `OBSERV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `novelamp`
--

INSERT INTO `novelamp` (`RL_CODE_LAMP`, `FECHACT`, `NUME_LAMP`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '2022-08-24', 19, 'Revision del  reflector', 'Mala', 'No enciende, hay que cambiar lámpara'),
(3, '2022-09-13', 19, 'Se cambia lámpara completa y se pone bombilla', 'Funcional', 'La bombilla fue donada por Frank eventos bienestar'),
(4, '2022-08-24', 20, 'Revision del estado de la lampara', 'Mala', 'Se requiere cambio de Bombillo'),
(5, '2022-08-26', 20, 'Se cambia lampara Halogena a LED', 'Funcional', 'Reflector LED entregado por Félix Gomez'),
(6, '2022-08-24', 21, 'Verificacion de funcionamiento de la luminaria', 'Funcional', 'La lampara esta funcional, se recomienda cambio a LED'),
(7, '2022-08-26', 21, 'Se reemplaza la Luminaria por reflector LED', 'Funcional', 'El reflector fue entregado por Félix Gómez'),
(8, '2022-08-24', 22, 'Se verifica el funcionamiento de la luminaria', 'Funcional', 'Se recomienda cambio a reflector LED'),
(9, '2022-08-24', 23, 'Revision de la luminaria', 'Por reparar', 'Le faltan los dos bombillos'),
(10, '2022-08-25', 23, 'Se ponen bombillos LED', 'Funcional', 'Bombillos donados por Frank de bienestar '),
(11, '2022-08-24', 24, 'Revision de la luminaria', 'Por reparar', 'No tiene bombillos. no sockets'),
(12, '2022-08-26', 24, 'Se esta en busca de los socket', 'Por reparar', ''),
(13, '2022-08-24', 25, 'Se realiza revision de la luminaria', 'Por reparar', 'Bombillos malos'),
(14, '2022-08-25', 25, 'Se ponen dos Bombillos LED', 'Funcional', 'Bombillos donados por Frank eventos bienestar'),
(15, '2022-08-24', 26, 'Se realiza verificacion de la luminaria', 'Por reparar', 'Se requiere de  un bombillo'),
(16, '2022-08-26', 26, 'Se pone el bombillo faltante', 'Funcional', 'Bombillos donados por Frank eventos bienestar'),
(17, '2022-08-24', 27, 'Se realiza verificacion de la luminaria', 'Por reparar', 'requiere de dos bombillos'),
(18, '2022-08-26', 27, 'Se ponen Bombillos LED', 'Funcional', 'Donados por Frank, contrato bienestar'),
(19, '2022-08-24', 28, 'Se realiza verificacion de la luminaria', 'Por reparar', 'requiere de dos bombillos'),
(20, '2022-08-26', 28, 'Se ponen dos bombillos LED', 'Funcional', 'Bombillos Donados por Frank contrato bienestar'),
(21, '2022-08-24', 30, 'Se verifica el estado de la luminaria', 'Por reparar', 'requiere de dos bombillos'),
(22, '2022-08-26', 30, 'Se ponen dos Bombillas LED', 'Funcional', 'Bombillos Donados por Frank contrato bienestar'),
(23, '2022-09-29', 33, 'Se cambia luminaria de flourecente a LED', 'Funcional', '4 tubos LED existentes'),
(24, '2022-09-29', 34, 'Cambio sistema Fluorescente a LED', 'Funcional', '4 tubos LED existentes'),
(25, '2022-09-29', 35, 'Cambio de Fluorescente a LED', 'Funcional', '4 tubos LED existentes'),
(26, '2022-09-29', 36, 'Cambio Fluorescente a LED', 'Funcional', '4 Tubos LED existentes'),
(27, '2021-11-23', 37, 'Cambio de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos existentes'),
(28, '2021-11-23', 38, 'Cambio de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos a LED existentes.'),
(29, '2022-09-29', 39, 'Cambio Flurescente a led', 'Funcional', 'Se Cambian 4 tubos existentes'),
(30, '2022-09-29', 40, 'Se cambia de fluoresente a LED', 'Funcional', 'Se cambian 4 tubos existentes'),
(31, '2021-11-19', 41, 'SE cambia de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos existentes'),
(32, '2022-09-29', 42, 'Cambio fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(33, '2022-09-29', 43, 'Se cambia de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(34, '2022-09-29', 44, 'Se cambia de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(35, '2022-09-29', 45, 'SE cambia de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(36, '2021-11-09', 48, 'SE cambia fluorescente a LED', 'Funcional', 'SE cambian 4 tubos existentes'),
(37, '2021-11-09', 49, 'SE cambia fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(38, '2021-11-11', 50, 'Se cambia Fluorescente a LED', 'Funcional', 'SE cambian 4 tubos LED existentes'),
(39, '2022-09-29', 51, 'Se verifica luminaria para cambio a LED', 'Funcional', 'Hay q cambiarla en sitio'),
(40, '2021-11-16', 53, 'Se cambia de fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED existentes'),
(41, '2021-12-17', 54, 'Revision panel led', 'Por reparar', 'SE requiere cambio de Driver, se deja desconectada'),
(42, '2022-09-30', 54, 'se realiza cambio de driver', 'Funcional', 'Se conecta driver  contrato 2022'),
(43, '2022-09-30', 55, 'Cambio de fluorescente a LED', 'Funcional', '4 tubos LED, caja 1'),
(44, '2021-11-09', 56, 'Cambio de fluorescente a LED', 'Funcional', 'se cambian 4 tubos LED existentes'),
(45, '2022-09-30', 57, 'Se cambia fluorescente a LED', 'Funcional', 'se cambian 4 tubos LED existentes'),
(46, '2022-09-30', 58, 'Se cambia Fluorescente a LED', 'Funcional', 'Se cambian 4 tubos LED Existentes'),
(47, '2022-10-03', 60, 'Se cambian de fluorescentes a LED', 'Funcional', '4 tubos existentes'),
(48, '2022-10-03', 63, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos existentes.'),
(49, '2022-10-03', 64, 'se cambia de fluorescente a LED', 'Funcional', '4 tubos existentes'),
(50, '2022-10-03', 65, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja1'),
(51, '2022-10-03', 66, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 1'),
(52, '2022-10-03', 67, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 1'),
(53, '2022-10-03', 68, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 1'),
(54, '2022-10-03', 69, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 1'),
(55, '2022-10-04', 70, 'Se retira lampara de empotrar', 'Funcional', 'No es necesaria en ese espacio'),
(56, '2022-10-04', 71, 'se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 1'),
(57, '2021-11-26', 72, 'Se Cambia Fluorescente a LED', 'Funcional', '4 tubos existentes'),
(58, '2021-11-26', 73, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED existentes'),
(59, '2022-10-04', 74, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, 2 caja1 y 2 caja 2'),
(60, '2022-10-04', 75, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(61, '2022-10-04', 76, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(62, '2022-10-04', 51, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(63, '2021-11-19', 77, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, existentes'),
(64, '2022-10-04', 78, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(65, '2022-10-04', 79, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(66, '2021-11-25', 80, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED existentes'),
(67, '2021-11-25', 81, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, existentes'),
(68, '2022-10-04', 82, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED,  caja 2'),
(69, '2021-12-17', 83, 'Se desconecta driver, esta malo', 'Por reparar', 'a la espera de conseguir el driver'),
(70, '2022-10-07', 83, 'Se cambia driver ', 'Funcional', 'Se conecta driver  contrato 2022'),
(71, '2021-12-17', 84, 'se verifica driver y esta para cambiar', 'Por reparar', 'Requiere cambio de driver, esta malo'),
(72, '2022-10-07', 84, 'se cambia driver', 'Funcional', 'Se conecta driver  contrato 2022'),
(73, '2021-12-17', 85, 'Se verifica luminaria, aun funciona', 'Por reparar', 'luminaria aun funcional pero requiere cambio de driver'),
(74, '2022-10-07', 85, 'se cambia driver', 'Funcional', 'Se conecta driver  contrato 2022'),
(75, '2021-12-17', 86, 'Se verifica luminaria, se desconecta el driver', 'Por reparar', 'requiere cambio de driver, esta malo'),
(76, '2022-10-07', 86, 'se cambia driver', 'Funcional', 'Se conecta driver  contrato 2022'),
(77, '2022-10-07', 87, 'Se verifica funcionalidad de la luminaria', 'Por reparar', 'Driver contrato 2022, el panel led hay q cambiarlo, no se pudo poner de los nuevos ya que son mas gruesos y no se dejan empotrar en la estructura'),
(78, '2022-10-07', 88, 'Se cambia driver', 'Funcional', 'driver contrato 2022'),
(79, '2022-10-07', 89, 'Se cambia driver', 'Funcional', 'driver contrato 2022'),
(80, '2022-10-07', 90, 'Se cambia driver', 'Funcional', 'driver contrato 2022'),
(81, '2022-10-07', 91, 'se cambia driver ', 'Funcional', 'driver contrato 2022'),
(82, '2022-10-07', 7, 'Se cambia de fluorescente a LED', 'Funcional', '4 tubos LED, caja 3'),
(83, '2021-11-23', 8, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, existentes'),
(84, '2021-11-12', 9, 'se cambia de fluorescente a LED', 'Funcional', '4 tubos LED existentes'),
(85, '2021-11-12', 10, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 3'),
(86, '2022-10-07', 11, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED ,caja 3'),
(87, '2021-11-12', 12, 'se cambia fluorescente a LED', 'Funcional', '4 tubos, existentes'),
(88, '2021-12-14', 12, 'se cambia fluorescente a LED', 'Funcional', '4 tubos existentes'),
(89, '2021-12-14', 13, 'se cambia fluorescente a LED', 'Funcional', '4 tubos existentes'),
(90, '2022-10-07', 15, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 3'),
(91, '2022-10-07', 92, 'LR-P10-WDLS-01', 'Funcional', '4 tubos LED, caja 3'),
(92, '2022-10-07', 93, 'LR-P10-WDLS-01', 'Funcional', '4 tubos LED, caja 3'),
(93, '2022-10-07', 94, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 3'),
(94, '2022-10-07', 95, 'se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 2'),
(95, '2022-10-07', 96, 'Se verifica Panel', 'Mala', 'se requiere cambio'),
(96, '2022-10-10', 96, 'Se cambia panel LED', 'Funcional', 'Panel 1 contrato 2022'),
(97, '2022-10-10', 97, 'Se cambia Panel delgado por panel grueso', 'Funcional', 'panel contrato 2022, retirado va para prueba de software por ser delgado'),
(98, '2022-10-10', 87, 'Se retira Panel LED y se empotra el del WDF-P09-LS', 'Funcional', 'Se retira panel para validar, se repone por el retirado en el baño de damas piso 9, queda con driver nuevo'),
(99, '2022-10-11', 98, 'Se cambia Fluorescente a LED', 'Funcional', '2 tubos caja 3 y 2 caja 4'),
(100, '2022-10-11', 99, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED, caja 4'),
(101, '2022-10-11', 100, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED ,caja 4'),
(102, '2022-10-11', 101, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED, caja 4'),
(103, '2022-10-11', 102, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED, caja 4'),
(104, '2022-10-11', 103, 'Se cambia Fluorescente a LED', 'Funcional', '4 Tubos LED, caja 4'),
(105, '2022-10-11', 104, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED, caja 4'),
(106, '2022-10-11', 105, 'Se cambia Fluorescente a LED', 'Funcional', '4 tubos LED, caja 4'),
(107, '2022-10-11', 106, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos existentes'),
(108, '2022-10-11', 107, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(109, '2022-10-11', 108, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(110, '2022-10-11', 109, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(111, '2022-10-11', 110, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(112, '2022-10-11', 111, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(113, '2022-10-11', 112, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(114, '2022-10-11', 113, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, caja 5'),
(115, '2022-10-14', 114, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, 2 caja 5 y 2 caja 6'),
(116, '2022-10-14', 115, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(117, '2022-10-14', 116, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(118, '2022-10-14', 117, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(119, '2022-10-14', 118, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(120, '2022-10-14', 119, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(121, '2022-10-14', 120, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(122, '2022-10-14', 121, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 6'),
(123, '2022-10-14', 122, 'Se verifica panel led', 'Mala', 'Se debe cambiar'),
(124, '2022-10-14', 122, 'Se cambia panel LED por uno nuevo', 'Funcional', 'Panel 2 contrato 2022'),
(125, '2022-10-14', 123, 'Se verifica Panel, esta mala, hay que cambiar', 'Mala', 'Cambiar panel'),
(126, '2022-10-14', 123, 'se cambia Panel LED', 'Funcional', 'Panel 3 contrato 2022 '),
(127, '2022-10-14', 124, 'se verifica panel, problema de balastro', 'Por reparar', 'se debe cambiar panel, el conector es macho'),
(128, '2022-10-14', 124, 'se cambia panel Led completo', 'Funcional', 'Panel 4 contrato 2022'),
(129, '2022-10-14', 125, 'Se verifica panel LED, hay que cambiarlo', 'Mala', 'panel para cambiar'),
(130, '2022-10-14', 125, 'Se cambia panel LED', 'Funcional', 'panel existente.'),
(131, '2022-10-18', 126, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(132, '2022-10-18', 127, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(133, '2022-10-18', 128, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(134, '2022-10-18', 129, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(135, '2022-10-18', 130, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(136, '2022-10-18', 131, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(137, '2022-10-18', 132, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED, caja 7'),
(138, '2022-10-18', 133, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos, 2 caja 7 y 2 caja 8'),
(139, '2022-10-19', 1, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos, caja 10'),
(140, '2022-10-19', 2, 'Se cambia Fluorescente a LED. ', 'Funcional', '4 tubos, caja 10'),
(141, '2022-10-19', 3, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos, caja 10'),
(142, '2022-10-19', 4, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos, caja 10'),
(143, '2022-10-19', 5, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos, caja 10'),
(144, '2022-10-19', 6, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos, caja 10'),
(145, '2022-10-20', 135, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos, caja 8'),
(146, '2022-10-20', 136, 'Se cambia fluorescente a LED. ', 'Funcional', '4 tubos, caja 8'),
(147, '2022-10-20', 137, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos, caja 8'),
(148, '2022-10-20', 138, 'Se cambia fluorescente a LED. ', 'Funcional', '4 tubos, caja 8'),
(149, '2022-10-20', 141, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos, caja 8'),
(150, '2022-10-20', 142, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos, caja 8'),
(151, '2022-10-20', 143, 'Se cambia fluorescente a LED. ', 'Funcional', '4 tubos, caja 8'),
(152, '2022-10-20', 144, 'Se cambia fluorescente a LED. ', 'Funcional', '4 tubos, caja 9'),
(153, '2022-10-24', 145, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(154, '2022-10-24', 146, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(155, '2022-10-24', 147, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(156, '2022-10-24', 156, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(157, '2022-10-24', 148, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(158, '2022-10-24', 149, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 9'),
(159, '2022-10-24', 150, 'Se cambia de fluorescente a LED.', 'Funcional', '2 tubos LED, caja 9 y 2 caja 10'),
(160, '2022-10-24', 151, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED, caja 10'),
(161, '2021-05-31', 153, 'Se cambia de fluorescente a LED. ', 'Funcional', '4 tubos LED Existentes'),
(162, '2022-06-09', 154, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED Existentes'),
(163, '2022-06-09', 157, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED Existentes'),
(164, '2022-06-09', 155, 'Se cambia de fluorescente a LED. ', 'Funcional', '4 tubos LED Existentes'),
(165, '2022-10-25', 158, 'Se cambia Fluorescente a LED. ', 'Funcional', '4 tubos LED , caja 11'),
(166, '2022-10-25', 159, 'Se cambia Fluorescente a LED. ', 'Funcional', '4 tubos LED , caja 11'),
(167, '2022-10-25', 160, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos LED , caja 11'),
(168, '2022-10-25', 161, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos LED , caja 11'),
(169, '2022-10-25', 162, 'Se cambia Fluorescente a LED. ', 'Funcional', '4 tubos LED , caja 11'),
(170, '2022-10-25', 163, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos LED , caja 11'),
(171, '2022-10-25', 164, 'Se cambia Fluorescente a LED.', 'Funcional', '4 tubos LED , caja 11'),
(172, '2022-10-25', 165, 'Se cambia Fluorescente a LED.', 'Funcional', '2 tubos LED, caja 11, 2 caja 12'),
(173, '2022-10-25', 166, 'Se cambia de fluorescente a LED', 'Funcional', '4 tubos LED caja 12'),
(174, '2022-10-26', 167, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 12'),
(175, '2022-10-26', 168, 'Se cambia de fluorescente a LED. ', 'Funcional', '4 tubos LED , caja 12'),
(176, '2022-10-26', 170, 'Se cambia de fluorescente a LED. ', 'Funcional', '4 tubos LED , caja 12'),
(177, '2022-10-26', 171, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 12'),
(178, '2022-10-26', 172, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 12'),
(179, '2022-10-26', 131, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 12'),
(180, '2022-10-26', 174, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 13'),
(181, '2022-10-26', 169, 'Se cambia de fluorescente a LED.', 'Funcional', '4 tubos LED , caja 13'),
(182, '2022-11-01', 175, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 13'),
(183, '2022-11-01', 176, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 13'),
(184, '2022-11-01', 177, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 13'),
(185, '2022-11-01', 178, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 13'),
(186, '2022-11-01', 179, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 13'),
(187, '2022-11-01', 180, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, 2 Caja 13, 2 caja 14'),
(188, '2022-11-01', 182, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(189, '2022-11-01', 181, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(190, '2021-11-19', 183, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Existentes'),
(191, '2021-11-19', 184, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Existentes'),
(192, '2021-11-19', 185, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Existentes'),
(193, '2021-11-19', 186, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED, Existentes'),
(194, '2022-11-02', 187, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(195, '2022-11-02', 188, 'Se cambia Fluorescentes a LED. ', 'Funcional', '4 tubos LED, Caja 14'),
(196, '2022-11-02', 189, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(197, '2022-11-02', 190, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(198, '2022-11-02', 191, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 14'),
(199, '2022-11-02', 192, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 15'),
(200, '2022-11-02', 193, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, Caja 15'),
(201, '2022-11-02', 194, 'Se cambia Fluorescentes a LED.4 tubos LED, caja 15 ', 'Funcional', '4 tubos LED, caja 15'),
(202, '2022-11-02', 195, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 15'),
(203, '2022-11-02', 196, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 15'),
(204, '2022-11-02', 196, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 15'),
(205, '2022-11-02', 197, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 15'),
(206, '2022-11-02', 199, 'Se cambia Fluorescentes a LED.', 'Funcional', '2 tubos LED, caja 15, y 2 caja 16'),
(207, '2022-11-02', 200, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 16'),
(208, '2022-11-02', 201, 'Se cambia Fluorescentes a LED.', 'Funcional', '4 tubos LED, caja 16'),
(209, '2022-11-03', 202, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 16'),
(210, '2022-11-03', 204, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 16'),
(211, '2022-11-03', 205, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 16'),
(212, '2022-11-03', 206, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 16'),
(213, '2022-11-03', 207, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 16'),
(214, '2022-11-03', 208, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 17'),
(215, '2022-11-03', 209, 'Se cambia fluorescente a LED. ', 'Funcional', '4 tubos LED caja 17'),
(216, '2022-11-03', 210, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 17'),
(217, '2022-11-08', 211, 'Se verifica funcionamiento.', 'Por reparar', 'se requeire cambio de 2 tubos en U'),
(218, '2022-11-08', 211, 'se cambian 2 tubos fluorescentes en U', 'Funcional', '2 tubos existentes'),
(219, '2022-11-09', 212, 'Se cambia Fluorescentes a LED', 'Funcional', '4 tubos LED, Caja 17'),
(220, '2022-11-09', 213, 'Se Cambia FLuorescente a LED', 'Funcional', '4 tubos LED, caja 17'),
(221, '2022-12-19', 214, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 17'),
(222, '2022-12-19', 215, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 17'),
(223, '2022-12-19', 216, 'Se cambia fluorescente a LED.', 'Funcional', '2 tubos LED caja 17, 2 caja 18'),
(224, '2022-12-19', 218, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 18'),
(225, '2022-12-19', 218, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 18'),
(226, '2022-12-19', 219, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 18'),
(227, '2022-12-19', 220, 'Se cambia fluorescente a LED.', 'Funcional', '4 tubos LED caja 18'),
(228, '2022-12-19', 221, 'Se revisa bombillo ingreso auditorio', 'Mala', 'para cambiar bombillo'),
(229, '2022-12-19', 221, 'se cambia bombillo quemado fluorescente', 'Funcional', 'Se cambia a bombillo a LED'),
(230, '2023-01-18', 222, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED caja 18'),
(231, '2023-01-18', 223, 'Se cambia fluorescente a LED', 'Funcional', '4 tubos LED caja 18'),
(232, '2023-01-23', 224, 'Se Verifica panel', 'Por reparar', 'Requiere cambio de Driver'),
(233, '2023-01-27', 224, 'Se cambia Driver', 'Funcional', 'Driver contrato 2022, David'),
(234, '2023-02-02', 225, 'Se Cambia fluorescente a LED', 'Funcional', '4 tubos LED , caja 18, David'),
(235, '2023-02-08', 1, 'poil', 'Funcional', 'poli'),
(236, '2023-02-08', 20, 'reparado', 'Funcional', 'true'),
(237, '0000-00-00', 1, 'sergfgbh', 'Por reparar', 'zdfgsfg'),
(238, '2023-02-08', 1, 'VCGHJKTDH', 'Funcional', 'DTJYTJ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novemotor`
--

CREATE TABLE `novemotor` (
  `RL_CODE_MOTOR` int(5) NOT NULL,
  `FECHACT` date NOT NULL,
  `NUME_MOTOR` int(5) NOT NULL,
  `ACT_REALI` varchar(500) NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `OBSERV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `novemotor`
--

INSERT INTO `novemotor` (`RL_CODE_MOTOR`, `FECHACT`, `NUME_MOTOR`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '2021-10-10', 2, 'Carlos Henao, se realiza cambio por mtto del motor', 'Funcional', 'Carlos Henao reporta dicha actividad'),
(2, '2022-08-29', 2, 'Se realiza verificación del motor por ruido', 'Funcional', 'el eje presenta movimientos al parecer por desgaste de los bujes y sonido en el rodamiento'),
(3, '2022-09-01', 2, 'Se baja motor para revisión', 'Mala', 'Se retira el motor para revisión, estaba pegado y olía a quemado'),
(4, '2022-09-15', 2, 'Se verifica funcionamiento del motor', 'Mala', 'El motor huele a quemado, y muestra que las bobinas estan quemadas'),
(5, '2022-09-21', 1, 'Se retira motor de la torre de enfriamiento de voz y datos, no se usa ', 'Para revisar', 'La torre de enfriamiento no esta en uso, por normatividad en los cuartos de comuniacaciones'),
(6, '2022-09-23', 1, 'Se revisa motor, se encuentra funcional', 'Funcional', 'se programa para mantenimiento'),
(7, '2022-09-26', 1, 'Mantenimiento del motor', 'Funcional', 'Se realiza mtto del motor, desensamble, lijado, limpieza, lubricacion y ensamble del motor'),
(8, '2022-09-27', 1, 'Se monta el motor en la torre de enfriamiento  1 del sistema de aire principal', 'Funcional', 'el motor queda funcional, las aspas están un poco pequeñas pero ayudan un poco a la funcionalidad de la torre'),
(9, '2022-01-24', 3, 'Carlos Henao, se realiza cambio por mtto del motor', 'Funcional', 'Carlos Henao reporta dicha actividad'),
(10, '2022-09-23', 4, 'Se retira la motobomba por no uso en la unidad de enfriamiento de VyD', 'Para revisar', 'para verificar el estado de la motobomba para determinar su uso'),
(11, '2022-09-23', 5, 'Se retira la motobomba por no uso en la unidad de enfriamiento de VyD', 'Para revisar', 'para verificar el estado de la motobomba para determinar su uso'),
(12, '2022-09-26', 4, 'Se verifica estado del motor', 'Funcional', 'El motor esta funcional, para determinar uso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noveplanta`
--

CREATE TABLE `noveplanta` (
  `RL_CODE_PLANTA` int(5) NOT NULL,
  `FECHACT` date NOT NULL,
  `NUM_PLANTA` int(5) NOT NULL,
  `ACT_REALI` varchar(500) NOT NULL,
  `STATE` varchar(40) NOT NULL,
  `OBSERV` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noveplanta`
--

INSERT INTO `noveplanta` (`RL_CODE_PLANTA`, `FECHACT`, `NUM_PLANTA`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '2023-03-23', 1, 'asa', '0', 'a'),
(2, '2023-03-23', 1, 'frdefr', '0', '22222222222222'),
(3, '2023-03-23', 2, '3333333', '0', '33333333333333333333'),
(4, '0000-00-00', 2, 'EEEEEEEEEEEEEEEEEEEEE', '0', ''),
(5, '2023-03-23', 1, '33333', '0', '3333'),
(6, '2023-03-23', 1, '11100000', '0', '231254'),
(7, '2023-03-23', 1, '4', '0', '4'),
(8, '2023-03-23', 1, 'uu', '0', 'uu'),
(9, '2023-03-23', 1, 'ssss', '0', 'ssss'),
(10, '2023-03-23', 1, 'qqqqq', 'Funcional', 'qqqq'),
(11, '2023-03-24', 4, '215242', 'Por reparar', '52'),
(12, '2023-03-24', 1, '21211', 'Funcional', '21332512');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noveswitches`
--

CREATE TABLE `noveswitches` (
  `RL_CODE_SWITCHES` int(11) NOT NULL,
  `FECHACT` date NOT NULL,
  `NUM_SWITCHES` int(11) NOT NULL,
  `ACT_REALI` varchar(200) NOT NULL,
  `ESTADO` varchar(200) NOT NULL,
  `OBSERVA` varchar(200) NOT NULL,
  `OPERADOR` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noveswitches`
--

INSERT INTO `noveswitches` (`RL_CODE_SWITCHES`, `FECHACT`, `NUM_SWITCHES`, `ACT_REALI`, `ESTADO`, `OBSERVA`, `OPERADOR`) VALUES
(1, '0000-00-00', 0, '', '#', 'redsssssssssssffffffffffffffffffffff', ' Administrador'),
(2, '2023-02-08', 2, 'IKJIJ8IHJ', 'Por reparar', 'KJN JN', ''),
(3, '2023-02-08', 2, 'SFDHSF', 'Funcional', 'SXDGH', ''),
(4, '2023-02-08', 4, 'hbnhbn', 'Funcional', 'bgbb', ''),
(5, '2023-02-08', 3, 'EFEFG', 'Por reparar', 'QEWFERFG', 'Administrador'),
(6, '2023-02-08', 5, 'DEFRDERE', 'Por reparar', 'SRRGRG', 'Administrador'),
(7, '2023-02-08', 3, 'SS', 'Funcional', 'SS', 'Administrador'),
(8, '2023-02-08', 5, 'sdthfgj', 'Funcional', 'srty', 'Administrador'),
(9, '2023-02-08', 1, 'dfggh', 'Funcional', 'fgjdj', 'Administrador'),
(10, '2023-02-08', 2, 'ñplokj', 'Funcional', 'jhnub', 'Administrador'),
(11, '0000-00-00', 0, '', '#', '4851982982985959854985', 'Administrador'),
(12, '2023-02-08', 5, 'ss', 'Por reparar', 'sss', 'Administrador'),
(13, '2023-02-08', 3, 'SDDD', 'Funcional', 'DDDD', 'Administrador'),
(14, '2023-02-08', 1, 'SDFHG', 'Funcional', 'SDFHGRTH', 'Administrador'),
(15, '2023-02-08', 3, 'CXFGJHNDGH', 'Funcional', 'SDFGHRGT', 'Administrador'),
(16, '0000-00-00', 0, '', '#', '', 'Administrador'),
(17, '2023-02-08', 2, 'sdedrsdd', 'Funcional', 'sgfrg', 'Administrador'),
(18, '0000-00-00', 3, 'ffffffffff', 'Por reparar', 'fffffffffffff', 'Andres'),
(19, '0000-00-00', 1, 'fffffffffffffffffff', 'Funcional', 'ffffffffffffffff', 'Andres'),
(20, '0000-00-00', 5, 'fffffffffffffffffffff', 'Por reparar', 'fffffffffffffffffffffff', 'Andres'),
(21, '0000-00-00', 5, 'aaaaaaaaaa', 'Por reparar', 'aaaaaaaaaaaaaaa', 'Andres'),
(22, '0000-00-00', 0, 'rrrrrrrrr', 'Por reparar', '', 'Andres'),
(23, '2023-03-31', 1, 'rrrrrrrr', 'Mala', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'Andres'),
(24, '2023-03-23', 1, 'dddddddddddddddd', 'Funcional', 'bbbbbbbbbbbbbbbb', 'Andres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novetoma`
--

CREATE TABLE `novetoma` (
  `RL_CODE_TOMA` int(5) NOT NULL,
  `FECHACT` date NOT NULL,
  `NUME_TOMA` int(5) NOT NULL,
  `ACT_REALI` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `STATE` varchar(30) NOT NULL,
  `OBSERV` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `novetoma`
--

INSERT INTO `novetoma` (`RL_CODE_TOMA`, `FECHACT`, `NUME_TOMA`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '0000-00-00', 0, 'Reparacion', 'Por reparar', 'no hubo repuesto'),
(2, '2023-02-07', 2, 'FGS', 'Funcional', 'SFG'),
(3, '2023-03-23', 6, '7777', 'Funcional', '7777'),
(4, '2023-03-24', 1, 'dcdc', 'Funcional', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noveumas`
--

CREATE TABLE `noveumas` (
  `RL_CODE_UMAS` int(11) NOT NULL,
  `FECHACT` date NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `ACT_REALI` varchar(300) NOT NULL,
  `STATE` varchar(200) NOT NULL,
  `OBSERV` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noveumas`
--

INSERT INTO `noveumas` (`RL_CODE_UMAS`, `FECHACT`, `NOMBRE`, `ACT_REALI`, `STATE`, `OBSERV`) VALUES
(1, '2023-04-12', '1', 'LLLL', 'Funcional', 'BGVFR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `NUM_PLANTA` int(11) NOT NULL,
  `NOM_PLANTA` varchar(200) NOT NULL,
  `UBICACION` varchar(100) NOT NULL,
  `AMBIENTE` varchar(100) NOT NULL,
  `MODELO` varchar(150) NOT NULL,
  `SERIE` varchar(150) NOT NULL,
  `KVA` varchar(10) NOT NULL,
  `KW` varchar(10) NOT NULL,
  `FRECUENCIA_Hz` varchar(100) NOT NULL,
  `POTENCIA` varchar(100) NOT NULL,
  `COMBUSTIBLE` varchar(100) NOT NULL,
  `VOLT_GEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`NUM_PLANTA`, `NOM_PLANTA`, `UBICACION`, `AMBIENTE`, `MODELO`, `SERIE`, `KVA`, `KW`, `FRECUENCIA_Hz`, `POTENCIA`, `COMBUSTIBLE`, `VOLT_GEN`) VALUES
(1, 'A1', '11', '11', 'A1', '1231', 'A1', 'A1', 'A1', 'A1', 'Diesel', '220'),
(4, '4563215', '1', '1', '214', '32563', '21325', '325612', '21542', '21542', 'Diesel', '330');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `NUM_SEDE` int(11) NOT NULL,
  `NOM_SEDE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`NUM_SEDE`, `NOM_SEDE`) VALUES
(1, 'Edificio Central Torre Norte'),
(2, 'Tecnoparque'),
(3, 'Buenos Aires'),
(4, 'Interactuar'),
(5, 'U de Colombia'),
(6, 'Ciudadela Universitaria'),
(7, 'Edificio Central Torre Sur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `switches`
--

CREATE TABLE `switches` (
  `ITEM` int(11) NOT NULL,
  `NOM_SWITCHE` varchar(200) NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `AMBIENTE` varchar(100) NOT NULL,
  `CANTIDAD_INTERRUPTORES` int(11) NOT NULL,
  `MARCA` varchar(100) NOT NULL,
  `TABLERO` int(50) NOT NULL,
  `CTO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `switches`
--

INSERT INTO `switches` (`ITEM`, `NOM_SWITCHE`, `SEDE`, `AMBIENTE`, `CANTIDAD_INTERRUPTORES`, `MARCA`, `TABLERO`, `CTO`) VALUES
(1, 'jui', '1', '2', 9, 'todo', 1, 0),
(2, 'der', '1', '2', 23, 'red', 2, 0),
(3, 'gtfgrtf', '1', '3', 4, 'dfrdefeer', 4, 0),
(4, 'p', '#', '#', 0, 'kjijuhyghtgfygygh', 4, 0),
(5, 'loilo', '#', '#', 8, 'swet', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tableros`
--

CREATE TABLE `tableros` (
  `NUM_TAB` int(3) NOT NULL,
  `Nom_tab` varchar(25) NOT NULL,
  `Cant_ctos` int(3) NOT NULL,
  `Cant_disp` int(3) NOT NULL,
  `CALIB_CONDUC` varchar(10) NOT NULL,
  `NUM_LINE` int(2) NOT NULL,
  `Sede` varchar(30) NOT NULL,
  `Ubicacion` varchar(30) NOT NULL,
  `ALIMENT_POR` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tableros`
--

INSERT INTO `tableros` (`NUM_TAB`, `Nom_tab`, `Cant_ctos`, `Cant_disp`, `CALIB_CONDUC`, `NUM_LINE`, `Sede`, `Ubicacion`, `ALIMENT_POR`) VALUES
(1, 'TEN01-P10', 24, 11, '8', 3, '1', '9', ''),
(2, 'TEN02-P10', 24, 4, '10', 3, '1', '9', ''),
(3, 'TEN01-PS', 24, 1, '10', 3, '1', '24', 'Subestación Principal'),
(4, 'TEN03-P04', 30, 7, '6', 3, '1', '25', 'Subestacion brecket centro 19 (60 Amp)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tomas`
--

CREATE TABLE `tomas` (
  `ITEM` int(5) NOT NULL,
  `NOM_TOMA` text NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `UBICACION` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TIP_TOMA` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MARCA` varchar(30) NOT NULL,
  `VOLT` int(4) NOT NULL,
  `CALIBRE` varchar(4) NOT NULL,
  `TABLERO` int(3) NOT NULL,
  `CTO` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tomas`
--

INSERT INTO `tomas` (`ITEM`, `NOM_TOMA`, `SEDE`, `UBICACION`, `TIP_TOMA`, `MARCA`, `VOLT`, `CALIBRE`, `TABLERO`, `CTO`) VALUES
(1, 'TC110-P10-1001-01', '1', '1', 'MnFase gnd Empot X2', 'LEVINTON', 0, '0', 1, 4),
(2, 'TC110-P10-1001-02', '1', '1', 'MnFase gnd Empot X2', 'Levinton', 110, '0', 0, 0),
(6, 'FERER', '1', '5', 'MnFase Sllo sobrep X1', 'FRGR', 110, '0', 0, 0),
(7, 'sdfhgf', '1', '2', 'MnFase Sllo sobrep X1', 'sgerg', 0, '0', 0, 0),
(8, 'juan', '1', '1', 'MnFase Sllo sobrep X1', 'fer', 110, '0', 0, 0),
(9, 'dfthg', '1', '3', 'BiFase Empot X1', 'dde', 110, '3', 0, 0),
(10, 'toro', '1', '2', 'MnFase Sllo sobrep X2', 'xfgjh', 220, ' 2/0', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `umas`
--

CREATE TABLE `umas` (
  `ITEM` int(11) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `REFERENCIA` varchar(100) NOT NULL,
  `SER` varchar(200) NOT NULL,
  `REF_CORREAS` varchar(200) NOT NULL,
  `BRECKETS` varchar(100) NOT NULL,
  `SEDE` varchar(200) NOT NULL,
  `UBICACION` varchar(200) NOT NULL,
  `VOLTIOS` varchar(200) NOT NULL,
  `HP` varchar(200) NOT NULL,
  `COMPONENTES` varchar(200) NOT NULL,
  `OBSERVACIONES` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `umas`
--

INSERT INTO `umas` (`ITEM`, `NOMBRE`, `REFERENCIA`, `SER`, `REF_CORREAS`, `BRECKETS`, `SEDE`, `UBICACION`, `VOLTIOS`, `HP`, `COMPONENTES`, `OBSERVACIONES`) VALUES
(1, 'q', 'q', 'q', 'q', 'q', '1', '18', 'q', 'q', 'Contador', 'q');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_ADMINISTRADOR`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`ITEM`),
  ADD KEY `FK_AMBIENTE_SEDE` (`RL_COD_SEDE`) USING BTREE;

--
-- Indices de la tabla `chilers`
--
ALTER TABLE `chilers`
  ADD PRIMARY KEY (`NUM_CHILLERS`);

--
-- Indices de la tabla `dist_tab`
--
ALTER TABLE `dist_tab`
  ADD PRIMARY KEY (`Item_detab`) USING BTREE,
  ADD KEY `RL_CODE_TAB` (`RL_CODE_TAB`) USING BTREE;

--
-- Indices de la tabla `enfriamiento`
--
ALTER TABLE `enfriamiento`
  ADD PRIMARY KEY (`ITEM`);

--
-- Indices de la tabla `fancoils`
--
ALTER TABLE `fancoils`
  ADD PRIMARY KEY (`ITEM`);

--
-- Indices de la tabla `lamps`
--
ALTER TABLE `lamps`
  ADD PRIMARY KEY (`ITEM`),
  ADD UNIQUE KEY `NOM_LAMP_2` (`NOM_LAMP`),
  ADD KEY `NOM_LAMP` (`NOM_LAMP`);

--
-- Indices de la tabla `motores`
--
ALTER TABLE `motores`
  ADD PRIMARY KEY (`ITEM`),
  ADD UNIQUE KEY `NOMBRE MOTOR` (`NOM_MOTOR`);

--
-- Indices de la tabla `novechillers`
--
ALTER TABLE `novechillers`
  ADD PRIMARY KEY (`RL_CODE_CHILLERS`);

--
-- Indices de la tabla `noveenfriamiento`
--
ALTER TABLE `noveenfriamiento`
  ADD PRIMARY KEY (`RL_CODE_ENFRIA`);

--
-- Indices de la tabla `novefancoils`
--
ALTER TABLE `novefancoils`
  ADD PRIMARY KEY (`RL_CODE_FANCOILS`);

--
-- Indices de la tabla `novelamp`
--
ALTER TABLE `novelamp`
  ADD PRIMARY KEY (`RL_CODE_LAMP`) USING BTREE;

--
-- Indices de la tabla `novemotor`
--
ALTER TABLE `novemotor`
  ADD PRIMARY KEY (`RL_CODE_MOTOR`);

--
-- Indices de la tabla `noveplanta`
--
ALTER TABLE `noveplanta`
  ADD PRIMARY KEY (`RL_CODE_PLANTA`);

--
-- Indices de la tabla `noveswitches`
--
ALTER TABLE `noveswitches`
  ADD PRIMARY KEY (`RL_CODE_SWITCHES`) USING BTREE;

--
-- Indices de la tabla `novetoma`
--
ALTER TABLE `novetoma`
  ADD PRIMARY KEY (`RL_CODE_TOMA`);

--
-- Indices de la tabla `noveumas`
--
ALTER TABLE `noveumas`
  ADD PRIMARY KEY (`RL_CODE_UMAS`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`NUM_PLANTA`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`NUM_SEDE`);

--
-- Indices de la tabla `switches`
--
ALTER TABLE `switches`
  ADD PRIMARY KEY (`ITEM`);

--
-- Indices de la tabla `tableros`
--
ALTER TABLE `tableros`
  ADD PRIMARY KEY (`NUM_TAB`),
  ADD UNIQUE KEY `Nom_tab_2` (`Nom_tab`),
  ADD KEY `Nom_tab` (`Nom_tab`);

--
-- Indices de la tabla `tomas`
--
ALTER TABLE `tomas`
  ADD PRIMARY KEY (`ITEM`),
  ADD UNIQUE KEY `NOMBRE TOMA` (`NOM_TOMA`) USING HASH;

--
-- Indices de la tabla `umas`
--
ALTER TABLE `umas`
  ADD PRIMARY KEY (`ITEM`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `dist_tab`
--
ALTER TABLE `dist_tab`
  MODIFY `Item_detab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `enfriamiento`
--
ALTER TABLE `enfriamiento`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fancoils`
--
ALTER TABLE `fancoils`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lamps`
--
ALTER TABLE `lamps`
  MODIFY `ITEM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT de la tabla `motores`
--
ALTER TABLE `motores`
  MODIFY `ITEM` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `novechillers`
--
ALTER TABLE `novechillers`
  MODIFY `RL_CODE_CHILLERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `noveenfriamiento`
--
ALTER TABLE `noveenfriamiento`
  MODIFY `RL_CODE_ENFRIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `novefancoils`
--
ALTER TABLE `novefancoils`
  MODIFY `RL_CODE_FANCOILS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `novelamp`
--
ALTER TABLE `novelamp`
  MODIFY `RL_CODE_LAMP` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT de la tabla `novemotor`
--
ALTER TABLE `novemotor`
  MODIFY `RL_CODE_MOTOR` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noveplanta`
--
ALTER TABLE `noveplanta`
  MODIFY `RL_CODE_PLANTA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noveswitches`
--
ALTER TABLE `noveswitches`
  MODIFY `RL_CODE_SWITCHES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `novetoma`
--
ALTER TABLE `novetoma`
  MODIFY `RL_CODE_TOMA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `noveumas`
--
ALTER TABLE `noveumas`
  MODIFY `RL_CODE_UMAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `NUM_PLANTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `NUM_SEDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `switches`
--
ALTER TABLE `switches`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tableros`
--
ALTER TABLE `tableros`
  MODIFY `NUM_TAB` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tomas`
--
ALTER TABLE `tomas`
  MODIFY `ITEM` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `umas`
--
ALTER TABLE `umas`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `ambiente_ibfk_1` FOREIGN KEY (`RL_COD_SEDE`) REFERENCES `sede` (`NUM_SEDE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

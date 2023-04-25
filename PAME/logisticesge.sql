-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2022 a las 20:52:35
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logisticesge`
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
(0, 'a', '123'),
(1, 'Administrador', 'Senaadmin2023'),
(2, 'andres', '12'),
(71214638, 'Oscar Alonso Gonzalez Muñoz', '71214638');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `ITEM` int(11) NOT NULL,
  `NOM_AMBIENTE` varchar(200) NOT NULL,
  `RL_COD_SEDE` int(11) NOT NULL,
  `NUM_PISO` varchar(100) NOT NULL,
  `URL_CALENDAR` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`ITEM`, `NOM_AMBIENTE`, `RL_COD_SEDE`, `NUM_PISO`, `URL_CALENDAR`) VALUES
(1, 'Infraestructura', 1, '3', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coor`
--

CREATE TABLE `coor` (
  `ID_COORD` int(11) NOT NULL,
  `NOMBRE_COORD` varchar(60) NOT NULL,
  `SEDE` int(11) NOT NULL,
  `CONTACTO` varchar(12) NOT NULL,
  `E_MAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coor`
--

INSERT INTO `coor` (`ID_COORD`, `NOMBRE_COORD`, `SEDE`, `CONTACTO`, `E_MAIL`) VALUES
(42088, 'Marta Lucía Isaza Suarez', 1, '42088', 'mizasa@sena.edu.co'),
(42298, 'Amaris Leonellis Ariza Bolaño', 1, '42298', 'aariza@sena.edu.co'),
(42440, 'Claudia Victoria Bohorquez Ortis', 1, '42440', 'cbohorquez@sena.edu.co'),
(42850, 'John Jairo Castro Maldonado', 1, '42850', 'jcastrom@sena.edu.co'),
(21831918, 'MARIA PATRICIA JARAMILLO HENAO', 1, '3007921118', 'mpjaramillo@sena.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentadante`
--

CREATE TABLE `cuentadante` (
  `ID_CUE` int(11) NOT NULL,
  `NOMBRE_CUE` varchar(200) NOT NULL,
  `CONCAT` varchar(100) NOT NULL,
  `CONTAC_CUE` varchar(12) NOT NULL,
  `CORREO` varchar(200) NOT NULL,
  `TIPO` int(2) NOT NULL,
  `COORD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentadante`
--

INSERT INTO `cuentadante` (`ID_CUE`, `NOMBRE_CUE`, `CONCAT`, `CONTAC_CUE`, `CORREO`, `TIPO`, `COORD`) VALUES
(0, 'pedro', '', '45', 'pepe@com.com', 3, 42440),
(3, 'juan', '', '23', 'a@com', 1, 42088),
(9, 'david', '', '98', 'david@com', 5, 42850),
(71214638, 'OSCAR ALONSO GONZALEZ MUÑOZ', '71214638 - OSCAR ALONSO GONZALEZ MUÑOZ', '3502406412', 'oagonzalez@misena.edu.co', 4, 21831918);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento`
--

CREATE TABLE `elemento` (
  `COD_ELEM` int(15) NOT NULL,
  `NOM_ELEM` varchar(200) NOT NULL,
  `CAR_ELEM` varchar(300) NOT NULL,
  `SEDE_ELEM` int(2) NOT NULL,
  `UBIC_ELEM` int(3) NOT NULL,
  `NUM_PLACA` int(10) NOT NULL,
  `CUE` int(11) NOT NULL,
  `CONCAT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elemento`
--

INSERT INTO `elemento` (`COD_ELEM`, `NOM_ELEM`, `CAR_ELEM`, `SEDE_ELEM`, `UBIC_ELEM`, `NUM_PLACA`, `CUE`, `CONCAT`) VALUES
(1, 'Llaves Ascensor#1', ' Ascensor#1', 1, 1, 0, 0, '1-Llaves Ascensor#1'),
(2, 'Llaves Ascensor#2', 'Ascensor#2', 1, 1, 0, 0, '2-Llaves Ascensor#2'),
(3, 'Llaves Cuarto tecnico aire acondicionado sotano', 'Cuarto tecnico aire acondicionado sotano', 1, 1, 0, 0, '3-Llaves Cuarto tecnico aire acondicionado sotano'),
(4, 'Llaves Subestacion energia', 'Subestacion energia', 1, 1, 0, 0, '4-Llaves Subestacion energia'),
(5, 'Llaves Cuarto motobombas', 'Cuarto motobombas', 1, 1, 0, 0, '5-Llaves Cuarto motobombas'),
(6, 'Llaves Subestacion datacenter', ' Subestacion datacenter', 1, 1, 0, 0, '6-Llaves Subestacion datacenter'),
(7, 'Llaves gabines quimicos azules-P3', 'gabines quimicos azules-P3', 1, 1, 0, 0, '7-Llaves gabines quimicos azules-P3'),
(8, 'Llaves gabines quimicos azules-P6', 'gabines quimicos azules-P6', 1, 1, 0, 0, '8-Llaves gabines quimicos azules-P6'),
(9, 'Llaves cabezote camion', 'cabezote camion', 1, 1, 0, 0, '9-Llaves cabezote camion'),
(10, 'Cable Cable HDMI 3M N-1', 'Cable HDMI 3M N-1', 1, 1, 0, 0, '10-Cable Cable HDMI 3M N-1'),
(11, 'Cable Cable HDMI 3M N-2', ' Cable HDMI 3M N-2', 1, 1, 0, 0, '11-Cable Cable HDMI 3M N-2'),
(12, 'Cable Cable HDMI 3M N-3', 'Cable HDMI 3M N-3', 1, 1, 0, 0, '12-Cable Cable HDMI 3M N-3'),
(13, 'ControlTV ControlTV samsung', 'ControlTV samsung', 1, 1, 0, 0, '13-ControlTV ControlTV samsung'),
(15, 'ControlTV ControlTV LG N-2', 'ControlTV LG N-2', 1, 1, 0, 0, '15-ControlTV ControlTV LG N-2'),
(16, 'Microfono Microfono cableado N-1', 'Microfono cableado N-1', 1, 1, 940213243, 0, '16-Microfono Microfono cableado N-1'),
(17, 'Microfono Microfono cableado N-2', 'Microfono cableado N-2', 1, 1, 940213245, 0, '17-Microfono Microfono cableado N-2'),
(18, 'Microfono Microfono cableado N-3', ' Microfono cableado N-3', 1, 1, 940213242, 0, '18-Microfono Microfono cableado N-3'),
(19, 'Cable2x1 Cable 2x1 N-1', 'Cable 2x1 N-1', 1, 1, 0, 0, '19-Cable2x1 Cable 2x1 N-1'),
(20, 'Cable2x1 Cable 2x1 N -2', ' Cable 2x1 N -2', 1, 1, 0, 0, '20-Cable2x1 Cable 2x1 N -2'),
(21, 'Cabina sonido cableado Cabina sonido cableado N-1', ' Cabina sonido cableado N-1', 1, 1, 940213243, 0, '21-Cabina sonido cableado Cabina sonido cableado N-1'),
(22, 'Cabina sonido cableado Cabina sonido cableado N-2', 'Cabina sonido cableado N-2', 1, 1, 940213245, 0, '22-Cabina sonido cableado Cabina sonido cableado N-2'),
(23, 'Cabina sonido cableado Cabina sonido cableado N-3', 'Cabina sonido cableado N-3', 1, 1, 940213242, 0, '23-Cabina sonido cableado Cabina sonido cableado N-3'),
(24, 'VideoVID VideoVID epson N-1', ' VideoVID epson N-1', 1, 1, 2147483647, 0, '24-VideoVID VideoVID epson N-1'),
(25, 'VideoVID VideoVID view sonic N-2', 'VideoVID view sonic N-2', 1, 1, 2147483647, 0, '25-VideoVID VideoVID view sonic N-2'),
(26, 'Extencion Extencion electrica N-1', ' Extencion electrica N-1', 1, 1, 0, 0, '26-Extencion Extencion electrica N-1'),
(27, 'Extencion Extencion electrica N-2', ' Extencion electrica N-2', 1, 1, 0, 0, '27-Extencion Extencion electrica N-2'),
(28, 'Extencion Extencion electrica N-3', 'Extencion electrica N-3', 1, 1, 0, 0, '28-Extencion Extencion electrica N-3'),
(101, 'Llaves Cocina demostrativa', 'Cocina demostrativa', 1, 1, 0, 0, '101-Llaves Cocina demostrativa'),
(102, 'Llaves Auditoria video conferencias', ' Auditoria video conferencias', 1, 1, 0, 0, '102-Llaves Auditoria video conferencias'),
(103, 'Llaves Biblioteca', 'Biblioteca', 1, 1, 0, 0, '103-Llaves Biblioteca'),
(104, 'Llaves Brigada emergencia', ' Brigada emergencia', 1, 1, 0, 0, '104-Llaves Brigada emergencia'),
(105, 'Llaves Sinfusena', 'Sinfusena', 1, 1, 0, 0, '105-Llaves Sinfusena'),
(120, 'Llaves Ba?os hombres', 'Ba?os hombres', 1, 1, 0, 0, '120-Llaves Ba?os hombres'),
(121, 'Llaves Ba?os mujeres', 'Ba?os mujeres', 1, 1, 0, 0, '121-Llaves Ba?os mujeres'),
(130, 'Llaves Cuarto electrico', 'Cuarto electrico', 1, 1, 0, 0, '130-Llaves Cuarto electrico'),
(201, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '201-Llaves Ambiente aprendizaje'),
(202, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '202-Llaves Ambiente aprendizaje'),
(203, 'Llaves Ambiente artes graficas', ' Ambiente artes graficas', 1, 1, 0, 0, '203-Llaves Ambiente artes graficas'),
(204, 'Llaves Taller prepensa e impresi?n digital', ' Taller prepensa e impresi?n digital', 1, 1, 0, 0, '204-Llaves Taller prepensa e impresi?n digital'),
(205, 'Llaves Ambiente sublimacion', 'Ambiente sublimacion', 1, 1, 0, 0, '205-Llaves Ambiente sublimacion'),
(206, 'Llaves Auditorio', 'Auditorio', 1, 1, 0, 0, '206-Llaves Auditorio'),
(207, 'Llaves Simulador autos', 'Simulador autos', 1, 1, 0, 0, '207-Llaves Simulador autos'),
(208, 'Llaves simulador montacargas ', ' simulador montacargas ', 1, 1, 0, 0, '208-Llaves simulador montacargas '),
(220, 'Llaves Ba?os hombres', ' Ba?os hombres', 1, 1, 0, 0, '220-Llaves Ba?os hombres'),
(221, 'Llaves Ba?os mujeres', 'Ba?os mujeres', 1, 1, 0, 0, '221-Llaves Ba?os mujeres'),
(222, 'Llaves Cocineta', ' Cocineta', 1, 1, 0, 0, '222-Llaves Cocineta'),
(223, 'Llaves Bodega impresi?n grafica', ' Bodega impresi?n grafica', 1, 1, 0, 0, '223-Llaves Bodega impresi?n grafica'),
(225, 'Llaves Cuarto tecnico aire acondicionado norte ', 'Cuarto tecnico aire acondicionado norte ', 1, 1, 0, 0, '225-Llaves Cuarto tecnico aire acondicionado norte '),
(301, 'Llaves Fabrica software', 'Fabrica software', 1, 1, 0, 0, '301-Llaves Fabrica software'),
(302, 'Llaves Laboratorio de pruebas', 'Laboratorio de pruebas', 1, 1, 0, 0, '302-Llaves Laboratorio de pruebas'),
(303, 'Llaves Laboratorio contenidos digitales', 'Laboratorio contenidos digitales', 1, 1, 0, 0, '303-Llaves Laboratorio contenidos digitales'),
(304, 'Llaves Administracion educativa', 'Administracion educativa', 1, 1, 0, 0, '304-Llaves Administracion educativa'),
(305, 'Llaves Bienestar al aprendiz', ' Bienestar al aprendiz', 1, 1, 0, 0, '305-Llaves Bienestar al aprendiz'),
(306, 'Llaves Mesa servicio', 'Mesa servicio', 1, 1, 0, 0, '306-Llaves Mesa servicio'),
(307, 'Llaves Infraestructura y logistica', 'Infraestructura y logistica', 1, 1, 0, 0, '307-Llaves Infraestructura y logistica'),
(308, 'Llaves Gestion documental', 'Gestion documental', 1, 1, 0, 0, '308-Llaves Gestion documental'),
(320, 'Llaves Ba?o administrativos hombres', ' Ba?o administrativos hombres', 1, 1, 0, 0, '320-Llaves Ba?o administrativos hombres'),
(321, 'Llaves Ba?o mujeres mujeres', ' Ba?o mujeres mujeres', 1, 1, 0, 0, '321-Llaves Ba?o mujeres mujeres'),
(322, 'Llaves Cocineta', 'Cocineta', 1, 1, 0, 0, '322-Llaves Cocineta'),
(323, 'Llaves Cuarto tecnico aire acondicionado sur', 'Cuarto tecnico aire acondicionado sur', 1, 1, 0, 0, '323-Llaves Cuarto tecnico aire acondicionado sur'),
(325, 'Llaves Cuarto tecnico aire acondicionado norte', ' Cuarto tecnico aire acondicionado norte', 1, 1, 0, 0, '325-Llaves Cuarto tecnico aire acondicionado norte'),
(326, 'Llaves Centro de cableado  IDF9', 'Centro de cableado  IDF9', 1, 1, 0, 0, '326-Llaves Centro de cableado  IDF9'),
(327, 'Llaves Cuarto tecnico aire acondicionado centro', 'Cuarto tecnico aire acondicionado centro', 1, 1, 0, 0, '327-Llaves Cuarto tecnico aire acondicionado centro'),
(401, 'Llaves Archivo', 'Archivo', 1, 1, 0, 0, '401-Llaves Archivo'),
(402, 'Llaves Contrato de aprendizaje', 'Contrato de aprendizaje', 1, 1, 0, 0, '402-Llaves Contrato de aprendizaje'),
(403, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '403-Llaves Ambiente aprendizaje'),
(404, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '404-Llaves Ambiente aprendizaje'),
(405, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '405-Llaves Ambiente aprendizaje'),
(406, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '406-Llaves Ambiente aprendizaje'),
(407, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '407-Llaves Ambiente aprendizaje'),
(408, 'Llaves Ambiente peluqueria', ' Ambiente aprendizaje', 1, 1, 0, 0, '408-Llaves Ambiente peluqueria'),
(409, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '409-Llaves Ambiente aprendizaje'),
(410, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '410-Llaves Ambiente aprendizaje'),
(411, 'Llaves Laboratorio simuladores', 'Laboratorio simuladores', 1, 1, 0, 0, '411-Llaves Laboratorio simuladores'),
(420, 'Llaves Ba?o hombres', 'Ba?o hombres', 1, 1, 0, 0, '420-Llaves Ba?o hombres'),
(421, 'Llaves Ba?o mujeres', ' Ba?o mujeres', 1, 1, 0, 0, '421-Llaves Ba?o mujeres'),
(422, 'Llaves Cocineta', 'Cocineta', 1, 1, 0, 0, '422-Llaves Cocineta'),
(423, 'Llaves Ba?o administrativo', 'Ba?o administrativo', 1, 1, 0, 0, '423-Llaves Ba?o administrativo'),
(424, 'Llaves Cuarto mantenimiento', 'Cuarto mantenimiento', 1, 1, 0, 0, '424-Llaves Cuarto mantenimiento'),
(425, 'Llaves Cuarto tecnico aire acondicionado norte', 'Cuarto tecnico aire acondicionado norte', 1, 1, 0, 0, '425-Llaves Cuarto tecnico aire acondicionado norte'),
(430, 'Llaves Cuarto electrico', 'Cuarto electrico', 1, 1, 0, 0, '430-Llaves Cuarto electrico'),
(440, 'Llaves Terraza norte', 'Terraza norte', 1, 1, 0, 0, '440-Llaves Terraza norte'),
(441, 'Llaves Terraza sur', 'Terraza sur', 1, 1, 0, 0, '441-Llaves Terraza sur'),
(501, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '501-Llaves Ambiente aprendizaje'),
(502, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '502-Llaves Ambiente aprendizaje'),
(503, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '503-Llaves Ambiente aprendizaje'),
(504, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '504-Llaves Ambiente aprendizaje'),
(505, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '505-Llaves Ambiente aprendizaje'),
(506, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '506-Llaves Ambiente aprendizaje'),
(507, 'Llaves Huawei inteligencia artificial', 'Huawei inteligencia artificial', 1, 1, 0, 0, '507-Llaves Huawei inteligencia artificial'),
(508, 'Llaves Huawei datcenter', 'Huawei datcenter', 1, 1, 0, 0, '508-Llaves Huawei datcenter'),
(509, 'Llaves Taller cableado', 'Taller cableado', 1, 1, 0, 0, '509-Llaves Taller cableado'),
(510, 'Llaves  Laboratio informatica forense', 'Laboratio informatica forense', 1, 1, 0, 0, '510-Llaves  Laboratio informatica forense'),
(520, 'Llaves Ba?o hombres', ' Ba?o hombres', 1, 1, 0, 0, '520-Llaves Ba?o hombres'),
(521, 'Llaves Ba?o mujeres', 'Ba?o mujeres', 1, 1, 0, 0, '521-Llaves Ba?o mujeres'),
(522, 'Llaves Cocineta ', 'Cocineta ', 1, 1, 0, 0, '522-Llaves Cocineta '),
(523, 'Llaves Ba?o administravio mujeres', 'Ba?o administravio mujeres', 1, 1, 0, 0, '523-Llaves Ba?o administravio mujeres'),
(524, 'Llaves Ba?o administravio hombres ', ' Ba?o administravio hombres ', 1, 1, 0, 0, '524-Llaves Ba?o administravio hombres '),
(526, 'Llaves Centro cableado IDF 10', ' Centro cableado IDF 10', 1, 1, 0, 0, '526-Llaves Centro cableado IDF 10'),
(530, 'Llaves Cuarto electrico ', 'Cuarto electrico ', 1, 1, 0, 0, '530-Llaves Cuarto electrico '),
(601, 'Llaves Evaluacion certificacion competencias laboral', ' Evaluacion certificacion competencias laboral', 1, 1, 0, 0, '601-Llaves Evaluacion certificacion competencias laboral'),
(602, 'Llaves Ambiente escuela nacional instructores', ' Ambiente escuela nacional instructores', 1, 1, 0, 0, '602-Llaves Ambiente escuela nacional instructores'),
(603, 'Llaves Ambiente escuela nacional instructores', ' Ambiente escuela nacional instructores', 1, 1, 0, 0, '603-Llaves Ambiente escuela nacional instructores'),
(604, 'Llaves Ambiente hoteleria y turismo', ' Ambiente hoteleria y turismo', 1, 1, 0, 0, '604-Llaves Ambiente hoteleria y turismo'),
(605, 'Llaves Ambiente artes graficas', ' Ambiente artes graficas', 1, 1, 0, 0, '605-Llaves Ambiente artes graficas'),
(606, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '606-Llaves Ambiente aprendizaje'),
(607, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '607-Llaves Ambiente aprendizaje'),
(608, 'Llaves Taller de redes y mantenimiento', 'Taller de redes y mantenimiento', 1, 1, 0, 0, '608-Llaves Taller de redes y mantenimiento'),
(609, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '609-Llaves Ambiente aprendizaje'),
(610, 'Llaves Evaluacion y certificacion competencias laboral', 'Evaluacion y certificacion competencias laboral', 1, 1, 0, 0, '610-Llaves Evaluacion y certificacion competencias laboral'),
(620, 'Llaves Ba?o hombres', 'Ba?o hombres', 1, 1, 0, 0, '620-Llaves Ba?o hombres'),
(621, 'Llaves Ba?o mujeres', 'Ba?o mujeres', 1, 1, 0, 0, '621-Llaves Ba?o mujeres'),
(622, 'Llaves Cocineta', ' Cocineta', 1, 1, 0, 0, '622-Llaves Cocineta'),
(623, 'Llaves Ba?o administrativo mujeres', 'Ba?o administrativo mujeres', 1, 1, 0, 0, '623-Llaves Ba?o administrativo mujeres'),
(624, 'Llaves Ba?o administrativo hombres', 'Ba?o administrativo hombres', 1, 1, 0, 0, '624-Llaves Ba?o administrativo hombres'),
(630, 'Llaves Cuarto electrico', 'Cuarto electrico', 1, 1, 0, 0, '630-Llaves Cuarto electrico'),
(701, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '701-Llaves Ambiente aprendizaje'),
(702, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '702-Llaves Ambiente aprendizaje'),
(703, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '703-Llaves Ambiente aprendizaje'),
(704, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '704-Llaves Ambiente aprendizaje'),
(705, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '705-Llaves Ambiente aprendizaje'),
(706, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '706-Llaves Ambiente aprendizaje'),
(707, 'Llaves Sala instructores', 'Sala instructores', 1, 1, 0, 0, '707-Llaves Sala instructores'),
(720, 'Llaves Ba?o hombres ', ' Ba?o hombres ', 1, 1, 0, 0, '720-Llaves Ba?o hombres '),
(721, 'Llaves Ba?o mujeres', 'Ba?o mujeres', 1, 1, 0, 0, '721-Llaves Ba?o mujeres'),
(722, 'Llaves Cocineta', 'Cocineta', 1, 1, 0, 0, '722-Llaves Cocineta'),
(723, 'Llaves Cuarto tecnico aire acondicionado sur', ' Cuarto tecnico aire acondicionado sur', 1, 1, 0, 0, '723-Llaves Cuarto tecnico aire acondicionado sur'),
(725, 'Llaves Cuarto tecnico aire acpondicionado norte ', 'Cuarto tecnico aire acpondicionado norte ', 1, 1, 0, 0, '725-Llaves Cuarto tecnico aire acpondicionado norte '),
(726, 'Llaves Centro de cableado IDF11', ' Centro de cableado IDF11', 1, 1, 0, 0, '726-Llaves Centro de cableado IDF11'),
(740, 'Llaves Terraza norte', 'Terraza norte', 1, 1, 0, 0, '740-Llaves Terraza norte'),
(741, 'Llaves Terraza sur', 'Terraza sur', 1, 1, 0, 0, '741-Llaves Terraza sur'),
(801, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '801-Llaves Ambiente aprendizaje'),
(802, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '802-Llaves Ambiente aprendizaje'),
(803, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '803-Llaves Ambiente aprendizaje'),
(804, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '804-Llaves Ambiente aprendizaje'),
(805, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '805-Llaves Ambiente aprendizaje'),
(806, 'Llaves Ambiente aprendizaje', 'Ambiente aprendizaje', 1, 1, 0, 0, '806-Llaves Ambiente aprendizaje'),
(807, 'Llaves Sala instructores', ' Sala instructores', 1, 1, 0, 0, '807-Llaves Sala instructores'),
(820, 'Llaves Ba?o hombres', ' Ba?o hombres', 1, 1, 0, 0, '820-Llaves Ba?o hombres'),
(821, 'Llaves Ba?o muejres', 'Ba?o muejres', 1, 1, 0, 0, '821-Llaves Ba?o muejres'),
(822, 'Llaves Cocineta', 'Cocineta', 1, 1, 0, 0, '822-Llaves Cocineta'),
(823, 'Llaves Cuarto tecnico aire acondicionado sur', ' Cuarto tecnico aire acondicionado sur', 1, 1, 0, 0, '823-Llaves Cuarto tecnico aire acondicionado sur'),
(827, 'Llaves Cuarto tecnico aire acondicionado centro', 'Cuarto tecnico aire acondicionado centro', 1, 1, 0, 0, '827-Llaves Cuarto tecnico aire acondicionado centro'),
(901, 'Llaves Area administrativa', ' Area administrativa', 1, 1, 0, 0, '901-Llaves Area administrativa'),
(902, 'Llaves Coordinacion academica', 'Coordinacion academica', 1, 1, 0, 0, '902-Llaves Coordinacion academica'),
(922, 'Llaves Cocineta', ' Cocineta', 1, 1, 0, 0, '922-Llaves Cocineta'),
(923, 'Llaves Ba?o administrativo mujeres', 'Ba?o administrativo mujeres', 1, 1, 0, 0, '923-Llaves Ba?o administrativo mujeres'),
(924, 'Llaves Ba?o administrativo hombres', 'Ba?o administrativo hombres', 1, 1, 0, 0, '924-Llaves Ba?o administrativo hombres'),
(925, 'Llaves Cuarto tecnico aire acondicionado norte ', 'Cuarto tecnico aire acondicionado norte ', 1, 1, 0, 0, '925-Llaves Cuarto tecnico aire acondicionado norte '),
(926, 'Llaves Centro de cableado IDF12', ' Centro de cableado IDF12', 1, 1, 0, 0, '926-Llaves Centro de cableado IDF12'),
(1001, 'Llaves  Llaves ambiente', ' Ambiente aprendizaje', 1, 1, 0, 0, '1001 - Llaves  Llaves ambiente'),
(1002, 'Llaves Taller de iluminacion', ' Taller de grabaci?n y producci?n ', 1, 1, 0, 0, '1002-Llaves Taller de iluminacion'),
(1003, 'Llaves Ambiente de aprendizaje', 'Ambiente de aprendizaje', 1, 1, 0, 0, '1003-Llaves Ambiente de aprendizaje'),
(1004, 'Llaves Ambiente aprendizaje', 'Ambiente de aprendizaje', 1, 1, 0, 0, '1004-Llaves Ambiente aprendizaje'),
(1005, 'Llaves Ambiente aprendizaje', 'Ambiente de aprendizaje', 1, 1, 0, 0, '1005-Llaves Ambiente aprendizaje'),
(1006, 'Llaves Taller grabacion y edici?n ', 'Taller grabacion y edici?n ', 1, 1, 0, 0, '1006-Llaves Taller grabacion y edici?n '),
(1007, 'Llaves Ambiente aprendizaje', ' Ambiente aprendizaje', 1, 1, 0, 0, '1007-Llaves Ambiente aprendizaje'),
(1008, 'Llaves Bodega produccion audiovisual', 'Bodega produccion audiovisual', 1, 1, 0, 0, '1008-Llaves Bodega produccion audiovisual'),
(1020, 'Llaves Ba?os hombres', 'Ba?os hombres', 1, 1, 0, 0, '1020-Llaves Ba?os hombres'),
(1021, 'Llaves Ba?os mujeres', 'Ba?os mujeres', 1, 1, 0, 0, '1021-Llaves Ba?os mujeres'),
(1022, 'Llaves Cocineta', 'Cocineta', 1, 1, 0, 0, '1022-Llaves Cocineta'),
(1023, 'Llaves Cuarto tecnico aire acondicionado lado sur', 'Cuarto tecnico aire acondicionado lado sur', 1, 1, 0, 0, '1023-Llaves Cuarto tecnico aire acondicionado lado sur'),
(1027, 'Llaves Cuarto tecnico aire acondicionado centro', 'Cuarto tecnico aire acondicionado centro', 1, 1, 0, 0, '1027-Llaves Cuarto tecnico aire acondicionado centro'),
(1050, 'Llaves Terraza', ' Terraza', 1, 1, 0, 0, '1050-Llaves Terraza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE `historico` (
  `COD_REG` int(12) NOT NULL,
  `ID_USU` int(15) NOT NULL,
  `FECHA_ENTRE` date NOT NULL,
  `HORA_ENTRE` time NOT NULL,
  `HORA_ADDELEM` time NOT NULL,
  `HORA_CHANGUSU` time NOT NULL,
  `FECHA_DEV` date NOT NULL,
  `HORA_DEV` time NOT NULL,
  `OBS` varchar(300) NOT NULL,
  `ELEM_` int(11) NOT NULL,
  `ELEM_1` int(11) NOT NULL,
  `ELEM_2` int(11) NOT NULL,
  `ELEM_3` int(11) NOT NULL,
  `ELEM_4` int(11) NOT NULL,
  `ELEM_5` int(11) NOT NULL,
  `ELEM_6` int(11) NOT NULL,
  `ELEM_7` int(11) NOT NULL,
  `ELEM_8` int(11) NOT NULL,
  `ELEM_9` int(11) NOT NULL,
  `ESTADO` varchar(300) NOT NULL,
  `OPER` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historico`
--

INSERT INTO `historico` (`COD_REG`, `ID_USU`, `FECHA_ENTRE`, `HORA_ENTRE`, `HORA_ADDELEM`, `HORA_CHANGUSU`, `FECHA_DEV`, `HORA_DEV`, `OBS`, `ELEM_`, `ELEM_1`, `ELEM_2`, `ELEM_3`, `ELEM_4`, `ELEM_5`, `ELEM_6`, `ELEM_7`, `ELEM_8`, `ELEM_9`, `ESTADO`, `OPER`) VALUES
(1, 71214638, '2022-12-01', '08:29:31', '08:30:10', '00:00:00', '2022-12-01', '08:31:27', 'sdagadg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Devuelto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `ID_CUE` int(11) NOT NULL,
  `NOMBRE_CUE` varchar(200) NOT NULL,
  `PASSWORD_CUE` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CORREO` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SEDE_CUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`ID_CUE`, `NOMBRE_CUE`, `PASSWORD_CUE`, `CORREO`, `SEDE_CUE`) VALUES
(1040, 'andres', '1040', 'andres@com.com', 1),
(71214638, 'OSCAR GONZALEZ', '71214638', 'oagonzalez@misena.edu.co', 1),
(1000413307, 'Valentina Betancur', '1000413307', 'valentinabeta345@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `NUM_PREST` int(10) NOT NULL,
  `ID_USU` int(15) NOT NULL,
  `FECHA_ENTRE` date NOT NULL,
  `HORA_ENTRE` time NOT NULL,
  `NOVEDAD` varchar(20) NOT NULL,
  `HORA_ADDELEM` time NOT NULL,
  `HORA_CHANGUSU` time NOT NULL,
  `ELEM_` int(11) NOT NULL,
  `ELEM_1` int(11) NOT NULL,
  `ELEM_2` int(11) NOT NULL,
  `ELEM_3` int(11) NOT NULL,
  `ELEM_4` int(11) NOT NULL,
  `ELEM_5` int(11) NOT NULL,
  `ELEM_6` int(11) NOT NULL,
  `ELEM_7` int(11) NOT NULL,
  `ELEM_8` int(11) NOT NULL,
  `ELEM_9` int(11) NOT NULL,
  `FECHA_DEV` date NOT NULL,
  `HORA_DEV` time NOT NULL,
  `OBS` varchar(300) NOT NULL,
  `OPER` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`NUM_PREST`, `ID_USU`, `FECHA_ENTRE`, `HORA_ENTRE`, `NOVEDAD`, `HORA_ADDELEM`, `HORA_CHANGUSU`, `ELEM_`, `ELEM_1`, `ELEM_2`, `ELEM_3`, `ELEM_4`, `ELEM_5`, `ELEM_6`, `ELEM_7`, `ELEM_8`, `ELEM_9`, `FECHA_DEV`, `HORA_DEV`, `OBS`, `OPER`) VALUES
(226, 71214638, '2022-12-09', '14:35:02', 'Préstamo', '00:00:00', '00:00:00', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', '00:00:00', '', ''),
(228, 3, '2022-12-09', '14:37:23', 'Préstamo', '00:00:00', '00:00:00', 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestemp`
--

CREATE TABLE `prestemp` (
  `NUM_PREST` int(10) NOT NULL,
  `ID_USU` varchar(12) NOT NULL,
  `NOVEDAD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestempamb`
--

CREATE TABLE `prestempamb` (
  `IDTEMP` int(1) NOT NULL,
  `URL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestempamb`
--

INSERT INTO `prestempamb` (`IDTEMP`, `URL`) VALUES
(1, '#');

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
(3, 'Buenos Aires'),
(6, 'Ciudadela Universitaria'),
(1, 'Edificio Central Torre Norte'),
(7, 'Edificio Central Torre Sur'),
(4, 'Interactuar'),
(2, 'Tecnoparque'),
(5, 'U de Colombia');

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
  ADD UNIQUE KEY `NOM_AMBIENTE` (`NOM_AMBIENTE`),
  ADD KEY `FK_AMBIENTE_SEDE` (`RL_COD_SEDE`) USING BTREE;

--
-- Indices de la tabla `coor`
--
ALTER TABLE `coor`
  ADD UNIQUE KEY `ID_COORD` (`ID_COORD`);

--
-- Indices de la tabla `cuentadante`
--
ALTER TABLE `cuentadante`
  ADD PRIMARY KEY (`ID_CUE`);

--
-- Indices de la tabla `elemento`
--
ALTER TABLE `elemento`
  ADD UNIQUE KEY `COD_ELEM` (`COD_ELEM`);

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`COD_REG`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`ID_CUE`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`NUM_PREST`),
  ADD UNIQUE KEY `ID_USU` (`ID_USU`);

--
-- Indices de la tabla `prestemp`
--
ALTER TABLE `prestemp`
  ADD UNIQUE KEY `NUM_PREST` (`NUM_PREST`);

--
-- Indices de la tabla `prestempamb`
--
ALTER TABLE `prestempamb`
  ADD PRIMARY KEY (`IDTEMP`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`NUM_SEDE`),
  ADD UNIQUE KEY `NOM_SEDE` (`NOM_SEDE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historico`
--
ALTER TABLE `historico`
  MODIFY `COD_REG` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `NUM_PREST` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `prestemp`
--
ALTER TABLE `prestemp`
  MODIFY `NUM_PREST` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestempamb`
--
ALTER TABLE `prestempamb`
  MODIFY `IDTEMP` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `NUM_SEDE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

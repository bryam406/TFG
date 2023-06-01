-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-06-2023 a las 06:34:25
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa_compra`
--

DROP TABLE IF EXISTS `bolsa_compra`;
CREATE TABLE IF NOT EXISTS `bolsa_compra` (
  `ID_usuario` int NOT NULL,
  `ID_Vehiculo` int NOT NULL,
  `ID` int DEFAULT NULL,
  `id_garaje` int DEFAULT NULL,
  `cantidad` int NOT NULL,
  `Total` int NOT NULL,
  `factura` varchar(80) NOT NULL,
  PRIMARY KEY (`ID_usuario`,`ID_Vehiculo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `bolsa_compra`
--

INSERT INTO `bolsa_compra` (`ID_usuario`, `ID_Vehiculo`, `ID`, `id_garaje`, `cantidad`, `Total`, `factura`) VALUES
(1, 3, NULL, NULL, 1, 45000, 'PD0702094789427'),
(5, 1, NULL, NULL, 2, 600000, 'PD070130288940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empledos`
--

DROP TABLE IF EXISTS `empledos`;
CREATE TABLE IF NOT EXISTS `empledos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `DNI` varchar(20) DEFAULT NULL,
  `NombreUsuario` varchar(150) DEFAULT NULL,
  `Apellido` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `ContrasenaUsuario` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Cumpleanos` date DEFAULT NULL,
  `imagen_perfil` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `DNI` (`DNI`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `empledos`
--

INSERT INTO `empledos` (`id`, `DNI`, `NombreUsuario`, `Apellido`, `ContrasenaUsuario`, `Email`, `Cumpleanos`, `imagen_perfil`) VALUES
(1, '51277245X', 'Bryam', 'Amaya', '63a9f0ea7bb98050796b649e85481845', 'bryam.amaya@motor.com', '2001-10-02', 'imagen_profile_51277245X.png'),
(2, '512734545X', 'Paola', 'Marin', '63a9f0ea7bb98050796b649e85481845', 'Paola.marin@motors.com', '1999-03-19', NULL),
(3, '5127353415X', 'Diego', 'Andres', '63a9f0ea7bb98050796b649e85481845', 'Dieg.Andres@motors.com', '1998-03-19', NULL),
(4, '512735235X', 'Mariano', 'Abel', '63a9f0ea7bb98050796b649e85481845', 'Mariano.Abel@motors.com', '1988-03-19', NULL),
(6, '51277345x', 'bryam', 'br', '63a9f0ea7bb98050796b649e85481845', 'bryam@mald.com', '2023-03-09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `facturas` varchar(30) DEFAULT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `facturas` (`facturas`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `facturas`, `total`) VALUES
(1, 'PD0701816485426', 6600000),
(2, 'PD0701660894246', 6900000),
(3, 'PD070201276855', 6300000),
(4, 'PD070520156309', 6300000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Marca` varchar(20) DEFAULT NULL,
  `Matricula` varchar(20) DEFAULT NULL,
  `Modelo` varchar(20) DEFAULT NULL,
  `Fecha_matriculacion` date DEFAULT NULL,
  `Precio` int DEFAULT NULL,
  `Stock` int DEFAULT NULL,
  `Carpeta_Img` varchar(60) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Matricula` (`Matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `Marca`, `Matricula`, `Modelo`, `Fecha_matriculacion`, `Precio`, `Stock`, `Carpeta_Img`) VALUES
(1, 'Lamborghini', 'BDR 4597', 'LP720-4', '2023-04-21', 300000, 28, 'LP720-4'),
(2, 'Bugatti', 'BDR 4596', 'Chiron', '2023-04-05', 6000000, 35, 'Chiron'),
(3, 'Nissan', 'BDR 4598', 'GTR - 35', '2023-04-05', 45000, 40, 'GTR - 35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mi_garaje`
--

DROP TABLE IF EXISTS `mi_garaje`;
CREATE TABLE IF NOT EXISTS `mi_garaje` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `id_vehiculo` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cantidad` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `mi_garaje`
--

INSERT INTO `mi_garaje` (`id`, `id_usuario`, `id_vehiculo`, `cantidad`) VALUES
(1, '1', '3', 3),
(2, '1', '3', 3),
(3, '1', '3', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `DNI` varchar(20) DEFAULT NULL,
  `Contrasena` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Nombre` varchar(10) DEFAULT NULL,
  `Primer_Apellido` varchar(10) DEFAULT NULL,
  `Segundo_Apellido` varchar(10) DEFAULT NULL,
  `Direccion` varchar(40) DEFAULT NULL,
  `Pais` varchar(20) DEFAULT NULL,
  `Codig_postal` varchar(20) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Corre_electronico` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `DNI` (`DNI`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `DNI`, `Contrasena`, `Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Direccion`, `Pais`, `Codig_postal`, `Telefono`, `Corre_electronico`) VALUES
(1, '51277245X', '63a9f0ea7bb98050796b649e85481845', 'Bryam ', 'Amaya', 'Pullaguari', 'Abolengo 33 1 b', 'Madird', '28025', 695900218, 'bryamdani@motos.com'),
(5, '511111X', 'cdafd264094f1ec420ca689dd41fd138', '511111X', '511111X', '511111X', '511111X', '511111X', '511111X', 511111, '511111X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosrandom`
--

DROP TABLE IF EXISTS `usuariosrandom`;
CREATE TABLE IF NOT EXISTS `usuariosrandom` (
  `gender` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(2) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuariosrandom`
--

INSERT INTO `usuariosrandom` (`gender`, `name`, `email`, `location`) VALUES
('male', 'Rogerio', 'ro', 'Caurio de Guadalupe '),
('female', 'Shanaya', 'sh', 'Ozhukarai'),
('female', 'Marina', 'ma', 'Novi Bečej'),
('female', 'Marija', 'ma', 'Kula'),
('male', 'Krilach', 'kr', 'Avdiyivka'),
('female', 'Viti', 'vi', 'Mathura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_ventas` int NOT NULL AUTO_INCREMENT,
  `vehiculoID` int DEFAULT NULL,
  `empleadoID` int DEFAULT NULL,
  `Fecha_Venta` date NOT NULL,
  PRIMARY KEY (`id_ventas`),
  KEY `ventasID` (`empleadoID`),
  KEY `vehiculoID` (`vehiculoID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `vehiculoID`, `empleadoID`, `Fecha_Venta`) VALUES
(1, 1, 2, '2023-05-10'),
(2, 2, 1, '2023-05-16'),
(3, 3, 1, '2023-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_online`
--

DROP TABLE IF EXISTS `ventas_online`;
CREATE TABLE IF NOT EXISTS `ventas_online` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_vehiculo` int DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `total` int NOT NULL,
  `factura` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `ventas_online`
--

INSERT INTO `ventas_online` (`id`, `id_usuario`, `id_vehiculo`, `cantidad`, `total`, `factura`) VALUES
(1, 1, 1, 2, 600000, 'PD0701816485426'),
(2, 1, 2, 1, 6000000, 'PD0701816485426'),
(3, 1, 1, 3, 900000, 'PD0701660894246'),
(4, 1, 2, 1, 6000000, 'PD0701660894246'),
(5, 0, 1, 1, 300000, 'PD070201276855'),
(6, 0, 2, 1, 6000000, 'PD070201276855'),
(7, 1, 1, 1, 300000, 'PD070520156309'),
(8, 1, 2, 1, 6000000, 'PD070520156309');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

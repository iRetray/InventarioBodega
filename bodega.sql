-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2019 at 09:56 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bodega`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodegamuebles`
--

DROP TABLE IF EXISTS `bodegamuebles`;
CREATE TABLE IF NOT EXISTS `bodegamuebles` (
  `producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bodegaprincipal`
--

DROP TABLE IF EXISTS `bodegaprincipal`;
CREATE TABLE IF NOT EXISTS `bodegaprincipal` (
  `producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bodegatalleres`
--

DROP TABLE IF EXISTS `bodegatalleres`;
CREATE TABLE IF NOT EXISTS `bodegatalleres` (
  `producto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `usuario`, `clave`, `tipoUsuario`) VALUES
('Jose Diaz', 'admin', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

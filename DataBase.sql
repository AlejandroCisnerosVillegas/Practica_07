-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 20:04:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `general`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poject_20_login`
--

CREATE TABLE `poject_20_login` (
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `poject_20_login`
--

INSERT INTO `poject_20_login` (`usuario`, `pass`, `rol`) VALUES
('Usuario-Inventado01', '1234', 'Usuario'),
('Usuario-Inventado02', '1234', 'Usuario'),
('Usuario-Inventado03', '1234', 'Usuario'),
('Usuario-Inventado04', '1234', 'Usuario'),
('Administrador-Inventado01', '4321', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

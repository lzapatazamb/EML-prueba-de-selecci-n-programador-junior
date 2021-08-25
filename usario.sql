-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2021 a las 11:28:58
-- Versión del servidor: 10.4.11-MariaDB-log
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuariosnoticia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usario`
--

CREATE TABLE `usario` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Telefono` int(255) NOT NULL,
  `FechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usario`
--

INSERT INTO `usario` (`id`, `email`, `pass`, `Nombre`, `Telefono`, `FechaRegistro`) VALUES
(45, 'alberto@gmail.com', '5645fsasq', 'Alberto Matador', 7454588, '2021-08-24'),
(46, 'root1@hotmail.es', 'adsfetfw', 'Benito Suarez', 514654, '2021-08-24'),
(47, 'root25@hotmail.com', 'sfdsfwdqw2222', 'Daniel Prieto', 56456456, '2021-08-25'),
(48, 'javier27@hotmail.com', '789654132aa', 'Javier Calderon', 8512223, '2021-08-24'),
(49, '	ingrid@akj.com', '8756sadContraseña', 'Ingrid camacho', 11111, '2021-08-24'),
(50, 'ar23ayuqe@hotmail.com', '548799999a', 'Arturo Sanchez', 7895412, '2021-08-25'),
(52, 'laurazapata.98@hotmail.com', 'Contraseña123', 'Laura Zapata', 4779903, '2021-08-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usario`
--
ALTER TABLE `usario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usario`
--
ALTER TABLE `usario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

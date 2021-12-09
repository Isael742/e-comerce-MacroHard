-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 22:39:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `correoCliente` varchar(30) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `cantidad` float DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  `total` float NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id` int(11) NOT NULL,
  `correoCliente` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `costo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`id`, `correoCliente`, `Producto`, `costo`, `cantidad`, `fecha`) VALUES
(1, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:08:33'),
(2, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:12:47'),
(3, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:19:17'),
(4, 'xavier123@gmail.com', 'Celular Xiaomi 64 GB', 6000, 1, '2021-12-08 21:19:23'),
(6, 'xavier123@gmail.com', 'Adaptador USB a tipo C', 100, 1, '2021-12-08 21:21:58'),
(7, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:22:21'),
(8, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:23:21'),
(9, 'xavier123@gmail.com', 'Xbox Series S', 8000, 1, '2021-12-08 21:24:07'),
(10, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:25:34'),
(11, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:26:15'),
(12, 'xavier123@gmail.com', 'Tanque Sovietico de la UNAM Co', 6000, 1, '2021-12-08 21:26:25'),
(13, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:29:16'),
(14, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:29:39'),
(15, 'xavier123@gmail.com', 'Proyector 1500 lumens', 60000, 1, '2021-12-08 21:30:02'),
(16, 'xavier123@gmail.com', 'Celular Xiaomi 64 GB', 6000, 1, '2021-12-08 21:44:22'),
(17, 'xavier123@gmail.com', 'Silla rreiser 850', 13999, 1, '2021-12-08 21:58:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contrasena` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasena`) VALUES
(5, 'kalli', 'kalli742@gmail.com', '$2y$10$qX4CpQbLGh8EJiP8wXvfyuMuoCXqmjDOeeGGULzeohMtQlIC3gvjq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2019 a las 01:04:15
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbpizzeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `CI` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `CI`, `Nombre`) VALUES
(2, '0', 'Juan David Martinez Campos'),
(3, '8948431', 'Guadalupe Escobar Jimenez '),
(4, '1256197', 'Carmen Julia Gutierrez Illanes'),
(5, '7569896', 'Dennis Hidalgo Jaimes'),
(6, '4536127', 'Karen Pacheco Sarmiento'),
(7, '7895643', 'Sandro Troncoso Kaisler'),
(8, '7269548', 'Fernanda  Hilda Suxo Fernandez'),
(9, '1651987', 'Camila Perez'),
(10, '4863021', 'Pepino Cortez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `IdDetalle` int(11) NOT NULL,
  `Descuento` double(3,2) NOT NULL,
  `SubTotal` decimal(11,2) DEFAULT NULL,
  `Pedido_NumPedido` int(11) NOT NULL,
  `Cliente_IdCliente` int(11) NOT NULL,
  `Pizza_Cod_Pz` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ingrediente_idIngrediente` varchar(12) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`IdDetalle`, `Descuento`, `SubTotal`, `Pedido_NumPedido`, `Cliente_IdCliente`, `Pizza_Cod_Pz`, `Ingrediente_idIngrediente`) VALUES
(1, 0.00, '70.00', 1, 8, '5454', '761'),
(2, 0.00, '70.00', 1, 8, '2258', '919'),
(3, 0.10, '60.00', 2, 10, '1245', '225');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_empleado` int(11) NOT NULL,
  `CI` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Cargo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`cod_empleado`, `CI`, `Nombre`, `Cargo`, `id`) VALUES
(2, '7896042', 'Carlos Enrique Bustamante Aranibar', 'Cocinero Turno tarde ', 3),
(3, '7845692', 'Daniel Torrez Avellana', 'Cajero', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE `ingrediente` (
  `idIngrediente` varchar(12) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Imagen` varchar(45) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` double DEFAULT NULL,
  `Pizza_Cod_Pz` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `ingrediente`
--

INSERT INTO `ingrediente` (`idIngrediente`, `Nombre`, `Imagen`, `Cantidad`, `Precio`, `Pizza_Cod_Pz`) VALUES
('1564', 'Jamon Serrano', '34.jpg', 0, 22.6, '5454'),
('225', 'Queso Mozzarella', '1.jpg', 500, 8, '5498'),
('363', 'Pimientos', '2.jpg', 60, 2, '6899'),
('464', 'Oregano', '5.jpg', 100, 0.5, '1245'),
('761', 'Pepperoni', '28(1).jpg', 200, 6, '1245'),
('849', 'cebolla', '10.jpg', 40, 3, '168'),
('919', 'Tocino', '7.jpg', 60, 6, '2258');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('DivinoSapori@gmail.com', 'c131bfa710ff4f86fe29c8c0c8c16a913a6be17d01ef2b0c5a8731d783f9e7b1', '2019-11-12 02:13:30'),
('pzdivinosapori@gmail.com', 'fdd53aa0ef9746a448a0a255373b7c394285d1457540d0ea9cc70b6c9bc2e869', '2019-11-12 02:32:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `NumPedido` int(11) NOT NULL,
  `Tam_Pizza` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Total` decimal(11,2) DEFAULT NULL,
  `Cliente_IdCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`NumPedido`, `Tam_Pizza`, `Fecha`, `Total`, `Cliente_IdCliente`) VALUES
(1, 'Mediano', '2019-12-10', '70.00', 8),
(2, 'Pequeño', '2019-12-10', '60.00', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizza`
--

CREATE TABLE `pizza` (
  `Cod_Pz` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PNombre` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Precio` decimal(11,2) DEFAULT NULL,
  `Descripcion` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Existencias` int(11) DEFAULT NULL,
  `Imagen` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pizza`
--

INSERT INTO `pizza` (`Cod_Pz`, `PNombre`, `Precio`, `Descripcion`, `Existencias`, `Imagen`, `estado`) VALUES
('1245', 'Pizza Pepperoni Lovers', '75.00', 'Salsa de Tomate, Queso 100% Mozzarella, Doble Pepperoni, Extra Mozzarella y Orégano', 17, 'pepperoni-lovers.jpg', 'Activo'),
('1564', 'Pizza Caribeña', '75.50', 'Oregano queso ', 80, 'caribena.jpg', 'Inactivo'),
('168', 'Pizza suprema', '70.00', 'Salsa de Tomate, Queso 100% Mozzarella, Ternera, Pepperoni, Cebolla Roja, Champiñones, Pimiento y Orégano', 20, 'suprema.jpg', 'Activo'),
('2258', 'Pizza Bacon Lovers', '70.80', 'Salsa de Tomate, Queso 100% Mozzarella, Doble Bacon, Extra Mozzarella y Orégano', 20, 'bacon-lovers.jpg', 'Activo'),
('5454', 'Pizza Clásica', '68.50', 'Salsa de Tomate, Queso 100% Mozzarella, Jamón, Bacon, Champiñones, Extra Mozzarella  y Orégano', 18, 'clasica.jpg', 'Activo'),
('5498', 'Pizza Cheeseham', '75.50', 'Salsa de Tomate, Queso 100% Mozzarella, Doble Jamón, Extra Mozzarella y Orégano', 15, 'cheeseham.jpg', 'Activo'),
('6899', 'Pizza Veggie Lovers', '60.00', 'Salsa de Tomate, Queso 100% Mozzarella, Cebolla Roja, Maíz, Mezcla de Pimientos, Champiñones Frescos, Tomate Natural y Orégano', 25, 'veggie-lovers.jpg', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Divino Sapori', 'pzdivinosapori@gmail.com', '$2y$10$IPpeujQk4IiQ1Kkjfpf09ee8kVxXvb/n7.WT8TnD.IspGUvMeawXa', 'hIfmQ8MvthQlZQBoYUsBec8hBULTyTZREKullNipOTfg0Q1EfdRleenCsqSh', '2019-11-12 02:20:21', '2019-12-15 00:02:18'),
(3, 'Empleado Pizzeria', 'EmpleadoDS@hotmail.com', '$2y$10$T695UIDl7.sOAOzvR6912eRWEXmERtZTzUYCEP4VmNHu7Fa2CeNUu', 'jqiiZT6g6QbApbI6Hni4o9BJVNB3wJ9lu1HZ7CvBcOADpvQZNVBl5RBSTdaR', '2019-11-21 03:20:17', '2019-11-24 20:24:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`IdDetalle`),
  ADD KEY `fk_Detalle_Pedido1` (`Pedido_NumPedido`),
  ADD KEY `fk_Detalle_Cliente1` (`Cliente_IdCliente`),
  ADD KEY `fk_Detalle_Pizza1` (`Pizza_Cod_Pz`),
  ADD KEY `fk_Detalle_Ingrediente1` (`Ingrediente_idIngrediente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cod_empleado`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`idIngrediente`),
  ADD KEY `fk_Ingrediente_Pizza1` (`Pizza_Cod_Pz`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`NumPedido`),
  ADD KEY `fk_Pedido_Cliente1` (`Cliente_IdCliente`);

--
-- Indices de la tabla `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`Cod_Pz`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `NumPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_Detalle_Cliente1` FOREIGN KEY (`Cliente_IdCliente`) REFERENCES `cliente` (`IdCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Ingrediente1` FOREIGN KEY (`Ingrediente_idIngrediente`) REFERENCES `ingrediente` (`idIngrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Pedido1` FOREIGN KEY (`Pedido_NumPedido`) REFERENCES `pedido` (`NumPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Detalle_Pizza1` FOREIGN KEY (`Pizza_Cod_Pz`) REFERENCES `pizza` (`Cod_Pz`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD CONSTRAINT `fk_Ingrediente_Pizza1` FOREIGN KEY (`Pizza_Cod_Pz`) REFERENCES `pizza` (`Cod_Pz`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Cliente1` FOREIGN KEY (`Cliente_IdCliente`) REFERENCES `cliente` (`IdCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

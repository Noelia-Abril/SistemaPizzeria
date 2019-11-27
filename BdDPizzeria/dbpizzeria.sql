-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 19:09:35
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `IdDetalle` int(11) NOT NULL,
  `Total` decimal(11,2) DEFAULT NULL,
  `Pedido_NumPedido` int(11) NOT NULL,
  `Cliente_IdCliente` int(11) NOT NULL,
  `Pizza_Cod_Pz` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Ingrediente_idIngrediente` varchar(12) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
('464', 'pimienta', '5.jpg', 64, 1.5, '168'),
('78', 'bacon', NULL, 0, 7, '168'),
('849', 'cebolla', '10.jpg', 40, 3, '168');

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
  `Subtotal` decimal(11,2) DEFAULT NULL,
  `Cliente_IdCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
('168', 'Pizza suprema', '70.00', 'pizza de queso cebolla y oregano', 70, 'super-suprema.jpg', 'Activo');

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
(2, 'Divino Sapori', 'pzdivinosapori@gmail.com', '$2y$10$IPpeujQk4IiQ1Kkjfpf09ee8kVxXvb/n7.WT8TnD.IspGUvMeawXa', '7NVvB21jyaBe7uJZuKwSvkfkuI1aakaTOjqprEyvb98HCDvuCmfEkqlm4ZWo', '2019-11-12 02:20:21', '2019-11-12 02:58:18');

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
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `IdDetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `NumPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

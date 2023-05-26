-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2023 a las 14:13:14
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barbero`
--

CREATE TABLE `barbero` (
  `id_barbero` int NOT NULL,
  `nombre_barber` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido_barber` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `barbero`
--

INSERT INTO `barbero` (`id_barbero`, `nombre_barber`, `apellido_barber`) VALUES
(1, 'Carlos', 'Herrera'),
(2, 'Keneth', 'Conde'),
(12, 'Rojo', 'Velasquez'),
(13, 'Pablo', 'Herrera'),
(14, 'Ramon', 'Velez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `usuario_id` int NOT NULL,
  `corte_id` int NOT NULL,
  `estatus` varchar(20) NOT NULL DEFAULT 'pendiente',
  `barbero_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `fecha`, `hora`, `mensaje`, `usuario_id`, `corte_id`, `estatus`, `barbero_id`) VALUES
(79, '2023-05-05', '13:34:00', 'tgmjg', 58, 1, 'pendiente', 1),
(80, '2023-05-05', '15:30:00', 'Muchas gracias por la cita', 58, 1, 'pendiente', 12),
(81, '2023-05-05', '14:45:00', 'Listo', 54, 2, 'pendiente', 12),
(84, '2023-05-05', '12:00:00', 'xcev', 54, 2, 'pendiente', 12),
(85, '2023-05-04', '12:00:00', 'dnbiq', 54, 1, 'pendiente', 13),
(86, '2023-05-05', '15:00:00', 'Hola', 65, 2, 'pendiente', 13),
(89, '2023-05-26', '14:15:00', 'Plalpo', 54, 1, 'pendiente', 2),
(90, '2023-05-26', '14:19:00', 'tcrtdrc', 54, 3, 'pendiente', 1),
(91, '2023-05-26', '13:19:00', '', 69, 1, 'pendiente', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id_corte` int NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `precio` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id_corte`, `nombre`, `precio`) VALUES
(1, 'Taper', 100.00),
(2, 'Low-Fade', 150.00),
(3, 'Moja', 120.00),
(4, 'Fade', 100.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE `reseña` (
  `id_reseña` int NOT NULL,
  `estrellas` varchar(25) NOT NULL,
  `tipo_reseña` enum('barbero','pagina_web') DEFAULT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `reseña`
--

INSERT INTO `reseña` (`id_reseña`, `estrellas`, `tipo_reseña`, `mensaje`) VALUES
(9, '4', 'barbero', 'La barberia se encuentra en buen estado y los barberos son muy antentos con los clientes.'),
(13, '5', 'pagina_web', 'Es muy rapida'),
(14, '2', 'pagina_web', 'buybvuy'),
(15, '5', 'barbero', 'Es buen barbero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int NOT NULL,
  `rol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'barber'),
(2, 'usuario'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `rol_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `pass`, `rol_id`) VALUES
(31, 'Keneth', 'Conde', 'Conde@hotmail.com', '$2y$10$gF2TZ09zJG13haz2IVpHP.Wfh1D5pK4PNGKUSVzxAiVrIVqq/RIPS', 1),
(54, 'Sergio ', 'Valdez', 'Valdez@hotmail.com', '$2y$10$AC7YDTfhGMxixht5xNSkye7nlMekZi12SCQMnaCoEOqg8pviKHUxi', 2),
(58, 'Roberto Carlos', 'Campos', 'Campos123@hotmail.com', '$2y$10$rLuPIle62sCvRZGZYaWwguiOpQTHi6eRpkZh.qGM6p74KszfTm8ue', 2),
(59, 'Jaime ', 'Ramirez', 'Ramirez123@outlook.com', '$2y$10$wJkqFV5ZbdXKJoD4ZSPiYOCUgvKG83hY2QmOJNawZUrcXexdpYZlC', 3),
(60, 'Carlos', 'Herrera', 'Herrera123@hotmail.com', '$2y$10$w2NnhRExTc4YRJ5JG7tCcewXJvqXWRgbanwBg55Vpk0e3tGaSq6LK', 1),
(61, 'Mariela', 'Fernandez', 'Fernandez@hotmail.com', '$2y$10$jn7JtpXvpsyfmClbiSb/HulVOoONfk5W3Q2r.daHuwdn/sIfrGVPe', 2),
(64, 'Rojo', 'Velasquez', 'Rojo@hotmail.com', '$2y$10$42900J2yEe.QTPNPbWMTvOZTiB30Ge0k6jHpSclDQ04JqZOE2UeUO', 1),
(65, 'Aldo', 'Herrera', 'aldo123@hotmail.com', '$2y$10$wcxw.LOI7scRW9olVLfZd.r2nH7qcWd4QQwfTdzHtmb/N3w1SLEtS', 2),
(66, 'Pablo', 'Herrera', 'Pablo@hotmail.com', '$2y$10$eecm.EWQkN.r873HFAqB6.uyxLxIDxRs6wMY.05nO8/qylWqk4KWO', 1),
(67, 'Lalo', 'Perez', 'Perez@hotmail.com', '$2y$10$xnWzIJEOxHIhV3ZHN.9iI.r2WY6V7wLyfpt7BUBcDcQWHzlKyFE/2', 2),
(68, 'Ramon', 'Velez', 'Ramon@hotmail.com', '$2y$10$.TpeBsWeMtj8wEjZjAvBPOLFddN9buwLCMGRj/long6F5iAN9Rm9S', 1),
(69, 'Luis', 'Perez', 'Perez123@hotmail.com', '$2y$10$kX4.agvE7GLroZZUxT1ANO49zTUIXQBX.kIn6n3JOul94iK1Ru6SO', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barbero`
--
ALTER TABLE `barbero`
  ADD PRIMARY KEY (`id_barbero`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `idUsuario` (`usuario_id`),
  ADD KEY `corte_id` (`corte_id`),
  ADD KEY `barbero_id` (`barbero_id`);

--
-- Indices de la tabla `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id_corte`);

--
-- Indices de la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD PRIMARY KEY (`id_reseña`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barbero`
--
ALTER TABLE `barbero`
  MODIFY `id_barbero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `reseña`
--
ALTER TABLE `reseña`
  MODIFY `id_reseña` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id_corte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`barbero_id`) REFERENCES `barbero` (`id_barbero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

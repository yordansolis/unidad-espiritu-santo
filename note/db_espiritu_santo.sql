-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 14-01-2025 a las 06:26:26
-- Versión del servidor: 8.0.40
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_espiritu_santo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_general_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagenes` text COLLATE utf8mb4_general_ci,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`, `categoria`, `imagenes`, `fecha_creacion`) VALUES
(9, 'Brigada en Sanjuan', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa aliquid molestias sed nisi animi? Distinctio soluta nemo repudiandae nisi, beatae esse, enim quam, temporibus labore animi similique eligendi omnis. Illo!\r\nEveniet id repellendus officia, modi esse temporibus, expedita odit itaque tenetur laborum nihil! Quibusdam voluptatibus quaerat ex molestiae aliquid quam, excepturi, dolorum consectetur quod rem autem! Ex architecto illum quam.\r\nMinima debitis iure deleniti, ex quis perferendis aliquid libero eaque quibusdam explicabo atque, voluptates quaerat voluptatem animi repudiandae quia earum omnis quo ipsam doloribus ad fugit. Recusandae suscipit velit vitae!', 'Salud', '677c64c90a0c57.65815632.jpeg', '2025-01-06 23:18:33'),
(10, 'Brigada en salud', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa aliquid molestias sed nisi animi? Distinctio soluta nemo repudiandae nisi, beatae esse, enim quam, temporibus labore animi similique eligendi omnis. Illo!\r\nEveniet id repellendus officia, modi esse temporibus, expedita odit itaque tenetur laborum nihil! Quibusdam voluptatibus quaerat ex molestiae aliquid quam, excepturi, dolorum consectetur quod rem autem! Ex architecto illum quam.\r\nMinima debitis iure deleniti, ex quis perferendis aliquid libero eaque quibusdam explicabo atque, voluptates quaerat voluptatem animi repudiandae quia earum omnis quo ipsam doloribus ad fugit. Recusandae suscipit velit vitae!', 'Salud', '677c66bc4096e8.94744803.png', '2025-01-06 23:26:52'),
(14, 'Brigada en Sanjuan', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa aliquid molestias sed nisi animi? Distinctio soluta nemo repudiandae nisi, beatae esse, enim quam, temporibus labore animi similique eligendi omnis. Illo!\r\nEveniet id repellendus officia, modi esse temporibus, expedita odit itaque tenetur laborum nihil! Quibusdam voluptatibus quaerat ex molestiae aliquid quam, excepturi, dolorum consectetur quod rem autem! Ex architecto illum quam.', 'Salud', '677d3e488336f3.22095994.png', '2025-01-07 14:46:32'),
(15, 'Brigada en Sanjuan', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa aliquid molestias sed nisi animi? Distinctio soluta nemo repudiandae nisi, beatae esse, enim quam, temporibus labore animi similique eligendi omnis. Illo!\r\nEveniet id repellendus officia, modi esse temporibus, expedita odit itaque tenetur laborum nihil! Quibusdam voluptatibus quaerat ex molestiae aliquid quam, excepturi, dolorum consectetur quod rem autem! Ex architecto illum quam.', 'Salud', '677d3e92966205.01971564.jpeg', '2025-01-07 14:47:46'),
(17, 'Brigada en niqui', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa aliquid molestias sed nisi animi? Distinctio soluta nemo repudiandae nisi, beatae esse, enim quam, temporibus labore animi similique eligendi omnis. Illo!\r\n', 'Salud', '677d40fd4b5341.35210725.jpeg', '2025-01-07 14:58:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `table_novedades`
--

CREATE TABLE `table_novedades` (
  `id` int NOT NULL,
  `tipo_reclamo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_sede` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_identificacion` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `numero_identificacion` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8mb4_general_ci,
  `radicado` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `table_novedades`
--

INSERT INTO `table_novedades` (`id`, `tipo_reclamo`, `tipo_sede`, `tipo_identificacion`, `numero_identificacion`, `nombre`, `apellido`, `email`, `telefono`, `direccion`, `mensaje`, `radicado`, `fecha_creacion`) VALUES
(1, 'reclamo', 'sanjose-del-parmar', 'tarjeta_identidad', '1077476862', 'jhordan ', 'asprilla solis', 'yordansolis2@gmail.com', '3113634658', 'San juan', 'lorem', '22788', '2025-01-07 06:47:46'),
(2, 'reclamo', 'sanjose-del-parmar', 'cedula', '1077476862', 'jhordan ', 'asprilla solis', 'yordansolis2@gmail.com', '3113634658', 'San juan', 'Hola', '44559', '2025-01-14 00:05:34'),
(3, 'reclamo', 'meido-sanjuan', 'cedula', '1077476862', 'jhordan ', 'asprilla solis', 'yordansolis2@gmail.com', '3113634658', 'San juan', 'Hola', '74919', '2025-01-14 00:24:32'),
(4, 'reclamo', 'sanjose-del-parmar', 'pasaporte', '1077476862', 'jhordan ', 'asprilla solis', 'yordansolis2@gmail.com', '3113634658', 'San juan', 'Hola', '24590', '2025-01-14 00:41:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'unidadmedicaespiritusanto', '$2y$10$txS75CSVx4.1wvikSzefhe04wNnPytPF5b1thcQ2SyMqvSUucyYXC', '2025-01-14 06:05:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `table_novedades`
--
ALTER TABLE `table_novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `table_novedades`
--
ALTER TABLE `table_novedades`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

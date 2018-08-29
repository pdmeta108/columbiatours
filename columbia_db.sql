-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2018 a las 18:15:01
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `columbia_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'banesco', NULL, NULL),
(2, 'provincial', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'grupales', '2018-05-09 20:15:30', '2018-05-09 20:15:30'),
(2, 'normales', '2018-05-19 16:33:42', '2018-05-19 16:33:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(10) UNSIGNED NOT NULL,
  `destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `destino`, `created_at`, `updated_at`) VALUES
(2, 'destino1', '2018-05-09 21:00:32', '2018-05-09 21:00:32'),
(3, 'destino2', '2018-05-09 20:10:54', '2018-05-09 20:10:54'),
(4, 'panama', '2018-05-14 19:41:49', '2018-05-14 19:41:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paquete_id` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `file_name`, `paquete_id`, `url`, `created_at`, `updated_at`) VALUES
(4, '5afc9944a5280imagen_ejemplo.jpg', 9, 'paquetes/cWkGenbBoBjcMEkxgpuVoZzGYJX2hVlGaDbt3etA.jpeg', '2018-05-16 19:49:08', '2018-05-16 19:49:08'),
(5, '5afc99452a29eturismo.jpg', 9, 'paquetes/am2Sq7exUjSisuZMFiWXUjW5O38Fg2BRZItdHABE.jpeg', '2018-05-16 19:49:09', '2018-05-16 19:49:09'),
(6, '5afc9e35d5b5aimagen_ejemplo.jpg', 16, 'paquetes/pqSZE7nDVSS4XQtNJZXFdKmB4Vsr79P7cZPnAki4.jpeg', '2018-05-16 20:10:13', '2018-05-16 20:10:13'),
(7, '5afc9e36b7a2fcedula.jpeg', 16, 'paquetes/AyQTo3DHSrAM50Cq7KLK6IaLrpaS1aPahQIkURTO.jpeg', '2018-05-16 20:10:14', '2018-05-16 20:10:14'),
(8, '5afc964003249turismo.jpg', 16, 'paquetes/8uwByd6xTQ5MQH4HlDm3hcqPvBF3eSfmxn2Oi1JU.jpeg', '2018-05-16 19:36:16', '2018-05-16 19:36:16'),
(9, '5afc96661b8bbturismo.jpg', 16, 'paquetes/tIm7u2SMpkxhjOXu9czQlRQxzD9RzzZE1gFu1NTn.jpeg', '2018-05-16 19:36:54', '2018-05-16 19:36:54'),
(10, '5b033c3a5a21eimagen_ejemplo.jpg', 21, 'paquetes/Fs3eLQtsztKCG29uhawqfyN6HAc6vxKxVeDxxM1w.jpeg', '2018-05-21 20:38:02', '2018-05-21 20:38:02'),
(11, '5b033c3ad793cturismo.jpg', 21, 'paquetes/zzda9orFi2by2C95WpeAeclUYwpbBAFJowu8gzO5.jpeg', '2018-05-21 20:38:02', '2018-05-21 20:38:02'),
(12, '5b072cb215b59imagen_ejemplo.jpg', 21, 'paquetes/LKEmzGbrgyrEd1hFb47Zfl9zyiuqqnWMhsja6cAL.jpeg', '2018-05-24 20:20:50', '2018-05-24 20:20:50'),
(13, '5b07213a076d6imagen_ejemplo.jpg', 21, 'paquetes/vNCQXBBeZNBywBC8nF5YSavGVnZXOh5g2AP1Bae9.jpeg', '2018-05-24 19:31:54', '2018-05-24 19:31:54'),
(14, '5b0c39f9011bdimagen_ejemplo.jpg', 21, 'paquetes/4d6FyLWRAEOIROtZGUd0KnPVCdw1WrtjcOvPoaY9.jpeg', '2018-05-28 16:18:49', '2018-05-28 16:18:49'),
(15, '5b0c3a7f2d9a7imagen_ejemplo.jpg', 21, 'paquetes/9FXtSkNvwobVH1MwNe4OlmAWkI7OIOmHy44Y6ZOu.jpeg', '2018-05-28 16:21:03', '2018-05-28 16:21:03'),
(16, '5b0c3a8eb3361imagen_ejemplo.jpg', 21, 'paquetes/JksgCHphLg40gYgNaIMqu5xsYc8aKFc1Od6efmW8.jpeg', '2018-05-28 16:21:18', '2018-05-28 16:21:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2018_04_07_201555_create_paquetes_table', 1),
(21, '2018_04_13_002256_create_imagenes_table', 1),
(22, '2018_05_09_161118_create_categorias_table', 1),
(23, '2018_05_09_162444_create_destinos_table', 1),
(27, '2018_05_19_122225_create_promociones_table', 2),
(28, '2018_05_19_124700_create_bancos_table', 2),
(29, '2018_05_19_124829_create_proveedores_table', 2),
(30, '2018_05_21_170135_create_promocion_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(10) UNSIGNED DEFAULT NULL,
  `destino_id` int(10) UNSIGNED DEFAULT NULL,
  `incluye` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itinerario` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precios` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promocion_id` int(10) DEFAULT NULL,
  `banco_id` int(10) DEFAULT NULL,
  `proveedor_id` int(10) DEFAULT NULL,
  `destacado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `titulo`, `descripcion`, `categoria_id`, `destino_id`, `incluye`, `itinerario`, `terminos`, `precios`, `dias`, `created_at`, `updated_at`, `imagen_url`, `promocion_id`, `banco_id`, `proveedor_id`, `destacado`) VALUES
(2, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 1, 3, NULL, '<p>Agregar solo si la categoria es del tipo &quot;grupal&quot;</p>', NULL, NULL, '4', '2018-05-14 19:53:39', '2018-05-14 19:53:39', NULL, NULL, NULL, NULL, 0),
(3, 'edededededed', 'ededededed', 2, 4, NULL, '<p>Agregar solo si la categoria es del tipo &quot;grupal&quot;</p>', NULL, NULL, NULL, '2018-05-14 20:28:04', '2018-05-19 16:34:55', 'paquetes/5b00603f3cee9imagen_ejemplo.jpg', NULL, NULL, NULL, 0),
(21, 'titulo1', 'Lorem ipsum dolor sit amet', 1, 3, '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum dolor sit amet</p>', '<p>Lorem ipsum dolor sit amet</p>', '5', '2018-05-19 16:44:38', '2018-05-28 16:47:27', 'paquetes/JksgCHphLg40gYgNaIMqu5xsYc8aKFc1Od6efmW8.jpeg', 2, 2, 1, NULL),
(22, 'titulo2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-21 21:05:49', '2018-05-21 21:05:49', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'normales', NULL, NULL),
(2, 'bancaria', NULL, NULL),
(3, 'proveedores', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'ninguno', NULL, NULL),
(2, 'alamo', NULL, NULL),
(3, 'pullmatur', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 16:34:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `systemsapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job`
--

CREATE TABLE `job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `terminada` tinyint(1) NOT NULL DEFAULT 0,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_system` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2023_05_09_104606_to-do-list', 3),
(13, '2023_05_09_110104_create_tasks_table', 4),
(15, '2014_10_12_000000_create_users_table', 5),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(17, '2014_10_12_200000_add_two_factor_columns_to_users_table', 5),
(18, '2019_08_19_000000_create_failed_jobs_table', 5),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(20, '2023_04_25_074920_create_systems_table', 5),
(21, '2023_05_13_095431_create_job_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `systems`
--

CREATE TABLE `systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `status` enum('Mantenimiento','Revisado','Averiado') NOT NULL,
  `prioridad` enum('Alta','Media','Baja') NOT NULL,
  `tipo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `systems`
--

INSERT INTO `systems` (`id`, `name`, `description`, `ubicacion`, `status`, `prioridad`, `tipo`, `created_at`, `updated_at`) VALUES
(7, 'sds', 'sds', 'sd', 'Mantenimiento', 'Alta', '', '2023-05-17 17:03:32', '2023-05-17 17:03:32'),
(8, 'hola', 'ddd', 'dd', 'Mantenimiento', 'Alta', '', '2023-05-17 17:11:35', '2023-05-17 17:11:35'),
(9, 'hola', 'ddd', 'dddd', 'Mantenimiento', 'Alta', '', '2023-05-17 17:11:41', '2023-05-17 17:11:41'),
(10, 'hola', 'sdsd', 'sdsd', 'Mantenimiento', 'Alta', '', '2023-05-17 17:12:29', '2023-05-17 17:12:29'),
(11, 'ff', 'ff', 'ff', 'Mantenimiento', 'Alta', '', '2023-05-17 17:13:44', '2023-05-17 17:13:44'),
(13, 'dfdf', 'dffd', 'dfdf', 'Mantenimiento', 'Alta', '', '2023-05-17 17:21:51', '2023-05-17 17:21:51'),
(14, 'fdfd', 'dfdf', 'dfdf', 'Revisado', 'Alta', '', '2023-05-17 17:23:29', '2023-05-17 17:23:29'),
(15, 'ffff', 'dfdfdfdf', 'dfdfdfdfd', 'Mantenimiento', 'Alta', 'dfdfdf', '2023-05-17 18:06:44', '2023-05-17 18:06:44'),
(16, '#@#@#23423', 'ddff', 'dfdfd', 'Mantenimiento', 'Alta', 'dfdfdf', '2023-05-17 18:06:51', '2023-05-17 18:06:51'),
(17, 'dcdc', 'dcdc', 'dcdc', 'Mantenimiento', 'Alta', 'c', '2023-05-17 18:07:11', '2023-05-17 18:07:11'),
(18, 'EEEEEEEE', 'EEEEE', 'EEEEEE', 'Revisado', 'Media', 'EEEEE', '2023-05-17 18:51:30', '2023-05-17 18:51:30'),
(19, 'htghghghghghghgghgh', 'dfdf', 'dddd', 'Mantenimiento', 'Alta', 'c', '2023-05-17 18:53:46', '2023-05-17 18:53:46'),
(20, 'dfdfdf', 'dd', 'dd', 'Mantenimiento', 'Alta', 'dd', '2023-05-17 18:54:41', '2023-05-17 18:54:41'),
(21, 'd', 'd', 's', 'Mantenimiento', 'Alta', 's', '2023-05-17 18:55:01', '2023-05-17 18:55:01'),
(22, 'dfdfdf', 'dfdf', 'dffdf', 'Mantenimiento', 'Alta', 'dfdf', '2023-05-17 18:56:04', '2023-05-17 18:56:04'),
(23, 'w', 'w', 'e', 'Mantenimiento', 'Alta', 'e', '2023-05-17 18:56:39', '2023-05-17 18:56:39'),
(24, '7', '7', '7', 'Mantenimiento', 'Alta', '7', '2023-05-17 18:57:40', '2023-05-17 18:57:40'),
(25, '4', '4', '4', 'Mantenimiento', 'Alta', '4', '2023-05-17 18:58:03', '2023-05-17 18:58:03'),
(26, '7', '7', '7', 'Averiado', 'Media', '7', '2023-05-18 00:26:46', '2023-05-18 00:26:46'),
(27, '7', '7', '7', 'Mantenimiento', 'Alta', '7', '2023-05-18 00:27:41', '2023-05-18 00:27:41'),
(28, '7', '7', '7', 'Mantenimiento', 'Alta', '7', '2023-05-18 00:28:29', '2023-05-18 00:28:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `status` enum('Realizada','No Realizada') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `status` enum('User','Admin','Trial') NOT NULL DEFAULT 'Admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'victor', 'victor', 'victor.torres.ortiz.18@gmail.com', NULL, '$2y$10$BIaUMjs/yp02NYmgcx7kF.XVEyinBOqsHqO0S6LG3KyEPj46EDkwa', NULL, NULL, NULL, 'Admin', NULL, '2023-05-16 13:13:33', '2023-05-16 13:13:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id_user_foreign` (`id_user`),
  ADD KEY `job_id_system_foreign` (`id_system`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `systems`
--
ALTER TABLE `systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_id_system_foreign` FOREIGN KEY (`id_system`) REFERENCES `systems` (`id`),
  ADD CONSTRAINT `job_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

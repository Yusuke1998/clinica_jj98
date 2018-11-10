-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2018 a las 17:23:45
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_jj98`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED DEFAULT NULL,
  `receptionist_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `type`, `details`, `patient_id`, `doctor_id`, `receptionist_id`, `created_at`, `updated_at`) VALUES
(21, 'residencia', 'residencia las marcedes', 1, 3, NULL, NULL, NULL),
(22, 'trabajo', 'lugar de trabajo en cagua', 3, NULL, NULL, NULL, NULL),
(23, 'casa', 'casa', NULL, 1, NULL, NULL, NULL),
(24, 'trabajo', 'trabajo', NULL, 1, NULL, NULL, NULL),
(25, 'residencia', 'residencia', NULL, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amountPaylable` double(8,2) NOT NULL,
  `query_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casefiles`
--

CREATE TABLE `casefiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentCondition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inheritedDisease` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ninguna',
  `ethnicGroup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ninguna',
  `bloodType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surgeries` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ninguna',
  `user_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultingrooms`
--

CREATE TABLE `consultingrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consultingrooms`
--

INSERT INTO `consultingrooms` (`id`, `location`, `created_at`, `updated_at`, `doctor_id`) VALUES
(1, 'Oficina #1', '2018-11-10 15:21:56', '2018-11-10 15:21:56', 1),
(2, 'Oficina #2', '2018-11-10 15:21:56', '2018-11-10 15:21:56', 2),
(3, 'Oficina #3', '2018-11-10 15:21:56', '2018-11-10 15:21:56', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `lastname`, `ci`, `created_at`, `updated_at`) VALUES
(1, 'Jhonny', 'Perez', '35454545', '2018-11-10 15:20:36', '2018-11-10 15:20:36'),
(2, 'Junito', 'Fulano', '444444444', '2018-11-10 15:20:36', '2018-11-10 15:20:36'),
(3, 'Sebastian', 'pirujo', '55555555555', '2018-11-10 15:20:36', '2018-11-10 15:20:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_patient`
--

CREATE TABLE `doctor_patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doctor_patient`
--

INSERT INTO `doctor_patient` (`id`, `doctor_id`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 4, NULL, NULL),
(4, 1, 1, NULL, NULL),
(5, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor_specialties`
--

CREATE TABLE `doctor_specialties` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `specialty_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doctor_specialties`
--

INSERT INTO `doctor_specialties` (`id`, `doctor_id`, `specialty_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 2, 1, NULL, NULL),
(6, 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED DEFAULT NULL,
  `receptionist_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `emails`
--

INSERT INTO `emails` (`id`, `email`, `patient_id`, `doctor_id`, `receptionist_id`, `created_at`, `updated_at`) VALUES
(1, 'jhonnyjose1998ii@gmail.com', 3, NULL, NULL, '2018-11-10 15:32:48', '2018-11-10 15:32:48'),
(2, 'admhhh@gmail.com', NULL, 2, NULL, '2018-11-10 15:32:48', '2018-11-10 15:32:48'),
(3, 'jj@gmail.com', NULL, 3, NULL, '2018-11-10 15:32:48', '2018-11-10 15:32:48'),
(4, 'nota@gmail.com', NULL, 1, NULL, '2018-11-10 15:32:48', '2018-11-10 15:32:48'),
(5, 'jhonny@gmail.com', NULL, 1, NULL, '2018-11-10 15:32:48', '2018-11-10 15:32:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evolutions`
--

CREATE TABLE `evolutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `symptom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disease` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casefile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(36, '2018_11_10_150137_delete_doctor_id_to_specialties', 1),
(37, '2014_10_12_000000_create_users_table', 2),
(38, '2014_10_12_100000_create_password_resets_table', 2),
(39, '2018_11_09_100001_create_patients_table', 2),
(40, '2018_11_09_100002_create_doctors_table', 2),
(41, '2018_11_09_100003_create_receptionists_table', 2),
(42, '2018_11_09_100004_create_telephones_table', 2),
(43, '2018_11_09_100005_create_emails_table', 2),
(44, '2018_11_09_100006_create_addresses_table', 2),
(45, '2018_11_09_100007_create_casefiles_table', 2),
(46, '2018_11_09_100008_create_specialties_table', 2),
(47, '2018_11_09_100009_create_queries_table', 2),
(48, '2018_11_09_100010_create_bills_table', 2),
(49, '2018_11_09_100011_create_evolutions_table', 2),
(50, '2018_11_09_100012_create_appointments_table', 2),
(51, '2018_11_09_100013_create_consultingrooms_table', 2),
(52, '2018_11_09_100014_create_doctor_patient_table', 2),
(53, '2018_11_09_100015_create_doctor_specialties_table', 2);

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
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `ci`, `created_at`, `updated_at`) VALUES
(1, 'jakie', 'chan', '3333333', '2018-11-10 15:24:27', '2018-11-10 15:24:27'),
(2, 'jet', 'li', '55555555555', '2018-11-10 15:24:27', '2018-11-10 15:24:27'),
(3, 'chuck', 'norris', '44444444', '2018-11-10 15:24:27', '2018-11-10 15:24:27'),
(4, 'Silvester', 'Stallone', '5555555555', '2018-11-10 15:24:27', '2018-11-10 15:24:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `queries`
--

CREATE TABLE `queries` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `queries`
--

INSERT INTO `queries` (`id`, `date`, `location`, `doctor_id`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, '12/01/1990', 'vila de cura', 1, 3, '2018-11-10 15:26:01', '2018-11-10 15:26:01'),
(2, '12/02/3990', 'cagua', 1, 2, '2018-11-10 15:26:01', '2018-11-10 15:26:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `receptionists`
--

INSERT INTO `receptionists` (`id`, `firstname`, `lastname`, `ci`, `created_at`, `updated_at`) VALUES
(1, 'maria', 'rojas', '44444444', '2018-11-10 15:26:48', '2018-11-10 15:26:48'),
(2, 'betania', 'rangel', '444444444444', '2018-11-10 15:26:48', '2018-11-10 15:26:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialties`
--

CREATE TABLE `specialties` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'cirujano', 'operaciones delicadas', '2018-11-10 15:18:09', '2018-11-10 15:18:09'),
(2, 'pediatra', 'Atiende jovenes', '2018-11-10 15:18:09', '2018-11-10 15:18:09'),
(3, 'odontologia', 'atiende problemas dentales', '2018-11-10 15:18:09', '2018-11-10 15:18:09'),
(4, 'dermatologia', 'atiende problemas de piel', '2018-11-10 15:18:09', '2018-11-10 15:18:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telephones`
--

CREATE TABLE `telephones` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` int(10) UNSIGNED DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED DEFAULT NULL,
  `receptionist_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `telephones`
--

INSERT INTO `telephones` (`id`, `type`, `number`, `patient_id`, `doctor_id`, `receptionist_id`, `created_at`, `updated_at`) VALUES
(11, 'casa', '44455555555', 4, NULL, NULL, '2018-11-10 15:30:06', '2018-11-10 15:30:06'),
(12, 'movil', '99999999999', 3, NULL, NULL, '2018-11-10 15:30:06', '2018-11-10 15:30:06'),
(13, 'movil', '777777777', NULL, 1, NULL, '2018-11-10 15:30:06', '2018-11-10 15:30:06'),
(14, 'oficina', '1111133333333', 4, NULL, NULL, '2018-11-10 15:30:06', '2018-11-10 15:30:06'),
(15, 'casa', '77777777', NULL, NULL, 1, '2018-11-10 15:30:06', '2018-11-10 15:30:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` enum('admin','doctor','receptionist','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'other',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2018-11-10 15:19:35', 'admin@gmail.com', 'admin', NULL, '2018-11-10 15:19:35', '2018-11-10 15:19:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_patient_id_foreign` (`patient_id`),
  ADD KEY `addresses_doctor_id_foreign` (`doctor_id`),
  ADD KEY `addresses_receptionist_id_foreign` (`receptionist_id`);

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bills_code_unique` (`code`),
  ADD KEY `bills_query_id_foreign` (`query_id`),
  ADD KEY `bills_doctor_id_foreign` (`doctor_id`),
  ADD KEY `bills_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `casefiles`
--
ALTER TABLE `casefiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casefiles_user_id_foreign` (`user_id`),
  ADD KEY `casefiles_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `consultingrooms`
--
ALTER TABLE `consultingrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultingrooms_doctor_id_foreign` (`doctor_id`);

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor_patient`
--
ALTER TABLE `doctor_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_patient_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_patient_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `doctor_specialties`
--
ALTER TABLE `doctor_specialties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_specialties_doctor_id_foreign` (`doctor_id`),
  ADD KEY `doctor_specialties_specialty_id_foreign` (`specialty_id`);

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_patient_id_foreign` (`patient_id`),
  ADD KEY `emails_doctor_id_foreign` (`doctor_id`),
  ADD KEY `emails_receptionist_id_foreign` (`receptionist_id`);

--
-- Indices de la tabla `evolutions`
--
ALTER TABLE `evolutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evolutions_casefile_id_foreign` (`casefile_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `queries_doctor_id_foreign` (`doctor_id`),
  ADD KEY `queries_patient_id_foreign` (`patient_id`);

--
-- Indices de la tabla `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specialties_name_unique` (`name`);

--
-- Indices de la tabla `telephones`
--
ALTER TABLE `telephones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `telephones_patient_id_foreign` (`patient_id`),
  ADD KEY `telephones_doctor_id_foreign` (`doctor_id`),
  ADD KEY `telephones_receptionist_id_foreign` (`receptionist_id`);

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
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `casefiles`
--
ALTER TABLE `casefiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultingrooms`
--
ALTER TABLE `consultingrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `doctor_patient`
--
ALTER TABLE `doctor_patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `doctor_specialties`
--
ALTER TABLE `doctor_specialties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `evolutions`
--
ALTER TABLE `evolutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `telephones`
--
ALTER TABLE `telephones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_receptionist_id_foreign` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionists` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Filtros para la tabla `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_query_id_foreign` FOREIGN KEY (`query_id`) REFERENCES `queries` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `casefiles`
--
ALTER TABLE `casefiles`
  ADD CONSTRAINT `casefiles_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `casefiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `consultingrooms`
--
ALTER TABLE `consultingrooms`
  ADD CONSTRAINT `consultingrooms_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Filtros para la tabla `doctor_patient`
--
ALTER TABLE `doctor_patient`
  ADD CONSTRAINT `doctor_patient_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `doctor_patient_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Filtros para la tabla `doctor_specialties`
--
ALTER TABLE `doctor_specialties`
  ADD CONSTRAINT `doctor_specialties_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `doctor_specialties_specialty_id_foreign` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`);

--
-- Filtros para la tabla `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `emails_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `emails_receptionist_id_foreign` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionists` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `evolutions`
--
ALTER TABLE `evolutions`
  ADD CONSTRAINT `evolutions_casefile_id_foreign` FOREIGN KEY (`casefile_id`) REFERENCES `casefiles` (`id`);

--
-- Filtros para la tabla `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `queries_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `telephones`
--
ALTER TABLE `telephones`
  ADD CONSTRAINT `telephones_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `telephones_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `telephones_receptionist_id_foreign` FOREIGN KEY (`receptionist_id`) REFERENCES `receptionists` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

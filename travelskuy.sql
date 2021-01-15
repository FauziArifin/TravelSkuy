-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelskuy`
--
CREATE DATABASE IF NOT EXISTS `travelskuy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travelskuy`;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `trip_id`, `created_at`, `updated_at`) VALUES
(25, 4, 4, '2021-01-14 19:25:12', '2021-01-14 19:25:12'),
(26, 4, 9, '2021-01-14 19:26:42', '2021-01-14 19:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_31_144108_add_nohp_column_to_users_table', 2),
(5, '2021_01_07_225905_add_role_column_to_users_table', 3),
(6, '2021_01_12_093136_create_tourguides_table', 4),
(8, '2021_01_13_062011_create_trips_table', 5),
(9, '2021_01_14_045101_create_bookings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('riarahmawati59@gmail.com', '$2y$10$g36pAHM/VTAftzn3eCPCwuDgUh75zzIQp7CC0/tMAqYfZlaPNHZ5O', '2021-01-07 06:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `minimal` int(11) NOT NULL,
  `maksimal` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TourGuideName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `nama`, `StartDate`, `EndDate`, `minimal`, `maksimal`, `description`, `TourGuideName`, `img_path`, `price`, `created_at`, `updated_at`) VALUES
(3, 'Bandung', '2021-01-20', '2021-01-23', 3, 0, 'Bandung wkwkwkasdka  ajgsha gsh', 'Beni', 'bandung.jpg-1610612980.jpg', 100000, '2021-01-14 01:29:40', '2021-01-14 19:20:18'),
(4, 'Bali', '2021-01-16', '2021-01-17', 3, 4, 'asjah ashak kd jahdhgahgd', 'Beni', 'bali.jpg-1610617603.jpg', 100000, '2021-01-14 02:46:43', '2021-01-14 19:25:12'),
(9, 'Kebumen', '2021-01-17', '2021-01-20', 2, 7, 'Kebumen wonderful bla bla bla bla', 'Ucup', 'kebumen.jpg-1610677589.jpg', 200000, '2021-01-14 19:26:29', '2021-01-14 19:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','tourguide','traveler') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'traveler'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nohp`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Ria Rahmawati', 'riarahmawati59@gmail.com', '08277111133', NULL, '$2y$10$5sLAgKGaNNMeFbWhXhzMPuZgJ9rW73C6X68h0UvQMfBbqnVrJUw3u', NULL, '2020-12-31 07:52:38', '2020-12-31 07:52:38', 'traveler'),
(2, 'Ria Rahmawati', 'riarahmaw9@gmail.com', '09999999', NULL, '$2y$10$yqrGZmp/56Ycdn2jntwog.4aYIcuYGAZAH2EmDuDovOp1yd1lsVbS', NULL, '2021-01-07 06:40:22', '2021-01-07 06:40:22', 'traveler'),
(3, 'Arifin', 'arifin@gmail.com', '0821212121', NULL, '$2y$10$Oc819Z0HpVrzhBaCP0WvJOvcEIDYrOWX.hWgpbB1VagQiTfCfKJZi', NULL, '2021-01-13 05:42:52', '2021-01-14 08:48:32', 'traveler'),
(4, 'Fauzi', 'fauzi@gmail.com', '08210000000', NULL, '$2y$10$Vug0bqlYyzyi9myKSvkIquE9rKvftiS75cf0.c1RbRpaRcY7IQNuG', NULL, '2021-01-13 23:26:44', '2021-01-13 23:26:44', 'traveler'),
(5, 'Ucup', 'ucup@gmail.com', '08198112234', NULL, '$2y$10$xQCnXot2AvpEGJyescV6qOA6NiPq1KAPqmrYEa00eEfkkJlVaunbW', NULL, '2021-01-13 23:46:01', '2021-01-13 23:46:01', 'tourguide'),
(7, 'Tono', 'tono@gmail.com', '0821212121212', NULL, '$2y$10$4c1Stjs.t7oJPuv.BWzgcuKw6zMhlMnTT058ZXw9iEzwr2tuc7Hvq', NULL, '2021-01-13 23:49:39', '2021-01-13 23:49:39', 'traveler'),
(8, 'Beni', 'beni@gmail.com', '08888', NULL, '$2y$10$bB7CjjN9P2OKJNolNRSN.eRhpXfk.BDNHlNp4lojsvALCEkvN4r7m', NULL, '2021-01-14 00:21:26', '2021-01-14 08:35:02', 'tourguide'),
(9, 'Deni', 'deni@gmail.com', '0242424242', NULL, '$2y$10$HMkYoiLA/lMTOKthFj4HTe5lIa/otzNMvna221p7lFNLoMxXGtxd.', NULL, '2021-01-14 15:36:34', '2021-01-14 15:36:34', 'traveler'),
(10, 'odang', 'odang@gmail.com', '089898989', NULL, '$2y$10$51F3ZKvz6S2ljl1rysEt/.mLmjxhcqmteihpurlQZp5nqc3BeJaei', NULL, '2021-01-14 15:37:15', '2021-01-14 15:37:15', 'tourguide');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_trip_id_foreign` (`trip_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nohp_unique` (`nohp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

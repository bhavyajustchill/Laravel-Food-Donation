-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2022 at 01:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwastagereduction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bhavya Popat', 'bhavyajustchill@gmail.com', NULL, '$2y$10$nxEjOB3.WtSLWPFBWzg2DeEsZ6jCxMLt8VyQCNxZ7MizTjAdsOY46', NULL, '2022-11-18 21:48:30', '2022-11-20 22:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slum_area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `img`, `qty`, `user_id`, `slum_area_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pav Bhaji', '1669099940.jpg', '1.5 KG', 1, NULL, 'Pending', '2022-11-21 23:16:44', '2022-11-22 06:25:28'),
(2, 'Idli', '1669093215.jpg', '1 KG', 4, 1, 'In Transit', '2022-11-21 23:30:15', '2022-11-22 06:37:49'),
(6, 'Paneer Tikka Masala', '1669118792.png', '2.5 KG', 3, 3, 'Donated', '2022-11-22 06:36:32', '2022-11-22 06:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_19_022831_create_admins_table', 2),
(6, '2022_11_19_051436_add_address_to_users_table', 3),
(7, '2022_11_19_145005_create_slum_areas_table', 4),
(8, '2022_11_19_170453_add_contact_to_users_table', 5),
(9, '2022_11_22_033059_create_donations_table', 6),
(10, '2022_11_22_040637_add_qty_to_donations_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slum_areas`
--

CREATE TABLE `slum_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slum_areas`
--

INSERT INTO `slum_areas` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Shastri Nagar', 'Shastri Nagar, Rajkot.', '2022-11-19 09:56:30', '2022-11-19 10:32:58'),
(2, 'Raiyadhar', 'Raiyadhar, Rajkot.', '2022-11-19 10:02:33', '2022-11-19 10:02:33'),
(3, 'Rajiv Nagar', 'Rajiv Nagar, Rajkot.', '2022-11-19 10:03:04', '2022-11-19 10:03:04'),
(4, 'Bajrang Vadi', 'Bajrang Vadi, Rajkot.', '2022-11-19 10:03:24', '2022-11-19 10:03:24'),
(5, 'Vinayak Vatika Society', 'Vinayak Vatika Society, Rajkot.', '2022-11-19 10:03:45', '2022-11-19 10:03:45'),
(10, 'Parsana Nagar', 'Parsana Nagar, Rajkot.', '2022-11-19 12:08:32', '2022-11-21 12:19:31'),
(11, 'test slum area', 'test address', '2022-11-22 06:25:06', '2022-11-22 06:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bhavya Popat', '6354546061', 'bhavya@example.com', 'Rajkot, Gujarat.', NULL, '$2y$10$JISk.rOHU2KtxEZ0r5OTa.dZkKwtnYY1gQGE3X8sQxfmhUNYndTlC', NULL, '2022-11-18 20:57:15', '2022-11-20 08:22:29'),
(2, 'Demo User 123', '1234567890', 'demo@test.com', 'test address, city name.', NULL, '$2y$10$Ynlzfx3AYQ2IZf/ArkKTx.lCyWikLtCgzRmD0v4Eaps7/LjT8rkPi', NULL, '2022-11-19 11:51:19', '2022-11-20 22:13:10'),
(3, 'Shahnawaz Bheda', '9558362840', 'shahnawaz@gmail.com', 'Lalpur, Gujarat.', NULL, '$2y$10$AVACqYyTHBowRT8FOZtfFeZaqe5DrYD.EtiDmtE.iB3f.nrQXOixe', NULL, '2022-11-19 11:53:56', '2022-11-20 08:24:49'),
(4, 'Divyaraj Mehta', '7698824501', 'divyarajmehta295@gmail.com', 'Rajkot, Gujarat.', NULL, '$2y$10$.kDZ8kWGKMWlohTIfJS1XeJtcGgj5JXP0.kIGblR9ZVUPXDgC.wny', NULL, '2022-11-19 11:55:18', '2022-11-21 12:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slum_areas`
--
ALTER TABLE `slum_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_unique` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slum_areas`
--
ALTER TABLE `slum_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

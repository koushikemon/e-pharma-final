-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 04:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul', 'jahidul@gmail.com', 123456789, 'Hello!', '2018-11-30 14:26:36', '2018-11-30 14:26:36'),
(2, 'Sagor', 'sagor@gmail.com', 123456789, 'Hello, I am Mr.Sagor.', '2018-11-30 14:28:35', '2018-11-30 14:28:35'),
(3, 'Rakiba', 'rakiba@gmail.com', 123456789, 'Hello.', '2018-12-01 04:40:56', '2018-12-01 04:40:56'),
(4, 'KOushik', 'k@gmail.com', 123456, 'Hello', '2018-12-07 23:33:10', '2018-12-07 23:33:10'),
(5, 'wW', 'e2T2@hgf', 6466, 'hjgg', '2018-12-08 03:20:41', '2018-12-08 03:20:41'),
(6, 'Rakiba Sultana', 'rakiba0454@gmail.com', 1867041454, 'i want a medicine', '2018-12-08 03:27:10', '2018-12-08 03:27:10'),
(7, 'sagor', 'sagor@yahoo.com', 1234678, 'Hello Dear!', '2018-12-08 08:45:41', '2018-12-08 08:45:41');

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
(3, '2018_11_30_194912_create_contacts_table', 2),
(4, '2018_12_07_192706_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `medicinename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicinecompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicineprice` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `medicinename`, `medicinecompany`, `medicineprice`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Seclo', 'Square', 45, '1544250136.png', '2018-12-08 00:22:16', '2018-12-08 00:22:16'),
(2, 'Seclo', 'Square', 45, '1544250203.png', '2018-12-08 00:23:24', '2018-12-08 00:23:24'),
(3, 'revotil', 'reavo', 80, '1544260960.jpg', '2018-12-08 03:22:40', '2018-12-08 03:22:40'),
(4, 'revotil', 'reavo', 80, '1544261355.jpg', '2018-12-08 03:29:15', '2018-12-08 03:29:15'),
(5, 'Napa Extra', 'Bex', 30, '1544280875.jpg', '2018-12-08 08:54:37', '2018-12-08 08:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul Hasan Zahid', 'jahidul@gmail.com', '$2y$10$Vj8VrQuV8zSzqq8k7QXMHuisSSuX28nFlNylLYZbPdcz.qIYnvheW', 'EJHZxCHpBBdkzZCysVboXGkXDuBu8mGbnXM9PzYmxmcuic8OwkoHcQUzV50q', '2018-11-30 13:23:45', '2018-11-30 13:23:45'),
(2, 'Rakiba', 'rakiba@gmail.com', '$2y$10$uHSOifJVy3zj3M5K9KiriOo0epsJBnll2kskjqXDSmQ8Qh4fpAHXe', 'WeKmWTwU1OAFFzQ78dBR2RsqV7J9XdvIEd2bK94Jt4g3pAsTyu3xIgaAxHVG', '2018-12-01 04:40:07', '2018-12-01 04:40:07'),
(3, 'sagor', 'sagor3@gmail.com', '$2y$10$eovYszmovQBTzHgt7Q140ughyf.gyDnCoxa1a2pxE3tR1/1qCB63W', NULL, '2018-12-01 21:50:16', '2018-12-01 21:50:16'),
(4, 'Rakiba Sultana', 'rakiba0454@gmail.com', '$2y$10$HmKQmT.KJ0bPm9fvZZxojuET5GOMZPQjdIEdeP/1S2wxVAqO5mHmC', NULL, '2018-12-08 03:24:52', '2018-12-08 03:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

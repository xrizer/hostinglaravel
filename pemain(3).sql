-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 04:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemain`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarakun`
--

CREATE TABLE `daftarakun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_akun` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akun` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_akun` enum('Aktiva','Kewajiban','Modal','Pendapatan','Beban') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_akun` enum('Aktiva Lancar','Investasi Jangka Panjang','Aktiva Tetap','Aktiva Lain-Lain','Investasi Jangka Panjang','Kewajiban Lancar','Kewajiban Jangka Panjang','Modal','Pendapatan','Beban') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftarakun`
--

INSERT INTO `daftarakun` (`id`, `kode_akun`, `nama_akun`, `kategori_akun`, `sub_akun`, `created_at`, `updated_at`) VALUES
(3, '1101', 'Kas', 'Aktiva', 'Aktiva Lancar', '2021-11-17 05:02:23', '2021-11-17 05:02:23'),
(4, '2101', 'Utang Usaha', 'Kewajiban', 'Kewajiban Lancar', '2021-11-17 05:34:25', '2021-11-17 05:34:25'),
(5, '3101', 'Modal Pribadi', 'Modal', 'Modal', '2021-11-17 05:34:54', '2021-11-17 05:34:54'),
(6, '4101', 'penjualan', 'Pendapatan', 'Pendapatan', '2021-11-17 07:37:29', '2021-11-17 07:37:29');

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
(1, '2021_10_27_083724_create_pemain_table', 1),
(2, '2021_11_07_122152_create_daftarakun_table', 2),
(3, '2021_11_09_042851_create_users_table', 3),
(4, '2014_10_12_000000_create_users_table', 4),
(5, '2014_10_12_100000_create_password_resets_table', 4),
(6, '2021_11_17_065631_create_daftarakun_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_klub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `nama`, `jenis_kelamin`, `asal_klub`, `created_at`, `updated_at`) VALUES
(8, 'Sergio mantappu jiwa', 'L', 'manchester City', '2021-10-31 17:39:04', '2021-11-06 00:39:00'),
(14, 'Manuel Neuer', 'L', 'Bayern Munchen', '2021-11-06 00:00:23', '2021-11-06 00:00:23'),
(15, 'Nur aeni Hidayah', 'P', 'Manchester United', '2021-11-06 00:15:15', '2021-11-06 00:15:15'),
(16, 'Zulfiandri RPL', 'L', 'Juventus', '2021-11-06 00:16:13', '2021-11-06 00:16:13'),
(17, 'Kobe Bryant', 'L', 'La Lakers', '2021-11-06 00:39:31', '2021-11-06 00:39:31'),
(18, 'anjay', 'P', 'MU', '2021-11-08 07:33:11', '2021-11-08 07:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'akuntan', 'Salman', 'salman@gmail.com', NULL, '$2y$10$0ElTv1m8tDTl4SS3n/q3IO2Lpuv8dPfqhgSJOQ1xzGyQzqahpNz6m', 'xmNea1eJjRzfMSPZSx0oVSavgTnw5jWJmnqsLjWGpkQCdkwhsXNdUiijJHpD', '2021-11-11 00:01:52', '2021-11-11 00:01:52'),
(2, 'admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$rlb2cCn9fgjqHwlFvbSP7ugvlUQM9jqytolWpFCnHm24cljSK4jhO', 'QbxGPm8eIVn7uFhHlEPu17y133kE2xDcO1i21hYhgZuWlmB5gDveipdemlzp', '2021-11-11 00:26:57', '2021-11-11 00:26:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarakun`
--
ALTER TABLE `daftarakun`
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
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
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
-- AUTO_INCREMENT for table `daftarakun`
--
ALTER TABLE `daftarakun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

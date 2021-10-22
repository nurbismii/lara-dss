-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 04:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara-dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nim`, `nama`, `jurusan`, `created_at`, `updated_at`) VALUES
(3, '181011401456', 'Adam Pamungkas', 'Teknik Informatika', '2021-10-18 05:14:44', '2021-10-18 05:14:44'),
(4, '12324422151', 'Pianis', 'Manajemen', '2021-10-18 05:15:16', '2021-10-18 05:15:16'),
(5, '181011401400', 'Bagus Canrasa', 'Teknik Informatika', '2021-10-18 05:15:35', '2021-10-18 05:15:35'),
(6, '12324422242', 'Nito Alif', 'Teknik Informatika', '2021-10-18 05:15:55', '2021-10-18 05:15:55'),
(7, '12324422151', 'Puppy', 'Manajemen', '2021-10-20 06:16:15', '2021-10-20 06:16:15');

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
-- Table structure for table `himpunans`
--

CREATE TABLE `himpunans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `himpunans`
--

INSERT INTO `himpunans` (`id`, `kriteria_id`, `nama`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 'IPK <= 2,50', 2.5, '2021-10-16 01:18:02', '2021-10-16 03:42:41'),
(2, 1, '2,50 <= IPK <= 3,00', 5, '2021-10-16 03:38:47', '2021-10-16 03:43:13'),
(3, 1, '3,00 < IPK <= 3,50', 7.5, '2021-10-16 03:44:16', '2021-10-16 03:44:16'),
(4, 1, 'IPK > 3,50', 10, '2021-10-16 03:44:51', '2021-10-16 03:44:51'),
(5, 3, 'X <= 1.000.000', 10, '2021-10-16 03:45:58', '2021-10-16 03:45:58'),
(6, 3, 'Rp. 1.000.000 < X <= Rp', 7.5, '2021-10-16 03:47:15', '2021-10-16 03:47:15'),
(7, 3, 'Rp 3.000.000 < X < Rp', 5, '2021-10-16 03:48:17', '2021-10-16 03:48:17'),
(8, 3, 'X >= Rp 5.000.000', 2.5, '2021-10-16 03:48:46', '2021-10-16 03:48:46'),
(9, 4, 'Semester 2', 0, '2021-10-16 03:49:44', '2021-10-16 03:49:44'),
(10, 4, 'Semester 3', 2, '2021-10-16 03:50:03', '2021-10-16 03:50:03'),
(11, 4, 'Semester 4', 4, '2021-10-16 03:50:30', '2021-10-16 03:50:30'),
(12, 4, 'Semester 5', 6, '2021-10-16 03:50:48', '2021-10-16 03:50:48'),
(13, 4, 'Semester 6', 8, '2021-10-16 03:51:11', '2021-10-16 03:51:11'),
(14, 4, 'Semester 7', 10, '2021-10-16 03:51:35', '2021-10-16 08:12:27'),
(15, 6, 'Pasif', 0, '2021-10-16 04:36:48', '2021-10-16 04:40:03'),
(16, 5, '1 Anak', 0, '2021-10-16 04:37:17', '2021-10-16 04:38:27'),
(17, 5, '2 Anak', 2.5, '2021-10-16 04:38:56', '2021-10-16 04:38:56'),
(18, 5, '3 Anak', 5, '2021-10-16 04:39:17', '2021-10-16 04:39:17'),
(19, 5, '4 Anak', 7.5, '2021-10-16 04:39:34', '2021-10-16 04:39:34'),
(20, 5, '5 Anak', 10, '2021-10-16 04:39:49', '2021-10-18 19:34:50'),
(21, 6, 'Tingkat (Jurusan)', 2.5, '2021-10-16 04:40:25', '2021-10-16 04:40:25'),
(22, 6, 'Tingkat (Fakultas)', 5, '2021-10-16 04:41:00', '2021-10-16 04:41:00'),
(23, 6, 'Tingkat (Universitas)', 7.5, '2021-10-16 04:41:27', '2021-10-16 04:41:27'),
(24, 6, 'Tingkat (Antar Universitas)', 10, '2021-10-16 04:41:53', '2021-10-16 04:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atribut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama`, `atribut`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'IPK', 'benefit', 3, '2021-10-15 23:36:44', '2021-10-22 03:51:39'),
(3, 'Penghasilan Orang tua', 'cost', 4, '2021-10-15 23:42:59', '2021-10-21 08:21:57'),
(4, 'Semester', 'benefit', 2, '2021-10-15 23:43:29', '2021-10-21 08:45:01'),
(5, 'Jumlah Tanggungan Orang tau', 'benefit', 1, '2021-10-15 23:44:14', '2021-10-21 08:23:14'),
(6, 'Keikutsertaan Organisasi', 'benefit', 5, '2021-10-15 23:44:35', '2021-10-21 09:02:06');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_10_15_151627_create_kriterias_table', 2),
(10, '2021_10_15_150154_create_alternatifs_table', 3),
(11, '2021_10_15_150603_create_himpunans_table', 3),
(18, '2021_10_19_121039_normalisasi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alter_id` bigint(20) UNSIGNED NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  `C4` float NOT NULL,
  `C5` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id`, `alter_id`, `C1`, `C2`, `C3`, `C4`, `C5`, `created_at`, `updated_at`) VALUES
(22, 3, 2.5, 10, 0, 0, 0, '2021-10-22 06:40:30', '2021-10-22 06:40:30'),
(23, 4, 2.5, 10, 0, 0, 0, '2021-10-22 06:40:47', '2021-10-22 06:40:47'),
(24, 5, 2.5, 7.5, 2, 0, 2.5, '2021-10-22 06:41:19', '2021-10-22 06:41:19'),
(25, 6, 5, 5, 6, 2.5, 5, '2021-10-22 06:41:50', '2021-10-22 06:41:50'),
(26, 7, 2.5, 7.5, 4, 5, 7.5, '2021-10-22 06:42:49', '2021-10-22 06:42:49');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nur Bismi', 'nurbismi74@gmail.com', NULL, '$2y$10$ybNOKj11G.v9giSla4Gr6u.wS3z.Xxp248Nug0brXtNsn6bFnOa1i', NULL, '2021-10-15 07:11:43', '2021-10-15 07:11:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `himpunans`
--
ALTER TABLE `himpunans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `himpunans_kriteria_id_foreign` (`kriteria_id`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `normalisasi_alter_id_foreign` (`alter_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `himpunans`
--
ALTER TABLE `himpunans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `himpunans`
--
ALTER TABLE `himpunans`
  ADD CONSTRAINT `himpunans_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriterias` (`id`);

--
-- Constraints for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD CONSTRAINT `normalisasi_alter_id_foreign` FOREIGN KEY (`alter_id`) REFERENCES `alternatifs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

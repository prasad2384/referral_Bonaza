-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 10:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `referral_bonanza`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bank', '2024-06-20 07:27:52', '2024-06-20 07:27:52'),
(2, 'Credit Cards', '2024-06-27 03:50:00', '2024-06-27 03:50:00'),
(3, 'Mutual Funds', '2024-06-27 03:50:16', '2024-06-27 03:50:16'),
(4, 'Adani shares', '2024-06-27 03:50:38', '2024-06-27 03:50:38'),
(5, 'Ratan tata', '2024-06-27 03:50:53', '2024-06-27 03:50:53'),
(6, 'Employee', '2024-06-27 03:51:10', '2024-06-27 03:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `click_activities`
--

CREATE TABLE `click_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` date NOT NULL,
  `referral_id` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_14_094641_create_categories_table', 2),
(5, '2024_06_14_111633_create_categories_table', 3),
(6, '2024_06_15_100908_create_referral_links_table', 4),
(7, '2024_06_15_152805_create_click_activities_table', 5),
(8, '2024_06_15_153111_create_referral_websites_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_links`
--

CREATE TABLE `referral_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `referral_url` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `canonicalized_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `promo_terms` varchar(255) NOT NULL,
  `promo_terms_url` varchar(255) DEFAULT NULL,
  `promo_expiration_date` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `expected_payout` varchar(255) NOT NULL,
  `referee_share_percentage` varchar(255) NOT NULL,
  `referral_share_percentage` varchar(255) NOT NULL,
  `platform_percentage` varchar(255) NOT NULL,
  `expected_days` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referral_links`
--

INSERT INTO `referral_links` (`id`, `category_id`, `user_id`, `referral_url`, `display_name`, `canonicalized_name`, `logo`, `promo_terms`, `promo_terms_url`, `promo_expiration_date`, `expiry_date`, `status`, `expected_payout`, `referee_share_percentage`, `referral_share_percentage`, `platform_percentage`, `expected_days`, `created_at`, `updated_at`) VALUES
(5, '1', '2', 'http://www.google.come', 'MooMoo', NULL, 'img6.jfif', '1', 'http://www.google.come', '2024-07-06', NULL, 'Pending', '1000', '200', '200', '200', '12', '2024-07-01 07:46:53', '2024-07-16 15:01:44'),
(6, '2', '6', 'http://www.google.come', 'MOOOO', NULL, 'default_user_logo.png', 'd', 'http://www.google.come', '2024-07-03', NULL, 'Pending', '1000', '100', '100', '12', '12', '2024-07-01 07:56:22', '2024-07-16 15:04:19'),
(7, '1', '2', 'http://www.google.come', 'Prasad', 'Prasad', 'footer.jfif', '1', 'http://www.google.com', '2024-07-16', NULL, 'Pending', '1000', '450', '12', '3', '5', '2024-07-02 02:03:31', '2024-07-02 02:03:31'),
(8, '1', '2', 'http://www.google.come', 'Google', NULL, 'banner.png', '1', 'http://www.google.com', '2024-07-02', NULL, 'Pending', '134', '34', '34', '123', '34', '2024-07-02 02:22:00', '2024-07-02 02:22:00'),
(9, '1', '2', 'http://www.google.come', 'Private', NULL, 'img2.png', '123', 'http://www.google.com', '2024-07-04', NULL, 'Pending', '10', '123', '45', '1', '12', '2024-07-02 02:25:05', '2024-07-02 02:25:05'),
(10, '1', '6', 'http://www.google.com', 'MOMO', NULL, 'img1.png', '123', 'http://www.google.com', '2024-07-25', NULL, 'Pending', '12', '145', '123', '1000', '12', '2024-07-02 02:26:24', '2024-07-02 02:26:24'),
(11, '1', '5', 'http://www.amazon.com', 'Amazon', 'Amazon', 'img5.jfif', '123', 'http://www.google.com', '2024-07-03', NULL, 'Pending', '456', '4547', '413', '10', '10', '2024-07-02 02:32:13', '2024-07-16 15:03:41'),
(12, '1', '2', 'http://www.google.com', 'Logo', NULL, 'logo.PNG', '123', 'http://www.google.com', '2024-07-10', NULL, 'Pending', '123', '123', '12', '34', '23', '2024-07-02 02:33:49', '2024-07-02 02:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `referral_websites`
--

CREATE TABLE `referral_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `canonicalized_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `expiry_date` timestamp NULL DEFAULT NULL,
  `promo_terms` varchar(255) NOT NULL,
  `promo_terms_url` varchar(255) DEFAULT NULL,
  `promo_expiration_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `expected_payout` varchar(255) NOT NULL,
  `referee_share_percentage` varchar(255) NOT NULL,
  `referral_share_percentage` varchar(255) NOT NULL,
  `platform_percentage` varchar(255) NOT NULL,
  `expected_days` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lrfVixR0365tQaeex6E5fs4ZQjYBy2BuDuEy7Ghz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6ImxvY2FsZSI7TjtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiNW9QNmxGQmZ6ZlpZVzFSU0JnY1RMQ2dwZEtpVXdXN2NGSXBIZ3h2dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1721160272),
('qsOJ9G9Ia3mhpoUddFEzYasujq1gIysjBF1NuAUm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6ImxvY2FsZSI7TjtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiRmRjZUcxdEdUbWQ4aWxCSGJBUHVacTlHMVdlZVlISTRoUTN2VTRuUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1721162200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) DEFAULT 'user',
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `usertype`, `address`, `phone`, `logo`, `status`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$12$82hezuFhhklqzcFXAOk51uH0WXkLagaSOl7dhHa.tdhsDR8j0IDyq', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 07:05:34', '2024-06-20 07:05:34'),
(2, 'PRASAD', 'Prasad', 'Rodage', 'prodage984@gmail.com', NULL, '$2y$12$Uya1eroMZ9ujwLE0Q6.9u.cmDj9.UrGT4ScYnypOa5uYUBGfMxQKy', 'user', '102 B/ 6 Bhavani Peth,Solapur', '8855921085', 'prasad_62.jpg', NULL, 'I hope you can make good use of any my referral links. Life gets expensive especially at the moment so I am glad if it helps anyone out. I hope you can make good use of any my referral links. Life gets expensive especially at the moment so I am glad if it helps anyone out.', NULL, '2024-06-20 07:14:45', '2024-07-16 07:20:43'),
(3, NULL, 'Suraj', 'Namaji', 'suraj@gmail.com', NULL, '$2y$12$dEOxMMV2NLreNKk7TZQxeeiOxMEH76qBHCpPUPczQl7TY4Nt5Pndy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-20 07:46:23', '2024-06-20 07:46:23'),
(4, 'vwxyz', 'xyz', 'xyz', 'xyz@gmail.com', NULL, '$2y$12$zvArC5FG4D6.eeR.VzeYOepB3kdR/cJxEGF78iX7EMmP14GxYSQX2', 'user', NULL, '8855921085', NULL, '1', NULL, NULL, '2024-06-27 03:43:20', '2024-06-27 03:43:20'),
(5, 'pqrsw', 'pqr', 'pqr', 'pqr@gmail.com', NULL, '$2y$12$uJ7jclwSKVK7E6u7SRbP3.eDzGQR8YIFEoEyla0c3up0gdMa1GHgy', 'user', NULL, NULL, NULL, '1', NULL, NULL, '2024-06-27 03:45:59', '2024-06-27 03:45:59'),
(6, 'pranav', 'pranav', 'mukharji', 'pranavmukharji@gmail.com', NULL, '$2y$12$noeMmraVQ9j8Iy/ibSTjquVBpbWbctUUiWY940q4lheJCfMNg/3RC', 'user', NULL, '8855921085', NULL, '1', NULL, NULL, '2024-06-27 03:48:21', '2024-06-27 03:48:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `click_activities`
--
ALTER TABLE `click_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `referral_links`
--
ALTER TABLE `referral_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_websites`
--
ALTER TABLE `referral_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `click_activities`
--
ALTER TABLE `click_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `referral_links`
--
ALTER TABLE `referral_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `referral_websites`
--
ALTER TABLE `referral_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
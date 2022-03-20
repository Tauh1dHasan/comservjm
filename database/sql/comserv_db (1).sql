-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 09:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comserv_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_certificates`
--

CREATE TABLE `aboutus_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificateOne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificateTwo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificateThree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus_certificates`
--

INSERT INTO `aboutus_certificates` (`id`, `title`, `description`, `image`, `certificateOne`, `certificateTwo`, `certificateThree`, `created_at`, `updated_at`) VALUES
(1, 'We are a Qualified & Certified Electrical Company', '<p>We currently employ a team of fully qualified electricians and a number of apprentices. We have been registered with he ECA and therefore all our electricians are JIB registered. Our aim is to keep our services high and our prices very competitive.</p>', '1647802200.jpg', '1647802272.jpg', '1647802272.jpg', '1647802272.jpg', NULL, '2022-03-20 12:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_experiences`
--

CREATE TABLE `aboutus_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus_experiences`
--

INSERT INTO `aboutus_experiences` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Experienced and Reliable Electrical Contractors...', '<p>We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians. We started out in 2002. We are locally owned and operated which makes our services causal as they are done by friendly and helpful ......</p>', '1647617772.jpg', NULL, '2022-03-18 09:36:12');

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
-- Table structure for table `home_aboutuses`
--

CREATE TABLE `home_aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_aboutuses`
--

INSERT INTO `home_aboutuses` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Outstanding Residential & Commercial Services update', '<p>All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting for your outdoors to a whole home generator that will keep your appliances working during a power outage.</p>\r\n\r\n<ol>\r\n	<li>Full-service electrical layout, design :)</li>\r\n	<li>Wiring and installation/upgrades</li>\r\n	<li>Emergency power solutions (generators)</li>\r\n	<li>Virtually any electrical needs you have &ndash; just ask!</li>\r\n</ol>', '1647194302.jpg', NULL, '2022-03-14 12:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `home_highlights`
--

CREATE TABLE `home_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_highlights`
--

INSERT INTO `home_highlights` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Commercial', 'We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.', '1647509138.jpg', NULL, '2022-03-17 03:25:38'),
(2, 'Industrial', 'We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.', 'slideinfo-02.jpg', NULL, NULL),
(3, 'Residential', 'We offer the highest level of responsiveness and reliability, including on-line job management and reporting. Our highly experienced contractors across the nation ensure that your premises are always maintained and compliant.', 'slideinfo-03.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_main_sliders`
--

CREATE TABLE `home_main_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_main_sliders`
--

INSERT INTO `home_main_sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We Are The Specialist !', '1647105519.webp', NULL, '2022-03-14 11:51:46'),
(2, 'We Are The Best !', '1647105541.jpg', NULL, '2022-03-14 11:52:13'),
(3, 'Work With The Best !', '1647105554.jpg', NULL, '2022-03-12 11:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `home_offers`
--

CREATE TABLE `home_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_offers`
--

INSERT INTO `home_offers` (`id`, `title`, `description`, `phone_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We offer only the best services Guaranteed', '<p>Our electrical repair and service options are proudly offered to clients. Give us a call today to schedule a free service estimate!</p>', '1(800)7654321', '1647527882.jpg', NULL, '2022-03-17 08:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_statistics`
--

CREATE TABLE `home_statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential` int(11) DEFAULT NULL,
  `commercial` int(11) DEFAULT NULL,
  `industrial` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_statistics`
--

INSERT INTO `home_statistics` (`id`, `title`, `residential`, `commercial`, `industrial`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Important Facts', 500, 800, 300, '1647538181.jpg', NULL, '2022-03-17 11:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonials`
--

CREATE TABLE `home_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonials`
--

INSERT INTO `home_testimonials` (`id`, `title`, `description`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Professional', 'What a good service we have from them, really good work. Thanks', 'computer world', '1647540550.jpg', '2022-03-17 12:09:10', '2022-03-17 12:09:10');

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
(5, '2022_03_12_144741_create_home_main_sliders_table', 2),
(6, '2022_03_13_173450_create_home_aboutuses_table', 3),
(7, '2022_03_17_081635_create_home_highlights_table', 4),
(8, '2022_03_17_140947_create_home_offers_table', 5),
(9, '2022_03_17_170745_create_home_statistics_table', 6),
(10, '2022_03_17_174828_create_home_testimonials_table', 7),
(11, '2022_03_18_144305_create_aboutus_experiences_table', 8),
(12, '2022_03_18_160230_create_aboutus_certificates_table', 9),
(13, '2022_03_20_193051_create_teams_table', 10);

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Name Two', 'Head of Testing', '1647806668.jpg', '2022-03-20 14:04:28', '2022-03-20 14:04:28'),
(3, 'Name Three', 'Dolor animi ratione', '1647806706.jpg', '2022-03-20 14:05:06', '2022-03-20 14:05:06'),
(4, 'Name One', 'Software Engineer', '1647806740.jpg', '2022-03-20 14:05:40', '2022-03-20 14:05:40');

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
(1, 'Admin', 'admin@mail.com', NULL, '$2y$10$nD1lBJT4Vwo2obhjHpCDueBgm17s9G02CTYfbX7LrvKu36Lj81PH.', NULL, '2022-03-11 09:46:23', '2022-03-11 09:46:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_certificates`
--
ALTER TABLE `aboutus_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_experiences`
--
ALTER TABLE `aboutus_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_aboutuses`
--
ALTER TABLE `home_aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_highlights`
--
ALTER TABLE `home_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_main_sliders`
--
ALTER TABLE `home_main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_offers`
--
ALTER TABLE `home_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_statistics`
--
ALTER TABLE `home_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_testimonials`
--
ALTER TABLE `home_testimonials`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `aboutus_certificates`
--
ALTER TABLE `aboutus_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_experiences`
--
ALTER TABLE `aboutus_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_aboutuses`
--
ALTER TABLE `home_aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_highlights`
--
ALTER TABLE `home_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_main_sliders`
--
ALTER TABLE `home_main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_offers`
--
ALTER TABLE `home_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_statistics`
--
ALTER TABLE `home_statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_testimonials`
--
ALTER TABLE `home_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

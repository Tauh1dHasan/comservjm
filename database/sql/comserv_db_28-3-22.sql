-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 08:43 PM
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Does conduit need to go inside the transformer box?', 'No. Conduit should be stopped just short of the box.', '2022-03-22 12:08:17', '2022-03-22 12:08:17'),
(2, 'Is additional conduit required beyond what is installed in the ditch?', 'If the service is being supplied from a utility pole, the member is required to supply 1-10\' section of SCH 80 PVC and 2-10\' sections of SCH 40 PVC to be left near the base of the pole for installation by the power company up the pole.', '2022-03-22 12:08:59', '2022-03-22 12:08:59'),
(3, 'Is there a difference in meter bases?', 'Yes, There are three types. Overhead only, Underground only, and Overhead/Underground combination bases. However, combination boxes are not recommended for Underground installations because of their limited wire space.', '2022-03-22 12:09:18', '2022-03-22 12:09:18'),
(4, 'Can permanent service be installed if the house has had a ruff in inspection?', 'No, We will not set a meter without a final inspection or in some instances a non occupancy permit shall be allowed from the local electrical inspector.', '2022-03-22 12:09:30', '2022-03-22 12:09:30'),
(5, 'How close to the pole do I bring my conduit to?', 'The top of the elbow must be 6\" from the pole.', '2022-03-22 12:09:44', '2022-03-22 12:09:44'),
(6, 'Does someone need to inspect the ditch before covering the conduit?', 'Yes, contact the power company and a representative will come and inspect the ditch and conduit. The representative will place a white sticker on the meter panel with a pass or fail notice.', '2022-03-22 12:10:01', '2022-03-22 12:10:01'),
(8, 'What about outdoor lighting?', 'We offer a variety of lighting products including decorative colonial, cobra head, directional floodlights, and security lights. We can customize plans to fit any lighting need.', '2022-03-22 12:10:27', '2022-03-22 12:10:27'),
(9, 'Can septic lines be installed under power lines?', 'Yes.', '2022-03-22 12:21:42', '2022-03-22 12:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Photo Gallery', 'You will really enjoy doing business with us! Fast, electrical estimates at a competitive price. We save you time and money. Interested? Check out our photos.', NULL, NULL, NULL),
(3, NULL, NULL, '1647888879.jpg', '2022-03-21 12:54:39', '2022-03-21 12:54:39'),
(5, NULL, NULL, '1647889146.jpg', '2022-03-21 12:59:06', '2022-03-21 12:59:06'),
(6, NULL, NULL, '1648154865.jpg', '2022-03-24 14:47:45', '2022-03-24 14:47:45');

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
(1, 'what ever', '<p>All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting for your outdoors to a whole home generator that will keep your appliances working during a power outage.</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Full-service electrical layout, design :)</p>\r\n	</li>\r\n	<li>Wiring and installation/upgrades</li>\r\n	<li>Emergency power solutions (generators)</li>\r\n	<li>Virtually any electrical needs you have &ndash; just ask!</li>\r\n</ol>', '1647194302.jpg', NULL, '2022-03-24 14:17:24');

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
(2, 'We provide best services', '1648152703.jpg', NULL, '2022-03-24 14:11:43'),
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
(13, '2022_03_20_193051_create_teams_table', 10),
(14, '2022_03_21_173157_create_galleries_table', 11),
(15, '2022_03_22_173934_create_faqs_table', 12),
(16, '2022_03_25_164621_create_settings_table', 13),
(17, '2022_03_25_195037_create_shop_categories_table', 14),
(18, '2022_03_25_201342_create_products_table', 15),
(19, '2022_03_26_155337_create_service_categories_table', 16),
(20, '2022_03_26_172314_create_services_table', 17);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favorite` tinyint(4) DEFAULT NULL COMMENT '1 = true, 0 = false',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `shop_category_id`, `name`, `price`, `favorite`, `image`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Blackt Electrotech', '10$', 1, '1648304564.jpg', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', '2022-03-26 08:22:44', '2022-03-26 08:22:44'),
(2, 3, 'Judith Hancock', '15$', 1, '1648305146.jpg', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', '2022-03-26 08:32:26', '2022-03-26 08:32:26'),
(3, 4, 'New 30-1', NULL, 1, '1648305167.jpg', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', '2022-03-26 08:32:47', '2022-03-26 08:32:47'),
(4, 5, 'Clare Dickerson', NULL, 1, '1648305187.jpg', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', 'We offer complete lines of Professional Manufacturer Lighting & Electrical products at Wholesale Prices. We make it our job to provide the best price and most gratifying shopping experience.', '2022-03-26 08:33:07', '2022-03-26 08:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_category_id`, `name`, `header_image`, `short_description`, `long_description`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 1, 'Judith Hancock', '1648405285.jpg', 'Electricity is arguably the most valuable resource we have in our modern society. Without electricity, most of the things we do and rely on on a daily basis wouldn’t be there.', '<p>Home Electrical Repair</p>\r\n\r\n<p>Electricity is arguably the most valuable resource we have in our modern society. Without electricity, most of the things we do and rely on on a daily basis wouldn&rsquo;t be there. So while electricity is so ingrained into our lives that we can take it for granted and hardly notice it&rsquo;s there, if there&rsquo;s an electrical problem, it can be difficult to notice anything else.</p>\r\n\r\n<p>Our electrical repair technicians know what a hassle any electrical problems can be, which is why we&rsquo;ll always respond to any requests for service as quickly as possible. And because all of our technicians are licensed, background checked, and professionally trained, you&rsquo;re guaranteed to receive the best quality service and workmanship available when you call us. We can assist with all your electric needs including:</p>', '1648405285.jpg', '1648405285.jpg', '2022-03-27 12:21:25', '2022-03-27 12:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Main service', '2022-03-26 10:44:05', '2022-03-26 10:44:05'),
(2, 'Second Service', '2022-03-27 11:54:31', '2022-03-27 11:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workhours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `address`, `workhours`, `phone1`, `phone2`, `footer_text`, `facebook`, `insta`, `created_at`, `updated_at`) VALUES
(1, '8494 Signal Hill Road Manassas, VA, 20110', 'Mon-Fri 08:00 AM - 05:00 PM', '1 (800) 765-43-21', '1 (800) 765-43-22', 'Our experienced electricians are highly trained in all aspects of electrical service, from office lighting and security systems to emergency repair.', 'https://facebook.com/', 'https://facebook.com/', NULL, '2022-03-25 12:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Generators', '2022-03-26 06:14:54', '2022-03-26 06:14:54'),
(3, 'Electronics', '2022-03-26 06:15:03', '2022-03-26 06:15:03'),
(4, 'Extension Cords', '2022-03-26 06:15:09', '2022-03-26 06:15:09'),
(5, 'Batteries & Chargers', '2022-03-26 06:15:15', '2022-03-26 06:15:15');

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
(4, 'Name One', 'Software Engineer', '1647806740.jpg', '2022-03-20 14:05:40', '2022-03-20 14:05:40'),
(7, 'The special man', 'Special Person', '1648154353.jpg', '2022-03-24 14:39:13', '2022-03-24 14:39:13');

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `categoryblog_id` bigint(20) UNSIGNED NOT NULL,
  `title_blog` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content_blog` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_blog` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status_blog` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categoryblog_id`, `title_blog`, `content_blog`, `img_blog`, `status_blog`, `created_at`, `updated_at`) VALUES
(64, 1, 'The Personality Trait That Makes People Happier', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/project_websitebanhang/project_admin/public//storage/photos/13/blog/blog-2.jpg\" alt=\"\" width=\"410\" height=\"280\" /></p>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'blog-1.jpg', 2, '2021-05-17 23:19:30', '2021-05-18 01:03:40'),
(65, 1, 'The Personality Trait That Makes People Happier', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/project_websitebanhang/project_admin/public//storage/photos/13/blog/blog-detail-3.jpg\" alt=\"\" width=\"330\" height=\"250\" /></p>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'blog-3.jpg', 1, '2021-05-18 00:00:28', '2021-05-18 00:20:15'),
(66, 2, 'The Personality Trait That Makes People Happier', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/project_websitebanhang/project_admin/public//storage/photos/13/blog/feature-blog-detail-5.jpg\" alt=\"\" width=\"900\" height=\"600\" /></p>\r\n<h2>Where does it come from?</h2>\r\n<p style=\"text-align: left;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p style=\"text-align: left;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'feature-blog-detail-5.jpg', 2, '2021-05-18 00:22:44', '2021-05-18 00:23:06'),
(68, 3, 'The Personality Trait That Makes People Happier', '<p><img src=\"/project_websitebanhang/project_admin/public//storage/photos/13/blog/feature-blog-detail-1.jpg\" alt=\"\" width=\"1519\" height=\"855\" /></p>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'feature-blog-detail-4.jpg', 2, '2021-05-18 01:05:35', '2021-05-18 01:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_category_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `title_category_blog`, `created_at`, `updated_at`) VALUES
(1, 'Travel', NULL, '2021-05-18 03:03:01'),
(2, 'Fashion', NULL, NULL),
(3, 'Model', NULL, NULL),
(5, 'Picnic', '2021-05-18 02:30:48', '2021-05-18 02:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `category_clothings`
--

CREATE TABLE `category_clothings` (
  `id` int(11) NOT NULL,
  `title_category_clothing` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_clothings`
--

INSERT INTO `category_clothings` (`id`, `title_category_clothing`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirt', NULL, NULL),
(2, 'Shirt', NULL, NULL),
(3, 'Dress', NULL, NULL),
(4, 'Sweater & Cadigan', NULL, NULL),
(5, 'Outerwear', NULL, NULL),
(6, 'Blazer', NULL, NULL),
(7, 'Denim', NULL, NULL),
(8, 'Sneaker', NULL, NULL),
(9, 'Bag', NULL, NULL),
(10, 'Coat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_collections`
--

CREATE TABLE `category_collections` (
  `id` int(11) NOT NULL,
  `collection` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_collections`
--

INSERT INTO `category_collections` (`id`, `collection`, `created_at`, `updated_at`) VALUES
(1, 'men', NULL, NULL),
(2, 'women', NULL, NULL),
(3, 'child', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_img_men`
--

CREATE TABLE `feature_img_men` (
  `id_feature_men` int(11) NOT NULL,
  `title_feature_men` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price_feature_men` int(11) NOT NULL,
  `img_feature_men` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `feature_img_men`
--

INSERT INTO `feature_img_men` (`id_feature_men`, `title_feature_men`, `price_feature_men`, `img_feature_men`) VALUES
(1, 'ZIPPED RAGLAN JACKET IN PALM SATIN JACQUARD', 1500, 'http://localhost/project_websitebanhang/project_user/public/img/men/feature-men-1.jpg'),
(2, 'SHIRT IN WILD ORCHID SILK CREPE DE CHINE', 1000, 'http://localhost/project_websitebanhang/project_user/public/img/men/feature-men-2.jpg'),
(3, 'WESTERN SHIRT IN DOTTED SILK SATIN', 5200, 'http://localhost/project_websitebanhang/project_user/public/img/men/feature-men-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feature_img_women`
--

CREATE TABLE `feature_img_women` (
  `id_feature_women` int(11) NOT NULL,
  `title_feature_women` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price_feature_women` int(11) NOT NULL,
  `img_feature_women` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `feature_img_women`
--

INSERT INTO `feature_img_women` (`id_feature_women`, `title_feature_women`, `price_feature_women`, `img_feature_women`) VALUES
(1, 'TEA BLOUSE IN SILK SATIN', 550, 'http://localhost/project_websitebanhang/project_user/public/img/women/feature-women-1.jpg'),
(2, 'SHORT JACKET IN CHECK WOOL AND SILK TWEED\r\n', 800, 'http://localhost/project_websitebanhang/project_user/public/img/women/feature-women-2.jpg'),
(3, 'LONG CARDIGAN IN CASHMERE\r\n', 1200, 'http://localhost/project_websitebanhang/project_user/public/img/women/feature-women-3.jpg');

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
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2019_08_19_000000_create_failed_jobs_table', 1),
(45, '2021_03_10_162958_create_category_blogs_table', 1),
(56, '2021_04_06_025138_add_created_at_to_products_table', 2),
(57, '2021_05_17_165544_add_timestamps_to_blogs_table', 3),
(58, '2021_05_18_160905_create_timestamps_to_category_clothings_table', 4),
(59, '2021_05_18_162514_create_timestamps_to_category_collections_table', 5);

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
('vudanhhungphi@gmail.com', '$2y$10$WUvs9yJCgKCXga/Kg97l8ODekJOb5VKOHt9RzTKdEQVN2tb6dLWWe', '2021-05-06 07:17:41'),
('vudanhhungphi021@gmail.com', '$2y$10$ouBa6xfRq9Jn7VkL9z3nyu9aWZj/F2oQb5.dDjbnUxxKpQySLFRa.', '2021-05-10 18:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categoryclothing_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` varchar(11) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `collection` int(11) NOT NULL,
  `status_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryclothing_id`, `name`, `description`, `detail`, `price`, `discount`, `qty`, `img`, `collection`, `status_product`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 'Aodec One Jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1400, '1200', 10, 'men-2.jpg', 1, 1, '2021-04-01 03:09:02', '2021-05-18 08:45:04', NULL),
(2, 4, 'AODEC Seven Cardigan', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 3500, '3000', 5, 'men-3.jpg', 1, 1, '2021-04-10 03:09:09', NULL, NULL),
(3, 4, 'AODEC Nine Cardigan', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 3400, '2900', 122, 'men-4.jpg', 1, 1, '2021-04-05 03:09:12', NULL, NULL),
(4, 6, 'AODEC O2 Turquoise Blazer', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 3600, '3400', 245, 'men-5.jpg', 1, 2, '2021-04-19 03:09:16', NULL, NULL),
(5, 6, 'AODEC Two Blazer', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 2500, '2450', 876, 'men-6.jpg', 1, 2, '2021-04-12 03:09:19', NULL, NULL),
(6, 6, 'AODEC Three Blazer', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 1200, '1000', 135, 'men-7.jpg', 1, 2, '2021-04-19 03:09:22', NULL, NULL),
(7, 2, 'AODEC Eighteen Shirt', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 3000, '2550', 20, 'men-8.jpg', 1, 2, '2021-02-16 03:09:24', NULL, NULL),
(8, 2, 'AODEC Nineteen Shirt', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 2000, '1800', 5, 'men-9.jpg', 1, 2, '2020-12-22 03:09:27', NULL, NULL),
(9, 10, 'AODEC Gray Heart Locked Sweatshirt', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6250, '5870', 522, 'men-10.jpg', 1, 2, '2020-11-15 03:09:31', NULL, NULL),
(10, 4, 'AODEC O2 Multicolor Jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1500, '1400', 16, 'men-1.jpg', 1, 2, '2021-04-14 03:09:38', NULL, NULL),
(66, 10, 'Tweed jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 3500, '3200', 123, 'women-1.jpg', 2, 2, '2021-02-23 03:09:41', NULL, NULL),
(101, 10, 'Double-breasted wool jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2900, '2500', 186, 'women-2.jpg', 2, 2, '2021-01-19 03:09:44', NULL, NULL),
(102, 10, 'GG check tweed jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5000, '3400', 26, 'women-3.jpg', 2, 2, '2020-11-24 03:09:47', NULL, NULL),
(103, 6, 'Petit mohair wool jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 2950, '2700', 99, 'women-4.jpg', 2, 1, '2021-02-16 03:09:51', NULL, NULL),
(104, 4, 'Oversize tweed cardigan jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 3500, '3200', 68, 'women-5.jpg', 2, 1, '2021-02-15 03:09:54', NULL, NULL),
(105, 5, 'Curly shearling jacket', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 5500, '4800', 45, 'women-6.jpg', 2, 1, '2021-03-26 03:09:58', NULL, NULL),
(106, 2, 'WOOL & CASHMERE BLEND CARDIGAN', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1500, '1300', 195, 'women-7.jpg', 2, 1, '2020-11-30 03:10:02', NULL, NULL),
(107, 4, 'CROPPED SILK CARDIGAN', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 10000, '6900', 264, 'women-8.jpg', 2, 2, '2020-07-21 03:10:05', NULL, NULL),
(108, 2, 'ARGYLE INTARSIA KNIT SILK CARDIGAN', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 6000, '5200', 69, 'women-9.jpg', 2, 2, '2021-01-18 03:10:12', NULL, NULL),
(109, 1, 'Baby embroidered cotton polo\r\n', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 650, '490', 365, 'child-1.jpg', 3, 2, '2021-01-23 03:10:16', NULL, NULL),
(110, 1, 'Baby Gucci script cotton one-piece', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 470, '465', 123, 'child-4.jpg', 3, 1, '2021-01-15 03:10:20', NULL, NULL),
(111, 2, 'Baby anchor and Interlocking G fil coupé shirt', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 380, '360', 564, 'child-3.jpg', 3, 2, '2021-01-11 03:10:23', NULL, NULL),
(112, 4, 'Baby Gucci disk print sweatshirt', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 250, '249', 564, 'child-2.jpg', 3, 2, '2021-01-12 03:10:29', NULL, NULL),
(113, 10, 'Baby nylon jacket with Gucci script', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 680, '620', 95, 'child-5.jpg', 3, 1, '2021-02-22 03:10:32', NULL, NULL),
(115, 4, 'Baby cotton sweatshirt with Gucci logo', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 290, '250', 21, 'child-7.jpg', 3, 1, '2021-04-05 03:10:34', NULL, NULL),
(116, 1, 'Baby embroidered cotton polo', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 290, '240', 34, 'child-8.jpg', 3, 2, NULL, NULL, NULL),
(117, 4, 'Baby striped wool sweater with Gucci chick', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor\r\n                                        sit amet, consectetur adipisicing elit, sed do mod tempor', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 450, '395', 52, 'child-9.jpg', 3, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recent_blogs`
--

CREATE TABLE `recent_blogs` (
  `id` int(11) NOT NULL,
  `categoryblog_id` bigint(20) UNSIGNED NOT NULL,
  `title_recent_blog` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_recent_blog` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_time` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `recent_blogs`
--

INSERT INTO `recent_blogs` (`id`, `categoryblog_id`, `title_recent_blog`, `img_recent_blog`, `post_time`) VALUES
(5, 2, 'The Personality Trait That Makes...', 'http://localhost/project_websitebanhang/project_user/public/img/blog/recent-1.jpg', 'Jan 2, 2021'),
(6, 1, 'The Personality Trait That Makes...', 'http://localhost/project_websitebanhang/project_user/public/img/blog/recent-2.jpg', 'Apr 22, 2021'),
(7, 1, 'The Personality Trait That Makes...', 'http://localhost/project_websitebanhang/project_user/public/img/blog/recent-3.jpg', 'Aug 7, 2021'),
(8, 3, 'The Personality Trait That Makes...', 'http://localhost/project_websitebanhang/project_user/public/img/blog/recent-4.jpg', 'Oct 20, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Waiting'),
(2, 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT 2,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phoneNumber` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(2) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `year` int(5) DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `phoneNumber`, `password`, `remember_token`, `gender`, `day`, `month`, `year`, `img`, `created_at`, `updated_at`) VALUES
(11, 2, '_hng.pi_', 'vudanhhungphi021@gmail.com', NULL, '0398391694', '$2y$10$WSLvNGYaXZ.2DQwrpzRc1uIVBw3Hmu2puYE3OBSiSq7ZrjeTh4UI.', 'bFaXGra4DXHcFn3FXf7Bo7WZ5ksyP3sQmYWs6A4tBthJ77fQoPdLSAb5mRQo', 'Male', 10, 10, 2000, '154719519_505699850412543_391153293435411780_n.jpg', '2021-05-17 02:45:36', '2021-05-21 06:21:34'),
(27, 2, 'John Nathan', 'john123@gmail.com', NULL, '0123456789', '', NULL, 'Male', 16, 11, 1991, 'feature-men.jpg', '2021-05-19 02:43:21', '2021-05-19 09:35:35'),
(32, 1, 'Admin', 'vudanhhungphi@gmail.com', NULL, NULL, '$2y$10$Hwl.LvccxY48i2/oYxA1x.af.YAeFOT5pudamCg/ShejkRx2y6ytO', 'ENzNX8RWRqIbMhXQ4FSkpQBHzNAmxTsItwePIw2yLj7vefyFD3ZOPeu6xktN', 'Male', 20, 10, 2000, '154446386_332655788156468_2762669974402858112_n.jpg', '2021-05-19 07:44:36', '2021-05-19 10:35:36'),
(34, 2, 'John', 'vu@gmail.com', NULL, NULL, '$2y$10$57KqgPSR6NTL23.Ji6ANjektBWmh8ffN1NUhPwdccQbESCWDcVgsa', NULL, NULL, 0, 0, 1989, 'banner-3.jpg', '2021-05-19 10:34:22', '2021-05-20 10:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_ibfk_1` (`status_blog`),
  ADD KEY `Test` (`categoryblog_id`);

--
-- Indexes for table `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_clothings`
--
ALTER TABLE `category_clothings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_collections`
--
ALTER TABLE `category_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_img_men`
--
ALTER TABLE `feature_img_men`
  ADD PRIMARY KEY (`id_feature_men`);

--
-- Indexes for table `feature_img_women`
--
ALTER TABLE `feature_img_women`
  ADD PRIMARY KEY (`id_feature_women`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryclothing_id` (`categoryclothing_id`),
  ADD KEY `collection` (`collection`),
  ADD KEY `status_product` (`status_product`);

--
-- Indexes for table `recent_blogs`
--
ALTER TABLE `recent_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recent_blogs_fk_category_blog_foreign` (`categoryblog_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_clothings`
--
ALTER TABLE `category_clothings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_collections`
--
ALTER TABLE `category_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_img_men`
--
ALTER TABLE `feature_img_men`
  MODIFY `id_feature_men` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_img_women`
--
ALTER TABLE `feature_img_women`
  MODIFY `id_feature_women` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `recent_blogs`
--
ALTER TABLE `recent_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `Test` FOREIGN KEY (`categoryblog_id`) REFERENCES `category_blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`status_blog`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryclothing_id`) REFERENCES `category_clothings` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`collection`) REFERENCES `category_collections` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`status_product`) REFERENCES `status` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

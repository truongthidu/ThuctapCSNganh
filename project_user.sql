-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 04:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

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
  `img_blog` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_time` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categoryblog_id`, `title_blog`, `img_blog`, `post_time`) VALUES
(9, 2, 'The Personality Trait That Makes People Happier', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-1.jpg', 'Jan 2, 2021'),
(10, 1, 'This was one of our first days in Hawaii last week.', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-2.jpg', 'Apr 22, 2021'),
(11, 3, 'Last week I had my first work trip of the year to Sonoma Valley', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-3.jpg', 'Jan 2, 2020'),
(12, 1, 'Happppppy New Year! I know I am a little late on this post', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-4.jpg', 'Oct 20, 2021'),
(13, 1, 'Absolue collection. The Lancome team has been one…', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-5.jpg', 'Oct 7, 2021'),
(14, 3, 'Writing has always been kind of therapeutic for me', 'http://localhost/project_websitebanhang/project_user/public/img/blog/blog-6.jpg', 'Sept 14, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` int(11) NOT NULL,
  `title_blog_detail` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content_blog_detail` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img_feature_blog_detail` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `post_time` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `title_blog_detail`, `content_blog_detail`, `img_feature_blog_detail`, `post_time`) VALUES
(1, 'The Personality Trait That Makes People Happier', '', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail.jpg', 'May 19, 2019'),
(2, 'This was one of our first days in Hawaii last week.', '<p>abc</p>', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-1.jpg', 'Jan 2, 2020'),
(3, 'Last week I had my first work trip of the year to Sonoma Valley', 'klwjio ef8iuwvue9o <img src =\"http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-3.jpg\">', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-3.jpg', 'Jan 2, 2020'),
(4, 'Happppppy New Year! I know I am a little late on this post', '', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-4.jpg', 'Oct 20, 2021'),
(5, 'Absolue collection. The Lancome team has been one…', '', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-5.jpg', 'Oct 7, 2021'),
(6, 'Writing has always been kind of therapeutic for me', '', 'http://localhost/project_websitebanhang/project_user/public/img/blog/feature-blog-detail-2.jpg', 'Sept 14, 2021');

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
(1, 'Travel', NULL, NULL),
(2, 'Fashion', NULL, NULL),
(3, 'Model', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_clothings`
--

CREATE TABLE `category_clothings` (
  `id` int(11) NOT NULL,
  `title_category_clothing` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_clothings`
--

INSERT INTO `category_clothings` (`id`, `title_category_clothing`) VALUES
(1, 'T-Shirt'),
(2, 'Shirt'),
(3, 'Dress'),
(4, 'Sweater & Cadigan'),
(5, 'Outerwear'),
(6, 'Blazer'),
(7, 'Denim'),
(8, 'Sneaker'),
(9, 'Bag'),
(10, 'Coat');

-- --------------------------------------------------------

--
-- Table structure for table `category_collections`
--

CREATE TABLE `category_collections` (
  `id` int(11) NOT NULL,
  `collection` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_collections`
--

INSERT INTO `category_collections` (`id`, `collection`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'child');

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
(56, '2021_04_06_025138_add_created_at_to_products_table', 2);

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
  `price` int(11) NOT NULL,
  `discount` varchar(11) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `collection` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryclothing_id`, `name`, `price`, `discount`, `qty`, `img`, `collection`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 'Aodec One Jacket', 1400, '1200', 10, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-2.jpg', 1, '2021-04-01 03:09:02', NULL, NULL),
(2, 4, 'AODEC Seven Cardigan', 3500, '3000', 100, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-3.jpg', 1, '2021-04-10 03:09:09', NULL, NULL),
(3, 4, 'AODEC Nine Cardigan', 3400, '2900', 122, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-4.jpg', 1, '2021-04-05 03:09:12', NULL, NULL),
(4, 6, 'AODEC O2 Turquoise Blazer', 3600, '3400', 245, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-5.jpg', 1, '2021-04-19 03:09:16', NULL, NULL),
(5, 6, 'AODEC Two Blazer', 2500, '2450', 876, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-6.jpg', 1, '2021-04-12 03:09:19', NULL, NULL),
(6, 6, 'AODEC Three Blazer', 1200, '1000', 135, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-7.jpg', 1, '2021-04-19 03:09:22', NULL, NULL),
(7, 2, 'AODEC Eighteen Shirt', 3000, '2550', 20, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-8.jpg', 1, '2021-02-16 03:09:24', NULL, NULL),
(8, 2, 'AODEC Nineteen Shirt', 2000, '1800', 5, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-9.jpg', 1, '2020-12-22 03:09:27', NULL, NULL),
(9, 10, 'AODEC Gray Heart Locked Sweatshirt', 6250, '5870', 522, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-10.jpg', 1, '2020-11-15 03:09:31', NULL, NULL),
(10, 4, 'AODEC O2 Multicolor Jacket', 1500, '1400', 0, 'http://localhost/project_websitebanhang/project_user/public/img/men/men-1.jpg', 1, '2021-04-14 03:09:38', NULL, NULL),
(66, 10, 'Tweed jacket', 3500, '3200', 123, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-1.jpg', 2, '2021-02-23 03:09:41', NULL, NULL),
(101, 10, 'Double-breasted wool jacket', 2900, '2500', 186, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-2.jpg', 2, '2021-01-19 03:09:44', NULL, NULL),
(102, 10, 'GG check tweed jacket', 5000, '3400', 26, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-3.jpg', 2, '2020-11-24 03:09:47', NULL, NULL),
(103, 6, 'Petit mohair wool jacket', 2950, '2700', 99, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-4.jpg', 2, '2021-02-16 03:09:51', NULL, NULL),
(104, 4, 'Oversize tweed cardigan jacket', 3500, '3200', 68, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-5.jpg', 2, '2021-02-15 03:09:54', NULL, NULL),
(105, 5, 'Curly shearling jacket', 5500, '4800', 45, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-6.jpg', 2, '2021-03-26 03:09:58', NULL, NULL),
(106, 2, 'WOOL & CASHMERE BLEND CARDIGAN', 1500, '1300', 195, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-7.jpg', 2, '2020-11-30 03:10:02', NULL, NULL),
(107, 4, 'CROPPED SILK CARDIGAN', 10000, '6900', 264, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-8.jpg', 2, '2020-07-21 03:10:05', NULL, NULL),
(108, 2, 'ARGYLE INTARSIA KNIT SILK CARDIGAN', 6000, '5200', 69, 'http://localhost/project_websitebanhang/project_user/public/img/women/women-9.jpg', 2, '2021-01-18 03:10:12', NULL, NULL),
(109, 1, 'Baby embroidered cotton polo\r\n', 650, '490', 365, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-1.jpg', 3, '2021-01-23 03:10:16', NULL, NULL),
(110, 1, 'Baby Gucci script cotton one-piece', 470, '465', 123, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-4.jpg', 3, '2021-01-15 03:10:20', NULL, NULL),
(111, 2, 'Baby anchor and Interlocking G fil coupé shirt', 380, '360', 564, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-3.jpg', 3, '2021-01-11 03:10:23', NULL, NULL),
(112, 4, 'Baby Gucci disk print sweatshirt', 250, '249', 564, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-2.jpg', 3, '2021-01-12 03:10:29', NULL, NULL),
(113, 10, 'Baby nylon jacket with Gucci script', 680, '620', 95, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-5.jpg', 3, '2021-02-22 03:10:32', NULL, NULL),
(115, 4, 'Baby cotton sweatshirt with Gucci logo', 290, '250', 21, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-7.jpg', 3, '2021-04-05 03:10:34', NULL, NULL),
(116, 1, 'Baby embroidered cotton polo', 290, '240', 34, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-8.jpg', 3, NULL, NULL, NULL),
(117, 4, 'Baby striped wool sweater with Gucci chick', 450, '395', 52, 'http://localhost/project_websitebanhang/project_user/public/img/child/child-9.jpg', 3, NULL, NULL, NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phoneNumber`, `password`, `remember_token`, `gender`, `day`, `month`, `year`, `img`, `created_at`, `updated_at`) VALUES
(7, 'Hùng Phi', 'vudanhhungphi021@gmail.com', NULL, '0398391694', '$2y$10$XhTiIVjvmurqZv2wVYWI9OQVayjuRF40H3mLtkssJ1BO/7.d6a.tC', 'HLhmoufkrAvQTtrxZLpEgJXCgGQZP8bnMmRxdPjJAT0mzU3rB1vmc3A44zBi', 'Male', 10, 10, 2000, '154719519_505699850412543_391153293435411780_n.jpg', '2021-05-10 18:42:11', '2021-05-12 05:31:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `collection` (`collection`);

--
-- Indexes for table `recent_blogs`
--
ALTER TABLE `recent_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recent_blogs_fk_category_blog_foreign` (`categoryblog_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_clothings`
--
ALTER TABLE `category_clothings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_collections`
--
ALTER TABLE `category_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `recent_blogs`
--
ALTER TABLE `recent_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `Test` FOREIGN KEY (`categoryblog_id`) REFERENCES `category_blogs` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryclothing_id`) REFERENCES `category_clothings` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`collection`) REFERENCES `category_collections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

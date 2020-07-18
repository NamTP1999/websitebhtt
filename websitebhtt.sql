-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 10:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitebhtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'namphamt1999@gmail.com', '$2y$10$G3NcYo9NXm08.jmOSuGVxOJ1iQHDyUlnHhH3xKqZjSRL3QGhfRpMO', 'CDgdqzpLewtJWoRi6FHe3Rs94If52uHgXx1pgApla0fHnWQl5405Nn20O3Jh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_categories`
--

CREATE TABLE `ad_categories` (
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_categories`
--

INSERT INTO `ad_categories` (`cate_id`, `cate_name`, `cate_name_slug`, `created_at`, `updated_at`) VALUES
(1, 'Áo', 'Ao', NULL, NULL),
(2, 'Quần', 'Quan', NULL, NULL),
(3, 'Phụ kiện', 'phu-kien', '2020-04-15 05:10:35', '2020-04-15 05:10:35'),
(4, 'Đồng Hồ Nam', 'dong-ho-nam', '2020-07-17 19:32:23', '2020-07-17 19:32:23'),
(5, 'Đồng Hồ Nữ', 'dong-ho-nu', '2020-07-17 19:32:32', '2020-07-17 19:32:32'),
(6, 'Smart Watch', 'smart-watch', '2020-07-17 19:42:25', '2020-07-17 19:42:25'),
(7, 'Đồng Hồ Cơ', 'dong-ho-co', '2020-07-17 19:43:34', '2020-07-17 19:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `ad_products`
--

CREATE TABLE `ad_products` (
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_cate` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_products`
--

INSERT INTO `ad_products` (`prod_id`, `prod_name`, `prod_name_slug`, `prod_price`, `prod_img`, `prod_promotion`, `prod_description`, `prod_cate`, `created_at`, `updated_at`) VALUES
(3, 'Đồng hồ nam', 'dong-ho-nam', 1000000, 'donghonam.jpg', 'không', 'Đồng hồ chống nước', 3, '2020-04-15 05:11:45', '2020-04-15 05:11:45'),
(4, 'Áo sơ mi nam', 'ao-so-mi-nam', 300000, 'aosomi_xam.jpg', 'không', 'Áo mặc mát', 1, '2020-04-15 05:12:45', '2020-04-15 05:12:45'),
(5, 'Quần bò nam', 'quan-bo-nam', 400000, 'quanbona_xanh.jpg', 'không', 'Quần màu xanh', 2, '2020-04-15 05:13:46', '2020-04-15 07:36:08'),
(7, 'Áo khoác nữ', 'ao-khoac-nu', 600000, 'aokhoacnu.jpg', 'không', 'Áo màu đen', 1, '2020-04-15 05:15:15', '2020-04-15 05:15:15'),
(8, 'Áo sơ mi trắng Nam', 'ao-so-mi-trang-nam', 300000, 'aosomi_trang.jpg', 'không', 'Màu Trắng', 1, '2020-04-15 18:23:20', '2020-04-15 18:23:20'),
(9, 'Áo sơ mi sọc Nam', 'ao-so-mi-soc-nam', 400000, 'aosomi_xanh.jpg', 'không', 'Màu xanh', 1, '2020-04-15 18:23:56', '2020-04-15 18:23:56'),
(10, 'Quần bò xanh Nữ', 'quan-bo-xanh-nu', 400000, 'quanbonu_xanhrach.jpg', 'Không', 'Màu xanh', 2, '2020-04-15 18:24:40', '2020-04-15 18:24:40'),
(11, 'Quân bò rách Nữ', 'quan-bo-rach-nu', 500000, 'quanbonu_xanh.jpg', 'Không', 'Màu xanh', 2, '2020-04-15 18:25:46', '2020-04-15 18:25:46'),
(12, 'Quần bò Nữ', 'quan-bo-nu', 400000, 'quanbonu_xanh2.jpg', 'không', 'Màu xanh', 2, '2020-04-15 18:26:30', '2020-04-15 18:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` bigint(20) UNSIGNED NOT NULL,
  `com_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`com_id`, `com_name`, `com_content`, `com_product`, `created_at`, `updated_at`) VALUES
(1, 'namha1234', 'sản phẩm tốt', 4, '2020-07-14 02:30:52', '2020-07-14 02:30:52');

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
(3, '2020_04_12_111732_admin_user', 1),
(4, '2020_04_13_132109_ad_categories', 1),
(5, '2020_04_14_142221_ad_products', 1),
(6, '2020_04_15_145625_userss', 2),
(7, '2020_06_26_140313_userss', 3),
(8, '2020_06_26_141052_userss', 4),
(9, '2020_07_14_085041_comment', 5);

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

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`u_id`, `u_name`, `u_address`, `u_gmail`, `u_phone`, `u_username`, `u_password`, `created_at`, `updated_at`) VALUES
(1, 'phamtiennam', 'Nam Đàn _ Nghệ An', 'namha@123', '0983455555', 'namha1234', '1234', '2020-06-26 07:31:46', '2020-06-26 07:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_categories`
--
ALTER TABLE `ad_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `ad_products`
--
ALTER TABLE `ad_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `ad_products_prod_cate_foreign` (`prod_cate`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_categories`
--
ALTER TABLE `ad_categories`
  MODIFY `cate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad_products`
--
ALTER TABLE `ad_products`
  MODIFY `prod_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `u_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad_products`
--
ALTER TABLE `ad_products`
  ADD CONSTRAINT `ad_products_prod_cate_foreign` FOREIGN KEY (`prod_cate`) REFERENCES `ad_categories` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

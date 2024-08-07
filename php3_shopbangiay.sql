-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2024 at 01:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php3_shopbangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên danh mục',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ảnh danh mục',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mô tả danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`) VALUES
(1, 'Giày Nike', 'upload/categories/dN2VckOAf0WPGqEPTxEwU2P4pv2HgVxrJmm08O2h.jpg', 'là sản phẩm nổi tiếng của thương hiệu thể thao Nike, được biết đến với nhiều dòng sản phẩm và phong cách khác nhau để phục vụ nhu cầu của các vận động viên và người tiêu dùng thể thao'),
(2, 'Giày Adidas', 'upload/categories/3RedSovNs8NqjS3LwB2Qs5IGBW5LNKoD4yGhO247.jpg', 'là một sản phẩm được biết đến với sự kết hợp giữa thiết kế thời trang và công nghệ tiên tiến');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `time`, `status`, `created_at`, `updated_at`) VALUES
(21, 2, 1, 'sdasadsadsasadsa', '2024-08-01 18:42:04', 1, '2024-08-01 18:42:04', '2024-08-01 18:42:04'),
(22, 2, 1, 'dsadsadsadsadsad', '2024-08-01 18:55:00', 1, '2024-08-01 18:55:00', '2024-08-01 18:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `link_image`, `created_at`, `updated_at`) VALUES
(4, 3, 'upload/images/QfjIXFU2FlV7vj9u95VtRcVbi4uU1siekbv63CT8.jpg', NULL, NULL),
(5, 4, 'upload/images/SNNLQCFEGzQ01fAYOTyPxsDdXTjqLu9S95jIgGoS.jpg', NULL, NULL),
(6, 5, 'upload/images/EjXcErozaNRv3Mo1gynu4B19BFLFTugQF8mu8Qyv.jpg', NULL, NULL),
(7, 1, 'upload/images/hXwPM7Z379nEmHm6z2EETqQdEERTd8izI1fn4RXu.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_07_12_145811_roles', 1),
(5, '2024_07_12_150340_order_status', 2),
(19, '2024_07_12_145454_users', 3),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(21, '2024_07_12_145439_categories', 4),
(22, '2024_07_12_145447_products', 4),
(23, '2024_07_12_145830_images', 4),
(24, '2024_07_12_145845_comments', 4),
(25, '2024_07_12_145904_payments', 4),
(26, '2024_07_12_150214_orders', 4),
(27, '2024_07_12_150222_order_details', 4),
(28, '2024_07_12_150309_carts', 4),
(29, '2024_07_12_150323_cart_details', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `code_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên người nhận đơn hàng',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email người nhận đơn hàng',
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Số điện thoại người nhận đơn hàng',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ người nhận đơn hàng',
  `booking_date` datetime NOT NULL COMMENT 'Ngày đặt đơn hàng',
  `totak` decimal(10,2) NOT NULL COMMENT 'Tổng tiền đơn hàng',
  `note` text COLLATE utf8mb4_unicode_ci,
  `payment_id` bigint UNSIGNED NOT NULL COMMENT 'ID của phương thức thanh toán',
  `order_status_id` bigint UNSIGNED NOT NULL COMMENT 'ID của trạng thái đơn hàng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code_order`, `user_id`, `name`, `email`, `tel`, `address`, `booking_date`, `totak`, `note`, `payment_id`, `order_status_id`, `created_at`, `updated_at`) VALUES
(7, 'ORDER-66A67EBA03BD5', 2, 'Phạm Văn Quyến', 'phamvanquyenql360@gmail.com', '0358247638', 'quynh luu - nghe an', '2024-07-28 17:24:10', '15000.00', 'asASASasASa', 1, 5, '2024-07-28 10:24:10', '2024-07-28 11:14:56'),
(8, 'ORDER-66A6F8186AE67', 2, 'Phạm Văn Quyến', 'phamvanquyenql360@gmail.com', '0358247638', 'quynh luu - nghe an', '2024-07-29 02:02:00', '30000.00', NULL, 1, 2, '2024-07-28 19:02:00', '2024-07-28 19:02:58'),
(9, 'ORDER-66A90C0AB2CB8', 2, 'Phạm Văn Quyến', 'phamvanquyenql360@gmail.com', '0358247638', 'quynh luu - nghe an', '2024-07-30 15:51:38', '15000.00', NULL, 1, 5, '2024-07-30 08:51:38', '2024-07-30 09:01:11'),
(10, 'ORDER-66AC3231EBDF4', 2, 'Phạm Văn Quyến', 'phamvanquyenql360@gmail.com', '0358247638', 'quynh luu - nghe an', '2024-08-02 01:11:13', '45000.00', NULL, 1, 2, '2024-08-01 18:11:13', '2024-08-04 19:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `into_money` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `into_money`, `created_at`, `updated_at`) VALUES
(7, 7, 4, 1, '15000.00', '15000.00', '2024-07-28 10:24:10', '2024-07-28 10:24:10'),
(8, 8, 1, 2, '15000.00', '30000.00', '2024-07-28 19:02:00', '2024-07-28 19:02:00'),
(9, 9, 3, 1, '15000.00', '15000.00', '2024-07-30 08:51:38', '2024-07-30 08:51:38'),
(10, 10, 4, 3, '15000.00', '45000.00', '2024-08-01 18:11:14', '2024-08-01 18:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đang Xử Lý ', NULL, NULL),
(2, 'Đã Xác Nhận', NULL, NULL),
(3, 'Đang Vận Chuyển', NULL, NULL),
(4, 'Đã Giao', NULL, NULL),
(5, 'Hủy Bỏ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thanh toán khi nhận hàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên sản phẩm',
  `quantity` int UNSIGNED NOT NULL COMMENT 'số lượng sản phẩm',
  `price` decimal(10,2) NOT NULL COMMENT 'giá sản phẩm',
  `promotional_price` decimal(10,2) DEFAULT NULL COMMENT 'giá khuyến mại sản phẩm',
  `date` date NOT NULL COMMENT 'ngày nhập',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT 'mô tả sản phẩm',
  `category_id` bigint UNSIGNED NOT NULL COMMENT 'id danh mục',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT 'trạng thái sản phẩm',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `promotional_price`, `date`, `description`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GIÀY NIKE AIR FORCE 1 SHADOW SE WOMEN’S “SOLAR RED” DB3902-100', 4, '15000.00', '10000.00', '2024-07-15', 'Giày Nike Air Force 1 Shadow SE Women’s “Solar Red”\r\n\r\nBảng màu của “Solar Red” gồm sắc đỏ mặt trời cùng xanh mòng biển trên nền trắng tuyết, tối giản nhưng vừa đủ để tái hiện những thiết kế đặc trưng của Bruce Kilgore’s thập niên 80. Không những vậy, chất liệu da phủ khắp phần upper với những đường cắt xẻ tinh tế và công nghệ Air êm ái từ đế giày sẽ cho bạn một cảm giác vừa hoài cổ lại vừa trẻ trung, năng động.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Nike\r\n\r\nMã sản phẩm: DB3902-100', 1, 1, NULL, NULL),
(3, 'GIÀY NIKE AIR FORCE 1 LOW SHADOW SUNSET PULSE (W)', 4, '15000.00', '10000.00', '2024-07-17', 'Giày Nike Air Force 1 Low Shadow Sunset Pulse (W)\r\n\r\nNike Air Force 1 Low Shadow Sunset Pulse – Mẫu giày thể thao giúp bạn khẳng định cá tính, sự trẻ trung và năng lượng tích cực. Được thiết kế bởi Bruce Kilgore, Sunset Pulse là một bữa tiệc màu sắc với tông trắng-xanh xám chủ đạo, nổi bật trên đó là logo Nike hồng-đen và miếng lót giày cùng name tag xanh nõn chuối. Phần upper là sự kết hợp từ các chất liệu da, da lộn, vải cùng đế giày sản xuất theo công nghệ Air cho bạn sự thoải mái mỗi khi vận động. Đây thực sự là mẫu giày không thể bỏ qua với những tín đồ yêu thích dòng giày lifestyle gọn nhẹ, bền bỉ nhưng vẫn vô cùng đẹp mắt.\r\n\r\n*Thông tin sản phẩm:\r\n\r\nThương hiệu: Nike\r\n\r\nMã sản phẩm: CU8591-101', 1, 1, NULL, NULL),
(4, 'GIÀY ADIDAS ULTRA BOOST 19 TRACE KHAKI', 4, '15000.00', '10000.00', '2024-07-17', 'Ultraboost 5.0 xám xanh – Chính hãng\r\nDòng giày chạy cải tiến thêm 20% boost ra mắt năm 2019\r\nNhững đôi giày chạy này khởi động lại các công nghệ hiệu suất chính để cung cấp cho bạn một bước chạy tự tin và tràn đầy năng lượng. Phần đan phía trên có độ vừa vặn cho làn chân và được chế tạo với công nghệ dệt chuyển động để kéo dài và hỗ trợ thích ứng. Mật độ đệm kép cung cấp hỗ trợ trung gian và một chuyến đi tràn đầy năng lượng.\r\nChất liệu: Lót đế cao su continental chống mòn, công nghệ đế boost\r\nMàu sắc: Xám xanh\r\nThích hợp: đi chơi, đi học, chạy bộ…', 2, 1, NULL, NULL),
(5, 'GIÀY ADIDAS SUPERNOVA ‘TOKYO’', 4, '15000.00', '10000.00', '2024-07-17', 'Giày Adidas Supernova ‘Tokyo’ là dòng giày chạy bộ nhẹ nhàng. Đôi giày mang đến sự thoải mái cho từng bước chạy với trọng lượng nhẹ, midsole EVA mềm mại, êm ái cùng phần khung giữa bàn chân được thiết kế để hỗ trợ tối đa cho chuyển động. Phần upper kết hợp chất liệu da tổng hợp và vải lưới để đem lại cảm giác thoáng mát nhưng vẫn nhẹ nhàng. Tông màu đen trắng đơn giản nhưng năng động của đôi giày cũng giúp bạn dễ dàng phối đồ theo phong cách riêng của mình.', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên chức vụ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ảnh đại diện',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'họ tên',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'eamil',
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'số điện thoại',
  `gender` tinyint DEFAULT NULL COMMENT 'giới tính',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'địa chỉ',
  `age` date DEFAULT NULL COMMENT 'ngày sinh',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mất khẩu',
  `role_id` bigint UNSIGNED NOT NULL COMMENT 'id chức vụ',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `tel`, `gender`, `address`, `age`, `password`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'upload/users/c2X3HQmNGWETYHLvdbjWkKeg9uPGQWaPEcmbbbXO.png', 'Phạm Văn Quyến', 'phamvanquyenql360@gmail.com', '0358247638', 1, 'quynh luu - nghe an', '2024-07-13', '$2y$10$wNEInU1vODIibBAN0mOybuapSwqbORUX5zfcBOwNBSHugbdDenwKS', 2, 1, '2024-07-13 11:30:05', '2024-07-16 06:20:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_details_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_order_unique` (`code_order`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`),
  ADD KEY `orders_order_status_id_foreign` (`order_status_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_order_status_id_foreign` FOREIGN KEY (`order_status_id`) REFERENCES `order_status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

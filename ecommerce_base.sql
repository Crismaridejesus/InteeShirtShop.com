-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 12:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_image` text COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `visible` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`, `role`, `visible`) VALUES
(3, 'maricris', 'admin2@gmail.com', '7bb0bb352ffb2f5245f25149889a0c76', 'crispanget.jpg', 'admin', 1),
(7, 'admin1', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'con_4.jpg', 'admin', 1),
(8, 'Chestelyn Bumatay', 'che@gmail.com', 'f81e986ee4c9f80d6002bf5302b3ea87', 'chair.jpg', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `visible`) VALUES
(1, 'V-neck', 1),
(2, 'Round_neck', 1),
(5, 'collar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_title`, `ip_address`, `quantity`) VALUES
(203, 22, 'Heart Beat', '::1', 1),
(204, 15, 'Everyday Suyo', '::1', 4),
(205, 6, 'Family Set', '::1', 1),
(206, 9, 'Men Top', '::1', 5),
(247, 34, 'Bundle off Three ', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `visible`) VALUES
(2, 'Woman', 1),
(3, 'Men', 1),
(4, 'Family', 1),
(5, 'Couple Shirt', 1),
(6, 'Little Girls', 1),
(8, 'Little Boys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_price` int(255) NOT NULL,
  `customer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_title`, `order_price`, `customer_email`, `visible`) VALUES
(24, 'Sun Flower Tee', 250, 'maricrisdejesus@gmail.co', 1),
(50, 'Worship Set Tee ', 600, 'maricrisdejesus@gmail.co', 1),
(51, 'Bundle off Three ', 180, 'maricrisdejesus@gmail.co', 1),
(52, 'Nice To Meet You', 150, 'maricrisdejesus@gmail.co', 1),
(53, 'Stripe Tee Bundle For Woman', 450, 'Calma@gmail.com', 1),
(54, 'Plain Tee For Her', 150, 'Calma@gmail.com', 1),
(55, 'Worship Set Tee ', 600, 'Calma@gmail.com', 1),
(56, 'Together Couple Tee', 299, 'Calma@gmail.com', 1),
(57, 'Dinosour  Design', 200, 'Maricris@gmail.com', 1),
(58, 'Nice To Meet You', 150, 'Maricris@gmail.com', 1),
(59, 'Plain Tee For Him', 180, 'Maricris@gmail.com', 1),
(60, 'Together Couple Tee', 299, 'Maricris@gmail.com', 1),
(61, 'Branded Bandle of three', 300, 'Maricris@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `pay_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pay_zip` int(10) NOT NULL,
  `pay_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(255) NOT NULL,
  `total_items` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `pay_firstname`, `pay_lastname`, `pay_email`, `pay_address`, `pay_city`, `pay_state`, `pay_zip`, `pay_method`, `total_price`, `total_items`) VALUES
(47, 'Chestelyn', ' Bumatay', 'che@gmail.com', 'San-Lorenzo,Lal-lo,Cagayan', 'Cagayan', 'Northern Luzon', 2500, 'Gcash', 679, 2),
(49, 'Macbeth', ' Calma', 'Calma@gmail.com', 'MAliwalo Tarlac', 'Tarlac', 'Central Luzon', 2300, 'PayMaya', 1228, 4),
(52, 'Macbeth', ' Calma', 'Calma@gmail.com', 'MAliwalo Tarlac', 'Tarlac', 'Northern Luzon', 2300, 'PayMaya', 850, 3),
(53, 'maricris', ' De Jesus', 'maricrisdejesus@gmail.co', 'tarlac', 'tarlac', 'Philippines', 2300, 'Gcash', 930, 3),
(54, 'Macbeth', ' Calma', 'Calma@gmail.com', 'MAliwalo Tarlac', 'Tarlac', 'Central Luzon', 2300, 'PayMaya', 1499, 4),
(55, 'maricris', ' de jesus', 'Maricris@gmail.com', 'San Lorenzo', 'Tarlac', 'Tarlac', 2300, 'Palawan Express', 200, 1),
(56, 'maricris', ' De Jesus', 'Maricris@gmail.com', 'San Lorenzo', 'Tarlac', 'tarlac', 2500, 'Cebuanna', 929, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_image` text COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `product_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_cat`, `product_brand`, `product_image`, `product_price`, `product_desc`, `product_keywords`, `views`, `date`, `visible`) VALUES
(1, 'Men Top', 3, 1, 'product_63.jpg', 299, 'Plain shirt for man , made from 100% cotton good quality men t-shirt men tee.', 'for men men tee men top', 0, '2021-06-17', 1),
(2, 'Butterfly Tee Top', 2, 2, 'product_1.jpg', 300, 'Butterfly Style, Cool and Refreshing Roundneck T-shirt for Ladies', 'for woman woman tee', 0, '2021-06-17', 1),
(3, 'Sun Flower Tee', 2, 2, 'pc-3.jpg', 250, 'Roundneck T-shirt for Woman Cool and Comfortable Printed ', 'for woman woman tee', 0, '2021-06-17', 1),
(4, 'Family Set Blessed', 4, 2, 'product_5.jpg', 850, 'Family Roundneck T-shirt', 'family set', 0, '2021-06-17', 1),
(5, 'Worship Set Tee ', 4, 2, 'product_6.jpg', 600, 'Family Roundneck T_shirt for mom for dad for sister for baby high quality. family set', 'family set', 0, '2021-06-17', 1),
(6, 'Family Set', 4, 2, 'product_7.jpg', 900, 'Good Quality And Cool Family Roundneck T-shirt for grandma and grandpa for mom and dad for sister and brother and baby high quality buy it now', 'family set', 0, '2021-06-17', 1),
(7, 'Men Top', 3, 2, 'product_8.jpg', 380, 'Roundneck Printed T-shirt for Unisex', 'for men men tee men top', 0, '2021-06-17', 1),
(8, 'Men Top', 3, 2, 'product_9.jpg', 280, 'Printed Roundneck T-shirt For man', 'for men men tee men top', 0, '2021-06-17', 1),
(9, 'Men Top', 3, 2, 'product_10.jpg', 200, 'Roundneck  Tshirt printed for man for your man for your love once', 'for men men tee men top', 0, '2021-06-17', 1),
(10, 'Run For Men', 3, 2, 'product_15.jpg', 299, ' Cotton Roundneck T-Shirt for man ', 'for men men tee men top', 0, '2021-06-17', 1),
(11, 'Hubby And Wifey', 5, 2, 'product_16.jpg', 399, 'Printed Couple Shirt hubby and wifey good quality made from 100% cotton', 'couple shirt ', 0, '2021-06-17', 1),
(12, 'King And Queen', 5, 2, 'product_17.jpg', 300, 'King And Queen Couple shirt Design king and queen design good quality made from 100% cotton', 'couple shirt ', 0, '2021-06-17', 1),
(13, 'Marine Couple Shirt', 5, 2, 'product_19.jpg', 350, 'Perfect fit Couple T-shirt', 'couple shirt ', 0, '2021-06-17', 1),
(14, 'Three Tone Couple Shirt', 5, 2, 'product_20.jpg', 399, 'Couple Shirt , Good Quality Product ', 'couple shirt ', 0, '2021-06-17', 1),
(15, 'Everyday Suyo', 5, 2, 'product_21.jpg', 299, 'Simple printed Shirt for Couples Araw-araw suyo araw-araw toyo', 'couple shirt ', 0, '2021-06-17', 1),
(16, 'Two-tone  Couple Tee', 5, 2, 'product_22.jpg', 299, ' Black and White Color combination t-shirt for Couple, Good quality', 'couple shirt ', 0, '2021-06-17', 1),
(17, 'Together Forever ', 5, 2, 'product_24.jpg', 280, 'Together Forever Printed Couple shirt  good quality tee ', 'couple shirt couple shirts', 0, '2021-06-17', 1),
(18, 'Connect To Me', 5, 2, 'product_25.jpg', 280, ' Connect to me Couple Printed shirt', 'couple shirt couple shirts', 0, '2021-06-17', 1),
(19, 'Army Shirt For Couple', 5, 2, 'product_26.jpg', 300, 'product_26 Simple shirt with cute printed design for couple', 'couple shirt couple shirts', 0, '2021-06-17', 1),
(20, 'Her One His One', 5, 2, 'product_27.jpg', 299, 'white Simple Couple shirt ', 'couple shirt ', 0, '2021-06-17', 1),
(21, 'Together Couple Tee', 5, 2, 'product_28.jpg', 299, 'Maroon Together forever Couple Shirt. 300php', 'couple shirt couple shirts', 0, '2021-06-17', 1),
(22, 'Heart Beat', 5, 2, 'product_29.jpg', 280, 'Printed Couple shirt good quality couple shirt made from 100% cotton for couple', 'couple shirt ', 0, '2021-06-17', 1),
(23, 'Plain Tee For Her', 2, 1, 'product_31.jpg', 180, 'Simple Plain v-neck T-shirt For Women', 'for woman woman tee', 0, '2021-06-17', 1),
(24, 'Stripe Tee Bundle For Woman', 2, 1, 'product_32.jpg', 450, 'product_32 Stripe set of three for woman Stripe tee for women set of three in affordable price', 'for woman woman tee', 0, '2021-06-17', 1),
(25, 'Bundle of Four', 3, 1, 'product_33.jpg', 550, 'Simple Stripe Vneck T-shirt For Man bundle of four ', 'for men men tee men top', 0, '2021-06-17', 1),
(26, 'BTS Design', 2, 2, 'product_34.jpg', 200, 'product_34 Simple BTS T-shirt For Woman good quality tee with hoody good quality you can buy it in affordable price available in any color ', 'for woman woman tee', 0, '2021-06-17', 1),
(27, 'Plain Tee For Him', 3, 1, 'product_35.jpg', 180, 'Plain Vneck Tshirt for men , available in any color and size S to XL', 'for men men tee men top', 0, '2021-06-17', 1),
(28, 'Little Booboo', 6, 2, 'product_36.jpg', 150, 'Printed Roundneck Tshirt for little girl', 'for little girls for girls for  little girllittle girl kids for little girls', 0, '2021-06-17', 1),
(29, 'Nice To Meet You', 2, 2, 'product_37.jpg', 150, ' Printed Black Tshirt for Woman', 'for woman woman tee', 0, '2021-06-17', 1),
(30, 'Plain Tee For Her', 2, 2, 'product_38.jpg', 150, 'Simple plain cotton Tshirt For Ladies', 'for woman woman tee', 0, '2021-06-17', 1),
(31, 'Paris Print', 2, 2, 'product_39.jpg', 150, 'Cotton Simple Tshirt for Ladies', 'for woman woman tee', 0, '2021-06-18', 1),
(33, 'Branded Bandle of three', 8, 2, 'product_40.jpg', 300, 'Good product tshirt for little boy bundle of three good quality branded t-shirt', 'for little boy  for boys', 0, '2021-06-18', 1),
(34, 'Bundle off Three ', 6, 1, 'product_41.jpg', 180, 'Good product Vneck Shirt For little girls', 'for little girl for baby girl', 0, '2021-06-18', 1),
(35, 'Feather Design', 5, 2, 'product_42.jpg', 299, 'Cute couple shirt design feather design good quality', 'couple shirt ', 0, '2021-06-18', 1),
(36, 'Printed Shirt', 8, 2, 'pc43-1.jpg', 150, 'Roundneck Tshirt for kids available in any color good quality ', 'little boy for boi shirt 6 to 12 years old', 0, '2021-06-18', 1),
(37, 'Mini Mouse Tee For Little Girl', 6, 2, 'product_45.jpg', 150, 'Simple Tshirt Design For Girls Kids minie mouse design ', 'little girl girls', 0, '2021-06-18', 1),
(38, 'Family Set', 4, 2, 'pc46-6.jpg', 500, 'Good Quality And Cool Family Roundneck T-shirt', 'family set', 0, '2021-06-18', 1),
(39, '2021 Family Shirt', 4, 2, 'product_47.jpg', 900, 'Good Quality And Cool Family Roundneck T-shirt', 'family set', 0, '2021-06-18', 1),
(40, 'Happy Bunny', 6, 2, 'pc53-1.jpg', 150, 'Little bunny design for little girl for baby girl 100% made from cotton available in any color', 'for little girl for children for child for baby girl for kids kid clothes', 0, '2021-06-19', 1),
(41, 'Cute Shirt For Little Girls', 6, 2, 'pc57-1.jpg', 150, 'Cute Shirt for little girls available in any color good quality shirt tee for your baby girls ', 'for girls for little girls for baby girls girl ', 0, '2021-06-20', 1),
(42, 'Dinosour  Design', 8, 2, 'pc44-1.jpg', 200, '', 'dinosour design for little boy for kids for baby boy tshirt for boy', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_address` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'guest',
  `visible` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `name`, `email`, `password`, `country`, `city`, `contact`, `user_address`, `image`, `role`, `visible`) VALUES
(1, 0, 'maricris', 'maricris052298dejesus@gmail.com', '7bb0bb352ffb2f5245f25149889a0c76', 'Afganistan', 'turmuc', 2147483647, 'tarlac', 'cat.jpg', 'guest', 1),
(4, 0, 'Customer', 'customer@gmail.com', '91ec1f9324753048c0096d036a694f86', 'Phillipines', 'Tarlac', 926345369, 'Tarlac', 'con_4.jpg', 'guest', 1),
(5, 0, 'customer1', 'customer1@gmail.com', 'ffbc4675f864e0e9aab8bdf7a0437010', 'Phillipines', 'Tarlac', 2147483647, 'Tarlac', 'bgabout.png', 'guest', 1),
(6, 0, 'customer2', 'customer2@gmail.com', '5ce4d191fd14ac85a1469fb8c29b7a7b', 'Phillipines', 'Tarlac', 2147483647, 'Tarlac', 'bgforinsert.png', 'guest', 1),
(9, 0, 'Chestelyn Bumatay', 'che@gmail.com', 'f81e986ee4c9f80d6002bf5302b3ea87', 'Phillipines', 'tarlac', 2147483647, 'tarlac', 'coupleproduct.jpg', 'guest', 1),
(10, 0, 'Juan Dela Cruz', 'juandelacruz@gmail.com', 'a94652aa97c7211ba8954dd15a3cf838', 'Benin', 'Tarlac', 2147483647, 'Tarlac', 'customer.jpg', 'guest', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2019 at 06:06 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3269709_esdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'dipesh0439@gmail.com', 12345),
(2, 'es@gmail.com', 44);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL,
  `email` varchar(70) NOT NULL DEFAULT 'a',
  `address` varchar(255) NOT NULL DEFAULT 'abc',
  `pimage` text NOT NULL,
  `backimage` text NOT NULL,
  `cnumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `email`, `address`, `pimage`, `backimage`, `cnumber`) VALUES
(12, 'The Joker Cafe And Burger Bar', 'jassa77991@gmail.com', 'Urban Estate,Patiala', 'pjoker.jpg', 'bjoker.jpg', '8284990439');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(90, 75, '::1', -1, 1),
(91, 76, '::1', -1, 1),
(92, 50, '::1', -1, 1),
(93, 60, '::1', -1, 1),
(94, 75, '115.248.249.99', -1, 1),
(95, 77, '117.203.246.41', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(11, 'Veg.Burger & Wraps Combo'),
(13, 'Chicken Burger & Wraps'),
(15, 'Sides');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL DEFAULT 'yes',
  `p_status` varchar(20) NOT NULL DEFAULT 'ho gay',
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `price`) VALUES
(6, 5, 60, 1, 'yes', 'ho gay', 140),
(7, 5, 70, 1, 'yes', 'ho gay', 170),
(8, -1, 71, 1, 'yes', 'ho gay', 155),
(9, -1, 69, 1, 'yes', 'ho gay', 145),
(10, 5, 77, 1, 'yes', 'ho gay', 185),
(11, 5, 64, 1, 'yes', 'ho gay', 125),
(12, 5, 69, 1, 'yes', 'ho gay', 145),
(13, 5, 61, 1, 'yes', 'ho gay', 145),
(14, 5, 60, 1, 'yes', 'ho gay', 140),
(15, 5, 62, 1, 'yes', 'ho gay', 155),
(16, 5, 65, 1, 'yes', 'ho gay', 110),
(17, 5, 64, 1, 'yes', 'ho gay', 125),
(18, 5, 50, 1, 'yes', 'ho gay', 105),
(19, -1, 54, 1, 'yes', 'ho gay', 145),
(20, -1, 53, 1, 'yes', 'ho gay', 140),
(21, -1, 55, 1, 'yes', 'ho gay', 145),
(22, 6, 50, 1, 'yes', 'ho gay', 105),
(23, 6, 52, 1, 'yes', 'ho gay', 125),
(24, 6, 57, 1, 'yes', 'ho gay', 180),
(25, 6, 56, 1, 'yes', 'ho gay', 145),
(26, 10, 75, 1, 'yes', 'ho gay', 170),
(27, 10, 54, 1, 'yes', 'ho gay', 145),
(28, 10, 63, 1, 'yes', 'ho gay', 155),
(29, 10, 50, 1, 'yes', 'ho gay', 105),
(30, 10, 59, 1, 'yes', 'ho gay', 125),
(31, 10, 76, 1, 'yes', 'ho gay', 180);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(50, 11, 12, 'Classic Combo- <strong>Joker Cafe</strong>', 105, '<p>this</p>', 'r1.jpg', 'french fries, coke, joker, burger,combo,cafe'),
(51, 11, 12, 'Crispy Veg Combo - <strong>Joker Cafe</strong>', 115, '<p>this</p>', 'r2.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(52, 11, 12, 'Nugget Combo-<strong>Joker Cafe</strong>', 125, '<p>this</p>', 'r3.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(53, 11, 12, 'Double Veg Combo-<strong>Joker Cafe</strong>', 140, '<p>this</p>', 'r4.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(54, 11, 12, 'Mushroom Veg Combo-<strong>Joker Cafe</strong>', 145, '<p>this</p>', 'r5.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(55, 11, 12, 'Cheezy Onion Rings-<strong>Joker Cafe</strong>', 145, '<p>this</p>', 'r6.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(56, 11, 12, 'Nacho Cheezy Combo- <strong>Joker Cafe</strong>', 145, '<p>this</p>', 'r7.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(57, 11, 12, 'Cheezy Veg.Stack-<strong>Joker Cafe</strong>', 180, '<p>this</p>', 'r8.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(58, 11, 12, 'Crp.Veg.+Fries+Drink-<strong>Joker Cafe</strong>', 125, '<p>this</p>', 'r9.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(59, 11, 12, 'Crp.Fries +Drink-<strong>Joker Cafe</strong>', 125, '<p>this</p>', 'r10.jpg', 'joker,cafe,bar,burger,coke,combo,cafe'),
(60, 11, 12, 'Paneer Burger Combo-<strong>Joker Cafe</strong>', 140, '<p>this</p>', 'r21.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,paneer'),
(61, 11, 12, 'Jalapeno Paneer-<strong>Joker Cafe</strong>', 145, '<p>this</p>', 'r22.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,paneer'),
(62, 11, 12, 'Cheezy Paneer-<strong>Joker Cafe</strong>', 155, '<p>this</p>', 'r23.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,paneer'),
(63, 11, 12, 'Paneer Wrap Combo-<strong>Joker Cafe</strong>', 155, '<p>this</p>', 'r24.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,paneer'),
(64, 13, 12, 'Egg Wrap Combo-<strong>Joker Cafe</strong>', 125, '<p>this</p>', 'r25.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(65, 13, 12, 'Egg Burger Combo-<strong>Joker Cafe</strong>', 110, '<p>this</p>', 'r26.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(66, 13, 12, 'Double egg combo-<strong>Joker Cafe</strong>', 120, '<p>this</p>', 'r27.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(67, 13, 12, 'Chicken Combo-<strong>Joker Cafe</strong>', 135, '<p>this</p>', 'r28.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(68, 13, 12, 'Grill Chicken Combo-<strong>Joker Cafe</strong>', 135, '<p>this</p>', 'r29.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(69, 13, 12, 'Chicken Nugget Combo-<strong>Joker Cafe</strong>', 145, '<p>this</p>', 'r30.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(70, 13, 12, 'Chicken Paradise Combo-<strong>Joker Cafe</strong>', 170, '<p>this</p>', 'r31.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(71, 13, 12, 'Eggy Chicken  Combo-<strong>Joker Cafe</strong>', 155, '<p>this</p>', 'r32.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(72, 13, 12, 'Double Chicken Combo-<strong>Joker Cafe</strong>', 170, '<p>this</p>', 'r33.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(73, 13, 12, 'Cheesy Chicken Stack-<strong>Joker Cafe</strong>', 200, '<p>this</p>', 'r35.jpg', 'Chinese,Chicken'),
(74, 13, 12, 'Mutton Burger Combo- <strong>Joker Cafe</strong>', 170, '<p>this</p>', 'r37.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg'),
(75, 13, 12, 'Fillet Combo-<strong>Joker Cafe</strong>', 170, '<p>this</p>', 'r38.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg,fish'),
(76, 13, 12, 'Spicy Fish Combo-<strong>Joker Cafe</strong>', 180, '<p>this</p>\r\n<p>&nbsp;</p>', 'r39.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg,fish'),
(77, 13, 12, 'Fish Wrap-<strong>Joker Cafe</strong>', 185, '<p>this</p>', 'r40.jpg', 'joker,cafe,bar,burger,coke,combo,cafe,egg,non veg,fish');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(5, 'Dipesh ', 'Rishi', 'dipesh0439@gmail.com', 'e11c495c8d9d8e0ddc768940afe0415e', '8284990439', 'urban estate ,patiala', '439'),
(9, 'Eshita', 'Sharma', 'es@gmail.com', 'e826431c03bcd4819916bffd0dea6a6b', '9814800439', 'ldh', 'ldh'),
(10, 'd', 'r', 'd@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '9814800439', 'ldh', 'ldh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

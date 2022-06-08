-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 05:45 AM
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
-- Database: `superfine-agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Sachin Farma'),
(2, 'Ajit Agro'),
(3, 'Sahyadri Firm'),
(4, 'Mahesh Agro'),
(5, 'Superfine Agro');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` text NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Fruits'),
(2, 'Vegetables'),
(3, 'Fertilizers');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 3, 'Kesar Mango', 600, 'DevGarh Kesar Alpanso mangoes with sweetness', 'Mango.jpg', 'Kesar, mango'),
(2, 1, 1, 'Grapes', 100, 'Grapes with sweetness and test', 'Grapes.jpg', 'grapes, angur'),
(3, 1, 1, 'Guava', 80, 'Guava with fresh and sweet taste', 'Guava.jpg', 'peru, guava'),
(4, 1, 3, 'Apple', 150, 'Apples are fresh and healthy for health', 'Apple.jpg', 'apple, safarchand'),
(5, 2, 2, 'Chilli', 70, 'Chilies are very fresh and spicy', 'chilli.jpg', 'Chili, mirchi'),
(6, 2, 4, 'cauliFlower', 60, 'Cauliflower is from mahesh agro and are fresh', 'cauliflower.jpg', 'flower'),
(7, 2, 4, 'Capcicum', 40, 'Mahesh agro is best seller of capcicum since 1999', 'capcicum.jpg', 'bhongi mirchi, dhobli mirchi, capcicum'),
(8, 2, 3, 'BeetRoot', 80, 'Beet root is very healthy for our health', 'beetroot.jpg', 'beet'),
(9, 3, 5, 'Vermi Compost', 1200, 'Vermicompost is the brand from superfine agro which is completely organic and best for mother earth', 'vermicompost.jpg', 'compost, vermicompost'),
(10, 3, 5, 'Vermi Culture', 1500, 'Vermiculture is the compost which is sold by superfine agro', 'vermiculture.jpg', 'vermiculture'),
(11, 3, 5, 'Vermiwash', 2000, 'Vermiwash is the liquid organic pesticide sold by Seuperfine Agro', 'vermiwash.jpg', 'vermiwash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

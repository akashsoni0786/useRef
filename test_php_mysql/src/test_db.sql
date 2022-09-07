-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Jul 25, 2022 at 12:59 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_category` varchar(10000) NOT NULL,
  `product_sub_category` varchar(1000) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_sub_category`, `product_color`, `product_price`) VALUES
(1, 'Cello Chair', 'Furniture', 'Chair', 'Gray', 1000),
(2, 'Amul Chair', 'Furniture', 'Chair', 'Gray', 2000),
(3, 'ad', 'asd', 'asd', 'dad', 3000),
(4, '12', '21', '12', '12', 12),
(5, '1232', '323', '232', '3232', 2323),
(6, '12323', '3233', '2323', '32323', 32323),
(7, '1', '1', '1', '1', 1),
(8, '2', '2', '2', '2', 2),
(9, '1', '11', '111', '11', 11),
(10, '111', '1111', '111', '11', 11),
(11, '111', '1111', '111', '11', 11),
(12, '111', '1111', '111', '11', 11),
(13, '111', '1111', '111', '11', 11),
(14, '111', '1111', '111', '11', 11),
(15, '111', '1111', '111', '11', 11),
(16, '111', '1111', '111', '11', 11),
(17, '111', '1111', '111', '11', 11),
(18, '111', '1111', '111', '11', 11),
(19, '111', '1111', '111', '11', 11),
(20, '111', '1111', '111', '11', 11),
(21, '111', '1111', '111', '11', 11),
(22, '111', '1111', '111', '11', 11),
(23, '111', '1111', '111', '11', 11),
(24, '111', '1111', '111', '11', 11),
(25, '111', '1111', '111', '11', 11),
(26, '111', '1111', '111', '11', 11),
(27, '111', '1111', '111', '11', 11),
(28, '111', '1111', '111', '11', 11),
(29, '111', '1111', '111', '11', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

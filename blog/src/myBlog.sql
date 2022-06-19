-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Jun 19, 2022 at 11:18 AM
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
-- Database: `myBlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int NOT NULL,
  `comment_date` timestamp NOT NULL,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `userfullname` varchar(100) NOT NULL,
  `post_comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`comment_id`, `comment_date`, `post_id`, `user_id`, `userfullname`, `post_comment`) VALUES
(266, '2022-06-18 07:56:11', 1000, 1111, 'Authorised  Admin', 'sss'),
(267, '2022-06-18 11:51:18', 1022, 1111, 'Authorised  Admin', 'sdgfds'),
(268, '2022-06-18 11:51:20', 1022, 1111, 'Authorised  Admin', 'sdgfdsdfgdf'),
(269, '2022-06-18 11:51:24', 1022, 1111, 'Authorised  Admin', 'sdgfdsdfgdfdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `post_id` int NOT NULL,
  `post_restricted` int NOT NULL,
  `post_img` varchar(1000) NOT NULL,
  `post_date` timestamp NOT NULL,
  `post_category_name` varchar(100) NOT NULL,
  `post_heading` varchar(1000) NOT NULL,
  `post_content` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`post_id`, `post_restricted`, `post_img`, `post_date`, `post_category_name`, `post_heading`, `post_content`, `user_id`) VALUES
(1000, 0, 'img/categories/categories-list/cl-7.jpg', '2022-06-14 14:46:16', 'Now way', 'How to make ice cream????', 'Composition of ice cream is comprised of sugar, fat, emulsifiers, stabilizers, water, egg and eggs products, corn syrup, dextrose and flavors. It is a three phase network consisting on air, solid and liquid in final product. Liquid phase contains ice crystals in embedded form and air cells in dispersed form.', 1111),
(1020, 0, 'img/uploads/cat-2.jpg', '2022-06-18 07:26:17', 'Category3', 'Heading3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111),
(1021, 0, 'img/uploads/cat-1.jpg', '2022-06-18 07:26:40', 'Category4', 'Heading4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111),
(1022, 0, 'img/uploads/cat-1.jpg', '2022-06-18 07:26:51', 'Category4', 'Heading4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111),
(1023, 0, 'img/uploads/typography.jpg', '2022-06-19 08:33:07', 'Some category', 'My Heading', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `passwords` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `user_ban` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `user_name`, `passwords`, `email`, `fullname`, `user_ban`) VALUES
(1111, 'admin', '1234', 'admin@admin.in', 'Authorised  Admin', 0),
(1112, 'luciffer', '1234', 'preteek@gmail.com', 'Prateek', 1),
(1114, 'vaibhav', '1234', 'vaibhav@gmail.com', 'Vaibhav', 0),
(1115, 'akashsoni', '1234', 'aakashsoni@gmail.com', 'Akash Soni', 0),
(1117, 'xdcvv', '111', '11111', '11111', 0),
(1118, 'qqq', 'qqq', 'qqqq', 'qqqq', 0),
(1119, 'www', 'www', 'www', 'www', 0),
(1120, 'qqq', 'qqq', 'qqq', 'qqq', 0),
(1121, 'dfgdfg', '1111', 'dfgdf', 'gdfgdf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `Comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `Posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

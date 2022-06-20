-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Jun 20, 2022 at 09:41 AM
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
(269, '2022-06-18 11:51:24', 1022, 1111, 'Authorised  Admin', 'sdgfdsdfgdfdfgdfg'),
(270, '2022-06-20 03:22:53', 1020, 1111, 'Authorised  Admin', 'Comments\n'),
(271, '2022-06-20 03:43:52', 1021, 1111, 'Authorised  Admin', 'dgf'),
(275, '2022-06-20 04:50:58', 1022, 1111, 'Authorised  Admin', 'fgfggfgfg'),
(276, '2022-06-20 04:52:24', 1022, 1111, 'Authorised  Admin', 'hjhklhk'),
(277, '2022-06-20 05:01:44', 1020, 1111, 'Authorised  Admin', 'xcxcx'),
(279, '2022-06-20 05:07:30', 1023, 1111, 'Authorised  Admin', 'wwww'),
(280, '2022-06-20 05:07:42', 1023, 1111, 'Authorised  Admin', 'dfg'),
(281, '2022-06-20 05:38:06', 1021, 1115, 'Akash Soni', 'gh'),
(282, '2022-06-20 05:38:16', 1020, 1111, 'Authorised  Admin', 'fghgfh'),
(283, '2022-06-20 05:38:19', 1020, 1111, 'Authorised  Admin', 'Comment'),
(284, '2022-06-20 05:39:14', 1000, 1115, 'Akash Soni', 'i'),
(285, '2022-06-20 05:39:19', 1000, 1115, 'Akash Soni', 'ip;]['),
(286, '2022-06-20 05:39:34', 1022, 1111, 'Authorised  Admin', 'hjkhjk'),
(287, '2022-06-20 05:40:45', 1022, 1115, 'Akash Soni', 'dsf'),
(288, '2022-06-20 05:40:47', 1022, 1115, 'Akash Soni', 'dsfdfgdf'),
(289, '2022-06-20 05:40:55', 1023, 1115, 'Akash Soni', 'fgdfgdfg'),
(290, '2022-06-20 05:40:57', 1023, 1115, 'Akash Soni', 'fgdfgdfgdfgdfg'),
(291, '2022-06-20 05:41:14', 1022, 1114, 'Vaibhav', 'sdfsdf'),
(292, '2022-06-20 05:41:16', 1022, 1114, 'Vaibhav', 'sdfsdfdfsdf'),
(293, '2022-06-20 05:43:25', 1000, 1114, 'Vaibhav', 'gyhjhj'),
(294, '2022-06-20 05:43:28', 1000, 1114, 'Vaibhav', 'o'),
(295, '2022-06-20 05:54:34', 1022, 1111, 'Authorised  Admin', 'bhj'),
(296, '2022-06-20 05:57:51', 1023, 1115, 'Akash Soni', 'drfghfh'),
(297, '2022-06-20 05:57:54', 1023, 1115, 'Akash Soni', 'fghgfh'),
(301, '2022-06-20 06:19:00', 1024, 1115, 'Akash Soni', 'zxcvbngfhghg'),
(302, '2022-06-20 07:19:46', 1037, 1115, 'Akash Soni', 'sss'),
(303, '2022-06-20 09:32:34', 1022, 1127, 'Sachin Mishra', 'What a dish');

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
(1000, 0, 'img/categories/categories-list/cl-7.jpg', '2022-06-14 14:46:16', 'Now way', 'How to make ice cream????', 'Composition of ice cream is comprised of sugar, fat, emulsifiers, stabilizers, water, egg and eggs products, corn syrup, dextrose and flavors. It is a three phase network consisting on air, solid and liquid in final product. Liquid phase contains ice crystals in embedded form and air cells in dispersed form.', 1115),
(1020, 1, 'img/uploads/cat-2.jpg', '2022-06-18 07:26:17', 'Category3', 'Heading3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111),
(1021, 0, 'img/uploads/cat-1.jpg', '2022-06-18 07:26:40', 'Category4', 'Heading4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1022, 0, 'img/uploads/cat-1.jpg', '2022-06-18 07:26:51', 'Category4', 'Heading4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1111),
(1023, 0, 'img/uploads/typography.jpg', '2022-06-19 08:33:07', 'Some category', 'My Heading', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1112),
(1024, 0, 'img/uploads/notiset4.png', '2022-06-20 06:18:30', 'asasasas', 'asasasas', 'dfghdfghghgfd', 1115),
(1026, 0, 'img/uploads/notiset4.png', '2022-06-20 06:21:43', 'sads', 'adasd', 'asdas', 1115),
(1027, 0, 'img/uploads/notiset4.png', '2022-06-20 06:21:51', 'asdas', 'dasd', 'asds', 1115),
(1028, 0, 'img/uploads/notiset44.png', '2022-06-20 06:22:52', 'dfg', 'dfgdfg', 'dfgdfg', 1115),
(1030, 0, 'img/uploads/notiset44.png', '2022-06-20 06:36:13', 'fredsgf', 'dgdfgd', 'gf', 1115),
(1032, 0, 'img/uploads/notiset44.png', '2022-06-20 06:58:25', 'sfsd', 'fsdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1033, 0, 'img/uploads/notiset4.png', '2022-06-20 06:59:21', 'fghdf', 'ghfgh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1034, 0, 'img/uploads/notiset44.png', '2022-06-20 07:05:37', 'asdas', 'dasd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1035, 0, 'img/uploads/notiset4.png', '2022-06-20 07:06:25', 'asasasas', 'asasasas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1036, 0, 'img/uploads/notiset44.png', '2022-06-20 07:08:09', 'sdfgfdsfgt', 'asasasas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1037, 0, 'img/uploads/notiset4.png', '2022-06-20 07:18:04', 'asasasas', 'asasasas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1115),
(1038, 0, 'img/uploads/ip-2.jpg', '2022-06-20 09:27:17', 'Somthing', 'Special Dish', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1127),
(1039, 0, 'img/uploads/notiset4.png', '2022-06-20 09:29:33', 'sdfvsd', 'fdsfsdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1127),
(1040, 0, 'img/uploads/notiset4.png', '2022-06-20 09:29:33', 'sdfvsd', 'fdsfsdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1127),
(1041, 0, 'img/uploads/ip-1.jpg', '2022-06-20 09:31:19', 'Special One', 'Not For all ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua accusantium doloremque laudantium.  Class aptent taciti sociosqu ad litora torquent per conubia nostra Inceptos himenaeos mauris.Integer gravida tincidunt accumsan. Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable foliage. Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim laoreet.', 1127);

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
  `user_ban` int NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `user_name`, `passwords`, `email`, `fullname`, `user_ban`, `role`) VALUES
(1111, 'admin', '1234', 'admin@admin.in', 'Authorised  Admin', 0, 'admin'),
(1112, 'luciffer', '1234', 'preteek@gmail.com', 'Prateek', 1, 'user'),
(1114, 'vaibhav', '1234', 'vaibhav@gmail.com', 'Vaibhav', 0, 'user'),
(1115, 'akashsoni', '1234', 'aakashsoni@gmail.com', 'Akash Soni', 1, 'user'),
(1122, 'kamal', '1234', 'kamal@gmail.com', 'Kamal Nayan Rai', 0, 'user'),
(1123, 'ishaag', '1234', 'isha@gmail.com', 'Isha Agarwal', 0, 'user'),
(1124, 'sujeet', '1234', 'sujeet@gmail.com', 'Sujeet Sahu', 0, 'user'),
(1125, 'arvind ', '1234', 'arvind@gmail.com', 'Arvind Singh', 0, 'user'),
(1126, 'satyam', '1234', 'satyam@gmail.com', 'Satyam Awasthi', 0, 'user'),
(1127, 'sachin', '1234', 'sachin@gmail.com', 'Sachin Mishra', 0, 'user');

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
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1042;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;

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

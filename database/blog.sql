-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'HTML', 'trial url', 'using html to code', 'trial', 'meta_description', 'html', 0, 0, '2022-03-28 11:36:28'),
(2, 'hello', 'coding', 'my first code', 'attempt 1', 'meta_description', 'php', 0, 2, '2022-03-28 14:01:57'),
(3, 'First html code', '#html', 'write your first html code', 'html', 'meta_description', 'html basics', 0, 0, '2022-03-28 16:28:06'),
(4, 'PHP', 'learning PHP', 'adding the div class', 'div', 'meta_description', 'php', 0, 0, '2022-03-28 22:05:14'),
(5, 'Laravel', 'learning laravel', 'writing our first code in laravel', 'laravel framework', 'meta_description', 'laravel', 0, 0, '2022-03-28 22:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(2, 1, 'dfcgvhbj klm', 'xcvbnm,', 'zwexrctvybunjik,l', '1648551395.jpg', 'azsdfgvhbjn', 'meta_description', 'aszdfgv', 0, '2022-03-28 16:34:35'),
(3, 2, 'dfgvbhjmnk,l', 'sdfghjk', 'sdfgbhjmkl', '1648551606.jpg', 'adsfghj', 'meta_description', 'asdfgh', 0, '2022-03-28 17:37:08'),
(4, 1, 'dfcgvbhjnmk,l.', 'sxdcfvgbhjnmk', 'sdcfgbhjnmk', '1648489170.png', 'sdfvgbhnjm', 'meta_description', 'ASDFGHJK', 0, '2022-03-28 17:39:30'),
(5, 4, 'installing laravel', 'https://laravel.com/docs/9.x/installation', 'https://laravel.com/docs/9.x/installation', '1648520464.png', 'laravel', 'meta_description', 'laravel', 0, '2022-03-29 02:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `ceated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `ceated_at`) VALUES
(1, 'nancy', 'nganga', 'nancynganga06@gmail.com', 'nancy', 1, 0, '2022-03-25 07:32:52'),
(2, 'Isaac', 'Mutuku', 'Isaackmutuku@gmail.com', '123456', 0, 0, '2022-03-25 09:53:12'),
(3, 'nancy', 'Wangari', 'nancynganga@gmail.com', '123456', 0, 0, '2022-03-28 09:13:17'),
(4, 'nancy', 'Wangari', 'nancynganga@gmail.com', '123456', 0, 0, '2022-03-28 09:13:17'),
(9, 'nancy', 'Wangari', 'nancywangari@gmail.com', '123456', 0, 0, '2022-03-28 15:49:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 10:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voice_based_emailing`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `mail_id`, `address`, `subject`, `message`, `username`, `status`) VALUES
(50, 'T a h a s i n@2019/09/08?08:53:37am', 'Tahasinislam39@gmail.com', 'This is a test mail', 'I love you thank you', 'a', '0'),
(51, 'T a h a s i n@2019/09/08?09:23:44am', '123@yahoo.com', 'Hello', 'Business in Islam 0151 493 074 this is my number please call me I love you', 'a', '0'),
(52, 'T a h a s i n@2019/09/09?03:10:14pm', 'Kawshik529@gmail.com', 'This is a test mail', 'Hi this is Tarzan Islam I love you', 'a', '0'),
(53, 'T a h a s i n@2019/09/10?11:25:25am', 'Kawshik529@gmail.com', 'This is a test mail', 'Protected text message the mail should be sent', 'a', '0'),
(54, 'A@2019/09/10?03:08:45pm', 'Kawshik529@gmail.com', 'This is a testing mail', 'This is our presentation Dev and we are submitting our project', 'a', '0');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message_id` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `message_time` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `message_id`, `sender`, `message`, `message_time`, `status`) VALUES
(1, '', '@2019/09/11?03:32:26pm', 'a', 'Hello', '', 0),
(2, 'Tahasin', 'a@2019/09/11?03:44:45pm', 'a', 'Hello', '', 0),
(3, 'A', 'a@2019/09/11?05:39:56pm', 'a', 'This is Hassan', '', 1),
(4, 'Tahasin', '@2019/09/11?05:52:47pm', '', '', '', 0),
(5, 'Tahasin', '@2019/09/11?05:54:09pm', '', '', '', 0),
(6, 'A', '@2019/09/11?05:59:00pm', '', '', '', 1),
(7, 'A', '@2019/09/11?06:01:08pm', '', '', '', 1),
(8, 'Hello', 'A@2019/09/11?06:09:20pm', 'A', '', '', 1),
(9, 'Hello', 'A@2019/09/11?06:09:48pm', 'A', '', '', 1),
(10, 'Hello', 'A@2019/09/11?07:28:03pm', 'September 11, 2019, 11:28 pm', 'This is me Tarzan', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `replier` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reply` varchar(10000) NOT NULL,
  `replytime` varchar(100) NOT NULL,
  `compare_date` varchar(11) NOT NULL,
  `compare_time` varchar(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `username`, `replier`, `email`, `reply`, `replytime`, `compare_date`, `compare_time`, `status`) VALUES
(1, 'a', 'sdsadasd', '', '<p>Type your reply here.... vfdsfdsfd</p>\r\n', 'September 8, 2019, 3:19 pm', '908', '03:19:43', 1),
(2, 'a', 'sdsadasd', '', '<p>Type your reply here....</p>\r\n', 'September 8, 2019, 3:21 pm', '9', '03:21:20', 1),
(3, 'a', 'sdsadasd', '', '<p>Type your reply here....</p>\r\n', 'September 8, 2019, 3:23 pm', '2019', '03:23:48', 1),
(4, 'a', 'sdsadasd', '', '<p>Type your reply here....</p>\r\n', 'September 8, 2019, 3:24 pm', '2019-09-08', '03:24:37', 1),
(5, 'a', 'Islam', 'tahasinislam39@gmail.com', '<p>Hello...this is me.</p>\r\n', 'September 10, 2019, 12:05 pm', '2019-09-10', '12:05:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(14, 'Tahasin', '123456'),
(26, 'Hello', '12345'),
(31, 'a k t e r', '12345'),
(32, '', ''),
(35, 'ABCD', ''),
(36, 'K w s h i k', '123'),
(37, 'K a w s h i k', '123456'),
(41, 'S h u b r o', '123 123'),
(42, 'a', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

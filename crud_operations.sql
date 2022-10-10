-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 أكتوبر 2022 الساعة 06:05
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhammad_php`
--

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `emaiL` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `check_password` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `username`, `emaiL`, `password`, `check_password`, `address`, `phone`, `image`, `time`) VALUES
(16, 'john', 'aaa@aaa.com', '1234', '1442', '', '', '', '2022-09-01 22:48:29'),
(17, 'hello@amam', 'asdl@as', '415445', '4444', '', '', '', '2022-09-01 22:51:52'),
(18, 'jam', 'jam@ja.ja', '2244', '2244', '', '', '', '2022-09-04 18:47:23'),
(19, 'mohamssmad', 'ssss@ssss', 'halahala', 'halahala', '', '', '', '2022-09-04 19:27:39'),
(20, 'aaa', '123456@aaa', '123456', 'Mohammad', '', '', '', '2022-09-02 00:15:33'),
(21, '1551', '151515@kaskk', '4884', '1566', '', '', '', '2022-09-02 00:16:04'),
(44, 'Moha', 'Moha@gmail.com', '123456', '123456', '', '', '', '2022-09-07 07:21:41'),
(45, 'Moaa@gmail.com', 'Moaa@gmail.com', '123456', '123456', '', '', '', '2022-09-07 07:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_db` (`username`),
  ADD UNIQUE KEY `email_db` (`emaiL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

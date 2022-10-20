-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 02:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidenote`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_new`
--

CREATE TABLE `create_new` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_new`
--

INSERT INTO `create_new` (`id`, `title`, `description`) VALUES
(3, 'NEW NOTE    ', 'burya amahoro ntacyo wayanganya kokodvdfgd'),
(4, 'new ', 'c'),
(5, 'ghgfh', 'ghgfhh'),
(6, 'x', 'gfgg'),
(14, '1 ', '21'),
(15, 'THIS IS A NEW NOTE ', 'honestly this is the best thing here'),
(16, 'THIS IS A NEW DOCUMENT', 'PLEASE DO REFINE YOUR PROGRESS\r\n'),
(17, 'LET', '123'),
(18, 'A NEW DO', 'please do leave the crews'),
(19, 'fds', 'ds'),
(20, 'opne', 'dafs'),
(21, 'lets try oneee', 'adfasas'),
(22, 'DFADF', 'FASDFDSF');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `email`, `username`, `pass_word`) VALUES
(1, 'josh@gmail.com', 'josh', '0000'),
(2, 'cena@gmail.com', 'cena', '1234'),
(3, 'cyumbati@gmail.com', 'cyumbati', '1234'),
(4, 'cyumbati@gmail.com', 'cyumbati', '1234'),
(5, 'cyumbati@gmail.com', 'cyumbati', '1234'),
(6, 'cyumbati@gmail.com', 'cyumbati', '1234'),
(7, 'cyumbati@gmail.com', 'cyumbati', '1234'),
(8, 'ISHIMWE@gmail.com', 'ishimwe', '1234'),
(9, 'philz@gmail.com', 'philz', '1234'),
(10, 'philz@gmail.com', 'philz', '1234'),
(11, 'cyugu@gmail.com', 'cyugu', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_new`
--
ALTER TABLE `create_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_new`
--
ALTER TABLE `create_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 09:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_technologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `electives`
--

CREATE TABLE `electives` (
  `id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `lecturer` varchar(128) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electives`
--

INSERT INTO `electives` (`id`, `title`, `description`, `lecturer`, `created_at`) VALUES
(1, 'Programming with Go', 'Let\'s learn Go', 'Nikolay Batchiyski', NULL),
(2, 'abvv', 'azzz', 'Svetlin Ivanov', NULL),
(3, 'Web technologies', 'Let\'s learn the web', 'Milen Petrov', NULL),
(4, 'mnogoqqqqqqqqqqqqqk', 'mnogo qk kurs, koito az shte vodq', 'az', '16:51, March 27 2017'),
(5, 'qqqq ', 'egatiii i qkotoo\r\n', 'eeeeee', '17:05, March 27 2017'),
(6, 'eha', 'ehaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'eeeeee', '17:06, March 27 2017'),
(7, 'aaa', 'sssssssssssssssssssssssssssssssssss', 'dsadasdsadsadsadsadsadas', '18:14, March 27 2017'),
(8, 'sadsadsa', 'dsadsadsadsadsadsad', 'sss', '18:17, March 27 2017'),
(9, 'sadsadsa', 'dsadsadsadsadsadsad', 'sss', '18:17, March 27 2017'),
(10, 'pff', 'of', 'dsfdsfdsfds', '21:52, March 27 2017'),
(11, 'ff', 'dffdsfsdfsdfds', 'fdfsdfsdf', '11:15, March 28 2017'),
(12, 'ss', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ehooooo', '11:18, March 28 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electives`
--
ALTER TABLE `electives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electives`
--
ALTER TABLE `electives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

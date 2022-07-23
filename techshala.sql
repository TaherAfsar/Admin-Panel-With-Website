-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventpage`
--

CREATE TABLE `eventpage` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `tdesc` mediumtext NOT NULL,
  `idesc` mediumtext DEFAULT NULL,
  `timing` mediumtext NOT NULL,
  `ocom` mediumtext NOT NULL,
  `faculty` mediumtext NOT NULL,
  `mentor` mediumtext NOT NULL,
  `thead` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventpage`
--

INSERT INTO `eventpage` (`id`, `title`, `tdesc`, `idesc`, `timing`, `ocom`, `faculty`, `mentor`, `thead`) VALUES
(1, 'TechShala', 'Tech Talk aims to research and discover ideas worth spreading.\r\n\r\n\r\nTech Talk is organized for Vidyalankar Polytechnic students and faculties who seek to uncover new ideas, wants to share their latest research and information about latest technological trends in their domain.', 'Tech Talk events consist of a series of short, carefully prepared talks, demonstrations, and performances on a wide range of technical subjects.\r\nTech talks should not more than 15 minutes long and are typically delivered by a single presenter, in some special case two presenters are allowed.\r\nAfter presentation 5 minutes Q&A session will be conducted.\r\nAssessment will be done on all presentation done through out the semester and best two presentation will be awarded with certificates.', 'Every Saturday 5 pm Onwards.', 'Vidyalankar Polytechnic\'s Research and Development Committee', 'Ms. Archana Gopnarayan - 8355911658 - (Information Technology)\r\nMr. Rohit Sharma - 9167405488 - (Electronics and Telecommunication)\r\nMs. Sneha Patange - 9819103422 - (Computer Engineering)\r\nMr. Prasad Koyande - 9987263652 - (Computer Engineering)', ' Mr. Imran Sayyed', 'Mr. Anjum Mujawar'),
(5, 'sportmania', 'gaming', 'dont wait after 7.00pm in clg', '7.00pm', 'Vidyalankar Polytechnic\'s Research and Development Committee', 'Ms. Archana Gopnarayan - 8355911658 - (Information Technology) Mr. Prasad Koyande - 9987263652 - (Computer Engineering) Mr. Rohit Sharma - 9167405488 - (Electronics and Telecommunication) Ms. Sneha Patange - 9819103422 - (Computer Engineering', 'Prasad Koyande', 'Mr. Anjum Mujawar');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `date`, `image`) VALUES
(8, 'Ribbon Ceremony', '29-03-2022', 'image/sam2.jpg'),
(9, 'Hardware Competition', '1-04-2022', 'image/hello.jpg'),
(11, 'VP', '30-03-2022', 'image/hello.jpg'),
(12, 'VP', '29-03-2022', 'image/sam6.jpg'),
(13, 'VP', '29-03-2022', 'image/sam6.jpg'),
(14, 'Verve', '5th April', 'image/vp_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imageslider`
--

CREATE TABLE `imageslider` (
  `id` int(11) NOT NULL,
  `image` varchar(38) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imageslider`
--

INSERT INTO `imageslider` (`id`, `image`, `description`) VALUES
(6, 'image/bg2.jpg', 'College Building'),
(8, 'image/bann2.jpg', 'College Building2');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(38) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Taher Afsar', 'taherafsar41@gmail.com', '8356994540', 'ukfh'),
(2, 'Taher Afsar', 'taherafsar41@gmail.com', '8356994540', 'Hi'),
(3, 'Taher Afsar', 'taherafsar41@gmail.com', '8356994540', 'saasascxa'),
(4, 'Taher Afsar', 'taherafsar41@gmail.com', '8356994540', 'QDwdcdcW');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(38) DEFAULT NULL,
  `rollnum` varchar(40) DEFAULT NULL,
  `event` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `rollnum`, `event`) VALUES
(3, 'Taher Afsar', 'taherafsar41@gmail.com', '20203C0052', 'Hackathon'),
(4, 'Taher Afsar', 'taherafsar41@gmail.com', '20203C0052', 'TechTalk'),
(5, 'savar ', 'taherafsar41@gmail.com', '516521837129', 'TechTalk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'admin', '8356994540', 'taherafsar41@gmail.com', 'admin', 'admin1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventpage`
--
ALTER TABLE `eventpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageslider`
--
ALTER TABLE `imageslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventpage`
--
ALTER TABLE `eventpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `imageslider`
--
ALTER TABLE `imageslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

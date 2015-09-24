-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 07:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arangu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dedication`
--

CREATE TABLE IF NOT EXISTS `dedication` (
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dedication`
--

INSERT INTO `dedication` (`message`, `time`, `id`) VALUES
('hello machane!', '2015-09-19 16:31:36', 1),
('pwolik!!', '2015-09-19 16:31:43', 2),
('thakarku!', '2015-09-19 16:32:38', 3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `stage` varchar(100) NOT NULL,
  `now_next` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`stage`, `now_next`, `event`) VALUES
('stage1', 'now', 'solo'),
('stage2', 'now', 'example'),
('stage2', 'next', 'example'),
('stage3', 'next', 'example'),
('stage3', 'now', 'mime'),
('stage4', 'now', 'example'),
('stage4', 'next', 'example'),
('stage1', 'next', 'dance');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(2000) NOT NULL,
  `priority` int(10) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`time`, `message`, `priority`, `id`) VALUES
('2015-09-18 15:26:33', 'This is sample message', 1, 1),
('2015-09-18 16:12:05', 'This is sample message', 1, 2),
('2015-09-18 16:19:44', 'This is sample message', 1, 3),
('2015-09-18 16:28:51', 'This is sample message', 1, 4),
('2015-09-18 16:30:05', 'This is sample message', 1, 5),
('2015-09-18 16:32:07', 'This is sample message', 1, 6),
('2015-09-18 16:32:37', 'Hello every1', 1, 7),
('2015-09-19 02:06:45', 'come to stge1', 2, 8),
('2015-09-19 05:20:34', 'hello', 2, 9),
('2015-09-19 11:18:17', 'ntha worka', 3, 10),
('2015-09-21 03:04:07', 'Elocution Will start soon', 5, 11);

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

CREATE TABLE IF NOT EXISTS `radio` (
  `liveup` varchar(500) NOT NULL,
`id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`liveup`, `id`, `time`) VALUES
('|| Interview with  Rahul vasu @ 10.30 .Don Miss it ||', 2, '2015-09-20 15:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
`id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `First_name_1` varchar(100) NOT NULL,
  `First_name_2` varchar(100) NOT NULL,
  `First_name_3` varchar(100) NOT NULL,
  `Second_name_1` varchar(100) NOT NULL,
  `Second_name_2` varchar(100) NOT NULL,
  `Second_name_3` varchar(100) NOT NULL,
  `Third_name_1` varchar(100) NOT NULL,
  `Third_name_2` varchar(100) NOT NULL,
  `Third_name_3` varchar(100) NOT NULL,
  `Flag` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `event`, `First_name_1`, `First_name_2`, `First_name_3`, `Second_name_1`, `Second_name_2`, `Second_name_3`, `Third_name_1`, `Third_name_2`, `Third_name_3`, `Flag`, `time`) VALUES
(9, 'Group Dance Female', 'Anand J. - S2 CSE-A', '', '', 'Abin kirshna - S3 EIE-A', '', '', 'Nadish Shajahan - S3 CSE-B', '', '', 1, '2015-09-21 02:41:16'),
(10, 'Bharathanatyam', 'Akhila Nair - S4 EC-A', '', '', 'Amal P - S4 CSE-A', '', '', 'Shafiq hassan t - S2 EC-B', '', '', 1, '2015-09-21 02:41:16'),
(11, 'Collage', 'Abin kirshna - S3 EIE-A', '', '', 'Akhila Nair - S4 EC-A', '', '', 'ANURAG RADHAKRISHNAN - S4 ME-A', '', '', 1, '2015-09-21 02:41:58'),
(12, 'Cartooning', 'Amal P - S4 CSE-A', '', '', 'jithinlal - S4 CSE-A', '', '', 'Abin kirshna - S3 EIE-A', '', '', 1, '2015-09-21 02:47:39'),
(13, 'Elocution - English', 'Anand J. - S2 CSE-A', '', '', 'Shafiq hassan t - S2 EC-B', '', '', 'Aiswarya Viswanath - S2 EC-A', '', '', 1, '2015-09-21 02:48:32'),
(14, 'Group Song Indian', 'vaisakh s & Team', '', '', 'Ashitha c - S3 CE-A', '', '', 'David vithayathil - S2 EC-A', '', '', 1, '2015-09-21 15:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `url` varchar(400) NOT NULL,
`id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`url`, `id`) VALUES
('img/arangu.jpg', 1),
('img/arangu.jpg', 2),
('img/arangu.jpg', 3),
('img/yellow.png', 4),
('img/gnb.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'anil', 'anil'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dedication`
--
ALTER TABLE `dedication`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dedication`
--
ALTER TABLE `dedication`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

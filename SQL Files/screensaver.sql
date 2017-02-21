-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 08:05 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myntra`
--

-- --------------------------------------------------------

--
-- Table structure for table `screensaver`
--

CREATE TABLE `screensaver` (
  `id` int(11) NOT NULL,
  `bgPath` text NOT NULL,
  `exploreBtnPath` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screensaver`
--

INSERT INTO `screensaver` (`id`, `bgPath`, `exploreBtnPath`, `type`, `create_date`) VALUES
(8, '5845398722videoplayback.mp4', '0743305335btn_explorenow.png', 'catalouge', '2017-02-15 14:37:55'),
(9, '0392793512videoplayback.mp4', '7962223878btn_explorenow.png', 'outlander', '2017-02-15 12:12:56'),
(10, '7871343675videoplayback.mp4', '6222583340btn_explorenow.png', 'motogp', '2017-02-15 12:13:56'),
(11, '0065342634videoplayback.mp4', '1784733752btn_explorenow.png', 'roadster', '2017-02-15 12:14:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `screensaver`
--
ALTER TABLE `screensaver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `screensaver`
--
ALTER TABLE `screensaver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

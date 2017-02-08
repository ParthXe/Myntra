-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 11:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myntra`
--

-- --------------------------------------------------------

--
-- Table structure for table `filter_by`
--

CREATE TABLE IF NOT EXISTS `filter_by` (
  `id` int(11) NOT NULL,
  `headingTxt` varchar(100) NOT NULL,
  `closeImageButton` text NOT NULL,
  `clearButton` text NOT NULL,
  `applyButton` text NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `type` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filter_by`
--

INSERT INTO `filter_by` (`id`, `headingTxt`, `closeImageButton`, `clearButton`, `applyButton`, `option1`, `option2`, `option3`, `option4`, `type`, `create_date`) VALUES
(1, 'FILTER BY', '9371348730btn_exit.png', 'CLEAR ALL', 'APPLY', 'CATEGORIES', 'COLOURS', 'SIZES', 'PRICE', '', '2017-02-05 19:16:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

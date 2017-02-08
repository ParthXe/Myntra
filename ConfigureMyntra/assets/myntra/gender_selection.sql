-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 11:44 AM
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
-- Table structure for table `gender_selection`
--

CREATE TABLE IF NOT EXISTS `gender_selection` (
`id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `thunderImage` text NOT NULL,
  `image1Disabled` text NOT NULL,
  `image2Disabled` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gender_selection`
--

INSERT INTO `gender_selection` (`id`, `image1`, `image2`, `thunderImage`, `image1Disabled`, `image2Disabled`, `category`, `create_date`) VALUES
(1, '1486125344active_men.png', '1486125344active_women.png', '1486125344sepration1.png', '1486125344inactive_men.png', '1486125344inactive_women.png', '', '2017-02-07 07:21:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender_selection`
--
ALTER TABLE `gender_selection`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender_selection`
--
ALTER TABLE `gender_selection`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

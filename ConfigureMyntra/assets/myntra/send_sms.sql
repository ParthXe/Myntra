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
-- Table structure for table `send_sms`
--

CREATE TABLE IF NOT EXISTS `send_sms` (
`id` int(11) NOT NULL,
  `headingTxt` text NOT NULL,
  `closeImageButton` text NOT NULL,
  `bodyTxt` text NOT NULL,
  `button1` varchar(300) NOT NULL,
  `button2` varchar(300) NOT NULL,
  `type` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `send_sms`
--

INSERT INTO `send_sms` (`id`, `headingTxt`, `closeImageButton`, `bodyTxt`, `button1`, `button2`, `type`, `create_date`) VALUES
(1, 'CONGRATULATIONS', '3258266897btn_close.png', 'You will receive an sms link of your shoosen product which you can purchase online on Myntra.', 'RETRY SMS', 'CONTINUE SHOPPING', '', '2017-02-04 11:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `send_sms`
--
ALTER TABLE `send_sms`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `send_sms`
--
ALTER TABLE `send_sms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

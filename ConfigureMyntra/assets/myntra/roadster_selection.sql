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
-- Table structure for table `roadster_selection`
--

CREATE TABLE IF NOT EXISTS `roadster_selection` (
`id` int(11) NOT NULL,
  `topBarImage` text NOT NULL,
  `BackbuttonImage` text NOT NULL,
  `collectionMenImage` text NOT NULL,
  `catalogueMenImage` text NOT NULL,
  `collectionWomenImage` text NOT NULL,
  `catalogueWomenImage` text NOT NULL,
  `collectionHeadingTxt` varchar(300) NOT NULL,
  `collectionTxt` text NOT NULL,
  `collectionBtnImage` text NOT NULL,
  `catalogueHeadingTxt` varchar(300) NOT NULL,
  `catalogueTxt` text NOT NULL,
  `catalogueBtnImage` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roadster_selection`
--

INSERT INTO `roadster_selection` (`id`, `topBarImage`, `BackbuttonImage`, `collectionMenImage`, `catalogueMenImage`, `collectionWomenImage`, `catalogueWomenImage`, `collectionHeadingTxt`, `collectionTxt`, `collectionBtnImage`, `catalogueHeadingTxt`, `catalogueTxt`, `catalogueBtnImage`, `category`, `create_date`) VALUES
(1, '94951668671.jpg', '72912977762.png', '4046808632Asset1.png', '0884605382Asset2.png', '3803624527Asset1.png', '7546852032Asset2.png', 'THE COLLECTION', '_It''s only fair that you take a closer look at your future wardrobe.', '7359048229ViewLooks.png', 'THE CATALOGUE', '_take the short cur, apply your filters, check it all out, and check out.', '3547737310ViewLooks.png', '', '2017-02-07 06:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roadster_selection`
--
ALTER TABLE `roadster_selection`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roadster_selection`
--
ALTER TABLE `roadster_selection`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

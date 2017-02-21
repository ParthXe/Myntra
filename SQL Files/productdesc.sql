-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 08:07 AM
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
-- Table structure for table `productdesc`
--

CREATE TABLE `productdesc` (
  `id` int(11) NOT NULL,
  `topBarImage` text NOT NULL,
  `BackbuttonImage` text NOT NULL,
  `homebuttonImage` text NOT NULL,
  `myntralogoImage` text NOT NULL,
  `getProdBtn` text NOT NULL,
  `relatedProdHeadingTxt` text NOT NULL,
  `descTxtHeading` text NOT NULL,
  `colorSelectionHeading` text NOT NULL,
  `sizeSelectionHeading` text NOT NULL,
  `notsureHeading` text NOT NULL,
  `closeImageButton` text NOT NULL,
  `sizePopupHeadingTxt` text NOT NULL,
  `sizePopupFirstTabTxt` text NOT NULL,
  `prodUrl` text NOT NULL,
  `sizeUrl` text NOT NULL,
  `nextbuttonImage` text NOT NULL,
  `backbtnImage` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdesc`
--

INSERT INTO `productdesc` (`id`, `topBarImage`, `BackbuttonImage`, `homebuttonImage`, `myntralogoImage`, `getProdBtn`, `relatedProdHeadingTxt`, `descTxtHeading`, `colorSelectionHeading`, `sizeSelectionHeading`, `notsureHeading`, `closeImageButton`, `sizePopupHeadingTxt`, `sizePopupFirstTabTxt`, `prodUrl`, `sizeUrl`, `nextbuttonImage`, `backbtnImage`, `type`, `create_date`) VALUES
(4, '08570049151.jpg', '87929949492.png', '96655811684.png', '25306087553.png', '4364392463GetProduct.png', '<span style="font-size:30px"><span style="color:#ffffff"><b>RELATED PRODUCTS</b></span></span>', '-', 'COLOURS', 'SIZES', 'Not Sure?', '0974187845btn_exit.png', 'SIZE CHART', 'SIZE', 'http://developer.myntra.com/style/', 'http://www.myntra.com/web/myntra-catalog-service/sizechart/', '9796466767ArrowRight.png', '5554345042ArrowLeft.png', 'outlander', '2017-02-16 06:35:30'),
(5, '77235184911.jpg', '18950247052.png', '45059351984.png', '61356412673.png', '2300757142GetProduct.png', '<span style="font-size:30px"><span style="color:#ffffff"><b>RELATED PRODUCTS</b></span></span>', '-', 'COLOURS', 'SIZES', 'Not Sure?', '3853707135btn_exit.png', 'SIZE CHART', 'SIZE', 'http://developer.myntra.com/style/', 'http://www.myntra.com/web/myntra-catalog-service/sizechart/', '2521779967ArrowRight.png', '2348764833ArrowLeft.png', 'motogp', '2017-02-16 06:40:35'),
(6, '31554528331.jpg', '03358613082.png', '96745736054.png', '70135620613.png', '8955392432GetProduct.png', '<span style="font-size:30px"><span style="color:#ffffff"><b>RELATED PRODUCTS</b></span></span>', '-', 'COLOURS', 'SIZES', 'Not Sure?', '0018184089btn_exit.png', 'SIZE CHART', 'SIZE', 'http://developer.myntra.com/style/', 'http://www.myntra.com/web/myntra-catalog-service/sizechart/', '4610805089ArrowRight.png', '9729902646ArrowLeft.png', 'roadster', '2017-02-16 06:45:31'),
(7, '54963810971.jpg', '16703430382.png', '42165229984.png', '62427624483.png', '9737994183GetProduct.png', '<span style="font-size:30px"><span style="color:#ffffff"><b>RELATED PRODUCTS</b></span></span>', '-', 'COLOURS', 'SIZES', 'Not Sure?', '0089206042btn_exit.png', '<p>SIZE CHART</p>\r\n', '<p>SIZE</p>\r\n', 'http://developer.myntra.com/style/', 'http://www.myntra.com/web/myntra-catalog-service/sizechart/', '6361333008ArrowRight.png', '4351429133ArrowLeft.png', 'catalouge', '2017-02-16 06:57:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdesc`
--
ALTER TABLE `productdesc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdesc`
--
ALTER TABLE `productdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

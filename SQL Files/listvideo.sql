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
-- Table structure for table `listvideo`
--

CREATE TABLE `listvideo` (
  `id` int(11) NOT NULL,
  `topBarImage` text NOT NULL,
  `headingTxt` text NOT NULL,
  `BackbuttonImage` text NOT NULL,
  `homebuttonImage` text NOT NULL,
  `sortBtnImage` text NOT NULL,
  `sortRollBtnImage` text NOT NULL,
  `filterBtnImage` text NOT NULL,
  `filterRollBtnImage` text NOT NULL,
  `myntralogoImage` text NOT NULL,
  `blackbgImage` text NOT NULL,
  `imageGalleryPos` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listvideo`
--

INSERT INTO `listvideo` (`id`, `topBarImage`, `headingTxt`, `BackbuttonImage`, `homebuttonImage`, `sortBtnImage`, `sortRollBtnImage`, `filterBtnImage`, `filterRollBtnImage`, `myntralogoImage`, `blackbgImage`, `imageGalleryPos`, `type`, `create_date`) VALUES
(2, '3471969950bg.png', '<span style="font-size:55px"><span style="color:#ffffff">CATALOG</span></span>', '72251675532.png', '37978770214.png', '9613175046sortbtn.png', '4896562438sortroll.png', '3265088123filterbtn.png', '6554431515filterRoll.png', '64278894273.png', '61030690077.png', '-', 'catalouge', '2017-02-15 14:36:54'),
(3, '87088668201.jpg', '<span style="font-size:55px"><span style="color:#ffffff">CATALOG</span></span>', '97601281082.png', '34832729884.png', '6480136311sortbtn.png', '7439525369sortroll.png', '2444574075filterbtn.png', '9782764098filterRoll.png', '37712269173.png', '35341705727.png', '-', 'outlander', '2017-02-15 14:23:09'),
(4, '22977638761.jpg', '<span style="font-size:55px"><span style="color:#ffffff">CATALOG</span></span>', '69682465132.png', '23406515484.png', '2115308121sortbtn.png', '4852323430sortroll.png', '2489466835filterbtn.png', '0204903177filterRoll.png', '63646381413.png', '17131062427.png', '-', 'motogp', '2017-02-15 13:56:54'),
(5, '38649947061.jpg', '<span style="font-size:55px"><span style="color:#ffffff">CATALOG</span></span>', '57695103612.png', '08250865734.png', '7920119601sortbtn.png', '4739283052sortroll.png', '8487352552filterbtn.png', '3371329271filterRoll.png', '28672551253.png', '48610069027.png', '-', 'roadster', '2017-02-15 13:57:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listvideo`
--
ALTER TABLE `listvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listvideo`
--
ALTER TABLE `listvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `collectionvideo`
--

CREATE TABLE `collectionvideo` (
  `id` int(11) NOT NULL,
  `bgPath` text NOT NULL,
  `homebuttonImage` text NOT NULL,
  `scrtext` text NOT NULL,
  `insttext` text NOT NULL,
  `motoGpvideo` text NOT NULL,
  `outLandervideo` text NOT NULL,
  `buttonImage` text NOT NULL,
  `closeImageButton` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collectionvideo`
--

INSERT INTO `collectionvideo` (`id`, `bgPath`, `homebuttonImage`, `scrtext`, `insttext`, `motoGpvideo`, `outLandervideo`, `buttonImage`, `closeImageButton`, `type`, `create_date`) VALUES
(1, '9096578096bg.png', '96353890754.png', '<span style="color:#000000"><b>_planning to head out on the highway?<br />\r\n<br />\r\nnot before checking out the</b></span><span style="color:#006600"><b> outlander collection </b></span><span style="color:#000000"><b>, you''re not!</b></span>', '<span style="color:#000000"><b>Please wear headsets for enhanced video experience</b></span>', '7309837340MotoGP.mp4', '3657578182Outlander.mp4', '4390813628btn_watchthevideo.png', '7900446052btn_close.png', 'catalouge', '2017-02-15 14:10:11'),
(2, '7318510812bg.png', '80129763114.png', '<span style="color:#000000"><b>_planning to head out on the highway?<br />\r\n<br />\r\n<br />\r\n<br />\r\nnot before checking out the</b></span><span style="color:#006600"><b> outlander collection </b></span><span style="color:#000000"><b>, you''re not!</b></span>', '<span style="color:#000000"><b>Please wear headsets for enhanced video experience</b></span>', '2384047762MotoGP.mp4', '3511480749Outlander.mp4', '6300256326btn_watchthevideo.png', '1093847966btn_close.png', 'outlander', '2017-02-15 13:03:09'),
(3, '9753433241bg.png', '12470519774.png', '<span style="color:#000000"><b>_planning to head out on the highway?<br />\r\n<br />\r\n<br />\r\n<br />\r\nnot before checking out the</b></span><span style="color:#006600"><b> outlander collection </b></span><span style="color:#000000"><b>, you''re not!</b></span>', '<span style="color:#000000"><b>Please wear headsets for enhanced video experience</b></span>', '8412590550MotoGP.mp4', '4067941468Outlander.mp4', '0101534349btn_watchthevideo.png', '2325627928btn_close.png', 'motogp', '2017-02-15 13:04:19'),
(4, '6036664252bg.png', '39048981024.png', '<span style="color:#000000"><b>_planning to head out on the highway?<br />\r\n<br />\r\n<br />\r\n<br />\r\nnot before checking out the</b></span><span style="color:#006600"><b> outlander collection </b></span><span style="color:#000000"><b>, you''re not!</b></span>', '<span style="color:#000000"><b>Please wear headsets for enhanced video experience</b></span>', '8170442377MotoGP.mp4', '0409514737Outlander.mp4', '4371814723btn_watchthevideo.png', '6354123703btn_close.png', 'roadster', '2017-02-15 13:05:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectionvideo`
--
ALTER TABLE `collectionvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collectionvideo`
--
ALTER TABLE `collectionvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

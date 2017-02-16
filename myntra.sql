-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 08:48 AM
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
-- Table structure for table `carousel_data`
--

CREATE TABLE `carousel_data` (
  `id` int(12) NOT NULL,
  `title` varchar(500) NOT NULL,
  `imagePath` text NOT NULL,
  `gender` enum('men','women') NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `create_date` datetime NOT NULL,
  `order1` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel_data`
--

INSERT INTO `carousel_data` (`id`, `title`, `imagePath`, `gender`, `type`, `status`, `create_date`, `order1`) VALUES
(26, 'MotoGP1', '4317497627The-Collection.jpg', 'men', 'motogp', '1', '2017-02-09 11:23:39', 0),
(27, 'MotoGP2', '1641218774Look-05.jpg', 'men', 'motogp', '1', '2017-02-09 11:24:10', 0),
(28, 'MotoGP3', '7549841693Look-02.jpg', 'men', 'motogp', '1', '2017-02-09 11:24:24', 0),
(30, 'MotoGP4', '8507730515Look-01.jpg', 'men', 'motogp', '1', '2017-02-09 11:24:47', 0),
(31, 'MotoGP5', '8535599195Look-03.jpg', 'men', 'motogp', '1', '2017-02-09 11:25:25', 0),
(32, 'MotoGP6', '2030679077Look-04.jpg', 'men', 'motogp', '1', '2017-02-09 11:25:52', 0),
(35, 'Outlander1', '0615486564The-Catalog.jpg', 'men', 'outlander', '1', '2017-02-09 11:28:20', 0),
(36, 'Outlander2', '3546182556The-Collection.jpg', 'men', 'outlander', '1', '2017-02-09 11:28:58', 0),
(37, 'Outlander4', '7858707696Look-02.jpg', 'men', 'outlander', '1', '2017-02-09 11:29:35', 0),
(38, 'Outlander3', '0024426137Look-01.jpg', 'men', 'outlander', '1', '2017-02-09 11:29:22', 0),
(39, 'Outlander5', '2816469587Look-05.jpg', 'men', 'outlander', '1', '2017-02-09 11:29:51', 0),
(40, 'Outlander6', '4947821627Look-04.jpg', 'men', 'outlander', '1', '2017-02-09 11:31:55', 0),
(41, 'Outlander7', '5942540761Look-03.jpg', 'men', 'outlander', '1', '2017-02-09 11:30:39', 0),
(42, 'Outlander W1', '1486535000Picture1.jpg', 'women', 'outlander', '1', '2017-02-13 09:07:19', 0),
(43, 'Outlander W2', '1486535191Picture2.jpg', 'women', 'outlander', '1', '2017-02-08 11:56:31', 0),
(44, 'Outlander W3', '1486535200Picture3.jpg', 'women', 'outlander', '1', '2017-02-08 11:56:40', 0),
(45, 'Outlander W4', '1486535210Picture4.jpg', 'women', 'outlander', '1', '2017-02-08 11:56:50', 0),
(46, 'Outlander W5', '1486535224Picture5.jpg', 'women', 'outlander', '1', '2017-02-08 11:57:04', 0),
(47, 'Outlander W6', '1486535239Picture6.jpg', 'women', 'outlander', '1', '2017-02-08 11:57:19', 0),
(48, 'Outlander W7', '1486535255Picture7.jpg', 'women', 'outlander', '1', '2017-02-08 11:57:35', 0),
(49, 'Outlander W8', '1486535264Picture8.jpg', 'women', 'outlander', '1', '2017-02-08 11:57:44', 0);

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
(1, '8455221011bg.png', '85466485494.png', '<span style="color:#000000"><b>_planning to head out on the highway?<br />\r\n<br />\r\nnot before checking out the </b></span><span style="color:#006400"><b>outlander collection , </b></span><span style="color:#000000"><b>you''re not!</b></span>', '<span style="color:#000000"><b>Please wear headsets for enhanced video experience</b></span>', '8072313623MotoGP.mp4', '0200411364Outlander.mp4', '7743973185btn_watchthevideo.png', '1081280129btn_close.png', '', '2017-02-10 13:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `denim_female`
--

CREATE TABLE `denim_female` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` varchar(255) DEFAULT NULL,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denim_female`
--

INSERT INTO `denim_female` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["4.png,5.png"]', 'Female Denim title', 'Female Denim desc', '11.jpg,10.jpg', '26th Jan 2016', 'Female Denim trends title', '7.png,13.jpg', '19.jpg,18.jpg', '1.png', 'Female Denim vintage title', 'Female Denim vintage desc', 1, '2017-02-06 14:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `denim_male`
--

CREATE TABLE `denim_male` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` text,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denim_male`
--

INSERT INTO `denim_male` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["2.png,3.png,4.png"]', 'Male Denim title', 'Male Denim desc', '8.png,9.png,7.png', '26th Jan 2016', 'Denim Trends title', '11.png,12.png,10.png', '11.png,12.png,13.png', '1.png', 'Male Denim vintage title', 'Male Denim vintage desc', 1, '2017-02-07 08:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Id` int(11) NOT NULL,
  `destination_name` varchar(50) DEFAULT NULL,
  `destination_state` varchar(50) DEFAULT NULL,
  `destination_desc` varchar(255) DEFAULT NULL,
  `why_go_there` varchar(255) DEFAULT NULL,
  `how_far` varchar(255) DEFAULT NULL,
  `best_time_visit` varchar(255) DEFAULT NULL,
  `destination_bg_image` varchar(100) DEFAULT NULL,
  `destination_images` text,
  `destination_matching_male_img` varchar(50) DEFAULT NULL,
  `destination_matching_male_info` varchar(100) DEFAULT NULL,
  `destination_matching_female_img` varchar(50) DEFAULT NULL,
  `destination_matching_female_info` varchar(100) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Id`, `destination_name`, `destination_state`, `destination_desc`, `why_go_there`, `how_far`, `best_time_visit`, `destination_bg_image`, `destination_images`, `destination_matching_male_img`, `destination_matching_male_info`, `destination_matching_female_img`, `destination_matching_female_info`, `active`, `created`) VALUES
(1, 'The Kavaratti Islands1', 'Lakshwadeep', 'The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.', 'whole beach glows blue! How many glowing beaches have YOU seen?', '403kms from Kochi.', 'August to December', '2.png', '1.jpg,2.jpg', '13.png', 'The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.', '19.png', 'The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.', 1, '2017-01-19 08:00:09'),
(2, 'The Shettyhalli Church', 'Karnataka', 'This church vanishes underwater every time the monsoons hit. Talk about holy waters! ', 'Church, monsoons, whoosh! Do I have to paint you a picture?', '204kms from Bengaluru.', 'The Monsoons! Pay attention.', '2.png', 'emailer_2.jpg,BG_Emailer1.jpg', 'NIleshSLimfit.jpg', 'Test', 'Untitled.png', 'Test', 1, '2017-02-02 09:15:39'),
(3, 'Mystery Lonar Lake', 'Maharashtra', '52,000 years ago, a meteor strike created a lake. Compasses don’t work here, and NASA can’t explain how it exists.', 'Ancient temples, alien bacteria, NASA scratching its head. Take your pick.', '377kms from Pune.', 'November to January.', '1-300x110.jpg', 'banner_1000x300-300x90.jpg,multitaction-image.jpg,multitaction-image-150x150.jpg', 'Untitled-1-150x150.jpg', 'Test', 'Untitled-1-300x90.jpg', 'Test', 1, '2017-02-02 09:17:55'),
(4, 'The Komik Village', 'Himachal Pradesh', 'The highest road in the world runs through here. There is none higher. Period', 'You get to look down on all other roads in the world. Also, the view. Duh!', '527kms from Chandigarh.', 'February to May.', 'Deep_Hydrating_Dew.png', 'RG_16a.png,Intensive-Revitalising-Night-Cream.png', 'Natural_White_Hydrating_Toner.png', 'Test', 'NW_11.png', 'Test', 1, '2017-02-06 11:40:52'),
(6, 'Lambasingi', 'Andhra Pradesh', 'Did you know it snows in South India? Well, it does in this little hill station! ', 'Because, snowfall, South India. Don’t pretend you’re not surprised', '599kms from Hyderabad.', 'November to February.', 'Deep_Hydrating_Dew.png', NULL, 'Advanced_Cleansing_System.png', 'Test', 'Nourishing_Hydration_Mask.png', 'Test', 1, '2017-02-07 12:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `filter_by`
--

CREATE TABLE `filter_by` (
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
(1, 'FILTER BY', '8270229426btn_exit.png', 'CLEAR ALL', 'APPLY', 'CATEGORIES', 'COLOURS', 'SIZES', 'PRICE', '', '2017-02-10 12:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `gender_selection`
--

CREATE TABLE `gender_selection` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `thunderImage` text NOT NULL,
  `image1Disabled` text NOT NULL,
  `image2Disabled` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender_selection`
--

INSERT INTO `gender_selection` (`id`, `image1`, `image2`, `thunderImage`, `image1Disabled`, `image2Disabled`, `type`, `create_date`) VALUES
(1, '6990576900active_men.png', '5813222900active_women.png', '6589012325thunder.png', '3273843281inactive_men.png', '6974925896inactive_women.png', '', '2017-02-10 13:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(11) NOT NULL,
  `topBarImage` varchar(400) NOT NULL,
  `headingTxt` text NOT NULL,
  `BackbuttonImage` text NOT NULL,
  `tab1` text NOT NULL,
  `tab2` text NOT NULL,
  `tab3` text NOT NULL,
  `tab4` text NOT NULL,
  `tab5` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `topBarImage`, `headingTxt`, `BackbuttonImage`, `tab1`, `tab2`, `tab3`, `tab4`, `tab5`, `type`, `create_date`) VALUES
(1, '44785403231.jpg', 'LICENSE TERMS', '85932488022.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage', '', '', '', '2017-02-10 12:50:07');

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
(1, '41844871971.jpg', '<span style="color:#ffffff"><span style="font-size:55px">CATALOG</span></span>', '5144553680backBtn.png', '38865650764.png', '8919162357sortbtn.png', '4563058500sortroll.png', '7501628319filterbtn.png', '0865526275filterRoll.png', '41054736983.png', '51839307077.png', '-', '', '2017-02-10 13:44:59');

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
(1, '88036730721.jpg', '87961647122.png', '89264144054.png', '27706120083.png', '8242322576GetProduct.png', '<b><span style="font-size:30px"><span style="color:#ffffff">RELATED PRODUCTS</span></span></b>', '', 'COLOURS', 'SIZES', 'Not Sure?', '5298850880btn_exit.png', '<p>SIZE CHART</p>\r\n', '<p>SIZE</p>\r\n', 'http://developer.myntra.com/style/', 'http://www.myntra.com/web/myntra-catalog-service/sizechart/', '8738550476ArrowRight.png', '5986805127ArrowLeft.png', '', '2017-02-13 14:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `roadster_selection`
--

CREATE TABLE `roadster_selection` (
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
  `type` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roadster_selection`
--

INSERT INTO `roadster_selection` (`id`, `topBarImage`, `BackbuttonImage`, `collectionMenImage`, `catalogueMenImage`, `collectionWomenImage`, `catalogueWomenImage`, `collectionHeadingTxt`, `collectionTxt`, `collectionBtnImage`, `catalogueHeadingTxt`, `catalogueTxt`, `catalogueBtnImage`, `type`, `create_date`) VALUES
(1, '10150644331.jpg', '56262336002.png', '7096170669Asset1.png', '4982217941Asset2.png', '9744698030women2.jpg', '2225328963women1.jpg', 'THE COLLECTION', '_It''s only fair that you take a closer look at your future wardrobe.', '2675011338ViewLooks.png', 'THE CATALOGUE', '_take the short cur, apply your filters, check it all out, and check out.', '6783614095ViewCatalog.png', '', '2017-02-10 12:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rid` int(10) NOT NULL,
  `r_name` varchar(64) NOT NULL,
  `r_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `r_name`, `r_created_on`) VALUES
(1, 'administrator', '2016-07-04 11:38:12'),
(2, 'seller', '2016-07-05 11:20:42');

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
(1, '7706645427videoplayback.mp4', '0929107065btn_explorenow.png', '', '2017-02-10 13:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `send_sms`
--

CREATE TABLE `send_sms` (
  `id` int(11) NOT NULL,
  `headingTxt` text NOT NULL,
  `closeImageButton` text NOT NULL,
  `bodyTxt` text NOT NULL,
  `button1` varchar(300) NOT NULL,
  `button2` varchar(300) NOT NULL,
  `type` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_sms`
--

INSERT INTO `send_sms` (`id`, `headingTxt`, `closeImageButton`, `bodyTxt`, `button1`, `button2`, `type`, `create_date`) VALUES
(1, 'CONGRATULATIONS', '8233981867btn_close.png', 'You will receive an sms link of your shoosen product which you can purchase online on Myntra.', 'RETRY SMS', 'CONTINUE SHOPPING', '', '2017-02-10 12:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `shirts_female`
--

CREATE TABLE `shirts_female` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` text,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts_female`
--

INSERT INTO `shirts_female` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["3.png,4.png,5.png"]', 'Female Shirt title', 'Female Shirt desc', '9.png,7.png,8.png', '26th Jan 2016', 'Female Shirt trends title', '12.png,111.png,7.png,8.png', '12.png', '1.png', 'Female Shirt vintage title', 'Female Shirt vintage desc', 1, '2017-02-07 08:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `shirts_male`
--

CREATE TABLE `shirts_male` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` text,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts_male`
--

INSERT INTO `shirts_male` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["3.png,4.png"]', 'Male shirts title', 'Male shirts desc', '8.png,7.png', '26th Jan 2017', 'Male shirts trends title', '8.png,6.png,7.png', '16.png,14.png,15.png', '1.png', 'Male shirts vintage title', 'Male shirts vintage desc', 1, '2017-02-07 08:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `signature_video`
--

CREATE TABLE `signature_video` (
  `Id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signature_video`
--

INSERT INTO `signature_video` (`Id`, `category_id`, `video`, `active`, `modify`) VALUES
(1, 1, '4.png', 1, '2017-01-19 10:30:15'),
(2, 1, '7.png', 1, '2017-01-19 10:43:30'),
(3, 3, '6.png', 1, '2017-01-19 10:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `sort_by`
--

CREATE TABLE `sort_by` (
  `id` int(11) NOT NULL,
  `headingTxt` varchar(100) NOT NULL,
  `closeImageButton` text NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `type` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sort_by`
--

INSERT INTO `sort_by` (`id`, `headingTxt`, `closeImageButton`, `option1`, `option2`, `option3`, `option4`, `type`, `create_date`) VALUES
(1, 'SORT BY', '0808064248btn_exit.png', 'POPULARITY', 'WHAT''S NEW', 'PRICE: HIGH - LOW', 'PRICE: LOW - HIGH', '', '2017-02-10 13:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `styles_data`
--

CREATE TABLE `styles_data` (
  `id` int(12) NOT NULL,
  `carousel_id` int(11) NOT NULL,
  `style_id` varchar(1200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `order1` int(11) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `styles_data`
--

INSERT INTO `styles_data` (`id`, `carousel_id`, `style_id`, `title`, `status`, `order1`, `create_date`) VALUES
(14, 30, '1543005', 'M41', 1, 1, '2017-02-09 11:08:58'),
(15, 30, '1214931', 'M42', 1, 2, '2017-02-09 11:09:05'),
(16, 30, '1460323', 'M43', 1, 3, '2017-02-09 11:09:12'),
(17, 30, '1425681', 'M44', 1, 4, '2017-02-09 11:09:23'),
(19, 31, '1543004', 'M51', 1, 1, '2017-02-09 11:09:34'),
(20, 31, '1436377', 'M52', 1, 2, '2017-02-09 11:09:43'),
(21, 31, '1460332', 'M53', 1, 3, '2017-02-09 11:09:49'),
(22, 31, '1557414', 'M54', 1, 4, '2017-02-09 11:09:55'),
(25, 32, '1498450', 'M61', 1, 1, '2017-01-31 13:02:35'),
(26, 32, '1460323', 'M62', 1, 2, '2017-01-31 13:03:06'),
(27, 32, '1425681', 'M63', 1, 3, '2017-01-31 13:03:46'),
(28, 32, '1686217', 'M64', 1, 4, '2017-01-31 13:04:37'),
(31, 27, '1686217', 'M21', 1, 1, '2017-02-01 11:15:58'),
(32, 26, '1375140', 'M11', 1, 1, '2017-02-13 09:11:07'),
(33, 27, '1436396', 'M22', 1, 2, '2017-02-01 11:16:46'),
(34, 26, '1460319', 'M12', 1, 2, '2017-02-01 11:16:55'),
(35, 27, '1214931', 'M23', 1, 3, '2017-02-01 11:17:23'),
(36, 26, '1425681', 'M13', 1, 3, '2017-02-01 11:17:27'),
(37, 27, '1460332', 'M24', 1, 4, '2017-02-01 11:17:51'),
(43, 28, '1214929', 'M31', 1, 1, '2017-02-01 11:20:25'),
(44, 28, '1460323', 'M34', 1, 2, '2017-02-01 11:20:55'),
(45, 28, '1686217', 'M32', 1, 3, '2017-02-01 11:21:00'),
(49, 35, '1298820', 'OutM1', 1, 1, '2017-02-07 17:07:16'),
(50, 35, '1235237', 'OutM2', 1, 2, '2017-02-07 17:09:55'),
(51, 35, '1557397', 'OutM3', 1, 3, '2017-02-07 17:11:14'),
(52, 36, '1491904', 'OutM21', 1, 1, '2017-02-07 17:12:43'),
(53, 36, '1619829', 'OutM22', 1, 2, '2017-02-07 17:13:46'),
(54, 36, '1557397', 'OutM23', 1, 3, '2017-02-07 17:15:02'),
(55, 38, '1376250', 'OutM31', 1, 1, '2017-02-07 17:42:43'),
(56, 38, '1619829', 'OutM32', 1, 2, '2017-02-07 17:43:37'),
(57, 38, '1425681', 'OutM33', 1, 3, '2017-02-07 17:44:41'),
(58, 37, '1298820', 'OutM41', 1, 1, '2017-02-08 11:56:28'),
(59, 37, '1235237', 'OutM42', 1, 2, '2017-02-08 11:57:20'),
(60, 37, '1557397', 'OutM43', 1, 3, '2017-02-08 11:59:26'),
(61, 49, '1519717', 'OutW81', 1, 1, '2017-02-09 11:04:43'),
(62, 49, '1436285', 'OutW82', 1, 2, '2017-02-09 11:05:11'),
(63, 49, '1261292', 'OutW83', 1, 3, '2017-02-09 11:05:00'),
(64, 49, '1362214', 'OutW84', 1, 4, '2017-02-09 11:05:32'),
(65, 39, '1284819', 'OutM51', 1, 1, '2017-02-08 12:06:24'),
(66, 48, '1602888', 'OutW71', 1, 1, '2017-02-09 11:05:55'),
(67, 48, '1261295', 'OutW72', 1, 2, '2017-02-09 11:05:39'),
(68, 48, '1584897', 'OutW73', 1, 3, '2017-02-09 11:05:49'),
(69, 39, '1214544', 'OutM52', 1, 2, '2017-02-08 12:17:20'),
(70, 39, '1356484', 'OutM53', 1, 3, '2017-02-08 12:18:05'),
(71, 39, '1557397', 'OutM54', 1, 4, '2017-02-08 12:19:36'),
(72, 47, '1381739', 'OutW61', 1, 1, '2017-02-09 11:06:07'),
(73, 47, '1261297', 'OutW62', 1, 2, '2017-02-09 11:04:24'),
(74, 47, '1470091', 'OutW63', 1, 3, '2017-02-09 11:06:18'),
(75, 47, '1602888', 'OutW64', 1, 4, '2017-02-09 11:06:27'),
(76, 40, '1292050', 'OutM61', 1, 1, '2017-02-08 12:27:13'),
(77, 40, '1619843', 'OutM62', 1, 2, '2017-02-08 12:28:27'),
(78, 46, '1519722', 'OutW51', 1, 1, '2017-02-09 11:06:48'),
(79, 46, '1349513', 'OutW52', 1, 2, '2017-02-09 11:07:08'),
(81, 46, '1469719', 'OutW53', 1, 3, '2017-02-09 11:07:18'),
(82, 46, '1377312', 'OutW54', 1, 4, '2017-02-09 11:07:27'),
(83, 40, '1557398', 'OutM63', 1, 4, '2017-02-08 12:31:30'),
(84, 41, '1317288', 'OutM71', 1, 1, '2017-02-08 12:32:28'),
(85, 41, '1236183', 'OutM72', 1, 2, '2017-02-08 12:34:19'),
(86, 45, '1602888', 'OutW41', 1, 1, '2017-02-09 11:07:37'),
(87, 41, '1274935', 'OutM73', 1, 3, '2017-02-08 12:35:22'),
(88, 45, '1470091', 'OutW42', 1, 2, '2017-02-09 11:07:47'),
(89, 41, '1557398', 'OutM73', 1, 4, '2017-02-08 12:36:09'),
(90, 45, '1381733', 'OutW43', 1, 3, '2017-02-09 11:07:58'),
(92, 42, '1549886', 'OutW11', 1, 1, '2017-02-08 12:38:10'),
(93, 42, '1478981', 'OutW12', 1, 2, '2017-02-08 12:38:52'),
(94, 42, '1602888', 'OutW13', 1, 3, '2017-02-08 12:40:00'),
(95, 44, '1637310', 'OutW33', 1, 1, '2017-02-09 11:04:05'),
(96, 44, '1420150', 'OutW32', 1, 2, '2017-02-09 11:07:00'),
(97, 43, '1261295', 'OutW21', 1, 1, '2017-02-08 12:41:12'),
(98, 44, '1501845', 'OutW31', 1, 3, '2017-02-09 11:04:15'),
(99, 43, '1478981', 'OutW22', 1, 2, '2017-02-08 12:42:28'),
(100, 43, '1602888', 'OutW23', 1, 3, '2017-02-09 11:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts_female`
--

CREATE TABLE `tshirts_female` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` varchar(255) DEFAULT NULL,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tshirts_female`
--

INSERT INTO `tshirts_female` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["7.png,8.png,9.png"]', 'Female T-shirt Title', 'Female T-shirt desc', '9.png,7.png,8.png', '26th Jan 2016', 'Female T-shirt trends Title', 'screenshot-41.jpg,virtual-reality31.jpg', '16.png,14.png,15.png', '1.png', 'Female T-shirt vintage Title', 'Female T-shirt vintage desc', 1, '2017-02-07 10:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `tshirts_male`
--

CREATE TABLE `tshirts_male` (
  `Id` int(11) NOT NULL,
  `anatomy` varchar(50) DEFAULT NULL,
  `champion_products_title` varchar(100) DEFAULT NULL,
  `champion_products_desc` varchar(255) DEFAULT NULL,
  `champion_products_images` varchar(255) DEFAULT NULL,
  `trends_launch_date` varchar(100) DEFAULT NULL,
  `trends_title` varchar(100) DEFAULT NULL,
  `trends_images` text,
  `vintage_images` text,
  `vintage_video` varchar(100) DEFAULT NULL,
  `vintage_title` varchar(50) DEFAULT NULL,
  `vintage_desc` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tshirts_male`
--

INSERT INTO `tshirts_male` (`Id`, `anatomy`, `champion_products_title`, `champion_products_desc`, `champion_products_images`, `trends_launch_date`, `trends_title`, `trends_images`, `vintage_images`, `vintage_video`, `vintage_title`, `vintage_desc`, `active`, `modify`) VALUES
(1, '["3.png,4.png,5.png"]', 'Male tshirts title', 'Male tshirts desc', '91.png,7.png,8.png', '26th Jan 2016', 'Male tshirts trends title', '17.png,15.png,16.png', '19_-_Copy1.png,14.png,15.png', '1.png', 'Male tshirts vintage title', 'Male tshirts vintage desc', 1, '2017-02-07 11:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `fname` varchar(125) NOT NULL,
  `lname` varchar(125) NOT NULL,
  `mobile` varchar(155) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_on` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `pwd_change_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `pass`, `mail`, `fname`, `lname`, `mobile`, `is_active`, `created_on`, `modified_on`, `last_login`, `picture`, `pwd_change_code`) VALUES
(1, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'darshan.choudhary@gmail.com', 'Darshan', 'Choudhary', '8691921064', 1, '2016-07-03 18:30:00', NULL, NULL, NULL, ''),
(2, 'ashish', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ashish@gmail.com', 'Ashish', 'Gosavi', '', 1, '2016-07-11 08:59:10', NULL, NULL, NULL, ''),
(3, 'seema@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'seema@gmail.com', 'Seema', 'Jet', '8691921064', 1, '2016-07-29 03:16:08', NULL, NULL, NULL, ''),
(4, 'Vikrant', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'vikrant@xenium.in', 'Vikrant', 'Malvankar', '8691921064', 1, '2017-01-16 06:32:11', NULL, NULL, NULL, ''),
(5, 'Shushant', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sushant@xenium.in', 'Sushant', 'xenium', '8691921064', 1, '2017-01-16 06:34:46', NULL, NULL, NULL, ''),
(6, 'parth', 'e735b5ba8bc040b4eff790fe211210f520f27a73', 'parth@xenium.in', 'p', 'D', 'f', 1, '2017-02-09 06:50:32', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `ur_uid` int(10) NOT NULL DEFAULT '0',
  `ur_rid` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`ur_uid`, `ur_rid`) VALUES
(1, 1),
(1, 2),
(2, 1),
(4, 2),
(5, 1),
(6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel_data`
--
ALTER TABLE `carousel_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectionvideo`
--
ALTER TABLE `collectionvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denim_female`
--
ALTER TABLE `denim_female`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `denim_male`
--
ALTER TABLE `denim_male`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gender_selection`
--
ALTER TABLE `gender_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listvideo`
--
ALTER TABLE `listvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdesc`
--
ALTER TABLE `productdesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roadster_selection`
--
ALTER TABLE `roadster_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `screensaver`
--
ALTER TABLE `screensaver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_sms`
--
ALTER TABLE `send_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirts_female`
--
ALTER TABLE `shirts_female`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shirts_male`
--
ALTER TABLE `shirts_male`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signature_video`
--
ALTER TABLE `signature_video`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sort_by`
--
ALTER TABLE `sort_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `styles_data`
--
ALTER TABLE `styles_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tshirts_female`
--
ALTER TABLE `tshirts_female`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tshirts_male`
--
ALTER TABLE `tshirts_male`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`ur_uid`,`ur_rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel_data`
--
ALTER TABLE `carousel_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `collectionvideo`
--
ALTER TABLE `collectionvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `denim_female`
--
ALTER TABLE `denim_female`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `denim_male`
--
ALTER TABLE `denim_male`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gender_selection`
--
ALTER TABLE `gender_selection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listvideo`
--
ALTER TABLE `listvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productdesc`
--
ALTER TABLE `productdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roadster_selection`
--
ALTER TABLE `roadster_selection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `screensaver`
--
ALTER TABLE `screensaver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `send_sms`
--
ALTER TABLE `send_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shirts_female`
--
ALTER TABLE `shirts_female`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shirts_male`
--
ALTER TABLE `shirts_male`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signature_video`
--
ALTER TABLE `signature_video`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sort_by`
--
ALTER TABLE `sort_by`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `styles_data`
--
ALTER TABLE `styles_data`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tshirts_female`
--
ALTER TABLE `tshirts_female`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tshirts_male`
--
ALTER TABLE `tshirts_male`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

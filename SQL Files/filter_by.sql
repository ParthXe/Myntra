# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:26:41
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "filter_by"
#

DROP TABLE IF EXISTS `filter_by`;
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

#
# Data for table "filter_by"
#

INSERT INTO `filter_by` VALUES (1,'FILTER BY','1527387144btn_exit.png','CLEAR ALL','APPLY','CATEGORIES','COLOURS','SIZES','PRICE','outlander','2017-02-15 14:16:34');

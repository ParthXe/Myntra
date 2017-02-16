# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:27:49
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "sort_by"
#

DROP TABLE IF EXISTS `sort_by`;
CREATE TABLE `sort_by` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headingTxt` varchar(100) NOT NULL,
  `closeImageButton` text NOT NULL,
  `option1` varchar(300) NOT NULL,
  `option2` varchar(300) NOT NULL,
  `option3` varchar(300) NOT NULL,
  `option4` varchar(300) NOT NULL,
  `type` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "sort_by"
#

INSERT INTO `sort_by` VALUES (1,'SORT BY','5017454402btn_exit.png','POPULARITY','WHAT\'S NEW','PRICE: HIGH - LOW','PRICE: LOW - HIGH','catalouge','2017-02-15 11:43:21'),(2,'SORT BY','8927601075btn_exit.png','POPULARITY','WHAT\'S NEW','PRICE: HIGH - LOW','PRICE: LOW - HIGH','outlander','2017-02-15 11:42:31'),(3,'SORT BY','7629534115btn_exit.png','POPULARITY','WHAT\'S NEW','PRICE: HIGH - LOW','PRICE: LOW - HIGH','motogp','2017-02-15 11:51:01'),(4,'SORT BY','5323808779btn_exit.png','POPULARITY','WHAT\'S NEW','PRICE: HIGH - LOW','PRICE: LOW - HIGH','roadster','2017-02-15 11:52:04');

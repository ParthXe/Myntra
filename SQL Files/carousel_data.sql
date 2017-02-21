# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:26:28
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "carousel_data"
#

DROP TABLE IF EXISTS `carousel_data`;
CREATE TABLE `carousel_data` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `imagePath` text NOT NULL,
  `gender` enum('men','women') NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `create_date` datetime NOT NULL,
  `order1` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

#
# Data for table "carousel_data"
#

INSERT INTO `carousel_data` VALUES (26,'MotoGP1','4317497627The-Collection.jpg','men','motogp','1','2017-02-09 11:23:39',0),(27,'MotoGP2','1641218774Look-05.jpg','men','motogp','1','2017-02-09 11:24:10',0),(28,'MotoGP3','7549841693Look-02.jpg','men','motogp','1','2017-02-09 11:24:24',0),(30,'MotoGP4','8507730515Look-01.jpg','men','motogp','1','2017-02-09 11:24:47',0),(31,'MotoGP5','8535599195Look-03.jpg','men','motogp','1','2017-02-09 11:25:25',0),(32,'MotoGP6','2030679077Look-04.jpg','men','motogp','1','2017-02-09 11:25:52',0),(35,'Outlander1','0615486564The-Catalog.jpg','men','outlander','1','2017-02-09 11:28:20',0),(36,'Outlander2','3546182556The-Collection.jpg','men','outlander','1','2017-02-09 11:28:58',0),(37,'Outlander4','7858707696Look-02.jpg','men','outlander','1','2017-02-09 11:29:35',0),(38,'Outlander3','0024426137Look-01.jpg','men','outlander','1','2017-02-09 11:29:22',0),(39,'Outlander5','2816469587Look-05.jpg','men','outlander','1','2017-02-09 11:29:51',0),(40,'Outlander6','4947821627Look-04.jpg','men','outlander','1','2017-02-09 11:31:55',0),(41,'Outlander7','5942540761Look-03.jpg','men','outlander','1','2017-02-09 11:30:39',0),(42,'Outlander W1','1486535000Picture1.jpg','women','outlander','1','2017-02-13 09:07:19',0),(43,'Outlander W2','1486535191Picture2.jpg','women','outlander','1','2017-02-08 11:56:31',0),(44,'Outlander W3','1486535200Picture3.jpg','women','outlander','1','2017-02-08 11:56:40',0),(45,'Outlander W4','1486535210Picture4.jpg','women','outlander','1','2017-02-08 11:56:50',0),(46,'Outlander W5','1486535224Picture5.jpg','women','outlander','1','2017-02-08 11:57:04',0),(47,'Outlander W6','1486535239Picture6.jpg','women','outlander','1','2017-02-08 11:57:19',0),(48,'Outlander W7','1486535255Picture7.jpg','women','outlander','1','2017-02-08 11:57:35',0),(49,'Outlander W8','1486535264Picture8.jpg','women','outlander','1','2017-02-08 11:57:44',0);

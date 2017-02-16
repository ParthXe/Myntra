# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:27:13
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "roadster_selection"
#

DROP TABLE IF EXISTS `roadster_selection`;
CREATE TABLE `roadster_selection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "roadster_selection"
#

INSERT INTO `roadster_selection` VALUES (1,'21313138391.jpg','33827993482.png','3963023469Asset1.png','7723894087Asset2.png','3361585309Asset1.png','5563822021Asset2.png','THE COLLECTION','_It\'s only fair that you take a closer look at your future wardrobe.','5020536697ViewLooks.png','THE CATALOGUE','_take the short cur, apply your filters, check it all out, and check out.','6575275376ViewCatalog.png','catalouge','2017-02-15 11:08:43'),(2,'89264144051.jpg','15947402642.png','5402253987Asset1.png','6779122272Asset2.png','8738550476Asset1.png','5986805127Asset2.png','THE COLLECTION','_It\'s only fair that you take a closer look at your future wardrobe.','4603064952ViewLooks.png','THE CATALOGUE','_take the short cur, apply your filters, check it all out, and check out.','2043221530ViewCatalog.png','motogp','2017-02-15 11:13:11');

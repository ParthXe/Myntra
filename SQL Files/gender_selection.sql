# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:26:52
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "gender_selection"
#

DROP TABLE IF EXISTS `gender_selection`;
CREATE TABLE `gender_selection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `thunderImage` text NOT NULL,
  `image1Disabled` text NOT NULL,
  `image2Disabled` text NOT NULL,
  `type` text NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "gender_selection"
#

INSERT INTO `gender_selection` VALUES (3,'8223314680active_men.png','5642437431active_women.png','2417263885thunder.png','9821414755inactive_men.png','7878401241inactive_women.png','catalouge','2017-02-15 10:19:41'),(4,'1122165728active_men.png','7556499233active_women.png','8074753137thunder.png','8506075851inactive_men.png','3310490705inactive_women.png','roadster','2017-02-15 10:28:13'),(5,'2888398942active_men.png','7256958678active_women.png','8313761862thunder.png','3251286444inactive_men.png','4534266945inactive_women.png','outlander','2017-02-15 10:19:33'),(6,'9301543296active_men.png','4891716926active_women.png','3825591220thunder.png','8234800116inactive_men.png','9918824922inactive_women.png','motogp','2017-02-15 10:20:01');

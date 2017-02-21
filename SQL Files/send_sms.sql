# Host: localhost  (Version 5.6.20)
# Date: 2017-02-16 12:27:38
# Generator: MySQL-Front 5.4  (Build 2.11)
# Internet: http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "send_sms"
#

DROP TABLE IF EXISTS `send_sms`;
CREATE TABLE `send_sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headingTxt` text NOT NULL,
  `closeImageButton` text NOT NULL,
  `bodyTxt` text NOT NULL,
  `button1` varchar(300) NOT NULL,
  `button2` varchar(300) NOT NULL,
  `type` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "send_sms"
#

INSERT INTO `send_sms` VALUES (1,'CONGRATULATIONS','2360799893btn_close.png','You will receive an sms link of your shoosen product which you can purchase online on Myntra.','RETRY SMS','CONTINUE SHOPPING','catalouge','2017-02-16 07:36:02'),(2,'CONGRATULATIONS','6530863793btn_close.png','You will receive an sms link of your shoosen product which you can purchase online on Myntra.','RETRY SMS','CONTINUE SHOPPING','motogp','2017-02-16 07:49:20'),(3,'CONGRATULATIONS','6421564738btn_close.png','You will receive an sms link of your shoosen product which you can purchase online on Myntra.','RETRY SMS','CONTINUE SHOPPING','roadster','2017-02-16 07:39:17');

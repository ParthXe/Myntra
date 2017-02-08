
# Date: 2017-01-20 14:32:53
# Generator: MySQL-Front 5.4  (Build 4.148) - http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "denim_female"
#

DROP TABLE IF EXISTS `denim_female`;
CREATE TABLE `denim_female` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "denim_female"
#

INSERT INTO `denim_female` VALUES (1,'[\"4.png,5.png\"]','Female Denim title','Female Denim desc','[\"6.png,7.png,8.png\"]','26th Jan 2016','Female Denim trends title','[\"6.png,7.png,8.png\"]','[\"14.png,15.png,16.png\"]','1.png','Female Denim vintage title','Female Denim vintage desc',1,'2017-01-19 08:05:47');

#
# Structure for table "denim_male"
#

DROP TABLE IF EXISTS `denim_male`;
CREATE TABLE `denim_male` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "denim_male"
#

INSERT INTO `denim_male` VALUES (1,'[\"2.png,3.png,4.png\"]','Male Denim title','Male Denim desc','[\"7.png,8.png,9.png\"]','26th Jan 2016','Denim Trends title','[\"10.png,11.png,12.png\"]','[\"11.png,12.png,13.png\"]','1.png','Male Denim vintage title','Male Denim vintage desc',1,'2017-01-20 07:23:29');

#
# Structure for table "destination"
#

DROP TABLE IF EXISTS `destination`;
CREATE TABLE `destination` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "destination"
#

INSERT INTO `destination` VALUES (1,'The Kavaratti Islands','Lakshwadeep','The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.','whole beach glows blue! How many glowing beaches have YOU seen?','403kms from Kochi.','August to December','2.png','[\"7.png,8.png\"]','13.png','The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.','19.png','The ocean waves glow in the dark over here! No, seriously. Just wait till sunset.',1,'2017-01-19 08:00:09');

#
# Structure for table "role"
#

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(64) NOT NULL,
  `r_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "role"
#

INSERT INTO `role` VALUES (1,'administrator','2016-07-04 17:08:12'),(2,'seller','2016-07-05 16:50:42');

#
# Structure for table "shirts_female"
#

DROP TABLE IF EXISTS `shirts_female`;
CREATE TABLE `shirts_female` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "shirts_female"
#

INSERT INTO `shirts_female` VALUES (1,'[\"3.png,4.png,5.png\"]','Female Shirt title','Female Shirt desc','[\"7.png,8.png,9.png\"]','26th Jan 2016','Female Shirt trends title','[\"7.png,8.png,9.png\"]','[\"19 - Copy.png,19.png\"]','1.png','Female Shirt vintage title','Female Shirt vintage desc',1,'2017-01-19 08:12:06');

#
# Structure for table "shirts_male"
#

DROP TABLE IF EXISTS `shirts_male`;
CREATE TABLE `shirts_male` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "shirts_male"
#

INSERT INTO `shirts_male` VALUES (1,'[\"3.png,4.png\"]','Male shirts title','Male shirts desc','[\"7.png,8.png\"]','26th Jan 2017','Male shirts trends title','[\"6.png,7.png,8.png\"]','[\"14.png,15.png,16.png\"]','1.png','Male shirts vintage title','Male shirts vintage desc',1,'2017-01-19 08:09:31');

#
# Structure for table "signature_video"
#

DROP TABLE IF EXISTS `signature_video`;
CREATE TABLE `signature_video` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "signature_video"
#

INSERT INTO `signature_video` VALUES (1,1,'4.png',1,'2017-01-19 10:30:15'),(2,1,'7.png',1,'2017-01-19 10:43:30'),(3,3,'6.png',1,'2017-01-19 10:51:21');

#
# Structure for table "tshirts_female"
#

DROP TABLE IF EXISTS `tshirts_female`;
CREATE TABLE `tshirts_female` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "tshirts_female"
#

INSERT INTO `tshirts_female` VALUES (1,'[\"7.png,8.png,9.png\"]','Female T-shirt Title','Female T-shirt desc','[\"7.png,8.png,9.png\"]','26th Jan 2016','Female T-shirt trends Title','[\"10.png,11.png,12.png\"]','[\"14.png,15.png,16.png\"]','1.png','Female T-shirt vintage Title','Female T-shirt vintage desc',1,'2017-01-19 08:16:37');

#
# Structure for table "tshirts_male"
#

DROP TABLE IF EXISTS `tshirts_male`;
CREATE TABLE `tshirts_male` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modify` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "tshirts_male"
#

INSERT INTO `tshirts_male` VALUES (1,'[\"3.png,4.png,5.png\"]','Male tshirts title','Male tshirts desc','[\"7.png,8.png,9.png\"]','26th Jan 2016','Male tshirts trends title','[\"15.png,16.png,17.png\"]','[\"14.png,15.png,18.png\"]','1.png','Male tshirts vintage title','Male tshirts vintage desc',1,'2017-01-19 08:14:29');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
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
  `pwd_change_code` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','8cb2237d0679ca88db6464eac60da96345513964','darshan.choudhary@gmail.com','Darshan','Choudhary','8691921064',1,'2016-07-04 00:00:00',NULL,NULL,NULL,''),(2,'ashish','7c4a8d09ca3762af61e59520943dc26494f8941b','ashish@gmail.com','Ashish','Gosavi','',1,'2016-07-11 14:29:10',NULL,NULL,NULL,''),(3,'seema@gmail.com','8cb2237d0679ca88db6464eac60da96345513964','seema@gmail.com','Seema','Jet','8691921064',1,'2016-07-29 08:46:08',NULL,NULL,NULL,''),(4,'Vikrant','8cb2237d0679ca88db6464eac60da96345513964','vikrant@xenium.in','Vikrant','Malvankar','8691921064',1,'2017-01-16 12:02:11',NULL,NULL,NULL,''),(5,'Shushant','7c4a8d09ca3762af61e59520943dc26494f8941b','sushant@xenium.in','Sushant','xenium','8691921064',1,'2017-01-16 12:04:46',NULL,NULL,NULL,'');

#
# Structure for table "users_roles"
#

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles` (
  `ur_uid` int(10) NOT NULL DEFAULT '0',
  `ur_rid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ur_uid`,`ur_rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "users_roles"
#

INSERT INTO `users_roles` VALUES (1,1),(1,2),(2,1),(4,2),(5,1);

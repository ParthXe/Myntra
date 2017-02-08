-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2016 at 02:48 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pretmode_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(30) NOT NULL,
  `brand_slug` varchar(155) NOT NULL,
  `brand_desc` varchar(500) DEFAULT NULL,
  `brand_is_active` int(11) NOT NULL,
  `brand_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `brand_modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL,
  `cat_desc` varchar(500) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `cat_is_parent` int(11) NOT NULL,
  `cat_is_active` tinyint(1) NOT NULL,
  `cat_created_on` datetime NOT NULL,
  `cat_modified_on` datetime NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_parent_id` (`cat_parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `cat_filters_vals`
--

CREATE TABLE IF NOT EXISTS `cat_filters_vals` (
  `ctf_id` int(11) NOT NULL AUTO_INCREMENT,
  `ctf_cat_id` int(11) NOT NULL,
  `ctf_filter_id` int(11) NOT NULL,
  `ctf_filter_val_id` int(11) NOT NULL,
  `ctf_is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`ctf_id`),
  KEY `ctf_cat_id` (`ctf_cat_id`,`ctf_filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `color_id` int(10) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(20) NOT NULL,
  `color_slug` varchar(100) NOT NULL,
  `color_hexcode` varchar(7) NOT NULL,
  `col_is_active` int(11) NOT NULL,
  `col_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `col_modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `comm_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `commission_values`
--

CREATE TABLE IF NOT EXISTS `commission_values` (
  `val_id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_id` int(11) NOT NULL,
  `minimum` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `type` varchar(265) NOT NULL,
  `amount` decimal(16,5) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`val_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `comm_product_assoc`
--

CREATE TABLE IF NOT EXISTS `comm_product_assoc` (
  `assoc_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `comm_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assoc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE IF NOT EXISTS `conditions` (
  `cond_id` int(11) NOT NULL AUTO_INCREMENT,
  `cond_name` varchar(200) NOT NULL,
  `cond_slug` varchar(100) NOT NULL,
  `cond_is_active` int(11) NOT NULL,
  `cond_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cond_modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`cond_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `country_states`
--

CREATE TABLE IF NOT EXISTS `country_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` text,
  `state_name` char(64) DEFAULT NULL,
  `state_3_code` char(3) DEFAULT NULL,
  `state_2_code` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='States that are assigned to a country' AUTO_INCREMENT=3097 ;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `cp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cp_title` varchar(255) NOT NULL,
  `cp_code` varchar(25) NOT NULL,
  `cp_desc` varchar(500) DEFAULT NULL,
  `cp_value` int(11) NOT NULL,
  `cp_type` varchar(11) NOT NULL,
  `cp_cashback_value` int(11) NOT NULL,
  `cp_cashback_type` varchar(11) NOT NULL,
  `cp_applicable_products` longtext NOT NULL,
  `cp_min_order` int(11) NOT NULL,
  `cp_is_active` tinyint(1) NOT NULL,
  `cp_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `ftr_id` int(11) NOT NULL AUTO_INCREMENT,
  `ftr_name` varchar(100) NOT NULL,
  `ftr_slug` varchar(150) NOT NULL,
  `ftr_desc` varchar(1000) NOT NULL,
  `ftr_is_active` tinyint(1) NOT NULL,
  `ftr_created_on` datetime NOT NULL,
  `ftr_modified_on` datetime NOT NULL,
  PRIMARY KEY (`ftr_id`),
  KEY `ftr_slug` (`ftr_slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `filter_vals`
--

CREATE TABLE IF NOT EXISTS `filter_vals` (
  `ftv_id` int(11) NOT NULL AUTO_INCREMENT,
  `ftv_filter_id` int(11) NOT NULL COMMENT 'connected filter record',
  `ftv_name` varchar(100) NOT NULL,
  `ftv_slug` varchar(150) NOT NULL,
  `ftv_desc` varchar(1000) NOT NULL,
  `ftv_is_active` tinyint(1) NOT NULL,
  `ftv_created_on` datetime NOT NULL,
  `ftv_modified_on` datetime NOT NULL,
  PRIMARY KEY (`ftv_id`),
  KEY `ftv_filter_id` (`ftv_filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_pvar_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_weight` int(11) NOT NULL,
  `img_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE IF NOT EXISTS `ordered_products` (
  `product_id` int(10) NOT NULL,
  `product_var_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The uc_orders.order_id.',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT 'The product title, from node.title.',
  `model` varchar(255) NOT NULL DEFAULT '' COMMENT 'The product model/SKU, from uc_products.model.',
  `qty` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The number of the same product ordered.',
  `cost` decimal(16,5) NOT NULL DEFAULT '0.00000' COMMENT 'The cost to the store for the product.',
  `price` decimal(16,5) NOT NULL DEFAULT '0.00000' COMMENT 'The price paid for the ordered product.',
  `commission` decimal(16,5) NOT NULL DEFAULT '0.00000',
  `status` varchar(50) DEFAULT NULL COMMENT 'custom column for product status',
  KEY `order_id` (`order_id`),
  KEY `qty` (`qty`),
  KEY `order_id_2` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The products that have been ordered.';

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary key: the order ID.',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The user.uid of the customer that placed the order.',
  `order_status` varchar(32) NOT NULL DEFAULT '' COMMENT 'The uc_order_statuses.order_status_id indicating the order status.',
  `order_total` decimal(16,5) DEFAULT '0.00000' COMMENT 'The total amount to be paid for the order.',
  `product_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The total product quantity of the order.',
  `primary_email` varchar(96) NOT NULL DEFAULT '' COMMENT 'The email address of the customer.',
  `delivery_first_name` varchar(255) NOT NULL DEFAULT '' COMMENT 'The first name of the person receiving shipment.',
  `delivery_last_name` varchar(255) DEFAULT '' COMMENT 'The last name of the person receiving shipment.',
  `delivery_phone` varchar(255) NOT NULL DEFAULT '' COMMENT 'The phone number at the delivery location.',
  `delivery_company` varchar(255) NOT NULL DEFAULT '' COMMENT 'The company at the delivery location.',
  `delivery_street1` varchar(255) NOT NULL DEFAULT '' COMMENT 'The street address of the delivery location.',
  `delivery_street2` varchar(255) NOT NULL DEFAULT '' COMMENT 'The second line of the street address.',
  `delivery_city` varchar(255) NOT NULL DEFAULT '' COMMENT 'The city of the delivery location.',
  `delivery_state` varchar(255) NOT NULL COMMENT 'The state/zone/province id of the delivery location.',
  `delivery_postal_code` varchar(255) NOT NULL DEFAULT '' COMMENT 'The postal code of the delivery location.',
  `delivery_country` varchar(25) NOT NULL COMMENT 'The country ID of the delivery location.',
  `payment_method` varchar(32) NOT NULL DEFAULT '' COMMENT 'The method of payment.',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The Unix timestamp indicating when the order was created.',
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'The Unix timestamp indicating when the order was last modified.',
  `currency` char(3) NOT NULL DEFAULT '' COMMENT 'The ISO currency code for the order.',
  PRIMARY KEY (`order_id`),
  KEY `uid` (`uid`),
  KEY `order_status` (`order_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stores Ubercart order information.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders_coupons`
--

CREATE TABLE IF NOT EXISTS `orders_coupons` (
  `oc_id` int(11) NOT NULL AUTO_INCREMENT,
  `oc_cid` int(11) NOT NULL,
  `oc_oid` int(11) NOT NULL,
  `oc_value` decimal(10,2) NOT NULL,
  `oc_code` varchar(100) NOT NULL,
  PRIMARY KEY (`oc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE IF NOT EXISTS `order_statuses` (
  `order_status_id` varchar(32) NOT NULL DEFAULT '' COMMENT 'Primary key: the order status ID.',
  `title` varchar(48) NOT NULL DEFAULT '' COMMENT 'The status title.',
  `state` varchar(32) NOT NULL DEFAULT '' COMMENT 'The base order state with which the status is associated.',
  PRIMARY KEY (`order_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Statuses the order can have during its lifecycle.';

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_title` varchar(255) NOT NULL,
  `prod_desc` longtext NOT NULL,
  `prod_uid` int(11) NOT NULL,
  `prod_seller_id` int(11) NOT NULL,
  `prod_cat_id` int(11) NOT NULL,
  `prod_brand` int(11) NOT NULL,
  `prod_is_active` tinyint(1) NOT NULL,
  `prod_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prod_modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `prod_viewer_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_vars`
--

CREATE TABLE IF NOT EXISTS `product_vars` (
  `pvar_id` int(11) NOT NULL AUTO_INCREMENT,
  `pvar_prod_id` int(11) NOT NULL,
  `pvar_title` varchar(255) NOT NULL,
  `pvar_slugs` varchar(256) NOT NULL,
  `pvar_desc` longtext NOT NULL,
  `pvar_measurments` longtext NOT NULL,
  `pvar_materials` longtext NOT NULL,
  `pvar_sku` varchar(255) NOT NULL,
  `pvar_size` int(11) NOT NULL,
  `pvar_color` varchar(255) NOT NULL,
  `pvar_condition` int(11) NOT NULL,
  `pvar_list_price` decimal(16,5) NOT NULL DEFAULT '0.00000',
  `pvar_sell_price` decimal(16,5) NOT NULL DEFAULT '0.00000',
  `pvar_comm` decimal(16,5) NOT NULL DEFAULT '0.00000',
  `pvar_min_price` int(11) NOT NULL,
  `pvar_max_price` int(11) NOT NULL,
  `pvar_stock` int(11) NOT NULL,
  `pvar_is_active` tinyint(1) NOT NULL,
  `pvar_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pvar_modifired_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pvar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(64) NOT NULL,
  `r_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `seller_invoices`
--

CREATE TABLE IF NOT EXISTS `seller_invoices` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `applied_products` longtext NOT NULL,
  `payment_status` varchar(50) NOT NULL DEFAULT 'IN PROCESS',
  `amount` decimal(16,5) NOT NULL,
  `created_on` datetime NOT NULL,
  `payment_date` datetime DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `userpoints`
--

CREATE TABLE IF NOT EXISTS `userpoints` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `max_points` int(11) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userpoints_txn`
--

CREATE TABLE IF NOT EXISTS `userpoints_txn` (
  `txn_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `points` int(1) NOT NULL,
  `description` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  PRIMARY KEY (`txn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_addresses`
--

CREATE TABLE IF NOT EXISTS `users_addresses` (
  `ua_id` int(11) NOT NULL AUTO_INCREMENT,
  `ua_uid` int(11) NOT NULL,
  `ua_name` varchar(255) NOT NULL,
  `ua_mobile` varchar(155) NOT NULL,
  `ua_address_1` varchar(255) NOT NULL,
  `ua_address_2` varchar(255) NOT NULL,
  `ua_city` varchar(155) NOT NULL,
  `ua_state` varchar(255) NOT NULL,
  `ua_pincode` int(11) NOT NULL,
  `ua_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ua_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `ur_uid` int(10) NOT NULL DEFAULT '0',
  `ur_rid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ur_uid`,`ur_rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_details`
--

CREATE TABLE IF NOT EXISTS `user_bank_details` (
  `user_bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_bank_uid` int(11) NOT NULL,
  `user_bank_name` varchar(255) NOT NULL,
  `user_bank_account_number` varchar(255) NOT NULL,
  `user_bank_ifsc` varchar(255) NOT NULL,
  `user_bank_branch` varchar(255) NOT NULL,
  `user_bank_holder_name` varchar(255) NOT NULL,
  `user_bank_pan_number` varchar(155) DEFAULT NULL,
  `user_bank_pan_image` varchar(155) DEFAULT NULL,
  `user_bank_pan_status` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`user_bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

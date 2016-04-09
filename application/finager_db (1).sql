-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 02:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_bank`
--

CREATE TABLE IF NOT EXISTS `card_bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(150) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `card_bank`
--

INSERT INTO `card_bank` (`id`, `bank_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Brac Bank', 1, 0, '2016-03-08 02:16:39', '0000-00-00 00:00:00'),
(2, 'Datch-Bangla Bank Ltd.', 1, 0, '2016-03-15 03:30:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_informations`
--

CREATE TABLE IF NOT EXISTS `card_card_informations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bank_id` int(10) DEFAULT NULL,
  `cc_type_id` int(10) DEFAULT NULL,
  `card_category` int(10) DEFAULT NULL,
  `card_name` varchar(200) DEFAULT NULL,
  `card_image_name` varchar(200) DEFAULT NULL,
  `card_image_url` varchar(200) DEFAULT NULL,
  `card_user_id` varchar(10) DEFAULT NULL,
  `income_range_min_business` varchar(20) DEFAULT NULL,
  `income_range_min_salaried` varchar(20) DEFAULT NULL,
  `income_range_max_business` varchar(20) DEFAULT NULL,
  `income_range_max_salaried` varchar(20) DEFAULT NULL,
  `credit_limit_min_business` varchar(20) DEFAULT NULL,
  `credit_limit_min_salaried` varchar(20) DEFAULT NULL,
  `credit_limit_max_business` varchar(20) DEFAULT NULL,
  `credit_limit_max_salaried` varchar(20) DEFAULT NULL,
  `age_limit_min` varchar(20) DEFAULT NULL,
  `age_limit_max` varchar(20) DEFAULT NULL,
  `experience_min` varchar(20) DEFAULT NULL,
  `experience_max` varchar(20) DEFAULT NULL,
  `cc_issuer_id` int(10) DEFAULT NULL,
  `card_benifit_id` varchar(200) DEFAULT NULL,
  `interest_free_period_min` varchar(20) DEFAULT NULL,
  `interest_free_pefiod_max` varchar(20) DEFAULT NULL,
  `card_summary` text,
  `pros` text,
  `cons` text,
  `review` longtext,
  `annual_fee` varchar(10) DEFAULT NULL,
  `annual_fee_vat` varchar(20) DEFAULT NULL,
  `supplimentary` text,
  `billing_cycle_start` varchar(10) DEFAULT NULL,
  `billing_cycle_end` varchar(10) DEFAULT NULL,
  `eligibility` text,
  `purchase_interest_rate` varchar(20) DEFAULT NULL,
  `balance_transfer_rate` varchar(20) DEFAULT NULL,
  `cash_advance_interest_rate_yearly` varchar(20) DEFAULT NULL,
  `purchase_interest_rate_monthly` varchar(10) DEFAULT NULL,
  `balance_transfer_rate_monthly` varchar(10) DEFAULT NULL,
  `cash_advance_interest_rate` varchar(10) DEFAULT NULL,
  `cash_advance_limit` varchar(10) DEFAULT NULL,
  `featured` varchar(2) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `card_card_informations`
--

INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_category`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_min`, `experience_max`, `cc_issuer_id`, `card_benifit_id`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 1, 2, 1, 'VISA CLASSIC DUAL CARD', '13.jpg', NULL, '3,4', '20000', '15000', '500000', '35000', '200000', '1000000', '500000', '250000', '22', '59', '3', '5', 2, '1,3,4,6', '1', '20', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '1500', 'Vat', 'Testing', '1', '3', '<p>tesst</p>', '22', '24', '25', '2.5', '2.6', '2.4', '50', '0', '0', 1, NULL, '2016-03-22 03:45:49', '2016-03-22 14:45:49'),
(2, 2, 3, 1, 'gdgdsg', '2.png', NULL, '3,4', '10000', '240000', '200000', '255200', '400000', '254000', '50000', '70000', '22', '29', '1', '6', 2, '2,5,6', '1', '12', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '1500', 'Vat', 'first year', '1', '3', '<p>test</p>', '25', '5', '25', '2.5', '2.6', '2.4', '50', '0', '1', 1, NULL, '2016-03-22 03:50:44', '2016-03-29 08:10:11'),
(4, 2, 3, 1, 'gdgdsg', '14.jpg', NULL, '3,4', '10000', '240000', '200000', '255200', '400000', '254000', '50000', '70000', '22', '29', '1', '6', 2, '2,5,6', '1', '12', '<p>test</p>', '<p>test</p>', '<p>test</p>', '<p>test</p>', '1500', 'Vat', 'first year', '1', '3', '<p>test</p>', '25', '5', '25', '2.5', '2.6', '2.4', '50', '0', '1', 1, NULL, '2016-03-22 04:18:49', '2016-03-22 15:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_issuer`
--

CREATE TABLE IF NOT EXISTS `card_card_issuer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `card_issuer_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `card_card_issuer`
--

INSERT INTO `card_card_issuer` (`id`, `card_issuer_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Master Card', 1, 0, '2016-03-15 03:20:56', '2016-03-15 14:20:56'),
(2, 'Visa Card', 1, 0, '2016-03-15 03:21:03', '2016-03-15 14:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_type`
--

CREATE TABLE IF NOT EXISTS `card_card_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `card_type_name` varchar(200) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='local, International' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `card_card_type`
--

INSERT INTO `card_card_type` (`id`, `card_type_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(2, 'Classic', 1, 0, '2016-03-08 02:48:36', '2016-03-15 14:14:14'),
(3, 'Gold', 1, 0, '2016-03-15 03:22:10', '2016-03-15 14:22:10'),
(4, 'Platinum', 1, 0, '2016-03-15 03:22:23', '2016-03-15 14:22:23'),
(5, 'Signature', 1, 0, '2016-03-15 03:22:43', '2016-03-15 14:22:43'),
(6, 'Titanium', 1, 0, '2016-03-15 03:22:52', '2016-03-15 14:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_user`
--

CREATE TABLE IF NOT EXISTS `card_card_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `card_user` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `card_card_user`
--

INSERT INTO `card_card_user` (`id`, `card_user`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(3, 'Business Ownere', 1, 1, '2016-03-08 03:26:36', '2016-03-08 14:35:29'),
(4, 'General Consumer', 1, 0, '2016-03-08 03:35:23', '2016-03-08 14:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `card_credit_card_type`
--

CREATE TABLE IF NOT EXISTS `card_credit_card_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cc_card_type` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `card_credit_card_type`
--

INSERT INTO `card_credit_card_type` (`id`, `cc_card_type`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'International', 1, 0, '2016-03-15 03:20:30', '2016-03-15 14:20:30'),
(2, 'Local', 1, 1, '2016-03-15 03:20:41', '2016-03-15 14:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `card_fees_charges`
--

CREATE TABLE IF NOT EXISTS `card_fees_charges` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `card_id` int(10) DEFAULT NULL,
  `basic_card_annual_fee` varchar(10) DEFAULT NULL,
  `basic_card_annual_fee_plus` varchar(25) DEFAULT NULL,
  `supplementary_card_annual_fee` varchar(250) DEFAULT NULL,
  `purchase_fee` varchar(25) DEFAULT NULL,
  `balance_transfer_fee` varchar(10) DEFAULT NULL,
  `cash_advance_fee_own_atm` varchar(10) DEFAULT NULL,
  `cash_advance_fee_other_atm` varchar(10) DEFAULT NULL,
  `cash_advance_fee_other_atm_plus` varchar(100) DEFAULT NULL,
  `cash_advance_fee_international_usd` varchar(10) DEFAULT NULL,
  `cash_advance_fee_international_percentage` varchar(10) DEFAULT NULL,
  `cash_advance_fee_international_remarks` varchar(100) DEFAULT NULL,
  `late_payment_fee_bdt` varchar(10) DEFAULT NULL,
  `late_payment_fee_usd` varchar(10) DEFAULT NULL,
  `card_replacement_fee` varchar(10) DEFAULT NULL,
  `pin_replacement_fee` text,
  `over_limit_charge_bdt` varchar(10) DEFAULT NULL,
  `over_limit_charge_usd` varchar(10) DEFAULT NULL,
  `transaction_alert_service` varchar(10) DEFAULT NULL,
  `transaction_alert_service_plus` varchar(100) DEFAULT NULL,
  `credit_assurance_program_fee` varchar(10) DEFAULT NULL,
  `credit_assurance_program_fee_remarks` varchar(200) DEFAULT NULL,
  `monthly_e_statement_fee` varchar(10) DEFAULT NULL,
  `check_book_fee` varchar(10) DEFAULT NULL,
  `minimum_payment_bdt` varchar(10) DEFAULT NULL,
  `minimum_payment_usd` varchar(10) DEFAULT NULL,
  `minimum_payment_percentage` varchar(10) DEFAULT NULL,
  `minimum_payment_remarks` varchar(200) DEFAULT NULL,
  `cheque_return_fee` varchar(10) DEFAULT NULL,
  `duplicate_statement` varchar(25) DEFAULT NULL,
  `card_cheque_processing_fee` varchar(25) DEFAULT NULL,
  `card_cheque_issuing_fee` varchar(25) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `card_fees_charges`
--

INSERT INTO `card_fees_charges` (`id`, `card_id`, `basic_card_annual_fee`, `basic_card_annual_fee_plus`, `supplementary_card_annual_fee`, `purchase_fee`, `balance_transfer_fee`, `cash_advance_fee_own_atm`, `cash_advance_fee_other_atm`, `cash_advance_fee_other_atm_plus`, `cash_advance_fee_international_usd`, `cash_advance_fee_international_percentage`, `cash_advance_fee_international_remarks`, `late_payment_fee_bdt`, `late_payment_fee_usd`, `card_replacement_fee`, `pin_replacement_fee`, `over_limit_charge_bdt`, `over_limit_charge_usd`, `transaction_alert_service`, `transaction_alert_service_plus`, `credit_assurance_program_fee`, `credit_assurance_program_fee_remarks`, `monthly_e_statement_fee`, `check_book_fee`, `minimum_payment_bdt`, `minimum_payment_usd`, `minimum_payment_percentage`, `minimum_payment_remarks`, `cheque_return_fee`, `duplicate_statement`, `card_cheque_processing_fee`, `card_cheque_issuing_fee`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 1, '1300', 'Vat', 'First Card Free, Second Card 600 + VAT', 'N/A', '0', '2', '2', 'applicable transaction fee', '2.5', '3', 'whichever is higher', '400', '10', '50', '30', '400', '10', '10', 'Vat', '0.36', 'on outstanding amount', '50', '1000', '500', '10', '3', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-03-23 11:43:10', '2016-03-23 10:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `card_reward`
--

CREATE TABLE IF NOT EXISTS `card_reward` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reward_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `card_reward`
--

INSERT INTO `card_reward` (`id`, `reward_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Worldwide Acceptance', 1, NULL, '2016-03-15 03:23:39', '2016-03-15 14:23:39'),
(2, 'No Issuance Fee***', 1, NULL, '2016-03-15 03:23:54', '2016-03-15 14:23:54'),
(3, 'Worldwide Cash Withdrawel Facility', 1, NULL, '2016-03-15 03:24:09', '2016-03-15 14:24:09'),
(4, 'Zero Late Payment Fee', 1, NULL, '2016-03-15 03:24:18', '2016-03-15 14:24:18'),
(5, 'Discounts', 1, NULL, '2016-03-15 03:24:27', '2016-03-15 14:24:27'),
(6, 'Business Reward', 1, NULL, '2016-03-15 03:24:50', '2016-03-15 14:24:50'),
(7, 'Zero Cash Withdrawel Fee', 1, NULL, '2016-03-15 03:24:59', '2016-03-15 14:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `map_map_location`
--

CREATE TABLE IF NOT EXISTS `map_map_location` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `map_location_category_id` int(10) NOT NULL,
  `map_location_name` varchar(250) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `created_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `map_map_location_category`
--

CREATE TABLE IF NOT EXISTS `map_map_location_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `admin_role_id` int(10) NOT NULL,
  `created_by` int(10) NOT NULL,
  `password` varchar(36) NOT NULL,
  `actual_password` varchar(40) NOT NULL,
  `profile_picture` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`id`, `first_name`, `last_name`, `user_name`, `email_address`, `phone_no`, `admin_role_id`, `created_by`, `password`, `actual_password`, `profile_picture`, `status`, `modified_by`, `last_login`, `created`, `modified`) VALUES
(1, 'Tarek', 'Raihan', 'tarekraihan', 'tarekraihan@yahoo.com', '01911222952', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 1, 1, '2016-02-07 00:00:00', '0000-00-00 00:00:00', '2016-03-13 22:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user_role`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_user_role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_role` varchar(100) NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin_user_role`
--

INSERT INTO `tbl_admin_user_role` (`id`, `admin_role`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'admin', 1, NULL, '2016-02-07 00:00:00', '2016-02-07 14:45:09'),
(2, 'user', 1, NULL, '2016-03-13 03:27:10', '2016-03-13 14:27:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

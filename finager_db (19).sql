-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 06:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `auto_applicanteligibility_for_applying`
--

CREATE TABLE IF NOT EXISTS `auto_applicanteligibility_for_applying` (
`id` int(10) NOT NULL,
  `applicant` varchar(45) NOT NULL,
  `remarks` varchar(225) NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `auto_applicanteligibility_for_applying`
--

INSERT INTO `auto_applicanteligibility_for_applying` (`id`, `applicant`, `remarks`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Single Applicant', 'test', 1, NULL, '2016-07-24 05:28:10', '2016-07-24 15:28:10'),
(2, 'Joint Applicant', '', 1, NULL, '2016-07-24 05:28:25', '2016-07-24 15:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `auto_features_backed_by_tarek_03_08_2016`
--

CREATE TABLE IF NOT EXISTS `auto_features_backed_by_tarek_03_08_2016` (
`id` int(10) NOT NULL,
  `auto_feature` varchar(200) DEFAULT NULL,
  `remarks` varchar(220) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auto_features_backed_by_tarek_03_08_2016`
--

INSERT INTO `auto_features_backed_by_tarek_03_08_2016` (`id`, `auto_feature`, `remarks`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Lower Interest Rate', 'test', 1, 1, '2016-07-24 04:37:49', '2016-07-24 15:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `auto_i_am`
--

CREATE TABLE IF NOT EXISTS `auto_i_am` (
`id` int(10) NOT NULL,
  `i_am` varchar(45) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auto_i_am`
--

INSERT INTO `auto_i_am` (`id`, `i_am`, `remarks`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Salaried Person', 'test', 1, 1, '2016-07-24 05:36:13', '2016-07-24 15:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `auto_i_want`
--

CREATE TABLE IF NOT EXISTS `auto_i_want` (
`id` int(10) NOT NULL,
  `i_want` varchar(35) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auto_i_want`
--

INSERT INTO `auto_i_want` (`id`, `i_want`, `remarks`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'New Car', 'test', 1, 1, '2016-07-24 05:13:52', '2016-07-24 15:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `auto_loan_info`
--

CREATE TABLE IF NOT EXISTS `auto_loan_info` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `loan_type_id` int(10) DEFAULT NULL,
  `auto_loan_name` varchar(220) DEFAULT NULL,
  `loan_short_description` text,
  `min_loan_amount` varchar(15) DEFAULT NULL,
  `max_loan_amount` varchar(15) DEFAULT NULL,
  `interest_rate_min` varchar(10) DEFAULT NULL,
  `interest_rate_max` varchar(50) DEFAULT NULL,
  `interest_rate_average` varchar(50) DEFAULT NULL,
  `security_required` text,
  `fees_and_charges` longtext,
  `features` longtext,
  `eligibility_for_applying` longtext,
  `required_document` longtext,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auto_loan_info`
--

INSERT INTO `auto_loan_info` (`id`, `bank_id`, `loan_type_id`, `auto_loan_name`, `loan_short_description`, `min_loan_amount`, `max_loan_amount`, `interest_rate_min`, `interest_rate_max`, `interest_rate_average`, `security_required`, `fees_and_charges`, `features`, `eligibility_for_applying`, `required_document`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 8, 2, 'Auto Loan', '&lt;p&gt;Whether you want to purchase a brand new car or a reconditioned one, BRAC Bank Auto Loan is built for maximum speed and efficiency. Get your dream car on the road in no time.&lt;/p&gt;', '1000000', '4000000', '10', '12', '12', '&lt;ul&gt;	&lt;li&gt;Hypothecation of vehicle. The Vehicle Should Be Registered in Joint Names (Bank &amp;amp; Borrower) or as per BRTA Requirement.&lt;/li&gt;	&lt;li&gt;2 Personal Guarantees.&lt;/li&gt;&lt;/ul&gt;', '&lt;p&gt;Processing Fee&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;: NIL&lt;/p&gt;\r\n\r\n&lt;p&gt;Early Settlement Fee&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 2% within first 3 years, 1% after 3 years to till expiry&lt;/p&gt;\r\n\r\n&lt;p&gt;Partial Payment Fee&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 2% on partial payment amount within first 3 years, 1% partia&amp;nbsp;payment amount after 3 years to till expiry&lt;/p&gt;\r\n\r\n&lt;p&gt;Penalty Charge&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;: 2% per month on overdue amount&lt;/p&gt;\r\n\r\n&lt;p&gt;Loan Rescheduling Charges&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 1% of the outstanding loan amount or BDT 15,000/- whicheve&amp;nbsp;is higher&lt;/p&gt;\r\n\r\n&lt;p&gt;EMI Date Rescheduling Charges&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : BDT 2,000/-&lt;/p&gt;', '&lt;p&gt;Minimum Loan Amount&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 10 Lac&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Maximum Loan Amount&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 40 Lac&lt;/p&gt;\r\n\r\n&lt;p&gt;Minimum Term:&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :1 Year&lt;/p&gt;\r\n\r\n&lt;p&gt;Maximum Term:&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; :5 Year&lt;/p&gt;\r\n\r\n&lt;p&gt;Down payment (%)&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; : 50&lt;/p&gt;\r\n\r\n&lt;p&gt;Joint Applicant Allowed&lt;/p&gt;\r\n\r\n&lt;p&gt;Life Insurance Coverage&lt;/p&gt;\r\n\r\n&lt;p&gt;Flexible Payment Schedule&lt;/p&gt;\r\n\r\n&lt;p&gt;Automatic Realization of Monthly Installment&lt;/p&gt;\r\n\r\n&lt;p&gt;Lower Interest Rate&lt;/p&gt;\r\n\r\n&lt;p&gt;Lower Processing Fee&lt;/p&gt;', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Minimum Income:&lt;/p&gt;\r\n\r\n&lt;p&gt;BDT 25,000 (for salaried); BDT 35,000 (for others)&lt;/p&gt;\r\n\r\n&lt;p&gt;Minimum Experience:&lt;/p&gt;\r\n\r\n&lt;p&gt;Confirmed employment with total 1-year work experience&lt;/p&gt;\r\n\r\n&lt;p&gt;Age of Business: Min 3 years.&lt;/p&gt;\r\n\r\n&lt;p&gt;Age Requirement:&lt;/p&gt;\r\n\r\n&lt;p&gt;Minimum Age: 25 Years&lt;/p&gt;\r\n\r\n&lt;p&gt;Maximum age: 65 years at the time of loan maturity&lt;/p&gt;', '&lt;ul&gt;\r\n	&lt;li&gt;Latest one year&amp;#39;s personal bank statement&lt;/li&gt;\r\n	&lt;li&gt;Photocopy of national ID/Passport&lt;/li&gt;\r\n	&lt;li&gt;One copy passport size photograph of the applicant&lt;/li&gt;\r\n	&lt;li&gt;One copy passport size photograph of guarantor&lt;/li&gt;\r\n	&lt;li&gt;Price quotation of the vehicle&lt;/li&gt;\r\n	&lt;li&gt;Business card / visiting card of the application&lt;/li&gt;\r\n	&lt;li&gt;Latest Tax clearance certificate /return receipt of tax&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Additional documents required for salaried person&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Letter of introduction stating salary, issued by the employer&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Additional documents required for business person&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Copy of trade License&lt;/li&gt;\r\n	&lt;li&gt;Company&amp;#39;s bank statement for last one year&lt;/li&gt;\r\n	&lt;li&gt;Memorandum of Articles for Limited Liability Company&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Additional documents required for self-employed person&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Professional Certificate issued by authorized institution&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Additional documents required for landlord&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Valid documents of the property&lt;/li&gt;\r\n	&lt;li&gt;Rent receipt/deed&lt;/li&gt;\r\n&lt;/ul&gt;', 1, NULL, '2016-08-03 05:06:59', '2016-08-08 15:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `auto_loan_info_backed_by_03_08_2016`
--

CREATE TABLE IF NOT EXISTS `auto_loan_info_backed_by_03_08_2016` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `loan_type_id` int(10) DEFAULT NULL,
  `auto_loan_name` varchar(200) DEFAULT NULL,
  `min_loan_amount` varchar(25) DEFAULT NULL,
  `max_loan_amount` varchar(25) DEFAULT NULL,
  `min_income_salaried` varchar(25) DEFAULT NULL,
  `min_income_businessman` varchar(25) DEFAULT NULL,
  `min_income_professional` varchar(25) DEFAULT NULL,
  `min_income_landlord` varchar(25) DEFAULT NULL,
  `min_income_nrb` varchar(25) DEFAULT NULL,
  `interest_rate_min` varchar(25) DEFAULT NULL,
  `interest_rate_max` varchar(25) DEFAULT NULL,
  `interest_rate_average` varchar(25) DEFAULT NULL,
  `downpayment_new_car` varchar(25) DEFAULT NULL,
  `downpayment_old_car` varchar(25) DEFAULT NULL,
  `security_required` varchar(255) DEFAULT NULL,
  `repayment_type` varchar(100) DEFAULT NULL,
  `repayment_option` varchar(255) DEFAULT NULL,
  `processing_fee` varchar(50) DEFAULT NULL,
  `early_settlement_fee` varchar(50) DEFAULT NULL,
  `penalty_charge` varchar(50) DEFAULT NULL,
  `loan_rescheduliling_charge` varchar(50) DEFAULT NULL,
  `minimum_term` varchar(200) DEFAULT NULL,
  `maximum_term` varchar(200) DEFAULT NULL,
  `availability_of_early_settlement` int(1) DEFAULT NULL,
  `availablity_of_partial_settlement` int(1) DEFAULT NULL,
  `minimum_age` varchar(25) DEFAULT NULL,
  `required_document` longtext,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_loan_info_vs_i_am`
--

CREATE TABLE IF NOT EXISTS `auto_loan_info_vs_i_am` (
`id` int(10) NOT NULL,
  `auto_loan_info_id` int(10) NOT NULL,
  `i_am_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `auto_loan_info_vs_i_want`
--

CREATE TABLE IF NOT EXISTS `auto_loan_info_vs_i_want` (
`id` int(10) NOT NULL,
  `auto_loan_info_id` int(10) NOT NULL,
  `i_want_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `card_bank`
--

CREATE TABLE IF NOT EXISTS `card_bank` (
`id` int(10) NOT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `bank_logo` varchar(100) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `card_bank`
--

INSERT INTO `card_bank` (`id`, `bank_name`, `bank_logo`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(8, 'Brac Bank Limited', NULL, 1, 0, '2016-04-11 05:15:15', '0000-00-00 00:00:00'),
(9, 'Meghna Bank Limited', NULL, 1, 0, '2016-04-11 05:16:01', '0000-00-00 00:00:00'),
(10, 'Bank Asia Limited', NULL, 1, 0, '2016-04-11 05:16:11', '0000-00-00 00:00:00'),
(11, 'Eastern Bank Limited', NULL, 1, 0, '2016-04-11 05:16:22', '0000-00-00 00:00:00'),
(12, 'Bangladesh Commerce Bank Limited', NULL, 1, 0, '2016-04-11 05:18:41', '0000-00-00 00:00:00'),
(13, 'AB Bank Limited', NULL, 1, 0, '2016-04-11 05:18:53', '0000-00-00 00:00:00'),
(14, 'Dhaka Bank Limited', NULL, 1, 0, '2016-04-11 05:19:55', '0000-00-00 00:00:00'),
(15, 'Dutch Bangla Bank Limited', NULL, 1, 0, '2016-04-11 05:20:06', '0000-00-00 00:00:00'),
(16, 'IFIC Bank Limited', NULL, 1, 0, '2016-04-11 05:20:17', '0000-00-00 00:00:00'),
(17, 'Jamuna Bank Limited', NULL, 1, 0, '2016-04-11 05:20:24', '0000-00-00 00:00:00'),
(18, 'Mercantile Bank Limited', NULL, 1, 0, '2016-04-11 05:20:29', '0000-00-00 00:00:00'),
(19, 'Midland Bank Limited', NULL, 1, 0, '2016-04-11 05:20:36', '0000-00-00 00:00:00'),
(20, 'Modhumoti Bank Limited', NULL, 1, 0, '2016-04-11 05:20:47', '0000-00-00 00:00:00'),
(21, 'Mutual Trust Bank Limited', NULL, 1, 0, '2016-04-11 05:20:58', '0000-00-00 00:00:00'),
(22, 'National Bank Limited', NULL, 1, 0, '2016-04-12 05:49:06', '0000-00-00 00:00:00'),
(23, 'NCC Bank Limited', NULL, 1, 0, '2016-04-12 05:49:17', '0000-00-00 00:00:00'),
(24, 'NRB Bank Limited', NULL, 1, 0, '2016-04-12 05:49:23', '0000-00-00 00:00:00'),
(25, 'NRB Commercial Bank Limited', NULL, 1, 0, '2016-04-12 05:49:31', '0000-00-00 00:00:00'),
(26, 'NRB Global Bank Limited', NULL, 1, 0, '2016-04-12 05:49:40', '0000-00-00 00:00:00'),
(27, 'One Bank Limited', NULL, 1, 0, '2016-04-12 05:49:46', '0000-00-00 00:00:00'),
(28, 'Prime Bank Limited', NULL, 1, 0, '2016-04-12 05:49:51', '0000-00-00 00:00:00'),
(29, 'Pubali Bank Limited', NULL, 1, 0, '2016-04-12 05:49:58', '0000-00-00 00:00:00'),
(30, 'South Bangla Agriculture and Commerce Bank Limited', NULL, 1, 0, '2016-04-12 05:50:07', '0000-00-00 00:00:00'),
(31, 'Southeast Bank Limited', NULL, 1, 0, '2016-04-12 05:50:22', '0000-00-00 00:00:00'),
(32, 'Standard Bank Limited', NULL, 1, 0, '2016-04-12 05:50:26', '0000-00-00 00:00:00'),
(33, 'The City Bank Limited', NULL, 1, 0, '2016-04-12 05:50:33', '0000-00-00 00:00:00'),
(34, 'The Farmers Bank Limited', NULL, 1, 0, '2016-04-12 05:50:38', '0000-00-00 00:00:00'),
(35, 'The Premier Bank Limited', NULL, 1, 0, '2016-04-12 05:50:44', '0000-00-00 00:00:00'),
(36, 'Trust Bank Bangladesh Limited', NULL, 1, 0, '2016-04-12 05:50:54', '0000-00-00 00:00:00'),
(37, 'United Commercial Bank Limited', NULL, 1, 0, '2016-04-12 05:51:09', '0000-00-00 00:00:00'),
(38, 'Uttara Bank Limited', NULL, 1, 0, '2016-04-12 05:51:22', '0000-00-00 00:00:00'),
(39, 'Islami Bank Bangladesh Limited', NULL, 1, 0, '2016-04-12 05:51:33', '0000-00-00 00:00:00'),
(40, 'Al-Arafah Islami Bank Limited', NULL, 1, 0, '2016-04-12 05:51:39', '0000-00-00 00:00:00'),
(41, 'Export Import Bank of Bangladesh Limited', NULL, 1, 0, '2016-04-12 05:51:45', '0000-00-00 00:00:00'),
(42, 'Social Islami Bank Limited', NULL, 1, 0, '2016-04-12 05:51:52', '0000-00-00 00:00:00'),
(43, 'Shahjalal islami Bank Limited', NULL, 1, 0, '2016-04-12 05:52:00', '0000-00-00 00:00:00'),
(44, 'First Security Islami Bank Limited', NULL, 1, 0, '2016-04-12 05:52:07', '0000-00-00 00:00:00'),
(45, 'Union Bank Limited', NULL, 1, 0, '2016-04-12 05:52:13', '0000-00-00 00:00:00'),
(46, 'ICB Islamic Bank Limited', NULL, 1, 0, '2016-04-12 05:52:20', '0000-00-00 00:00:00'),
(47, 'Bank Al-Falah', NULL, 1, 0, '2016-04-12 05:52:28', '0000-00-00 00:00:00'),
(48, 'Citibank NA', NULL, 1, 0, '2016-04-12 05:52:35', '0000-00-00 00:00:00'),
(49, 'Commercial Bank of Ceylon', NULL, 1, 0, '2016-04-12 05:52:42', '0000-00-00 00:00:00'),
(50, 'Habib Bank Limited', NULL, 1, 0, '2016-04-12 05:52:48', '0000-00-00 00:00:00'),
(51, 'HSBC', NULL, 1, 0, '2016-04-12 05:52:56', '0000-00-00 00:00:00'),
(52, 'National Bank of Pakistan', NULL, 1, 0, '2016-04-12 05:53:02', '0000-00-00 00:00:00'),
(53, 'Standard Chartered Bank', NULL, 1, 0, '2016-04-12 05:53:08', '0000-00-00 00:00:00'),
(54, 'State Bank of India', NULL, 1, 0, '2016-04-12 05:53:13', '0000-00-00 00:00:00'),
(55, 'Woori Bank', NULL, 1, 0, '2016-04-12 05:53:20', '0000-00-00 00:00:00'),
(56, 'Sonali Bank Limited', NULL, 1, 0, '2016-04-12 05:53:36', '0000-00-00 00:00:00'),
(57, 'Janata Bank Limited', NULL, 1, 0, '2016-04-12 05:53:42', '0000-00-00 00:00:00'),
(58, 'Agrani Bank Limited', NULL, 1, 0, '2016-04-12 05:53:50', '0000-00-00 00:00:00'),
(59, 'Rupali Bank Limited', NULL, 1, 0, '2016-04-12 05:53:56', '0000-00-00 00:00:00'),
(60, 'BASIC Bank Limited', NULL, 1, 0, '2016-04-12 05:54:02', '0000-00-00 00:00:00'),
(61, 'Bangladesh Development Bank Limited', NULL, 1, 0, '2016-04-12 05:54:10', '0000-00-00 00:00:00'),
(62, 'Rajshahi Krishi Unnoyon Bank', NULL, 1, 0, '2016-04-12 05:54:21', '0000-00-00 00:00:00'),
(63, 'Bangladesh Krishi Bank Limited', NULL, 1, 1, '2016-04-12 05:54:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_informations`
--

CREATE TABLE IF NOT EXISTS `card_card_informations` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `cc_type_id` int(10) DEFAULT NULL,
  `card_type_id` int(10) DEFAULT NULL,
  `card_name` varchar(200) DEFAULT NULL,
  `card_image_name` varchar(200) DEFAULT NULL,
  `card_image_url` varchar(200) DEFAULT NULL,
  `card_user_id` varchar(10) DEFAULT NULL,
  `income_range_min_business` varchar(20) DEFAULT NULL,
  `income_range_min_salaried` varchar(50) DEFAULT NULL,
  `income_range_max_business` varchar(20) DEFAULT NULL,
  `income_range_max_salaried` varchar(20) DEFAULT NULL,
  `credit_limit_min_business` varchar(20) DEFAULT NULL,
  `credit_limit_min_salaried` varchar(20) DEFAULT NULL,
  `credit_limit_max_business` varchar(20) DEFAULT NULL,
  `credit_limit_max_salaried` varchar(20) DEFAULT NULL,
  `age_limit_min` varchar(20) DEFAULT NULL,
  `age_limit_max` varchar(20) DEFAULT NULL,
  `experience_salaried` varchar(20) DEFAULT NULL,
  `experience_business` varchar(20) DEFAULT NULL,
  `cc_issuer_id` int(10) DEFAULT NULL,
  `card_benifit_id` varchar(200) DEFAULT NULL,
  `benifit_details` mediumtext,
  `interest_free_period_min` varchar(20) DEFAULT NULL,
  `interest_free_pefiod_max` varchar(20) DEFAULT NULL,
  `card_summary` text,
  `pros` text,
  `cons` text,
  `review` longtext,
  `annual_fee` varchar(10) DEFAULT NULL,
  `annual_fee_vat` varchar(20) DEFAULT NULL,
  `supplimentary` text,
  `billing_cycle_start` varchar(100) DEFAULT NULL,
  `billing_cycle_end` varchar(100) DEFAULT NULL,
  `eligibility` text,
  `purchase_interest_rate` varchar(20) DEFAULT NULL,
  `balance_transfer_rate` varchar(20) DEFAULT NULL,
  `cash_advance_interest_rate_yearly` varchar(20) DEFAULT NULL,
  `purchase_interest_rate_monthly` varchar(10) DEFAULT NULL,
  `balance_transfer_rate_monthly` varchar(10) DEFAULT NULL,
  `balance_transfer_limit` varchar(5) DEFAULT NULL,
  `cash_advance_interest_rate` varchar(10) DEFAULT NULL,
  `cash_advance_limit` varchar(10) DEFAULT NULL,
  `featured` varchar(2) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `card_card_informations`
--

INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_type_id`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_salaried`, `experience_business`, `cc_issuer_id`, `card_benifit_id`, `benifit_details`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `balance_transfer_limit`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 8, 1, 6, 'Visa Classic Dual Card', '1.png', NULL, '3,4,5', '20000', '20000', '49999', '49999', '10000', '10000', '75000', '75000', '21', '60', '6', '1', 3, '1,3,4,5,6,9,10,12,13,17,18,22,23', '<ul>\n	<li>Waiver on Annual Fee if transact at least 18 times (including 10 POS transactions) in a physical year.</li>\n	<li>Discount is Available</li>\n	<li>Installment payment for bill &amp; purchase</li>\n	<li>Reward program is applicable</li>\n	<li>Worldwide cash advance facility</li>\n	<li>Convenient payment option</li>\n	<li>Credit assurance program</li>\n	<li>Multiple supplementary card</li>\n	<li>Auto debit payment service</li>\n	<li>Check book facility</li>\n	<li>Global emergency assistance service</li>\n</ul>\n\n<p>Free supplementary card</p>\n', '15', '45', '<p>Dual Currency Visa Classic Card of Brac Bank Ltd. is a valid both in Bangladesh &amp; outside the country. It has waiver on annual fee from the second year if 18 transactions (including 10 POS transaction) are done in a physical year.</p>', '<ul>	<li>Triple benefits insurance plan for the cardholders (See review for details)</li>	<li>Use of 100% limit through card cheque (See review for details)</li>	<li>Convenient payment option (See review for details)</li>	<li>You can set your own limit</li>	<li>Installment program is available</li>	<li>Cash withdraw 50% of the limit</li></ul>', '<ul>\r\n	<li>Monthly fee 10 taka+vat for sms service &amp; transaction alert</li>\r\n	<li>0.35 paisa for every 100/= taka will be deducted for insurance program</li>\r\n	<li>Out of 18&nbsp;&nbsp;&nbsp; transactions, there must be 10 POS transaction to get waiver on annual fee.</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:670px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Waiver on Annual Fee</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">Now payment of Annual fee for your Credit Card is totally your choice. BRAC Bank allows you to pay no Annual fee as long as you transact at least 18 times (including 10 POS transactions) in a physical year.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With BRAC Bank Credit Card now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. You can use your 100% limit through Card cheque with a minimum processing fee. You will get your first cheque book absolutely for free.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">A special loyalty program that allows you to earn some points every time whenever you spend your money through POS with your Credit Card in Bangladesh only. For every Tk. 50 spent through POS on your credit Card, you get the opportunity to earn 1 Reward point. The accumulated Reward Points can be redeemed against exciting gift items from our Reward Catalogue. The enrollment of this program is free.&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of BRAC Bank.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility is a triple benefits Insurance Plan for the BBL Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of BBL credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. For any kind of accidental death, gold card holder is covered up to BDT 2-lacs and Classic Cardholder up to BDT 1 lac &ndash; under Credit Shield. A very nominal charge of 0.35 paisa for every TK.100/- of your Credit Card outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BBL SMS Service is the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>For the first time in Bangladesh, BRAC Bank brings you an extensive Transaction Alert Service for its Cardholders. BRAC Bank Transaction Alert - a service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><img alt="http://bracbank.com/images/arrow3.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif" style="height:11px; width:8px" /><strong>E-Alerts</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>In our effort to serve you further, we have now introduced E-Alerts (email alerts) for your BRAC Bank Credit Card usage abroad and online foreign currency transactions. This will ensure safety of your card and help you be informed - all the time - all over the world! All you have you do is ensure that your valid e-mail address is registered with us. Call 16221 for questions or details.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Real Time Payment Update</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Now you can avail your limit within a short time after making payment. Through IVR &amp; ATM you can instantly refresh your limit upon making payment. As for cash payment, limit will be refreshed within 2 hours during weekdays and end of the day during weekends.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows BBL Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Immediate Cash Advance Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>You don&#39;t need to worry about carrying cash anywhere &ndash; not even on a foreign trip where there is no one to give you hard cash at times of your need. You can withdraw cash up to 50% of your Credit Limit from any of our branches or any ATMs with Visa/MasterCard Logo across the country and outside the country.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Worldwide Acceptance</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Our Credit Card is accepted at over 5,000 outlets across the country and over 24 million Visa/MasterCard outlets worldwide. Use your Credit Card for everyday purchases as well as high valued transactions with wide range of products and services including hotels, restaurants, airlines, travel agents, shopping malls, department stores, hospitals, diagnostic centers, jewelers, electronics, computer shops and many more! This number is increasing rapidly to cater your growing needs. So, no matter where you are in the world BBL Credit Card gives you the power to purchase whatever you desire for.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Global Emergency Assistance Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you travel abroad, please remember that you have the option of using the Global Emergency Assistance Service provided by the Visa/MasterCard for our cardholders. These can be availed for: 1. Reporting Lost/ Stolen Credit Cards 2. Requesting for emergency card replacement 3. Emergency Cash Advance and 4. Miscellaneous enquiries. The toll free telephone numbers for accessing these emergency assistance Help line are available in local telephone directories/yellow pages and other local listings in each country.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. As a primary cardholder you can also set spending limits for each of your supplementary cards. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Auto debit option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>If you have an account with any BRAC Bank branch, you have the option of making the payment of your monthly credit statement (either minimum amount due or total due amount) directly through your bank account.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Self-set limit</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank Credit Card allows you to set your own card limit. You can request for a limit lower than what you are eligible for. You can even preset the monthly spending limits on the supplementary card. Any transaction above that specific spending limit will be declined.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>BBL 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>We offer Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. BRAC Bank Call Center facility provides you one stop solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Alternative Payment channels</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank provides you different payment channels. Now you don&rsquo;t need to wait in queue to pay your credit card bill. You can easily pay your credit card bill through Cash Deposit Machine, ATM or through IVR (interactive voice recorder) and even through Internet Banking. For IVR, ATM &amp; Internet Banking you need to have an account with BRAC Bank.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Internet Banking</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>We understand the pressures on your time. For you to get information when you need it and where you need it, we offer you access to BRAC Bank Credit Card related information through the Internet at http://www.bracbank.com. You can also clear your Credit Card bills via Internet Banking from you BBL account. Please visit our branch or call our Phone Banking to learn about the enrollment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Soon you can also avail facilities like accessing account information - current and last statement - getting your payment status, viewing your monthly statement by e-mail, requesting a duplicate PIN, recording a change of address, ordering a draft, giving auto debit instructions, requesting a replacement card or an add-on card, redeeming points online from the Rewards catalogue and subscribing to statement by e-mail and mobile alert. The program will be available shortly and we will notify you soon.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1300', 'VAT', 'First Card Free, Second Card 600 + VAT', '1', '30', '<p>Any Bangladeshi National</p><p>For salaried person minimum monthly income after tax is BDT 25,000</p><p>For self-employed person minimum monthly income after tax is BDT 25,000</p><p><strong>Age:</strong></p><ul>	<li>Minimum 21 years for primary card</li>	<li>Minimum 18 years for supplementary card</li>	<li>Maximum 60 years for any card.</li></ul><p><strong>Document:</strong></p><ul>	<li>Duly filled Credit Card Application form</li>	<li>Salary Certificate (salaried) / Valid and Updated Trade License (self-employed)</li>	<li>Partnership deed (self-employed)</li>	<li>Memorandum of Association(self-employed)</li>	<li>Certificate of Incorporation (self-employed)</li>	<li>Photocopy of updated TIN Certificate</li>	<li>Valid Photo ID (National ID/Passport)</li>	<li>Photocopy of Office ID</li>	<li>2 passport sized photographs</li>	<li>Latest Six Months Bank statement for salaried applicant</li>	<li>Latest One Year Bank statement for self employed</li>	<li>Latest Three Months Bank statement for those who maintain salary account with a reputed bank</li>	<li>Latest two months&rsquo; bank statement or 2 salary reflection for Corporate Offer Pack for Salaried and 4 months for Non Salaried</li></ul>', '28', '28', '28', '2.33', '2.33', '50', '2.33', '50', '0', '0', 1, NULL, '2016-04-12 11:43:43', '2016-08-08 16:03:31'),
(2, 10, 1, 5, 'Mastercard Gold', '11.png', NULL, '4,5', '45000', '30000', '45000', '30000', '99000', '99000', '500000', '50000', '21', '70', '6', '1', 2, '1,9,12,17,18', NULL, '15', '45', '<p>Mastercard Gold of Bank Asia Ltd. is a local currency credit card which is valid only in Bangladesh. It has double credit shield program.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Local Currency Credit Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">MasterCard Gold is a local currency credit card; users can use this card anyone in Bangladesh where Bank Asia ATM service and POS service is available.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With Bank Asia Mastercard Gold now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. Check processing fee is 1.50% and check issue fee is BDT 100.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&ldquo;Reward&rdquo; means a product, gift, service, voucher or entitlement available to a cardholder under Rewards Program, as publish in the catalogue that is current at the date of redemption of points by a cardholder during the same Rewards Program.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Bank Asia Mastercard Gold offers Tk. 50 which is equivalent to 1 Treasure Point&rdquo; for every Retail purchase.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&ldquo;Treasure Point&rdquo; means a port accumulated by a cardholder towards participation in the Rewards Program through Credit Card use by that Cardholder. Treasure points calculation is determined by the Bank &amp; can be varied from time to time.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Following are the reward catalogue of Bank Asia Ltd. Mastercard Gold. Cardholders can redeem monetary value against their treasure points.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Reward Redemption Schedule</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="width:670px">\r\n						<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:664px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p><strong>Bank Asia Credit Cards Treasure Point</strong></p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p><strong>Value (TK)</strong></p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>2000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>5000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 1100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>7500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>10000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>12500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.3800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>15000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.4600.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>17500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.5500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>20000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.6100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>22500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.7500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>25000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.8000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>27500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.9000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>30000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.10000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>40000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.15000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>50000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.20000.00</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<div style="clear:both;">&nbsp;</div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Rewards Catalogue</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><strong>Easy tips to Earn More Treasure Points</strong></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:660px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td style="width:645px">\r\n									<p>Do not leave home without your Bank Asia Credit Card. Shop, Dine and entertain using your Bank Asia Credit Card every day. Enjoy the recognition and financial power while earning more points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card for all payments, For Example, Mobile Bill, Electricity Bill etc. Enjoy total flexibility while earning MORE points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card while re-fueling your car or buying groceries. Enjoy MORE points for frequent purchases.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:20px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div style="clear:both;">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of Bank Asia.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility of Bank Asia is a double benefits Insurance Plan for the Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. A very nominal premium of 0.33% of your Credit Card total outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia provides SMS Service in the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Transaction Alert service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows Bank Asia Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Bank Asia 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. offers Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. Bank Asia Call Center facility provides you one stops solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1000', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li><strong>Eligibility</strong></li>\r\n</ul>\r\n\r\n<p>Any Bangladeshi National</p>\r\n\r\n<p>For salaried person minimum monthly income after tax is BDT 30,000</p>\r\n\r\n<p>For self-employed person minimum monthly income after tax is BDT 45,000</p>\r\n\r\n<p><strong>Age:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum 21 years for primary card</li>\r\n	<li>Minimum 18 years for supplementary card</li>\r\n	<li>Maximum 70 years for any card.</li>\r\n</ul>\r\n\r\n<p><strong>Document:</strong></p>\r\n\r\n<p>List of Documents:</p>\r\n\r\n<p><strong>Salaried Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Salary Certificate</li>\r\n	<li>Last Six Months&rsquo; Salary Account Statement</li>\r\n	<li>TIN Certificate</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/ Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>\r\n\r\n<p><strong>Self-employed Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Valid Trade License (if Proprietor)/ Partnership Deed (if partnership)/ Memorandum of Articles with Incorporation Certificate (for Ltd. Co.)</li>\r\n	<li>Current six months Bank Statement (personal &amp; Company)</li>\r\n	<li>TIN Certificate (only personal TIN)</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>', '28', '28', '28', '2.33', '2.33', '40', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 04:20:22', '2016-05-16 14:58:08');
INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_type_id`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_salaried`, `experience_business`, `cc_issuer_id`, `card_benifit_id`, `benifit_details`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `balance_transfer_limit`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(3, 10, 1, 5, 'Mastercard Gold', '11.jpg', NULL, '4,5', '45000', '30000', '45000', '30000', '99000', '99000', '500000', '50000', '21', '70', '6', '1', 2, '1,9,12,17,18', NULL, '15', '45', '<p>Mastercard Gold of Bank Asia Ltd. is a local currency credit card which is valid only in Bangladesh. It has double credit shield program.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Local Currency Credit Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">MasterCard Gold is a local currency credit card; users can use this card anyone in Bangladesh where Bank Asia ATM service and POS service is available.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With Bank Asia Mastercard Gold now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. Check processing fee is 1.50% and check issue fee is BDT 100.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&ldquo;Reward&rdquo; means a product, gift, service, voucher or entitlement available to a cardholder under Rewards Program, as publish in the catalogue that is current at the date of redemption of points by a cardholder during the same Rewards Program.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Bank Asia Mastercard Gold offers Tk. 50 which is equivalent to 1 Treasure Point&rdquo; for every Retail purchase.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&ldquo;Treasure Point&rdquo; means a port accumulated by a cardholder towards participation in the Rewards Program through Credit Card use by that Cardholder. Treasure points calculation is determined by the Bank &amp; can be varied from time to time.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Following are the reward catalogue of Bank Asia Ltd. Mastercard Gold. Cardholders can redeem monetary value against their treasure points.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Reward Redemption Schedule</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="width:670px">\r\n						<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:664px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p><strong>Bank Asia Credit Cards Treasure Point</strong></p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p><strong>Value (TK)</strong></p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>2000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>5000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 1100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>7500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>10000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>12500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.3800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>15000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.4600.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>17500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.5500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>20000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.6100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>22500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.7500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>25000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.8000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>27500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.9000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>30000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.10000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>40000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.15000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>50000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.20000.00</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<div style="clear:both;">&nbsp;</div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Rewards Catalogue</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><strong>Easy tips to Earn More Treasure Points</strong></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:660px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td style="width:645px">\r\n									<p>Do not leave home without your Bank Asia Credit Card. Shop, Dine and entertain using your Bank Asia Credit Card every day. Enjoy the recognition and financial power while earning more points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card for all payments, For Example, Mobile Bill, Electricity Bill etc. Enjoy total flexibility while earning MORE points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card while re-fueling your car or buying groceries. Enjoy MORE points for frequent purchases.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:20px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div style="clear:both;">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of Bank Asia.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility of Bank Asia is a double benefits Insurance Plan for the Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. A very nominal premium of 0.33% of your Credit Card total outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia provides SMS Service in the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Transaction Alert service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows Bank Asia Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Bank Asia 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. offers Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. Bank Asia Call Center facility provides you one stops solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1000', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li><strong>Eligibility</strong></li>\r\n</ul>\r\n\r\n<p>Any Bangladeshi National</p>\r\n\r\n<p>For salaried person minimum monthly income after tax is BDT 30,000</p>\r\n\r\n<p>For self-employed person minimum monthly income after tax is BDT 45,000</p>\r\n\r\n<p><strong>Age:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum 21 years for primary card</li>\r\n	<li>Minimum 18 years for supplementary card</li>\r\n	<li>Maximum 70 years for any card.</li>\r\n</ul>\r\n\r\n<p><strong>Document:</strong></p>\r\n\r\n<p>List of Documents:</p>\r\n\r\n<p><strong>Salaried Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Salary Certificate</li>\r\n	<li>Last Six Months&rsquo; Salary Account Statement</li>\r\n	<li>TIN Certificate</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/ Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>\r\n\r\n<p><strong>Self-employed Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Valid Trade License (if Proprietor)/ Partnership Deed (if partnership)/ Memorandum of Articles with Incorporation Certificate (for Ltd. Co.)</li>\r\n	<li>Current six months Bank Statement (personal &amp; Company)</li>\r\n	<li>TIN Certificate (only personal TIN)</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>', '28', '28', '28', '2.33', '2.33', '50', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 04:20:26', '2016-05-16 14:58:13'),
(4, 19, 1, 5, 'Visa Gold Dual', '&lt;', NULL, '5,5,5,4,4,', '25000', '15000', '25000', '15000', '20000', '20000', '199000', '199000', '18', '60', '6', '1', 3, '23,23,23,23,23,23,23,23,23,23,22,22,22,22,22,22,22,22,22,22,20,20,20,20,20,20,20,20,20,20,18,18,18,18,18,18,18,18,18,18,17,17,17,17,17,17,17,17,17,17,13,13,13,13,13,13,13,13,13,13,12,12,12,12,12,12,12', '<p>All-purpose Credit Card:<br />\r\nThe MDB credit card can be used for all your requirements, be it shopping, dining out, holidaying, and fuelling up your vehicle, railway ticket reservations &ndash; just about any financial requirement, planned or on desire.</p>', '15', '45', '<p>Visa Gold Dual of Midland Bank Ltd. is a local currency credit card which is valid only in Bangladesh.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<p>All-purpose Credit Card:<br />\r\nThe MDB credit card can be used for all your requirements, be it shopping, dining out, holidaying, and fuelling up your vehicle, railway ticket reservations &ndash; just about any financial requirement, planned or on desire.</p>\r\n\r\n<p>Credit Convenience:<br />\r\nMDB credit card offers 45-days maximum interest FREE period. No matter what your previous month balance was. Every retail transaction is considered for interest FREE period of maximum 45-days and minimum 15-days.</p>\r\n\r\n<p>Zero Annual Fee:<br />\r\nMDB Dual cards come with a unique offer where you do not need to pay the annual fee if you make 15 transactions in a calendar year, and where at least one transaction per month is a must.</p>\r\n\r\n<p>Free supplementary card &ndash; Enhanced power to your family:<br />\r\nYou can now conveniently take care of the needs of your loved ones. Your MDB card now lets you apply for add-on cards for your spouse, parents, and children above the age of 18. The supplementary cardholder can also enjoy the benefits against his/her limit.</p>\r\n\r\n<p>Widely accepted at Merchant establishments &amp; ATMs worldwide:<br />\r\nEnjoy convenience and easy access to cash withdrawal at all ATMs displaying VISA logo worldwide, and at all merchant establishments including groceries, hotels, restaurants, airline &amp; travel agents, hospitals and diagnosis centers, jewelry shops, electronics &amp; computer shops, fashion &amp; Lifestyle stores and what not!</p>\r\n\r\n<p>Revolving Credit Facility:<br />\r\nYou can choose to pay minimum amount due as shown in the monthly statement and revolve the balance amount to next month&rsquo;s billing cycle.</p>\r\n\r\n<p>Free Card Cheque book:<br />\r\nYou can use the account payee card cheque against your MDB credit card for payment to any person or establishment within Bangladesh. Card cheque is especially useful to you where credit card acceptance facility is not available (e.g. &ndash; House rent, tuition fees etc.). The first cheque book is FREE and is bundled in your welcome pack.</p>\r\n\r\n<p>SMS Alert Service:<br />\r\nMDB card alerts enable you to receive information regarding your credit card status, as an SMS on your mobile phone. With SMS you can also find out your credit card&rsquo;s statement balance, minimum due amount, payment due date simply by using your mobile phone anytime. Whenever you use MDB credit card, system generated SMS will reach in your mobile phone, and you can be assured of knowing any transaction that happened in your card.</p>\r\n\r\n<p>Flexible Spending Limit:<br />\r\nAs a primary cardholder, you can give a supplementary card to your loved one; you can also set spending limits for each of your supplementary cards in a billing cycle.</p>\r\n\r\n<p>Earn while you spend:<br />\r\nWith us, money spent is money earned. For every Tk. 50 you spend, you earn 1 reward point. You can redeem these accumulated points for exciting offer our exclusive reward program.</p>\r\n\r\n<p>E-Statement:<br />\r\nNo postal delays. No lost statements. No late payments. Just the convenience of getting your monthly statement delivered directly to your email inbox. Why not go for e-statement and be a part of green initiative!</p>\r\n\r\n<p>Discount Offer:<br />\r\nAs a member of VISA, MDB cardholders will enjoy discount at selected outlets in the town time to time, and experience the pleasure of dining out and shopping with your VISA credit card.</p>\r\n\r\n<p>0% Interest on EasyPay Program:<br />\r\nWith MDB credit cards EasyPay program, you can make your dream purchases at our EasyPay partner outlets, and pay at your own pace with installments spread up to 24 months.</p>\r\n\r\n<p>Lost Card Liability:<br />\r\nIn case your credit card gets lost, report it immediately to our 24-hour card service Call Center. After you do this, you carry limited liability on any fraudulent transactions on your card.</p>\r\n\r\n<p>Ready Cash:<br />\r\nYou can withdraw cash up to 50% of your credit limit from any of our branches or ATMs across the country. So, forget carrying cash while if you have a MDB credit card in your pocket.</p>\r\n\r\n<p>Auto Debit-No worries of depositing payment timely:<br />\r\nIf you have an account with any Midland Bank branch, you have the option of making payment of your monthly credit card statement (either the minimum due or the total amount due) directly through your bank account.</p>\r\n\r\n<p>Balance Transfer:<br />\r\nIf you have credit card(s) from other banks, you have the option to transfer your current outstanding balance at a much lower interest rate to your MDB credit card. This saves you money and time, allowing you to conveniently manage all your expense from one card account. The balance transfer interest rate is 24% per annum.</p>\r\n\r\n<p>Guaranteed peace of mind:<br />\r\nYour sense of security is our priority. MDB card automatically gives you complete peace of mind with our MDB call center. Our Call Center is accessible in 24 hours a day, 7 days a week, from anywhere in the world, which is designed to provide you one stop solution for your card service&rsquo;s needs. For any enquiry, simply call at (+88) 09666410888, (+88) 01977776325.</p>', '1500', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bangladeshi</li>\r\n	<li>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 18 years to 60 years, age bar can be relaxed for secured cards</li>\r\n	<li>Minimum Gross Income&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Salaried Person- Tk. 15,000, Business person- Tk. 25,000</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Required Documents:</strong><br />\r\n<em>1. Common Documents:</em><br />\r\nCompleted application form, NID copy/ valid passport, e-TIN related document, color photograph, bank statement for last 6 months.</p>\r\n\r\n<p><em>2. Additional Documents:</em></p>\r\n\r\n<p>(a) <strong>For salaried executives:</strong><br />\r\nPay Slip/ Salary Certificate not more than one month old, business card, copy of employee ID(if available)</p>\r\n\r\n<p>(b) <strong>For Sole proprietorship: </strong><br />\r\nValid trade license, one undated cheque, bank statement of sole-proprietorship account, business card (if available)</p>\r\n\r\n<p>(c) <strong>For partnership:</strong><br />\r\nValid trade license, partnership deed, business account bank account, business card (if available), one undated cheque.</p>\r\n\r\n<p>(d) <strong>For limited company:</strong><br />\r\nCertificate of incorporation, memorandum of Association, business account bank statement, business card (if available)</p>\r\n\r\n<p>(e) <strong>For landlord:</strong><br />\r\nProperty of ownership documents, rental agreement paper</p>\r\n\r\n<p>(f) <strong>For Doctors/Engineers/Other professional:</strong><br />\r\nProcessional certificate, business card (if available)</p>\r\n\r\n<p>(g) <strong>For lien against deposit account:</strong><br />\r\nLetter of lien and set-off over deposit account, fund holding instruction, FDR receipt/RFCD advice, authorization of encashment of securities</p>\r\n\r\n<p>(h) <strong>Lien against ERQ (other bank): </strong><br />\r\nLetter of lien and set-off over fund from ERQ account, board resolution</p>\r\n\r\n<p>Please note that, contact point verification (CPV) and know your customer (KYC) are mandatory in all cases.</p>', '28', '28', '28', '2.33', '2.33', '55', '2.33', '50', '0', '0', 1, 1, '2016-04-18 04:43:56', '2016-07-17 14:44:18'),
(5, 24, 1, 4, 'NRB Bank Visa Platinum', '&lt;', NULL, '3,4,5', '70000', '50000', '70000', '50000', '100000', '100000', '500000', '500000', '21', '60', '6', '1', 3, '4,5,9,10,17,19,22,23', NULL, '20', '50', '<p>Visa Platinum Card of NRB Bank Ltd. is a Dual Currency credit card which is valid both in Bangladesh and abroad. It has triple benefit credit shield program.</p>', '<ul>\r\n	<li>Triple benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Use of 100% limit through card cheque (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>You can set your own limit</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka+vat for sms service &amp; transaction alert</li>\r\n	<li>0.35 paisa for every 100/= taka will be deducted for insurance program</li>\r\n	<li>Out of 18&nbsp;&nbsp;&nbsp; transactions, there must be 10 POS transaction to get waiver on annual fee.</li>\r\n</ul>', '<p><strong>FREE ACCESS AT BALAKA VIP LOUNGE</strong><br />\r\n&nbsp;NRB Bank Platinum Card give you and one companion free access to Balaka VIP Lounge @ Hazrat Shahjalal International Airport. Just show your NRB Bank Platinum Card and enjoy the comfort of Balaka Lounge and its services.<br />\r\n<strong>FREE MEET AND GREET SERVICE</strong><br />\r\nAs a valued NRB Bank Platinum Cardholder, you and one of your family member can enjoy the exclusive Passenger Handling Service during your departure from and arrival to Hazrat Shahjalal International Airport, Dhaka provided by Meet, Greet &amp; Assist Services (MG&amp;A). To avail, Just inform us by calling our 24 hour Call Centre @ 09666456000 24 hours before travelling.<br />\r\n<strong>INTEREST FREE PERIOD</strong><br />\r\nMaximum interest free period is 45 days and minimum is 15 days. Interest will not be charged if the outstanding balance is paid in full within due date. For partial payment and minimum payment, interest on retail transaction will be calculated from the date of posting.<br />\r\n<strong>BALANCE TRANSFER/TAKEOVER</strong><br />\r\nYou have the option to transfer your other bank credit card&rsquo;s current outstanding at a much lower interest rate of monthly 1.83%. We also offer zero processing charge for Balance Transfer/Takeover processing.<br />\r\n<strong>CREDIT ASSURANCE PROGRAM</strong><br />\r\n&raquo; Credit Assurance Program is a triple benefit insurance plan for the NRB Bank Cardholders. In the event of death or permanent total disability of the cardholder,<br />\r\n&raquo; The entire due against the credit card will be waived<br />\r\n&raquo; The Cardholder or his/her nominee will also receive equal amount to meet immediate family expenses.<br />\r\n&raquo; Additionally, the cardholder&rsquo;s nominee will receive BDT 10 Lac in case of accidental death or permanent disability under Credit Assurance Program.<br />\r\n&raquo; A very nominal premium of 35 paisa on outstanding amount or for every BDT 100 of your credit card outstanding balance will be applicable for this coverage.</p>', '3000', '15', 'First Card Free, Second Card 1500', '16', '15', '<p><strong>REQUIRED DOCUMENTS</strong><br />\r\n<u><em>For Salaried person</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP size photograph of the applicant &amp; nominee (for Credit Assurance Program) 1 copy each<br />\r\n&raquo; Last 6 month&#39;s Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Letter of introduction / Pay slip / e-pays slip<br />\r\n&raquo; Photocopy of Employee ID / LOI<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction letter of loan (if applicable)<br />\r\n<u><em>For Businessman</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP photograph of Applicant &amp; nominee (for Credit Assurance Program) 1 copy size each<br />\r\n&raquo; Last 12 months Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Valid Trade license<br />\r\n&raquo; Partnership Deed (for partnership), MOA &amp; A, (as applicable)<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction letter of loan (if applicable)<br />\r\n<u><em>For Self-employed professionals</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP photograph of Applicant &amp; nominee (for Credit Assurance Program) 1 copy size each<br />\r\n&raquo; Last 12 months Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Certificate of Professional<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction Letter of Loan (if applicable)</p>', '28', '28', '28', '2.33', '2.33', '45', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 07:25:03', '2016-05-16 14:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_issuer`
--

CREATE TABLE IF NOT EXISTS `card_card_issuer` (
`id` int(10) NOT NULL,
  `card_issuer_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `card_card_issuer`
--

INSERT INTO `card_card_issuer` (`id`, `card_issuer_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'American Express', 1, 1, '2016-03-15 03:20:56', '2016-04-12 13:46:03'),
(2, 'MasterCard', 1, 1, '2016-03-15 03:21:03', '2016-04-12 13:45:30'),
(3, 'Visa', 1, 1, '2016-04-12 05:56:18', '2016-04-12 13:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_type`
--

CREATE TABLE IF NOT EXISTS `card_card_type` (
`id` int(10) NOT NULL,
  `card_type_name` varchar(200) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='local, International' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `card_card_type`
--

INSERT INTO `card_card_type` (`id`, `card_type_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(2, 'Titanium', 1, 1, '2016-03-08 02:48:36', '2016-04-12 13:47:22'),
(3, 'Signature', 1, 1, '2016-03-15 03:22:10', '2016-04-12 13:47:09'),
(4, 'Platinum', 1, 0, '2016-03-15 03:22:23', '2016-03-15 14:22:23'),
(5, 'Gold', 1, 1, '2016-03-15 03:22:43', '2016-04-12 13:46:46'),
(6, 'Classic', 1, 1, '2016-03-15 03:22:52', '2016-04-12 13:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_user`
--

CREATE TABLE IF NOT EXISTS `card_card_user` (
`id` int(10) NOT NULL,
  `card_user` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `card_card_user`
--

INSERT INTO `card_card_user` (`id`, `card_user`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(3, 'Professional', 1, 1, '2016-03-08 03:26:36', '2016-04-12 13:48:08'),
(4, 'Business Person', 1, 1, '2016-03-08 03:35:23', '2016-04-12 13:33:20'),
(5, 'Salaried Person', 1, 1, '2016-04-12 09:34:01', '2016-04-12 13:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `card_credit_card_type`
--

CREATE TABLE IF NOT EXISTS `card_credit_card_type` (
`id` int(10) NOT NULL,
  `cc_card_type` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `card_credit_card_type`
--

INSERT INTO `card_credit_card_type` (`id`, `cc_card_type`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'International Card', 1, 1, '2016-03-15 03:20:30', '2016-04-12 13:34:47'),
(2, 'Dual Card', 1, 1, '2016-03-15 03:20:41', '2016-04-12 13:49:27'),
(3, 'Local Card', 1, 1, '2016-04-09 03:55:22', '2016-04-12 13:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `card_fees_charges`
--

CREATE TABLE IF NOT EXISTS `card_fees_charges` (
`id` int(10) NOT NULL,
  `card_id` int(10) DEFAULT NULL,
  `basic_card_annual_fee` varchar(255) DEFAULT NULL,
  `supplementary_card_annual_fee` varchar(255) DEFAULT NULL,
  `purchase_fee` varchar(255) DEFAULT NULL,
  `balance_transfer_fee` varchar(255) DEFAULT NULL,
  `cash_advance_fee_own_atm` varchar(250) DEFAULT NULL,
  `cash_advance_fee_other_atm` varchar(250) DEFAULT NULL,
  `cash_advance_fee_international` varchar(255) DEFAULT NULL,
  `late_payment_fee` varchar(255) DEFAULT NULL,
  `card_replacement_fee` varchar(255) DEFAULT NULL,
  `pin_replacement_fee` text,
  `over_limit_charge` varchar(255) DEFAULT NULL,
  `transaction_alert_service` varchar(250) DEFAULT NULL,
  `credit_assurance_program_fee` varchar(250) DEFAULT NULL,
  `monthly_e_statement_fee` varchar(250) DEFAULT NULL,
  `check_book_fee` varchar(250) DEFAULT NULL,
  `minimum_payment` varchar(255) DEFAULT NULL,
  `cheque_return_fee` varchar(250) DEFAULT NULL,
  `duplicate_statement` varchar(250) DEFAULT NULL,
  `card_cheque_processing_fee` varchar(250) DEFAULT NULL,
  `card_cheque_issuing_fee` varchar(250) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `card_fees_charges`
--

INSERT INTO `card_fees_charges` (`id`, `card_id`, `basic_card_annual_fee`, `supplementary_card_annual_fee`, `purchase_fee`, `balance_transfer_fee`, `cash_advance_fee_own_atm`, `cash_advance_fee_other_atm`, `cash_advance_fee_international`, `late_payment_fee`, `card_replacement_fee`, `pin_replacement_fee`, `over_limit_charge`, `transaction_alert_service`, `credit_assurance_program_fee`, `monthly_e_statement_fee`, `check_book_fee`, `minimum_payment`, `cheque_return_fee`, `duplicate_statement`, `card_cheque_processing_fee`, `card_cheque_issuing_fee`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 1, 'BDT 1300+VAT', 'First Card Free, Second Card 600 + VAT', 'N/A', '0%', '2 %', '2% + applicable transaction fee', 'USD 2.5 or 3% whichever is higher', 'BDT 400 or USD 10', 'BDT 500', 'BDT 350', 'BDT 400 or USD 10', 'BDT 10 +VA', '0.35% on outstanding amount', 'BDT 50', '1000', 'BDT 500 or USD 10 or 5% whichever is higher', '300', 'N/A', '1.5%', '100', 1, NULL, '2016-05-29 05:02:12', '2016-05-30 14:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `card_info_card_reward`
--

CREATE TABLE IF NOT EXISTS `card_info_card_reward` (
`id` int(10) NOT NULL,
  `card_info_id` int(10) NOT NULL,
  `card_reward_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `card_info_card_reward`
--

INSERT INTO `card_info_card_reward` (`id`, `card_info_id`, `card_reward_id`, `created`, `modified`) VALUES
(1, 1, 1, '2016-04-22 00:00:00', '2016-04-21 18:07:12'),
(2, 1, 3, '2016-04-22 00:00:00', '2016-04-21 18:07:12'),
(3, 1, 4, '2016-04-22 00:00:00', '2016-04-21 18:07:43'),
(4, 1, 5, '2016-04-22 00:00:00', '2016-04-21 18:07:43'),
(5, 1, 6, '2016-04-22 00:00:00', '2016-04-21 18:08:15'),
(6, 1, 9, '2016-04-22 00:00:00', '2016-04-21 18:08:15'),
(7, 1, 13, '2016-04-22 00:00:00', '2016-04-21 18:09:28'),
(8, 1, 12, '2016-04-22 00:00:00', '2016-04-21 18:08:38'),
(9, 1, 17, '2016-04-22 00:00:00', '2016-04-21 18:10:17'),
(10, 1, 18, '2016-04-22 00:00:00', '2016-04-21 18:10:17'),
(11, 1, 22, '2016-04-22 00:00:00', '2016-04-21 18:10:37'),
(12, 1, 23, '2016-04-22 00:00:00', '2016-04-21 18:14:47'),
(13, 2, 1, '2016-04-22 00:00:00', '2016-04-21 18:11:11'),
(14, 2, 9, '2016-04-22 00:00:00', '2016-04-21 18:11:59'),
(15, 2, 12, '2016-04-22 00:00:00', '2016-04-21 18:11:26'),
(16, 2, 17, '2016-04-22 00:00:00', '2016-04-21 18:12:04'),
(17, 2, 18, '2016-04-22 00:00:00', '2016-04-21 18:12:08'),
(18, 3, 1, '2016-04-22 00:00:00', '2016-04-21 18:13:41'),
(19, 3, 9, '2016-04-22 00:00:00', '2016-04-21 18:13:41'),
(20, 3, 12, '2016-04-22 00:00:00', '2016-04-21 18:13:41'),
(21, 3, 17, '2016-04-22 00:00:00', '2016-04-21 18:13:41'),
(22, 3, 18, '2016-04-22 00:00:00', '2016-04-21 18:13:41'),
(33, 5, 5, '2016-04-22 00:00:00', '2016-04-21 18:26:48'),
(34, 5, 4, '2016-04-22 00:00:00', '2016-04-21 18:26:48'),
(35, 5, 9, '2016-04-22 00:00:00', '2016-04-21 18:27:04'),
(36, 5, 10, '2016-04-22 00:00:00', '2016-04-21 18:27:04'),
(37, 5, 19, '2016-04-22 00:00:00', '2016-04-21 18:27:19'),
(38, 5, 17, '2016-04-22 00:00:00', '2016-04-21 18:27:19'),
(39, 5, 22, '2016-04-22 00:00:00', '2016-04-21 18:27:35'),
(40, 5, 23, '2016-04-22 00:00:00', '2016-04-21 18:27:35'),
(41, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(42, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(43, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(44, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(45, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(46, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(47, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(48, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(49, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(50, 4, 23, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(51, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(52, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(53, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(54, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(55, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(56, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(57, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(58, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(59, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(60, 4, 22, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(61, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(62, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(63, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(64, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(65, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(66, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(67, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(68, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(69, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(70, 4, 20, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(71, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(72, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(73, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(74, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(75, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(76, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(77, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(78, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(79, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(80, 4, 18, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(81, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(82, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(83, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(84, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(85, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(86, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(87, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(88, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(89, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(90, 4, 17, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(91, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(92, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(93, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(94, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(95, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(96, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(97, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(98, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(99, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(100, 4, 13, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(101, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:20'),
(102, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(103, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(104, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(105, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(106, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(107, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(108, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(109, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(110, 4, 12, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(111, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(112, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(113, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(114, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(115, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(116, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(117, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(118, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(119, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(120, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(121, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(122, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(123, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(124, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(125, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(126, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(127, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(128, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(129, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21'),
(130, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `card_info_card_user`
--

CREATE TABLE IF NOT EXISTS `card_info_card_user` (
`id` int(10) NOT NULL,
  `card_info_id` int(10) NOT NULL,
  `card_user_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `card_info_card_user`
--

INSERT INTO `card_info_card_user` (`id`, `card_info_id`, `card_user_id`, `created`, `modified`) VALUES
(1, 1, 3, '0000-00-00 00:00:00', '2016-04-21 04:51:34'),
(2, 1, 4, '0000-00-00 00:00:00', '2016-04-21 04:51:34'),
(3, 1, 5, '2016-04-21 08:00:00', '2016-04-21 04:52:35'),
(4, 2, 4, '2016-04-21 00:00:00', '2016-04-21 04:52:35'),
(5, 2, 5, '2016-04-21 00:00:00', '2016-04-21 04:53:01'),
(6, 3, 4, '0000-00-00 00:00:00', '2016-04-21 04:53:01'),
(7, 3, 5, '2016-04-21 00:00:00', '2016-04-21 04:53:38'),
(11, 5, 3, '2016-04-22 00:00:00', '2016-04-21 18:49:23'),
(12, 5, 4, '2016-04-22 00:00:00', '2016-04-21 18:49:23'),
(13, 5, 5, '2016-04-22 00:00:00', '2016-04-21 18:49:37'),
(14, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(15, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(16, 4, 5, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(17, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(18, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:19'),
(19, 4, 4, '2016-07-17 04:44:18', '2016-07-17 14:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `card_reward`
--

CREATE TABLE IF NOT EXISTS `card_reward` (
`id` int(10) NOT NULL,
  `reward_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `card_reward`
--

INSERT INTO `card_reward` (`id`, `reward_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Cheque Book Facility', 1, NULL, '2016-04-12 10:50:31', '2016-04-12 14:50:31'),
(2, 'Utility Bill Pay Service', 1, NULL, '2016-04-12 10:50:41', '2016-04-12 14:50:41'),
(3, 'Global Emergency Assistance Service', 1, NULL, '2016-04-12 10:50:55', '2016-04-12 14:50:55'),
(4, 'Auto Debit Payment Service', 1, NULL, '2016-04-12 10:50:59', '2016-04-12 14:50:59'),
(5, 'Free Supplementary Card', 1, NULL, '2016-04-12 10:51:05', '2016-04-12 14:51:05'),
(6, 'Self Set Limit', 1, NULL, '2016-04-12 10:51:12', '2016-04-12 14:51:12'),
(7, 'Travel Accident Insurance', 1, NULL, '2016-04-12 10:51:18', '2016-04-12 14:51:18'),
(8, 'Accidental Death Insurance Coverage', 1, NULL, '2016-04-12 10:51:28', '2016-04-12 14:51:28'),
(9, 'Credit Assurance Program', 1, NULL, '2016-04-12 10:51:34', '2016-04-12 14:51:34'),
(10, 'Multiple Supplementary Card', 1, NULL, '2016-04-12 10:51:40', '2016-04-12 14:51:40'),
(11, 'Zero Cash Advance Fee', 1, NULL, '2016-04-12 10:51:46', '2016-04-12 14:51:46'),
(12, 'Convenient Payment Option', 1, NULL, '2016-04-12 10:51:53', '2016-04-12 14:51:53'),
(13, 'Worldwide Cash Advance Facility', 1, NULL, '2016-04-12 10:51:58', '2016-04-12 14:51:58'),
(14, 'Travel Benefit', 1, NULL, '2016-04-12 10:52:04', '2016-04-12 14:52:04'),
(15, 'No Issuance Fee', 1, NULL, '2016-04-12 10:52:11', '2016-04-12 14:52:11'),
(16, 'Cashback/Rebate', 1, NULL, '2016-04-12 10:52:17', '2016-04-12 14:52:17'),
(17, 'Reward Program', 1, NULL, '2016-04-12 10:52:23', '2016-04-12 14:52:23'),
(18, 'Installment Payment for bill &amp; Purchase', 1, NULL, '2016-04-12 10:52:29', '2016-04-12 14:52:29'),
(19, 'Airport Lounge Facility &amp; Priority Pass', 1, NULL, '2016-04-12 10:52:35', '2016-04-12 14:52:35'),
(20, 'Fund Transfer Facility', 1, NULL, '2016-04-12 10:52:40', '2016-04-12 14:52:40'),
(21, 'Discounts', 1, NULL, '2016-04-12 10:52:47', '2016-04-18 19:54:46'),
(22, 'Low Interest Rate', 1, NULL, '2016-04-12 10:53:07', '2016-04-18 19:54:55'),
(23, 'Waiver on Annual Fee', 1, NULL, '2016-04-12 11:24:13', '2016-04-18 19:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_applicant_type`
--

CREATE TABLE IF NOT EXISTS `home_loan_applicant_type` (
`id` int(10) NOT NULL,
  `home_loan_applicant_type` varchar(100) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_loan_applicant_type`
--

INSERT INTO `home_loan_applicant_type` (`id`, `home_loan_applicant_type`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(2, 'Single Applicant', 1, 1, '2016-05-05 11:28:00', '2016-05-05 21:33:58'),
(3, 'Joint Applicant', 1, NULL, '2016-05-08 09:34:35', '2016-05-08 07:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_applicant_type_home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_applicant_type_home_loan_info` (
`id` int(10) NOT NULL,
  `home_loan_applicant_type_id` int(10) DEFAULT NULL,
  `home_loan_info_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `home_loan_applicant_type_home_loan_info`
--

INSERT INTO `home_loan_applicant_type_home_loan_info` (`id`, `home_loan_applicant_type_id`, `home_loan_info_id`) VALUES
(1, 2, 4),
(2, 2, 1),
(3, 3, 1),
(4, 2, 2),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_features`
--

CREATE TABLE IF NOT EXISTS `home_loan_features` (
`id` int(10) NOT NULL,
  `home_loan_feature` varchar(200) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `home_loan_features`
--

INSERT INTO `home_loan_features` (`id`, `home_loan_feature`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Lower Interest Rate', 1, 1, '2016-05-05 10:12:02', '2016-05-05 21:14:33'),
(2, 'Availability of Grace Period', 1, NULL, '2016-05-08 09:35:11', '2016-05-08 07:35:11'),
(3, 'Availability of Early Settlement', 1, NULL, '2016-05-08 09:35:25', '2016-05-08 07:35:25'),
(4, 'Availability of Partial Payment', 1, NULL, '2016-05-08 09:35:38', '2016-05-08 07:35:38'),
(5, 'Lower Processing Fee', 1, NULL, '2016-05-08 09:35:49', '2016-05-08 07:35:49'),
(6, 'Life Insurance Coverage', 1, NULL, '2016-05-08 09:36:02', '2016-05-08 07:36:02'),
(7, 'Flexible Payment Schedule', 1, NULL, '2016-05-08 09:36:13', '2016-05-08 07:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_feature_home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_feature_home_loan_info` (
`id` int(10) NOT NULL,
  `home_loan_feature_id` int(10) DEFAULT NULL,
  `home_loan_info_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `home_loan_feature_home_loan_info`
--

INSERT INTO `home_loan_feature_home_loan_info` (`id`, `home_loan_feature_id`, `home_loan_info_id`) VALUES
(1, 2, 2),
(2, 3, 2),
(3, 1, 3),
(4, 5, 3),
(5, 6, 3),
(6, 7, 3),
(7, 2, 4),
(8, 5, 4),
(9, 6, 4),
(10, 1, 1),
(11, 2, 1),
(12, 3, 1),
(13, 1, 2),
(14, 2, 2),
(15, 3, 2),
(16, 4, 2),
(17, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_info` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `loan_type_id` int(10) DEFAULT NULL,
  `home_loan_name` varchar(220) DEFAULT NULL,
  `loan_short_description` text,
  `min_loan_amount` varchar(15) DEFAULT NULL,
  `max_loan_amount` varchar(15) DEFAULT NULL,
  `interest_rate_min` varchar(10) DEFAULT NULL,
  `interest_rate_max` varchar(50) DEFAULT NULL,
  `interest_rate_average` varchar(50) DEFAULT NULL,
  `downpayment_flat` varchar(10) DEFAULT NULL,
  `downpayment_home_construction` varchar(10) DEFAULT NULL,
  `downpayment_housing_plot` varchar(10) DEFAULT NULL,
  `downpayment_extension_finish_work` varchar(10) DEFAULT NULL,
  `downpayment_home_loan_take_over` varchar(10) DEFAULT NULL,
  `security_required` text,
  `fees_and_charges` longtext,
  `features` longtext,
  `eligibility_for_applying` longtext,
  `required_document` longtext,
  `review` longtext,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `home_loan_info`
--

INSERT INTO `home_loan_info` (`id`, `bank_id`, `loan_type_id`, `home_loan_name`, `loan_short_description`, `min_loan_amount`, `max_loan_amount`, `interest_rate_min`, `interest_rate_max`, `interest_rate_average`, `downpayment_flat`, `downpayment_home_construction`, `downpayment_housing_plot`, `downpayment_extension_finish_work`, `downpayment_home_loan_take_over`, `security_required`, `fees_and_charges`, `features`, `eligibility_for_applying`, `required_document`, `review`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(2, 8, 1, 'Home Loan', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n</ul>', '1000000', '10000000', '12', '14', '13', '30', '30', '30', '35', '35', 'Mortgage the Property 3rd Party Guarantee ', '<table border="1" cellpadding="0" cellspacing="0">	<tbody>		<tr>			<td style="width:319px">			<p>Processing Fee</p>			</td>			<td style="width:319px">			<p>2%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Early Settlement Fee</p>			</td>			<td style="width:319px">			<p>1%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Partial Payment Fee</p>			</td>			<td style="width:319px">			<p>1%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Penalty Charge</p>			</td>			<td style="width:319px">			<p>2% on Overdue Amount</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Quotation Change Fee</p>			</td>			<td style="width:319px">			<p>BDT 500 Per Quotation</p>			</td>		</tr>	</tbody></table><p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p><p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p><p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p><p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p><p>&nbsp;</p><p><strong>Features:</strong></p><p>&nbsp;</p><p>Minimum Loan Amount:&nbsp; 10 Lac</p><p>Maximum Loan Amount:&nbsp; 120 Lac</p><p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p><p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p><p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p><p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p><p>Try Party Agreement Allowed up to: 3-24 Month</p><p>Lower Interest Rate</p><p>Availability of Grace Period</p><p>Lower Processing Fee</p><p>Life Insurance Coverage</p><p>Flexible Payment Schedule</p><p>Joint Applicant Allowed</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>\r\n\r\n<p>Try Party Agreement Allowed up to: 3-24 Month</p>\r\n\r\n<p>Lower Interest Rate</p>\r\n\r\n<p>Availability of Grace Period</p>\r\n\r\n<p>Lower Processing Fee</p>\r\n\r\n<p>Life Insurance Coverage</p>\r\n\r\n<p>Flexible Payment Schedule</p>\r\n\r\n<p>Joint Applicant Allowed</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>', '<p>test</p>\r\n', 1, NULL, '2016-08-09 05:16:32', '2016-08-09 15:31:30'),
(3, 8, 1, 'home loan', '<ul>\r\n	<li>Try Party Agreement</li>\r\n</ul>', '1000000', '4000000', '12', '14', '13', '30', '30', '30', '35', '35', '<ul>\r\n	<li>Try Party Agreement</li>\r\n</ul>', '<p>Processing Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2%</p>\r\n\r\n<p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p>\r\n\r\n<p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>', '<p>sddga</p>\r\n', 1, NULL, '2016-08-09 05:36:52', '2016-08-09 15:36:52'),
(4, 8, 1, 'home loan', '<p>sffaef</p>', '1000000', '4000000', '14', '14', '13', '30', '30', '30', '35', '35', '<p>sdfggsdaag</p>', '<p>Processing Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2%</p>\r\n\r\n<p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p>\r\n\r\n<p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p>\r\n\r\n<p>&nbsp;</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>\r\n\r\n<p>Try Party Agreement Allowed up to: 3-24 Month</p>\r\n\r\n<p>Lower Interest Rate</p>\r\n\r\n<p>Availability of Grace Period</p>\r\n\r\n<p>Lower Processing Fee</p>\r\n\r\n<p>Life Insurance Coverage</p>\r\n\r\n<p>Flexible Payment Schedule</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>\r\n\r\n<p>&nbsp;</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '<p>gdsgaf</p>\r\n', 1, NULL, '2016-08-09 05:46:34', '2016-08-09 15:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_info_backed_by_tarek_03_08_2016`
--

CREATE TABLE IF NOT EXISTS `home_loan_info_backed_by_tarek_03_08_2016` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `loan_type_id` int(10) DEFAULT NULL,
  `home_loan_name` varchar(220) DEFAULT NULL,
  `min_loan_amount` varchar(15) DEFAULT NULL,
  `max_loan_amount` varchar(15) DEFAULT NULL,
  `min_income_salaried` varchar(15) DEFAULT NULL,
  `min_income_professional` varchar(15) DEFAULT NULL,
  `min_income_businessmen` varchar(15) DEFAULT NULL,
  `min_income_landlord` varchar(15) DEFAULT NULL,
  `interest_rate_min` varchar(10) DEFAULT NULL,
  `interest_rate_max` varchar(50) DEFAULT NULL,
  `interest_rate_average` varchar(50) DEFAULT NULL,
  `downpayment_flat` varchar(10) DEFAULT NULL,
  `downpayment_home_construction` varchar(10) DEFAULT NULL,
  `downpayment_housing_plot` varchar(10) DEFAULT NULL,
  `downpayment_extension_finish_work` varchar(10) DEFAULT NULL,
  `downpayment_home_loan_take_over` varchar(10) DEFAULT NULL,
  `security_required` varchar(255) DEFAULT NULL,
  `repayment_type` varchar(200) DEFAULT NULL,
  `repayment_option` varchar(255) DEFAULT NULL,
  `processing_fee` varchar(10) DEFAULT NULL,
  `early_settlement_fee` varchar(10) DEFAULT NULL,
  `partial_payment_fee` varchar(10) DEFAULT NULL,
  `penalty_charge` varchar(10) DEFAULT NULL,
  `quotation_charge_fee` varchar(220) DEFAULT NULL,
  `minimum_term` varchar(15) DEFAULT NULL,
  `maximum_term` varchar(15) DEFAULT NULL,
  `grace_period` varchar(15) DEFAULT NULL,
  `availability_of_early_settlement` varchar(1) DEFAULT NULL,
  `availability_of_partial_payment` varchar(1) DEFAULT NULL,
  `try_party_agreement_up_to` varchar(25) DEFAULT NULL,
  `min_experience_salaried` varchar(10) DEFAULT NULL,
  `min_experience_professional` varchar(10) DEFAULT NULL,
  `min_experience_businessmen` varchar(10) DEFAULT NULL,
  `min_age` varchar(10) DEFAULT NULL,
  `max_age` varchar(10) DEFAULT NULL,
  `required_document` longtext,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `home_loan_info_backed_by_tarek_03_08_2016`
--

INSERT INTO `home_loan_info_backed_by_tarek_03_08_2016` (`id`, `bank_id`, `loan_type_id`, `home_loan_name`, `min_loan_amount`, `max_loan_amount`, `min_income_salaried`, `min_income_professional`, `min_income_businessmen`, `min_income_landlord`, `interest_rate_min`, `interest_rate_max`, `interest_rate_average`, `downpayment_flat`, `downpayment_home_construction`, `downpayment_housing_plot`, `downpayment_extension_finish_work`, `downpayment_home_loan_take_over`, `security_required`, `repayment_type`, `repayment_option`, `processing_fee`, `early_settlement_fee`, `partial_payment_fee`, `penalty_charge`, `quotation_charge_fee`, `minimum_term`, `maximum_term`, `grace_period`, `availability_of_early_settlement`, `availability_of_partial_payment`, `try_party_agreement_up_to`, `min_experience_salaried`, `min_experience_professional`, `min_experience_businessmen`, `min_age`, `max_age`, `required_document`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 9, 2, 'Abash Home Loan', '500000', '30000000', '250000', '30000', '50000', '50000', '14', '16', '15', '14', '10', '10', '10', '10', 'Registered mortgage of the concerned property.Registered irrevocable power of attorney (RIGPA).One personal guarantee.', 'Monthly', 'Equal installment', '1', '1', '15', '1', '50000', 'hy', 'kkghk', '6 month', '1', '1', 'yes', '1 years', '2 years', '1 years', '21', '59', '&lt;p&gt;&lt;strong&gt;Required Documents&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Recent passport size color photographs of applicant (s) and guarantor (s).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Copy of latest utility bill (gas/water/electricity/municipal tax).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Business card/ office ID of applicant (s) and guarantor (s) if any.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Latest tax certificate/ E-TIN.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Personal net worth statements of applicant (s) and guarantor (s).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Bank statement of last 12 months for businessmen and 6 months for others.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Rent or lease agreement of house/ property (if applicable).&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Additional documents required for Salaried Person/ Self Employed&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Salary Certificate/ Letter of Introduction.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Offer letter/Release letter from previous employer to prove service experience.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Professional certificate issued by concerned institution.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Additional documents required for Businessmen&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Copy of trade license.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Memorandum of Association and Articles of Association of the company.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Certificate of Incorporation.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Latest form xii.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Partnership deed.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Additional documents required for Landlord/Landlady&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Title deed of premises / property.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Valid rental deed with tenants.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Utility Bill copy.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Ground rent payment and municipal tax payment receipt.&lt;/p&gt;\r\n\r\n&lt;p&gt;* Condition Apply&lt;/p&gt;\r\n\r\n&lt;p&gt;Prime Bank may request for any other relevant documents, if necessary&lt;/p&gt;', 1, NULL, '2016-07-27 04:23:25', '2016-07-27 15:34:37'),
(2, 51, 1, 'HOME LOAN', '500000', '5000000', '25000', '300000', '300000', '30000', '23', '25', '24', '30', '25', '25', '25', '25', 'yes', 'Monthly', 'monthly/ querterly', '2', '1', '1', '1', '1000 bdt', '23', '25', '2', '1', '1', 'yes', '2 years', '3 years', '3 years', '23', '59', '&lt;ul&gt;\r\n	&lt;li&gt;Loan amount of BDT 750,000 - BDT 10,000,000&lt;/li&gt;\r\n	&lt;li&gt;Maximum loan amount of 70% of the property valuation, inclusive of registration cost&lt;/li&gt;\r\n	&lt;li&gt;Financing for the registration cost&lt;/li&gt;\r\n	&lt;li&gt;Clubbing of income amongst spouse, father and son/daughter, mother and son/daughter is possible&lt;/li&gt;\r\n	&lt;li&gt;Competitive interest rates on a monthly reducing balance&lt;/li&gt;\r\n	&lt;li&gt;Loan tenure of 5 - 25 years (prior to borrowers age reaching 60 years)&lt;/li&gt;\r\n	&lt;li&gt;The age of the property must not exceed 20 years of age&lt;/li&gt;\r\n	&lt;li&gt;Apartments under construction is also applicable for Home Loan facility&lt;/li&gt;\r\n	&lt;li&gt;Partial or early settlement facilities&lt;/li&gt;\r\n	&lt;li&gt;No personal guarantee or cash security&lt;/li&gt;\r\n&lt;/ul&gt;', 1, NULL, '2016-07-31 04:28:29', '2016-07-31 14:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_looking_for`
--

CREATE TABLE IF NOT EXISTS `home_loan_looking_for` (
`id` int(10) NOT NULL,
  `home_loan_looking_for` varchar(220) NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `home_loan_looking_for`
--

INSERT INTO `home_loan_looking_for` (`id`, `home_loan_looking_for`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Purchase Apartment/Flat', 1, 1, '2016-05-05 11:08:34', '2016-05-08 07:38:17'),
(2, 'Home Construction', 1, 0, '2016-05-08 09:38:42', '2016-05-08 07:38:42'),
(3, 'Housing Plot', 1, 0, '2016-05-08 09:38:53', '2016-05-08 07:38:53'),
(4, 'Renovation/Extension/Finishing Work', 1, 0, '2016-05-08 09:39:02', '2016-05-08 07:39:02'),
(5, 'Home Loan Takeover', 1, 0, '2016-05-08 09:39:11', '2016-05-08 07:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_looking_for_home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_looking_for_home_loan_info` (
`id` int(10) NOT NULL,
  `home_loan_looking_for_id` int(10) DEFAULT NULL,
  `home_loan_info_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `home_loan_looking_for_home_loan_info`
--

INSERT INTO `home_loan_looking_for_home_loan_info` (`id`, `home_loan_looking_for_id`, `home_loan_info_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 1, 3),
(4, 4, 3),
(5, 2, 4),
(6, 3, 4),
(7, 1, 1),
(8, 2, 1),
(9, 3, 1),
(10, 4, 1),
(11, 1, 2),
(12, 3, 2),
(13, 4, 2),
(14, 1, 1),
(15, 2, 1),
(16, 3, 1),
(17, 4, 1),
(18, 1, 2),
(19, 2, 2),
(20, 3, 2),
(21, 5, 2),
(22, 1, 3),
(23, 2, 3),
(24, 3, 3),
(25, 5, 3),
(26, 1, 4),
(27, 2, 4),
(28, 3, 4),
(29, 4, 4),
(30, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_user`
--

CREATE TABLE IF NOT EXISTS `home_loan_user` (
`id` int(10) NOT NULL,
  `home_loan_user` varchar(100) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `home_loan_user`
--

INSERT INTO `home_loan_user` (`id`, `home_loan_user`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Salaried Person', 1, NULL, '2016-05-05 11:25:42', '2016-05-05 21:25:42'),
(2, 'Businessman', 1, NULL, '2016-05-08 09:39:32', '2016-05-08 07:39:32'),
(3, 'Professional', 1, NULL, '2016-05-08 09:39:50', '2016-05-08 07:39:50'),
(4, 'Landlord', 1, 1, '2016-05-08 09:40:00', '2016-05-08 07:40:09'),
(5, 'NRB', 1, 1, '2016-05-08 09:40:32', '2016-05-08 16:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_user_home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_user_home_loan_info` (
`id` int(10) NOT NULL,
  `home_loan_user_id` int(10) DEFAULT NULL,
  `home_loan_info_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `home_loan_user_home_loan_info`
--

INSERT INTO `home_loan_user_home_loan_info` (`id`, `home_loan_user_id`, `home_loan_info_id`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 1, 3),
(5, 2, 3),
(6, 4, 3),
(7, 1, 4),
(8, 4, 4),
(9, 1, 1),
(10, 2, 1),
(11, 3, 1),
(12, 1, 2),
(13, 3, 2),
(14, 4, 2),
(15, 1, 1),
(16, 2, 1),
(17, 3, 1),
(18, 1, 2),
(19, 3, 2),
(20, 4, 2),
(21, 1, 3),
(22, 2, 3),
(23, 3, 3),
(24, 5, 3),
(25, 2, 4),
(26, 3, 4),
(27, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE IF NOT EXISTS `loan_type` (
`id` int(10) NOT NULL,
  `loan_type` varchar(100) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loan_type`
--

INSERT INTO `loan_type` (`id`, `loan_type`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Home Loan', 1, NULL, '2016-05-05 09:33:36', '2016-05-05 19:33:36'),
(2, 'Auto Loan', 1, NULL, '2016-07-25 04:46:23', '2016-07-25 14:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `map_map_location`
--

CREATE TABLE IF NOT EXISTS `map_map_location` (
`id` int(10) NOT NULL,
  `map_location_category_id` int(10) NOT NULL,
  `map_location_name` varchar(250) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `created_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `map_map_location_category`
--

CREATE TABLE IF NOT EXISTS `map_map_location_category` (
`id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_user` (
`id` int(10) NOT NULL,
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
`id` int(10) NOT NULL,
  `admin_role` varchar(100) NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin_user_role`
--

INSERT INTO `tbl_admin_user_role` (`id`, `admin_role`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'admin', 1, NULL, '2016-02-07 00:00:00', '2016-02-07 14:45:09'),
(2, 'user', 1, NULL, '2016-03-13 03:27:10', '2016-03-13 14:27:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_applicanteligibility_for_applying`
--
ALTER TABLE `auto_applicanteligibility_for_applying`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_features_backed_by_tarek_03_08_2016`
--
ALTER TABLE `auto_features_backed_by_tarek_03_08_2016`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_i_am`
--
ALTER TABLE `auto_i_am`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_i_want`
--
ALTER TABLE `auto_i_want`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_loan_info`
--
ALTER TABLE `auto_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_loan_info_backed_by_03_08_2016`
--
ALTER TABLE `auto_loan_info_backed_by_03_08_2016`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_loan_info_vs_i_am`
--
ALTER TABLE `auto_loan_info_vs_i_am`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_loan_info_vs_i_want`
--
ALTER TABLE `auto_loan_info_vs_i_want`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_bank`
--
ALTER TABLE `card_bank`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_card_informations`
--
ALTER TABLE `card_card_informations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_card_issuer`
--
ALTER TABLE `card_card_issuer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_card_type`
--
ALTER TABLE `card_card_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_card_user`
--
ALTER TABLE `card_card_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_credit_card_type`
--
ALTER TABLE `card_credit_card_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_info_card_reward`
--
ALTER TABLE `card_info_card_reward`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_info_card_user`
--
ALTER TABLE `card_info_card_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_reward`
--
ALTER TABLE `card_reward`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_applicant_type`
--
ALTER TABLE `home_loan_applicant_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_applicant_type_home_loan_info`
--
ALTER TABLE `home_loan_applicant_type_home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_features`
--
ALTER TABLE `home_loan_features`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_feature_home_loan_info`
--
ALTER TABLE `home_loan_feature_home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_info`
--
ALTER TABLE `home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_info_backed_by_tarek_03_08_2016`
--
ALTER TABLE `home_loan_info_backed_by_tarek_03_08_2016`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_looking_for`
--
ALTER TABLE `home_loan_looking_for`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_looking_for_home_loan_info`
--
ALTER TABLE `home_loan_looking_for_home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_user`
--
ALTER TABLE `home_loan_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_loan_user_home_loan_info`
--
ALTER TABLE `home_loan_user_home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_map_location`
--
ALTER TABLE `map_map_location`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_map_location_category`
--
ALTER TABLE `map_map_location_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_applicanteligibility_for_applying`
--
ALTER TABLE `auto_applicanteligibility_for_applying`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auto_features_backed_by_tarek_03_08_2016`
--
ALTER TABLE `auto_features_backed_by_tarek_03_08_2016`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auto_i_am`
--
ALTER TABLE `auto_i_am`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auto_i_want`
--
ALTER TABLE `auto_i_want`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auto_loan_info`
--
ALTER TABLE `auto_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `auto_loan_info_backed_by_03_08_2016`
--
ALTER TABLE `auto_loan_info_backed_by_03_08_2016`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auto_loan_info_vs_i_am`
--
ALTER TABLE `auto_loan_info_vs_i_am`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auto_loan_info_vs_i_want`
--
ALTER TABLE `auto_loan_info_vs_i_want`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `card_bank`
--
ALTER TABLE `card_bank`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `card_card_informations`
--
ALTER TABLE `card_card_informations`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_card_issuer`
--
ALTER TABLE `card_card_issuer`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_card_type`
--
ALTER TABLE `card_card_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `card_card_user`
--
ALTER TABLE `card_card_user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_credit_card_type`
--
ALTER TABLE `card_credit_card_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card_info_card_reward`
--
ALTER TABLE `card_info_card_reward`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `card_info_card_user`
--
ALTER TABLE `card_info_card_user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `card_reward`
--
ALTER TABLE `card_reward`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `home_loan_applicant_type`
--
ALTER TABLE `home_loan_applicant_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `home_loan_applicant_type_home_loan_info`
--
ALTER TABLE `home_loan_applicant_type_home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home_loan_features`
--
ALTER TABLE `home_loan_features`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `home_loan_feature_home_loan_info`
--
ALTER TABLE `home_loan_feature_home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `home_loan_info`
--
ALTER TABLE `home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home_loan_info_backed_by_tarek_03_08_2016`
--
ALTER TABLE `home_loan_info_backed_by_tarek_03_08_2016`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_loan_looking_for`
--
ALTER TABLE `home_loan_looking_for`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home_loan_looking_for_home_loan_info`
--
ALTER TABLE `home_loan_looking_for_home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `home_loan_user`
--
ALTER TABLE `home_loan_user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home_loan_user_home_loan_info`
--
ALTER TABLE `home_loan_user_home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `loan_type`
--
ALTER TABLE `loan_type`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `map_map_location`
--
ALTER TABLE `map_map_location`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `map_map_location_category`
--
ALTER TABLE `map_map_location_category`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

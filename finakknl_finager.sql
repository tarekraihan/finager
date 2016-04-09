-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2016 at 01:58 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finakknl_finager`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_bank`
--

CREATE TABLE `card_bank` (
  `id` int(10) NOT NULL,
  `bank_name` varchar(150) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_bank`
--

INSERT INTO `card_bank` (`id`, `bank_name`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'Brac Bank', 1, 0, '2016-03-08 02:16:39', '0000-00-00 00:00:00'),
(2, 'Datch-Bangla Bank Ltd', 1, 0, '2016-03-15 03:30:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_informations`
--

CREATE TABLE `card_card_informations` (
  `id` int(10) NOT NULL,
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
  `experience_salaried` varchar(20) DEFAULT NULL,
  `experience_business` varchar(20) DEFAULT NULL,
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_card_informations`
--

INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_category`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_salaried`, `experience_business`, `cc_issuer_id`, `card_benifit_id`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 1, 2, 1, 'VISA CLASSIC DUAL CARD', '13.jpg', NULL, '3,4', '20000', '15000', '500000', '35000', '200000', '1000000', '500000', '250000', '22', '59', '3', '5', 2, '1,3,4,6', '1', '20', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '<ul>                                                     <li> Triple benefits insurance plan for the cardholders (See review for details).</li>                                                     <li> Use of 100% limit through card cheque (See review for details)</li>                                                     <li>Convenient payment option (See review for details).</li>                                                     <li>You can set your own limit.</li>                                                     <li>Installment program is available.</li>                                                     <li> Cash withdraw 50% of the limit.</li>                                                 </ul>', '<ul>                                                     <li>	Monthly fee 10 taka+vat for sms service & transaction alert.</li>                                                     <li>	0.35 paisa for every 100/= taka will be deducted for insurance program.</li>                                                     <li>	Out of 18    transactions, there must be 10 POS transaction to get waiver on annual fee.</li>                                                 </ul>', '<p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>', '1500', 'Vat', 'Testing', '1', '3', '<p>Any Bangladeshi National</p>  <p>For salaried person minimum monthly income after tax is BDT 25,000</p>  <p>For self-employed person minimum monthly income after tax is BDT 25,000</p>  <p><strong>Age:</strong></p>  <ul> 	<li>Minimum 21 years for primary card</li> 	<li>Minimum 18 years for supplementary card</li> 	<li>Maximum 60 years for any card.</li> </ul>  <p><strong>Document:</strong></p>  <ul> 	<li>Duly filled Credit Card Application form</li> 	<li>Salary Certificate (salaried) / Valid and Updated Trade License (self-employed)</li> 	<li>Partnership deed (self-employed)</li> 	<li>Memorandum of Association(self-employed)</li> 	<li>Certificate of Incorporation (self-employed)</li> 	<li>Photocopy of updated TIN Certificate</li> 	<li>Valid Photo ID (National ID/Passport)</li> 	<li>Photocopy of Office ID</li> 	<li>2 passport sized photographs</li> 	<li>Latest Six Months Bank statement for salaried applicant</li> 	<li>Latest One Year Bank statement for self employed</li> 	<li>Latest Three Months Bank statement for those who maintain salary account with a reputed bank</li> 	<li>Latest two months&rsquo; bank statement or 2 salary reflection for Corporate Offer Pack for Salaried and 4 months for Non Salaried</li> </ul>', '22', '24', '25', '2.5', '2.6', '2.4', '50', '0', '0', 1, NULL, '2016-03-22 03:45:49', '2016-04-09 15:59:30'),
(2, 2, 3, 1, 'VISA GOLD CARD', '2.png', NULL, '3,4', '10000', '240000', '200000', '255200', '400000', '254000', '50000', '70000', '22', '29', '1', '6', 2, '2,5,6', '1', '12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<ul>                                                     <li> Triple benefits insurance plan for the cardholders (See review for details).</li>                                                     <li> Use of 100% limit through card cheque (See review for details)</li>                                                     <li>Convenient payment option (See review for details).</li>                                                     <li>You can set your own limit.</li>                                                     <li>Installment program is available.</li>                                                     <li> Cash withdraw 50% of the limit.</li>                                                 </ul>', '<ul>                                                     <li>	Monthly fee 10 taka+vat for sms service & transaction alert.</li>                                                     <li>	0.35 paisa for every 100/= taka will be deducted for insurance program.</li>                                                     <li>	Out of 18    transactions, there must be 10 POS transaction to get waiver on annual fee.</li>                                                 </ul>', '<p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>', '1500', 'Vat', 'first year', '1', '3', '<p>Any Bangladeshi National</p>  <p>For salaried person minimum monthly income after tax is BDT 25,000</p>  <p>For self-employed person minimum monthly income after tax is BDT 25,000</p>  <p><strong>Age:</strong></p>  <ul> 	<li>Minimum 21 years for primary card</li> 	<li>Minimum 18 years for supplementary card</li> 	<li>Maximum 60 years for any card.</li> </ul>  <p><strong>Document:</strong></p>  <ul> 	<li>Duly filled Credit Card Application form</li> 	<li>Salary Certificate (salaried) / Valid and Updated Trade License (self-employed)</li> 	<li>Partnership deed (self-employed)</li> 	<li>Memorandum of Association(self-employed)</li> 	<li>Certificate of Incorporation (self-employed)</li> 	<li>Photocopy of updated TIN Certificate</li> 	<li>Valid Photo ID (National ID/Passport)</li> 	<li>Photocopy of Office ID</li> 	<li>2 passport sized photographs</li> 	<li>Latest Six Months Bank statement for salaried applicant</li> 	<li>Latest One Year Bank statement for self employed</li> 	<li>Latest Three Months Bank statement for those who maintain salary account with a reputed bank</li> 	<li>Latest two months&rsquo; bank statement or 2 salary reflection for Corporate Offer Pack for Salaried and 4 months for Non Salaried</li> </ul>', '25', '5', '25', '2.5', '2.6', '2.4', '50', '0', '1', 1, NULL, '2016-03-22 03:50:44', '2016-04-09 15:27:40'),
(4, 2, 3, 1, 'PLATINAM MASTER CARD ', '14.jpg', NULL, '3,4', '10000', '240000', '200000', '255200', '400000', '254000', '50000', '70000', '22', '29', '1', '6', 2, '2,5,6', '1', '12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '<ul>                                                     <li> Triple benefits insurance plan for the cardholders (See review for details).</li>                                                     <li> Use of 100% limit through card cheque (See review for details)</li>                                                     <li>Convenient payment option (See review for details).</li>                                                     <li>You can set your own limit.</li>                                                     <li>Installment program is available.</li>                                                     <li> Cash withdraw 50% of the limit.</li>                                                 </ul>', '<ul>                                                     <li>	Monthly fee 10 taka+vat for sms service & transaction alert.</li>                                                     <li>	0.35 paisa for every 100/= taka will be deducted for insurance program.</li>                                                     <li>	Out of 18    transactions, there must be 10 POS transaction to get waiver on annual fee.</li>                                                 </ul>', '<p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <p>                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>                                                 <h4>Lorem Ipsum is simply dummy text</h4>                                                 <p>                                                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using                                                 </p>', '1500', 'Vat', 'first year', '1', '3', '<p>Any Bangladeshi National</p>  <p>For salaried person minimum monthly income after tax is BDT 25,000</p>  <p>For self-employed person minimum monthly income after tax is BDT 25,000</p>  <p><strong>Age:</strong></p>  <ul> 	<li>Minimum 21 years for primary card</li> 	<li>Minimum 18 years for supplementary card</li> 	<li>Maximum 60 years for any card.</li> </ul>  <p><strong>Document:</strong></p>  <ul> 	<li>Duly filled Credit Card Application form</li> 	<li>Salary Certificate (salaried) / Valid and Updated Trade License (self-employed)</li> 	<li>Partnership deed (self-employed)</li> 	<li>Memorandum of Association(self-employed)</li> 	<li>Certificate of Incorporation (self-employed)</li> 	<li>Photocopy of updated TIN Certificate</li> 	<li>Valid Photo ID (National ID/Passport)</li> 	<li>Photocopy of Office ID</li> 	<li>2 passport sized photographs</li> 	<li>Latest Six Months Bank statement for salaried applicant</li> 	<li>Latest One Year Bank statement for self employed</li> 	<li>Latest Three Months Bank statement for those who maintain salary account with a reputed bank</li> 	<li>Latest two months&rsquo; bank statement or 2 salary reflection for Corporate Offer Pack for Salaried and 4 months for Non Salaried</li> </ul>', '25', '5', '25', '2.5', '2.6', '2.4', '50', '0', '1', 1, NULL, '2016-03-22 04:18:49', '2016-04-09 15:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_issuer`
--

CREATE TABLE `card_card_issuer` (
  `id` int(10) NOT NULL,
  `card_issuer_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `card_card_type` (
  `id` int(10) NOT NULL,
  `card_type_name` varchar(200) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='local, International';

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

CREATE TABLE `card_card_user` (
  `id` int(10) NOT NULL,
  `card_user` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `card_credit_card_type` (
  `id` int(10) NOT NULL,
  `cc_card_type` varchar(225) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_credit_card_type`
--

INSERT INTO `card_credit_card_type` (`id`, `cc_card_type`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'International', 1, 0, '2016-03-15 03:20:30', '2016-03-15 14:20:30'),
(2, 'Local', 1, 1, '2016-03-15 03:20:41', '2016-03-15 14:30:41'),
(3, 'Local & International Card', 1, 0, '2016-04-09 03:55:22', '2016-04-09 13:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `card_fees_charges`
--

CREATE TABLE `card_fees_charges` (
  `id` int(10) NOT NULL,
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_fees_charges`
--

INSERT INTO `card_fees_charges` (`id`, `card_id`, `basic_card_annual_fee`, `basic_card_annual_fee_plus`, `supplementary_card_annual_fee`, `purchase_fee`, `balance_transfer_fee`, `cash_advance_fee_own_atm`, `cash_advance_fee_other_atm`, `cash_advance_fee_other_atm_plus`, `cash_advance_fee_international_usd`, `cash_advance_fee_international_percentage`, `cash_advance_fee_international_remarks`, `late_payment_fee_bdt`, `late_payment_fee_usd`, `card_replacement_fee`, `pin_replacement_fee`, `over_limit_charge_bdt`, `over_limit_charge_usd`, `transaction_alert_service`, `transaction_alert_service_plus`, `credit_assurance_program_fee`, `credit_assurance_program_fee_remarks`, `monthly_e_statement_fee`, `check_book_fee`, `minimum_payment_bdt`, `minimum_payment_usd`, `minimum_payment_percentage`, `minimum_payment_remarks`, `cheque_return_fee`, `duplicate_statement`, `card_cheque_processing_fee`, `card_cheque_issuing_fee`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 1, '1300', 'Vat', 'First Card Free, Second Card 600 + VAT', 'N/A', '0', '2', '2', 'applicable transaction fee', '2.5', '3', 'whichever is higher', '400', '10', '50', '30', '400', '10', '10', 'Vat', '0.36', 'on outstanding amount', '50', '1000', '500', '10', '3', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-03-23 11:43:10', '2016-03-23 10:43:10'),
(2, 2, '1300', 'VAT', 'First Card Free, Second Card 600 + VAT', 'N/A', '0', '2', '2', 'applicable transaction fee', '2.5', '3', 'whichever is higher', '400', '10', '500', '350', '400', '10', '10', 'VAT', '0.35', 'on outstanding amount', '50', '1000', '500', '10', '5', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-04-09 05:09:16', '2016-04-09 15:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `card_reward`
--

CREATE TABLE `card_reward` (
  `id` int(10) NOT NULL,
  `reward_name` varchar(225) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_by` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `map_map_location` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `map_map_location_category`
--

CREATE TABLE `map_map_location_category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`id`, `first_name`, `last_name`, `user_name`, `email_address`, `phone_no`, `admin_role_id`, `created_by`, `password`, `actual_password`, `profile_picture`, `status`, `modified_by`, `last_login`, `created`, `modified`) VALUES
(1, 'Tarek', 'Raihan', 'tarekraihan', 'tarekraihan@yahoo.com', '01911222952', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '', 1, 1, '2016-02-07 00:00:00', '0000-00-00 00:00:00', '2016-03-13 22:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user_role`
--

CREATE TABLE `tbl_admin_user_role` (
  `id` int(10) NOT NULL,
  `admin_role` varchar(100) NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified_by` int(2) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `card_reward`
--
ALTER TABLE `card_reward`
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
-- AUTO_INCREMENT for table `card_bank`
--
ALTER TABLE `card_bank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `card_card_informations`
--
ALTER TABLE `card_card_informations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `card_card_issuer`
--
ALTER TABLE `card_card_issuer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `card_card_type`
--
ALTER TABLE `card_card_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `card_card_user`
--
ALTER TABLE `card_card_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `card_credit_card_type`
--
ALTER TABLE `card_credit_card_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `card_reward`
--
ALTER TABLE `card_reward`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin_user_role`
--
ALTER TABLE `tbl_admin_user_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

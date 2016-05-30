-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 05:51 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2016 at 02:07 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.6.20

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
(8, 'Brac Bank Limited', 1, 0, '2016-04-11 05:15:15', '0000-00-00 00:00:00'),
(9, 'Meghna Bank Limited', 1, 0, '2016-04-11 05:16:01', '0000-00-00 00:00:00'),
(10, 'Bank Asia Limited', 1, 0, '2016-04-11 05:16:11', '0000-00-00 00:00:00'),
(11, 'Eastern Bank Limited', 1, 0, '2016-04-11 05:16:22', '0000-00-00 00:00:00'),
(12, 'Bangladesh Commerce Bank Limited', 1, 0, '2016-04-11 05:18:41', '0000-00-00 00:00:00'),
(13, 'AB Bank Limited', 1, 0, '2016-04-11 05:18:53', '0000-00-00 00:00:00'),
(14, 'Dhaka Bank Limited', 1, 0, '2016-04-11 05:19:55', '0000-00-00 00:00:00'),
(15, 'Dutch Bangla Bank Limited', 1, 0, '2016-04-11 05:20:06', '0000-00-00 00:00:00'),
(16, 'IFIC Bank Limited', 1, 0, '2016-04-11 05:20:17', '0000-00-00 00:00:00'),
(17, 'Jamuna Bank Limited', 1, 0, '2016-04-11 05:20:24', '0000-00-00 00:00:00'),
(18, 'Mercantile Bank Limited', 1, 0, '2016-04-11 05:20:29', '0000-00-00 00:00:00'),
(19, 'Midland Bank Limited', 1, 0, '2016-04-11 05:20:36', '0000-00-00 00:00:00'),
(20, 'Modhumoti Bank Limited', 1, 0, '2016-04-11 05:20:47', '0000-00-00 00:00:00'),
(21, 'Mutual Trust Bank Limited', 1, 0, '2016-04-11 05:20:58', '0000-00-00 00:00:00'),
(22, 'National Bank Limited', 1, 0, '2016-04-12 05:49:06', '0000-00-00 00:00:00'),
(23, 'NCC Bank Limited', 1, 0, '2016-04-12 05:49:17', '0000-00-00 00:00:00'),
(24, 'NRB Bank Limited', 1, 0, '2016-04-12 05:49:23', '0000-00-00 00:00:00'),
(25, 'NRB Commercial Bank Limited', 1, 0, '2016-04-12 05:49:31', '0000-00-00 00:00:00'),
(26, 'NRB Global Bank Limited', 1, 0, '2016-04-12 05:49:40', '0000-00-00 00:00:00'),
(27, 'One Bank Limited', 1, 0, '2016-04-12 05:49:46', '0000-00-00 00:00:00'),
(28, 'Prime Bank Limited', 1, 0, '2016-04-12 05:49:51', '0000-00-00 00:00:00'),
(29, 'Pubali Bank Limited', 1, 0, '2016-04-12 05:49:58', '0000-00-00 00:00:00'),
(30, 'South Bangla Agriculture and Commerce Bank Limited', 1, 0, '2016-04-12 05:50:07', '0000-00-00 00:00:00'),
(31, 'Southeast Bank Limited', 1, 0, '2016-04-12 05:50:22', '0000-00-00 00:00:00'),
(32, 'Standard Bank Limited', 1, 0, '2016-04-12 05:50:26', '0000-00-00 00:00:00'),
(33, 'The City Bank Limited', 1, 0, '2016-04-12 05:50:33', '0000-00-00 00:00:00'),
(34, 'The Farmers Bank Limited', 1, 0, '2016-04-12 05:50:38', '0000-00-00 00:00:00'),
(35, 'The Premier Bank Limited', 1, 0, '2016-04-12 05:50:44', '0000-00-00 00:00:00'),
(36, 'Trust Bank Bangladesh Limited', 1, 0, '2016-04-12 05:50:54', '0000-00-00 00:00:00'),
(37, 'United Commercial Bank Limited', 1, 0, '2016-04-12 05:51:09', '0000-00-00 00:00:00'),
(38, 'Uttara Bank Limited', 1, 0, '2016-04-12 05:51:22', '0000-00-00 00:00:00'),
(39, 'Islami Bank Bangladesh Limited', 1, 0, '2016-04-12 05:51:33', '0000-00-00 00:00:00'),
(40, 'Al-Arafah Islami Bank Limited', 1, 0, '2016-04-12 05:51:39', '0000-00-00 00:00:00'),
(41, 'Export Import Bank of Bangladesh Limited', 1, 0, '2016-04-12 05:51:45', '0000-00-00 00:00:00'),
(42, 'Social Islami Bank Limited', 1, 0, '2016-04-12 05:51:52', '0000-00-00 00:00:00'),
(43, 'Shahjalal islami Bank Limited', 1, 0, '2016-04-12 05:52:00', '0000-00-00 00:00:00'),
(44, 'First Security Islami Bank Limited', 1, 0, '2016-04-12 05:52:07', '0000-00-00 00:00:00'),
(45, 'Union Bank Limited', 1, 0, '2016-04-12 05:52:13', '0000-00-00 00:00:00'),
(46, 'ICB Islamic Bank Limited', 1, 0, '2016-04-12 05:52:20', '0000-00-00 00:00:00'),
(47, 'Bank Al-Falah', 1, 0, '2016-04-12 05:52:28', '0000-00-00 00:00:00'),
(48, 'Citibank NA', 1, 0, '2016-04-12 05:52:35', '0000-00-00 00:00:00'),
(49, 'Commercial Bank of Ceylon', 1, 0, '2016-04-12 05:52:42', '0000-00-00 00:00:00'),
(50, 'Habib Bank Limited', 1, 0, '2016-04-12 05:52:48', '0000-00-00 00:00:00'),
(51, 'HSBC', 1, 0, '2016-04-12 05:52:56', '0000-00-00 00:00:00'),
(52, 'National Bank of Pakistan', 1, 0, '2016-04-12 05:53:02', '0000-00-00 00:00:00'),
(53, 'Standard Chartered Bank', 1, 0, '2016-04-12 05:53:08', '0000-00-00 00:00:00'),
(54, 'State Bank of India', 1, 0, '2016-04-12 05:53:13', '0000-00-00 00:00:00'),
(55, 'Woori Bank', 1, 0, '2016-04-12 05:53:20', '0000-00-00 00:00:00'),
(56, 'Sonali Bank Limited', 1, 0, '2016-04-12 05:53:36', '0000-00-00 00:00:00'),
(57, 'Janata Bank Limited', 1, 0, '2016-04-12 05:53:42', '0000-00-00 00:00:00'),
(58, 'Agrani Bank Limited', 1, 0, '2016-04-12 05:53:50', '0000-00-00 00:00:00'),
(59, 'Rupali Bank Limited', 1, 0, '2016-04-12 05:53:56', '0000-00-00 00:00:00'),
(60, 'BASIC Bank Limited', 1, 0, '2016-04-12 05:54:02', '0000-00-00 00:00:00'),
(61, 'Bangladesh Development Bank Limited', 1, 0, '2016-04-12 05:54:10', '0000-00-00 00:00:00'),
(62, 'Rajshahi Krishi Unnoyon Bank', 1, 0, '2016-04-12 05:54:21', '0000-00-00 00:00:00'),
(63, 'Bangladesh Krishi Bank Limited', 1, 1, '2016-04-12 05:54:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `card_card_informations`
--

CREATE TABLE `card_card_informations` (
  `id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `cc_type_id` int(10) DEFAULT NULL,
  `card_type_id` int(10) DEFAULT NULL,
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

INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_type_id`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_salaried`, `experience_business`, `cc_issuer_id`, `card_benifit_id`, `benifit_details`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 8, 1, 6, 'Visa Classic Dual Card', '&lt;', NULL, '3,4,5', '20000', '20000', '49999', '49999', '10000', '10000', '75000', '75000', '21', '60', '6', '1', 3, '1,3,4,5,6,9,10,12,13,17,18,22,23', '<ul>\n	<li>Waiver on Annual Fee if transact at least 18 times (including 10 POS transactions) in a physical year.</li>\n	<li>Discount is Available</li>\n	<li>Installment payment for bill &amp; purchase</li>\n	<li>Reward program is applicable</li>\n	<li>Worldwide cash advance facility</li>\n	<li>Convenient payment option</li>\n	<li>Credit assurance program</li>\n	<li>Multiple supplementary card</li>\n	<li>Auto debit payment service</li>\n	<li>Check book facility</li>\n	<li>Global emergency assistance service</li>\n</ul>\n\n<p>Free supplementary card</p>\n', '15', '45', '<p>Dual Currency Visa Classic Card of Brac Bank Ltd. is a valid both in Bangladesh &amp; outside the country. It has waiver on annual fee from the second year if 18 transactions (including 10 POS transaction) are done in a physical year.</p>', '<ul>\r\n	<li>Triple benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Use of 100% limit through card cheque (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>You can set your own limit</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka+vat for sms service &amp; transaction alert</li>\r\n	<li>0.35 paisa for every 100/= taka will be deducted for insurance program</li>\r\n	<li>Out of 18&nbsp;&nbsp;&nbsp; transactions, there must be 10 POS transaction to get waiver on annual fee.</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:670px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Waiver on Annual Fee</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">Now payment of Annual fee for your Credit Card is totally your choice. BRAC Bank allows you to pay no Annual fee as long as you transact at least 18 times (including 10 POS transactions) in a physical year.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With BRAC Bank Credit Card now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. You can use your 100% limit through Card cheque with a minimum processing fee. You will get your first cheque book absolutely for free.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">A special loyalty program that allows you to earn some points every time whenever you spend your money through POS with your Credit Card in Bangladesh only. For every Tk. 50 spent through POS on your credit Card, you get the opportunity to earn 1 Reward point. The accumulated Reward Points can be redeemed against exciting gift items from our Reward Catalogue. The enrollment of this program is free.&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of BRAC Bank.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility is a triple benefits Insurance Plan for the BBL Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of BBL credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. For any kind of accidental death, gold card holder is covered up to BDT 2-lacs and Classic Cardholder up to BDT 1 lac &ndash; under Credit Shield. A very nominal charge of 0.35 paisa for every TK.100/- of your Credit Card outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BBL SMS Service is the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>For the first time in Bangladesh, BRAC Bank brings you an extensive Transaction Alert Service for its Cardholders. BRAC Bank Transaction Alert - a service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><img alt="http://bracbank.com/images/arrow3.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image001.gif" style="height:11px; width:8px" /><strong>E-Alerts</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>In our effort to serve you further, we have now introduced E-Alerts (email alerts) for your BRAC Bank Credit Card usage abroad and online foreign currency transactions. This will ensure safety of your card and help you be informed - all the time - all over the world! All you have you do is ensure that your valid e-mail address is registered with us. Call 16221 for questions or details.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">\r\n						<p>&nbsp;</p>\r\n\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Real Time Payment Update</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Now you can avail your limit within a short time after making payment. Through IVR &amp; ATM you can instantly refresh your limit upon making payment. As for cash payment, limit will be refreshed within 2 hours during weekdays and end of the day during weekends.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows BBL Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Immediate Cash Advance Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>You don&#39;t need to worry about carrying cash anywhere &ndash; not even on a foreign trip where there is no one to give you hard cash at times of your need. You can withdraw cash up to 50% of your Credit Limit from any of our branches or any ATMs with Visa/MasterCard Logo across the country and outside the country.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Worldwide Acceptance</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Our Credit Card is accepted at over 5,000 outlets across the country and over 24 million Visa/MasterCard outlets worldwide. Use your Credit Card for everyday purchases as well as high valued transactions with wide range of products and services including hotels, restaurants, airlines, travel agents, shopping malls, department stores, hospitals, diagnostic centers, jewelers, electronics, computer shops and many more! This number is increasing rapidly to cater your growing needs. So, no matter where you are in the world BBL Credit Card gives you the power to purchase whatever you desire for.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Global Emergency Assistance Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you travel abroad, please remember that you have the option of using the Global Emergency Assistance Service provided by the Visa/MasterCard for our cardholders. These can be availed for: 1. Reporting Lost/ Stolen Credit Cards 2. Requesting for emergency card replacement 3. Emergency Cash Advance and 4. Miscellaneous enquiries. The toll free telephone numbers for accessing these emergency assistance Help line are available in local telephone directories/yellow pages and other local listings in each country.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. As a primary cardholder you can also set spending limits for each of your supplementary cards. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/user/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Auto debit option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>If you have an account with any BRAC Bank branch, you have the option of making the payment of your monthly credit statement (either minimum amount due or total due amount) directly through your bank account.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Self-set limit</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank Credit Card allows you to set your own card limit. You can request for a limit lower than what you are eligible for. You can even preset the monthly spending limits on the supplementary card. Any transaction above that specific spending limit will be declined.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">\r\n						<p>&nbsp;</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>BBL 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>We offer Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. BRAC Bank Call Center facility provides you one stop solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Alternative Payment channels</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>BRAC Bank provides you different payment channels. Now you don&rsquo;t need to wait in queue to pay your credit card bill. You can easily pay your credit card bill through Cash Deposit Machine, ATM or through IVR (interactive voice recorder) and even through Internet Banking. For IVR, ATM &amp; Internet Banking you need to have an account with BRAC Bank.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Internet Banking</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>We understand the pressures on your time. For you to get information when you need it and where you need it, we offer you access to BRAC Bank Credit Card related information through the Internet at http://www.bracbank.com. You can also clear your Credit Card bills via Internet Banking from you BBL account. Please visit our branch or call our Phone Banking to learn about the enrollment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Soon you can also avail facilities like accessing account information - current and last statement - getting your payment status, viewing your monthly statement by e-mail, requesting a duplicate PIN, recording a change of address, ordering a draft, giving auto debit instructions, requesting a replacement card or an add-on card, redeeming points online from the Rewards catalogue and subscribing to statement by e-mail and mobile alert. The program will be available shortly and we will notify you soon.</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1300', 'VAT', 'First Card Free, Second Card 600 + VAT', '1', '30', '<p>Any Bangladeshi National</p>\r\n\r\n<p>For salaried person minimum monthly income after tax is BDT 25,000</p>\r\n\r\n<p>For self-employed person minimum monthly income after tax is BDT 25,000</p>\r\n\r\n<p><strong>Age:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum 21 years for primary card</li>\r\n	<li>Minimum 18 years for supplementary card</li>\r\n	<li>Maximum 60 years for any card.</li>\r\n</ul>\r\n\r\n<p><strong>Document:</strong></p>\r\n\r\n<ul>\r\n	<li>Duly filled Credit Card Application form</li>\r\n	<li>Salary Certificate (salaried) / Valid and Updated Trade License (self-employed)</li>\r\n	<li>Partnership deed (self-employed)</li>\r\n	<li>Memorandum of Association(self-employed)</li>\r\n	<li>Certificate of Incorporation (self-employed)</li>\r\n	<li>Photocopy of updated TIN Certificate</li>\r\n	<li>Valid Photo ID (National ID/Passport)</li>\r\n	<li>Photocopy of Office ID</li>\r\n	<li>2 passport sized photographs</li>\r\n	<li>Latest Six Months Bank statement for salaried applicant</li>\r\n	<li>Latest One Year Bank statement for self employed</li>\r\n	<li>Latest Three Months Bank statement for those who maintain salary account with a reputed bank</li>\r\n	<li>Latest two months&rsquo; bank statement or 2 salary reflection for Corporate Offer Pack for Salaried and 4 months for Non Salaried</li>\r\n</ul>', '28', '28', '28', '2.33', '2.33', '2.33', '50', '0', '0', 1, NULL, '2016-04-12 11:43:43', '2016-04-21 18:14:29'),
(2, 10, 1, 5, 'Mastercard Gold', '&lt;', NULL, '4,5', '45000', '30000', '45000', '30000', '99000', '99000', '500000', '50000', '21', '70', '6', '1', 2, '1,9,12,17,18', NULL, '15', '45', '<p>Mastercard Gold of Bank Asia Ltd. is a local currency credit card which is valid only in Bangladesh. It has double credit shield program.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Local Currency Credit Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">MasterCard Gold is a local currency credit card; users can use this card anyone in Bangladesh where Bank Asia ATM service and POS service is available.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With Bank Asia Mastercard Gold now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. Check processing fee is 1.50% and check issue fee is BDT 100.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&ldquo;Reward&rdquo; means a product, gift, service, voucher or entitlement available to a cardholder under Rewards Program, as publish in the catalogue that is current at the date of redemption of points by a cardholder during the same Rewards Program.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Bank Asia Mastercard Gold offers Tk. 50 which is equivalent to 1 Treasure Point&rdquo; for every Retail purchase.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&ldquo;Treasure Point&rdquo; means a port accumulated by a cardholder towards participation in the Rewards Program through Credit Card use by that Cardholder. Treasure points calculation is determined by the Bank &amp; can be varied from time to time.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Following are the reward catalogue of Bank Asia Ltd. Mastercard Gold. Cardholders can redeem monetary value against their treasure points.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Reward Redemption Schedule</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="width:670px">\r\n						<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:664px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p><strong>Bank Asia Credit Cards Treasure Point</strong></p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p><strong>Value (TK)</strong></p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>2000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>5000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 1100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>7500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>10000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>12500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.3800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>15000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.4600.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>17500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.5500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>20000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.6100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>22500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.7500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>25000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.8000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>27500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.9000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>30000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.10000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>40000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.15000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>50000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.20000.00</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<div style="clear:both;">&nbsp;</div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Rewards Catalogue</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><strong>Easy tips to Earn More Treasure Points</strong></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:660px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td style="width:645px">\r\n									<p>Do not leave home without your Bank Asia Credit Card. Shop, Dine and entertain using your Bank Asia Credit Card every day. Enjoy the recognition and financial power while earning more points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card for all payments, For Example, Mobile Bill, Electricity Bill etc. Enjoy total flexibility while earning MORE points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card while re-fueling your car or buying groceries. Enjoy MORE points for frequent purchases.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:20px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div style="clear:both;">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of Bank Asia.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility of Bank Asia is a double benefits Insurance Plan for the Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. A very nominal premium of 0.33% of your Credit Card total outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia provides SMS Service in the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Transaction Alert service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows Bank Asia Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Bank Asia 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. offers Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. Bank Asia Call Center facility provides you one stops solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1000', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li><strong>Eligibility</strong></li>\r\n</ul>\r\n\r\n<p>Any Bangladeshi National</p>\r\n\r\n<p>For salaried person minimum monthly income after tax is BDT 30,000</p>\r\n\r\n<p>For self-employed person minimum monthly income after tax is BDT 45,000</p>\r\n\r\n<p><strong>Age:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum 21 years for primary card</li>\r\n	<li>Minimum 18 years for supplementary card</li>\r\n	<li>Maximum 70 years for any card.</li>\r\n</ul>\r\n\r\n<p><strong>Document:</strong></p>\r\n\r\n<p>List of Documents:</p>\r\n\r\n<p><strong>Salaried Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Salary Certificate</li>\r\n	<li>Last Six Months&rsquo; Salary Account Statement</li>\r\n	<li>TIN Certificate</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/ Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>\r\n\r\n<p><strong>Self-employed Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Valid Trade License (if Proprietor)/ Partnership Deed (if partnership)/ Memorandum of Articles with Incorporation Certificate (for Ltd. Co.)</li>\r\n	<li>Current six months Bank Statement (personal &amp; Company)</li>\r\n	<li>TIN Certificate (only personal TIN)</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>', '28', '28', '28', '2.33', '2.33', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 04:20:22', '2016-04-18 19:04:43');
INSERT INTO `card_card_informations` (`id`, `bank_id`, `cc_type_id`, `card_type_id`, `card_name`, `card_image_name`, `card_image_url`, `card_user_id`, `income_range_min_business`, `income_range_min_salaried`, `income_range_max_business`, `income_range_max_salaried`, `credit_limit_min_business`, `credit_limit_min_salaried`, `credit_limit_max_business`, `credit_limit_max_salaried`, `age_limit_min`, `age_limit_max`, `experience_salaried`, `experience_business`, `cc_issuer_id`, `card_benifit_id`, `benifit_details`, `interest_free_period_min`, `interest_free_pefiod_max`, `card_summary`, `pros`, `cons`, `review`, `annual_fee`, `annual_fee_vat`, `supplimentary`, `billing_cycle_start`, `billing_cycle_end`, `eligibility`, `purchase_interest_rate`, `balance_transfer_rate`, `cash_advance_interest_rate_yearly`, `purchase_interest_rate_monthly`, `balance_transfer_rate_monthly`, `cash_advance_interest_rate`, `cash_advance_limit`, `featured`, `status`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(3, 10, 1, 5, 'Mastercard Gold', '&lt;', NULL, '4,5', '45000', '30000', '45000', '30000', '99000', '99000', '500000', '50000', '21', '70', '6', '1', 2, '1,9,12,17,18', NULL, '15', '45', '<p>Mastercard Gold of Bank Asia Ltd. is a local currency credit card which is valid only in Bangladesh. It has double credit shield program.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<table border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Local Currency Credit Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:675px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:675px">\r\n						<p style="margin-left:-6.0pt">MasterCard Gold is a local currency credit card; users can use this card anyone in Bangladesh where Bank Asia ATM service and POS service is available.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:675px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Cheque Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:674px">\r\n				<tbody>\r\n					<tr>\r\n						<td style="width:674px">\r\n						<p style="margin-left:-6.0pt">With Bank Asia Mastercard Gold now you can enjoy cheque facility against your credit card limit. You can make payment (account payee only) to any person or organization where Credit Card facility is not available. Check processing fee is 1.50% and check issue fee is BDT 100.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px; width:674px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Rewards Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&ldquo;Reward&rdquo; means a product, gift, service, voucher or entitlement available to a cardholder under Rewards Program, as publish in the catalogue that is current at the date of redemption of points by a cardholder during the same Rewards Program.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Bank Asia Mastercard Gold offers Tk. 50 which is equivalent to 1 Treasure Point&rdquo; for every Retail purchase.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&ldquo;Treasure Point&rdquo; means a port accumulated by a cardholder towards participation in the Rewards Program through Credit Card use by that Cardholder. Treasure points calculation is determined by the Bank &amp; can be varied from time to time.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Following are the reward catalogue of Bank Asia Ltd. Mastercard Gold. Cardholders can redeem monetary value against their treasure points.</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:680px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Reward Redemption Schedule</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="width:670px">\r\n						<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:664px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p><strong>Bank Asia Credit Cards Treasure Point</strong></p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p><strong>Value (TK)</strong></p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>2000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>5000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk. 1100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>7500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>10000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.2800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>12500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.3800.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>15000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.4600.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>17500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.5500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>20000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.6100.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>22500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.7500.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>25000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.8000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>27500</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.9000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>30000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.10000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>40000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.15000.00</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="width:514px">\r\n									<p>50000</p>\r\n									</td>\r\n									<td style="width:150px">\r\n									<p>Tk.20000.00</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n\r\n						<div style="clear:both;">&nbsp;</div>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Rewards Catalogue</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><strong>Easy tips to Earn More Treasure Points</strong></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="right" border="0" cellpadding="0" cellspacing="0" style="width:660px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td style="width:645px">\r\n									<p>Do not leave home without your Bank Asia Credit Card. Shop, Dine and entertain using your Bank Asia Credit Card every day. Enjoy the recognition and financial power while earning more points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card for all payments, For Example, Mobile Bill, Electricity Bill etc. Enjoy total flexibility while earning MORE points.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									<p><img alt="http://www.bankasia-bd.com/images/square1.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image002.png" style="height:11px; width:9px" /></p>\r\n									</td>\r\n									<td>\r\n									<p>Use your Credit Card while re-fueling your car or buying groceries. Enjoy MORE points for frequent purchases.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:20px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<div style="clear:both;">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>E-Statement Service</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. brings more convenience for you through e-statement that will enable you to receive your monthly Credit Card statement via e-mail and this is absolutely free. No doubt nowadays e-statement is the fastest, reliable and efficient service, which ultimately minimizes your paper work and maximizes your convenience. E-Statement will be sent maximum up to 3 (Three) e-mail addresses. For enrollment you have to fill up the enrollment form and send /drop it to any branch of Bank Asia.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Credit Shield Facility</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Credit shield facility of Bank Asia is a double benefits Insurance Plan for the Cardholders. The entire dues on the Credit Card, in the event of death or permanent total disability of credit Cardholder, will be waived and the cardholder or his/her family will receive equal amount to meet immediate expenses. A very nominal premium of 0.33% of your Credit Card total outstanding balance will be applicable for this coverage.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Extensive SMS Service &amp; Transaction Alert</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia provides SMS Service in the simplest way to find out your Credit Card details through your mobile. This includes Push &amp; Pull service which you can avail free of cost. Through Pull Service you can access to your Credit Card information from anywhere anytime within Bangladesh. Through Push service BBL provides you with information on your BBL Card even when you are on the move. Now you would no longer miss a payment or exhaust your Credit limit without any warning.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>Transaction Alert service that allows you to stay updated on your Credit Card transactions. For each predefined transaction an alert will be generated and sent to your mobile instantly. At a nominal monthly fee of BDT 10 + VAT, you can enroll to the service.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Installment Program</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>This is an installment program that allows Bank Asia Credit Cardholders to convert any retail transaction of BDT 3000 and above into an easy and convenient repayment schedule only @ 16.95%. You can also purchase your items of choice from some of our selected PayFlex partner outlets for 0% interest and payback in easy monthly installment.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Supplementary Card</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>With BBL credit Card you can share the exclusive benefits with your dearest and nearest one through providing supplementary card. For your convenience all transactions on your Supplementary Card will be shown separately on your monthly Credit Card statement.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Convenient Payment option</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>When you receive your bill, you need not pay the entire bill amount. You have the flexibility of selecting any of the following payment options:</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:630px">\r\n							<tbody>\r\n								<tr>\r\n									<td style="width:15px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="width:615px">\r\n									<p>Pay the total amount due.</p>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:5px">&nbsp;</td>\r\n									<td style="height:5px">&nbsp;</td>\r\n								</tr>\r\n								<tr>\r\n									<td style="height:71px">\r\n									<p><img alt="http://bracbank.com/images/arrow.gif" src="file:///C:/Users/Atif/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif" style="height:11px; width:6px" /></p>\r\n									</td>\r\n									<td style="height:71px">\r\n									<p>Pay the minimum amount due (5% of your total outstanding or BDT 500 whichever is higher of local card and for Dual card 5% of your outstanding or USD 10 whichever is higher) and the balance is carried forward to subsequent statements.</p>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:5px">&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p>You can pay your payment conveniently, without creating any extra pressure on your finances.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:20px">\r\n			<p><strong>Bank Asia 24-hours Call Center</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:5px">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:650px">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p>Bank Asia Ltd. offers Customer Services 24-hours a day, 7 days a week through our State-of&ndash;the Art Call Center and experienced customer service staffs. Bank Asia Call Center facility provides you one stops solution for your banking needs.</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style="height:10px">&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1000', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li><strong>Eligibility</strong></li>\r\n</ul>\r\n\r\n<p>Any Bangladeshi National</p>\r\n\r\n<p>For salaried person minimum monthly income after tax is BDT 30,000</p>\r\n\r\n<p>For self-employed person minimum monthly income after tax is BDT 45,000</p>\r\n\r\n<p><strong>Age:</strong></p>\r\n\r\n<ul>\r\n	<li>Minimum 21 years for primary card</li>\r\n	<li>Minimum 18 years for supplementary card</li>\r\n	<li>Maximum 70 years for any card.</li>\r\n</ul>\r\n\r\n<p><strong>Document:</strong></p>\r\n\r\n<p>List of Documents:</p>\r\n\r\n<p><strong>Salaried Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Salary Certificate</li>\r\n	<li>Last Six Months&rsquo; Salary Account Statement</li>\r\n	<li>TIN Certificate</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/ Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>\r\n\r\n<p><strong>Self-employed Group</strong></p>\r\n\r\n<ul>\r\n	<li>Two copies Color Photograph (P.P. Size) duly attested by the applicant</li>\r\n	<li>Valid Trade License (if Proprietor)/ Partnership Deed (if partnership)/ Memorandum of Articles with Incorporation Certificate (for Ltd. Co.)</li>\r\n	<li>Current six months Bank Statement (personal &amp; Company)</li>\r\n	<li>TIN Certificate (only personal TIN)</li>\r\n	<li>Copy of National ID card</li>\r\n	<li>Copy of driving license (If any)</li>\r\n	<li>CIB Undertaking Form</li>\r\n	<li>Photocopy of Passport (1st to 7th pages &amp; dollar endorsement pages)</li>\r\n	<li>Proof of Residence (Electricity/WASA/Gas Bill, if any)</li>\r\n	<li>Proof of Car ownership (Photocopy of Blue Book of the car, if any)</li>\r\n	<li>Proof of T&amp;T ownership (Photocopy of T&amp;T Bill, if any)</li>\r\n</ul>', '28', '28', '28', '2.33', '2.33', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 04:20:26', '2016-04-18 19:04:51'),
(4, 19, 1, 5, 'Visa Gold Dual', '&lt;', NULL, '3,4,5', '25000', '15000', '25000', '15000', '20000', '20000', '199000', '199000', '18', '60', '6', '1', 3, '1,4,5,12,13,17,18,20,22,23', NULL, '15', '45', '<p>Visa Gold Dual of Midland Bank Ltd. is a local currency credit card which is valid only in Bangladesh.</p>', '<ul>\r\n	<li>Double benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka + vat for sms service &amp; transaction alert</li>\r\n	<li>0.33% for double shield program on the total outstanding balance</li>\r\n</ul>', '<p>All-purpose Credit Card:<br />\r\nThe MDB credit card can be used for all your requirements, be it shopping, dining out, holidaying, and fuelling up your vehicle, railway ticket reservations &ndash; just about any financial requirement, planned or on desire.</p>\r\n\r\n<p>Credit Convenience:<br />\r\nMDB credit card offers 45-days maximum interest FREE period. No matter what your previous month balance was. Every retail transaction is considered for interest FREE period of maximum 45-days and minimum 15-days.</p>\r\n\r\n<p>Zero Annual Fee:<br />\r\nMDB Dual cards come with a unique offer where you do not need to pay the annual fee if you make 15 transactions in a calendar year, and where at least one transaction per month is a must.</p>\r\n\r\n<p>Free supplementary card &ndash; Enhanced power to your family:<br />\r\nYou can now conveniently take care of the needs of your loved ones. Your MDB card now lets you apply for add-on cards for your spouse, parents, and children above the age of 18. The supplementary cardholder can also enjoy the benefits against his/her limit.</p>\r\n\r\n<p>Widely accepted at Merchant establishments &amp; ATMs worldwide:<br />\r\nEnjoy convenience and easy access to cash withdrawal at all ATMs displaying VISA logo worldwide, and at all merchant establishments including groceries, hotels, restaurants, airline &amp; travel agents, hospitals and diagnosis centers, jewelry shops, electronics &amp; computer shops, fashion &amp; Lifestyle stores and what not!</p>\r\n\r\n<p>Revolving Credit Facility:<br />\r\nYou can choose to pay minimum amount due as shown in the monthly statement and revolve the balance amount to next month&rsquo;s billing cycle.</p>\r\n\r\n<p>Free Card Cheque book:<br />\r\nYou can use the account payee card cheque against your MDB credit card for payment to any person or establishment within Bangladesh. Card cheque is especially useful to you where credit card acceptance facility is not available (e.g. &ndash; House rent, tuition fees etc.). The first cheque book is FREE and is bundled in your welcome pack.</p>\r\n\r\n<p>SMS Alert Service:<br />\r\nMDB card alerts enable you to receive information regarding your credit card status, as an SMS on your mobile phone. With SMS you can also find out your credit card&rsquo;s statement balance, minimum due amount, payment due date simply by using your mobile phone anytime. Whenever you use MDB credit card, system generated SMS will reach in your mobile phone, and you can be assured of knowing any transaction that happened in your card.</p>\r\n\r\n<p>Flexible Spending Limit:<br />\r\nAs a primary cardholder, you can give a supplementary card to your loved one; you can also set spending limits for each of your supplementary cards in a billing cycle.</p>\r\n\r\n<p>Earn while you spend:<br />\r\nWith us, money spent is money earned. For every Tk. 50 you spend, you earn 1 reward point. You can redeem these accumulated points for exciting offer our exclusive reward program.</p>\r\n\r\n<p>E-Statement:<br />\r\nNo postal delays. No lost statements. No late payments. Just the convenience of getting your monthly statement delivered directly to your email inbox. Why not go for e-statement and be a part of green initiative!</p>\r\n\r\n<p>Discount Offer:<br />\r\nAs a member of VISA, MDB cardholders will enjoy discount at selected outlets in the town time to time, and experience the pleasure of dining out and shopping with your VISA credit card.</p>\r\n\r\n<p>0% Interest on EasyPay Program:<br />\r\nWith MDB credit cards EasyPay program, you can make your dream purchases at our EasyPay partner outlets, and pay at your own pace with installments spread up to 24 months.</p>\r\n\r\n<p>Lost Card Liability:<br />\r\nIn case your credit card gets lost, report it immediately to our 24-hour card service Call Center. After you do this, you carry limited liability on any fraudulent transactions on your card.</p>\r\n\r\n<p>Ready Cash:<br />\r\nYou can withdraw cash up to 50% of your credit limit from any of our branches or ATMs across the country. So, forget carrying cash while if you have a MDB credit card in your pocket.</p>\r\n\r\n<p>Auto Debit-No worries of depositing payment timely:<br />\r\nIf you have an account with any Midland Bank branch, you have the option of making payment of your monthly credit card statement (either the minimum due or the total amount due) directly through your bank account.</p>\r\n\r\n<p>Balance Transfer:<br />\r\nIf you have credit card(s) from other banks, you have the option to transfer your current outstanding balance at a much lower interest rate to your MDB credit card. This saves you money and time, allowing you to conveniently manage all your expense from one card account. The balance transfer interest rate is 24% per annum.</p>\r\n\r\n<p>Guaranteed peace of mind:<br />\r\nYour sense of security is our priority. MDB card automatically gives you complete peace of mind with our MDB call center. Our Call Center is accessible in 24 hours a day, 7 days a week, from anywhere in the world, which is designed to provide you one stop solution for your card service&rsquo;s needs. For any enquiry, simply call at (+88) 09666410888, (+88) 01977776325.</p>', '1500', 'N/A', 'Free', '1', '30', '<ul>\r\n	<li>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bangladeshi</li>\r\n	<li>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 18 years to 60 years, age bar can be relaxed for secured cards</li>\r\n	<li>Minimum Gross Income&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Salaried Person- Tk. 15,000, Business person- Tk. 25,000</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Required Documents:</strong><br />\r\n<em>1. Common Documents:</em><br />\r\nCompleted application form, NID copy/ valid passport, e-TIN related document, color photograph, bank statement for last 6 months.</p>\r\n\r\n<p><em>2. Additional Documents:</em></p>\r\n\r\n<p>(a) <strong>For salaried executives:</strong><br />\r\nPay Slip/ Salary Certificate not more than one month old, business card, copy of employee ID(if available)</p>\r\n\r\n<p>(b) <strong>For Sole proprietorship: </strong><br />\r\nValid trade license, one undated cheque, bank statement of sole-proprietorship account, business card (if available)</p>\r\n\r\n<p>(c) <strong>For partnership:</strong><br />\r\nValid trade license, partnership deed, business account bank account, business card (if available), one undated cheque.</p>\r\n\r\n<p>(d) <strong>For limited company:</strong><br />\r\nCertificate of incorporation, memorandum of Association, business account bank statement, business card (if available)</p>\r\n\r\n<p>(e) <strong>For landlord:</strong><br />\r\nProperty of ownership documents, rental agreement paper</p>\r\n\r\n<p>(f) <strong>For Doctors/Engineers/Other professional:</strong><br />\r\nProcessional certificate, business card (if available)</p>\r\n\r\n<p>(g) <strong>For lien against deposit account:</strong><br />\r\nLetter of lien and set-off over deposit account, fund holding instruction, FDR receipt/RFCD advice, authorization of encashment of securities</p>\r\n\r\n<p>(h) <strong>Lien against ERQ (other bank): </strong><br />\r\nLetter of lien and set-off over fund from ERQ account, board resolution</p>\r\n\r\n<p>Please note that, contact point verification (CPV) and know your customer (KYC) are mandatory in all cases.</p>', '28', '28', '28', '2.33', '2.33', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 04:43:56', '2016-04-21 18:14:38'),
(5, 24, 1, 4, 'NRB Bank Visa Platinum', '&lt;', NULL, '3,4,5', '70000', '50000', '70000', '50000', '100000', '100000', '500000', '500000', '21', '60', '6', '1', 3, '4,5,9,10,17,19,22,23', NULL, '20', '50', '<p>Visa Platinum Card of NRB Bank Ltd. is a Dual Currency credit card which is valid both in Bangladesh and abroad. It has triple benefit credit shield program.</p>', '<ul>\r\n	<li>Triple benefits insurance plan for the cardholders (See review for details)</li>\r\n	<li>Use of 100% limit through card cheque (See review for details)</li>\r\n	<li>Convenient payment option (See review for details)</li>\r\n	<li>You can set your own limit</li>\r\n	<li>Installment program is available</li>\r\n	<li>Cash withdraw 50% of the limit</li>\r\n</ul>', '<ul>\r\n	<li>Monthly fee 10 taka+vat for sms service &amp; transaction alert</li>\r\n	<li>0.35 paisa for every 100/= taka will be deducted for insurance program</li>\r\n	<li>Out of 18&nbsp;&nbsp;&nbsp; transactions, there must be 10 POS transaction to get waiver on annual fee.</li>\r\n</ul>', '<p><strong>FREE ACCESS AT BALAKA VIP LOUNGE</strong><br />\r\n&nbsp;NRB Bank Platinum Card give you and one companion free access to Balaka VIP Lounge @ Hazrat Shahjalal International Airport. Just show your NRB Bank Platinum Card and enjoy the comfort of Balaka Lounge and its services.<br />\r\n<strong>FREE MEET AND GREET SERVICE</strong><br />\r\nAs a valued NRB Bank Platinum Cardholder, you and one of your family member can enjoy the exclusive Passenger Handling Service during your departure from and arrival to Hazrat Shahjalal International Airport, Dhaka provided by Meet, Greet &amp; Assist Services (MG&amp;A). To avail, Just inform us by calling our 24 hour Call Centre @ 09666456000 24 hours before travelling.<br />\r\n<strong>INTEREST FREE PERIOD</strong><br />\r\nMaximum interest free period is 45 days and minimum is 15 days. Interest will not be charged if the outstanding balance is paid in full within due date. For partial payment and minimum payment, interest on retail transaction will be calculated from the date of posting.<br />\r\n<strong>BALANCE TRANSFER/TAKEOVER</strong><br />\r\nYou have the option to transfer your other bank credit card&rsquo;s current outstanding at a much lower interest rate of monthly 1.83%. We also offer zero processing charge for Balance Transfer/Takeover processing.<br />\r\n<strong>CREDIT ASSURANCE PROGRAM</strong><br />\r\n&raquo; Credit Assurance Program is a triple benefit insurance plan for the NRB Bank Cardholders. In the event of death or permanent total disability of the cardholder,<br />\r\n&raquo; The entire due against the credit card will be waived<br />\r\n&raquo; The Cardholder or his/her nominee will also receive equal amount to meet immediate family expenses.<br />\r\n&raquo; Additionally, the cardholder&rsquo;s nominee will receive BDT 10 Lac in case of accidental death or permanent disability under Credit Assurance Program.<br />\r\n&raquo; A very nominal premium of 35 paisa on outstanding amount or for every BDT 100 of your credit card outstanding balance will be applicable for this coverage.</p>', '3000', '15', 'First Card Free, Second Card 1500', '16', '15', '<p><strong>REQUIRED DOCUMENTS</strong><br />\r\n<u><em>For Salaried person</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP size photograph of the applicant &amp; nominee (for Credit Assurance Program) 1 copy each<br />\r\n&raquo; Last 6 month&#39;s Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Letter of introduction / Pay slip / e-pays slip<br />\r\n&raquo; Photocopy of Employee ID / LOI<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction letter of loan (if applicable)<br />\r\n<u><em>For Businessman</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP photograph of Applicant &amp; nominee (for Credit Assurance Program) 1 copy size each<br />\r\n&raquo; Last 12 months Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Valid Trade license<br />\r\n&raquo; Partnership Deed (for partnership), MOA &amp; A, (as applicable)<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction letter of loan (if applicable)<br />\r\n<u><em>For Self-employed professionals</em></u><br />\r\n&raquo; Duly filled in Credit Card Application form<br />\r\n&raquo; Photocopy of eTIN<br />\r\n&raquo; Valid Passport / National ID / Driving license copy<br />\r\n&raquo; PP photograph of Applicant &amp; nominee (for Credit Assurance Program) 1 copy size each<br />\r\n&raquo; Last 12 months Bank Statement with Bank official sign &amp; seal<br />\r\n&raquo; Certificate of Professional<br />\r\n&raquo; Proof of residence address with: Utility bill/PP/NID/Bank Statement/CPV<br />\r\n&raquo; Sanction Letter of Loan (if applicable)</p>', '28', '28', '28', '2.33', '2.33', '2.33', '50', '0', '0', 1, NULL, '2016-04-18 07:25:03', '2016-04-21 18:14:35');

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
(1, 'American Express', 1, 1, '2016-03-15 03:20:56', '2016-04-12 13:46:03'),
(2, 'MasterCard', 1, 1, '2016-03-15 03:21:03', '2016-04-12 13:45:30'),
(3, 'Visa', 1, 1, '2016-04-12 05:56:18', '2016-04-12 13:44:42');

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
(2, 'Titanium', 1, 1, '2016-03-08 02:48:36', '2016-04-12 13:47:22'),
(3, 'Signature', 1, 1, '2016-03-15 03:22:10', '2016-04-12 13:47:09'),
(4, 'Platinum', 1, 0, '2016-03-15 03:22:23', '2016-03-15 14:22:23'),
(5, 'Gold', 1, 1, '2016-03-15 03:22:43', '2016-04-12 13:46:46'),
(6, 'Classic', 1, 1, '2016-03-15 03:22:52', '2016-04-12 13:46:34');

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
(3, 'Professional', 1, 1, '2016-03-08 03:26:36', '2016-04-12 13:48:08'),
(4, 'Business Person', 1, 1, '2016-03-08 03:35:23', '2016-04-12 13:33:20'),
(5, 'Salaried Person', 1, 1, '2016-04-12 09:34:01', '2016-04-12 13:47:53');

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
(1, 'International Card', 1, 1, '2016-03-15 03:20:30', '2016-04-12 13:34:47'),
(2, 'Dual Card', 1, 1, '2016-03-15 03:20:41', '2016-04-12 13:49:27'),
(3, 'Local Card', 1, 1, '2016-04-09 03:55:22', '2016-04-12 13:48:40');

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
(2, 1, '1300', 'VAT', 'First Card Free, Second Card 600 + VAT', 'N/A', '0', '2', '2', 'applicable transaction fee', '2.5', '3', 'whichever is higher', '400', '10', '500', '350', '400', '10', '10', 'VAT', '0.35', 'on outstanding amount', '50', '1000', '500', '10', '5', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-04-09 05:09:16', '2016-04-18 15:31:20'),
(3, 2, '1300', 'VAT', 'First Card Free. Second Card 600 + VAT', '28', '28', '2', '2', 'applicable transaction fee', '2.5', '3', 'whichever is higher', '400', '10', '500', '350', '400', '10', '10', 'VAT', '0.35', 'on outstanding amount', '50', '100', '500', '10', '5', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-04-12 11:48:45', '2016-04-18 15:31:27'),
(4, 3, '1000', 'N/A', 'Free', 'N/A', '0', '2', '2', 'Applicable Transaction Fee', '2.5', '3', 'whichever is higher', '400', '10', '500', '350', '400', '10', 'Free', 'N/A', '0.35', 'on outstanding balance', 'Free', '1000', '500', '10', '5', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-04-18 04:24:54', '2016-04-18 15:31:41'),
(5, 4, '1500', 'N/A', 'Free', 'N/A', '2', '1', '2', '100', '2', '2.5', 'whichever is higher', '300', '10', '400', '300', '300', '10', 'N/A', 'N/A', 'N/A', 'N/A', '50', '150', '500', '10', '5', 'whichever is higher', '300', 'N/A', '1.5', '100', 1, NULL, '2016-04-18 04:48:54', '2016-04-18 08:48:54'),
(6, 5, '3000', '15', 'First Card Free, Second Card 1500', 'N/A', '0', '0.02', '2', '2', '2.5', '2.5', 'whichever is higher', '400', '10', '500', '300', '400', '10', 'Free', 'N/A', '0.35', 'on outstanding balance', 'Free', 'N/A', '500', '10', '5', 'whichever is higher', 'N/A', 'N/A', 'N/A', 'N/A', 1, NULL, '2016-04-18 07:29:57', '2016-04-18 11:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `card_info_card_reward`
--

CREATE TABLE `card_info_card_reward` (
  `id` int(10) NOT NULL,
  `card_info_id` int(10) NOT NULL,
  `card_reward_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(23, 4, 1, '2016-04-22 00:00:00', '2016-04-21 18:23:33'),
(24, 4, 4, '0000-00-00 00:00:00', '2016-04-21 18:23:33'),
(25, 4, 5, '2016-04-22 00:00:00', '2016-04-21 18:24:13'),
(26, 4, 12, '2016-04-22 00:00:00', '2016-04-21 18:24:13'),
(27, 4, 13, '2016-04-22 00:00:00', '2016-04-21 18:24:31'),
(28, 4, 17, '2016-04-22 00:00:00', '2016-04-21 18:24:31'),
(29, 4, 18, '2016-04-22 00:00:00', '2016-04-21 18:24:58'),
(30, 4, 20, '2016-04-22 00:00:00', '2016-04-21 18:24:58'),
(31, 4, 23, '2016-04-22 00:00:00', '2016-04-21 18:25:18'),
(32, 4, 22, '2016-04-22 00:00:00', '2016-04-21 18:25:18'),
(33, 5, 5, '2016-04-22 00:00:00', '2016-04-21 18:26:48'),
(34, 5, 4, '2016-04-22 00:00:00', '2016-04-21 18:26:48'),
(35, 5, 9, '2016-04-22 00:00:00', '2016-04-21 18:27:04'),
(36, 5, 10, '2016-04-22 00:00:00', '2016-04-21 18:27:04'),
(37, 5, 19, '2016-04-22 00:00:00', '2016-04-21 18:27:19'),
(38, 5, 17, '2016-04-22 00:00:00', '2016-04-21 18:27:19'),
(39, 5, 22, '2016-04-22 00:00:00', '2016-04-21 18:27:35'),
(40, 5, 23, '2016-04-22 00:00:00', '2016-04-21 18:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `card_info_card_user`
--

CREATE TABLE `card_info_card_user` (
  `id` int(10) NOT NULL,
  `card_info_id` int(10) NOT NULL,
  `card_user_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 4, 3, '2016-04-21 00:00:00', '2016-04-21 04:53:38'),
(9, 4, 4, '2016-04-21 00:00:00', '2016-04-21 04:53:56'),
(10, 4, 5, '2016-04-21 00:00:00', '2016-04-21 04:53:56'),
(11, 5, 3, '2016-04-22 00:00:00', '2016-04-21 18:49:23'),
(12, 5, 4, '2016-04-22 00:00:00', '2016-04-21 18:49:23'),
(13, 5, 5, '2016-04-22 00:00:00', '2016-04-21 18:49:37');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `card_card_informations`
--
ALTER TABLE `card_card_informations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_card_issuer`
--
ALTER TABLE `card_card_issuer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `card_card_type`
--
ALTER TABLE `card_card_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `card_card_user`
--
ALTER TABLE `card_card_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_credit_card_type`
--
ALTER TABLE `card_credit_card_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `card_fees_charges`
--
ALTER TABLE `card_fees_charges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `card_info_card_reward`
--
ALTER TABLE `card_info_card_reward`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `card_info_card_user`
--
ALTER TABLE `card_info_card_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `card_reward`
--
ALTER TABLE `card_reward`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
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

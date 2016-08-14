-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2016 at 05:57 PM
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
-- Table structure for table `home_loan_info`
--

CREATE TABLE IF NOT EXISTS `home_loan_info` (
`id` int(10) NOT NULL,
  `bank_id` int(10) DEFAULT NULL,
  `loan_type_id` int(10) DEFAULT NULL,
  `home_loan_looking_for_id` int(10) DEFAULT NULL,
  `home_loan_name` varchar(220) DEFAULT NULL,
  `loan_short_description` text,
  `min_loan_amount` varchar(15) DEFAULT NULL,
  `max_loan_amount` varchar(15) DEFAULT NULL,
  `interest_rate_min` varchar(10) DEFAULT NULL,
  `interest_rate_max` varchar(50) DEFAULT NULL,
  `interest_rate_average` varchar(50) DEFAULT NULL,
  `interest_rate_fixed` varchar(10) DEFAULT NULL,
  `is_fixed` int(2) DEFAULT NULL,
  `downpayment` varchar(10) DEFAULT NULL,
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

INSERT INTO `home_loan_info` (`id`, `bank_id`, `loan_type_id`, `home_loan_looking_for_id`, `home_loan_name`, `loan_short_description`, `min_loan_amount`, `max_loan_amount`, `interest_rate_min`, `interest_rate_max`, `interest_rate_average`, `interest_rate_fixed`, `is_fixed`, `downpayment`, `security_required`, `fees_and_charges`, `features`, `eligibility_for_applying`, `required_document`, `review`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(2, 8, 1, NULL, 'Home Loan', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n</ul>', '1000000', '10000000', '12', '14', '13', NULL, NULL, '30', 'Mortgage the Property 3rd Party Guarantee ', '<table border="1" cellpadding="0" cellspacing="0">	<tbody>		<tr>			<td style="width:319px">			<p>Processing Fee</p>			</td>			<td style="width:319px">			<p>2%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Early Settlement Fee</p>			</td>			<td style="width:319px">			<p>1%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Partial Payment Fee</p>			</td>			<td style="width:319px">			<p>1%</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Penalty Charge</p>			</td>			<td style="width:319px">			<p>2% on Overdue Amount</p>			</td>		</tr>		<tr>			<td style="width:319px">			<p>Quotation Change Fee</p>			</td>			<td style="width:319px">			<p>BDT 500 Per Quotation</p>			</td>		</tr>	</tbody></table><p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p><p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p><p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p><p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p><p>&nbsp;</p><p><strong>Features:</strong></p><p>&nbsp;</p><p>Minimum Loan Amount:&nbsp; 10 Lac</p><p>Maximum Loan Amount:&nbsp; 120 Lac</p><p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p><p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p><p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p><p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p><p>Try Party Agreement Allowed up to: 3-24 Month</p><p>Lower Interest Rate</p><p>Availability of Grace Period</p><p>Lower Processing Fee</p><p>Life Insurance Coverage</p><p>Flexible Payment Schedule</p><p>Joint Applicant Allowed</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>\r\n\r\n<p>Try Party Agreement Allowed up to: 3-24 Month</p>\r\n\r\n<p>Lower Interest Rate</p>\r\n\r\n<p>Availability of Grace Period</p>\r\n\r\n<p>Lower Processing Fee</p>\r\n\r\n<p>Life Insurance Coverage</p>\r\n\r\n<p>Flexible Payment Schedule</p>\r\n\r\n<p>Joint Applicant Allowed</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>', '<p>test</p>\r\n', 1, NULL, '2016-08-09 05:16:32', '2016-08-09 15:31:30'),
(3, 8, 1, NULL, 'home loan', '<ul>\r\n	<li>Try Party Agreement</li>\r\n</ul>', '1000000', '4000000', '12', '14', '13', NULL, NULL, '30', '<ul>\r\n	<li>Try Party Agreement</li>\r\n</ul>', '<p>Processing Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2%</p>\r\n\r\n<p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p>\r\n\r\n<p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>', '<p>sddga</p>\r\n', 1, NULL, '2016-08-09 05:36:52', '2016-08-09 15:36:52'),
(4, 8, 1, NULL, 'home loan', '<p>sffaef</p>', '1000000', '4000000', '14', '14', '13', NULL, NULL, '30', '<p>sdfggsdaag</p>', '<p>Processing Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2%</p>\r\n\r\n<p>Early Settlement Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Partial Payment Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1%</p>\r\n\r\n<p>Penalty Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2% on Overdue Amount</p>\r\n\r\n<p>Quotation Change Fee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BDT 500 Per Quotation</p>\r\n\r\n<p>&nbsp;</p>', '<p>Minimum Loan Amount:&nbsp; 10 Lac</p>\r\n\r\n<p>Maximum Loan Amount:&nbsp; 120 Lac</p>\r\n\r\n<p>Minimum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5 Year</p>\r\n\r\n<p>Maximum Term:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 20 Year</p>\r\n\r\n<p>Down payment (%):&nbsp;&nbsp;&nbsp; 30</p>\r\n\r\n<p>Grace Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Year</p>\r\n\r\n<p>Try Party Agreement Allowed up to: 3-24 Month</p>\r\n\r\n<p>Lower Interest Rate</p>\r\n\r\n<p>Availability of Grace Period</p>\r\n\r\n<p>Lower Processing Fee</p>\r\n\r\n<p>Life Insurance Coverage</p>\r\n\r\n<p>Flexible Payment Schedule</p>', '<p>Minimum Income:</p>\r\n\r\n<ul>\r\n	<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>\r\n	<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>\r\n	<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>\r\n	<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Minimum Experience:</p>\r\n\r\n<ul>\r\n	<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>\r\n	<li>For Businessmen one (1) year experience in the same line of business.</li>\r\n	<li>For Landlord/Landlady having 6 months rental income continuation.</li>\r\n</ul>\r\n\r\n<p>Age Requirement:</p>\r\n\r\n<ul>\r\n	<li>Minimum: 22 Years (at the time of application).</li>\r\n	<li>Maximum: 65 years (at the end of loan tenor).</li>\r\n</ul>\r\n\r\n<p>(Age limit can be relaxed in case of joint applicant provided).</p>\r\n\r\n<p>&nbsp;</p>', '<ul>\r\n	<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>\r\n	<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>\r\n	<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>\r\n	<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>\r\n	<li>Latest tax certificate/E-TIN.</li>\r\n	<li>Personal net worth statements of applicant (s) and guarantor (s).</li>\r\n	<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>\r\n	<li>Rent or lease agreement of house/property (if applicable).</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Salaried Person/ Self Employed</p>\r\n\r\n<ul>\r\n	<li>Salary Certificate/ Letter of Introduction.</li>\r\n	<li>Offer letter/Release letter from previous employer to prove service experience.</li>\r\n	<li>Professional certificate issued by concerned institution.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Businessmen</p>\r\n\r\n<ul>\r\n	<li>Copy of trade license.</li>\r\n	<li>Memorandum of Association and Articles of Association of the company.</li>\r\n	<li>Certificate of Incorporation.</li>\r\n	<li>Latest form xii.</li>\r\n	<li>Partnership deed.</li>\r\n</ul>\r\n\r\n<p>Additional documents required for Landlord/Landlady</p>\r\n\r\n<ul>\r\n	<li>Title deed of premises / property.</li>\r\n	<li>Valid rental deed with tenants.</li>\r\n	<li>Utility bill copy.</li>\r\n	<li>Ground rent payment and municipal tax payment receipt.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '<p>gdsgaf</p>\r\n', 1, NULL, '2016-08-09 05:46:34', '2016-08-09 15:46:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_loan_info`
--
ALTER TABLE `home_loan_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_loan_info`
--
ALTER TABLE `home_loan_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

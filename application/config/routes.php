<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'En';
$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = TRUE;
$route['en/ajax_send_comparison'] = "en/ajax_send_comparison";
$route['en/ajax_get_subscribe'] = "en/ajax_get_subscribe";
$route['en/auto_loan_chart'] = "en/auto_loan_chart";
$route['en/home_loan_chart'] = "en/home_loan_chart";
$route['en/personal_loan_chart'] = "en/personal_loan_chart";
$route['en/fdr_iframe'] = "en/fdr_iframe";
$route['en/(:any)'] = "My404";
$route['/'] = "en/index/";
$route['debit-cards'] = "en/debit_card";
$route['compare-debit-cards'] = "en/all_debit_card";
$route['compare-debit-cards/(:any)'] = "en/debit_card_details/$1";
$route['credit-cards'] = "en/credit_card";
$route['compare-credit-cards'] = "en/all_credit_card";
$route['compare-credit-cards/(:any)'] = "en/card_details/$1";
$route['home-loan'] = "en/home_loan";
$route['compare-home-loans'] = "en/all_home_loan";
$route['compare-home-loans/(:any)'] = "en/home_loan_compare/$1";
$route['personal-loan'] = "en/personal_loan";
$route['compare-personal-loans'] = "en/all_personal_loan";
$route['compare-personal-loans/(:any)'] = "en/personal_loan_compare/$1";
$route['auto-loan'] = "en/car_loan";
$route['compare-auto-loans'] = "en/all_car_loan";
$route['compare-auto-loans/(:any)'] = "en/car_loan_compare/$1";
$route['education-loan'] = "en/education_loan";
$route['compare-education-loans'] = "en/all_education_loan";
$route['compare-education-loans/(:any)'] = "en/education_loan_compare/$1";
$route['fdr'] = "en/fdr_account";
$route['compare-fdrs'] = "en/all_fdr";
$route['compare-fdrs/(:any)'] = "en/fdr_compare/$1";
$route['dps'] = "en/dps_account";
$route['compare-dps'] = "en/all_dps";
$route['compare-dps/(:any)'] = "en/dps_compare/$1";
$route['millionaire'] = "en/millionaire";
$route['compare-millionaires'] = "en/all_millionaire";
$route['compare-millionaires/(:any)'] = "en/millionaire_compare/$1";
$route['money-maximizer'] = "en/money_maximizer";
$route['compare-money-maximizer'] = "en/all_money_maximizer";
$route['compare-money-maximizer/(:any)'] = "en/money_maximizer_compare/$1";
$route['monthly-benefit'] = "en/monthly_benefit";
$route['compare-monthly-benefit'] = "en/all_monthly_benefit";
$route['compare-monthly-benefit/(:any)'] = "en/monthly_benefit_compare/$1";
$route['savings-account'] = "en/savings_account";
$route['compare-savings-account/(:any)'] = "en/saving_account_compare/$1";
$route['current-account'] = "en/current_account";
$route['compare-current-account/(:any)'] = "en/current_account_compare/$1";
$route['snd'] = "en/snd_account";
$route['compare-snd-account/(:any)'] = "en/snd_compare/$1";
$route['export-import'] = "en/export_import";

$route['banks'] = "en/bank_details_landing";
//$route['all-bank-details'] = "en/bank_details_landing";
$route['banks/(:any)'] = "en/bank_details/$1";
$route['bank-details/(:any)'] = "en/bank_details/$1";
$route['about-us'] = "en/about_us";
$route['terms-condition'] = "en/terms_condition";
$route['privacy-policy'] = "en/PrivacyPolicy";
$route['currency-details'] = "en/currency_details";

$route['loan-calculator'] = "en/loan_calculator";
$route['personal-loan-calculator'] = "en/personal_loan_calculator";
$route['auto-loan-calculator'] = "en/auto_loan_calculator";
$route['student-loan-calculator'] = "en/student_loan_calculator";
/*
$default_controller = "En";
$controller_exceptions = array('admin','forums');

$route['default_controller'] = $default_controller;
$route["^((?!\b".implode('\b|\b', $controller_exceptions)."\b).*)$"] = $default_controller.'/$1';*/

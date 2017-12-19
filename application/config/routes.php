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
//$route['index'] = "index";
$route['/'] = "en/index/";
$route['debit-card'] = "en/debit_card";
$route['credit-cards'] = "en/credit_card";
$route['credit-cards/compare-credit-cards'] = "en/all_credit_card";
$route['credit-cards/compare-credit-cards/(:any)'] = "en/card_details/$1";
$route['home-loan'] = "en/home_loan";
$route['personal-loan'] = "en/personal_loan";
$route['auto-loan'] = "en/car_loan";
$route['education-loan'] = "en/education_loan";
$route['fdr'] = "en/fdr";
$route['dps'] = "en/dps";
$route['millionaire'] = "en/millionaire";
$route['money-maximizer'] = "en/money_maximizer";
$route['monthly-benefit'] = "en/monthly_benefit";
$route['savings-account'] = "en/savings_account";
$route['current-account'] = "en/current_account";
$route['snd'] = "en/snd";
$route['export-import'] = "en/export_import";
$route['all-bank-details'] = "en/bank_details_landing";
$route['bank-details/(:any)'] = "en/bank_details/$1";
/*
$default_controller = "En";
$controller_exceptions = array('admin','forums');

$route['default_controller'] = $default_controller;
$route["^((?!\b".implode('\b|\b', $controller_exceptions)."\b).*)$"] = $default_controller.'/$1';*/
